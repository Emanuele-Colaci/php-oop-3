<?php 
  
    class Notifiche extends Comunicazione {
        public $icona;
        
        public function __construct($mittente, $destinatari, $titolo, $messaggio, $suonoAvviso, $icona) {
            parent::__construct($mittente, $destinatari, $titolo, $messaggio, $suonoAvviso);
            $this->icona = $icona;
        }
    }

?>