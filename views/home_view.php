<!DOCTYPE html>
<html lang="en">

<head>

    <title><?= ucfirst($page) ?> - Projet PHP</title>
    <?php include_once 'views/includes/head.php' ?>
</head>

<body class=" h-100">
    <!-- <div class="main" role="main"> -->
        <div class="container p-5">
            <div class="card">
                <div class="card-header">
                    Informations
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Pseudo :  <?=$_SESSION['user']['pseudo']?></h4>
                            <h4>Email : <?= $_SESSION['user']['email'] ?> </h4>
                            <h4>Loisirs: <?=$_SESSION['user']['hobbies'] ?> </h4>
                            <h4>Autre : <?=  $_SESSION['user']['autre'] ?></h4>
                            <?php if($_SESSION['user']['sent_newsletter']){  ?>
                            <h4>Newsletter : Oui</h4>
                            <?php }else{ ?>
                            <h4>Newsletter : Non</h4>
                            <?php } ?>
                            <h4>Creer le : <?= $_SESSION['user']['created_at'] ?></h4>
                        </div>

                        <div class="col-md-6">
                            <a href="edit" class="btn btn-primary">Modifier vos infos</a>
                        </div>
                        <div class="col-md-6">
                            <form  method="post">
                                <input type="submit" name="deconnect" value="Se deconnecter"  class="btn btn-danger">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    <!-- </div> -->
    <?php include_once 'views/includes/scripts.php' ?>
</body>

</html>