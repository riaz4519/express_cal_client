<?php include 'connect.php'?>


<?php

if (isset($_POST['students'])){

    $ans = $_POST['students'];
    $column = '';
    $value = '';
    $email = '';
    $phone = '';
    $update = '';
    $total_sum = '';
    $update_text = '';

    for ($i=0;$i<count($ans);$i++){


        if ($ans[$i][0] == 'email'){
            $email = $ans[$i][1];
        }
        if ($ans[$i][0] == 'phone' ){
            $phone = $ans[$i][1];
        }
        if ($ans[$i][0] == 'total_sum' ){
            $total_sum = $ans[$i][1];
        }

        if ($i==count($ans)-1){
            $column .= $ans[$i][0];
            $value .= "'".$ans[$i][1]."'";
            $update .= $ans[$i][0]."='".$ans[$i][1]."'";
        }
        else{

            $column .= $ans[$i][0].',';
            $value .= "'".$ans[$i][1]."'".',';
            $update .= $ans[$i][0]."='".$ans[$i][1]."',";
        }


    }



    $smtp = mail_which($email);


    $query_c = "SELECT id FROM client_info WHERE email = '".$email."' AND phone='".$phone."'";

    if ($connect->query($query_c)->num_rows > 0){

        $query_update = "update client_info set $update WHERE email = '".$email."' AND phone='".$phone."'";
        if ($connect->query($query_update)){
            $update_text = 'Updated';

            mail_send($email,$smtp,$update_text,$total_sum);
            echo 'update done';



        }

    }else{
        $query = "INSERT INTO client_info ($column)VALUES ($value)";

        if ($connect->query($query)){

            echo 'you points have been sent to your phone & email';
            $update = '';

        }else{
            echo 'wrong';
        }
    }





}


function mail_send($to,$host,$update,$total_sum){
    require'PHPMailer-master/PHPMailerAutoload.php';
    $mail = new PHPMailer;
//$mail->SMTPDebug = 3;                               // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = "smtp.$host.com";  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'riaz.i3214@gmail.com';                 // SMTP username
    $mail->Password = 'intelriaz14';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to
    $mail->setFrom('riaz.i3214@gmail.com', 'GIC');
    $mail->addAddress($to, 'GIC');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'GIC-CRS';
    $mail->Body    = " Dear .....,\nYour ".$update."  CRS is  ".$total_sum;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
}


function mail_which($string){
    $ans  = substr($string,strpos($string,'@')+1,strpos($string,'.')+1);
    return $ans;
}

?>
