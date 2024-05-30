<?php
include ("connection.php" );
$name= $_POST['name' ];
$address= $_POST['address' ];
$sql= "UPDATE `employees`  SET  `name`='". $name."',`address`='".$address ."' WHERE `id` = $id " ;

if(mysqli_query($conn , $sql)){
    $response = [
        'status'=>'ok',
        'success'=>true,
        'message'=>'Record updated succesfully!'
    ];
    print_r(json_encode($response));
}else{
    $response = [
        'status'=>'ok',
        'success'=>false,
        'message'=>'Record updated failed!'
    ];
    print_r(json_encode($response));
} 
?>