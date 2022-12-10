<?php
$main_navigation = [
    [
        'title' => 'Contact',
        'url' => 'categories.php',
    ],
    [
        'title' => 'Search',
        'url' => 'search.php',
    ],
    [
        'title' => 'Add a recipe',
        'url' => 'admin/users/index.php',
    ],

];

?>
<header class="px-2 py-2 bg-black">
  <div class="max-w-7xl flex justify-between mx-auto">
    <a href="<?php echo site_url(); ?>">
      <img src="<?php echo site_url(); ?>/dist/images/logo.png" alt="logo">
    </a>

    <nav class="text-white flex items-center">
      <?php
      foreach ($main_navigation as $nav_item) {
          echo '<a href="' . $nav_item['url'] . '" class="p-4 inline-block">' . $nav_item['title'] . '</a>';
      }
?>

    </nav>
  </div>
</header>