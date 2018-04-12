<?php
spl_autoload_register(function($class){
    $class = str_replace('Composite\\', '', $class);
    require_once $class . '.php';
});

$songOne = new \Composite\Song('Lost in Stereo');
$songTwo = new \Composite\Song('Running From Lions');
$songThree = new \Composite\Song('Gute');
$playlistOne = new \Composite\Playlist();
$playlistTwo = new \Composite\Playlist();
$playlistThree = new \Composite\Playlist();
$playlistTwo->addSong($songOne);
$playlistTwo->addSong($songTwo);
$playlistThree->addSong($songThree);
$playlistOne->addSong($playlistTwo);
$playlistOne->addSong($playlistThree);
$playlistOne->play();
