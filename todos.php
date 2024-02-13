<?php 
   $todosJSON = file_get_contents('db/todos.json');

    header('Content-Type: application/json');

   echo $todosJSON;

   $todosArray = json_decode($todosJSON, true);

   for($i=0; $i < count($todosArray); $i++) {
      $todosArray[$i]['difficulty'] = rand(0, 5);
   }
   
   
   echo json_encode($todosJSON);
?>