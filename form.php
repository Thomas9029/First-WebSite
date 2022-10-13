<!DOCTYPE html>

<html lang="fr">

 <!--tête + liens // head + links -->

  <head>
    <title>Cyclique </title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="CSS/nav1.css">
    <link rel="stylesheet" href="CSS/form.CSS" />
    <link rel="stylesheet" href="CSS/footer.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="IMG/favicone.png">

  </head>

<!-- fin tête + liens // end head + links -->

  <body>



  <?php include 'inc/navbar.php'; ?>

<!--Fin Navbar-->
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

<!-- ---------------------------------------------------------------------------------------------------------- -->

          <form action="#" class="sign-in-form">
            <h2 class="title">S'identifier</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Pseudo" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Mot de passe" />
            </div>
            <input type="submit" value="S'identifier" class="btn solid" />
          </form>

<!-- ---------------------------------------------------------------------------------------------------------- -->

          <form action="#" class="sign-up-form">
            <h2 class="title">S'inscrire</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Pseudo" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Mot de passe" />
            </div>
            <input type="submit" class="btn" value="S'inscrire" />

          </form>
        </div>
      </div>

<!-- ---------------------------------------------------------------------------------------------------------- -->

      <div class="panels-container">

<!-- ---------------------------------------------------------------------------------------------------------- -->

        <div class="panel left-panel">
          <div class="content">
            <h3>Nouveaux </h3>
            <p>
            Tu es nouveau ? N'hésite pas à t'inscrire pour pouvoir faciliter ta navigation <br> sur notre site !
            </p>
            <button class="btn transparent" id="sign-up-btn">
              S'inscrire
            </button>
          </div>
          <img src="" class="image" alt="" />
        </div>

<!-- ---------------------------------------------------------------------------------------------------------- -->

        <div class="panel right-panel">
          <div class="content">
            <h3>L'un d'entre nous ?</h3>
            <p>
              Si tu fais déjà partie de la communauté tu peux tout simplement te connecter à ton compte !
            </p>
            <button class="btn transparent" id="sign-in-btn">
              S'identifier
            </button>
          </div>
          <img src="" class="image" alt="" />
        </div>

<!-- ---------------------------------------------------------------------------------------------------------- -->

      </div>
    </div>

      <!-- Site footer -->
      <?php include 'inc/Footer.php'; ?> 

     <script src="JS/form.js"></script>
  </body>
</html>
