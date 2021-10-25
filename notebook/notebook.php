<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notebook</title>
    <?php include("../includes/head.php")?>
</head>
<body>
<?php
include("../includes/db.php");

$rows=$db->query("SELECT * FROM tbl_info", PDO::FETCH_ASSOC);

?>





    <div class="container">
       <div class="row">
            <h3 class="m-2">Person List <a href="addrecord.php" class="btn btn-primary">Add</a></h3>
        </div>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Lastname</th>
                <th>Web</th>
                <th>E-Mail</th>
                <th>Phone</th>
                <th>Facebook</th>
                <th>Twitter</th>
                <th>Note</th>
                <th>Birthday</th>
                <th>Adress</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php foreach($rows as $row){?>
                <tr>
                    <td><?php echo $row["id"]?></td>
                    <td><?php echo $row["name"]?></td>
                    <td><?php echo $row["lastname"]?></td>
                    <td><?php echo $row["web"]?></td>
                    <td><?php echo $row["email"]?></td>
                    <td><?php echo $row["phone"]?></td>
                    <td><?php echo $row["facebook"]?></td>
                    <td><?php echo $row["twitter"]?></td>
                    <td><?php echo $row["note"]?></td>
                    <td><?php echo $row["birthday"]?></td>
                    <td><?php echo $row["adress"]?></td>
                    <td class="d-flex">
                        <a class="btn btn-primary " href="editrecord.php?id=<?php echo $row["id"]?>">Edit</a>
                        <a class="btn btn-danger" href="del.php?id=<?php echo $row["id"]?>">Del</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>