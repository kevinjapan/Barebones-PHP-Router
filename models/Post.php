<?php


class Post {

    // we are simulating simple returns - with method stubs
    // normally this Model class would receive a connection to a database from it's
    // paired Controller and perform actions against the corresponding table

    // private $connection;
    // private $table = 'posts';

    public $id;
    public $title;
    public $slug;
    public $body;
    public $author;
    public $created_at;
    public $updated_at;


    // get all posts
    public function read() {

        return json_encode([
            [
                "id" => 1,
                "category_id" => 1,
                "title" => 'Javascript Arrays', 
                "slug" => 'Javascript-Arrays',
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis explicabo deserunt quod mollitia tempora ducimus iste, optio eius magni fuga laudantium at? Voluptatibus natus odit voluptatum accusamus necessitatibus modi doloribus!",
                 "author_id" => 1,
            
            ],
            [
                "id" => 2,
                "category_id" => 1,
                "title" => 'async await',
                "slug" => 'async-await',
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quae, fuga voluptatum tenetur sapiente excepturi corrupti minus repudiandae ipsam officia reprehenderit atque harum saepe veniam quas, suscipit architecto. Quam, qui eaque repudiandae dignissimos saepe molestiae placeat labore illo id quasi suscipit molestias et ducimus incidunt est.",
                 "author_id" => 3,
            
            ],
            [
                "id" => 3,
                "category_id" => 1,
                "title" => 'Javascript Modules',
                "slug" =>  'Javascript-Modules',
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae animi autem ratione iure at natus praesentium cumque numquam optio dolor, sed corporis molestias incidunt error ipsa ex eveniet blanditiis amet quis beatae ullam illum, qui possimus quisquam. Amet, nostrum. At, dolores! Veritatis ipsum laborum dolores corporis quis vero provident natus nihil soluta officia.",
                 "author_id" => 1,
        
            ],
            [
                "id" => 4,
                "category_id" => 3,
                "title" => 'PHP Frameworks',
                "slug" =>  'PHP-Frameworks',
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae animi autem ratione iure at natus praesentium cumque numquam optio dolor, sed corporis molestias incidunt error ipsa ex eveniet blanditiis amet quis beatae ullam illum, qui possimus quisquam. Amet, nostrum. At, dolores! Veritatis ipsum laborum dolores corporis quis vero provident natus nihil soluta officia.",
                 "author_id" => 1,
        
            ],
        ]);
    }  

    // get single post
    public function read_single() {
        
        return json_encode([
                "id" => 2,
                "category_id" => 1,
                "title" => 'async await',
                "slug" => 'async-await',
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quae, fuga voluptatum tenetur sapiente excepturi corrupti minus repudiandae ipsam officia reprehenderit atque harum saepe veniam quas, suscipit architecto. Quam, qui eaque repudiandae dignissimos saepe molestiae placeat labore illo id quasi suscipit molestias et ducimus incidunt est.",
                 "author_id" => 3,
        ]);

    }

    // create post
    public function create() {

        $new_post_id = 997;
        echo json_encode([
            'message' => 'Post was successfully created.',
            "id" => $new_post_id
        ]);
    } 
    
    // update post
    public function update() {

        $post_id = 998;
        echo json_encode([
            'message' => 'Post was successfully updated.',
            "id" => $post_id
        ]);
    }

    // delete post
    public function delete() {

        $post_id = 999;
        echo json_encode([
            'message' => 'Post was successfully deleted.',
            "id" => $post_id
        ]);
    }

}