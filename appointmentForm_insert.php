<?php
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    

session_start();
include('cgmdbconnection.php');

        

    if(isset($_POST['sendappoint'])){
        
        $date = $_POST['date'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $time = $_POST['time'];
        $address = $_POST['address'];
        $service = $_POST['service'];
        $cgmchapter = $_POST['cgmchapter'];
        $message = $_POST['message'];
        $room = $_POST['room_id'];
        
        //START OF SEND EMAIL CODE
        //galing lang po sa youtube po ito kay MASTER GPL na channel yung send email para po sa admin
        require 'PHPMailer/vendor/autoload.php';

        $email_ng_pag_sesendan = "lopeznneth204@gmail.com";

        $email_sender = "johnkenneth.lopez@g.batstate-u.edu.ph";

        $email_password = "pass";

        $mail = new PHPMailer(true);                              
        try {

         $headers = 'MIME-Version: 1.0'.PHP_EOL; // importante to
         $headers .= 'Content-type: text/html; charset=iso-8859-1'.PHP_EOL; // importante to
         $headers .= 'From: kay sender<From: kay sender>'.PHP_EOL;  // importante to
        
        $mail->isSMTP();                                    
        $mail->Host = 'smtp.gmail.com';  
        $mail->SMTPAuth = true;                               
        $mail->Username = $email_sender;     // dito yung email ng sender mo
        $mail->Password = $email_password;      // email password ng sender mo                     
        $mail->SMTPSecure = 'tls';                           
        $mail->Port = 587;         
        
        $mail->setFrom($email_sender, 'CGMph'); // mula kanino ? editable yan bahala kana

        $mail->addAddress($email_ng_pag_sesendan); // dito mo ilalagay yung email ng pag sesendan mo               

        $mail->isHTML(true);                                 
        
        //$mail->Header = 'MIME-Version: 1.0\r\nt Content-Type: text/plain; charset=utf-8\r\n
        //X-Priority: 1\r\n'; // importante to
        
        
        $message ="A new client just sent an appointment reservation. Please check the details and confirm the appointment reservation. Thank You.";
            
            $mail->Subject = 'NEW APPOINTMENT RESERVATION!';
            $mail->Body   = $message;
        
            $mail->send();
            
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
        //END OF SEND EMAIL CODE

        $query = "INSERT INTO `appointment`(`date`, `fullname`, `email`, `contact`, `time`, `address`, `service`, `cgmchapter`, `message`, `room_id`) VALUES ('$date','$fullname','$email','$contact','$time','$address', '$service','$cgmchapter', '$message', '$room')";
        $query_run = mysqli_query($con,$query);

        


        if($query_run){
            $_SESSION['status'] = "Sent Successfully";
            $_SESSION['status-code'] = "success";
            header('location:appointmentform.php');
        }else{
            $_SESSION['status'] = "Something is wrong";
            $_SESSION['status-code'] = "error";
            header('location:appointmentform.php');
        }
    }
?>
