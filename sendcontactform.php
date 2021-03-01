<?php
                $message = $_POST['message'];
                $email = $_POST['email'];
                
                
                $to = "help@superiorfinance.io";
                
                $subject = "Mail";
                
                $title = "Mail";
                
                $txt = $message;
                //create email headers, the hidden code on top of all emails, read by the mail client.
                $headers = "From: $title $email" . "\r\n" .'Reply-To: '.$email."\r\n";
       
                mail($to,$subject,$txt,$headers);

        echo "<script>alert('Thank you for contacting us.');window.location='contactform.html'</script></script>";
?>
