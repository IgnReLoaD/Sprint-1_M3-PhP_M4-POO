<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport"    content="width=device-width, initial-scale=1.0">
        <meta name = "description" content = "Estudi de PhP (Personal Home Page Tools)">
        <meta name = "author"      content = "Ignasi - IT Academy BcnActiva">
        <meta name = "keywords"    content = "php personal home page web tools development">     
        <title>Sprint-1_M4-PhP-POO-Pocker</title>
        <link rel="stylesheet" href="Styles/styles.css">          
    </head>
    <body>
        <div id="content" class="flex-vertical">

            <header class="flex-vertical">
                <hgroup id="header-sup" class="flex-horizontal">
                    <div id="header-left" class="lateral">  IT Academy </div>
                    <div id="header-center" class="central"> Itinerari LAMP (Linux-Apache-MySQL-PhP) </div>
                    <div id="header-right" class="lateral"> Bcn Activa </div>
                </hgroup>
                <hgroup id="header-inf" >
                    <div id="header-center-inf">PhP-POO Nivell-2...: &nbsp; &nbsp; Exercici - Poker Dice   </div>
                </hgroup>
            </header>        
            
            <main class="flex-horizontal">
                <article class="flex-vertical">
                    <section class="art-corto, flex-2-cols">
                        <post class="art-largo"> 
                            <?php include 'Views/exer_2_MainView.php';?>
                        </post>                    
                    </section>
                    <section class="flex-2-cols">
                        <post class="art-corto"> </post>
                        <post class="art-corto"> </post>
                    </section>                  
                </article>

                <aside>
                    <section class="flex-vertical-dalt">
                        <p class="aside-item"> &nbsp; </p>
                        <p class="aside-item"> &nbsp; </p>
                    </section>
                    
                </aside>
            </main>

            <footer>
                <p> IT Academy - Cibernarium - Bcn Activa - Ajuntament de Barcelona - 2022-23 </p>
            </footer>
        </div>
    </body>
</html>