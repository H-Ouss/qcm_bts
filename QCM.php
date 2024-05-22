<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="qcmstyle.css">
    <title>Document</title>
</head>

<body>
    <ul class="menu">
        <a href="#">Recommencer le QCM </a>
        <a href="connextion.php">Connection</a>
        <a href="index.php">Inscriptions</a>
    </ul>

    <div class="container">
        <h1 class="text-center mb-5">QCM -- Répondez aux 10 questions</h1>

        <form action="reponse.php" method="POST">
            <?php
            include "connect.php";
            $req = "SELECT * FROM questions ORDER BY rand() LIMIT 10";
            $res = mysqli_query($id, $req);
            $i = 1;

            while ($ligne = mysqli_fetch_assoc($res)) {
                echo "<div class='question'>";
                echo "<h3 class='question-title'>$i) - " . $ligne["libelleQ"] . "</h3>";
                $idq = $ligne["idq"];
                $req2 = "SELECT * FROM reponses WHERE idq = $idq";
                $res2 = mysqli_query($id, $req2);

                while ($ligne2 = mysqli_fetch_assoc($res2)) {
                    $idr = $ligne2["idr"];
                    $libelle = $ligne2["libeller"];
                    echo "<input type='radio' name='q$i' value='$idr'> $libelle <br>";
                }


                echo "</div>"; // Fermer la div pour chaque question
                $i++;
            }
            ?>
            <br><button type="submit">Envoyer</button><br>
        </form>
    </div>
</body>

</html>