<?php

include "base.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>大漢傢俱官網</title>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	 crossorigin="anonymous"></script>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/hover-min.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="/favicon.ico" />
	<link rel="bookmark" href="/favicon.ico" />
	<link rel="icon" href="img/logotitle.ico" type="image/gif" />

	<link rel="stylesheet" href="css/fontAwesome.min.css">

	<style>
		*{
	box-sizing: border-box;
	font-family:"微軟正黑體","Bell MT";
	list-style-type: none;
	margin: 0;
    padding: 0
}

#particles{
	;
	width:100vw;
   
	background-image: url(./img/17-a.jpg);
	background-position: center;
	background-size: cover;
}

hr {
    margin-top:7px;
    *margin: 0;
    border: 0;
    color: rgb(34, 32, 32);
    background-color: rgb(34, 32, 32);
    height: 1px
}
#button_1{
	background-color:#dcc188;
	border:0px solid #f2c1a5;

	color:#352d13;
}
#button_1:hover{
	background-color:#fb5d58;
	
	color:#FFF;
}

.t1  {
    font-size: 1rem;
}
.t2  {
    font-size: 0.61rem;
}

/* 大圖背景hover */
.slider-for:hover .test{
	opacity:0.8;
}


		/* 按鈕 */
.read{
	opacity:1;
	position:absolute;
	left:48%;
	top:72%;
	border-radius:30px;
	background-color:#fb5d58;
	color:white;
}
.read:hover{
	background-color:white;
	opacity:0.5;
	color:#333;
}
.read1{
	opacity:1;
	position:absolute;
	left:45%;
	top:70%;
	border-radius:30px;
	background-color:#109ac2;
	color:white;
}
.read1:hover{

	background-color:white;
	opacity:0.5;
	color:#333;
}

.slider-for:hover {
	opacity:1;

}

.nav-item:hover{
	color:white;
}



.liferead{
	
	position:absolute;
	left:40%;
	top:50%;
	border-radius:30px;
	background-color:white;
	opacity:0.4;
	color:#333;


}
#liferead:hover{
	
	opacity:1;
	background-color:#fb5d58;
	color:white;
}
.liferead2{
	
	position:absolute;
	left:40%;
	top:30%;
	border-radius:30px;
	background-color:white;
	opacity:0.5;
	color:#333;


}
.liferead2:hover{
	
	opacity:1;
	background-color:#fb5d58;
	color:white;
}

.liferead3{
	
	position:absolute;
	left:40%;
	top:60%;
	border-radius:30px;
	background-color:white;
	opacity:0.5;
	color:#333;


}
.liferead3:hover{
	
	opacity:1;
	background-color:#fb5d58;
	color:white;
}

.liferead4{
	
	position:absolute;
	left:43%;
	top:70%;
	border-radius:30px;
	background-color:white;
	opacity:0.4;
	color:#333;
}
.liferead4:hover{
	
	opacity:1;
	background-color:#fb5d58;
	color:white;
}
.al:hover{
	background-color:#f8e8d8;
}
.b1:{

	opacity:0.5;
}
.b1:hover{
	background-color:#000;
	opacity:0.3;
}


								
						


.nav-link.active {
color: #d2ba16 !important;
}


</style>
</head>

