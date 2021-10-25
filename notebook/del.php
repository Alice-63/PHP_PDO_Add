<?php

$id=$_GET["id"];

include("../includes/db.php");

$del=$db->prepare("DELETE FROM tbl_info WHERE id=:id");
$del->bindParam(":id",$id,PDO::PARAM_INT);

$result=$del->execute();

if ($result){
    echo "Delete is successful!! <a href='notebook.php'>Click to List</a>";
}
else{
    echo "Delete is unsuccessful!! <a href='addrecord.php'>Try again</a>";
}










?>