<?php
class robodoc {

  function throw_error($error) {
    switch ($error) {
      case 'noaccess':
      include 'src/msg/noaccess.php';
      break;

      case '404':
      include 'src/msg/404.php';  
      break;
    }
  }

  function get_file($file, $type) {
    if ($type == 'category') {
      if ($this->get_category_property($file, 'status') == 'public') {
        include $file;
        $catname = basename(dirname($file));
        foreach (glob('storage/' . $catname . '/*') as $f) {
          if (preg_match('/.php$/', $f)) {
            $f = str_replace('/storage\/' . $catname . '\//', '', $f);
            if ($f != 'storage/' . $catname . '/index.php') { 
              $hash = md5($f);
              echo '<a id="'.$hash.'"></a>';
              include $f;
              echo '<a href="?file='.$catname.'#'.$hash.'"><i class="fa fa-link"></i> </a>';
            }
          }
        }
      }
      else{
        $this->throw_error('noaccess');

      }
    }

    elseif($type == 'post') {
      include $file;

    }
  }

  function get_category_property($file, $property) {
    $catname = basename(dirname($file));
    $fcont = file_get_contents('storage/' . $catname . '/metadata.robodoc');
    $loc_property = strpos($fcont, $property);
    $propval = substr($fcont, $loc_property);
    $loc_endline = strpos($propval, ';');
    $propertyline = substr($propval, 0, $loc_endline);
    $pnv = $property.': ';
    $strip = strlen($pnv);
    $propertyvalue = substr($propertyline, $strip);
    return $propertyvalue;
  }

  function get_page_header() {
    include 'theme/header.php';
  }

  function get_page_footer() {
    include 'theme/footer.php';
  }
}
