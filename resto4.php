<!DOCTYPE html>
<html lang="en">
    <!--META & LINK-->

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&family=Shrikhand&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="font_awesome/css/all.css" />
        <link rel="stylesheet" href="css/restaurants.css"  />
        <title>Oh My Food</title>
    </head>

    <body>
        <!--LOGO-->
        
        <?php include("header.php"); ?>
        
        <!--IMAGE-->
        <figure class="resto">
            <img class="resto__img" src="/Maquettes_Ohmyfood/images/restaurants/louis-hansel-shotsoflouis-qNBGVyOCY8Q-unsplash.jpg" alt="">
        </figure>

         <!--Menu-->

         <div class="menu">
            <div class="menu__titre">
             <h2>Le délice des sens</h2>
             <i class="far fa-heart"></i>
            </div> 

             <div class="menu__entrée">
                 <h3>ENTRÉES</h3>
                 <figure class="menu__card">
                     <h4>Tartare de thon</h4>
                     <p>Assaisonné au yuzu</p>
                     <p>25€</p>
                 </figure>
                 <figure class="menu__card">
                    <h4>Bouchée de homard croustillant</h4>
                    <p>Et sa farandole de petits légumes</p>
                    <p>35€</p>
                </figure>
                <figure class="menu__card">
                    <h4>Velouté de cèpes</h4>
                    <p>Aux truffes</p>
                    <p>20€</p>
                </figure>
             </div>

             <div class="menu__plats">
                    <h3>PLATS</h3>
                    <figure class="menu__card">
                        <h4>Poulet rôti aux herbes de provence</h4>
                        <p>Et sa crème de truffe</p>
                        <p>40€</p>
                    </figure>
                    <figure class="menu__card">
                       <h4>Langouste rôtie</h4>
                       <p>Et ses légumes de saison</p>
                       <p>35€</p>
                   </figure>
                   <figure class="menu__card">
                       <h4>Côte de boeuf angus</h4>
                       <p>Et sa purée de panais</p>
                       <p>44€</p>
                   </figure>        
            </div>

            <div class="menu__desserts">
                    <h3>DESSERTS</h3>
                    <figure class="menu__card">
                        <h4>Farandole de desserts</h4>
                        <p>Du chef</p>
                        <p>18€</p>
                    </figure>
                    <figure class="menu__card">
                       <h4>Crème brulée</h4>
                       <p>Revsitée</p>
                       <p>22€</p>
                   </figure>
                   <figure class="menu__card">
                       <h4>Tiramisu</h4>
                       <p>À la noisette</p>
                       <p>23€</p>
                   </figure>
                 
            </div>
            <div class="btn">
                <button>Commander</button>
            </div>
            
         </div>

         <!--FOOTER-->

         <?php include("footer.php"); ?>

    </body>