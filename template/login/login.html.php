<?php include __DIR__ . "/../start.html.php"; ?>
<?php if (array_key_exists("error", $error)) : $message = $error["error"];
    include __DIR__ . "/../shared/alert.html.php"; endif ?>



    <div class="container">


    <div class="jumbotron jumbotron-fluid mt-4 p-2 shadow" >
    <div class="container">
        <h1><span class="badge badge-secondary m-3"><?= $title ?></span></h1>

            <form method="post" action="">

                <?php include __DIR__ . "./form_login.html.php"; ?>

                <div class="col-12 m-3">
                    <input type="submit" class="btn btn-primary" name="login" value="login">
                </div>
            </form>
    </div>
    </div>

    </div>


<?php include __DIR__ . "/../end.html.php"; ?>