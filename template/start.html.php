<!doctype html>
<html lang='en'>
<head>

    <meta charset='utf8'/>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
    <base href="/php-initiation/public/">
    <link rel="stylesheet" type="text/css" href="dist/index.css"/>
    



    <title><?php if ("HomeController" === $title): ?>
            Bienvenue
        <?php else : ?>
    <?= $title ?>
    <?php endif ?></title>


</head>
<body>

<header class="fixed-top m-0" >

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow p-3">
        <div class="btn-group float-left">
            <button type="button" class="btn btn-secondary btn-sm" id="btLang" ></button>
            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" id="langFr" href="#">FR</a>
                <a class="dropdown-item" id="langEn" href="#">EN</a>
            </div>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">

                <?php if ($this->session("user")): ?>

                   <li><a href="logout">Logout</a></li>

                <?php else: ?>

                   <li><a href="login">Login</a></li>
                    <li><a href="signin">Signin</a></li>

                <?php endif ?>
            </ul>
        </div>
    </nav>
</header>
<div id="espaceur"></div>

