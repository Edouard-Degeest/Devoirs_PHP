<?php

session_start();

$_SESSION ['name'] = $_POST['name'];
$_SESSION ['mot-de-passe'] = $_POST['mot-de-passe'];

if ($_SESSION['name'] == 'Jon' && ($_SESSION['mot-de-passe'] == '1234')) {
    header('Location: ../info.php');
}
else {
    header ('Location: error.php');
} 
?>