<?php 
ob_start();
?>

<div>
  home
</div>

<?php 
$content = ob_get_clean();
include_once("../app/views/partials/master.php"); 
?>