<?php 

// protect against XSS <- add to all echos
function e($value)
{
  return htmlspecialchars($value, ENT_QUOTES, "UTF-8");
}

