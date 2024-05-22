<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page inscription pseudo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <ul class="menu">
        <a href="#">Recommencer le QCM </a>
        <a href="connextion.php">Connection</a>
        <a href="index.php">Inscriptions</a>
    </ul>

    <section class="pseudo">
        <form action="traitemantindex.php" method="POST">
            <p class="error"> Bonjour vous voulez esseyer le QCM inscrivez vous?  </p>
            <label > Entrez votre Prenom </label>
            <input type="text" name="name" placeholder="Ex: Hugo" required>
            <label > Entrez votre mot de passe </label>
            <input type="password" name="mdp" placeholder="Entrez mot de passe" required>
            <label > Confirmez votre mot de passe </label>
            <input type="password" name="mdp2" placeholder="Entrez a nouveau votre mot de passe" required>
            <label > Entrez votre Email </label>
            <input type="text" name="mail" placeholder="Ex: exemple@exemple.fr" required>
            <button class="style_btn" name="button" action="connextion.php">Validez</button><br><br>
                <p class="box-register">Déjà inscrit? 
              <a href="connextion.php">Connectez-vous ici</a></p>
        
        </form>

    </section>
</body>
</html>