<?php session_start() ;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/goodnews/divers/css/styles.css">
    <link rel="stylesheet" href="/goodnews/divers/css/header.css">
    <link rel="stylesheet" href="/goodnews/divers/css/footer.css">
    <title>Modifier mon profil</title>
</head>
<body>
    <?php include('header.php'); ?>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="zxtitre mb-3">Réinitialiser mon mot de passe</h3>
                </div>
                <form action="/goodnews/security/traitementNewPassword.php" method= "POST">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3 "></div>
                            <div class="col-md-6 d-flex justify-content-center mb-3"><input type="password" name="password" class="form-control p-2 mt-2" placeholder="Nouveau nom de passe"></div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                        <div class="col-md-3 "></div>
                            <div class="col-md-6 d-flex justify-content-center mb-3"><input type="password" name="password2" class="form-control p-2 mt-2" placeholder="Confirmer le nouveau mot de passe"></div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary m-4 boutton">Réinitialiser</button>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                  
                </form>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>





