<?php

class Verif_Form
{
    private $nom;
    private $prenom;
    private $mail;
    private $num;
    private $msg;
    private $tab_erreur;
    private $err = 0;


    public function __construct($nom, $prenom, $mail, $num, $msg, $tab_erreur)
    {
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->mail = $mail;
      $this->num = $num;
      $this->msg = $msg;
      $this->tab_erreur = $tab_erreur;
    }


        public function getVerifNom()
        {
            if (strlen($this->nom) < 3)
            {
                $this->tab_erreur = "Your name is too short";
                $this->err++;
            }

            if(($this->nom) == 0)
            {
                $this->tab_erreur = "Please fill in this field";
                $this->err++;
            }
        }


        public function getVerifPrenom()
        {
            if (strlen($this->prenom) < 3)
            {
                $this->tab_erreur = "Your first name is too short";
                $this->err++;
            }

            if(($this->prenom) == 0)
            {
                $this->tab_erreur = "Please fill in this field";
                $this->err++;
            }
        }


        public function getVerifMail()
        {
            if (!preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $this->mail))
            {
                $this->tab_erreur = "Your email address is not valid";
                $this->err++;
            }

            if(($this->mail) == 0)
            {
                $this->tab_erreur = "Please fill in this field";
                $this->err++;
            }
        }


        public function getVerifNum()
        {
            if(!preg_match('`[0-9]{10}`',$this->num))
            {
                $this->tab_erreur = "Your phone number is not valid";
                $this->err++;
            }

            if(($this->num) == 0)
            {
                $this->tab_erreur = "Please fill in this field";
                $this->err++;
            }
        }


        public function getVerifMsg()
        {
          if (strlen($this->msg) < 100)
          {
              $this->tab_erreur = "Your message is too short";
              $this->err++;
          }

          if(($this->msg) == 0)
          {
              $this->tab_erreur = "Please fill in this field";
              $this->err++;
          }

        }

}


 ?>
