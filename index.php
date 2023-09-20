<?php

// Classe per rappresentare un Prodotto
class Prodotto {
    private $nome;
    private $prezzo;
    private $immagine;

    // Costruttore per inizializzare le proprietà
    public function __construct($nome, $prezzo, $immagine,) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
    }

    // Getter per ottenere il nome del Prodotto
    public function getNome() {
        return $this->nome;
    }


}

