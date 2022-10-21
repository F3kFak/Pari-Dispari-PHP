<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="sfondo">

    <h1 class="text-center scritte">Gioco del pari e del dispari</h1>

    <div class="linea"></div>
    <div class="text-center">

        <?php
        session_start();
        $numerorandomico = rand(1, 5);
        

        if ($_SESSION['turno'] != 4) {
            if (isset($_POST['invia'])) {
                $_SESSION['nome'] = $_POST['nomegiocatore'];
                $_SESSION['scelta'] = $_POST['pari_dispari'];
                $_SESSION['turno'] = 0;
                $_SESSION['vittoriecomputer'] = 0;
                $_SESSION['vittoriautente'] = 0;
            }

            if (isset($_GET['valoreinviato'])) {
                $_SESSION['valorenumero'] = $_GET['valori'];
                $_SESSION['turno'] = $_SESSION['turno'] + 1;
                $_SESSION['somma'] = $_SESSION['valorenumero'] + $numerorandomico;
                if ($_SESSION['somma'] % 2 == 0) {
                    $_SESSION['pari_o_dispari'] = 'pari';
                } else {
                    $_SESSION['pari_o_dispari'] = 'dispari';
                }

                if ($_SESSION['pari_o_dispari'] == $_SESSION['scelta']) {
                    $_SESSION['vittoriautente'] = $_SESSION['vittoriautente'] + 1;
                    $_SESSION['win_lose'] = 'hai vinto il turno';
                } else {
                    $_SESSION['vittoriecomputer'] = $_SESSION['vittoriecomputer'] + 1;
                    $_SESSION['win_lose'] = 'hai perso il turno';
                }
            }
            if ($_SESSION['turno'] == 0) {
                echo "<label class='scritte_gioco'>Nome = " . $_SESSION['nome'] . "</label><br>";
                echo "<label class='scritte_gioco'>Turno = " . $_SESSION['turno'] . "</label><br>";
                echo "<label class='scritte_gioco'>Scelta = " . $_SESSION['scelta'] . "</label><br>";
            } else {
                echo "<label class='scritte_gioco'>Nome = " . $_SESSION['nome'] . "</label><br>";
                echo "<label class='scritte_gioco'>Turno = " . $_SESSION['turno'] . "</label><br>";
                echo "<label class='scritte_gioco'>Scelta = " . $_SESSION['scelta'] . "</label><br>";
                echo "<label class='scritte_gioco'>Hai giocato = " . $_SESSION['valorenumero'] . "</label><br>";
                echo "<label class='scritte_gioco'>Il computer ha giocato = " . $numerorandomico . "</label><br>";
                echo "<label class='scritte_gioco'>" . $_SESSION['win_lose'] . "</label><br>";
            }
        } else {
            if ($_SESSION['vittoriecomputer'] <= 2) {
                echo "<h1 class='scritte'>HAI VINTO</h1>";
            } else {
                echo "<h1 class='scritte'>HAI PERSO</h1>";
            }
        }



        ?>
        <div class="zona-gioco">
            <form action="pag2.php" method="get">
                <label class="scritte" style="font-size: 1.3rem;">Scegli il numero: </label>
                <select name="valori">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input type="submit" name="valoreinviato" value="OK" id="valoreinviato">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>