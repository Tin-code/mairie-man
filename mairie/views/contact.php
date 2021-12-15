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
            <h1 class="text-center">Contacts</h1>
   </div>
    <div class="container mt-4">
        <div class="border d-flex flex-column justify-content-center align-items-center p-3 ">
            <h1>ECRIVEZ AU MAIRE</h1>
            <form action="" method="post" class="col-8">
                <div class="m-2">
                    <label for="nom" class="form-label">Nom et Prenoms</label>
                    <p><input type="text" name="nom" id="nom" placeholder="Nom et prenom" class="form-control"></p>
                    <label for="email" class="form-label">Adress e-mail</label>
                    <p><input type="email" name="mail" id="prenom" placeholder="Adresse email" class="form-control"></p>
                    <label for="email" class="form-label">Message</label>
                    <textarea name="message" id="" cols="87" rows="5"></textarea>
                    <input type="submit" value="Envoyer" class="btn-success">
                </div>
            </form>
        </div>
    </div>
</body>
<script src="index.js"></script>
<?php include('footer.php') ?>
</html>