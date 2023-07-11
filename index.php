<?php 

    include './generals/comunicazioni.php';
    include './generals/email.php';
    include './generals/messaggio.php';
    include './generals/notifiche_push.php';
    
    $comunicazioni = [
        new Email('mittente@dominio.com', 'destinatario@dominio.com', 'Mando email', 'Messaggio email', 'Driiin', 'verde','file.pdf','o','u','a'),
        new Messaggio('mittente@dominio.com', 'destinatario@dominio.com', 'Rispondo email', 'Messaggio email', 'Driiin', 'verde','Messaggio letto','Risposta messaggio'),
        new Notifiche('mittente@dominio.com', 'destinatario@dominio.com', 'Icona', 'Messaggio email', 'Driiin', 'verde','"fa-solid fa-face-smile"'),
    ];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <?php foreach($comunicazioni as $comunicazione) { ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $comunicazione->titolo; ?></h5>
                                <p class="card-text"><?php echo $comunicazione->messaggio; ?></p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Mittente: <?php echo $comunicazione->mittente; ?></li>
                                    <li class="list-group-item">Destinatari: <?php echo $comunicazione->destinatari; ?></li>
                                    <li class="list-group-item">Suono avviso: <?php echo $comunicazione->suonoAvviso ?> Driiin </li>
                                    <?php if($comunicazione instanceof Email) { ?>
                                        <li class="list-group-item">Allegati: <?php echo $comunicazione->allegati; ?></li>
                                        <li class="list-group-item">Notifica di consegna: <?php echo $comunicazione->notificheConsegna ? 'sì' : 'no'; ?></li>
                                        <li class="list-group-item">Inoltrata: <?php echo $comunicazione->inoltra ? 'sì' : 'no'; ?></li>
                                        <li class="list-group-item">Stampata: <?php echo $comunicazione->stampate ? 'sì' : 'no'; ?></li>
                                    <?php } if($comunicazione instanceof Messaggio) { ?>
                                        <li class="list-group-item">Notifica Letta: <?php echo $comunicazione->notificheLettura ? 'sì' : 'no'; ?></li>
                                        <li class="list-group-item">Risposta: <?php echo $comunicazione->risposta ?> Ciao tutto bene</li>
                                    <?php } if($comunicazione instanceof Notifiche) { ?>
                                        <li class="list-group-item"><i class=<?php echo $comunicazione->icona ?>></i></li>
                                    <?php } ?>
                                </ul>
                                <div class="card-footer">
                                    <small class="text-muted">Inviata: <?php echo date('Y-m-d H:i:s'); ?></small>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>