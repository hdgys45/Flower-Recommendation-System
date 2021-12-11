<?php
	$conn = mysqli_connect(
  		'localhost', 
  		'root',
		'9891',
  		'test_2');

		  $sql = "SELECT * 
		  FROM test_2.flower_db
		  WHERE 꽃말 LIKE '%희망%'";
		  
		  $result = mysqli_query($conn, $sql);
?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Visualize by TEMPLATED</title>
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
						<h1>현재 <strong>"희망"</strong>과 관련된 꽃들을 보고 계십니다.<br />
						다른 의미별 꽃을 보고 싶으면 "뒤로가기" 하시면 됩니다.</h1>
					</header>

				<!-- Main -->
					<section id="main">

						<!-- Thumbnails -->
							<section class="thumbnails">
								<div>
									<a href="images/꽃/큰꿩의비름.png">
										<img src="images/꽃/큰꿩의비름.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/산사나무.png">
										<img src="images/꽃/산사나무.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
										
											?></h3>
									</a>
								</div>
								<div>
									<a href="images/꽃/토끼풀.png">
										<img src="images/꽃/토끼풀.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/개나리.png">
										<img src="images/꽃/개나리.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
								</div>
								<div>
									<a href="images/꽃/스노우드롭.png">
										<img src="images/꽃/스노우드롭.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/프리뮬러.png">
										<img src="images/꽃/프리뮬러.png" alt="" />
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
