<?php
class Controller
{
    public string $controllerName;
    /**
     * Path towards the controller (without actions appended)
     */
    public string $controllerUrlPath;

    public function __construct() {
        $this->controllerName = str_replace("Controller", "", get_class($this));
        $this->controllerUrlPath = URLROOT . $this->controllerName . 'Controller/';
    }

    public function model($model, Database $db = null)
    {
        require_once(APPROOT . '/models/' . $model . '.php');
        if ($db != null) {
            return new $model($db);
        } else {
            return new $model;
        }
    }

    public function view($view, $data = [])
    {
        require(APPROOT . '/views/Includes/header.php');
        if (file_exists(APPROOT . '/views/' . $view . '.php')) {
            require_once(APPROOT . '/views/' . $view . '.php');
        } else {
            echo 'View does not exist.';
        }
        require(APPROOT . '/views/Includes/footer.php');
    }

    public function error($errorMessage, $data = array()) {
        http_response_code(400);
        $data['errorMessage'] = $errorMessage;
        $this->view('_base/error', $data);
    }

    public function notFound() {
        http_response_code(404);
        $this->view('_base/notfound');
    }

    public function ChangeQuery($array_of_queries_to_change)
    {
        $array_of_queries_to_change_count = count($array_of_queries_to_change); // count how much db we have in total. count the inactives too. 
        $new_get = $_GET;
        $i0 = 0;

        while ($i0 < $array_of_queries_to_change_count) {
            $array_of_keys_of_array_of_queries_to_change = array_keys($array_of_queries_to_change);
            $new_get[$array_of_keys_of_array_of_queries_to_change[$i0]] = $array_of_queries_to_change[$array_of_keys_of_array_of_queries_to_change[$i0]];
            $i0++;
        }

        $query = "?" . http_build_query($new_get);
        return $query;
    }

    public function buildPageTitle(array $data) {
        if (!array_key_exists("title", $data)) {
            return "";
        }

        $title = $data["title"];
        return "$title - ";
    }


}
