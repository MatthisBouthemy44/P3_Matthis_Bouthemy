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
        <link rel="stylesheet" href="css/restaurants.css" />
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
             <h2>La note enchantée</h2>
             <i class="far fa-heart"></i>
            </div> 

             <div class="menu__entrée">
                 <h3>ENTRÉES</h3>
                 <figure class="menu__card">
                     <h4>Ravioles de foie gras</h4>
                     <p>Accompagnés de leur crème à la truffe</p>
                     <p>25€</p>
                 </figure>
                 <figure class="menu__card">
                    <h4>Caviar osciètre</h4>
                    <p>Sur blini à la farine de blé noir</p>
                    <p>35€</p>
                </figure>
                <figure class="menu__card">
                    <h4>Homard et espuma de potiron</h4>
                    <p>Mariné aux zestes d'orange</p>
                    <p>20€</p>
                </figure>
                <figure class="menu__card">
                    <h4>Foie gras de canard cuit entier</h4>
                    <p>Confiture de figue et pain toasté</p>
                    <p>35€</p>
                </figure>
             </div>

             <div class="menu__plats">
                    <h3>PLATS</h3>
                    <figure class="menu__card">
                        <h4>Noix de coquilles Saint-Jacques</h4>
                        <p>Sur lit de purée de céleri-rave</p>
                        <p>40€</p>
                    </figure>
                    <figure class="menu__card">
                       <h4>Langoustine poêlée</h4>
                       <p>Purée de patate douce</p>
                       <p>35€</p>
                   </figure>
                   <figure class="menu__card">
                       <h4>Mijoté de queue de boeuf </h4>
                       <p>Et riz sauvage aux zestes de citron</p>
                       <p>44€</p>
                   </figure>        
            </div>

            <div class="menu__desserts">
                    <h3>DESSERTS</h3>
                    <figure class="menu__card">
                        <h4>Macaron noisette et chocolat</h4>
                        <p>Glace au caramel brun et sel de Guérande</p>
                        <p>18€</p>
                    </figure>
                    <figure class="menu__card">
                       <h4>Baba au rhum revisité </h4>
                       <p>Avec son coulis de citron</p>
                       <p>22€</p>
                   </figure>
                   <figure class="menu__card">
                       <h4>Tarte au citron meringuée </h4>
                       <p>Déstructurée</p>
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