<?php

require_once __DIR__ . "/categoria.php";

// Classe per rappresentare un Prodotto
class Prodotto {
    protected $nome;
    protected $prezzo;
    protected $immagine;
    protected $categoria;

    // Costruttore per inizializzare le proprietà
    public function __construct( $immagine, $nome, $prezzo, Categoria $categoria) {
        $this->immagine = $immagine;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
    }

    // Getter per ottenere il nome/... del Prodotto

    
  public function getImmagine() {
      return $this->immagine;
  }

  public function getNome() {
      return $this->nome;
  }

  public function getPrezzo() {
      return $this->prezzo;
  }

  public function getCategoria() {
      return $this->categoria->getNome();
  }

  public function setImmagine($immagine) {
      $this->immagine = $immagine;
  }

  public function setNome($nome) {
      $this->nome = $nome;
  }

  public function setPrezzo($prezzo) {
      $this->prezzo = $prezzo;
  }
}
?>



