<?php
require_once('../database/connection.php');
require_once('../smtp/PHPMailerAutoload.php');
if (isset($_POST['submit'])) {
    $cname = $_POST['cname'];
    $ccontact=$_POST['contact_number'];
    $role = $_POST['role'];
    $technology = $_POST['tech'];
    $email = $_POST['email'];
    $job_type = $_POST['jtype'];
    $clink = $_POST['link'];

    $html="Hi ! <br/> Avinash Kumar ". $cname ." wants to hire you for ".$job_type." employee as a ". $technology ." ".$role. "<br/> Email : ". $email ."<br/> Company _Contact : ". $ccontact ."<br/> Website Link : ". $clink ;
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPSecure = "tls";
    $mail->SMTPAuth = true;
    $mail->Username = 'avinashfolio@gmail.com';
    $mail->Password = 'Avinashfolio@8564';
    $mail->setFrom('avinashfolio@gmail.com');
    $mail->addAddress("avinashk8650@gmail.com");
    $mail->isHTML(true);
    $mail->Subject = "Hireing Details";
    $mail->Body = $html;
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'verify_peer_signed' => false
    ));
    if ($mail->send()) 
    {
        $ins = "INSERT into hire_details(company_name,role,technology,contact_number,email,job_type,link) values('$cname','$role','$technology','$ccontact','$email','$job_type','$clink')";
        $query = mysqli_query($con, $ins);
        if($query)
        {
            ?>
                <script>alert("Hire Details Send On client Mail...");</script>
            <?php
            header('location:../index');
        }
        else
        {

        }
    }
    else 
    {
        ?>
            <script>alert("Mail Not Deliver...");</script>
        <?php
    }
}
?>