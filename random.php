<?php 
$names=10; 
function getName($names) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $names; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 

	} 
$id=7;
function getObjid($id) { 
    $characters = '0123456789'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $id; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 

	} 
	
$level=2;
function getLevel($level) { 
    $characters = '0123456789'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $level; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 

	} 

$pvp=3;
function getPvp($pvp) { 
    $characters = '0123456789'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $pvp; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 

	} 

$pk=1;
function getPk($pk) { 
    $characters = '0123456789'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $pk; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 

	} 

	$query=5;
	for ($i = 0; $i < $query; $i++) { 
		echo "INSERT INTO `acis`.`characters`(`obj_Id`, `char_name`, `level`, `pvpkills`, `pkkills`, `hero`) ";
		echo "VALUES (";
		echo getObjid($id);
		echo ", '";
		echo getName($names);
		echo "', ";
		echo getLevel($level);
		echo ", ";
		echo getPvp($pvp);
		echo ", ";
		echo getPk($pk);
		echo ", 1);";
		echo "<br>";
	}
?>