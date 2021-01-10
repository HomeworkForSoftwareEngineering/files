<?php
use PHPMailer\PHPMailer\PHPMailer;
session_start();

$username = $_SESSION['username'];

$conn=mysqli_connect("localhost","root","11235813",'userregistration');
$sql = $conn -> query("SELECT showedMoney FROM usertable WHERE usertable.name = '$username'");
$row = mysqli_fetch_assoc($sql);
$claimMoney = $row['showedMoney'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $number = strtoupper(str_replace(' ', '', $number));
    $mailformat = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
    $subject = "Get Money";

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    if($claimMoney >= 20){
        if($name != "" && $email != "" && $number != ""){
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if(preg_match('/^[A-Z]{2}[0-9]{2}[A-Z0-9]{1,30}$/',$number)){
                    $country = substr($number, 0, 2);
                    if(strcmp($country,"TR") == 0){

                        $headers = "From:".$email;
                        $txt = "You have received an e-mail from ".$email.".\n\n User wants to claim the money from her/his user account.\n Name of Account Holder: ".$name."\n IBAN Number of Account: ".$number."\n Amount to be Deposit: ".intval($claimMoney);

                        $mail = new PHPMailer();

                        $mail->isSMTP();
                        $mail->Host="smtp.gmail.com";
                        $mail->SMTPAuth = true;
                        $mail->Username = "grup4forsoftwareengineering@gmail.com";
                        $mail->Password="123456789SE";
                        $mail->Port = 587;
                        $mail->SMTPSecure = "tsl";
                        
                        $mail->isHTML(true);
                        $mail->setFrom($email,$username);
                        $mail->addAddress("grup4forsoftwareengineering@gmail.com");
                        $mail->Subject = $subject;
                        $mail->Body = $txt;

                        if($mail->send()){
                            $sql = $conn -> query("SELECT recievedMoney FROM usertable WHERE usertable.name = '$username'");
                            $row = mysqli_fetch_assoc($sql);
                            $oldValueR = $row['recievedMoney'];

                            $newValueR = intval($claimMoney) + $oldValueR;
                            $sql = $conn -> query("UPDATE usertable SET recievedMoney = $newValueR WHERE usertable.name = '$username'");



                            echo ' <div class="container" style="margin-top: 5%; width: 50%; background-color: rgb(220,220,220);">
                            <div class="row">
                                <div class="col-md-auto">
                                    <img src="envelope.png" alt="Mail" style="width:60px;height:60px;">
                                </div>
                                <div class="col-md-auto" style="margin-top: 1%;">
                                    <h3>Your Mail Has Been Received</h3>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col" style="margin-left: 10%; margin-right: 10%;" >
                                    <p>The information you have sent will be reviewed and a return will be made via your e-mail address.</p>
                                    <p>The remainder of the money to be sent will be ignored and sent. For example, if you have 20.64 TL, 20 TL will be deposited into your account. The amount of 0.64 will continue to be kept in your account.</p>
                                    <p>You will be notified via your e-mail address when the deposit will be made to your account.</p>
                                    <p>The time to transfer money to your account may be delayed slightly due to the intensity.</p>
                                    <p>Thank you in advance for your understanding.</p>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col" style="margin-left: 72%; margin-right: 8%;" >
                                    <h5>SHS TEAM</h5>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col" style="margin-left: 10%;" >
                                    <p>Click to Return Account Page <a href="profileregular.php"><img src="profile.png" alt="Mail" style="width:50px;height:50px;"></a></p>
                                    
                                </div>
                            </div>
                        </div> ';
                            
                        }else{
                            echo  ' <div class="container" style="margin-top: 5%; width: 50%; background-color: rgb(220,220,220);">
                            <div class="row">
                                <div class="col-md-auto">
                                    <img src="cross.png" alt="Mail" style="width:60px;height:60px;">
                                </div>
                                <div class="col-md-auto" style="margin-top: 1%;">
                                    <h3>Mail Could Not Be Sent</h3>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col" style="margin-left: 10%; margin-right: 10%;" >
                                    <p>An error was encountered while trying to send mail.</p>
                                    <p>Please try again later.</p>
                                    <p>If you continue to receive the same error, please contact us at grup4forsoftwareengineering@gmail.com mail address.</p>
                                    <p>We will return to you as soon as possible.</p>
                                    <p>Thank you in advance for your understanding.</p>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col" style="margin-left: 72%; margin-right: 8%;" >
                                    <h5>SHS TEAM</h5>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col" style="margin-left: 10%;" >
                                    <p>Click to Return Account Page <a href="profileregular.php"><img src="profile.png" alt="Mail" style="width:50px;height:50px;"></a></p>
                                    
                                </div>
                            </div>
                        </div> ';
                        }

                    }else{
                        echo '<script>
                                alert("It is not Turkish Account Number!");
                                window.location.href = "profileregular.php";
                            </script>';
                    }

                }else{
                    echo '<script>
                            alert("Wrong IBAN Number format!");
                            window.location.href = "profileregular.php";
                        </script>';
                }
                
            }else{
                echo '<script>
                        alert("You have entered an invalid email address!");
                        window.location.href = "profileregular.php";
                    </script>';
            }
        }else{
            echo '<script>
                    alert("Please check your inputs!");

                    window.location.href = "profileregular.php";
                </script>';
        }
}else{
    echo '<script>
            alert("In order to make a deposit to your account, the money in your site account must be at least 20 TL.");

             window.location.href = "profileregular.php";
        </script>';
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Mail</title>
</head>
<body>


    
</body>
</html>