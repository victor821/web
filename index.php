<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>第一個網站</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="container">
			<div class="blog-post">
				<h1>我的第一個部落格</h1>
				<p id="post-date">日期:<?php $getDate= date("Y-m-d");echo 
				$getDate;?></p>
				<p><strong>原始森林</strong>（英語：Old-growth forest），又稱				<u>原生林</u>，是指一個森林已經達到非常長久的年齡而沒有遭到					顯著的干擾，從而表現出獨特的生態特徵，並可能被歸類為頂級群					落。原生特性包括多樣化的樹有關的結構，提供多樣化的野生動物棲				息地，增加了森林生態系統的生物多樣性。多樣化的樹結構的概念包				括多層樹冠和樹冠間隙，很大變化的樹的高度和直徑，多樣的樹種和
				綱，和多種大小的木質殘體...
				<a href="https://www.google.com.tw"> >繼續閱讀</a></p>
				<img class="blog" src="nature-forest-trees-fog.jpeg" 					alt="forest">
			</div>
	
			<div class="author-box">
				<img src="author.jpg" alt="author">
				<h3>Victor</h3>
				<p id="author-text">我希望這世界更美好，每個人都可以更快樂
				</p>
			</div>
		</div>
	</body>
</html>
