<?php
include "class.user.php";
include "dbconnection.php";
$user_class = new USER();



///if (isset($_REQUEST['recaptcha_response'])) {

// Build POST request:
///$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
///$recaptcha_secret = '6LcA-KoaAAAAAO90EfGBnbOFvRyxtcgkFmFmzjrs';
///$recaptcha_response = $_POST['recaptcha_response'];

// Make and decode POST request:
///$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
// echo $recaptcha;
///$recaptcha = json_decode($recaptcha);


// Take action based on the score returned:
///if ($recaptcha->score >= 0.5) {
if (isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['phone']) && isset($_REQUEST['date']) && isset($_REQUEST['service'])) {

    $email_to = "info@resivoje.com";
    $email_subject = "test";


    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $date    = $_POST['date'];
    $service    = $_POST['service'];
    $note = $_POST['note'];

    //upisivanje u bazu

    //$headers  = "From: acasax@gmail.com"; //no-replay@virtualcoworking.com
    //$subject          = "Aktivacioni link za V-cow";
    //$reg_link         = "http://localhost/v-cow/activate.php";
    //$msg              = "Aktivaciju Vašeg naloga če te izvršiti klikom na link $reg_link?email=$email&code=$validation_code";



    $db->beginTransaction();

    
    // NAMESTITI KVERIJE ZA UPIS REZERVACIJA.
    try{

        $order_sql = "INSERT INTO `zakazivanje` (`id`, `name`, `email`, `phone`, `reservation`, `service`, `note`) VALUES (NULL, '$name', '$email', '$phone', '$date', '$service', '$note');";
        
        $stm = $db->prepare($order_sql);
        $stm->execute();

        echo $order_sql;
        //$order_id = $db->lastInsertId();
        
        
        $db->commit();
    }catch(mysqli_sql_exception $e) {
        $db->rollBack();
        throw $e; // $e cuvam u bazu - greska. (datum, naziv, id).
        $user_class->returnJSON("ERROR","Message not sent. Please try again.");
        return;
    }finally{
        $user_class->returnJSON("OK","Message sent.");
        return;
    }
    
       
    
        
    
} else {
    //echo "nije sve setovanoi";
    $user_class->returnJSON("ERROR","FIll all required fields.");
    return;
}



    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message = "Ime: " . clean_string($name) . "\n";
    $email_message .= "Prezime: " . clean_string($lastname) . "\n";
    $email_message .= "Telefon: " . clean_string($phone) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Napomena:" . clean_string($napomena) . "\n";
    /*
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    if (@mail($email_to, $email_subject, $email_message, $headers)) {
        $user_class->returnJSON("OK", "Message sent.");
        return;
    } else {
        $user_class->returnJSON("ERROR", "Message not sent. Please try again.");
        return;
    };*/
        ///} else {
            // echo "error with recaptcha";
            /// $user_class->returnJSON("ERROR",
            ///  "Problem with recaptcha");
            ///return;
        ///}
    ///} else {
        //echo "error with recaptcha_response";
         ///$user_class->returnJSON("ERROR",
         ///"Problem with recaptcha_response");
        ///return;
    ///}
