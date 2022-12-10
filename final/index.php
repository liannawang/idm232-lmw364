<?php

include_once __DIR__ . '/app.php';

$page_title = 'Home';

include_once __DIR__ . '/_components/header.php';

?>


<?php include_once __DIR__ . '/_components/home-hero.php'; ?>

<?php


// get data from database

$query = 'SELECT * FROM recipes ORDER BY recipe_title ASC';
$result = mysqli_query($db_connection, $query);

?>







<div class="">
    <div class="">
        <div class="">
            <h1 class="">All Recipes</h1>
        </div>
    </div>
</div>

<div class="">
    <div class="">
        <?php include __DIR__ . '/_components/recipeCards.php'; ?>
    </div>
</div>

<?php include_once __DIR__ . '/_components/footer.php';?>





