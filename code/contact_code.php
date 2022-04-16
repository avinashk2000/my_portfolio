<?php
require_once('../database/connection.php');
require_once("../smtp/PHPMailerAutoload.php");
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $ins = "INSERT into contact_info(name,email,subject,message) values('$name','$email','$subject','$message')";
    $query = mysqli_query($con, $ins);
    if ($query) {
        header("Location:../index.php");
?>
        <script>
            alert('Message Send');
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Message Send Failure");
        </script>
<?php
    }
}
?>