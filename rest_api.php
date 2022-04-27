<?php

   header("Content-Type:application/json");

if (isset($_GET['sku']) && $_GET['sku']!="") {

       include 'db.php';

     $sku = $_GET['sku'];
     $result = mysqli_query($conn,"SELECT * FROM product WHERE sku=$sku");
     if (mysqli_num_rows($result) > 0) {
       $row = mysqli_fetch_array($result);
       $name = $row['name'];
       $category = $row['category'];
       $price = $row['price'];
       $original = $row['original'];
       $final = $row['final'];
       $discount_percentage = $row['discount_percentage'];
       $currency = $row['currency'];
       response($sku,$name,$category,$price,$original,$final,$discount_percentage,$currency);
       mysqli_close($conn);
     }else{
     response(NULL,NULL,200,"NO RECORD FOUND");
   }
}
else{
	response(NULL,NULL,400,"INVALID REQUEST");
}

function response($sku,$name,$category,$price,$original,$final,$discount_percentage,$currency){
     $response['sku'] = $sku;
     $response['name'] = $name;
     $response['category'] =$category;
     $response['price'] = $price;
     $response['original'] = $original;
     $response['final'] = $final;
     $response['discount_percentage'] = $discount_percentage;
     $response['currency'] = $currency;
     
     $json_response = json_encode($response);

     echo $json_response;

}




?>