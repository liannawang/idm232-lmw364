<?php
if (!isset($result)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>

<?php
$site_url = site_url();
while ($recipes = mysqli_fetch_array($result)) {
    echo "
        <a href='{$site_url}/recipeDetail.php?id={$recipes['id']}' class=''>
            <div class='section'>
                <div class='card'>
                <img class='' width='300px' height='250px' src='{$recipes['image_path']}' alt=''>
                <h3 class = ''> ⭐️⭐️⭐️⭐️⭐️</h3>
                    <h3 class=''>{$recipes['recipe_title']}</p>
                    <p class=''>{$recipes['description']}</p>
                </div> 

            </div>
        </a>
        ";
}
?>


