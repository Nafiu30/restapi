<?php

if (isset($_POST['sku']) && $_POST['sku']!="") {
	  include 'db.php';
	  $sku = $_POST['sku'];
      $url ="http://localhost/rest/api/".$sku;

      $client = curl_init($url);
      curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($client);

      $result = json_decode($response);

}

echo "<table>";
echo "<tr><td>sku : </td><td>$result->sku</td></tr>";
echo "<tr><td>name : </td><td>$result->name</td></tr>";
echo "<tr><td>category : </td><td>$result->category</td></tr>";
echo "<tr><td>price : </td><td>$result->price</td></tr>";
echo "<tr><td>original : </td><td>$result->original</td></tr>";
echo "<tr><td>final : </td><td>$result->final</td></tr>";
echo "<tr><td>discount_percentage : </td><td>$result->discount_percentage</td></tr>";
echo "<tr><td>currency : </td><td>$result->currency</td></tr>";
echo "</table>";


?>