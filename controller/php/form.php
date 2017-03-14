<?php

require ('controller/class/Verif_Form.php');

$nom = new Verif_Form("nom");
$prenom = new Verif_Form("prenom");
$mail = new Verif_Form("mail");
$num = new Verif_Form("num");
$msg = new Verif_Form("msg");

echo $nom->getVerifNom();
echo $prenom->getVerifPrenom();

if (isset($_REQUEST['button']))
{
    if($err != 0)
    {
        $_SESSION['err'] = "".$tab_erreur."";
        return false;
    }
        else
        {
            $_SESSION['err'] = "Your message is sent.";
        }
}

 ?>
