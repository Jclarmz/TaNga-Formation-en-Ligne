<?php    
    $to = "contact@tangads.com";
    $subjet = "Inscription";

    $message = "<h2>Inscription</h2>" .
                "<br><strong>Nom : </strong>".$_POST["nom"] .
                "<br><strong>Email : </strong>".$_POST["email"] .
                "<br><strong>Telephone : </strong>".$_POST["phone"] .
                "<br><strong>Adresse : </strong>".$_POST["adresse"] .
                "<br><br><h2>Formations : </h2>";
                if(!empty($_POST["formations"]))
                {
                    $message .= "<lu>";
                    foreach($_POST["formations"] as $formation)
                    {
                        $message .= "<li>". $formation . "</li>";
                    }
                    $message .= "</lu>";
                }

                "<br><br><h2>Paiement : </h2>";
                if(!empty($_POST["paiement"]))
                {
                    // $message .= "<lu>";
                    // foreach($_POST["paiement"] as $paiement)
                    // {
                    //     $message .= "<li>". $paiement . "</li>";
                    // }
                    // $message .= "</lu>";

                    $message .= "<br><strong>Mode de paiement :</strong>".$_POST["paiement"];
                    if($_POST["paiement"] == "Western Union" || $_POST["paiement"] == "Moneygram")
                    {
                        $message .= "<br><strong>Code transfert :</strong>".$_POST["codetransfert"];        
                    }
                    $message .= "<br><br><strong>Montant :</strong>".$_POST["montant"] ."F CFA";
                }

    
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