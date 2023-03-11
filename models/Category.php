<?php


class Category {

    // we are simulating simple returns - with method stubs
    // normally this Model class would receive a connection to a database from it's
    // paired Controller and perform actions against the corresponding table

    // private $connection;
    // private $table = 'categories';

    public $id;
    public $project_id;
    public $project_title;
    public $title;
    public $slug;
    public $body;
    public $author_id;
    public $created_at;
    public $updated_at;


    // get all categories
    public function read() {

        return json_encode([
            [
                "id" => 1,
                "title" => 'JavaScript',
                "slug" => 'JavaScript',
            ],
            [
                "id" => 2,
                "title" => 'React JS',
                "slug" => 'React-JS',
            ],
            [
                "id" => 3,
                "title" => 'PHP',
                "slug" => 'PHP',
            ],
            [
                "id" => 4,
                "title" => 'CSS',
                "slug" => 'CSS',
            ],
        ]);
    }


    // get single category
    public function read_single() {

        return json_encode([
                "id" => 1,
                "title" => 'JavaScript',
                "slug" => 'JavaScript',
        ]);

    }

    // create category
    public function create() {

        $new_category_id = 997;
        echo json_encode([
            'message' => 'Category was successfully created.',
            "id" => $new_category_id
        ]);
    } 
    
    // update category
    public function update() {

        $category_id = 998;
        echo json_encode([
            'message' => "Category was successfully updated.",
            "id" => $category_id
        ]);
    }

    // delete category
    public function delete() {

        $category_id = 999;
        echo json_encode([
            'message' => "Category was successfully deleted.",
            "id" => $category_id
        ]);
    }

}