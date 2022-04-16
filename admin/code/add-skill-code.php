<?php
    session_start();
    require_once('../../database/connection.php');
    if(isset($_POST['add_skill']))
    {
        $skill=$_POST['skill'];
        $percentage=$_POST['percentage'];
        $ins="INSERT into skill(skill_name,percentage) values('$skill','$percentage')";
        $query=mysqli_query($con,$ins);
        if($query)
        {
            $_SESSION['sms']="Skill Added...";
            header("location:../add-skill.php",$_SESSION['sms']);
        }
        else
        {
            $_SESSION['sms']="Book Not added...";
            header("location:../add-skill.php",$_SESSION['sms']);
        }
    }
?>