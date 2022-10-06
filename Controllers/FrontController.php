<?php


class FrontController
{
    public function showHome()
    {
        require 'view/home.phtml';
    }
    
    public function showForm()
    {
        $formulaire = new FormControl;
        echo $formulaire->manage();
        $contact = new Contact;
        echo $contact->contactMessage();
    }
    
    public function showCarrousel()
    {
        require 'view/carrousel.phtml';
    }
    
    public function showMozaike()
    {
        require 'view/mozaike.phtml';
    }

    public function showBio()
    {
        require 'view/bio.phtml';
    }

    public function showNotFound()
    {
        require 'view/notFound.phtml';
    }
}