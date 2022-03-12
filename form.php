<?php 
if(isset($_POST['submit'])){
    $to = "reddy.har2002@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $phone = $_POST['phoneno'];
    $weburl = $_POST['weburl'];
    $lookingfor = $_POST['lookingfor'];
    $description = $_POST['description'];

    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = "Name:" . $first_name . " " . $last_name . "\n\n" . "Phone No: " . $phone . "\n\n" . "Website URL : " . $weburl . "\n\n" . "Looking For : " . $lookingfor . "\n\n" . " Description : " . $description;
    $message2 = "Here is a copy of your message " . "\n\n" . "Name:" . $first_name . " " . $last_name . "\n\n" . "Phone No: " . $phone . "\n\n" . "Website URL : " . $weburl . "\n\n" . "Looking For : " . $lookingfor . "\n\n" . " Description : " . $description;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    header('Location: index.html');
}
?>