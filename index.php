<?php

	require("config/commandes.php");
	$Produits=afficher();


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Sosashop</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    



 


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">A Propos</h4>
          <p class="text-muted">Bienvenue chez SosaShop,ce site a été creer dans le but de vous faire parvenir ce dont vous aurez besoin partout dans le monde. Alors passer vite vos commandes!</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Sign in</h4>
          <ul class="list-unstyled">
            <li><a href="admin/login.php" class="text-white">Se connecter</a></li>
            
          </ul>
        </div>
        
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
      <i class="fa fa-shopping-cart " style="font-size: 170%;"> </i>
        <strong>SosaShop</strong>
      </a>
      
     


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarHeader" aria-controls="navbarHeader" 
      aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

     


    </div>
   
  </div> 
  <br>
  
</header>

<main>

 

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      
	  
	    <?php foreach($Produits as $produit): ?>
        <div class="col">
          <div class="card shadow-sm">
            <h4><?= $produit->nom ?></h4>
			<img src="<?= $produit->image ?>" >

            <div class="card-body">
              <p class="card-text"><?= substr( $produit->description, 0,200);?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">
                  <a href="contact.php" style="text-decoration: none; font-weight:bold"> Acheter</a>
                  </button>
                 
                 
                 
                </div>
               
                

                <small class="text-muted" style="font-weight: bold"><?= $produit->prix ?> FCFA</small>
              </div>
            </div>
          </div>
        </div>
		<?php endforeach;?>
		
      </div>
    </div>
  </div>

</main>

<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2022 Company SosaServices</p>
   
  </footer>


  
      
  </body>
</html>
