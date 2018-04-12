<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 12.4.2018 г.
 * Time: 19:37
 */

namespace Composite;


class Playlist implements Music
{
    /**
     * @var Music[] $songs
     */
    private $songs = [];

    public function addSong(Music $content): bool
    {
        $this->songs[spl_object_hash($content)] = $content;
        return true;
    }

    public function removeItem(Music $content): bool
    {
        uniqid($this->songs[spl_object_hash($content)]);
        return true;
    }

    public function play()
    {
        foreach($this->songs as $key => $content){
            $content->play();
        }
    }
}