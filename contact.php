<?php    
    $to = "contact@tangads.com";
    $subjet = "Contact";

    $message = "<h2>Contact</h2>" .
                "<br><strong>Nom :</strong>".$_POST["nom"] .
                "<br><strong>Email :</strong>".$_POST["email"] .
                "<br><strong>Telephone :</strong>".$_POST["phone"] .
                "<br><strong>Sujet :</strong>".$_POST["subject"] .
                "<br><strong>Message :</strong>".$_POST["message"] .
    
    $mailheaders = 'From: noreply@tangads.com'."\r\n";
    $mailheaders.="Content-Type: text/html; charset=iso-8859-1";
    if(mail($to, $subjet, $message, $mailheaders))
    {
        echo "Le mail a été envoyé";
    }
    else
    {
        echo "Une erreur s'est produite, le mail n'a pas pu être envoyé";
    }    
 ?>