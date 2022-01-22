<?php
    if(isset($_POST['name'])){
        if(!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['message']) ){
            $name=$_POST['name'];
            $mail=$_POST['mail'];
            $message=$_POST['mail'];
            $header = "from: dazer@gmail.com". "/r/n";
            $header.= "reply-To: noreply@gmail.com". "/r/n";
            $header.= "x-mailer: PHP/". "/r/n";

            mail($mail, $message, $header );

            if($mail){
                echo "enviado exitosamente";
            }
        }
    }
?>