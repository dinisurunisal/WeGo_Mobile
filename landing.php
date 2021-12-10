<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>
	$(document).ready(function(){
		$("#next0").click(function(){
		$("#intro1").show();
		$("#landing").hide();
	  });
	  $("#next1").click(function(){
		$("#intro1").hide();
		$("#intro2").show();
		$("#landing").hide();
	  });
	  $("#next2").click(function(){
		$("#landing").hide();
		$("#intro2").hide();
	  });
	});
	</script>
</head>
<style>
body {
  margin: 0;
}
h1{
	text-align: center;
	font-family: Noto Sans; 
	font-weight: 900; 
	font-size: 70px; 
	line-height: 50px; 
	letter-spacing: 0.01em; 
	color: #404040;
}
p{
	text-align: center;
	font-family: Noto Sans; 
	font-weight: normal; 
	font-size: 39.6px; 
	line-height: 60px; 
	letter-spacing: 0.01em; 
	color: #404040;
}
#foo{
	height: 100%;
}
.one{
	height: 70%;
}
.wrapper {
    text-align: center;
}
.buttons{
    top: 50%;
	margin:50px; 
	height:100px; 
	width:500px; 
	box-shadow: 4px 3px #DCDCDC; 
	font-family: Noto Sans; 
	font-size: 40px; 
	font-color:white; 
	border-radius:45px; 
	color:white; 
	background-color:#0174CF; 
	border:none;
}
.two{
	height: 70%;
}
.three{
	height: 70%;
}
#human{
	margin-left: auto;
    margin-right: auto;
    display: block;
}

</style>


<body>

	<div data-role="page" id="foo">
		<div id="landing">
			<div class="one">
				<img id="human" src="images/Group.png" alt="human" width="978" height="1456">
				<!--<img id="back" src="images/landingBackground.png" alt="back" style="width:400; height:580">-->
			</div>
			<div style="margin-bottom: 20%">
				<h1>
					Find Best Destinations
				</h1>
				<p>
					You can find the best destinations in London to West England
				</p>
				<div class="wrapper">
					<button data-role="none" id="next0" class="buttons">Get Started</button>
				</div>
			</div>
		</div>
	</div>
	
	
	<div id="intro1">
		<div class="two">
			<img id="human" src="images/Group2.png" alt="human" width="978" height="1456">
			<!--<img id="back" src="images/landingBackground.png" alt="back" style="width:400; height:580">-->
		</div>
		<div style="margin-bottom: 20%">
			<h1>
				Book Your Train Tickets
			</h1>
			<p style="font-size: 22.6px">
				You can find the most suitable train route and book tickets online
			</p>
			<div class="wrapper">
				<button data-role="none" id="next1" class="buttons">Next</button>
			</div>
			
		</div>
	</div>
	
	
	
	<div id="intro2">
		<div class="three">
			<img id="human" src="images/Group3.png" alt="human" width="978" height="1456">
			<!--<img id="back" src="images/landingBackground.png" alt="back" style="width:400; height:580">-->
		</div>
		<div style="margin-bottom: 20%">
			<h1>
				Play And Win Points
			</h1>
			<p style="font-size: 22.6px">
				You can find play treasure hunt games to win point and use them for discounts
			</p>
			<div class="wrapper">
				<button onclick="window.location.href='login.php'" data-role="none" id="next2" class="buttons">Next</button>
			</div>
			
		</div>
	</div>
	

</body>
</html

