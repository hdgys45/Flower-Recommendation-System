<?php
	$conn = mysqli_connect(
  		'localhost', 
  		'root',
		'9891',
  		'test_2');

		  $sql = "SELECT * 
		  FROM test_2.flower_db
		  WHERE 꽃말 LIKE '%사랑%' OR
			꽃말 LIKE '%관심%' OR
			꽃말 LIKE '%축복%' OR
			꽃말 LIKE '%정열%' OR
			꽃말 LIKE '%기쁜 소식%' OR
			꽃말 LIKE '%행운%' OR
			꽃말 LIKE '%행복%' OR
			꽃말 LIKE '%환희%' OR
			꽃말 LIKE '%희망%' OR
			꽃말 LIKE '%기쁨%' OR
			꽃말 LIKE '%찬사%' OR
			꽃말 LIKE '%결혼%' OR
			꽃말 LIKE '%좋은 소식%' ORDER BY 월일 ASC";
		  
		  $result = mysqli_query($conn, $sql);
?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>상황별 - 결혼식</title>
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
						<h1>현재 <strong>"결혼식"</strong>에 어울리는 꽃들을 보고 계십니다.<br />
						다른 상황을 보고 싶으면 "뒤로가기" 하시면 됩니다.</h1>
					</header>

				<!-- Main -->
					<section id="main">

						<!-- Thumbnails -->
							<section class="thumbnails">
								<div>
									<a href="images/꽃/수선화.png">
										<img src="images/꽃/수선화.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
											?></h3>
									</a>
									<a href="images/꽃/파키라.png">
										<img src="images/꽃/파키라.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
										
											?></h3>
									</a>
									<a href="images/꽃/스토크.png">
										<img src="images/꽃/스토크.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/크로커스.png">
										<img src="images/꽃/크로커스.png" alt="" />
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
									<a href="images/꽃/프리뮬러.png">
										<img src="images/꽃/프리뮬러.png" alt="" />
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
									<a href="images/꽃/스노우드롭.png">
										<img src="images/꽃/스노우드롭.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/스위트피.png">
										<img src="images/꽃/스위트피.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/복수초.png">
										<img src="images/꽃/복수초.png" alt="" />
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
									<a href="images/꽃/히아신스.png">
										<img src="images/꽃/히아신스.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/바람꽃.png">
										<img src="images/꽃/바람꽃.png" alt="" />
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
									<a href="images/꽃/아이리스.png">
										<img src="images/꽃/아이리스.png" alt="" />
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
									<a href="images/꽃/동이나물.png">
										<img src="images/꽃/동이나물.png" alt="" />
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
									<a href="images/꽃/철쭉.png">
										<img src="images/꽃/철쭉.png" alt="" />
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
									<a href="images/꽃/스타티스.png">
										<img src="images/꽃/스타티스.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/은방울꽃.png">
										<img src="images/꽃/은방울꽃.png" alt="" />
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
								</div>
								<div>									
									<a href="images/꽃/플록스.png">
										<img src="images/꽃/플록스.png" alt="" />
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
									<a href="images/꽃/꽃창포.png">
										<img src="images/꽃/꽃창포.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/도깨비부채.png">
										<img src="images/꽃/도깨비부채.png" alt="" />
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
									<a href="images/꽃/설악초.png">
										<img src="images/꽃/설악초.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/센토레아.png">
										<img src="images/꽃/센토레아.png" alt="" />
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
									<a href="images/꽃/토끼풀.png">
										<img src="images/꽃/토끼풀.png" alt="" />
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
								</div>
								<div>																		
									<a href="images/꽃/루드베키아.png">
										<img src="images/꽃/루드베키아.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/부겐빌리아.png">
										<img src="images/꽃/부겐빌리아.png" alt="" />
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
									<a href="images/꽃/포도.png">
										<img src="images/꽃/포도.png" alt="" />
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
									<a href="images/꽃/살비아.png">
										<img src="images/꽃/살비아.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/금호선인장.png">
										<img src="images/꽃/금호선인장.png" alt="" />
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
									<a href="images/꽃/눈개쑥부쟁이.png">
										<img src="images/꽃/눈개쑥부쟁이.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
								</div>
								<div>																		
									<a href="images/꽃/오렌지.png">
										<img src="images/꽃/오렌지.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/큰꿩의비름.png">
										<img src="images/꽃/큰꿩의비름.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/칼라.png">
										<img src="images/꽃/칼라.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/칼라디움.png">
										<img src="images/꽃/칼라디움.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/행운목.png">
										<img src="images/꽃/행운목.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/안개초.png">
										<img src="images/꽃/안개초.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>									
									<a href="images/꽃/공작선인장.png">
										<img src="images/꽃/공작선인장.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/유자나무.png">
										<img src="images/꽃/유자나무.png" alt="" />
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
									<a href="images/꽃/자금우.png">
										<img src="images/꽃/자금우.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/포인세티아.png">
										<img src="images/꽃/포인세티아.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/맥문동.png">
										<img src="images/꽃/맥문동.png" alt="" />
										<h3><?php
										$row = mysqli_fetch_array($result);
										  echo '월일:',$row['월일'].'<br>'.'꽃이름:',$row['꽃이름'].'<br>'.'꽃말:',$row['꽃말'].'<br>';
									
											?></h3>
									</a>
									<a href="images/꽃/돈나무.png">
										<img src="images/꽃/돈나무.png" alt="" />
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

