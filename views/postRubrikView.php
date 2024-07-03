<?php session_start(); ?>
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
    <link rel="stylesheet" href="/goodnews/divers/css/rubrik.css">
    <title>Document</title>
</head>
<body>

<?php include(__DIR__ . '/../elements/header.php'); ?>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-11 p-3"><h4>> Rubrique <?php echo htmlspecialchars($_GET['rubrik']); ?></h4></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-1"></div>
                        
                        <div class="col-md-6 m-2 postRubrik" style="border: 1px solid black; text-align:justify;">
                            <div class="row">
                                <?php foreach($rubrikPost as $rubrik): ;?>
                                    <div class="col-md-12 p-3">
                                        <h3><a class="ztitre" href="/goodnews/controller/router.php?action=show&id=<?php echo htmlspecialchars($rubrik['id']); ?>"><?php echo htmlspecialchars($rubrik['title']); ?></a></h3>
                                    </div>
                                    <div class="col-md-12 p-3">
                                        <?php if(!empty($rubrik['image'])): ?>
                                            <a href="/goodnews/controller/router.php?action=show&id=<?php echo htmlspecialchars($rubrik['id']); ?>"><img class="img-fluid containerimg" src="/goodnews/divers/images/<?php echo htmlspecialchars($rubrik['image']); ?> " alt="Image du dernier post"></a>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-12 p-3">
                                        <a class="ztitre" href="/goodnews/controller/router.php?action=show&id=<?php echo htmlspecialchars($rubrik['id']); ?>"><p><?php echo htmlspecialchars($rubrik['abstract']); ?></p></a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <div class="col-md-4 m-2 postRubrik" style="border: 1px solid black; text-align:justify;">
                            <div class="row">
                            <?php foreach($postByRubrik as $postItem): ;?>
                                    <div class="col-md-12 pb-2">
                                        <h3><a class="zxtitre3" href="/goodnews/controller/router.php?action=show&id=<?php echo htmlspecialchars($postItem['id']); ?>"><?php echo htmlspecialchars($postItem['title']); ?></a></h3>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center pb-3" >
                                        <?php if(!empty($postItem['image'])): ?>
                                            <a href="/goodnews/controller/router.php?action=show&id=<?php echo htmlspecialchars($postItem['id']); ?>"><img class="img-fluid zximg" src="/goodnews/divers/images/<?php echo htmlspecialchars($postItem['image']); ?> " alt="Image du dernier post"></a>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>  
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-1 m-1"></div>
                            <div class="col-md-10 m-2 p-3" style="border: 1px solid black; text-align: justify;">
                                <div class="row">
                                    <?php foreach($latestPostRubrik as $latest): ;?>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3><a class="zxtitre3" href="/goodnews/controller/router.php?action=show&id=<?php echo htmlspecialchars($latest['id']); ?>"><?php echo htmlspecialchars($latest['title']); ?></a></h3>
                                                </div>
                                                <div class="col-md-12 d-flex justify-content-center pb-3">
                                                    <?php if(!empty($latest['image'])): ?>
                                                        <a href="/goodnews/controller/router.php?action=show&id=<?php echo htmlspecialchars($latest['id']); ?>"><img class="img-fluid zximg" src="/goodnews/divers/images/<?php echo htmlspecialchars($latest['image']); ?> " alt="Image du dernier post"></a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>    
                                </div>
                            </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include(__DIR__ . '/../elements/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    


</body>
</html>
