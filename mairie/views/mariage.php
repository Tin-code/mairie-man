<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">

    <!-- bootstrap icons cdn link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Mairie de Man</title>
</head>

<body class="container-fluid montserrat-ft">
    <div class="row text-white p-5 bg-green">
        <h1 class="text-center">Mariage </h1>
        <h5 class="text-center"><a href="index.php" class="text-decoration-none text-white"> Accueil</a><i class="bi bi-arrow-right-short"></i> <a href="services.php" class="text-decoration-none text-white"> Mes services</a> <i
                class="bi bi-arrow-right-short"> </i> <a href="demarches-administratives.php" class="text-decoration-none text-white"> Démarches administrative</a><i class="bi bi-arrow-right-short"></i>
            Mariage</h5>
    </div>
    <div class="row p-3">
        <h3 class="mt-4">PROCÉDURE ACTE DE MARIAGE </h3>
        <p class="">
            Pour faciliter vos démarches administratives, la mairie met à votre disposition ce formulaire de demande
            d’acte de mariage. Cette plateforme vous permettra de faire vos demandes d’acte de mariage en ligne et ainsi
            raccourcir votre temps d’attente.
        </p>

    </div>
    <div class="row montserrat-ft mt-3 p-3">
        <div class="col-12 col-sm-3 border-left">
            <h2 class="left-bord">Etape 1</h2>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit eos similique doloribus nam quae minus
            accusamus exercitationem aliquid ea maiores?
        </div>
        <div class="col-12 col-sm-3 border-left">
            <h2 class="left-bord ">Etape 2</h2>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit eos similique doloribus nam quae minus
            accusamus exercitationem aliquid ea maiores?
        </div>
        <div class="col-12 col-sm-3 border-left">
            <h2 class="left-bord">Etape 3</h2>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit eos similique doloribus nam quae minus
            accusamus exercitationem aliquid ea maiores?
        </div>
        <div class="col-12 col-sm-3 border-left">
            <h2 class="left-bord">Etape 4</h2>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit eos similique doloribus nam quae minus
            accusamus exercitationem aliquid ea maiores?
        </div>
        <p class="mt-4"><strong>NB:</strong> Les frais de timbre s’élèvent à <strong>500 FCFA</strong> par copie. Cette
            somme est payable soit par mobile money ou physiquement au retrait du document.</p>
    </div>

    <div class="row p-3">
        <form class="row p-3 g-3" style="background-color: #f2f2f2; border: 1px solid #2e2e2e">
            <div class=" col-12 col-md-6">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected value="homme">Monsieur</option>
                    <option value="femme">Madame</option>

                </select>
            </div>
            <div class=" col-12 col-md-6">
                <input type="text" class="form-control" name="extrait" placeholder="Numero d'extrait*" required>
            </div>
            <div class=" col-12 col-md-6">
                <input type="text" class="form-control" name="nom" placeholder="Nom">
            </div>
            <div class=" col-12 col-md-6">
                <input type="tel" class="form-control" name="tel" placeholder="Téléphone">
            </div>
            <div class=" col-12 col-md-6">
                <input type="text" class="form-control" name="prenom" placeholder="Prenom">
            </div>
            <div class=" col-12 col-md-6">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>

            <div class=" col-12 form-floating">
                <textarea class="form-control textarea-size" placeholder="Message ..."
                    style="height: 100px"> </textarea>
            </div>

            <input type="submit" value="Envoyer" name="envoyer" class="text-white btn"
                style="background-color:rgb(12, 75, 16) ;">

        </form>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
<?php include ('./footer.php')?>
</html>