<?php 

    class Email extends Comunicazione {
        public $allegati;
        public $notificheConsegna;
        public $inoltra;      
        public $stampate;
        
        public function __construct($mittente, $destinatari, $titolo, $messaggio, $suonoAvviso, $coloreLed, $allegati, $notificheConsegna, $inoltra, $stampate) {
            parent::__construct($mittente, $destinatari, $titolo, $messaggio, $suonoAvviso, $coloreLed);
            $this->notificheConsegna = $notificheConsegna;
            $this->allegati = $allegati;
            $this->inoltra = $inoltra;
            $this->stampate = $stampate;
        }
    }

?>