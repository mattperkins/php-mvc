<?php 
// require '../vendor/autoload.php';
$message = "";
if(isset($_POST["name"]))
{
  Department::insert([
    "name" => htmlspecialchars($_POST["name"])
  ]);
  $message = "Data inserted successfully";
}
ob_start();
?>

<!-- ignored because route redirects to index -->
<div class="message">
  <?php if(!empty($message)): ?>
    <div class="alert alert-success">
      <?= $message ?>
    </div>
  <?php endif; ?>
</div>
<!-- \ ignored because route redirects to index -->


<form action="" method="post">
  <div class="form-group">
    <label for="name">Department Name</label>
    <input class="form-control" type="text" name="name" id="name">
  </div>
  <div class="form-group">
    <button class="btn btn-outline-info" type="submit">Add a department</button>
  </div>
</form>

<?php 
$content = ob_get_clean();
include_once("../app/views/partials/master.php"); 
?>