<?php
// Definizione del Trait per gestire l'IVA
trait CalcoloIVA {
    public function calcolaPrezzoConIVA($prezzo) {
        $iva = 0.22; // L'IVA è del 22%
        $prezzoConIVA = $prezzo + ($prezzo * $iva);
        return $prezzoConIVA;
    }
}
?>