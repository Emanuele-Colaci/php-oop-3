<?php 

    class Comunicazione {
        public $mittente;
        public $destinatari;
        public $titolo;
        public $messaggio;
        public $suonoAvviso;
        public static $coloreLed = 'blue';
      
        public function __construct($mittente, $destinatari, $titolo, $messaggio, $suonoAvviso) {
            $this->mittente = $mittente;
            $this->destinatari = $destinatari;
            $this->titolo = $titolo;
            $this->messaggio = $messaggio;
            $this->suonoAvviso = $suonoAvviso;
        }

    }

?>