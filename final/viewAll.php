<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = 'View All Recipes';
include_once __DIR__ . '/_components/header.php';
?>

<?php
// get data from database

$query = 'SELECT * FROM recipes ORDER BY recipe_title ASC';
$result = mysqli_query($db_connection, $query);

?>

<div class="explore" >
        <h1 class="newh1">View All Recipes</h1>
        <form action="<?php echo site_url(); ?>/admin/search" method="GET">
          <input class=" border-black border-2" type="text" name="search" id="search" placeholder="Search for a recipe!">
          <!-- <button type="submit">Search</button> -->
        </form>

</div>




<div class = "cards">
<?php include __DIR__ . '/_components/recipeCards.php'; ?>
  
</div>


<?php include_once __DIR__ . '/_components/footer.php';
