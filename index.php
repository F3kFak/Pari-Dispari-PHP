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
        <?php
            session_start();

            if (!isset($_POST['invia'])) {
                $_SESSION['turno'] = 1;
                $_SESSION['nome'] = 'Giocatore1';
                $_SESSION['vittoriecomputer'] = 0;
            $_SESSION['vittoriautente'] = 0;
            }
        ?>
    <h1 class="text-center scritte">Gioco del pari e del dispari</h1>
    
    <div class="linea"></div>
    
    <div class="text-center">
        <form action="pag2.php" method="post">
            <label class="scritte">Nome:</label>
            <input type="text" name="nomegiocatore" id="input_nome" value="giocatore 1" >
            <select name="pari_dispari" class="select-pari_dispari">
                <option value="pari">PARI</option>
                <option value="dispari">DISPARI</option>
            </select>
            <input type="submit" name="invia" value="Invia" id="invia">
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>