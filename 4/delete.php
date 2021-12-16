<?php
    include_once 'db.php';

    $id=$_GET['i'];
    $step=$conn2->prepare("DELETE FROM users WHERE id=:id");
    $step->bindParam(":id",$id,PDO::PARAM_INT);
    $step->execute();

    header("Location: index.php");