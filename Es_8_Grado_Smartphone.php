<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grado smartphone</title>
</head>
<body>

<h1 style="color:blue;">Cellulari ricondizionati</h1>

    <?php 
    
    $modello="Google pixel 6";
    $grado="a";
    $str;

    switch($grado){

        case "a":
            $str="<h2>".$modello." è perfetto, pari al nuovo.</h2>";
            break;
        case "b":
            $str="<h2>".$modello." è in ottime condizioni.</h2>";
            break;
        case "c":
            $str="<h2>".$modello." è con graffi e/o segni di usura.</h2>";
            break;
        default:
            $str= "<h2 style='color:red;'>errore: grado non riconosciuto</h2>";
    }
    
    echo $str;
    
    ?>
</body>
</html>