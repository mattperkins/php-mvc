<?php 
ob_start();
?>

<div>
  Add Subject
</div>

<?php 
$content = ob_get_clean();
include_once("../app/views/partials/master.php"); 
?>