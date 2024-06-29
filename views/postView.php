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
    <title>Document</title>
</head>
<body>

<?php include(__DIR__ . '/../elements/header.php'); ?>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>

            <!-- A LA UNE -->
            <div class="col-md-3 m-1" style="border: 1px solid black;">
                <?php if(!empty($newPost)) : ?>
                    <div class="row">
                        <div class="col-md-12 pt-3">
                            <h2 class="zxtitre">À la une</h2>
                            <?php foreach($newPost as $new): ?>
                                <a class="show_lien" href="index.php?action=show&id=<?php echo htmlspecialchars($new['id']); ?>"><?php echo htmlspecialchars($new['title']); ?></a>
                                <div class="container-img pb-2">
                                    <a href="index.php?action=show&id=<?php echo htmlspecialchars($new['id']); ?>"><img class="img-fluid img_lien" src="./divers/images/<?php echo htmlspecialchars($new['image']); ?>" alt=""></a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php else : ?>
                    <p>Aucun post disponible</p>
                <?php endif ;?>
            </div>   
            <div class="col-md-7 m-1" style="border: 1px solid black;">
                    <!--RUBRIQUE ACTU -->
                    <?php if(!empty($rubrikActu)) : ?>
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="zxtitre2 mt-3">Actualités</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <?php foreach ($rubrikActu as $actu) : ?>
                                        <div class="col-md-4">
                                            <a class="lien" href="index.php?action=show&id=<?php echo htmlspecialchars($actu['id']); ?>"><?php echo htmlspecialchars($actu['title']);?></a>
                                            <a href="index.php?action=show&id=<?php echo htmlspecialchars($actu['id']); ?>"><img class="img-fluid img_lien" src="./divers/images/<?php echo htmlspecialchars($actu['image']); ?>" alt="image du post"></a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <p>Aucuns posts disponibles</p>
                    <?php endif ; ?>

                    <!--RUBRIQUE POLITIQUE -->

                    <?php if(!empty($rubrikPolitik)) : ?>
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="zxtitre2 mt-3">Politique</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <?php foreach ($rubrikPolitik as $pol) : ?>
                                        <div class="col-md-4">
                                            <a class="lien" href="index.php?action=show&id=<?php echo htmlspecialchars($pol['id']); ?>"><?php echo htmlspecialchars($pol['title']);?></a>
                                            <a href="index.php?action=show&id=<?php echo htmlspecialchars($pol['id']); ?>"><img class="img-fluid img_lien" src="./divers/images/<?php echo htmlspecialchars($pol['image']); ?>" alt="image du post"></a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <p>Aucuns posts disponibles</p>
                    <?php endif ; ?>

                   <!--RUBRIQUE POLITIQUE --> 

                   <?php if(!empty($rubrikEco)) : ?>
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="zxtitre2 mt-3">Économie</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <?php foreach ($rubrikEco as $eco) : ?>
                                        <div class="col-md-4">
                                            <a class="lien" href="index.php?action=show&id=<?php echo htmlspecialchars($eco['id']); ?>"><?php echo htmlspecialchars($eco['title']);?></a>
                                            <a href="index.php?action=show&id=<?php echo htmlspecialchars($eco['id']); ?>"><img class="img-fluid align-self-center img_lien" src="./divers/images/<?php echo htmlspecialchars($eco['image']); ?>" alt="image du post"></a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <p>Aucuns posts disponibles</p>
                    <?php endif ; ?>

                    <!--RUBRIQUE SPORT --> 
                    
                    <?php if(!empty($rubrikSport)) : ?>
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="zxtitre2 mt-3">Sport</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <?php foreach ($rubrikSport as $sport) : ?>
                                        <div class="col-md-4">
                                            <a class="lien" href="index.php?action=show&id=<?php echo htmlspecialchars($sport['id']); ?>"><?php echo htmlspecialchars($sport['title']);?></a>
                                            <a href="index.php?action=show&id=<?php echo htmlspecialchars($sport['id']); ?>"><img class="img-fluid align-self-center img_lien" src="./divers/images/<?php echo htmlspecialchars($sport['image']); ?>" alt="image du post"></a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <p>Aucuns posts disponibles</p>
                    <?php endif ; ?>

                    <!--RUBRIQUE TECHNOLOGIES -->

                    <?php if(!empty($rubrikTech)) : ?>
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="zxtitre2 mt-3">Technologies</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <?php foreach ($rubrikTech as $tech) : ?>
                                        <div class="col-md-4">
                                            <a class="lien" href="index.php?action=show&id=<?php echo htmlspecialchars($tech['id']); ?>"><?php echo htmlspecialchars($tech['title']);?></a>
                                            <a href="index.php?action=show&id=<?php echo htmlspecialchars($tech['id']); ?>"><img class="img-fluid align-self-center img_lien" src="./divers/images/<?php echo htmlspecialchars($tech['image']); ?>" alt="image du post"></a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <p>Aucuns posts disponibles</p>
                    <?php endif ; ?>

                    <!--RUBRIQUE CULTURE -->

                    <?php if(!empty($rubrikCultur)) : ?>
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="zxtitre2 mt-3">Culture</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <?php foreach ($rubrikCultur as $cult) : ?>
                                        <div class="col-md-4">
                                            <a class="lien" href="index.php?action=show&id=<?php echo htmlspecialchars($cult['id']); ?>"><?php echo htmlspecialchars($cult['title']);?></a>
                                            <a href="index.php?action=show&id=<?php echo htmlspecialchars($cult['id']); ?>"><img class="img-fluid align-self-center img_lien" src="./divers/images/<?php echo htmlspecialchars($cult['image']); ?>" alt="image du post"></a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <p>Aucuns posts disponibles</p>
                    <?php endif ; ?>


            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>

<?php include(__DIR__ . '/../elements/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
