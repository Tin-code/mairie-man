<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>Mairie de Man</title>
</head>

<body>
    
<div class="row bg-green text-white p-5">
        <h1 class="text-center">Extraits rapide </h1>
        <h5 class="text-center">Accueil<i class="bi bi-arrow-right-short"></i> Mes services <i
                class="bi bi-arrow-right-short"> </i>Démarches administrative<i class="bi bi-arrow-right-short"></i>
            Extraits rapides</h5>
    </div>
    <div class="container">
        <div class="row">
            <h1 class="mt-3">Procedure extraits rapide </h1>
            <p>Pour faciliter vos démarches administratives, la mairie met à votre disposition extrait rapide. Cette
                plateforme vous
                permettra de faire vos demandes d’extrait de naissance en ligne et ainsi raccourcir votre temps
                d’attente.
            </p>
            <p>
                <strong>NB :</strong> Les frais de timbre s’élèvent à 500 FCFA par copie. Cette somme est payable soit
                par mobile money ou physiquement au retrait
                du document.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="container">

            <form action="" class="row border p-3 mt-5">
                <div class="col-6">
                    <div class="m-2">
                        <label for="civilite" class="form-label">Civilité</label>
                        <select class="form-select" aria-label="Default select example" id="civilite">
                            <option selected>Monsieur</option>
                            <option value="1">Madame</option>
                        </select>
                    </div>
                    <div class="m-2">
                        <label for="nom" class="form-label">Nom</label>
                        <p><input type="text" name="nom" id="nom" placeholder="Nom " class="form-control" required></p>
                        <label for="prenom" class="form-label">Prenom</label>
                        <p><input type="text" name="prenom" id="prenom" placeholder="Prenom" class="form-control" required></p>
                        <label for="email" class="form-label">Adresse e-mail</label>
                        <input type="email" name="email" id="" placeholder="E-mail" class="form-control" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="m-2">
                        <label for="extrait" class="form-label">Numero extrait</label>
                        <p><input type="number" name="num_extrait" id="extrait" placeholder="Numéro de l'extrait * "
                                class="form-control" required>
                        </p>
                        <label for="declaration" class="form-label">Date de la déclaration</label>
                        <p><input type="date" name="declaration" id="declaration" placeholder="DA" class="form-control" required>
                        </p>
                        <label for="naissance" class="form-label">Date de naissance</label>
                        <input type="date" name="naissance" id="naissance" class="form-control" required>
                        <label for="tel" class="form-label">Téléphone</label>
                        <input type="tel" name="telephone" id="tel" class="form-control" maxlength="10" minlength="8">
                    </div required>
                </div>
                <input type="submit" value="ENVOYER" class="btn text-white bg-green mt-3">
            </form>
        </div>
    </div>
</body>
<?php include("footer.php")?>
</html>