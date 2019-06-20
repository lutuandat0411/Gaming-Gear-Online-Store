<?php 
header("Content-Type:application/json");
require "sqldb.php";
 
$sql = "SELECT * from products";
$result = mysqli_query($conn, $sql);
if(!$result){
    $data["message"] ="Can't query data".mysqli_error($conn) ;
    $data["result"] = false;
}else{
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
           $json[] = $row;
        }
        $data["products"] = $json;
        $data["result"] = true;
    }else{
        $data["message"] ="0 product" ;
        $data["result"] = false;
    }
}
mysqli_close($conn);
echo json_encode($data);
// var_dump($data);
?>