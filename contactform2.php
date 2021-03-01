<?php
  $message_sent = false;
  if(isset($_POST['email']) && $_POST['email'] != ''){
     
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
    
    //submit the form 
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $messageSubject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "help@superiorfinance.io";
    $body = "";

    $body .="From: ".$userName. "\r\n";
    $body .="Subject: ".$messageSubject. "\r\n";
    $body .="Email: ".$userEmail. "\r\n";
    $body .="Message: ".$message. "\r\n";

    //mail($to, $messageSubject, $body);
      
    $message_sent = true;  
    }
    else{
        $invalid_class_name = "form-invalid";
    }
  }
    
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="#" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    <script src="main.js"></script>
</head>

<body>
    <p>
        Contact Us
    </p>
    
    <?php 
    if($message_sent):
    ?>
        <h3> Thanks, we'll be in touch.</h3>
    <?php
        else:
    ?>
    <div class="container">
        <form action="contactform2.php" method="POST" class="form">
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" tabindex="1" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div>
                <button type="submit" class="btn">Send Message</button>
            </div>
        </form>
    </div>
    <?php
        endif;
    ?>
</body>

</html>
