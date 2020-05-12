<?php 
function redirect($path)
{
  header('location:'.$path);
}
function redirection($path)
{
 echo '<script> window.location.href="'.$path.'";</script>';
}

function checkAdminLogin()
{
  if(isset($_SESSION['admin']['role']))
  return true;

  return false;
}
function checkUserLogin()
{
  if(isset($_SESSION['user']['id']))
  return true;

  return false;
}
function showSuccessMsg($msg)
{
	  $_SESSION['showmsg'] = '<div class="alert alert-success">
                                <div class="bg-green alert-icon">
                                    <i class="glyph-icon"></i>
                                </div>
                                <div class="alert-content">
                                    <h4 class="alert-title">Congrats</h4>
                                   	'.$msg.'</p>
                                </div>
                                </div>';


}
function uploadFile($FILES,$path)
   {
     $oldName = $FILES['file']['name'];
     $tmp = explode('.', $oldName);
     $newName = rand(00000000,99999999).md5($tmp[0].time().time()).'.'.$tmp[1];
     if(!is_dir($path))
        mkdir($path,0777);
    move_uploaded_file($FILES['file']['tmp_name'], $path.'/'.$newName);
    return $path.'/'.$newName;
    }
?>