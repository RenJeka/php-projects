<?php

include_once "connect.php";
include_once "posts.php";
$dbInstance = getDBInstance();
$routesString = '';
$routes = [];
$id = '';
$method = $_SERVER['REQUEST_METHOD'];
$inputParameters = [
    'title' => '',
    'body' => ''
];
$res = [
    "status" =>'',
    "message" => ''
];


/**
 * Help to fill route's segments into global variables
 * @return bool 'true', when routes (uri get segments) is existing. 'false' if no routes
 */
function fillRoutes(){
    global $routes, $id;
    if (isset($_GET['routes'])) {
        $routesString = $_GET['routes'];
        $routes = explode('/', $routesString);
        $id = $routes[1] ?? '';
        return true;
    } else {
        return false;
    }
}

function sendResponseForInvalidRequest(){
    http_response_code(400);
    $res["status"] = false;
    $res["message"] = "Wrong request";
    echo json_encode($res);
    exit();
}

if ( $method === 'GET' && fillRoutes()) {



    // Return data to the client
    switch ($routes) {
        // return single post (by id)
        case ($routes[0] === 'post' && !empty($id)):
        {
            header('Content-type: application/json');
            $post = getPostByID($id);
            if (!empty($post)) {
                echo json_encode($post);
                break;
            } else {
                http_response_code(404);
                $res["status"] = false;
                $res["message"] = "Page not found!";
                echo json_encode($res);
                break;
            }

        }
        // return all posts
        case ($routes[0] === 'allposts'):
        {
            header('Content-type: application/json');
            $posts = getAllPosts();
            echo json_encode($posts);
            break;
        }
        case ($routes[0] === 'deletepost' && !empty($id)):
        {
            // deleting post logic
        }
        default :
        {
            sendResponseForInvalidRequest();
        }
    };
} elseif ($method === 'POST' && fillRoutes()) {

    switch ($routes){
        // add post to DB and return response with created post ID
        case ($routes[0] === 'addpost'): {
            $inputParameters['title'] = trim($_POST['title']);
            $inputParameters['body'] = trim($_POST['body']);
            $res["status"] = addNewPost($inputParameters);
            $res["message"] = "Post added successfully";
            $res["postID"] = getLastInsertedID();
            http_response_code(201);
            echo json_encode($res);
        };

        // TODO: need test this case
        // edit post to DB and return response with edited post ID
        case ($routes[0] === 'editpost' && !empty($id)): {
            $inputParameters['title'] = trim($_POST['title']);
            $inputParameters['body'] = trim($_POST['body']);
            $inputParameters['id_post'] = (int)$id; // TODO: need CheckID!

            $res["status"] = editPost($inputParameters);
            $res["message"] = "Post edited successfully";
            $res["postID"] = getLastInsertedID();
            http_response_code(200 );
            echo json_encode($res);
        };
        default: {
            sendResponseForInvalidRequest();
        }
    }

}




