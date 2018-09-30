<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sellboot</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">
	<link rel="shortcut icon" href="image/favicon.png"/>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<main class="main__enviar">
    <div class="modal__containerForm">
        <div class="modal__form">
            
            <img src="image/modal__bg.svg" alt="" class="modal__bg">

            
            <div class="container__input container__input--visible" id="container__input3">
                <div class="felicidades">
                    <img src="image/checked__ok.svg" alt="check">
                    <h2>Felicidades<br> te has suscrito correctamente</h2>
                    <button id="botonVolver" class="btn botonVolver">Volver</button>
                </div>
            </div>
        </div>
    </div>
</main>




<?php

    $Seller = $_POST["Seller"];
    $Empresa = $_POST["Empresa"];
    $email = $_POST["email"];
    $Phone = $_POST["Phone"];
    $Contry = $_POST["Contry"];
     
    $mensaje =  "Hola, se ha registrado un nuevo usuario, sus datos son los siguientes..." .
                " Input Radio: " . $Seller . 
                " Empresa: " . $Empresa . 
                " correo: " . $email . 
                " Telefono: " . $Phone . 
                " País: " . $Contry;


    $asunto = "Un nuevo suscriptor";
    $destinatario = "company@sellboot.com";
    // echo $destinatario . $asunto . $mensaje ;
    mail($destinatario, $asunto, $mensaje);
?> 

    <script src="js/volver.js"></script>
</body>
</html>


