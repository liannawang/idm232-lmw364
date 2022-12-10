<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Search';
include_once __DIR__ . '/../../_components/header.php';
$services = get_services();

// Check if search exist in query
if (isset($_GET['search'])) {
  $search = $_GET['search'];
} else {
  $search = '';
}

$query = 'SELECT *';
$query .= ' FROM recipes';
$query .= " WHERE recipe_title LIKE '%{$search}%'";
$query .= " OR ingredients LIKE '%{$search}%'";
$results = mysqli_query($db_connection, $query);

// Check if was have more than 0 results from db
if ($results->num_rows > 0) {
  $recipes_results = true;
} else {
  $recipes_results = false;
}

?>


 
    <?php include __DIR__ . '/../../_components/navigation-admin.php'; ?>
   
      <div class="explore" >
        <h1 class="newh1">Search Results</h1>
        <form action="<?php echo site_url(); ?>/admin/search" method="GET">
          <input class=" border-black border-2" type="text" name="search" id="search" placeholder="Search" value="<?php echo $search; ?>">
          <!-- <button type="submit">Search</button> -->
        </form>
        <h2>You searched for "<?php echo $search; ?>"</h2>
        <?php
        // If no results, echo no results
        if (!$recipes_results) {
          echo '<p>No results found</p>';
        }
        ?>
        <?php
        // If error query param exist, show error message
        if (isset($_GET['error'])) {
          echo '<p class="text-red-500">' . $_GET['error'] . '</p>';
        } ?>
      </div>


      <div class = "cards">
<?php include __DIR__ . '/searchCards.php'; ?>
  
</div>
    

  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';
?>









</body>
</html>



