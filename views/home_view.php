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
                            <h4>Pseudo : </h4>
                            <h4>Email :</h4>
                            <h4>Loisirs: </h4>
                        </div>

                    </div>
                    <a href="edit" class="btn btn-primary">Modifier vos infos</a>
                </div>
            </div>
        </div>


    <!-- </div> -->
    <?php include_once 'views/includes/scripts.php' ?>
</body>

</html>