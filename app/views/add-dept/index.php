<?php 
ob_start();
?>

<div>
  Add Department
</div>

<?php 
$content = ob_get_clean();
include_once("../app/views/partials/master.php"); 
?>