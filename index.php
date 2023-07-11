<?php 

    include './generals/comunicazioni.php';
    include './generals/email.php';
    include './generals/messaggio.php';
    include './generals/notifiche_push.php';
    
    $email = new Email('mittente@dominio.com', 'destinatario@dominio.com', 'Titolo email', 'Messaggio email', 'suono.mp3', 'verde','file.pdf','o','u','a');
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>PHP OOP 3</title>
    </head>
    <body>
        <div class="container">
            <h1>Comunicazioni</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Email
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $email->titolo; ?></h5>
                            <p class="card-text"><?php echo $email->messaggio; ?></p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Mittente: <?php echo $email->mittente; ?></li>
                                <li class="list-group-item">Destinatari: <?php echo $email->destinatari; ?></li>
                                <li class="list-group-item">Allegati: <?php echo $email->allegati; ?></li>
                                <li class="list-group-item">Notifica di consegna: <?php echo $email->notificheConsegna ? 'sì' : 'no'; ?></li>
                                <li class="list-group-item">Inoltrata: <?php echo $email->inoltra ? 'sì' : 'no'; ?></li>
                                <li class="list-group-item">Stampata: <?php echo $email->stampate ? 'sì' : 'no'; ?></li>
                            </ul>
                            <div class="card-footer">
                                <small class="text-muted">Inviata: <?php echo date('Y-m-d H:i:s'); ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>