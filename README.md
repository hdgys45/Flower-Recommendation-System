# Flower-Recommendation-System

1.꽃 추천 시스템 소개
------------------------

### 1.1. 소개

꽃 추천 시스템은 꽃말 뿐만 아니라 의미, 상황, 대상별로 꽃을 추천해주는 시스템이다.

### 1.2. 개발언어 및 소프트웨어
```
사용 운영체제 : Windows
웹: html, javascript, css, php
데이터 크롤링: python
데이터 베이스: MYSQL
데이터 베이스와 웹 연동: apache2.4
```
2.문제
------------
### 2.1 필요성
```
꽃을 선물할 때 꽃말은 꽃의 외관만큼 중요하다고 볼 수 있다.
왜냐하면 꽃말은 꽃이 가진 특징, 성질 등에 의거해서 상징적 의미를 부여한 것이기 때문이다.
그렇기 때문에 선물을 할 경우, 상황에 맞는 꽃말을 가진 꽃을 선물해준다면 받는 사람의 행복은 배가 될 것이다.
```
### 2.2 사례
```
꽃말 등을 통한 꽃 추천 시스템은 이전사례가 존재하지 않는다.
대부분 사이트나 어플리케이션에서 꽃 이름만 검색이 가능하고 
꽃말을 검색하여 꽃을 찾거나 추천해주는 사이트 또는 어플리케이션이 존재하지 않는다.
```
### 2.3 입력과  출력
```
input -> 꽃말 | ouput -> 꽃
내가 찾고 싶은 꽃말을 입력하면 결과로 꽃이 나온다.
ex> 사랑과 관련된 꽃을 찾고 싶어서 '사랑'을 검색하면 결과로 '순결한 사랑'이라는 의미를 가진 상사화가 출력된다.

또한, 카테고리를 사용하여 사용자의 선택에 따라 해당하는 꽃이 출력된다.
input -> 카테고리 내 선택요소 | output -> 꽃
ex> "기쁨"이라는 의미를 갖는 꽃을 찾고 싶어서 "의미별" 카테고리를 클릭하여 "기쁨"이라는 세부 카테고리를 클릭하면, 꽃말에 "기쁨"이 포함된 꽃이 출력된다.
```

3.해결방법
-----------
### 3.1 순서도
![순서도 최종 ver2](https://user-images.githubusercontent.com/74997073/145183284-23a1cfe7-b368-48ee-99f2-25d8bdc5b1e2.jpg)


### 3.2 데이터 수집방법
```
농촌진흥청의 꽃말사전에서 꽃이름과 꽃말을 크롤링해서 csv파일로 저장하고 MySQL로 데이터베이스를 생성한다.
```

4.사용방법
-----------
### 4.1 csv과 MySQL 연동
```
본 프로젝트는 따로 운영하는 서버가 아직까지 없기 때문에 데이터베이스를 직접 연동을 해야한다.
1. 본 프로젝트를 zip파일로 다운 받는다.
2. 압축을 풀고 flower_db.csv를 찾는다.
3. MySQL Workbench를 통하여 SCHEMA를 만들고, 해당 스키마를 마우스 우클릭을 통하여 "Table Data Import Wizard"를 눌러준다.
4. "File Path"에 flower_db.csv의 위치를 넣는다.
5. "Create new table"을 선택하고, 각 columns의 Field Type은 text로 한다.
6. next를 누르고 조금만 기다리면 연동 완료
```

### 4.2 MySQL과 Apache2.4 및 PHP 연동
```
1. Apache 2.4와 PHP를 다운 받는다.
2. PHP 파일 내에 있는 "php.ini-development" 파일을 메모장으로 연다.
3. 스크롤을 내리다 보면 ;extension_dir = "./" 이라는 내용이 있는데 앞에 있는 ';'를 제거하고, "./"의 부분에는 "php설치경로/ext"의 형태로 바꿔주며, 이름을 php.ini로 바꾼다.
4. php.ini를 C:/windows 파일에 넣는다.
5. 다음으로 Apache의 설정을 바꾸기 위하여 Apache24/conf 에 있는 "httpd.conf" 파일을 메모장으로 연다.
6. 스크롤을 내리다 보면, ServerRoot 에 Apache 2.4의 위치를 넣는다. (예를 들어 C드라이브에 넣었다면 "c:/Apache24"로 입력)
7. 수정을 완료 했으면 설치 및 실행을 해야하는데 자세한 내용은 링크 설명 참고 : https://fifo22.tistory.com/34
8. 설치 및 실행까지 끝났다면, php를 연동하기 위하여 다시 Apache24/conf 에 있는 "httpd.conf" 파일을 메모장으로 연다.
9. 스크롤을 내리다 보면, DirectoryIndex에 index.php을 추가한다.
10. 그 후 스크롤을 끝까지 내려서 밑에 다음과 같이 입력한다.

PHPIniDir "C:/windows"
LoadModule php_module "D:/php/php8apache2_4.dll"        /// 여기서 경로는 php 파일 내에 있는 php8apache2_4.dll의 위치를 말한다. (php8기준)
AddType application/x-httpd-php .html .php
AddHandler application/x-httpd-php .php

11. 마지막으로 Apache24\htdocs 폴더에 phpinfo.php 에 파일을 하나 만들어본다.

<내용>
<?php
phpinfo();
?>

12. cmd에서 Apache를 다시 restart 하면 연동 완료.
```

### 4.3 Apache2.4와 해당 프로젝트 연동
```
1. 본 프로젝트를 zip파일로 다운 받는다.
2. 압축을 풀면 website라는 폴더가 있을 것인데, 이 내부에 있는 파일들 모두 복사한다.
3. Apache24\htdocs 폴더에 아까 복사한 파일을 넣는다.
4. Apache2.4가 켜져있는 상황에서 인터넷 브라우저를 통하여 "localhost/index.html"을 입력하면 사용 가능하다.
```

5.연락처
-----------
팀장 : 황인성(hdgys1026@naver.com)
팀원 : 이동철(ehdcjf4874@daum.net)
       이성호(fihh8250@naver.com)
       
6.라이센스
-----------
MIT License

Copyright (c) 2021 hdgys45

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
