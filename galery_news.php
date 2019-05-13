<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="UTF-8">
		<title>Gallery News</title>
		<script type="text/javascript" src="jquery/jquery-2.2.0.min"></script>
		<script type="text/javascript" src="jquery/jquery-1.10.2.js"></script>
    </script>
		<style type="text/css">
		img{width: 300px; height: 300px;}
		div {
    background: yellow;
    border: 1px solid #AAA;
    width: 80px;
    height: 80px;
    margin: 0 5px;
    float: left;
  }
  div.colored {
    background: green;
  }
		</style>
		<script type="text/javascript">
		var nomor;
		var nm = new Array ("",<?php for($i = 1; $i <= 5; $i++){echo '"'; print $i ; echo '"';if($i<5){echo ",";} }?>);
		function gb(x){
			document.getElementById('text').innerHTML = nm[x];
			var path= "gallery/"+ x +".jpg";
			document.getElementsByTagName('img')[0].src = path;
			return false;
		}
		function ganti(nama){
			//ganti foto pada tag img
			nomor = nama;
			gb(nama);
		}
		function prev(){
			//ganti foto pada tag img kemabali
			if(nomor<=1){
				nomor=5;
			}else{
			nomor = nomor-1;}
			gb(nomor);
		}
		function next(){
			//ganti foto pada tag img next
			if(nomor>=5){
				nomor = 1;
			}else{
			nomor = nomor+1;}
			gb(nomor);
		}
		</script>
	</head>
		<body>
		
		<a href="#" onclick="prev()"><</a>
		<a href="#" onclick="ganti(1)">1</a>
		<a href="#" onclick="ganti(2)">2</a>
		<a href="#" onclick="ganti(3)">3</a>
		<a href="#" onclick="ganti(4)">4</a>
		<a href="#" onclick="ganti(5)">5</a>
		<a href="#" onclick="next()">></a>
		<br/>
			<img src='gallery/1.jpg'>
		<p id="text">1</p></body><br/>
		<div></div>
<div id="mover"></div>
<div></div>
<script>

function animateIt() {
  $( "#mover" ).toggle( "slow", animateIt );
}
 
animateIt();
</script>
		</body>
</html>