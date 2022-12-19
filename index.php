<?php 

    include_once __DIR__ . '/classi/accessori.php';
    include_once __DIR__ . '/classi/prodotto.php';
    include_once __DIR__ . '/classi/category.php';
    include_once __DIR__ . '/classi/cibo.php';
    include_once __DIR__ . '/classi/giocattoli.php';

    $category = [
        'cane' => new Categorie('cane', 'fa-solid fa-dog'),
        'uccello' => new Categorie('uccello', 'fa-solid fa-cat'),
        'gatto' => new Categorie('gatto', 'fa-solid fa-dove')
    ];

    //var_dump( $category );

    $prodottiCani = [
        new Cibo( 'https://cdn.royalcanin-weshare-online.io/v2k6a2QBG95Xk-RBN9oV/v196/packshot-mini-ad-shn17', 'Royal Canin', 43.99, $category['cane'], 545, 'prosciutto, riso' ),

        new Cibo( 'https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/medium/adult/con/manzo/fresco/5/800/68015_pla_almo_nature_holistic_adult_rind_reis_medium_746_12kg_dog_5.jpg', 'Almo Nature', 44.99, $category['cane'], 600, 'manzo, cereali' ),

    ];

    $prodottiUccelli = [ 
        new Accessori('https://static.bighunter.net/foto/1_Def_per_web_zoom/14089/14089.jpg', 'Voliera Ferplast Bella Casa', 184.99, $category['uccello'], 'legno', 'M: L83 x P67 x H153 cm ')
    ];

    $prodottiGatti = [ 
        new Giocattoli( 'https://i.ebayimg.com/images/g/03kAAOSwA4BbK4Gm/s-l500.jpg', 'Topini di Peluche Trixie', 4.99, $category['gatto'], 'Morbido con codina in corda', '8.5 cm x 10 cm' )
    ];

    // var_dump( $prodotti );

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Boolshop</title>
    <!-- BOOSTRAP CSS LINK-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <!-- FONTAWESOME LINK-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- CSS LINK-->
    <link rel="stylesheet" href="/style.css" />
  </head>

  <body>
    
    <div class="container">
        <h1>Boolshop</h1>
        <h2>I nostri prodotti</h2>
        <div class="row">
            <div class="col-4 ">
               <?php foreach ($prodottiCani as $element) { ?>
                   <div class="card">
                    <img src= "<?php echo $element -> immagine ?>" class="card-img-top w-100" alt="...">
                    <div class="card-body ">
                        <h4 class="card-title text-dark text-uppercase"><?php echo $element -> nome ?></h4>
                        <?php foreach($category as $elemento) ?>
                            <i class="<?php echo $elemento -> icona ?>"></i>
                            <p>
                                <?php echo $elemento -> nome ?>
                            </p> 
                        <h5 class="card-title text-dark opacity-50">
                        <?php echo $element -> prezzo  ?>
                        </h5>
                        <p class="card-text text-dark opacity-50">
                        <?php echo $element -> pesonetto  ?>
                        <p class="card-text text-dark opacity-50">
                        <?php echo $element -> ingredienti  ?>
                        </p>
                        </p>
                        
                    </div>
                </div> 
        <?php } ?> 
            </div>

                    <div class="col-4">
                        <?php foreach ($prodottiUccelli as $el) { ?>
                        <div class="card">
                            <img src= "<?php echo $el -> immagine ?>" class="card-img-top " alt="...">
                            <div class="card-body ">
                                <h4 class="card-title text-dark text-uppercase"><?php echo $el -> nome ?></h4>
                                <?php foreach($category as $elemento) ?>
                                    <i class="<?php echo $elemento -> icona ?>"></i>
                                    <p>
                                        <?php echo $elemento -> nome ?>
                                    </p> 
                                <h5 class="card-title text-dark opacity-50">
                                    <?php echo $el -> prezzo  ?>
                                </h5>
                                <p class="card-text text-dark opacity-50">
                                    <?php echo $el -> materiale  ?>
                                </p>
                                <p class="card-text text-dark opacity-50">
                                    <?php echo $el -> dimensioni  ?>
                                </p>
                                
                            </div>
                        </div> 
                        <?php } ?> 
                    </div>
                
                    <div class="col-4">
                           <?php foreach ($prodottiGatti as $data) { ?>
                                <div class="card">
                                    <img src= "<?php echo $data -> immagine ?>" class="card-img-top " alt="...">
                                    <div class="card-body ">
                                        <h4 class="card-title text-dark text-uppercase"><?php echo $data -> nome ?></h4>
                                        <?php foreach($category as $elemento) ?>
                                            <i class="<?php echo $elemento -> icona ?>"></i>
                                            <p>
                                                <?php echo $elemento -> nome ?>
                                            </p> 
                                        <h5 class="card-title text-dark opacity-50">
                                            <?php echo $data -> prezzo  ?>
                                        </h5>
                                        <p class="card-text text-dark opacity-50">
                                            <?php echo $data -> caratteristiche  ?>
                                        </p>
                                        <p class="card-text text-dark opacity-50">
                                            <?php echo $data -> dimensioni  ?>
                                        </p>
                                        
                                    </div>
                                </div> 
                                <?php } ?>
                        </div> 
                    </div>
                </div>

    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- BOOTSTRAP JAVASCRIPT LINK-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <!-- VUE 2 LINK-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- JAVASCRIPT LINK-->
    <script type="text/javascript" src="./main.js"></script>
  </body>
</html>
