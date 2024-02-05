<?php
require_once 'Media.php';

class Album extends Media {
    private $artist;
    private $songs; 

    public function __construct($title, $artist, array $songs) {
        parent::__construct($title);
        $this->artist = $artist;
        $this->songs = $songs;
    }

    public function getArtist() {
        return $this->artist;
    }

    public function setArtist($artist) {
        $this->artist = $artist;
    }

    public function getSongs() {
        return $this->songs;
    }

    public function setSongs(array $songs) {
        $this->songs = $songs;
    }
}
