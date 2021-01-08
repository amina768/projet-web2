<html>

    





    <head>
        <title>Contact Us</title>
        <link href="contactStyle.css" type="text/css" rel="stylesheet">
    
    </head>
    <body>
        <div class="contact-title">
        
            <h1>Contact Us</h1>    
                        <h1>We are alwas here to serve you!</h1>    

        
        </div>
        
        
        <div class="contact-form">
        
            <form class="contact-form" id="contact-form" method="post" action="contact.php">
            
                <input name="name" type="text" class="form-control" placeholder="Your Name" required><br>
                <input name="email" type="email" class="form-control" placeholder="Your Email" required><br>
                <textarea name="message" type="text" class="form-control" placeholder="Your Message" rows="10"  required></textarea><br>
                <input name="submit" class="submit" type="button" class="form-control" value="Submit" required><br>
                
            
            
            
            
            </form>
        
        
        
        </div>
    
    
        
        
        
        
        
        
        
        
        
        
        
        <?php      
        
        
        
         if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["meassge"])){
                
                
                $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
        
            $email_form = 'aminamoula789@gmail.com';    
            $email_subject = 'test email';
            $email_body = 'User name : '. $name . '\n User Email : '.$email.'\n User Message : '.$message ;
        
        
            $headers = 'Email form : '. $email_form . '\r\n';
            $headers .= 'Reply To : '.$email.'\r\n';
        
            $to  = 'aminamoula789@gmail.com';    
        
        
             //uncomment this
             //mail($to,$email_subject,$email_body,$headers);        
            
             //uncomment this
             //  header("Location: contact.php");
            
                
                
                
                
                
        }
        
            
        
        ?>
        
        
    </body>










</html>