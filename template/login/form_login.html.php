<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
<?php if (array_key_exists("email", $error)) : $message = $error["email"];
    include __DIR__ . "/../shared/alert.html.php"; endif ?>


<input class="form-control" id="email" name="email" placeholder="Enter email"
       value="<?= filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>">
    </div>

<div class="form-group">
    <label for="password">Mot de passe</label>
    <?php if (array_key_exists("password", $error)) : $message = $error["password"];
        include __DIR__ . "/../shared/alert.html.php"; endif ?>

    <input class="form-control" id="password" name="password" placeholder="Password"
           value="<?= filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>">
</div>



