<?php
if (!isset($recipes)) {
  // echo '$recipes variable is not defined. Please check the code.';
}
?>
<table class="min-w-full divide-y divide-gray-300">
  <thead class="bg-gray-50">
    <tr>
      <!-- <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">#</th> -->
      <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Recipe Name</th>
      <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Image</th>
      <!-- <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Description</th> -->
      <!-- <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Ingredients</th> -->
      
      <!-- <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Edit</th> -->

    

      <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
        <span class="sr-only">edit</span>
      </th>
    </tr>
  </thead>
  <tbody class="divide-y divide-gray-200 bg-white">
    <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
    while ($recipes = mysqli_fetch_array($result)) {
      echo "
          <tr>

         
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500 '>{$recipes['recipe_title']}</td>
            

            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500 '>
          <img class='' width='100px' height='100px' src='{$site_url}/{$recipes['image_path']}' alt=''></td>
          
         
       
         

            <td class='relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6'>
              <a href='{$site_url}/admin/recipes/edit.php?id={$recipes['id']}' class='text-slate-400  hover:text-slate-500'>edit &nbsp;</a>
              <a href='{$site_url}/admin/recipes/delete.php?id={$recipes['id']}' class='text-slate-600 hover:text-slate-800'>delete</a>
            </td>
          </tr>";
    }
    ?>
  </tbody>
</table>



