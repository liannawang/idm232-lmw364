<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = 'View Recipe';
include_once __DIR__ . '/_components/header.php';
?>

<?php
// get recipe data from database
$query = "SELECT * FROM recipes WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);

?>


<?php
if (!isset($result)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>

<?php
$site_url = site_url();
while ($recipes = mysqli_fetch_array($result)) {
    echo "
        <div class=''>
            <div class=''>
                <div class='recipewrapper'>
                    <div= 'detailh1'>
                        <h1 class='detailh1'>{$recipes['recipe_title']}</h1>
                        <p class='description'>{$recipes['description']}</p>

                        <img class='detailimg' src='{$site_url}/{$recipes['image_path']}' alt=''>
                    

                 

                    <div class=''>
                        <div class='sans'>
                            <h3 class ='detailh3'> Ingredients </h3>
                            <p class='detailp'>{$recipes['ingredients']}</p>
                        </div>
                        <div class='sans'>
                            <h3 class ='detailh3'> Instructions </h3>
                            <p class='detailp'>{$recipes['instructions']}</p>
                        </div>
                    </div>
                    </div>
                    
                    </div> 
                </div>
            </div>
        </div>
        ";
}
?>
<!-- </div>
          </div> -->

<?php include_once __DIR__ . '/_components/footer.php';

