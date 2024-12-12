<?php

class LogoutController
{
    public function page()
    {
       
        // Détruire toutes les données de session
        session_unset();
        session_destroy();

        // Ajouter un message flash
        session_start();
        $_SESSION['flash_message'] = "Vous avez été déconnecté avec succès.";

        // Rediriger vers la page d'accueil
        header("Location: /home");
        exit();
    }
}
