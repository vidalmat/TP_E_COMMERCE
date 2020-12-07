<?php


require_once "articles.php";



$array1 = [
    "id" => "cyberpunk",
    "qte" => 10,
    "prix" => 69.90,
];

$array2 = [
    "id" => "spiderman",
    "qte" => 8,
    "prix" => 69.90,
];

var_dump($array1, $array2);
var_dump($_SESSION);



?>



<table>
  <tr>
    <td>Nom</td>
    <td>Référence</td>
    <td>Articles</td>
    <td>Quantités</td>
    <td>Prix</td>
  </tr>
  <tr>
    <th>Jean Dupont</th>
    <th>1</th>
    <th>CYBERPUNK 2077 <em>New</em></th>
    <th>1</th>
    <th class="prix">69.90€</th>
  </tr>
  <tr>
    <th>Laetitia Perez</th>
    <th>1</th>
    <th>SPIDERMAN MILES MORALES</th>
    <th>1</th>
    <th class="prix">69.90€</th>
  </tr>
  <tr>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th class="prix"></th>
  </tr>
  <tr>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th class="prix"></th>
  </tr>
  <tr>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th class="prix"></th>
  </tr>
  <tr>
      <th scope="3" class="total" >TOTAL</th>
      <th></th>
      <th></th>
      <th></th>
      <th class="prix"></th>
  </tr>
</table>