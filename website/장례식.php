<?php
	$conn = mysqli_connect(
  		'localhost', 
  		'root',
		'9891',
  		'test_2');

		  $sql = "SELECT * 
		  FROM test_2.flower_db
		  WHERE 꽃말 LIKE '%고독%' OR
				꽃말 LIKE '%쓸쓸함%' OR
				꽃말 LIKE '%불후%' OR
				꽃말 LIKE '%불변%' OR
				꽃말 LIKE '%다시 만납시다%' OR
				꽃말 LIKE '%당신을 버리지 않음%' OR
				꽃말 LIKE '%침묵%' OR
				꽃말 LIKE '%허무한 삶%' OR
				꽃말 LIKE '%헤어진 벗에게%' OR
				꽃말 LIKE '%기다리는 마음%' OR
				꽃말 LIKE '%슬픔%' OR
				꽃말 LIKE '%이별%' OR
				꽃말 LIKE '%애석%' OR
				꽃말 LIKE '%편히 쉬세요%' OR
				꽃이름 LIKE '백합(나리)' OR
				꽃말 LIKE '%당신 곁에 있겠습니다%' ORDER BY 월일 ASC";
		  
		  $result = mysqli_query($conn, $sql);
?>



<!DOCTYPE HTML>
<html>
	<head>
		<title>상황별 - 장례식</title>
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
						<h1>현재 <strong>"장례식"</strong>에 어울리는 꽃들을 보고 계십니다.<br />
						다른 상황을 보고 싶으면 "뒤로가기" 하시면 됩니다.</h1>
					</header>

				<!-- Main -->
					<section id="main">

						<!-- Thumbnails -->
							<section class="thumbnails">
								<div>
									<a href="images/꽃/코르딜리네.png">
										<img src="images/꽃/코르딜리네.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/우산나물.png">
										<img src="images/꽃/우산나물.png" alt="" />
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
									<a href="images/꽃/월계수.png">
										<img src="images/꽃/월계수.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
										
											?></h3>
									</a>
								</div>
								<div>
									<a href="images/꽃/포플러.png">
										<img src="images/꽃/포플러.png" alt="" />
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
									<a href="images/꽃/백합.png">
										<img src="images/꽃/백합.png" alt="" />
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
									<a href="images/꽃/초롱꽃.png">
										<img src="images/꽃/초롱꽃.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
										
											?></h3>
									</a>
								</div>
								<div>
									<a href="images/꽃/원추리.png">
										<img src="images/꽃/원추리.png" alt="" />
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
									<a href="images/꽃/아네모네.png">
										<img src="images/꽃/아네모네.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
										
											?></h3>
									</a>
									<a href="images/꽃/층꽃나무.png">
										<img src="images/꽃/층꽃나무.png" alt="" />
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
									<a href="images/꽃/해국.png">
										<img src="images/꽃/해국.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/오미자.png">
										<img src="images/꽃/오미자.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
										
											?></h3>
									</a>
									<a href="images/꽃/괭이밥.png">
										<img src="images/꽃/괭이밥.png" alt="" />
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
									<a href="images/꽃/에리카.png">
										<img src="images/꽃/에리카.png" alt="" />
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
