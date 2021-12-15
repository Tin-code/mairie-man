<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <!-- bootstrap icons cdn link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Mairie de Man</title>
</head>
<body>
    <div class="row text-white p-3 bg-green">
        <h1 class="text-center m-3">Mes services </h1>
        <h5 class="text-center m-3">Accueil<i class="bi bi-arrow-right-short"></i> Mes services</h5>
    </div>

    <div class="container-fluid">
        <div class="row p-4">
            <div class="col-12 col-md-4 mt-3">
                <img src="./assets/images/demarche.jpeg" alt="" width="100%">
            </div>
            <div class="col-12 col-md-8 mt-3 text-center">
                <h1 class="color-green text-center">Demarches administratives</h1>
                <p class="mt-2 ft-30">
                    Pour faciliter vos démarches administratives, la mairie
                    met à votre disposition cette plateforme qui vous permettra
                    de faire vos demandes de documents administratifs en ligne
                    et ainsi raccourcir votre temps d’attente.
                </p>
                <div class="mt-5">
                    <div class="m-2">
                        <a class="m-2 text-danger" href="naissance.php">Estrait rapide</a>
                        <a class="m-2" href="mariage.php">Mariage</a>
                        <a class="m-2" href="certificats.php">Certificats</a>
                        <a class="m-2" href="autorisations.php">Autorisations</a>
                    </div>
                    <div class="m-2">
                        <a class="m-2" href="naissance.php">Naissance</a>
                        <a class="m-2" href="deces.php">Acte de décès</a>
                        <a class="m-2" href="legalisation.php">Légalisation</a>
                        <a class="m-2" href="divers.php">Autres</a>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center col-md-7">
                    <h1 class="color-green text-center">Nos offres d'emplois</h1>
                    <p class="mt-3">
                        Vous êtes à la recherche d’un emploi?
                        Vous avez une entreprise et souhaitez travailler
                        en collaboration avec la Mairie de la commune de Man ?
                        Cette rubrique est faite pour vous.
                    </p>
                    <a href="#" class="text-danger">Voir toutes les offres d'emploi</a>
                </div>
                <div class="col-12 col-md-5 ">
                    <img src="./assets/images/job.jpeg" width="100%" alt="">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-md-4 mt-3">
                    <img src="./assets/images/solidarite.jpeg" alt="" width="100%">
                </div>
                <div class="col-12 col-md-8 mt-3 text-center">
                    <h1 class="color-green text-center">Case solidarité</h1>
                    <p class="mt-2 ft-30">
                        La mairie met à disposition des aides afin de soulager
                        les populations de Man. Les délais d’exécution vont de
                        24h à 2 ou 3 mois ou plus selon les urgences.
                        Les aides sont attribuées selon le budget alloué au
                        service social. </p>
                    <div class="mt-5">
                        <div class="m-2">
                            <a class="m-3 text-danger" href="#">Prise en
                                charge médicale</a>
                            <a class="m-3" href="#">Les actions sociales
                                de la mairie</a>
                            <a class="m-3" href="#">Demande
                                de soutien matériel</a>
                            <a class="m-3" href="#">Demande d’aide
                                financière</a>
                        </div>
                        <div class="mt-2">
                            <a class="m-2" href="#">Prise en charge
                                scolaire</a>
                            <a class="m-2" href="#">Prise en charge
                                religion</a>
                            <a class="m-2" href="#">Demande
                                d’assistance</a>
                            <a class="m-2" href="#">Aide vivres et
                                non-vivres</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
<?php include("footer.php") ?>
</html>