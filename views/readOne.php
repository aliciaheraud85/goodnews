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
    <link rel="stylesheet" href="./divers/css/styles.css">
    <title><?php echo htmlspecialchars($onePost['title']); ?></title>
</head>
<body>

<?php include(__DIR__ . '/../elements/header.php'); ?>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <?php if(!empty($onePost)): ?>
                        <div class="row">
                            <div class="col-md-12">
                                <h2><?php echo htmlspecialchars($onePost['title']) ;?></h2>
                            </div>
                            <div class="col-md-12">
                                <h4><?php echo htmlspecialchars($onePost['abstract']) ;?></h4>
                            </div>
                            <div class="col-md-12">
                                <p>Par <?php echo htmlspecialchars($onePost['author']); ?></p>
                            </div>
                            <div class="col-md-12">
                                <img class="img-fluid" src="./divers/images/<?php echo htmlspecialchars($onePost['image']) ;?>" alt="image du post">
                            </div>
                            <div class="col-md-12">
                                <p><?php echo htmlspecialchars($onePost['content']); ?></p>
                            </div>
                            <?php if(!empty($onePost) && isset($onePost['content2'])) : ?>
                                <div class="col-md-12">
                                    <p><?php echo htmlspecialchars($onePost['content2']); ?></p>
                                </div>
                            <?php endif; ?>
                            <div class="col-md-12">
                                <p>Publié le : <?php echo htmlspecialchars($onePost['createdAt']); ?></p>
                            </div>

                            
                        </div>
                    <?php else : ?>
                        <p>Aucun post disponible</p>
                    <?php endif ; ?>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>

<?php include(__DIR__ . '/../elements/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>
