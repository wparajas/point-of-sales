<?php
	function generateCode($firstStr, $lastID)
	{
		$id = $lastID + 1;
    if (strlen($id) <= 0) { 
      $lengthOfId = 1;
      $lastStr = str_repeat("0", 5-$lengthOfId).$id;
    } else if (strlen($id) > 0 && strlen($id) < 5) {
      $lengthOfId = strlen($id);
      $lastStr = str_repeat("0", 5-$lengthOfId).$id;
    } else { 
      $lengthOfId = strlen($id);
      $lastStr = $id;
    }
    return $firstStr."-".date("y").'-'.$lastStr;
	}

?>