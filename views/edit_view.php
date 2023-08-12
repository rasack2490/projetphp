<!DOCTYPE html>
<html lang="en">
<head>


    <title><?= ucfirst($page) ?> - Projet PHP</title>
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
<body>
    <div class="background" style="width: 70%;">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form style="width: 70%;">
        <h3>Modification</h3>
<div class="flex-container">

    <div class="flex-item">
        <label for="pseudo">Pseudo</label>
        <input type="text" placeholder="Pseudo" id="pseudo">
    </div>
    <div class="flex-item">
        <label for="email">Email</label>
        <input type="email" placeholder="Email" id="email">
    </div>
</div>

<div class="flex-container">

    <div class="flex-item">
        <label for="password">Mot de passe</label>
        <input type="password" placeholder="Mot de passe" id="password">
    </div>

    <div class="flex-item">
        <label for="password2">Confirmer mot de passe</label>
        <input type="password" placeholder="Confirmer le mot de passe" id="password2">
    </div>
</div>

<div class="flex-container">
    <div class="flex-item">
        <input type="checkbox" name="" id=""  class="check_inline_input">
        <label class="check_inline" for="">: Sport</label>
    </div>
    <div class="flex-item">
        <input type="checkbox" name="" id=""  class="check_inline_input">
        <label class="check_inline" for="">: Musique</label>
    </div>
    <div class="flex-item">
        <input type="checkbox" name="" id=""  class="check_inline_input">
        <label class="check_inline" for="">: Voyages</label>
    </div>
    <div class="flex-item">
        <input type="checkbox" name="" id=""  class="check_inline_input">
        <label class="check_inline" for="">: Technologie</label>
    </div>
    <div class="flex-item">
        <input type="checkbox" name="" id=""  class="check_inline_input">
        <label class="check_inline" for="">: Nature</label>
    </div>
    <div class="flex-item">
        <input type="checkbox" name="" id=""  class="check_inline_input">
        <label class="check_inline" for="">: Politique</label>
    </div>
    <div class="flex-item">
        <input type="checkbox" name="" id=""  class="check_inline_input">
        <label class="check_inline" for="">: Finance</label>
    </div>
</div>
<div class="flex-item">
        <label for="autres">Autres</label>
        <!-- <textarea name="" id="" cols="30" rows="10"></textarea> -->
        <input type="text" placeholder="Preciser cet choix ici" id="autres">
    </div>
    <div class="flex-container">

        <div class="flex-item" style="display: flex; justify-content: center;">
                <label for="newsletter" style="margin-top: auto;">Voulez-vous recevoir des newsletters ? </label>
                <input type="checkbox" name="" id=""  class="check_inline_input">
                <!-- <textarea name="" id="" cols="30" rows="10"></textarea> -->
                <!-- <input type="text" placeholder="Preciser cet choix ici" id="autres"> -->
            </div>
    </div>

        <button>Modifier</button>
        
    </form>
</body>
</html>

