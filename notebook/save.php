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
   
);

$insert=$db->prepare("INSERT INTO tbl_info SET
name=:name,
lastname=:lastname,
web=:web,
facebook=:facebook,
email=:email,
phone=:phone,
twitter=:twitter,
birthday=:birthday,
note=:note,
adress=:adress");

$result=$insert->execute($data);

if ($result){
    echo "Successful!! <a href='notebook.php'>Click to List</a>";
}
else{
    echo "Unsuccessful!! <a href='addrecord.php'>Try again</a>";
}

}








?>