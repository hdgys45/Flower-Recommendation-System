<?php
	$conn = mysqli_connect(
  		'localhost', 
  		'root',
		'',
  		'flower');
		  $search = $_GET['q'];

		  $sql = "SELECT * 
		  FROM flower.flower_db
		  WHERE 꽃말 LIKE '%$search%' OR	
		  		꽃이름 LIKE '%$search%' ORDER BY 월일 ASC";
		  
		  $result = mysqli_query($conn, $sql);
?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>검색어와 관련된 꽃</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main2.css" />

		<style>
		.thumbnails h3 {
				width:1000px;
			}
			</style>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<span class="avatar"><img src="images/장미.png" alt="" /></span>
						<h1>현재 <strong><?php echo $_GET['q'] ?> </strong>에 관한 꽃들을 보고 계십니다.<br />
						다른 추천 꽃을 보고 싶으면 "뒤로가기" 하시면 됩니다.</h1>
					</header>

				<!-- Main -->
					<section id="main">

						<!-- Thumbnails -->
							<section class="thumbnails">
								<div>
								<h3><?php
									while($row = mysqli_fetch_array($result)){ 
										echo '꽃이름:',$row['꽃이름'].'<br>'.'월일:',$row['월일'].' | '
										.'꽃말:',$row['꽃말'].'<br>','<br>';
										}
									?></h3>
							</section>

					</section>

				<!-- Footer -->
					<footer id="footer">
						<p>&copy; Untitled. All rights reserved. Design: <a href="http://templated.co">TEMPLATED</a>. Demo Images: <a href="http://unsplash.com">Unsplash</a>.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
