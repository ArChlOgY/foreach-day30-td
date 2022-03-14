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
                <article>
                    <hr>
                    <form action="enregistrer.php" method="post">
                    <div class="container form">
                        <div class="row">
                            <div class="col-12 form-title mb-3" >
                                <h3>Informations générales</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="raisonSociale">Raison sociale</label>
                                <input type="text" id="raisonSociale" name="raisonSociale" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-s-12 col-md-4 mt-3">
                                <label for="codeClient">Code Client</label>
                                <input type="text" id="codeClient" name="codeClient" class="form-control">
                            </div>
                            <div class="col-s-12 col-md-4 mt-3">
                                <label for="siret">Siret/Siren</label>
                                <input type="text" id="siret" name="siret" class="form-control">
                            </div>
                            <div class="col-s-12 col-md-4 mt-3">
                                <label for="tva">Numéro TVA</label>
                                <input type="text" id="tva" name="tva" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-s-12 col-md-4 mt-3">
                                <label for="formeJuridique">Forme juridique</label>
                                <select id="formeJuridique" name="formeJuridique" class="form-select">
                                    <option value="">-- Choisir une forme juridique --</option>
                                    <option value="eirl">EIRL</option>
                                    <option value="sasu">SASU</option>
                                    <option value="sas">SAS</option>
                                    <option value="sarl">SARL</option>
                                    <option value="sarl">SARL</option>
                                    <option value="sa">SA</option>
                                </select>
                            </div>
                            <div class="col-s-12 col-md-4 mt-3">
                                <label for="typeClient">Type de client</label>
                                <select id="typeClient" name="typeClient" class="form-select">
                                    <option value="">-- Choisir un type de client --</option>
                                    <option value="entreprise">Entreprise</option>
                                    <option value="association">Association</option>
                                    <option value="personnel">Personnel</option>
                                </select>
                            </div>
                            <div class="col-s-12 col-md-4 mt-3">
                                <label for="secteurActivites">Secteur d'activité</label>
                                <select id="secteurActivites" name="secteurActivites" class="form-select">
                                    <option value="">-- Choisir un secteur d'activité --</option>
                                    <option value="agriculture">Agriculture</option>
                                    <option value="assurance">Assurance</option>
                                    <option value="alimentaire">Alimentaire</option>
                                    <option value="batiment">Batiment</option>
                                    <option value="commerce">Commerce</option>
                                    <option value="fabrication">Fabrication</option>
                                    <option value="restauration">Restauration</option>
                                    <option value="industrie">Industrie</option>
                                    <option value="service">Service</option>
                                    <option value="transport">Transport et logistique</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-s-12 col-md-2 mt-3">
                                <label for="civilite">Civilité</label>
                                <select id="civilite" name="civilite" class="form-select">
                                    <option value="">-- Choisir une civilité --</option>
                                    <option value="monsieur">MR</option>
                                    <option value="madame">MME</option>
                                </select>
                            </div>
                            <div class="col-s-12 col-md-5 mt-3">
                                <label for="nom">Nom</label>
                                <input type="nom" id="nom" name="nom" class="form-control">
                            </div>
                            <div class="col-s-12 col-md-5 mt-3">
                                <label for="prenom">Prénom</label>
                                <input type="prenom" id="prenom" name="prenom" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-s-12 col-md-6 mt-3">
                                <label for="adresse">Adresse</label>
                                <input type="text" id="adresse" name="adresse" class="form-control">
                            </div>
                            <div class="col-s-12 col-md-6 mt-3">
                                <label for="adresseSuite">Adresse (suite)</label>
                                <input type="text" id="adresseSuite" name="adresseSuite" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-s-12 col-md-4 mt-3">
                                <label for="codePostal">Code postal</label>
                                <input type="text" id="codePostal" name="codePostal" class="form-control">
                            </div>
                            <div class="col-s-12 col-md-4 mt-3">
                                <label for="ville">Ville</label>
                                <input type="text" id="ville" name="ville" class="form-control">
                            </div>

                            <div class="col-s-12 col-md-4 mt-3">
                                <label for="pays">Pays</label>
                                <select id="pays" name="pays" class="form-select">
                                    <option value="">-- Choisir un pays --</option>
                                    <option value="fr">France</option>
                                    <option value="be">Belgique</option>
                                    <option value="de">Allemagne</option>
                                    <option value="es">Espagne</option>
                                    <option value="it">Italie</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-s-12 col-md-6 mt-3">
                                <label for="telephone">Téléphone (fixe)</label>
                                <input type="text" id="telephone" name="telephone" class="form-control">
                            </div>
                            <div class="col-s-12 col-md-6 mt-3">
                                <label for="mobile">Mobile</label>
                                <input type="text" id="mobile" name="mobile" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-s-12 col-md-6 mt-3">
                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                            <div class="col-s-12 col-md-6 mt-3">
                                <label for="emailBackup">Email (backup)</label>
                                <input type="text" id="emailBackup" name="emailBackup" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <label for="siteInternet">Site internet</label>
                                <input type="text" id="siteInternet" name="siteInternet" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <label for="commentaire">Commentaire</label>
                                <textarea  id="commentaire" name="commentaire" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3 text-end">
                            <button type="submit" class="btn btn-primary" onclick="return verification()">Ajouter le client</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </article>
                <article></article>
            </section>
        </main>

        <footer>

        </footer>

    <!-- JS INTERNAL -->
    <script type="text/javascript" src="./js/plugin.js"></script>
    </body>
</html>