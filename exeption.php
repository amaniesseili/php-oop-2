<?php
// Definizione del class di eccezione per gestire errori nel negozio
class NegozioException extends Exception {
    public function errorMessage() {
        return "Errore nel negozio: " . $this->getMessage();
    }
}
?>