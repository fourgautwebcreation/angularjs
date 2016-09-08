<?php
header('Content-Type: Application/json');

$membres = array(
  array('prenom' => 'John','nom'=>'Doe'),
  array('prenom' => 'Albert','nom'=>'Enstein'),
  array('prenom' => 'Max','nom'=>'Planck'),
);

echo json_encode($membres);
?>
