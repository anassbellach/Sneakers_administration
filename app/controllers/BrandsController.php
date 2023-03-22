<?php
class BrandsController extends Controller
{

    private BrandModel $BrandModel;

    public function __construct()
    {
        $this->BrandModel = $this->model('BrandModel');

    }

    public function index()
    {
        $Brands = $this->BrandModel->getAllBrands();

        $data = [
            'title' => 'Brands',
            'Brands' => $Brands,
        ];

        $this->view('Brands/index', $data);
    }

    public function create() {

        $brandId = RandomGenerator::generateRandomString(4);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $this->BrandModel->createBrands($brandId, $post);

            header("Location: " . URLROOT . "BrandsController/index");
        }

        $data = [
            'title' => 'Brands',
            'brandId' => $brandId,
        ];

        $this->view("Brands/create", $data);
    }

    public function delete() {

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $get = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $this->BrandModel->deleteBrand($get);

            header("Location: " . URLROOT . "BrandsController/index");
        }
    }

    public function update() {

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $get = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $userid = $get["userid"];
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $this->BrandModel->updateBrand($post);

            header("Location: " . URLROOT . "BrandsController/index");
        }

        $data = [
            'title' => 'Brands',
            'userid' => $userid,
        ];

        $this->view("Brands/update", $data);
    }
}