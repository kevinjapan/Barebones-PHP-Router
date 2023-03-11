<?php
include_once '../models/Category.php';



class CategoryController {

    // we are simulating a simple MVC framework - with method stubs in our Models.
    // normally this Controller class would implement a connection to a database 
    // and pass that connection to the paired Model class constructor.

    // private $database;
    // private $db;

    public function read() {

        $category = new Category();
        echo($category->read());
    }

    public function read_single($route_parameters) {

        $category = new Category();
        echo($category->read_single());
    }

    public function create() {

        $category = new Category();
        echo($category->create());
    }

    public function update() {

        $category = new Category();
        echo($category->update());
    }

    public function delete() {

        $category = new Category();
        echo($category->delete());
    }

}