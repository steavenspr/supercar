<?php
if (!isset($_SESSION['user_id'])) {
    // L'utilisateur n'est pas connecté, affichez le message et les liens de connexion/inscription
    ?>
    <div class="bg-light p-5 rounded shadow">
        <h2 class="mb-4">Vous devez vous connecter ou vous inscrire</h2>
        <p>Pour accéder à cette page, veuillez vous connecter ou vous inscrire :</p>
        <a href="login.php" class="btn btn-primary mr-2">Se connecter</a>
        <a href="inscription.php" class="btn btn-success">S'inscrire</a>
    </div>
<?php
} else {
    // L'utilisateur est connecté, affichez le contenu de la page
    ?>
    <div class="container">
        <!-- Contenu de la page -->
        <h1>Contenu de la page pour l'utilisateur connecté</h1>
        <!-- Le reste du contenu de la page -->
    </div>
<?php
}
?>