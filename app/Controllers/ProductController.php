<?php
require_once "../app/models/ProductModel.php";

class ProductController {

    public function index() {
        $model = new ProductModel();
        $products = $model->all();

        require_once "../app/views/product/index.php";
    }
}
