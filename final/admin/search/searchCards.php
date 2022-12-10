<!-- <?php
if (!isset($result)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?> -->

<?php
    $site_url = site_url();
    if ($recipes_results) {
      while ($recipes_results = mysqli_fetch_assoc($results)) {
        // echo '<div class="flex flex-row justify-center items-center">';
        echo " <div class='flex flex-row justify-center items-center'>
        <a href='{$site_url}/recipeDetail.php?id={$recipes_results['id']}' class='' >
            <div class='section'>
            <div class='card'>
            <img class='' width='300px' height='250px' src='{$site_url}/{$recipes_results['image_path']}' alt=''>
            <h3 class = ''> ⭐️⭐️⭐️⭐️⭐️</h3>
                    <h3 class='title'>{$recipes_results['recipe_title']}</h3>
                   
                </div> 
            </div>
        </a></div>
    ";
        // echo '</div>';
      }
    }
    ?>


