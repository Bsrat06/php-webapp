<?php

if ($_SESSION["user"]){
}else{
    header("Location:landing_page.php");
}

?>