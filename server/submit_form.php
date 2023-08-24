<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // require_once "GoogleAPI/Google/Service/gmail.php";
   // $secretid="";
   // $clientsecret="";
   // $redirecturl="";
   // $client=new Google_Client();
   // echo "test 1";
   $name = $_POST["name"];
   $email = $_POST["email"];
   $program = $_POST["program"];
   
   // Set up the email message
   $to = "farashaqa@gmail.com";
   $subject = "New Interest Form Submission";
   $message = "Name: $name\nEmail: $email\nProgram of Interest: $program";
   
   // Send the email
   mail($to, $subject, $message);
}
?>
