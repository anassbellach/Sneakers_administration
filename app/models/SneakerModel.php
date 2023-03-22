<?php

class sneakerModel {

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

        $this->db->query("SELECT s.sneakersId, s.sneakersBrandId, s.sneakersName, s.sneakersGender, s.sneakersReleaseDate, b.brandsName FROM sneakers as s 
                                INNER JOIN brands as b
                                ON b.brandsId = s.sneakersBrandId");

        return $this->db->resultSet();
    }

    public function createSneakers($post, $sneakersId, $releaseDate) {

        $this->db->query('INSERT INTO sneakers (`sneakersId`, `sneakersBrandId`, `sneakersName`, `sneakersGender`, `sneakersReleaseDate`) 
                                VALUES (:sneakersId, :sneakersBrandId,  :sneakersName, :sneakersGender, :sneakersReleaseDate)');

        $this->db->bind(":sneakersId", $sneakersId);
        $this->db->bind(":sneakersBrandId", $post["brand"]);
        $this->db->bind(":sneakersName", $post["sneakersName"]);
        $this->db->bind(":sneakersGender", $post["gender"]);
        $this->db->bind(":sneakersReleaseDate", $releaseDate);

        $this->db->execute();
    }

    public function deleteSneaker($get) {

        $this->db->query("DELETE FROM Sneakers WHERE sneakersId = :sneakersId");

        $this->db->bind(":sneakersId", $get['userid']);

        $this->db->execute();
    }

    public function updateSneaker($post) {

        $this->db->query("Update sneakers 
                                SET sneakersBrandId  = :sneakersBrandId, 
                                    sneakersName  = :sneakersName, 
                                    sneakersGender = :sneakersGender, 
                                    sneakersReleaseDate = :sneakersReleaseDate  
                                WHERE sneakersId = :sneakersId");

        $this->db->bind(":sneakersId", $post["sneakerId"]);
        $this->db->bind(":sneakersBrandId", $post["brand"]);
        $this->db->bind(":sneakersName", $post["sneakersName"]);
        $this->db->bind(":sneakersGender", $post["gender"]);
        $this->db->bind(":sneakersReleaseDate", strtotime($post["releaseDate"]));

        $this->db->execute();

    }


}