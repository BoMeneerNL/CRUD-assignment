<?php
echo('
<html>
<link rel="stylesheet" href="scripts/css/tailwind.css">
<nav class="bg-gray-800">
  <div class="w-11/12 h-16">
    ');
jefferserve($_GET['serve']);
echo('
<div class="fixed right-10 top-10">
      <p class="text">test</p>
    </div>
  </div>
</nav>


');
function jefferserve($serving)
{
    if ($serving == "welcome") {
        echo('
        <div class="px-5 py-5 rounded">
      <a href="#" class="active text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Homepage</a>
      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>
    </div>
        ');
    }
    else if($serving == "login"){
        echo('
        <div class="px-5 py-5 rounded">
      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">jefferson</a>
      <a href="#" class="active text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>
    </div>
        ');
    }
}