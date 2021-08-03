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
             <h2>À la française</h2>
             <i class="far fa-heart"></i>
            </div> 

             <div class="menu__entrée">
                 <h3>ENTRÉES</h3>
                 <figure class="menu__card">
                     <h4>Tartare de poulpe acidulé</h4>
                     <p>Aux zestes d'orange</p>
                     <p>25€</p>
                 </figure>
                 <figure class="menu__card">
                    <h4>Velouté de légumes d'antan</h4>
                    <p>Carotte, panais, topinambour</p>
                    <p>35€</p>
                </figure>
                <figure class="menu__card">
                    <h4>Soupe à l'oignon</h4>
                    <p>Revisitée</p>
                    <p>20€</p>
                </figure>
             </div>

             <div class="menu__plats">
                    <h3>PLATS</h3>
                    <figure class="menu__card">
                        <h4>Coquilles Saint-Jacques</h4>
                        <p>Accompagnées d'une purée de panais</p>
                        <p>40€</p>
                    </figure>
                    <figure class="menu__card">
                       <h4>Magret de canard</h4>
                       <p>Et parmentier de pommes de terre</p>
                       <p>35€</p>
                   </figure>
                   <figure class="menu__card">
                       <h4>Pigeonneau d’Ille-et-Vilaine</h4>
                       <p>Sur son lit de gnocchis aux légumes</p>
                       <p>44€</p>
                   </figure>        
            </div>

            <div class="menu__desserts">
                    <h3>DESSERTS</h3>
                    <figure class="menu__card">
                        <h4>Pétales de violettes glacés</h4>
                        <p>Et purée de noisettes</p>
                        <p>18€</p>
                    </figure>
                    <figure class="menu__card">
                       <h4>Fondant au chocolat</h4>
                       <p>Revsité</p>
                       <p>22€</p>
                   </figure>
                   <figure class="menu__card">
                       <h4>Millefeuille croustillant</h4>
                       <p>Myrtilles et pâte d’amande</p>
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