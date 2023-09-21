
<?php
// Definizione della classe Categoria
class Categoria {
    protected $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}
?>