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

         <!--Menu&-->

         <div class="menu">
            <div class="menu__titre">
             <h2>La palette du goût</h2>
             <i class="far fa-heart"></i>
            </div> 

             <div class="menu__entrée">
                 <h3>ENTRÉES</h3>
                 <figure class="menu__card">
                     <h4>Fricassée d'escargot</h4>
                     <p>Au piment d'Espelette </p>
                     <p>25€</p>
                 </figure>
                 <figure class="menu__card">
                    <h4>Foie gras de canard mi-cuit</h4>
                    <p>Et ses copeaux de truffe noire</p>
                    <p>35€</p>
                </figure>
                <figure class="menu__card">
                    <h4>Oeuf au plat</h4>
                    <p>Assaisonné à la truffe sur lit de caviar</p>
                    <p>20€</p>
                </figure>
             </div>

             <div class="menu__plats">
                    <h3>PLATS</h3>
                    <figure class="menu__card">
                        <h4>Filet de boeuf aux herbes</h4>
                        <p>Accompagné de sa ribambelle de légumes</p>
                        <p>40€</p>
                    </figure>
                    <figure class="menu__card">
                       <h4>Parmentier de queue de boeuf</h4>
                       <p>À la truffe noire sur sa purée de panais</p>
                       <p>35€</p>
                   </figure>
                   <figure class="menu__card">
                       <h4>Filet de turbot</h4>
                       <p>Aux agrumes</p>
                       <p>44€</p>
                   </figure>        
            </div>

            <div class="menu__desserts">
                    <h3>DESSERTS</h3>
                    <figure class="menu__card">
                        <h4>Paris-Brest</h4>
                        <p>Revisité</p>
                        <p>18€</p>
                    </figure>
                    <figure class="menu__card">
                       <h4>Macaron au chocolat d'exception </h4>
                       <p>Et glace à la vanille de Madagascar</p>
                       <p>22€</p>
                   </figure>
                   <figure class="menu__card">
                       <h4>Mousse au chocolat </h4>
                       <p>Au piment d'Espelette et à la truffe noire</p>
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