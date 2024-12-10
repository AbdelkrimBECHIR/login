<?php
// Vérifiez que $user est défini avant de l'utiliser
if (!isset($user) || !$user) {
    echo "Aucune donnée utilisateur disponible.";
    exit();
}


?>

    <div class="content-wrapper">
        <h1>Mon Profil</h1>
        <form action="profil" method="POST" class="form">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" class="input-field" value="<?= htmlspecialchars($user['name']); ?>" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="input-field" value="<?= htmlspecialchars($user['email']); ?>" required>
            
            <button type="submit" name="update" class="btn">Mettre à jour</button>
            <button type="submit" name="delete" class="btn btn-delete">Supprimer le compte</button>
        </form>
    </div>
   