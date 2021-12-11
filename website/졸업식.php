<?php
	$conn = mysqli_connect(
  		'localhost', 
  		'root',
		'9891',
  		'test_2');

		  $sql = "SELECT * 
		  FROM test_2.flower_db
		  WHERE 꽃말 LIKE '%도전%' OR
	 	  	꽃말 LIKE '%환호%' OR
			꽃말 LIKE '%독립%' OR
			꽃말 LIKE '%용기%' OR
			꽃말 LIKE '%상쾌한 기분%' OR
			꽃말 LIKE '%미래를 즐긴다%' ORDER BY 월일 ASC";
		  
		  
		  $result = mysqli_query($conn, $sql);
?>



<!DOCTYPE HTML>
<html>
	<head>
		<title>상황별 - 졸업식</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main2.css" />
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<span class="avatar"><img src="images/장미.png" alt="" /></span>
						<h1>현재 <strong>"졸업식"</strong>에 어울리는 꽃들을 보고 계십니다.<br />
						다른 상황을 보고 싶으면 "뒤로가기" 하시면 됩니다.</h1>
					</header>

				<!-- Main -->
					<section id="main">

						<!-- Thumbnails -->
							<section class="thumbnails">
								<div>
									<a href="images/꽃/아나나스.png">
										<img src="images/꽃/아나나스.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
								</div>
								<div>
									<a href="images/꽃/큰금계국.png">
										<img src="images/꽃/큰금계국.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
										
											?></h3>
									</a>
								</div>
								<div>
									<a href="images/꽃/떡갈나무.png">
										<img src="images/꽃/떡갈나무.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
								</div>
								<div>
									<a href="images/꽃/속새.png">
										<img src="images/꽃/속새.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
								</div>
								<div>
									<a href="images/꽃/월귤.png">
										<img src="images/꽃/월귤.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
								</div>
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
