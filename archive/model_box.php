<?php

$box = [];
if (
  $handle =
  opendir('./upload')
) {
  // echo "Directory handle: $handle\n";
  // echo "Entries:\n";

  /* This is the correct way to loop over the directory. */
  while (false !== ($entry = readdir($handle))) {
    $ext = pathinfo($entry, PATHINFO_EXTENSION);
    //  echo   $ext ."\n";
    if ($ext == 'mp3') {
      array_push($box, "./upload/$entry");
    }
  }

  closedir($handle);
}