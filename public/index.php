<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

define('APP_PATH', realpath('../app').'/');
define('CONTROLLERS_PATH', realpath('../controllers').'/'); 

// register locations for class autoload
spl_autoload_register(require '../app/'.'autoloader'.'.php');

// we send errors as json
set_exception_handler("ErrorHandler::handleException");
set_error_handler("ErrorHandler::handleError");
                   

// router
require_once '../router/BareBonesRouter.php';
$router = new BareBonesRouter();


// routes

    // root - get categories

        $router->get('/',[CategoryController::class,'read']);

    // categories

        // - categories
        $router->get('/categories}',[CategoryController::class,'read']);

        // - single category
        $router->get('/{category:slug}',[CategoryController::class,'read_single']);

        // - create a category
        $router->post('/categories',[CategoryController::class,'create']);

        // - update a category
        $router->put('/categories/{category:slug}',[CategoryController::class,'update']);

        // - delete a category - assumes 'id' in body - see variation in 'delete a Post'
        $router->delete('/categories',[CategoryController::class,'delete']);

    // posts

        // - category posts
        $router->get('/{category:slug}/posts',[PostController::class,'read']);

        // - category single post
        $router->get('/{category:slug}/{post:slug}',[PostController::class,'read_single']);

        // - create a post
        $router->post('/{category:slug}/posts',[PostController::class,'create']);

        // - update a post
        $router->put('/{category:slug}/post/{post:slug}',[PostController::class,'update']);

        // - delete a post - uses 'slug' route parameter to identify Post
        $router->delete('/{category:slug}/post/{post:slug}',[PostController::class,'delete']);

    // comments

        // - category single post - all comments
        $router->get('/{category:slug}/{post:slug}/comments',[CommentController::class,'read']);

        // - category single post - single comments
        $router->get('/{category:slug}/{post:slug}/comments/{comment:slug}',[CommentController::class,'read_single']);

        // - create a comment
        $router->post('/{category:slug}/{post:slug}/comments',[CommentController::class,'create']);

        // - update a comment
        $router->put('/{category:slug}/{post:slug}/comment/{comment:slug}',[CommentController::class,'update']);

        // - delete a comment - uses 'slug' route parameter to identify Post
        $router->delete('/{category:slug}/{post:slug}/comment/{comment:slug}',[CommentController::class,'delete']);


    // 404 Not Found

        $router->notFound();

