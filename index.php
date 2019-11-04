<?php
    
     // Required headers
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Origin: *");
    header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT');

    
    // Get HTTP method, path and input of the request
    $method = $_SERVER['REQUEST_METHOD'];
    $request = explode('/', trim($_SERVER['PATH_INFO'], '/'));
    $input = json_decode(file_get_contents('php://input'), true);
  
    include('config.php');

    // Create database object
    $course = new course;

// Method to get database object to function
switch ($method){
    case "GET":
        $response =  $course->get_courses();
        break;
    case "POST":
        if($course->add_course($input['code'], $input['name'], $input['progression'], $input['course_syllabus'])) {
            $response = array("message" => "Course added.");
        } else {
            $response = array("message" => "Error adding course");
        }
        break;
    case "PUT":
        $course->update_course($request[1], $input['code'], $input['name'], $input['progression'], $input['course_syllabus']);
        $response = array("message" => "Course updated.");
        break;
    case "DELETE":
       $course->delete_course($request[1]);
       $response = array("message" => "Course deleted.");
       break;
    }

    echo json_encode($response);
?>
