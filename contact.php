<!DOCTYPE html>

<html lang="fr">

<!-- ---------------------------------------------------------------------------------------------------------- -->

    <head>
        <title>Cyclique </title>
        <meta charset="utf-8">
        <meta name="viewport"   content="width=device-width, initial-scale=1.0">
        <link href="CSS/nav1.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/contact.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="CSS/footer.css" />
        <link rel="icon" type="image/png" sizes="16x16" href="IMG/favicone.png">

       
    </head>

<!-- ---------------------------------------------------------------------------------------------------------- -->

    <body>
    <?php include 'inc/navbar.php'; ?> 
<!-------------------------------------------------------------------------------------------------------------->
<br><br><br><br><br>
<form class="my-form">
    <div class="container">
      <h1>Contactez-nous !</h1>
      <ul>
        <li>
          <select>
            <option selected disabled>-- Choisir une catégorie --</option>
            <option>Requêtes</option>
            <option>Questions</option>
            <option>Autres</option>      
          </select>
        </li>
        <li>
          <div class="grid grid-2">
            <input type="text" placeholder="Nom" required>  
            <input type="text" placeholder="Prenom" required>
          </div>
        </li>
        <li>
          <div class="grid grid-2">
            <input type="email" placeholder="Email" required>  
            <input type="tel" placeholder="Tel">
          </div>
        </li>    
        <li>
          <textarea placeholder="Message"></textarea>
        </li>   
        <li>
          <input type="checkbox" id="terms">
          <label for="terms">J'ai lu et accepté <a href="">Les termes et conditions.</a></label>
        </li>  
        <li>
          <div class="grid grid-3">
            <div class="required-msg">Champs requis</div>
            <button class="btn-grid" type="submit" disabled>
              
              <span class="front">Envoyer</span>
            </button>
            <button class="btn-grid" type="reset" disabled>
              
              <span class="front">Supprimer</span>
            </button> 
          </div>
        </li>    
      </ul>
    </div>
  </form>
  <?php include 'inc/Footer.php'; ?> 

<!-- ---------------------------------------------------------------------------------------------------------- -->
<script src="JS/contact.js"></script>
    </body>    



</html>