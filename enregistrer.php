<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <!-- BOOTSTRAP-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TD Formulaire</title>
        <!-- FONT AWESOME-->
        <script src="https://kit.fontawesome.com/6ebea31493.js" crossorigin="anonymous"></script>
        <!-- GOOGLE FONTS-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@100&display=swap" rel="stylesheet">
        <!-- JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- BOOTSTRAP-->
        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- CSS INTERNAL -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>

        <!-- SITE HEADER -->
        <header>
            <nav>

            </nav>
        </header>

        <main>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="title text-center mt-3">TD Formulaire (HTML/CSS/JS/PHP)</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <hr>
                <article>
                    <div class="container text-center recap">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <h2>Félicitations !</h2>
                                <div><i class="fa-brands fa-angellist"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="container text-start recap">
                        <div class="row mb-4">
                            <div class="col-12 mt-5 recap-title text-center">
                                Récapitulatif
                            </div>
                        </div>
                    </div>
                    <div class="container text-start recap recap-detail">    
                        <div class="row">
                            <div class="col-12">Raison sociale:
                                <span class="infoClient"><?php echo htmlspecialchars($_POST['raisonSociale']); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">Code Client:
                                    <span class="infoClient upper"><?php echo htmlspecialchars($_POST['codeClient']); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">Siret/Siren:
                                    <span class="infoClient upper"><?php echo htmlspecialchars($_POST['siret']); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">Numéro TVA:
                                    <span class="infoClient upper"><?php echo htmlspecialchars($_POST['tva']); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">Forme juridique:
                                    <span class="infoClient upper"><?php echo htmlspecialchars($_POST['formeJuridique']); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">Type de client:
                                    <span class="infoClient capitalize"><?php echo htmlspecialchars($_POST['typeClient']); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">Secteur d'activité:
                                    <span class="infoClient capitalize"><?php echo htmlspecialchars($_POST['secteurActivites']); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">Civilité:
                                    <span class="infoClient upper"><?php echo htmlspecialchars($_POST['civilite']); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">Nom:
                                    <span class="infoClient upper"><?php echo htmlspecialchars($_POST['nom']); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">Prénom:
                                    <span class="infoClient upper"><?php echo htmlspecialchars($_POST['prenom']); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">Adresse:
                                    <span class="infoClient"><?php echo htmlspecialchars($_POST['adresse']); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">Adresse (suite):
                                    <span class="infoClient"><?php echo htmlspecialchars($_POST['adresseSuite']); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">Code postal:
                                    <span class="infoClient upper"><?php echo htmlspecialchars($_POST['codePostal']); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">Ville:
                                    <span class="infoClient upper"><?php echo htmlspecialchars($_POST['ville']); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">Pays:
                                    <span class="infoClient upper"><?php echo htmlspecialchars($_POST['pays']); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">Téléphone (fixe):
                                    <span class="infoClient upper"><?php echo htmlspecialchars($_POST['telephone']); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">Mobile:
                                    <span class="infoClient upper"><?php echo htmlspecialchars($_POST['mobile']); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">Email:
                                    <span class="infoClient"><?php echo htmlspecialchars($_POST['email']); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">Email (backup):
                                    <span class="infoClient"><?php echo htmlspecialchars($_POST['emailBackup']); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">Site internet:
                                    <span class="infoClient"><?php echo htmlspecialchars($_POST['siteInternet']); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">Commentaire:
                                    <span class="infoClient"><?php echo htmlspecialchars($_POST['commentaire']); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 image text-center mt-3 mb-3">
                                <?php

                                    #var_dump($_FILES);

                                    if(isset($_FILES['file'])){
                                        $tmpName = $_FILES['file']['tmp_name'];
                                        $name = $_FILES['file']['name'];
                                        $size = $_FILES['file']['size'];
                                        $error = $_FILES['file']['error'];
                                        move_uploaded_file($tmpName, './img/'.$name);
                                        echo '<img src="./img/'.$name.'" alt="pics" class="image-form">';

                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </main>

        <footer>

        </footer>

    <!-- JS INTERNAL -->
    <script type="text/javascript" src="./js/plugin.js"></script>
    </body>
</html>