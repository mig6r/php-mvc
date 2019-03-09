<div class="container">
    <div class="jumbotron jumbotron-fluid mt-4 p-2 shadow" >
    <h1><span class="badge badge-secondary m-3"><?= $title ?></span></h1>
<form class="row" method="post" action="">
    <?php if (array_key_exists("pdo", $error)) : $message = $error["pdo"];
        include __DIR__ . "/../shared/alert.html.php"; endif ?>

    <div class="col-lg-6 col-12">


            <?php include __DIR__ . "./../login/form_login.html.php"; ?>

        <div class="form-group">
            <label for="password2">Confirmation du mot de passe</label>
            <?php if (array_key_exists("confirm", $error)) : $message = $error["confirm"];
                include __DIR__ . "/../shared/alert.html.php"; endif ?>

            <input class="form-control" id="password2" name="confirm" placeholder="Confirmation du password"
                   value="<?= filter_input(INPUT_POST, "confirm", FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>">
        </div>
    </div>
    <div class="col-lg-6 col-12">
        <div class="form-group">
            <label for="Firstname">Prénom</label>
            <?php if (array_key_exists("firstname", $error)) : $message = $error["firstname"];
                include __DIR__ . "/../shared/alert.html.php"; endif ?>
            <input class="form-control" id="Firstname" name="firstname" placeholder="Firstname"
                   value="<?= filter_input(INPUT_POST, "firstname", FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>">
        </div>
        <div class="form-group">
            <label for="Lastname">Nom</label>
            <?php if (array_key_exists("lastname", $error)) : $message = $error["lastname"];
                include __DIR__ . "/../shared/alert.html.php"; endif ?>
            <input class="form-control" id="Lastname" name="lastname" placeholder="Lastname"
                   value="<?= filter_input(INPUT_POST, "lastname", FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>">
        </div>
        <div class="form-group">
            <label for="Phone">Téléphone</label>
            <?php if (array_key_exists("phone", $error)) : $message = $error["phone"];
                include __DIR__ . "/../shared/alert.html.php"; endif ?>
            <input class="form-control" id="Phone" name="phone" placeholder="Phone"
                   value="<?= filter_input(INPUT_POST, "phone", FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>">
        </div>

    </div>
    <div class="row">
        <div class="col-12 m-3">
            <input type="submit" class="btn btn-primary" name="new_user" value="signin">
        </div>
    </div>

</form>
    </div>
</div>