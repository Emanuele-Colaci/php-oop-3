<?php 

    class Messaggio extends Comunicazione {
        public $notificheLettura = false;
        public $risposta;
        
        public function __construct($mittente, $destinatari, $titolo, $messaggio, $suonoAvviso, $coloreLed, $notificheLettura, $risposta) {
            parent::__construct($mittente, $destinatari, $titolo, $messaggio, $suonoAvviso, $coloreLed);
            $this->notificheLettura = $notificheLettura;
            $this->risposta = $risposta;
        }
        
        
    }

?>