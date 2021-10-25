<?php


// try{
// $db= new PDO("mysql:host=localhost;dbname=person;charset=utf8","root","");
// }catch(PDOException $e){
//     echo $e->getMessage();
// };

// $row=$db->query("SELECT * FROM personel_list", PDO::FETCH_ASSOC);

// foreach ($row as $rows ) {
  
//     echo "Personelin Adi: ". $rows["first_name"]."<br>";
//     echo "Personelin Soyadi: ". $rows["last_name"]."<br>";
//     echo "<hr>";
 
// }

// $id=10;
// $rows=$db -> prepare("SELECT * FROM personel_list where id>:id");
// $rows-> execute(array("id"=>$id));

// $result= $rows->fetchAll(PDO::FETCH_ASSOC);

// print_r($result)



// foreach ($rows as $row ) {

//     print_r($row);
  
//     // echo "Personelin Adi: ". $row["first_name"]."<br>";
//     // echo "Personelin Soyadi: ". $row["last_name"]."<br>";
//     // echo "<hr>";
// }


// try{
//     $db=new PDO("mysql:host=localhost;dbname=person;charset=utf8","root","");
// }catch(PDOException $e){
//     echo $e->getMessage();
// }

// $insert=$db->prepare("INSERT INTO personel_list SET first_name=:first_name,last_name=:last_name");

// $data=array(
//     "first_name"=> "Ismail",
//     "last_name"=> "Türüt"
// );

// $result=$insert->execute($data);

// if($result){
//     echo "Erfolg";
// }
// else{
//     echo "unerfolg!";
// }

// try{
// $db=new PDO("mysql:host=localhost;dbname=person;charset=utf8","root","");
// }catch(PDOExpection $e){

//     echo $e->getMessage();
// }

// $update=$db->prepare("UPDATE personel_list SET first_name=:first_name,last_name=:last_name where id=:id");

// $data=array("first_name"=>"Meryem","last_name"=>"Efe", "id"=>30);

// $result=$update->execute($data);

// if($update){
//     echo "basarilidir";
// }
// else{
//     echo "Basarisiz";
// }

// try{
//     $db=new PDO("mysql:host=localhost;dbname=person;charset=utf8","root","");
// }catch(PDOException $e){
//     echo $e->getMessage();
// }
// $id=11;
// $del=$db->prepare("DELETE FROM personel_list WHERE id=:id");

// $data=array("id"=>$id);

// $result=$del->execute($data);

// if($del){
//     echo "Basarilidir";
// }
// else{
//     echo "Basarisiz...";
// }

try{
    $db=new PDO("mysql:host=localhost;dbname=notbook;charset=utf8","root","");
}catch(PDOExpection $e){
    echo $e->getMessage();
}
 

?>