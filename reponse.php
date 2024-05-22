<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats du QCM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .note {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
        }

        .res-note {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
        }

        .results {
            list-style-type: none;
            padding: 0;
        }

        .results li {
            margin-bottom: 10px;
        }

        .results li::before {
            content: "•";
            color: #333;
            font-size: 16px;
            margin-right: 10px;
        }

        .results li:nth-child(even) {
            background-color: #f9f9f9;
            padding: 10px 0px;
            border-radius: 4px;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn-container button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        include "connect.php";

        $note = 0;
        $bonnes_reponses = array();

        for ($i = 1; $i <= 10; $i++) {
            if (isset($_POST["q$i"])) {
                $id_reponse_utilisateur = $_POST["q$i"];

                $req = "SELECT * FROM reponses WHERE idr = $id_reponse_utilisateur AND bonne_reponse = 1";
                $res = mysqli_query($id, $req);

                if ($res) {
                    $ligne = mysqli_fetch_assoc($res);

                    if ($ligne) {
                        $note++;
                        $bonnes_reponses[$i] = "Bonne réponse";
                    } else {
                        $bonnes_reponses[$i] = "La réponse est fausse";
                    }
                } else {
                    echo "Erreur dans la requête : " . mysqli_error($id);
                }
            } else {
                // Assurez-vous qu'une valeur est définie pour chaque question, même si la réponse n'est pas donnée
                $bonnes_reponses[$i] = "Réponse non fournie";
            }
        }

        echo "<div class='note'>Votre note est de</div>
        <div class='res-note'>$note/10</div>";

        echo "<h3>Résultats :</h3>";
        echo "<ul class='results'>";
        for ($i = 1; $i <= 10; $i++) {
            if (isset($bonnes_reponses[$i])) {
                echo "<li>Question $i : " . $bonnes_reponses[$i] . "</li>";
            }
        }
        echo "</ul>";
        ?>
        <div class="btn-container">
            <button onclick="window.location.href = 'QCM.php';">Refaire le QCM</button>
        </div>
    </div>
</body>

</html>