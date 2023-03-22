<?php
class SneakersController extends Controller
{

    private SneakerModel $sneakerModel;
    private BrandModel $brandModel;

    public function __construct()
    {
        $this->sneakerModel = $this->model('SneakerModel');
        $this->brandModel = $this->model('BrandModel');
    }

    public function index()
    {
        $Sneakers = $this->sneakerModel->getAllSneakers();

        $data = [
            'title' => 'Sneakers',
            'Sneakers' => $Sneakers,
        ];

        $this->view('Sneakers/index', $data);
    }

    public function create() {
        $sneakersId = RandomGenerator::generateRandomString(4);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $releaseDate = strtotime(str_replace('/', '-', $post['releaseDate'] . "15:00"));

            $this->sneakerModel->createSneakers($post, $sneakersId, $releaseDate);

            header("Location: " . URLROOT . "SneakersController/index");

        } else {
            $allBrands = $this->brandModel->getAllBrands();

        }$data = [
            'title' => 'Brands',
            'allBrands' => $allBrands,
            'sneakersId' => $sneakersId,
        ];

        $this->view("Sneakers/create", $data);
    }

    public function delete() {

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $get = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $this->sneakerModel->deleteSneaker($get);

            header("Location: " . URLROOT . "SneakersController/index");
        }
    }

    public function update() {

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $get = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $userid = $get["userid"];
//            var_dump($userid = $get["userid"]);
//            exit();
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $this->sneakerModel->updateSneaker($post);

            header("Location: " . URLROOT . "SneakersController/index");
        }
        $Brands = $this->brandModel->getAllBrands();
        $data = [
            'title' => 'Sneakers',
            'userid' => $userid,
            'allBrands' => $Brands,
        ];

        $this->view("Sneakers/update", $data);
    }

}