<?php
function uploadFile ($file_field = null, $check_image = false, $random_name = false) {

  $path = 'img/users';
  $max_size = 1000000;
  $whitelist_ext = array('jpeg','jpg','png','gif');
  $whitelist_type = array('image/jpeg', 'image/jpg', 'image/png','image/gif');

  $out = array('error'=>null);

  if(!$file_field){
    $out['error'][] = "Please specify a valid form field name";
  }
  if(!$path){
    $out['error'][] = "Please specify a valid upload path";
  }
  if(count($out['error'])>0){
    return $out;
  }

  if((!empty($_FILES[$file_field])) && ($_FILES[$file_field]['error'] == 0)){
    // Get filename
    $file_info = pathinfo($_FILES[$file_field]['name']);
    $name = $file_info['filename'];
    $ext = $file_info['extension'];

    if(!in_array($ext, $whitelist_ext)){
      $out['error'][] = "Invalid file Extension";
    }
    if(!in_array($_FILES[$file_field]["type"], $whitelist_type)){
      $out['error'][] = "Invalid file Type";
    }
    if($_FILES[$file_field]["size"] > $max_size){
      $out['error'][] = "File is too big";
    }
    if($check_image){
      if(!getimagesize($_FILES[$file_field]['tmp_name'])){
        $out['error'][] = "Uploaded file is not a valid image";
      }
    }
    if($random_name){
      $tmp = str_replace(array('.',' '), array('',''), microtime());

      if(!$tmp || $tmp == ''){
        $out['error'][] = "File must have a name";
      }
      $newname = $tmp.'.'.$ext;
    }else{
        $newname = $name.'.'.$ext;
    }
    if(file_exists($path.$newname)){
      $out['error'][] = "A file with this name already exists";
    }
    if(count($out['error'])>0){
      return $out;
    }

    if(move_uploaded_file($_FILES[$file_field]['tmp_name'], $path.$newname)){
      $out['filepath'] = $path;
      $out['filename'] = $newname;
      return $out;
    }else{
      $out['error'][] = "Server Error!";
    }

  }else{
    $out['error'][] = "No file uploaded";
    return $out;
  }
}

if(isset($_POST['submit'])){
  $file = uploadFile('file', true, true);
  if(is_array($file['error'])){
    $message = '';
    foreach ($file['error'] as $msg) {
      $message .= '<p>'.$msg.'</p>';
    }
  }else{
    $message = "File uploaded successfully".$newname;
  }
  echo $message;
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <input name="file" type="file" id="imagee" />
      <input name="submit" type="submit" value="Upload" />
    </form>
  </body>
</html>
