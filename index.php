<?php
    // Includi le classi necessarie
    require_once __DIR__ . '/categoria.php';
    require_once __DIR__ .'/prodotto.php';
    require_once __DIR__ .'/cuccia.php';
    require_once __DIR__ .'/gioco.php';

    
    // Creazione delle categorie
    $categoriaCani = new Categoria("Cani");
    $categoriaGatti = new Categoria("Gatti");

     // Creazione dei prodotti
    $cucciaPerCani = new Cuccia("immagine-cuccia-cani.jpg", "Cuccia per Cani Morbida", 49.99, $categoriaCani);
    $giocoPerGatti = new Gioco("immagine-gioco-gatti.jpg", "Palla da Gioco per Gatti", 9.99, $categoriaGatti);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-2</title>
</head>
<body>
<?php
$giocoPerGatti = new Gioco("immagine-gioco-gatti.jpg", "Palla da Gioco per Gatti", 9.99, $categoriaGatti);

// Funzione per generare una card Bootstrap con i dettagli del prodotto
function generateProductCard($prodotto) {
    echo '<div class="card" style="width: 18rem;">
            <img src="' . $prodotto->getImmagine() . '" class="card-img-top" alt="' . $prodotto->getNome() . '">
            <div class="card-body">
                <h5 class="card-title">' . $prodotto->getNome() . '</h5>
                <p class="card-text">Prezzo: $' . $prodotto->getPrezzo() . '</p>
                <p class="card-text">Categoria: ' . $prodotto->getCategoria() . '</p>
            </div>
          </div>';
}

// Visualizzare i card dei prodotti
generateProductCard($cucciaPerCani);
generateProductCard($giocoPerGatti);


?>
</body>
</html>
