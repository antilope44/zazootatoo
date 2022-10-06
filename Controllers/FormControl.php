<?php

class FormControl {

    public function manage():void
    {

        $sendOk = '';
        $requiredFirstname = '';
        $requiredLastname = '';
        $requiredEmail = '';
        $requiredMessage = '';
        
        if (empty($_POST['formFirstname'])) {
            $requiredFistname = 'Veuillez saisir votre nom';
        }
        
        if (empty($_POST['formLastname'])) {
            $requiredLastname = 'Veuillez saisir votre prénom';
        }

        if (empty($_POST['formEmail'])) {
            $requiredEmail = 'Veuillez saisir votre email';
        }

        if (empty($_POST['formMessage'])) {
            $requiredMessage = 'Veuillez saisir votre Message';
        }

        if (!empty($_POST['formFirstname']) && !empty($_POST['formLastname'])
            && !empty($_POST['formEmail'])) 
        {

            DataBase::getConnexion();
            
            $sendOk = 'Données envoyées avec succès';
        }
        require 'view/form.phtml';
    }

}    


