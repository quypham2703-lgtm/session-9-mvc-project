<?php
require_once "Model.php";

class ProductModel extends Model {

    public function __construct() {
        $this->data = [
            ["id" => 1, "name" => "iPhone"],
            ["id" => 2, "name" => "Samsung"],
            ["id" => 3, "name" => "Xiaomi"]
        ];
    }

    public function validate($product) {
        return !empty($product['name']);
    }
}
