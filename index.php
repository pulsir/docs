<?php
error_reporting(E_ALL);
require_once 'src/robodoc.php';
$robodoc = new robodoc();

$req = $_SERVER['REQUEST_URI'];
$req = $_GET['file'];
$robodoc->get_page_header();

if ($req == '/'){
  // do nothing
}
elseif (file_exists($req.'.php')){
  $robodoc->throw_error('noaccess');
}

elseif (file_exists('storage/'.$req.'/index.php')){
  $robodoc->get_file('storage/'.$req.'/index.php', 'category');
}

elseif (file_exists('storage/'.$req.'.php')){
  $robodoc->get_file('storage/'.$req.'.php', 'post');
}

elseif (isset($_GET['file']) == false){
  // the homepage message
  include 'home.php';
}

else {
  $robodoc->throw_error(404);
}

$robodoc->get_page_footer();
