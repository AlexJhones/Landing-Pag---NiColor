<?php
include('lib/mail.php');
if(count($_POST) > 0) {
    $name = $_POST['name'];
    $address = $_POST['email'];
    send_mail ($address,
    "
    <h1>Que bom te ver por aqui!</h1>
    <p>Vinhemos te lembrar do nosso encontro $name!</p>
    <p>O maior evento de criatividade em decorações do lar.</p>
    <p>Vai ser nesse domingo dia 28 de maio, a partir das 14h, esperamos por você.</p>
    ");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css?v2" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>NiColor</title>
</head>
<body>
    <header id="event-description">
        <div id="disclaimer">
            <h2>NiColor</h2>
            <p class="about-event">Um evento para revolucionar a sua criatividade</p>
            <p>Data do evento:</p>
            <p class="event-date">Domingo, 28 de maio, a partir das 14h</p>
        </div>

        <div id="subscription-form">
        <p>Preencha o formulário para receber detalhes do evento</p>
        <form method="POST" action="">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" placeholder="Seu nome">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Seu melhor e-mail">
            </div>
        <input type="submit" class="btn" value="Quero me inscrever">
        </form>

        </div>
    </header>
</body>
</html>