<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style type="text/css">
			body{background-color:#f5f5f5; width:100%;	font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; 
				margin:0px auto;padding:0px;color:#000;}
			.mainBox{margin:auto;width:650px;background-color:#f5f5f5;}
			.greetings{}
			.hi{font-size:20px;font-family:Century Gothic;font-weight:bold;}
			.card{font-family:Century Gothic;background-color:#fff;padding:20px;box-shadow:0px 0px 10px #b5b5b5;margin-top:20px;opacity:0.8;border-radius:3px;width:600px;}
			.date{font-family:Century Gothic;}
			.header{}
			.logo{border-radius:100px;float:left;width:32px;height:32px;}
			.schoolName{float:left;margin-top:5px;font-weight:bold;margin-left:8px;font-size:20px;}
			.local{font-size:14px;margin-left:5px;float:left;font-size:13px;margin-top:1px}
			.local2{font-size:16px;font-weight:bold;margin-left:5px;float:left;font-size:13px;margin-top:3px;}
			.mapp{width:16px;opacity:0.8;float:left;margin-left:40px}
			.mapp2{width:20px;float:left;margin-left:40px}
			.mapp:hover{opacity:1;transition:0.5s;cursor:pointer;}
			.data{float:right;}
			.sketch{}
			.clock{background-color:#27ae60;padding:8px;color:#fff;float:left;border-radius:3px;font-size:16px;}
			.classInfo{margin-left:150px;margin-top:5px;}
			.small{width:12px;float:left;margin-right:5px;margin-top:3px;}
			.className{font-size:18px;font-weight:bold;color:444;}
			.chapName{font-size:15px;font-style:italic;font-weight:bold;}
			.tool span {display: none; position: absolute; bottom: 0; left: 0; right: 0; background: #333; color: #fff; }
			.tool:hover span {display: block; }
			.services{font-family:Century Gothic;background-color:#2c3e50;color:#fff;padding:20px;width:600px;box-shadow:0px 0px 15px #b5b5b5;}
		</style>
	</head>
	
	<body>
		<div class="mainBox" style="padding: 40px;">
			<div class="greetings">
				<span class="hi">Hello Animesh,</span> <br><br>
				<span class="date">Your schedule for <i>Dec 3rd 2017</i> is ready</span><br><br>
			</div>
			


			<br><br>
			Default View / First View Ever
			<!--Default Card-->
			<div class="card" style="box-shadow:0px 0px 10px #b5b5b5;">
				<div class="header">
					<img src="{{ asset('images/kasatlogo.jpg') }}" class="logo"> 
					<span class="schoolName">Kastamandap School</span><br><br>
					<div class="tool"><img src="{{ asset('icons/placeholder.png') }}" title="View Map" class="mapp"></div>
					<span class="local">Newroad, Kathmandu</span>
					<div class="data">
						<img src="{{ asset('icons/calendar.png') }}" class="mapp2">
						<span class="local2">December 3rd 2017</span>
					</div>
				</div>
				<br><br><br>
				<div class="sketch">
					<div class="clock">
						9:00 - 10:00
					</div>
					<div class="classInfo">
						<span class="className">Class 6 B</span><br>
						<span class="chapName">When and when not to Gank</span>
						<br><br>
						<hr>
						<br>
						<img src="{{ asset('icons/tick.png') }}" class="small">Kit Ready<br><br>
						<img src="{{ asset('icons/tick.png') }}" class="small">Materials Ready<br>
					</div>
				</div>
			</div>

			<br><br><br><hr>	

			<br><br>
			Default Email View without the Kit/Material Status
			<!--Default Card with no footer-->
			<div class="card" style="box-shadow:0px 0px 10px #b5b5b5;">
				<div class="header">
					<img src="{{ asset('images/kasatlogo.jpg') }}" class="logo"> 
					<span class="schoolName">Kastamandap School</span><br><br>
					<div class="tool"><img src="{{ asset('icons/placeholder.png') }}" title="View Map" class="mapp"></div>
					<span class="local">Newroad, Kathmandu</span>
					<div class="data">
						<img src="{{ asset('icons/calendar.png') }}" class="mapp2">
						<span class="local2">December 3rd 2017</span>
					</div>
				</div>
				<br><br><br>
				<div class="sketch">
					<div class="clock">
						9:00 - 10:00
					</div>
					<div class="classInfo">
						<span class="className">Class 6 B</span><br>
						<span class="chapName">When and when not to Gank</span>
						<br><br>
					</div>
				</div>
			</div>

			<br><br><br><hr>

			<br><br>
				When the content is not given 
			<!--When no content card-->
			<div class="card" style="box-shadow:0px 0px 10px #b5b5b5;">
				<div class="header">
					<img src="{{ asset('images/kasatlogo.jpg') }}" class="logo"> 
					<span class="schoolName">Kastamandap School</span><br><br>
					<div class="tool"><img src="{{ asset('icons/placeholder.png') }}" title="View Map" class="mapp"></div>
					<span class="local">Newroad, Kathmandu</span>
					<div class="data">
						<img src="{{ asset('icons/calendar.png') }}" class="mapp2">
						<span class="local2">December 3rd 2017</span>
					</div>
				</div>
				<br><br><br>
				<div class="sketch">
					<center><div class="clock" style="font-size:32px;float:none;width:250px;height:40px;">
						9:00 - 10:00
					</div></center><br>
					<div class="classInfo">
						<span class="className" style="font-size:28px;margin-left:100px;">Class 6 B</span><br>
						<br><br>
						<hr>
						<br>
						<img src="{{ asset('icons/tick.png') }}" class="small">Kit Ready<br><br>
						<img src="{{ asset('icons/tick.png') }}" class="small">Materials Ready<br>
					</div>
				</div>
			</div>

			<br><br><br><hr>

			<br><br>
			When the content is not given without the kit/Materials status
			<!--When no content card without footer-->
			<div class="card" style="box-shadow:0px 0px 10px #b5b5b5;">
				<div class="header">
					<img src="{{ asset('images/kasatlogo.jpg') }}" class="logo"> 
					<span class="schoolName">Kastamandap School</span><br><br>
					<div class="tool"><img src="{{ asset('icons/placeholder.png') }}" title="View Map" class="mapp"></div>
					<span class="local">Newroad, Kathmandu</span>
					<div class="data">
						<img src="{{ asset('icons/calendar.png') }}" class="mapp2">
						<span class="local2">December 3rd 2017</span>
					</div>
				</div>
				<br><br><br>
				<div class="sketch">
					<center><div class="clock" style="font-size:32px;float:none;width:250px;height:40px;">
						9:00 - 10:00
					</div></center><br>
					<div class="classInfo">
						<span class="className" style="font-size:28px;margin-left:100px;">Class 6 B</span><br>
					</div>
				</div>
			</div>

			<br><br><br><hr>

			<br><br>
			Deafult Email view with the weather status
			<!--WEATHER-->
			<div class="card" style="box-shadow:0px 0px 10px #b5b5b5;">
				<div class="header">
					<img src="{{ asset('images/kasatlogo.jpg') }}" class="logo"> 
					<span class="schoolName">Kastamandap School</span><br><br>
					<div class="tool"><img src="{{ asset('icons/placeholder.png') }}" title="View Map" class="mapp"></div>
					<span class="local">Newroad, Kathmandu</span>
					<div class="data">
						<img src="{{ asset('icons/calendar.png') }}" class="mapp2">
						<span class="local2">December 3rd 2017</span>
					</div>
				</div>
				<br><br><br>
				<div class="sketch">
					<div class="clock">
						9:00 - 10:00
					</div>
					<div class="classInfo">
						<span class="className">Class 6 B</span><br>
						<span class="chapName">When and when not to Gank</span>
						<br><br>
						<hr>
						<img src="{{ asset('icons/tick.png') }}" class="small"><span style="font-size:14px;float:left;">Kit Ready</span><br>
						<img src="{{ asset('icons/tick.png') }}" class="small"><span style="font-size:14px;float:left;">Materials Ready</span><br><hr>
						<img src="{{ asset('icons/weatherboi.png') }}" class="small" style="width:32px;">
						<span style="font-size:36px;">17 &#186; C</span><br>
						<span style="font-size:14px;margin-left:45px;">You might wanna wear warm clothes tomorrow.</span>
					</div>
				</div>
			</div>

			<br><br><br><hr>

			<br><br>
			With Weather and tootle thing
			<!--WEATHER+ tootle-->
			<div class="card" style="box-shadow:0px 0px 10px #b5b5b5;">
				<div class="header">
					<img src="{{ asset('images/kasatlogo.jpg') }}" class="logo"> 
					<span class="schoolName">Kastamandap School</span><br><br>
					<div class="tool"><img src="{{ asset('icons/placeholder.png') }}" title="View Map" class="mapp"></div>
					<span class="local">Newroad, Kathmandu</span>
					<div class="data">
						<img src="{{ asset('icons/calendar.png') }}" class="mapp2">
						<span class="local2">December 3rd 2017</span>
					</div>
				</div>
				<br><br><br>
				<div class="sketch">
					<div class="clock">
						9:00 - 10:00
					</div>
					<div class="classInfo">
						<span class="className">Class 6 B</span><br>
						<span class="chapName">When and when not to Gank</span>
						<br><br>
						<hr>
						<img src="{{ asset('icons/tick.png') }}" class="small"><span style="font-size:14px;float:left;">Kit Ready</span><br>
						<img src="{{ asset('icons/tick.png') }}" class="small"><span style="font-size:14px;float:left;">Materials Ready</span><br><hr>
						<img src="{{ asset('icons/weatherboi.png') }}" class="small" style="width:32px;">
						<span style="font-size:36px;">17 &#186; C</span><br>
						<span style="font-size:14px;margin-left:45px;">You might wanna wear warm clothes tomorrow.</span>
					</div>
				</div>
			</div>
			<div class="services">
				<span style="font-style:italic;font-size:20px;font-weight:bold;">Get a Ride</span><br><br><br>
				<img src="{{ asset('icons/tootle.png') }}" style="margin-right:20px;width:180px;float:left;">
				<span style="font-size:14px;"><span style="font-size:15px;font-weight:bold;">Book a ride with Tootle</span><br>
				Call Now: 01 555 1333<br><br>
				<a style="border:none;color:#fff;background-color:#F62459;font-family:century Gothic;width:200px;padding:10px;border-radius:3px;font-weight:bold;font-size:13px;text-decoration:none;width:250px;" href="#">BOOK A RIDE</a>
				<br><br>
			</div>


			<br><br><br><hr>


			<br><br>
			With Weather and Foodmandu thing
			<!--WEATHER+ tootle-->
			<div class="card" style="box-shadow:0px 0px 10px #b5b5b5;">
				<div class="header">
					<img src="{{ asset('images/kasatlogo.jpg') }}" class="logo"> 
					<span class="schoolName">Kastamandap School</span><br><br>
					<div class="tool"><img src="{{ asset('icons/placeholder.png') }}" title="View Map" class="mapp"></div>
					<span class="local">Newroad, Kathmandu</span>
					<div class="data">
						<img src="{{ asset('icons/calendar.png') }}" class="mapp2">
						<span class="local2">December 3rd 2017</span>
					</div>
				</div>
				<br><br><br>
				<div class="sketch">
					<div class="clock">
						9:00 - 10:00
					</div>
					<div class="classInfo">
						<span class="className">Class 6 B</span><br>
						<span class="chapName">When and when not to Gank</span>
						<br><br>
						<hr>
						<img src="{{ asset('icons/tick.png') }}" class="small"><span style="font-size:14px;float:left;">Kit Ready</span><br>
						<img src="{{ asset('icons/tick.png') }}" class="small"><span style="font-size:14px;float:left;">Materials Ready</span><br><hr>
						<img src="{{ asset('icons/weatherboi.png') }}" class="small" style="width:32px;">
						<span style="font-size:36px;">17 &#186; C</span><br>
						<span style="font-size:14px;margin-left:45px;">You might wanna wear warm clothes tomorrow.</span>
					</div>
				</div>
			</div>
			<div class="services">
				<span style="font-style:italic;font-size:20px;font-weight:bold;">Order Food Online</span><br><br><br>
				<img src="{{ asset('icons/food.png') }}" style="margin-right:20px;width:180px;float:left;">
				<span style="font-size:14px;"><span style="font-size:15px;font-weight:bold;">Order your Lunch for tomorrow</span><br>
				Call Now: 01 555 1333<br><br>
				<a style="border:none;color:#fff;background-color:#27ae60;font-family:century Gothic;width:200px;padding:10px;border-radius:3px;font-weight:bold;font-size:13px;text-decoration:none;" href="#">GO TO WEBSITE</a>
				<br><br>
			</div>


			<br><br><br><hr>

			<br><br>
			With Weather and other services
			<!--WEATHER+ tootle + foodmandu-->
			<div class="card" style="box-shadow:0px 0px 10px #b5b5b5;">
				<div class="header">
					<img src="{{ asset('images/kasatlogo.jpg') }}" class="logo"> 
					<span class="schoolName">Kastamandap School</span><br><br>
					<div class="tool"><img src="{{ asset('icons/placeholder.png') }}" title="View Map" class="mapp"></div>
					<span class="local">Newroad, Kathmandu</span>
					<div class="data">
						<img src="{{ asset('icons/calendar.png') }}" class="mapp2">
						<span class="local2">December 3rd 2017</span>
					</div>
				</div>
				<br><br><br>
				<div class="sketch">
					<div class="clock">
						9:00 - 10:00
					</div>
					<div class="classInfo">
						<span class="className">Class 6 B</span><br>
						<span class="chapName">When and when not to Gank</span>
						<br><br>
						<hr>
						<img src="{{ asset('icons/tick.png') }}" class="small"><span style="font-size:14px;float:left;">Kit Ready</span><br>
						<img src="{{ asset('icons/tick.png') }}" class="small"><span style="font-size:14px;float:left;">Materials Ready</span><br><hr>
						<img src="{{ asset('icons/weatherboi.png') }}" class="small" style="width:32px;">
						<span style="font-size:36px;">17 &#186; C</span><br>
						<span style="font-size:14px;margin-left:45px;">You might wanna wear warm clothes tomorrow.</span>
					</div>
				</div>
			</div>
			<div class="services">
				<span style="font-style:italic;font-size:20px;font-weight:bold;">Use other services</span><br><br><br>
				<img src="{{ asset('icons/tootle.png') }}" style="margin-right:20px;width:180px;float:left;">
				<span style="font-size:14px;"><span style="font-size:15px;font-weight:bold;">Book a ride with Tootle</span><br>
				Call Now: 01 4444 177 | 01 444 097<br><br>
				<a style="border:none;color:#fff;background-color:#F62459;font-family:century Gothic;width:200px;padding:10px;border-radius:3px;font-weight:bold;font-size:13px;text-decoration:none;" href="#">BOOK A RIDE</a>
				<br><br><br><br>


				<img src="{{ asset('icons/food.png') }}" style="margin-right:20px;width:180px;float:left;">
				<span style="font-size:15px;font-weight:bold">Order Food</span><br>
				Call Now: 01 4444 177 | 01 444 097<br><br></span>
				<a style="border:none;color:#fff;background-color:#27ae60;font-family:century Gothic;width:200px;padding:10px;border-radius:3px;font-weight:bold;font-size:13px;text-decoration:none;" href="#">GO TO WEBSITE</a>
				<br><br>
			</div>

			<br><br><br><hr>

			<br><br>
			With Weather and other services with small icons
			<!--WEATHER+ tootle + foodmandu with smaller icons-->
			<div class="card" style="box-shadow:0px 0px 10px #b5b5b5;">
				<div class="header">
					<img src="{{ asset('images/kasatlogo.jpg') }}" class="logo"> 
					<span class="schoolName">Kastamandap School</span><br><br>
					<div class="tool"><img src="{{ asset('icons/placeholder.png') }}" title="View Map" class="mapp"></div>
					<span class="local">Newroad, Kathmandu</span>
					<div class="data">
						<img src="{{ asset('icons/calendar.png') }}" class="mapp2">
						<span class="local2">December 3rd 2017</span>
					</div>
				</div>
				<br><br><br>
				<div class="sketch">
					<div class="clock">
						9:00 - 10:00
					</div>
					<div class="classInfo">
						<span class="className">Class 6 B</span><br>
						<span class="chapName">When and when not to Gank</span>
						<br><br>
						<hr>
						<img src="{{ asset('icons/tick.png') }}" class="small"><span style="font-size:14px;float:left;">Kit Ready</span><br>
						<img src="{{ asset('icons/tick.png') }}" class="small"><span style="font-size:14px;float:left;">Materials Ready</span><br><hr>
						<img src="{{ asset('icons/weatherboi.png') }}" class="small" style="width:32px;">
						<span style="font-size:36px;">17 &#186; C</span><br>
						<span style="font-size:14px;margin-left:45px;">You might wanna wear warm clothes tomorrow.</span>
					</div>
				</div>
			</div>
			<div class="services">
				<span style="font-style:italic;font-size:20px;font-weight:bold;">Use other services</span><br><br>
				<img src="{{ asset('icons/tootle.png') }}" style="margin-right:20px;width:80px;float:left;">
				<span style="font-size:13px;float:left;margin-top:8px;">
				Call Now: 01 4444 177 | 01 444 097</span>
				<a style="margin-left:20px;border:none;color:#fff;background-color:#F62459;font-family:Century Gothic;padding:5px;border-radius:3px;font-size:10px;margin-top:5px;float:left;text-decoration:none;" href="#">BOOK A RIDE</a>
				<br><br>


				<img src="{{ asset('icons/foode.png') }}" style="margin-right:20px;width:80px;float:left;">
				<span style="font-size:13px;float:left;margin-top:8px;">
				Call Now: 01 4444 177 | 01 444 097<br><br></span>
				<a style="margin-left:20px;border:none;color:#fff;background-color:#27ae60;font-family:Century Gothic;padding:5px;border-radius:3px;font-size:10px;margin-top:5px;float:left;text-decoration:none;" href="#">GO TO WEBSITE</a>
				<br><br>
			</div>


			<br><br><br><hr>

			<br><br>
			With Weather and other services with small icons + school contact + Support Teachers Info
			<!--WEATHER+ tootle + foodmandu + School Contact + Support Teachers -->
			<div class="card" style="box-shadow:0px 0px 10px #b5b5b5;">
				<div class="header">
					<img src="{{ asset('images/kasatlogo.jpg') }}" class="logo"> 
					<span class="schoolName">Kastamandap School</span><br><br>
					<div class="tool"><img src="{{ asset('icons/placeholder.png') }}" title="View Map" class="mapp"></div>
					<span class="local">Newroad, Kathmandu</span><br>
					<div class="tool"><img src="{{ asset('icons/phone.png') }}" title="Call Now" class="mapp"></div>
					<span class="local">+977-1-4374430, 4374621</span>
					<div class="data">
						<img src="{{ asset('icons/calendar.png') }}" class="mapp2">
						<span class="local2">December 3rd 2017</span>
					</div>
				</div>
				<br><br><br>
				<div class="sketch">
					<div class="clock">
						9:00 - 10:00
					</div>
					<div class="classInfo">
						<span class="className">Class 6 B</span><br>
						<span class="chapName">When and when not to Gank</span>
						<br>
						<hr>
						<img src="{{ asset('icons/tick.png') }}" class="small"><span style="font-size:14px;float:left;">Kit Ready</span><br>
						<img src="{{ asset('icons/tick.png') }}" class="small"><span style="font-size:14px;float:left;">Materials Ready</span><br><br><br>
						<img src="{{ asset('icons/akotango.png') }}" class="small" style="width:20px;"><span style="font-size:20px;float:left;margin-top:1px;font-weight:bold;">Support Teachers</span><br><br>
							<span style="margin-left:30px;font-size:14px;">William Rai &nbsp;&nbsp;&nbsp;<i>+977 9823637889</i></span><br>
							<span style="margin-left:30px;font-size:14px;">Suresh Ghimire &nbsp;&nbsp;&nbsp;<i>+977 9851178320</i></span><br><br>
						<hr>					
						<img src="{{ asset('icons/weatherboi.png') }}" class="small" style="width:32px;">
						<span style="font-size:36px;">17 &#186; C</span><br>
						<span style="font-size:14px;margin-left:45px;">You might wanna wear warm clothes tomorrow.</span>
					</div>
				</div>
			</div>
			<div class="services">
				<span style="font-style:italic;font-size:20px;font-weight:bold;">Use other services</span><br><br>
				<img src="{{ asset('icons/tootle.png') }}" style="margin-right:20px;width:80px;float:left;">
				<span style="font-size:13px;float:left;margin-top:8px;">
				Call Now: 01 4444 177 | 01 444 097</span>
				<a style="margin-left:20px;border:none;color:#fff;background-color:#F62459;font-family:Century Gothic;padding:5px;border-radius:3px;font-size:10px;margin-top:5px;float:left;text-decoration:none;" href="#">BOOK A RIDE</a>
				<br><br>


				<img src="{{ asset('icons/foode.png') }}" style="margin-right:20px;width:80px;float:left;">
				<span style="font-size:13px;float:left;margin-top:8px;">
				Call Now: 01 4444 177 | 01 444 097<br><br></span>
				<a style="margin-left:20px;border:none;color:#fff;background-color:#27ae60;font-family:Century Gothic;padding:5px;border-radius:3px;font-size:10px;margin-top:5px;float:left;text-decoration:none;" href="#">GO TO WEBSITE</a>
				<br><br>
			</div>

		</div>	
	</body>
</html>