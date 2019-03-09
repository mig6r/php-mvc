<?php include __DIR__ . "/../start.html.php" ?>
    <h1><?= $title ?></h1>

<ul>
    <?php foreach($users as $value): ?>
    <li><?= //$value->getInfo()->getFirstName()
        $value->getEmail();
        ?></li>

   <?php endForeach ?>
</ul>
<?php include __DIR__ . "/../end.html.php" ?>