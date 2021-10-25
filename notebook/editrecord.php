<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Person</title>
    <?php include("../includes/head.php")?>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <h3>Edit Person</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?php
                include("../includes/db.php");
                $id=$_GET["id"];
                $select=$db->prepare("SELECT * FROM tbl_info WHERE id=:id");
                $select->bindParam(":id",$id,PDO::PARAM_INT);
                $result=$select ->execute();
                $row=$select->fetch(PDO::FETCH_ASSOC);

            




                ?>
            <form action="edit.php" method="get">
            <div class="form-group">
                <label for="">Name</label>
                <input required type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $row["name"]?>">
            </div>
            <div class="form-group">
                <label for="">Lastname</label>
                <input required type="text" class="form-control" name="lastname" placeholder="Lastname" value="<?php echo $row["lastname"]?>">
            </div>
            <div class="form-group">
                <label for="">Web</label>
                <input required type="text" class="form-control" name="web" placeholder="Web" value="<?php echo $row["web"]?>">
            </div>
            <div class="form-group">
                <label for="">E-Mail</label>
                <input required type="text" class="form-control" name="email" placeholder="E-Mail" value="<?php echo $row["email"]?>">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input required type="number" class="form-control" name="phone" placeholder="Phone" value="<?php echo $row["phone"]?>">
            </div>
            <div class="form-group">
                <label for="">Facebook</label>
                <input required type="text" class="form-control" name="facebook" placeholder="Facebook" value="<?php echo $row["facebook"]?>">
            </div>
            <div class="form-group">
                <label for="">Twitter</label>
                <input required type="text" class="form-control" name="twitter" placeholder="Twitter" value="<?php echo $row["twitter"]?>">
            </div>
         
            <div class="form-group">
                <label for="">Birthday</label>
                <input required type="date" class="form-control" name="birthday" placeholder="Birthday" value="<?php echo $row["birthday"]?>">
            </div>
            <div class="form-group">
                <label for="">Note</label>
                <textarea rows="3" type="text" class="form-control" name="note" placeholder="Note" ><?php echo $row["note"];?></textarea>
            </div>
            <div class="form-group">
                <label for="">Adress</label>
                <textarea rows="3"  type="text" class="form-control" name="adress" placeholder="Adress" ><?php echo $row["adress"];?></textarea>
            </div>
            <input type="hidden" name="id" value="<?php echo $row["id"]?>">
            <button class="btn btn-primary mt-3 float-start">Update</button>
            <a href="notebook.php" class="btn btn-danger mt-3 float-end">Cancel</a>
            </div>
        </div>
       
        </form>
    </div>
</body>
</html>