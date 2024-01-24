<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!empty($_POST[""])){

        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        $toEmail = "favouredchild@gmail.com";

        $mailHeaders = "Name: " . $fullname .
        "\r\n Email: " . $email .
        "\r\n Message: " . $message . "\r\n";

        if(mail($toEmail, $fullname, $mailHeaders)){
            $message = "Your info was received";
        }

    }

    ?>
    <div>
    <form method="post" class="wpcf7-form" novalidate="novalidate">
                                                            
                                                            
                                                            <label for="name">Name</label>
                                                            <input style="color: #000;"
                                                             type="text" name="fullname" placeholder="Eg. Obi Wale Musa" id="fullname" required>
                                                            
                                                            <label for="email">Email</label>
                                                            <input style="color: #000;"
                                                             type="email" name="useremail" id="email" placeholder="you@gmail.com" required>
                                                            
                                                            <label for="subject">Subject</label>
                                                            <input style="color: #000;" type="text" name="subject" id="subject" placeholder="subject" required>
                                                            
                                                            <label for="message">Message</label>
                                                            <textarea style="color: #000;" name="message" id="message" placeholder="" required></textarea>
                                                            
                                                            <br>
                                                            
                                                            <button style="padding: 15px 32px; display: inline-block; text-align: center; width: 100%;" type="submit" name="send" >Submit</button>


                                                     <?php if(!empty($message)){ ?>
                                                            
                                                            
                                                        <div class="wpcf7-response-output wpcf7-display-none">
                                                                <?php echo $message; ?>
                                                        </div>
                                                        <?php } ?>
                                                        
                                                    </form>


    </div>
</body>
</html>