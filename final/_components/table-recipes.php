<?php
if (!isset($recipes)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>
<table class="min-w-full divide-y divide-gray-300">
  <thead class="bg-gray-50">
    <tr>
      <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">ID</th>
      <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Name
      </th>
      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Phone</th>
      <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
        <span class="sr-only">Edit</span>
      </th>
    </tr>
  </thead>
  <tbody class="divide-y divide-gray-200 bg-white">
    <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
while ($recipe = mysqli_fetch_array($recipes)) {
    echo "
          <tr>
            <td class='whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6'>{$recipe['id']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipe['first_name']} {$recipe['last_name']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipe['email']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipe['phone']}</td>
            <td class='relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6'>
              <a href='{$site_url}/admin/recipes/edit.php?id={$recipe['id']}' class='text-slate-800 hover:text-red-600'>Edit</a>
              <a href='{$site_url}/admin/recipes/delete.php?id={$recipe['id']}' class='text-slate-800 hover:text-red-600'>Delete</a>
            </td>
          </tr>";
}
?>
  </tbody>
</table>