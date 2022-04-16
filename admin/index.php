<?php
    session_start();
    require_once("../database/connection.php");
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require_once('csslink.php');
    ?>
    <style>
        .card
            {
                box-shadow: 2px 1px 4px 10px #E5E4E2;   
            }
    </style>
</head>
<body >
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6" style="margin-top: 15%;">
                <div class="card mb-5 border rounded border-secondary" style="background-color:lightblue;">
                    <div class="card-header"><h3>Admin Login</h3></div>
                    <?php
                        if(isset($_POST['login']))
                        {
                            $username=$_POST['username'];
                            $password=$_POST['password'];
                            $sel="SELECT * from admin_log where user_name='$username' and password='$password'";
                            $query=mysqli_query($con,$sel) or die(mysqli_error($con));
                            if(mysqli_num_rows($query)>0)
                            {
                                $data=mysqli_fetch_assoc($query);
                                $_SESSION['admin_name']=$data['name'];
                                $_SESSION['admin_user']=$data['user_name'];
                                $_SESSION['admin_pass']=$data['password'];
                                header("location:admin");
                            }
                            else
                            {
                                $_SESSION['sms']="UserId Or password is wrong...";
                                header("location:index",$_SESSION['sms']);
                            }
                        }
                    ?>
                    <div class="card-body">
                        <form action="" method="post">
                            <label class="mb-2 mt-3" style="font-weight:bolder;">Username</label>
                            <input type="text" name="username" class="form-control mb-3" placeholder="Username..."/>
                            <label class="mb-2" style="font-weight:bolder;">Password</label>
                            <input type="password" name="password" class="form-control mb-2" id="password" placeholder="Password..."/>
                            <input type="checkbox" onclick="showpass()"/> <i id="label" style="font-weight:bolder;">Show Password</i> <span><br/>
                            <input type="submit" value="Login" name="login" class="btn btn-outline-danger mt-3"/>
                        </form>
                    </div> 
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <script type="text/javascript">
            function showpass()
            {
                var x=document.getElementById('password');
                if(x.type=="password")
                {
                    x.type="text";
                }
                else
                {
                    x.type="password";                                        
                }
            }
        </script>
    </div>
</body>
</html>