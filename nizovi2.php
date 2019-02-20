<?php
$table = array("format" => array(7, 7),"positions" => array(array(3, 5),array(1, 4),array(4, 6),array(3, 7)));

for($fh=1; $fh<=$table['format'][1]; $fh++){
	for($fw=1; $fw<=$table['format'][0]; $fw++){
		$pointExists = false;
		foreach($table['positions'] as $pos){
			if($pos[0] == $fh && $pos[1] == $fw){
				echo 'X';
				$pointExists = true;
			}
		}
		if(!$pointExists) echo '0';
	}
	echo '<br>';
}
?>