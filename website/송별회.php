<?php
	$conn = mysqli_connect(
  		'localhost', 
  		'root',
		'9891',
  		'test_2');

		  $sql = "SELECT * 
		  FROM test_2.flower_db
		  WHERE 꽃말 LIKE '%슬픔%' OR
			꽃말 LIKE '%추억%' OR
			꽃말 LIKE '%친밀%' OR
			꽃말 LIKE '%불후%' OR
			꽃말 LIKE '%불변%' OR
			꽃말 LIKE '%헤어진 벗에게 보내는 마음%' OR
			꽃말 LIKE '%그리움%' OR
			꽃말 LIKE '%이별%' ORDER BY 월일 ASC";
		  
		  $result = mysqli_query($conn, $sql);
?>



<!DOCTYPE HTML>
<html>
	<head>
		<title>상황별 - 송별회</title>
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
						<h1>현재 <strong>"송별회"</strong>에 어울리는 꽃들을 보고 계십니다.<br />
						다른 상황을 보고 싶으면 "뒤로가기" 하시면 됩니다.</h1>
					</header>

				<!-- Main -->
					<section id="main">

						<!-- Thumbnails -->
							<section class="thumbnails">
								<div>
									<a href="images/꽃/복수초.png">
										<img src="images/꽃/복수초.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/탱자나무.png">
										<img src="images/꽃/탱자나무.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
										
											?></h3>
									</a>
									<a href="images/꽃/산수유.png">
										<img src="images/꽃/산수유.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/미선나무.png">
										<img src="images/꽃/미선나무.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
								</div>
								<div>
									<a href="images/꽃/라일락.png">
										<img src="images/꽃/라일락.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/월계수.png">
										<img src="images/꽃/월계수.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
										
											?></h3>
									</a>
									<a href="images/꽃/금잔화.png">
										<img src="images/꽃/금잔화.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/알리움.png">
										<img src="images/꽃/알리움.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
								</div>
								<div>
									<a href="images/꽃/과꽃.png">
										<img src="images/꽃/과꽃.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/백양꽃.png">
										<img src="images/꽃/백양꽃.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
										
											?></h3>
									</a>
									<a href="images/꽃/배롱나무.png">
										<img src="images/꽃/배롱나무.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/아스파라거스.png">
										<img src="images/꽃/아스파라거스.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
								</div>
								<div>
									<a href="images/꽃/일일초.png">
										<img src="images/꽃/일일초.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/천일홍.png">
										<img src="images/꽃/천일홍.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
										
											?></h3>
									</a>
									<a href="images/꽃/유칼리.png">
										<img src="images/꽃/유칼리.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/다정큼나무.png">
										<img src="images/꽃/다정큼나무.png" alt="" />
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
