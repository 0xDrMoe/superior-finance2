<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"
    <link type="Text/css" rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  
  <body>
    <div class="contact-us">
      <form action="" method="post" class="popup-form">
        <p>Contact Us</p><br>
        <label for="Messages"><b>Messages</b></label><br>
               <textarea placeholder="Your Messages" name="message" required></textarea><br>
               <label for="email"><b>Email</b></label><br>
               <input type="text" placeholder="Your email" name="email" required><br>
               <button type="submit" class="button">Send</button>
               <button type="button" class="button chatOff" onclick="closeForm()">Close</button>
           </form>
       </div>
    
    <script>
           function openForm() {
               document.getElementById("myForm").style.cssText = "display: block;";
           }
           function closeForm() {
               document.getElementById("myForm").style.cssText = "display: none;";
           }
       </script>
    
  </body>
  
</html>
