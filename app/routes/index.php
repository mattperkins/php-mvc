<?php 

  $app->get('/', function($res)
{
  require_once("../app/views/home/index.php");
});

$app->get('/add-dept', function()
{
  require_once("../app/views/add-dept/index.php");
});

$app->post('/add-dept', function($req, $res)
{
  require_once("../app/views/add-dept/index.php");
});

$app->get('/add-subj', function()
{
  require_once("../app/views/add-subj/index.php");
});

$app->post('/add-subj', function($req, $res)
{
  require_once("../app/views/add-subj/index.php");
});