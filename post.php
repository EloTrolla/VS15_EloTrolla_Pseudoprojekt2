<?php
if(!empty($_POST['aadress'])){
    $myfile = fopen("aadressid.txt", "a") or die("Unable to open file!");
    fwrite($myfile, $_POST['aadress']."\n");
}
header('Location: api2.html');
?>