<body style="background-color: #E5E5E5;margin=0;padding=0 ;overflow-x:auto">

	<?php include_once "header.php";?>

	<!--bannner-->

	<!--廣告大輪播-->
	<div class="container-fluid">
		<div class="row">
			<div class="slider-for">
				<!--1-->
				<div class="item position-relative">
					<img class="slider-img test" src="img/38.jpg" alt="image" draggable="false">
					<a href="#id">
						<button class="btn hvr-grow read d-none d-md-block">read me</button>
					</a>
				</div>

				<!--2-->
				<div class="item position-relative">
					<img class="slider-img test" src="img/28.jpg" alt="image" draggable="false">
					<a href="#id">
						<button class="btn hvr-grow read d-none d-md-block">read me</button>
					</a>
				</div>


				<!--3-->
				<div class="item position-relative">
					<img class="slider-img test" src="img/100.jpg" alt="image" draggable="false">
					<a href="#id">
						<button class="btn hvr-grow read d-none d-md-block">read me</button>
					</a>
				</div>

				<!--4-->
				<div class="item">
					<img class="slider-img test" src="img/25-1a.jpg" alt="image" draggable="false">
					<a href="#id">
						<button class="btn hvr-grow read d-none d-md-block">read me</button>
					</a>
				</div>
			</div>


			<div class="container-fluid  m-0 p-0" style="background-color:#282020;overl">
				<div class="container " style="padding:5px 20px 0px 20px">
					<div class="row m-0 m-lg-auto p-0 col-12  m-lg-12">
						<!--col-sm  col-12 col-xl-10平均分配-->
						<div class="slider-nav">
							<div class="item">
								<img class="small-img  " src="img/38-2.png" alt="image" draggable="false" id="img1">
							</div>
							<div class="item text-center  ">
								<img class="small-img" src="img/28-1.png" alt="image" draggable="false" id="img1">
							</div>
							<div class="item  ">
								<img class="small-img m-auto " src="img/100-1.png" alt="image" draggable="false" id="img1">
							</div>
							<div class="item  ">

								<img class="small-img" src="img/25-2a.jpg" alt="image" draggable="false" id="img1">

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--  -->
	<!--中間空間  -->

	<div class="container-fluid " style="background-color: #E5E5E5;">
		<div class="row m-auto">
			<div class="col-12 col-lg-12 pictext align-middle  d-none d-lg-block">
				<div class="d-table h-100 align-middle m-auto">
					<div class="d-table-cell align-middle text-dark" style=" width: 100vh; height:6vh;text-align: center;  ">&nbsp;
					</div>
				</div>
			</div>
		</div>
	</div>


	<!--中間導航列 -->
	<div class="container-fluid p-0 ">
		<div class="row m-0">
			<div class="col p-0">
				<!--原本的-d-none d-md-block-->
				<nav id="nav2" class="navbar navbar-expand-sm navbar-dark   shadow-lg border-bottom border-warning mb-2 d-none d-lg-block"
				 style="top: 0px;background-color: rgba(17,9,9,.4); height:55px   ; border-width: 2px !important ">
					<div class="container-fluid m-0 p-0">

						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
						 aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse " id="navbarSupportedContent2">
							<ul class="navbar-nav m-auto">
								<li class="nav-item" style="font-size:17px">
									<a class="nav-link hvr-overline-from-left text-center active" href="#d1" style="width:12vw">生活提案 <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item" style="font-size:17px">
									<a class="nav-link hvr-overline-from-left text-center" href="#d2" style="width:12vw">人氣排名</a>
								</li>
								<li class="nav-item" style="font-size:17px">
									<a class="nav-link hvr-overline-from-left text-center" href="#d3" style="width:12vw">商標故事</a>
								</li>

								<li class="nav-item" style="font-size:17px">
									<a class="nav-link hvr-overline-from-left text-center" href="#d4" style="width:12vw">特別內容</a>
								</li>
								<li class="nav-item" style="font-size:17px">
									<a class="nav-link hvr-overline-from-left text-center" href="#d5" style="width:12vw">優惠專案</a>
								</li>

								<li class="nav-item" style="font-size:17px">
									<a class="nav-link hvr-overline-from-left text-center" href="#d6" style="width:12vw">最新消息</a>
								</li>
							</ul>

						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>

	<!--中間空間  -->
	<div id="d1" class="container " style="background-color: #E5E5E5;">

		<div class="row">
			<div class="col-12 col-lg-12 pictext align-middle ">
				<div class="d-table h-100 align-middle m-auto">
					<div class="d-table-cell align-middle text-dark" style=" width: 100vh; height:20vh;text-align: center;padding-top:6px;  ">
						<h4 style="margin-top:25px; margin-bottom:0px;">生活提案</h4>
						<hr style="width:20%; aling:center; margin: 0px; display:inline-block ">
						<h5 style="margin-bottom:0; font-family:Bell MT ">life proposal</h5>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!--  -->
	<!--生活提案-->
	<div class="container-fluid mx-auto p-0">
		<!-- 1 -->
		<div class="row m-auto p-0">
			<div class=" life-img   ml-auto p-1 text-centerslider-for ">
				<figure class="figure m-0 position-relative " style="width:100%">
					<img src="./img/13-a.jpg" class="figure-img img-fluid rounded   m-0" id="life-a" alt="A generic square placeholder image with rounded corners in a figure.">

					<a href="#id">
						<button class="btn hvr-grow liferead4">read me</button>
					</a>

				</figure>
			</div>
			<div class="life-img   mr-auto p-1 text-center">
				<figure class="figure m-0 position-relative " style="width:100%">
					<img src="./img/45-a-1.jpg" class="figure-img img-fluid rounded m-0 " alt="A generic square placeholder image with rounded corners in a figure.">


					<a href="#id">
						<button class="btn hvr-grow liferead4">read me</button>
					</a>
				</figure>
			</div>
		</div>
	</div>
	<!-- 2 -->
	<div class="row m-auto">
		<div class="life-img  ml-auto p-1 text-center">
			<figure class="figure m-0 position-relative " style="width:100%">
				<img src="./img/41-a.jpg" class="figure-img img-fluid rounded m-0 " alt="A generic square placeholder image with rounded corners in a figure.">
				<!--<figcaption class="figure-caption text-right m-0 p-0">A caption for the above image.</figcaption>-->

				<a href="#id">
					<button class="btn hvr-grow liferead4">read me</button>
				</a>

			</figure>
		</div>
		<div class="life-img  mr-auto p-1 text-center">
			<figure class="figure m-0 position-relative " style="width:100%">
				<img src="./img/150-a.jpg" class="figure-img img-fluid rounded m-0 life-a" alt="A generic square placeholder image with rounded corners in a figure.">

				<a href="#id">
					<button class="btn hvr-grow liferead4">read me</button>
				</a>

			</figure>
		</div>
	</div>
	</div>
	<!--  -->
	<!--中間空間  -->

	<div id="d2" class="container">
		<!-- <div class="container"> -->
		<div class="row">
			<div class="col-12 col-lg-12 pictext align-middle">
				<div class="d-table h-100 align-middle m-auto">
					<div class="d-table-cell align-middle text-dark" style=" width: 100vh; height:20vh;text-align: center;padding-top:6px;  ">
						<h4 style="margin-top:25px; margin-bottom:0px ">人氣排名</h4>
						<hr style="width:20%; aling:center; margin: 0px; display:inline-block ">
						<h5 style="margin-bottom:0;font-family:Bell MT">popular product</h5>
					</div>
				</div>
			</div>
		</div>
		<!-- </div> -->
	</div>
	<!--  -->
	<!--人氣排名 img-fluid w-auto固定圖片尺寸比例-->
	<!--第一組卡片-->
	<div class="container-fluid">
		<div class="container-fluid mx-auto p-0">
			<div class="row">
				<div class="col-sm-12 p-1 popular p-0  ml-auto">
					<div class="card position-relative al ">
						<img class="card-img-top img-fluid w-100" src="./img/b11.jpg" alt="Card image cap">
						<a href="#id">
							<button class="btn hvr-grow liferead2">read me</button>
						</a>

						<div class="card-body">
							<h5 class="card-title">輝煌年代–組合式沙發</h5>
							<p class="card-text ">*大漢家居 因产品美观实用及品牌的、自然和谐而备受世人瞩目。Some quick example text to build ...
							</p>
							<a href="#" class="btn hvr-grow btn-secondary" style="border-radius:30px;" id="button_1">Go home</a>
						</div>
					</div>
				</div>

				<div class=" p-1 popular">
					<div class=" card position-relative al">
						<img class="card-img-top img-fluid w-100" src="./img/b26.jpg" alt="Card image cap">
						<a href="#id">
							<button class="btn hvr-grow liferead2">read me</button>
						</a>

						<div class="card-body">
							<h5 class="card-title">雙色原木小茶几</h5>
							<p class="card-text">*大漢家居 因产品美观实用及品牌的、自然和谐而备受世人瞩目。Some quick example text to build ...
							</p>
							<a href="#" class="btn hvr-grow btn-secondary" style="border-radius:30px;" id="button_1">Go home</a>
						</div>
					</div>
				</div>

				<div class=" p-1  popular  mr-auto">
					<div class=" card position-relative al ">
						<img class="card-img-top img-fluid w-100" src="./img/b18.jpg" alt="Card image cap">
						<a href="#id">
							<button class="btn hvr-grow liferead2">read me</button>
						</a>

						<div class="card-body">
							<h5 class="card-title">白色戀人-歐風雙人床</h5>
							<p class="card-text">*大漢家居 因产品美观实用及品牌的、自然和谐而备受世人瞩目。Some quick example text to build ....</p>
							<a href="#" class="btn hvr-grow btn-secondary" style="border-radius:30px;" id="button_1">Go home</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--第二組卡片-->
	<div class=" container-fluid ">
		<div class="container-fluid mx-auto p-0">
			<div class="row">
				<div class=" p-1 popular  ml-auto">
					<div class="card  position-relative al ">
						<img class="card-img-top img-fluid w-100" src="./img/b27.jpg" alt="Card image cap">
						<a href="#id">
							<button class="btn hvr-grow liferead2">read me</button>
						</a>

						<div class="card-body">
							<h5 class="card-title">淺紋大理石桌</h5>
							<p class="card-text">*大漢家居 因产品美观实用及品牌的、自然和谐而备受世人瞩目。Some quick example text to build ...</p>
							<a href="#" class="btn hvr-grow btn-secondary" style="border-radius:30px;" id="button_1">Go home</a>
						</div>
					</div>
				</div>

				<div class=" p-1 popular">
					<div class="card position-relative al ">
						<img class="card-img-top img-fluid w-100" src="./img/b23.jpg" alt="Card image cap">
						<a href="#id">
							<button class="btn hvr-grow liferead2">read me</button>
						</a>

						<div class="card-body">
							<h5 class="card-title">綠色大地-兩人座沙發</h5>
							<p class="card-text">*大漢家居 因产品美观实用及品牌的、自然和谐而备受世人瞩目。Some quick example text to build ...</p>
							<a href="#" class="btn hvr-grow btn-secondary" style="border-radius:30px;" id="button_1">Go home</a>
						</div>
					</div>
				</div>

				<div class="p-1 popular  mr-auto">
					<div class="card position-relative al">
						<img class="card-img-top img-fluid w-100" src="./img/b21.jpg" alt="Card image cap">
						<a href="#id">
							<button class="btn hvr-grow liferead2">read me</button>
						</a>

						<div class="card-body">
							<h5 class="card-title">人文氣息-床頭櫃</h5>
							<p class="card-text">*大漢家居 因产品美观实用及品牌的、自然和谐而备受世人瞩目。Some quick example text to build ...</p>
							<a href="#" class="btn hvr-grow btn-secondary" style="border-radius:30px;" id="button_1">Go home</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 中間空間商標故事   -->
	<div id="d3" class="container">
		<div class="row">
			<div class="col-12 col-lg-12 pictext align-middle">
				<div class="d-table h-100 align-middle m-auto">
					<div class="d-table-cell align-middle text-dark" style=" width: 100vh; height:20vh;text-align: center;padding-top:6px;  ">
						<h4 style="margin-top:25px; margin-bottom:0px ">商標故事</h4>
						<hr style="width:20%; aling:center; margin: 0px; display:inline-block ">
						<h5 style="margin-bottom:0;font-family:Bell MT">brands story</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 商標故事 brands story -->
	<!--1-->

	<div class="container-fluid " style="background-color: #E5E5E5;">
		<div class="container-fluid" style="padding:0px 0px 0px 0px">
			<div class="row text-center m-0 ">
				<div class="life-img p-0 ml-auto  ">
					<div class="row p-1">
						<div class="col-12   m-0 position-relative">
							<img src="./img/e1.png" class="w-100">
							<a href="#id">
								<button class="btn hvr-grow liferead3 mt-50 ">read me</button>
							</a>

						</div>
						<div class="col-12">
							<div class=" bg-secondary  text-white">
								<h5 style="text-align:center; fone-size:14px;margin:0;padding:5px;background-color:#9ebfbc "><b>Home Bird</b></h5>
								<p style="text-align:left; fone-size:13px;padding:10px;margin:auto ;background-color:#9ebfbc">*大漢傢俱生活館
									在大漢傢俱生活館門外、牆上的招牌寫著「大漢驛站」，所謂驛站，是古時候用來傳遞信息或接待賓客的地方。
								</p>
							</div>
						</div>
					</div>
				</div>

				<!--2-->
				<div class="life-img  p-0 mr-auto  ">
					<div class="row  p-1">
						<div class="col-12 position-relative ">
							<img src="./img/e3.png" class="w-100">
							<a href="#id">
								<button class="btn hvr-grow liferead3 mt-50 ">read me</button>
							</a>

						</div>
						<div class="col-12 ">
							<div class="d-table-cell   text-white">
								<h5 style="text-align:center; fone-size:14px;margin:0;padding:5px;background-color:#c7aa94 "><b>Sound and
										Vision</b></h5>
								<p style="text-align:left; fone-size:13px;padding:10px;margin:auto;background-color:#c7aa94 ">*大漢傢俱生活館
									在大漢傢俱生活館門外、牆上的招牌寫著「大漢驛站」，所謂驛站，是古時候用來傳遞信息或接待賓客的地方。
									</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--商標故事第2組-1-->

			<div class="container-fluid" style="background-color: #E5E5E5;">
				<div class="container-fluid" style="padding:0px 0px 0px 0px">
					<div class="row text-center  ">
						<div class="life-img ml-auto  ">
							<div class="row p-1">
								<div class="col-12  m-0 position-relative">
									<img src="./img/e4.png" class="w-100">
									<a href="#id">
										<button class="btn hvr-grow liferead3 mt-50 ">read me</button>
									</a>

								</div>
								<div class=col-12>
									<div class=" bg-secondary  text-white">
										<h5 style="text-align:center; fone-size:14px;margin:0;padding:5px;background-color:#d2c5ae "><b>Home Bird</b></h5>
										<p style="text-align:left; fone-size:13px;padding:10px;margin:auto ;background-color:#d2c5ae">*大漢傢俱生活館
											在大漢傢俱生活館門外、牆上的招牌寫著「大漢驛站」，所謂驛站，是古時候用來傳遞信息或接待賓客的地方。
										</p>

									</div>
								</div>
							</div>
						</div>

						<!--2-->
						<div class="life-img  p-0 mr-auto  ">
							<div class="row  p-1">
								<div class="col-12 position-relative ">
									<img src="./img/49-a.png" class="w-100">
									<a href="#id">
										<button class="btn hvr-grow liferead3 mt-50 ">read me</button>
									</a>

								</div>
								<div class="col-12 ">
									<div class="d-table-cell bg-secondary align-middle text-white">
										<h5 style="text-align:center; fone-size:14px;margin:0;padding:5px;background-color:#d6ba7f "><b>Sound and
												Vision</b></h5>
										<p style="text-align:left; fone-size:13px;padding:10px;margin:auto;background-color:#d6ba7f ">*大漢傢俱生活館
											在大漢傢俱生活館門外、牆上的招牌寫著「大漢驛站」，所謂驛站，是古時候用來傳遞信息或接待賓客的地方。</p>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!--中間空間  -->
	<div id="d4" class="container">
		<div class="row">
			<div class="col-12 col-lg-12 pictext align-middle">
				<div class="d-table h-100 align-middle m-auto">
					<div class="d-table-cell align-middle text-dark" style=" width: 100vh; height:20vh;text-align: center;padding-top:6px;  ">
						<h4 style="margin-top:25px; margin-bottom:0px ">特別內容</h4>
						<hr style="width:20%; aling:center; margin: 0px; display:inline-block ">
						<h5 style="margin-bottom:0;font-family:Bell MT">special content</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--特別內容 special content -->
	<div class="container-fluid p-0" style="width:100%;height:auto">
		<!-- <div class="container-fluid img-fluid  p-0 text-center" > -->
		<div class="row col-12 col-md-12 col-sm-12 text-center m-0 p-0 " id="particles">
			<a href="#id">
				<button class="btn hvr-grow read1 d-none d-md-block ">read me</button>
			</a>
