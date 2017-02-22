<?php

if(ISSET($_REQUEST)) {
    echo '<pre>' . var_dump($_REQUEST) . '</pre>';
  }

function requestHandler() {
  // Start the switch and the if statement
  switch (ISSET($_REQUEST)) {
    // The switch will only start if there is a REQUEST
    case 'createFile':
      # code...
      echo "createFile";
      break;
    case 'deleteFile':
      # code...
      echo "deleteFile";
      break;
    case 'updateFile':
      # code...
      echo "updateFile";
      break;
    case 'readFile':
      # code...
      echo "readFile";
      break;
  }

  echo "<br />";

  // The if statements
  if (ISSET($_REQUEST['createFile'])) {
    // The ifstatements will only run when there is a REQUEST
    echo "create";
  }
  else if (ISSET($_REQUEST['deleteFile'])) {
    echo "delete";
  }
  else if (ISSET($_REQUEST['updateFile'])) {
    echo "update";
  }
  else if (ISSET($_REQUEST['readFile'])) {
    echo "read";
  }
}
  requestHandler();
  // Enable the request


  echo "<br />";


?>
