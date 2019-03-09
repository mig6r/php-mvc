<?php include __DIR__ . "/../start.html.php" ?>
    <h1><?= $title ?></h1>


    <div class="list-group">

        <?php foreach($users as $value): ?>
            <a href="#" class="list-group-item list-group-item-action"><?= $value->getEmail(); ?></a>
        <?php endForeach ?>
    
    </div>

<?php include __DIR__ . "/../end.html.php" ?>