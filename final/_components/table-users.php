<?php
if (!isset($users)) {
    echo '$users variable is not defined. Please check the code.';
}
?>
<table class="min-w-full divide-y divide-gray-300">
  <thead class="bg-gray-50">
    <tr>
      <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">#</th>
      <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Recipe Name
      </th>
      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Ingredients</th>
      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Steps</th>
      <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
        <span class="sr-only">Edit</span>
      </th>
    </tr>
  </thead>
  <tbody class="divide-y divide-gray-200 bg-white">
    <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
while ($user = mysqli_fetch_array($users)) {
    echo "
          <tr>
            <td class='whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6'>{$user['id']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$user['first_name']} {$user['last_name']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$user['email']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$user['phone']}</td>
            <td class='relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6'>
              <a href='{$site_url}/admin/users/edit.php?id={$user['id']}' class='text-slate-800 hover:text-red-600'>Edit</a>
              <a href='{$site_url}/admin/users/delete.php?id={$user['id']}' class='text-slate-800 hover:text-red-600'>Delete</a>
            </td>
          </tr>";
}
?>
  </tbody>
</table>