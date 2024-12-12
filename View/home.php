
<?php
// Afficher le message flash si défini
if (isset($_SESSION['flash_message'])) {
    echo "<p class='flash-message'>" . htmlspecialchars($_SESSION['flash_message']) . "</p>";
    unset($_SESSION['flash_message']);
}
var_dump($_SESSION);


?>

    <div class="content-wrapper">
        <h1>Bienvenue sur notre site</h1>
        <?php
        if (isset($_SESSION['user_firstname'])) { 
            ?>
                <h2><?php echo $_SESSION["user_firstname"];?></h2>
            <?php 
            } else { 
            ?>
                 <p>Veuillez vous connecter ou vous inscrire pour continuer.</p>
            <?php 
            }  ?>
       
    </div>


