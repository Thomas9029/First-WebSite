<DOCTYPE html>

<html lang="fr">

    <!--tête + liens // head + links -->

    <head>
        <title>Cyclique</title>
        <link href="CSS/nav1.css" rel="Stylesheet" type="text/css"/>
        <link href="CSS/card.css" rel="Stylesheet" type="text/css"/>
        <link href="CSS/footer.css" rel="Stylesheet" type="text/css"/>
        <link href="CSS/PAGI.css" rel="Stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <meta name="viewport"   content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" sizes="16x16" href="IMG/favicone.png">
    </head>

    <!-- Fin de tête + liens // End of head + links -->

    <body>
        <!--Navbar-->

            <?php include 'inc/navbar.php'; ?>

        <!-- Fin Navbar -->

        <!-- Début Script -->

        <main role="main">
        <div class="album py-5 bg-light">
            <div class="contaiiner">
                <div class="row">
                    <?php
                    $sql = "
                    SELECT *
                    FROM liste_jeu
                    ORDER BY date DESC
                    ";
                    $result = $conn->query($sql);

                    while($data = $result->fetch()){
                        ?>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="<?php echo($data['image']); ?>" data-holder-rendered="true">
                                <div class="card-body">
                                    <p class="card-text"><?php echo($data['titre']); ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="review/<?php echo($data['id']); ?>_<?php echo($data['titre']); ?>" class="btn btn-sm btn-outline-secondary">Voir</a>
                                        </div>
                                        <small class="text-muted"><i class="fas fa-calendar-alt"></i> <?php echo(date('d/m/Y',strtotime($data['date']))); ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
        
    <!-- Fin Script -->
    
        <!--Footer-->
        
            <?php include 'inc/Footer.php'; ?>

        <!--Fin Footer-->
    </body>