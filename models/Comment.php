<?php


class Comment {

    // we are simulating simple returns - with method stubs
    // normally this Model class would receive a connection to a database from it's
    // paired Controller and perform actions against the corresponding table

    // private $connection;
    // private $table = 'comments';

    public $id;
    public $task_id;
    public $task_title;
    public $title;
    public $slug;
    public $body;
    public $author_id;
    public $created_at;
    public $updated_at;


    // get all comments
    public function read() {

        return json_encode([
            [
                "id" => 13,
                "post_id" => 9, 
                "title" =>'PHP Frameworks #1',
                "slug" => 'PHP-Frameworks-#1',
                "body" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At delectus aliquid suscipit obcaecati, eligendi laboriosam, nihil saepe, dolorum recusandae ea soluta neque similique laudantium! Dolore recusandae natus ex.',
                "author_id" => 2,
            ],
            [
                "id" => 14,
                "post_id" => 9, 
                "title" =>'PHP Frameworks #2',
                "slug" => 'PHP-Frameworks-#2',
                "body" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto accusamus animi iste adipisci est architecto voluptate mollitia in blanditiis, nesciunt repudiandae asperiores quo a?',
                "author_id" => 2,
            ],
            [
                "id" => 15,
                "post_id" => 9, 
                "title" =>'PHP Frameworks #3',
                "slug" => 'PHP-Frameworks-#3',
                "body" => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi vitae cum, necessitatibus libero beatae ea delectus? Eaque, at dolores.',
                "author_id" => 2,
            ],
            [
                "id" => 16,
                "post_id" => 9, 
                "title" =>'PHP Frameworks #4',
                "slug" => 'PHP-Frameworks-#4',
                "body" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                "author_id" => 2,
            ],
        ]);

    }  

    // get single comment
    public function read_single() {

        return json_encode([
            "id" => 15,
            "post_id" => 9, 
            "title" =>'PHP Frameworks #3',
            "slug" => 'PHP-Frameworks-#3',
            "body" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            "author_id" => 2,
        ]);
    }

    // create comment
    public function create() {

        $new_comment_id = 997;
        echo json_encode([
            'message' => 'Comment was successfully created.',
            "id" => $new_comment_id
        ]);
    } 

    // update comment
    public function update() {

        $comment_id = 998;
        echo json_encode([
            'message' => 'Comment was successfully updated.',
            "id" => $comment_id
        ]);
    }

    // delete comment
    public function delete() {

        $comment_id = 999;
        echo json_encode([
            'message' => 'Comment was successfully deleted.',
            "id" => $comment_id
        ]);
    }

}