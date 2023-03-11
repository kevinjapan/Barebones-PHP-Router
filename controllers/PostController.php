<?php
include_once '../models/Post.php';



class PostController {

    // we are simulating a simple MVC framework - with method stubs in our Models.
    // normally this Controller class would implement a connection to a database 
    // and pass that connection to the paired Model class constructor.

    // private $database;
    // private $db;

    public function read() {

        $post = new Post();
        echo($post->read());
    }

    public function read_single($route_parameters) {

        $post = new Post();
        echo($post->read_single());
    }

    public function create() {

        $post = new Post();
        echo($post->create());
    }

    public function update() {
        
        $post = new Post();
        echo($post->update());
    }

    public function delete() {

        $post = new Post();
        echo($post->delete());
    }
}