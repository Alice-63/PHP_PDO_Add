<?php




if($_GET){

$name=$_GET["name"];
$lastname=$_GET["lastname"];
$web=$_GET["web"];
$email=$_GET["email"];
$phone=$_GET["phone"];
$facebook=$_GET["facebook"];
$twitter=$_GET["twitter"];
$birthday=$_GET["birthday"];
$note=$_GET["note"];
$adress=$_GET["adress"];
$id=$_GET["id"];


include("../includes/db.php");

$data=array(
"name"=>$name,
"lastname"=>$lastname,
"web" =>$web,
"facebook" =>$facebook,
"email" =>$email,
"phone" =>$phone,
"twitter" =>$twitter,
"birthday" =>$birthday,
"note" =>$note,
"adress" =>$adress,
"id"=>$id
   
);

$update=$db->prepare("UPDATE tbl_info SET
name=:name,
lastname=:lastname,
web=:web,
facebook=:facebook,
email=:email,
phone=:phone,
twitter=:twitter,
birthday=:birthday,
note=:note,
adress=:adress
WHERE id=:id
");

$result=$update->execute($data);

if ($result){
    echo "Update is successful!! <a href='notebook.php'>Click to List</a>";
}
else{
    echo "Update is unsuccessful!! <a href='addrecord.php'>Try again</a>";
}

}








?>