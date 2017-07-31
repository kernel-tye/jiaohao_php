
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>网络信息部</title>
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="jquery.cookie.js"></script>
	<link rel="stylesheet" href="">
	<style>
		
		.animation{
			-webkit-animation:flipInX 1s .2s ease both;
			-moz-animation:flipInX 1s .2s ease both;
		}
		@-webkit-keyframes flipInX{
			0%{-webkit-transform:perspective(400px) rotateX(90deg);
			opacity:0}
			40%{-webkit-transform:perspective(400px) rotateX(-10deg)}
			70%{-webkit-transform:perspective(400px) rotateX(10deg)}
			100%{-webkit-transform:perspective(400px) rotateX(0deg);
			opacity:1}
		}
		@-moz-keyframes flipInX{
			0%{-moz-transform:perspective(1000px) rotateX(90deg);
			opacity:0}
			40%{-moz-transform:perspective(1000px) rotateX(-10deg)}
			70%{-moz-transform:perspective(1000px) rotateX(10deg)}
			100%{-moz-transform:perspective(1000px) rotateX(0deg);
			opacity:1}
		}
		.demo{
			width: 80%;
			height: auto;
			background-color: #33CCFF;
			margin:30px auto;
			text-align: center;
			margin-top: 14%;
			font-family: "微软雅黑";
		}
		#now{
			text-align: center;
			width: 100%;
			height: 50%;
			margin: auto;
			color: #ffffff;
		}
		#now p {
			font-size: 100px;
		}
		#next{
			text-align: center;
			width: 100%;
			height: 50%;
			margin: auto;
			color: #ffffff;
		}
		#next p {
			font-size: 50px;
		}
		body{
			background-color: #33CCFF;
		}
		#footer{
			position: absolute;
			width: auto;
			height: auto;
			background-color: #33CCFF;
			
			margin-bottom: 0px;
			text-align: center;
			color: #ffffff;
			left: 0;
			right: 0;
			top:90%;
		}
	</style>
	

</head>
<body>
	<audio src="./music/voice.wav" id="qaz" preload="preload" autoplay="autoplay"></audio>
	<div id="de" class="demo animation">
		<div id="now">
			<p id="ne">当前：同学</p>
		</div>
		<div id="next">
			<p id="nt">下一位：&nbsp;&nbsp;&nbsp;同学请做准备</p>
		</div>
	</div> 
	<!-- <button id="qa">1</button> -->
	<div id="footer">@网络信息中心·橙果工作室</div>
</body>
<script type="text/javascript">

$(function(){
//$.("NEW","1");
var check = '0';
function ok(){
	//alert();
	$.post("next.php",{
         next:"session", 		 	
       	},function(data){
       		check = data;
       	});
	if(check=="1"){	
		$.post("next.php",{
         next:"give",
       	},
       function(data){
       	if(data!=""){
        		//$("#de").removeClass('alertnimation');
           		var tex = document.getElementById('nt').innerHTML;
        		tex = tex.substring(4,9);
        		document.getElementById("ne").innerHTML = "当前："+tex+"同学";
        		document.getElementById('nt').innerHTML = "下一位："+data+"   同学请做准备";
		document.getElementById('qaz').play();
		$("#de").addClass("animation");
		setTimeout(function(){$("#de").removeClass('animation');},1500);
			}
        });
	}
	//ok();
	setTimeout(function(){ok()},50) ;
}
ok();
});
setTimeout(function(){$("#de").removeClass('animation');},2500);
</script>
</html>