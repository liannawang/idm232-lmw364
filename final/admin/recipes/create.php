<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Add A Recipe';
include_once __DIR__ . '/../../_components/header.php';
?>

<?php
// get users data from database
$query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);

?>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">

      </div>
    </div>
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden  md:rounded-lg lightgreen" >
            <form action="<?php echo site_url(); ?>/_includes/process-create-recipes.php" method="POST">
            <h1 class="newh1">Add A Recipe</h1>


              <br>
              <div class="block">
                <label for="">Recipe Name</label>
                <input class="border-black border-2" type="text" name="recipe_title">
              </div>
              <br>
              <div class=" block">
                <label for="">Image Path</label>
                <input class=" " type="text" name="image_path">
              </div>
              <br>

              <div class="block">
                <label for="">Description </label>
                <input class="" type="text" name="description">
              </div>
              <br>

       

              <div class=" mx-0 w-full  px-0 mb-6 md:mb-0">
                <label for="">Ingredients</label>
                <textarea class="js-tinymce" name="ingredients"></textarea>
                <!-- <input class="mt-3 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-600" type="text" name="ingredients"> -->
              </div>
              <br>

              <div class=" mx-0 w-full  px-0 mb-6 md:mb-0">
                <label for="">Instructions</label>
                <textarea class="js-tinymce" name="instructions"></textarea>
                <!-- <input class="mt-3 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-600" type="text" name="instructions"> -->
              </div>

              <br>

              <input class=" nline-flex items-center justify-center rounded-md border border-transparent bg-slate-800 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-black focus:outline-none focus:ring-2 focus:ring-slate-700 focus:ring-offset-2 sm:w-auto cursor-pointer" type="submit" value="submit">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once __DIR__ . '/../../_components/footer.php';
