<?
$file="/tmp/titanusers.log";
$today = date("Y-m-d H:i:s"); 
$data="$today| IP:".$_SERVER['REMOTE_ADDR']."|ACTION=".$_GET["ACTION"]."|RESULT=".$_GET["RESULT"]." |TEXTVALUE=". $_GET["TEXTVALUE"]."\n";
 // Append if the fila already exists...
  if (file_exists($file))
  {
    file_put_contents($file,  $data, FILE_APPEND);
    // Note: use LOCK_EX if an exclusive lock is needed.
    // file_put_contents($file,  $data, FILE_APPEND | LOCK_EX);
  }
  // Otherwise write a new file...
  else
  {
    file_put_contents($file, $data);
  }
print "logged";

?>
