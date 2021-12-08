<?php
	$conn = mysqli_connect(
  		'localhost', 
  		'root',
		'',
  		'flower');
		  $search = $_GET['q'];
		  echo '<h1>Database</h1>';

		  $sql = "SELECT * 
		  FROM flower.flower_db
		  WHERE 꽃말 LIKE '%$search%' OR
		  		꽃이름 LIKE '%$search%'";
		  
		  $result = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_array($result)){ 
			  echo $row['월일'].' '.$row['꽃이름'].' '.$row['꽃말'].'<br>';
			}
?>