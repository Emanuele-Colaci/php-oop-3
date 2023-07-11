<?php 

    class Comunicazione {
        public $mittente;
        public $destinatari;
        public $titolo;
        public $messaggio;
        public $suonoAvviso;
        public $coloreLed;
      
        public function __construct($mittente, $destinatari, $titolo, $messaggio, $suonoAvviso, $coloreLed) {
            $this->mittente = $mittente;
            $this->destinatari = $destinatari;
            $this->titolo = $titolo;
            $this->messaggio = $messaggio;
            $this->coloreLed = $coloreLed;
        }

    }

?>