<?php

class sneakersModel {

    public $db;

    public function __construct($db = NULL)
    {
        if (isset($db)) {
            $this->db = $db;
        } else {
            $this->db = new Database;
        }
    }

    public function getAllSneakers() {

        $this->db->query("SELECT sneakersId, sneakersBrandId, sneakersName, sneakersGender, sneakersReleaseDate FROM sneakers");

        return $this->db->resultSet();
    }

}