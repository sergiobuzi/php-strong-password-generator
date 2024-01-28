<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- creo il form -->
     <form >
        <input type="number" name="passwordlenght">
        <input type="submit" value="CHECK">
    </form>
<?php

    // vado a prendere dalla barra degli indirizzi il valore che inseriamo nel form
    $password = $_GET['passwordlenght'];
    $fatto = false;
    if(isset($password)){

    

        // creo una variabile che prenda i valori del ciclo seguente
        $variabilePassword = '';

        // apro un ciclo che parta da 0 e arrivi fino al valore di password e incrementi di 1
        for($i = 0; $i < $password; $i++) {

            // la variabile che  ho creato va a rimepirsi con numeri che vanno da un minimo di 33 a un massimo di 125 che poi diventeranno caratteri asci tramite la funzione chr
            $variabilePassword .= chr(rand(33, 125)); 
            
        }
        $fatto=true;
    }
        
        if($fatto){
            session_start();
            $_SESSION["variabiledapassare"] = $variabilePassword;
            header('Location: ./partial.php');
        }
         
    ?>
</body>
</html>

