<?php
	$conn = mysqli_connect(
  		'localhost', 
  		'root',
		'',
  		'flower');
		  echo '<h1>Database</h1>';

		  $sql = "SELECT * 
		  FROM flower.flower_db
		  WHERE 꽃말 LIKE '%선물%' OR
		  		꽃말 LIKE '%주의%' OR
				꽃말 LIKE '%추억%'";
				
		  
		  $result = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_array($result)){ 
			  echo $row['월일'].' '.$row['꽃이름'].' '.$row['꽃말'].'<br>';
			}
?>