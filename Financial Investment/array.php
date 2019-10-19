<?php
if(isset($_POST['investment'])){
    $investment=$_POST['investment'];
    echo "You selected:<br/>";
    foreach ($investment as $key => $value) {
        echo "$value<br/>";
    }
}
else{
    echo "You must select at least on investment";
}
?>