

<?php
// $main_navigation = [
//     [
//         'title' => 'Contact',
//         'url' => 'categories.php',
//     ],
//     [
//         'title' => 'Search',
//         'url' => 'search.php',
//     ],
//     [
//         'title' => 'Add a recipe',
//         'url' => 'admin/users/index.php',
//     ],


?>
<header class="px-2 py-6 bg-white">
  <div class="justify-center">
  



    <nav class="text-black flex items-center">
    <a href="<?php echo site_url(); ?>">
      <img src="<?php echo site_url(); ?>/dist/images/logodark.png" alt="logo" class="logo">
    </a>

    
        <a href="<?php echo site_url(); ?>/viewAll.php" class="navitem">Recipes</a>


        <!-- <div class="px-5 py-2">
          <a href="#" class="text-base text-gray-500 hover:text-gray-900">Blog</a>
        </div> -->

      
        <a href="<?php echo site_url(); ?>/admin/recipes/index.php" class="navitem">Add a recipe</a>
  


        <a href="<?php echo site_url(); ?>/admin/recipes/index.php" class="navitem">Login</a>


        <!-- <div class="px-5 py-2">
          <a href=" <?php echo site_url(); ?>/admin/recipes/index.php" class="text-base text-gray-400 hover:text-gray-900">admin</a>
        </div> -->
        <div class="search-container">
      <form class="search" action="<?php echo site_url(); ?>/admin/search" method="GET">
        <div>
          <input class="search-text" type="text" placeholder="Find a recipe" name="search">
          <button  class="inline-flex items-center justify-center rounded-md border border-transparent bg-slate-800 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-black focus:outline-none focus:ring-2 focus:ring-slate-800 focus:ring-offset-2 sm:w-auto"> search</button>

      
        </div>
      </form>
      </nav>

      <div class="nav">
        <!-- <ul id="navWidth"> -->
      
        <!-- <a href="<?php echo site_url(); ?>/viewAll.php">Recipes</a>
        <a href="<?php echo site_url(); ?>/admin/recipes/index.php">Admin</a>
        <a href="<?php echo site_url(); ?>/admin/recipes/index.php">Login</a> -->
        <!-- </ul> -->
      </div>
      
    </div>
      <?php
      // foreach ($main_navigation as $nav_item) {
      //   echo '<a href="' . $nav_item['url'] . '" class="p-4 inline-block">' . $nav_item['title'] . '</a>';
      // }
      ?>
    </nav>
  </div>
</header>