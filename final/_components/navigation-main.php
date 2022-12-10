<div class="nav">

  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
      <!-- let's eat, grandma! -->
      <a href="<?php echo site_url(); ?>">
      <img src="<?php echo site_url(); ?>/dist/images/logolight.png" alt="logo" class="logo">
    </a>
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
  
  <div class="nav-links">
  <a href="<?php echo site_url(); ?>/view-all.php" >View All Recipes</a>
  <a href="<?php echo site_url(); ?>/admin/recipes/index.php" >Admin</a>
  <!-- <a href="<?php echo site_url(); ?>/admin/recipes/index.php">Login</a> -->

      <form class="search" action="<?php echo site_url(); ?>/admin/search" method="GET">
        <div>
          <input class="search-text" type="text" placeholder="Find a recipe" name="search">
          <!-- <button  class="inline-flex items-center justify-center rounded-md border border-transparent bg-slate-800 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-black focus:outline-none focus:ring-2 focus:ring-slate-800 focus:ring-offset-2 sm:w-auto"> search</button> -->

      
        </div>
      </form>

    
    <!-- <a href="https://codepen.io/jo_Geek/" target="_blank">Codepen</a>
    <a href="https://jsfiddle.net/user/jo_Geek/" target="_blank">JsFiddle</a> -->
  </div>
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