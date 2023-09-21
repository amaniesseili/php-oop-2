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
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  <!-- Custom css -->
  <link rel="stylesheet" href="style.css">

  <title>php-oop-2</title>
</head>
<body>

<div class="container d-flex justify-content-center mt-5 p-5">

  
<?php
$giocoPerGatti = new Gioco("immagine-gioco-gatti.jpg", "Palla da Gioco per Gatti", 9.99, $categoriaGatti);

// Funzione per generare una card Bootstrap con i dettagli del prodotto
function generateProductCard($prodotto) {
    echo '<div class="card m-5" style="width: 18rem;">
            <img src="' . $prodotto->getImmagine() . '" class="card-img-top" alt="' . $prodotto->getNome() . '">
            <div class="card-body text-center">
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

  
</div>
</body>
</html>
