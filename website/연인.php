<?php
	$conn = mysqli_connect(
  		'localhost', 
  		'root',
		'9891',
  		'test_2');

		  $sql = "SELECT * 
		  FROM test_2.flower_db
		  WHERE 꽃말 LIKE '%사랑%' ORDER BY 월일 ASC";
			
		  
		  $result = mysqli_query($conn, $sql);
		  $row = mysqli_fetch_array($result);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>대상별 - 연인</title>
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
						<h1>현재 <strong>"연인"</strong>에게 선물하면 좋은 꽃들을 보고 계십니다.<br />
						다른 대상별 꽃을 보고 싶으면 "뒤로가기" 하시면 됩니다.</h1>
					</header>

				<!-- Main -->
					<section id="main">

						<!-- Thumbnails -->
							<section class="thumbnails">
								<div>
									<a href="images/꽃/스토크.png">
										<img src="images/꽃/스토크.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/아프리칸 바이올렛.png">
										<img src="images/꽃/아프리칸 바이올렛.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/남천.png">
										<img src="images/꽃/남천.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/레몬.png">
										<img src="images/꽃/레몬.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/아잘레아.png">
										<img src="images/꽃/아잘레아.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/솜다리.png">
										<img src="images/꽃/솜다리.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/제비꽃.png">
										<img src="images/꽃/제비꽃.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
								</div>
								<div>
									<a href="images/꽃/바람꽃.png">
										<img src="images/꽃/바람꽃.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/목련.png">
										<img src="images/꽃/목련.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/물망초.png">
										<img src="images/꽃/물망초.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/페튜니아.png">
										<img src="images/꽃/페튜니아.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/민들레.png">
										<img src="images/꽃/민들레.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/당아욱.png">
										<img src="images/꽃/당아욱.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/붓꽃.png">
										<img src="images/꽃/붓꽃.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
								</div>
								<div>
									<a href="images/꽃/스타티스.png">
										<img src="images/꽃/스타티스.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/장미.png">
										<img src="images/꽃/장미.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/꼬리조팝나무.png">
										<img src="images/꽃/꼬리조팝나무.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/아가판서스.png">
										<img src="images/꽃/아가판서스.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/인동.png">
										<img src="images/꽃/인동.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/프렌치매리골드.png">
										<img src="images/꽃/프렌치매리골드.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/과꽃.png">
										<img src="images/꽃/과꽃.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
								</div>
								<div>
									<a href="images/꽃/나팔꽃.png">
										<img src="images/꽃/나팔꽃.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/목화.png">
										<img src="images/꽃/목화.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/수련.png">
										<img src="images/꽃/수련.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/상사화.png">
										<img src="images/꽃/상사화.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/진노랑상사화.png">
										<img src="images/꽃/진노랑상사화.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/칡.png">
										<img src="images/꽃/칡.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/맨드라미.png">
										<img src="images/꽃/맨드라미.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
								</div>
								<div>
									<a href="images/꽃/보리수나무.png">
										<img src="images/꽃/보리수나무.png" alt="" />
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
									<a href="images/꽃/콜레우스.png">
										<img src="images/꽃/콜레우스.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/꽃무릇.png">
										<img src="images/꽃/꽃무릇.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/팔레놉시스.png">
										<img src="images/꽃/팔레놉시스.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/백량금.png">
										<img src="images/꽃/백량금.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/죽절초.png">
										<img src="images/꽃/죽절초.png" alt="" />
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