<!-- 
		</div> -->
		</div>
	</div>
	<!--中間空間  -->
	<div id="d5" class="container">
		<div class="row">
			<div class="col-12 col-lg-12 pictext align-middle">
				<div class="d-table h-100 align-middle m-auto">
					<div class="d-table-cell align-middle text-dark" style=" width: 100vh; height:20vh;text-align: center;padding-top:6px;  ">
						<h4 style="margin-top:25px; margin-bottom:0px ">優惠專案</h4>
						<hr style="width:20%; aling:center; margin: 0px; display:inline-block ">
						<h5 style="margin-bottom:0;font-family:Bell MT">promotion</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--優惠專案  -->
	<div class="container-fluid text-center mx-auto p-0">
		<div class="row mx-auto">
			<!--1  -->
			<div class="promotion-word p-0 " style="background:#CA631E">
				<h5 style="height:40px;text-align:center;line-height:40px;color:white"> **********</h5>
			</div>
			<div class="promotion-img p-0  position-relative ">
				<img class="w-100 h-100" src="./img/9.png" alt="Responsive image">
				<a href="#id">
					<button class="btn hvr-grow liferead3 mt-50 ">read me</button>
				</a>

			</div>
		</div>
		<!--2-->
		<div class="row mx-auto">

			<div class="promotion-word p-0 " style=" background:#C1A590 ">
				<h5 style="height:40px;text-align:center;line-height:40px;color:white">*********</h5>
			</div>
			<div class="promotion-img p-0 position-relative">
				<img class="w-100 h-100" src="./img/a1-1.jpg" alt="Responsive image">
				<a href="#id">
					<button class="btn hvr-grow liferead3 mt-50 ">read me</button>
				</a>
			</div>

		</div>

		<!--3-->
		<div class="row mx-auto">
			<div class="promotion-word p-0 " style=" background-color:#008FAA">
				<h5 style="height:40px;text-align:center;line-height:40px;color:white">*********</h5>

			</div>
			<div class="promotion-img p-0  position-relative">
				<img class="w-100 h-100" src="./img/2p.png" alt="Responsive image">
				<a href="#id">
					<button class="btn hvr-grow liferead3 mt-50 ">read me</button>
				</a>
			</div>
		</div>
		<!--4-->
		<div class="row mx-auto">
			<div class="promotion-word p-0 " style=" background-color:#31140b ; ">
				<h5 style="height:40px;text-align:center;line-height:40px;color:white">*********</h5>
			</div>
			<div class="promotion-img p-0 position-relative">
				<img class="w-100 h-100" src="./img/98.png" alt="Responsive image">
				<a href="#id">
					<button class="btn hvr-grow liferead3 mt-50 ">read me</button>
				</a>
			</div>
		</div>
	</div>
	<!--  -->
	<div id="d6" class="container">
		<div class="row">
			<div class="col-12 col-lg-12 pictext align-middle">
				<div class="d-table h-100 align-middle m-auto">
					<div class="d-table-cell align-middle text-dark" style=" width: 100vh; height:20vh;text-align: center;padding-top:6px;  ">
						<h4 style="margin-top:25px; margin-bottom:0px ">最新消息</h4>
						<hr style="width:20%; aling:center; margin: 0px; display:inline-block ">
						<h5 style="margin-bottom:0;font-family:Bell MT">promotion</h5>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-12 p-0 " style=" background-color:#d2c5ae ;display:inline-block ">
		<h5 style="height:100px;text-align:center;line-height:100px;color:white">*******************</h5>
		<!--最新消息 -->
		<div class="container-fluid p-0 text-center " style="background-color:#d2c5ae">
			<div class="row  m-0   ">
				<!--1  -->
				<div class="container p-5 mb-5" style="padding:20px 0px 20px 0px;background-color:rgba(255, 255,255,0.2);border-radius:10px;border-radius:10px;margin-top:100px;width:90%;height:50%;overflow:hidden;margin:1px auto">
					<div class=row style="font-size:18px">
						<!--消息 引用JQ撈資料-->
						<div id="intro" class="base-container m-auto">
							<div id="bestbuypre" class="arrow" onclick="introSlider('back')"></div>
							<div class="bestwrap" style="width:100% ;text-align:left">
								<?php 
												$sql="select * from news where sh=1 LIMIT 5";
												$rows=$pdo->query($sql)->fetchAll();
												foreach($rows as $key => $row){
												
														echo "<div class='bestbuy'>
																<div class='best-title'>".$row['title']."</div>
																	<div class='best-content'>".mb_substr($row['content'],0,35)."...
																	<span id=".$key.">
																		<a href='javascript:void(0)'>
																		<button type='button' class='btn hvr-pulse ' style='background-color:#cbaf73; border-radius:20px; color:#FFF; padding:0px 10px 0px 10px '  data-toggle='modal' data-target='#exampleModal' onclick='readMore(".$row['id'].")'>
																		read
																		</button>
																		</a>
																	</span>
																</div>
															</div>";
												//	}
												}

										
											?>
								<!--  -->
								<script>
									function readMore(id){
															$.post("getnews.php",{id},function(data){
																// console.log(data)
																$("#modalbody").html(data)
																
															})
														}
													</script>

								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
								 aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">最新消息</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body" id="modalbody">
												...
											</div>
											<div class="modal-footer m-auto">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

											</div>
										</div>
									</div>
								</div>
								<!--  -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- 頁尾版權區footer -->
				<!-- .footer-widgets-wrap end -->
			
				<div class="container-fluid " style="padding:20px 0px 20px 0px;background-color:#ee4c46;width:100%;height:auto">
					<!---->
					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="mailto:service@tahan.com.tw" class="social-icon si-small si-borderless si-email3">
								<i class="icon-envelope2"></i>

							</a>
							<a href="https://www.facebook.com/tahan.design" target="blank_" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>

							</a>

							<a href="https://goo.gl/qJrCTm" target="blank_" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>

							</a>
						</div>


						<div class="container ">
							<div class=" row col_full">
								<div class="container-fluid " style="padding:0px 0px 0px 0px;background-color:#ee4c46">
									<div class="container text-center text-white">
										<ul class="nav justify-content-center">
											<li class="nav-item">
												<a class="nav-link text-white" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a>
											</li>
											<li class="nav-item ">
												<a class="nav-link text-white" href="https://twitter.com/?lang=zh-tw/" target="_blank"><i class="fab fa-twitter-square"></i></a>
											</li>
											<li class="nav-item">
												<a class="nav-link  text-white" href="https://www.youtube.com"><i class="fab fa-youtube" target="_blank"></i></a>
											</li>
											<li class="nav-item">
												<a class="nav-link text-white" href="#"><i class="fab fa-line"></i></a>
											</li>
										</ul>

										<script>
											document.write(new Date().getFullYear())
										</script><br>
										--*淑芳創作*令為&勝隆監製--*劉老師*鄭老師*蔡老師指導教學--

									</div>
								</div>
								<hr style="width:95%;  margin: 10px; display:inline-block ">
								<div class="col-md-3 col-xs-6 bottommargin-sm widget_links"><br>

									<h4 style="font-size: 20px;"><b>臺北展示中心</b></h4>
									<div style="font-size:14px;color: #EEE;">

										<abbr>臺灣新北市新莊區環漢路三段512號</abbr><br>
										<abbr><strong>電話:</strong></abbr> <a href="tel://0222059197" onclick="ga('send', 'event', 'phone', 'click');">02-2205-9197</a><br>
										<abbr><strong>傳真:</strong></abbr> 02-2204-2219<br>
										<abbr><strong>Line ID:</strong></abbr> <a href="http://line.me/ti/p/~tahan-furniture" onclick="ga('send', 'event', 'line', 'click');">tahan-furniture</a><br>
									</div>

								</div>

								<div class="col-md-3 col-xs-6 bottommargin-sm widget_links"><br>

									<h4 style="font-size: 20px;"><b>桃園展示中心</b></h4>
									<div style="font-size:14px;color: #EEE">
										<abbr>臺灣桃園市桃園區大興西路三段782-1號</abbr><br>
										<abbr><strong>電話:</strong></abbr> <a href="tel://033782779" onclick="ga('send', 'event', 'phone', 'click');">
											03-378-2779</a><br>
										<abbr><strong>傳真:</strong></abbr> 03-369-2797<br>
										<abbr><strong>Line ID:</strong></abbr> <a href="http://line.me/ti/p/~033782779" onclick="ga('send', 'event', 'line', 'click');">033782779</a><br>
									</div>

								</div>

								<div class="col-md-3 col-xs-6 bottommargin-sm widget_links"><br>

									<h4 style="font-size: 20px;"><b>臺中展示中心</b></h4>
									<div style="font-size:14px;color: #EEE">
										<abbr>臺灣臺中市西屯區安和路90-68號</abbr><br>
										<abbr><strong>電話:</strong></abbr> <a href="tel://0423552279" onclick="ga('send', 'event', 'phone', 'click');">
											04-2355-2279</a><br>
										<abbr><strong>傳真:</strong></abbr> 04-2355-2132<br>
										<abbr><strong>Line ID:</strong></abbr> <a href="http://line.me/ti/p/~0423552279" onclick="ga('send', 'event', 'line', 'click');">0423552279</a><br>
									</div>

								</div>

								<div class="col-md-3 col-xs-6 bottommargin-sm widget_links"><br>

									<h4 style="font-size: 20px;"><b>新竹概念館</b></h4>
									<div style="font-size:14px;color: #EEE">
										<abbr>臺灣新竹縣竹北市文平路38號</abbr><br>
										<abbr><strong>電話:</strong></abbr> <a href="tel://035587998" onclick="ga('send', 'event', 'phone', 'click');">
											03-558-7998</a><br>
										<abbr><strong>傳真:</strong></abbr> 03-558-7991<br>
										<abbr><strong>Line ID:</strong></abbr> <a href="http://line.me/ti/p/~035587998" onclick="ga('send', 'event', 'line', 'click');">035587998</a><br>
									</div>

								</div>
							</div>
						</div>

					</div>
				



				</div>
				<!--  -->













	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.js"></script>
	<script src="js/particles.min.js"></script>

	<!-- 粒子 -->
	<script>
		particlesJS.load('particles', 'particlesjs-config.json');
	</script>


	<script>
		$('.slider-for').slick({
			// 一次顯示幾張
			slidesToShow: 1,
			// 按鈕捲動顯示
			slidesToScroll: 1,
			// 左右箭頭
			arrows: false,
			// 淡入淡出
			fade: true,
			// 大圖連結小圖
			// asNavFor: '.slider-nav',
			// 自動播放
			autoplay: true,
			// 播放間隔
			autoplaySpeed: 2000,
		});
		$('.slider-nav').slick({
			// 一次顯示幾張,廣告頁
			slidesToShow: 4,
			// 按鈕捲動顯示
			//slidesToScroll: 1,
			asNavFor: '.slider-for',
			dots: false,
			centerMode: false,
			focusOnSelect: true,
			// 左右箭頭
			prevArrow: false,
			nextArrow: false,
			// 播放速度
			autoplaySpeed: 2000,
			responsive: [{
					// 解析度
					breakpoint: 768,
					settings: {
						centerMode: true,
						slidesToShow: 1,
						asNavFor: '.slider-for',
						dots: false,
						focusOnSelect: true,
					}
				},
				{
					// 解析度
					breakpoint: 992,
					settings: {
						centerMode: true,
						slidesToShow: 2,
						asNavFor: '.slider-for',
						dots: false,
						focusOnSelect: true,
					}
				},
				{
					// 解析度
					breakpoint: 1200,
					settings: {
						centerMode: true,
						slidesToShow: 3,
						asNavFor: '.slider-for',
						dots: false,
						focusOnSelect: true,
					}
				}
			]
		});
		// http://www.dowebok.com/84.html 中文參數
	</script>
	<!--  -->

	<script>
		/*中間導航列*/
		var nav2Position;
		var navHeight = 67;
		// nav2Position = $("#nav2").offset().top - navHeight;
		// 	$("#nav2").onPositionChanged(function(){

		// 	});

		$(window).scroll(function () {
			if ($(this).scrollTop() > nav2Position) {
				$("#nav2").addClass("fixed-top").css("top", "67px");
				$("#topbtn").fadeIn();

			} else {
				nav2Position = $("#nav2").offset().top - navHeight;
				$("#nav2").removeClass("fixed-top").css("top", "0px");
				$("#topbtn").fadeOut();
			}

		})
		$("#topbtn").click(function () {
			//$(window).scrollTop(0);
			$("html").animate({
				scrollTop: 0
			}, 800);
		})
	</script>

</body>

</html>