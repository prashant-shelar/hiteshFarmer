<?php

/* followings are the required headers to resolved the CORS issue */
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
/* include file to get database connection */

//include_once '../config/database.php';
  
/* sample code for instantiate product object */

//include_once '../objects/class_name.php';

/* DB connection (object creation process)  */

// $database = new Database();
// $db = $database->getConnection(); 
// $product = new Product($db);
  
/* Get the posted data parameters in the API */
$data = json_decode(file_get_contents("php://input"));
  
// make sure data is not empty
if( !empty($data->username) && !empty($data->password)){
  
    $usernameValue = $data->username;
    $passwordValue = $data->password;

    echo "Username:".$usernameValue."-----"."Password:".$passwordValue;
  
}
  
/* tell the user data is not posted to API */ 
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to post data to api."));
}
?>