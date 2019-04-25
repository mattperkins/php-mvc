<?php
$departments = Department::all(); 
$message = "";
if(isset($_POST["name"]))
{
  Subject::insert([
    "name" => $_POST["name"],
    "department_id" => $_POST["department"]
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
    <label for="name">Subject Name</label>
    <input class="form-control" type="text" name="name" id="name">
  </div>
  <div class="form-group">
    <label for="department">Department</label>
    <select name="department" class="form-control" id="department">
      <?php foreach($departments as $department): ?>
        <option value="<?= $department->id ?>">
          <?= $department->name ?>
        </option>
      <?php endforeach ?>
    </select>
  </div>
  <div class="form-group">
    <button class="btn btn-outline-info" type="submit">Add a subject</button>
  </div>
</form>

<?php 
$content = ob_get_clean();
include_once("../app/views/partials/master.php"); 
?>