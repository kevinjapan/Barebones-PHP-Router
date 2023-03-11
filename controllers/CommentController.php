<?php
include_once '../models/Comment.php';



class CommentController {

    // we are simulating a simple MVC framework - with method stubs in our Models.
    // normally this Controller class would implement a connection to a database 
    // and pass that connection to the paired Model class constructor.

    // private $database;
    // private $db;

    public function read() {

        $comment = new Comment();
        echo($comment->read());
    }

    public function read_single($route_parameters) {

        $comment = new Comment();
        echo($comment->read_single());
    }

    public function create() {

        // example validation
        
        $comment = new Comment();
        echo($comment->create());
    }

    public function update() {
        
        $comment = new Comment();
        echo($comment->update());
    }

    public function delete() {

        $comment = new Comment();
        echo($comment->delete());
    }
}