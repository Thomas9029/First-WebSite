<!DOCTYPE html>

<html lang="fr">
    <head>
        <title>Cyclique</title>
        <meta charset="utf-8">
        <meta name="viewport"   content="width=device-width, initial-scale=1.0">

        <link href="CSS/nav1.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/footer.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/card.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/dev.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/png" sizes="16x16" href="IMG/favicone.png">

    </head>

<!-- ---------------------------------------------------------------------------------------------------------- -->

    <body>

        <?php include 'inc/navbar.php'; ?>

        <br>

        </div>
<br><br><br><br><br>

<h2 id="titre">Bienvenue cher voyageur,</h3>
<p class="texte-promo">Sur notre site, vous pourrez trouver des coques de souris à télécharger et<br> même si vous le souhaitez, uploader vos propres schémas !</p>
<h3 id="sous-titre">Voici un aperçu des schémas.</h3>

<!-- ------------------------Fiche-souris---------------------------------------------- -->


        <main>
            <div class="container1">
                <div class="card first">
                  <a class="back" href="#">
                    <div class="screen"></div>
                    <div class="video"></div>
                    <h4>Image/vidéo</h4>
                  </a>
                  <div class="description">
                    <h2><a href="#">000</a></h2>
                  </div>

                  <div class="shop">
                    <h3><span></span></h3>

                    <button>Télécharger</button>
                  </div>
                </div>

<!-- ---------------------------- -->

            <div class="card second" href="#">
                <a class="back" href="#">
                  <div class="screen"></div>
                  <div class="video"></div>
                  <h4>Image/vidéo</h4>
                </a>
                <div class="description">
                  <h2><a href="#">001</a></h2>
                </div>
                <div class="shop">
                  <h3><span></span></h3>
                  <button>Télécharger</button>
                </div>
              </div>

<!-- ---------------------------- -->
              <div class="card third" href="#">
                <a class="back" href="#">
                  <div class="screen"></div>
                  <div class="video"></div>
                  <h4>Image/vidéo</h4>
                </a>
                <div class="description">
                  <h2><a href="#">002</a></h2>
                </div>
                <div class="shop">
                  <h3><span</span></h3>
                  <button>Télécharger</button>
                </div>
              </div>

<!-- ---------------------------- -->

              <div class="card four" href="#">
                <a class="back" href="#">
                  <div class="screen"></div>
                  <div class="video"></div>
                  <h4>Image/vidéo</h4>
                </a>
                <div class="description">
                  <h2><a href="#">003</a></h2>
                </div>
                <div class="shop">
                  <h3><span></span></h3>
                  <button>Télécharger</button>
                </div>
            </div>
        </main>





<!-- ------------------------Fiche-dev---------------------------------------------- -->




        <section id="tournaments">
            <div class="flex">
                <div class="box">
                    <span class="badge premium-tournament">Créateur des shéma 3D</span>
                    <div class="tournaments-image">
                        <img src="IMG/code-geass-4k-amazing-picture-wallpaper-preview.png" />
                    </div>
                    <div class="tournaments-content">
                        <h3>Gastou Paul</h3>
                        <div><label>Email 1 : scoutgastou@gmail.com</label> <strong></strong></div>
                        <div><label>Tel :</label> <strong>00.00.00.00.00</strong></div>
                        <div><label class="prizes">À propos:</label> <label>Concepteur du shéma de la souris 3D (PS : je préfère le site en #131516) </label></div>
                    </div>
                </div>

<!-- ---------------------------- -->

                <div class="box">
                    <span class="badge premium-tournament">Dév Front-End</span>
                    <div class="tournaments-image">
                        <img src="IMG/PP3.png" />
                    </div>
                    <div class="tournaments-content">
                        <h3>Hnizdo Thomas</h3>
                        <div><label>Email 1 : hnizdo@lasalle84.org</label> <strong></strong></div>
                        <div><label>Email 2 : thomas.hnizdo@gmail.com</label> <strong></strong></div>
                        <div><label>Tel</label> <strong>00.00.00.00.00</strong></div>
                        <div><label class="prizes">À propos:</label> <label>Dév Front-End du site internet et grand galérien du CSS avec Badouard Olivier.</label></div>
                    </div>
                </div>

<!-- ---------------------------- -->

                <div class="box">
                    <span class="badge premium-tournament">Dév Back-End</span>
                    <div class="tournaments-image">
                        <img src="IMG/mascottepmu.jpg" />
                    </div>
                    <div class="tournaments-content">
                        <h3>Badouard Olivier</h3>
                        <div><label>Email 1: badouard@lasalle84.org</label> <strong></strong></div>
                        <div><label>Tel :</label> <strong>00.00.00.00.00</strong></div>
                        <div><label class="prizes">À propos:</label> <label>dév du serveur web et du Back-End du site internet.</label></div>
                    </div>
                </div>
            </div>
        </section>
        
<?php include 'inc/Footer.php'; ?>

    </body>

</html>
