<?php
header("Content-Type: text/html; charset=UTF-8");


print_r($_POST['data']);

$data = $_POST['data'];

$string = stripslashes($_POST['data'][0]);
$string = str_replace("\n","",$string);
$data = unserialize($string);  
echo "<br/>......yoooo <br/>";

//$data = unserialize($data);

echo "<br/>......yoooo <br/>";

print_r($data);

// if( $_REQUEST["data"] ) {

//    $patientName = $_REQUEST['patientName'];
//    echo "Welcome ". $patientName;
//    $affiliation = $_REQUEST['affiliation'];
//    echo "<br />Your affiliation : ". $affiliation;
//    $lieu = $_REQUEST['lieu'];
//    echo "<br />Your lieu : ". $lieu;
//    $motif = $_REQUEST['motif'];
//    echo "<br />Your motif : ". $motif;
//    $dat = $_REQUEST['dat'];
//    echo "<br />Your dat : ". $dat;
//    $slot = $_REQUEST['firstavailableslot'];
//    echo "<br />Your slot : ". $slot;
  






// }
?>