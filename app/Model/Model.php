<?php
abstract class Model {
    protected $data = [];

    public function all() {
        return $this->data;
    }
}
