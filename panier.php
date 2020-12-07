<?php


require_once "panier.php";



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




?>
<p class="fildar">jeuxvideo.com / accueil /<span></span> panier</span></p>

<h2 class="bonjour">Bonjour Mr <?= $_SESSION["utilisateur"]?></h2>

<table>
  <tr>
    <th>Nom</th>
    <th>Référence</th>
    <th>Articles</th>
    <th>Quantités</th>
    <th>Prix</th>
  </tr>
  <tr>
    <td>Jean Dupont</td>
    <td>1</td>
    <td>CYBERPUNK 2077 <em>New</em></td>
    <td>1</td>
    <td class="prix">69.90€</td>
  </tr>
  <tr>
    <td>Laetitia Perez</td>
    <td>1</td>
    <td>SPIDERMAN MILES MORALES</td>
    <td>1</td>
    <td class="prix">69.90€</td>
  </tr>
  <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="prix"></td>
  </tr>
  <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="prix"></td>
  </tr>
  <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="prix"></td>
  </tr>
  <tr>
      <td colspan="4" class="total">TOTAL</td>
      <td></td>
      <td</td>
  </tr>
</table>