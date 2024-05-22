<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body>
<ul class="menu">
        <a href="#">Recommencer le QCM </a>
        <a href="connextion.php">Connection</a>
        <a href="index.php">Inscriptions</a>
    </ul>

    <section class="pseudo">
        <form action="traitemantconnex.php" method="POST">
            <p class="error"> Bonjour vous voulez vous connecter ?  </p>
            <label > Entrez votre Email </label>
            <input type="text" name="mail" placeholder="Ex: exemple@exemple.fr" required>
            <label > Entrez votre mot de passe </label>
            <input type="password" name="mdp" placeholder="Entrez mot de passe" required>
            <button type="submit" class="style_btn" name="button">Validez</button>
           
        </form>
        
       
    </section>
</body>
</html>
