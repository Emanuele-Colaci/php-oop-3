<?php 
  
    class Notifiche extends Comunicazione {
        public $icona;
        
        public function __construct($mittente, $destinatari, $titolo, $messaggio, $suonoAvviso, $coloreLed, $icona) {
            parent::__construct($mittente, $destinatari, $titolo, $messaggio, $suonoAvviso, $coloreLed);
            $this->icona = $icona;
        }
    }

?>