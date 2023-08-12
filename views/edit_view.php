<!DOCTYPE html>
<html lang="en">
<head>


    <title><?= ucfirst($page) ?> - Modifier Projet PHP</title>
    <link rel="stylesheet" href="assets/styles/login.css">

    <style>
    .flex-container {
        display: flex;
        flex-flow: row wrap;
        justify-content: space-around;
        padding: 0;
        margin: 0;
        list-style: none;
    }
    .flex-item{
        flex: 1;
        padding: 10px;

    }
    .error{
    color: red;
  }
    .check_inline{
        display: inline;
    }
    .check_inline_input{
        display: inline;
        width: auto;
        height: 18px;
    }
    form{
        height: 800px;
    }
    .background{
        height: 800px;
    }

    </style>


</head>
<body >
    <div class="background" style="width: 70%;">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form style="width: 70%;" method="POST">
        <h3>Modification des infos</h3>
        <?php if(isset($message) && $message->error == true){  ?>

<div style="background-color: red;  padding: 20px ">
      <h4><?= $message->errorM ?> </h4>
</div>
<?php } ?>
<div class="flex-container">

    <div class="flex-item">
        <label for="pseudo">Pseudo</label>
        <input type="text" placeholder="Pseudo" name="pseudo" value="<?=$_SESSION['user']['pseudo']?>">
    </div>
    <div class="flex-item">
        <label for="email">Email</label>
        <input type="email" placeholder="Email" name="email" value="<?=$_SESSION['user']['email']?>">
    </div>
</div>

<div class="flex-container">

    <div class="flex-item">
        <label for="password">Mot de passe</label>
        <input type="password" placeholder="Mot de passe" name="password" id="password25">
        <input class="check_inline_input" type="checkbox" onclick="show_or_hide_password('password25')">Afficher mot de passe
    </div>

    <div class="flex-item">
        <label for="password2">Confirmer mot de passe</label>
        <input type="password" placeholder="Confirmer le mot de passe" name="password2" id="password250">
        <input class="check_inline_input" type="checkbox" onclick="show_or_hide_password('password250')">Afficher mot de passe
    </div>
</div>
<?php if($_SESSION['user']['hobbies'] != 'Auccun'){ ?>
<div class="flex-container">
    <div class="flex-item">
        <?php if(in_array("Sport", $hobbies)){  ?>
        <input type="checkbox" checked value="Sport" name="hobbies[]" id=""  class="check_inline_input">
        <?php }else{ ?>
        <input type="checkbox" value="Sport" name="hobbies[]" id=""  class="check_inline_input">
        <?php } ?>
        <label class="check_inline" for="">: Sport</label>
    </div>
    <div class="flex-item">
        <?php if(in_array("Musique", $hobbies)){  ?>
        <input type="checkbox" checked value="Musique" name="hobbies[]" id=""  class="check_inline_input">
        <?php }else{ ?>
        <input type="checkbox" value="Musique" name="hobbies[]" id=""  class="check_inline_input">
        <?php } ?>
        <label class="check_inline" for="">: Musique</label>
    </div>
    <div class="flex-item">
        <?php if(in_array("Voyages", $hobbies)){  ?>
        <input type="checkbox" checked value="Voyages" name="hobbies[]" id=""  class="check_inline_input">
        <?php }else{ ?>
        <input type="checkbox" value="Voyages" name="hobbies[]" id=""  class="check_inline_input">
        <?php } ?>
        <label class="check_inline" for="">: Voyages</label>
    </div>
    <div class="flex-item">
        <?php if(in_array("Technologie", $hobbies)){ ?>
        <input type="checkbox" checked value="Technologie" name="hobbies[]" id=""  class="check_inline_input">
        <?php }else{ ?>
        <input type="checkbox" value="Technologie" name="hobbies[]" id=""  class="check_inline_input">
        <?php } ?>
        <label class="check_inline" for="">: Technologie</label>
    </div>
    <div class="flex-item">
        <input type="checkbox" value="Nature" name="hobbies[]" id=""  class="check_inline_input">
        <label class="check_inline" for="">: Nature</label>
    </div>
    <div class="flex-item">
        <input type="checkbox" value="Politique" name="hobbies[]" id=""  class="check_inline_input">
        <label class="check_inline" for="">: Politique</label>
    </div>
    <div class="flex-item">
        <?php if(in_array("Finance", $hobbies)){ ?>
        <input type="checkbox" value="Finance" name="hobbies[]" id=""  class="check_inline_input">
        <?php }else{ ?>
        <input type="checkbox" value="Finance" name="hobbies[]" id=""  class="check_inline_input">
        <?php } ?>
        <label class="check_inline" for="">: Finance</label>
    </div>
</div>
<?php }else{ ?>
<div class="flex-container">
    <div class="flex-item">
        <input type="checkbox" value="Sport" name="hobbies[]" id=""  class="check_inline_input">
        <label class="check_inline" for="">: Sport</label>
    </div>
    <div class="flex-item">
        <input type="checkbox" value="Musique" name="hobbies[]" id=""  class="check_inline_input">
        <label class="check_inline" for="">: Musique</label>
    </div>
    <div class="flex-item">
        <input type="checkbox" value="Voyages" name="hobbies[]" id=""  class="check_inline_input">
        <label class="check_inline" for="">: Voyages</label>
    </div>
    <div class="flex-item">
        <input type="checkbox" value="Technologie" name="hobbies[]" id=""  class="check_inline_input">
        <label class="check_inline" for="">: Technologie</label>
    </div>
    <div class="flex-item">
        <input type="checkbox" value="Nature" name="hobbies[]" id=""  class="check_inline_input">
        <label class="check_inline" for="">: Nature</label>
    </div>
    <div class="flex-item">
        <input type="checkbox" value="Politique" name="hobbies[]" id=""  class="check_inline_input">
        <label class="check_inline" for="">: Politique</label>
    </div>
    <div class="flex-item">
        <input type="checkbox" value="Finance" name="hobbies[]" id=""  class="check_inline_input">
        <label class="check_inline" for="">: Finance</label>
    </div>
</div>
<?php } ?>
<div class="flex-item">
        <label for="autres">Autres</label>
        <input type="text" placeholder="Preciser cet choix ici" value="<?=$_SESSION['user']['autre']?>" name="autre">
    </div>
    <div class="flex-container">

        <div class="flex-item" style="display: flex; justify-content: center;">
                <label for="newsletter" style="margin-top: auto;">Voulez-vous recevoir des newsletters ? </label>
                <?php if($_SESSION['user']['sent_newsletter'] == true){ ?>
                <input type="checkbox" checked value="1" name="sent_newsletter" id=""  class="check_inline_input">
                <?php }else{ ?>
                <input type="checkbox" value="1" name="sent_newsletter" id=""  class="check_inline_input">
                <?php } ?>
                <!-- <input type="checkbox" name="sent_newsletter" id=""  class="check_inline_input"> -->
            </div>
    </div>

        <button type="submit" name="edit">Modifier</button>
    </form>
    <script src="assets/js/index.js"></script>
</body>
</html>

