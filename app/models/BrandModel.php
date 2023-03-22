<?php

class BrandModel {

    public $db;

    public function __construct($db = NULL)
    {
        if (isset($db)) {
            $this->db = $db;
        } else {
            $this->db = new Database;
        }
    }

    public function getAllBrands() {

        $this->db->query("SELECT brandsId, brandsName FROM brands");

        return $this->db->resultSet();
    }

    public function createBrands($brandId, $post) {

        $this->db->query('INSERT INTO brands (`brandsId`, `brandsName`) VALUES (:brandId, :brandsName )');

        $this->db->bind(":brandId", $brandId);
        $this->db->bind(":brandsName", $post["brandsName"]);

        $this->db->execute();
    }

    public function deleteBrand($get) {

        $this->db->query("DELETE FROM brands WHERE brandsId = :brandsId");

        $this->db->bind(":brandsId", $get['userid']);

        $this->db->execute();
    }

    public function updateBrand($post) {
var_dump($post);
exit();
        $this->db->query("Update brands SET brandsName = :brandsName WHERE brandsId = :brandsId");

        $this->db->bind(":brandsId", $post["brandId"]);
        $this->db->bind(":brandsName", $post["brandsName"]);

        $this->db->execute();

    }

}