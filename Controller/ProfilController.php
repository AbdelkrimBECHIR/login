<?php

class ProfilController {
    private $userRepository;

    public function __construct($dbh) {
        $this->userRepository = new UserRepository($dbh);   
    }

    
    public function page() {
        if (!isset($_SESSION['user_id'])) {
            header("Location: /login");
            exit();
        }

        $userId = $_SESSION['user_id'];
        $user = $this->userRepository->getUserByIdProfil($userId);

        if (!$user) {
            echo "Utilisateur introuvable.";
            exit();
        }

            include 'View/header.php';
            include 'View/profil.php';
            include 'View/footer.php';

            if (isset($_POST['update'])) {
                // Récupérer et sécuriser les données
                $name = htmlspecialchars($_POST['name']);
                $firstname = htmlspecialchars($_POST['firstname']);
                $email = htmlspecialchars($_POST['email']);
                $role = htmlspecialchars($_POST['role']);
                
                try {
                    $this->userRepository->updateUserProfil($idUser, $name, $firstname, $email);
                    header("Location: /admin");
                    exit();
                } catch (Exception $e) {
                    // Gérer les erreurs de mise à jour
                    error_log($e->getMessage());
                    header("Location: /error");
                    exit();
                }
            } elseif (isset($_POST['delete'])) {
                try {
                    $this->userRepository->deleteUserProfil($idUser);
                    session_destroy();
                    header("Location: logout/logout");
                    exit();
                } catch (Exception $e) {
                    // Gérer les erreurs de suppression
                    error_log($e->getMessage());
                    header("Location: /error");
                    exit();
                }
            }
        }
    
}
?>
