<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Create Users';
include_once __DIR__ . '/../../_components/header.php';
?>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <!-- <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900">Create User</h1>
      </div>
    </div> -->
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden md:rounded-lg lightgreen">
          <h1 class="newh1">Create Recipe</h1>
            <form
              action="<?php echo site_url(); ?>/_includes/process-create-users.php"
              method="POST">
              <div class="block">
                <!-- <label for="">First Name</label> -->
                <input class="border-black border-2" type="text" name="first_name" placeholder="Recipe Name">
              </div>

              <!-- <div class="block"> -->
                <!-- <label for="">Last Name</label> -->
                <!-- <input class="border-black border-2" type="text" name="last_name" placeholder="Ingredients">
              </div> -->


              <div class="block">
                <!-- <label for="">Email</label> -->
                <input class="border-black border-2" type="text" name="email" placeholder="Ingredients">
              </div>
              <div class="block">
                <!-- <label for="">Phone Number</label> -->
                <input class="border-black border-2" type="text" name="phone" placeholder="Steps">
              </div>
              <input
                class="nline-flex items-center justify-center rounded-md border border-transparent bg-slate-800 px-16 py-3 mt-4 text-lg font-medium text-white shadow-sm hover:bg-black focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2 sm:w-auto"
                type="submit" value="Submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once __DIR__ . '/../../_components/footer.php';
