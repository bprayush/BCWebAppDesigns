<html>
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style type="text/css">
			body{background-color:#f5f5f5; width:100%;font-family:Arial;margin:0px auto;padding:0px;color:#000;}
			.mainbox{margin:auto;width:650px;margin-top:100px;background-color:#f5f5f5;padding:40px;}
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
			.small{width:16px;float:left;margin-right:5px;}
			.className{font-size:18px;font-weight:bold;color:444;}
			.chapName{font-size:15px;font-style:italic;font-weight:bold;}
			.tool span {display: none; position: absolute; bottom: 0; left: 0; right: 0; background: #333; color: #fff; }
			.tool:hover span {display: block; }
		</style>
	</head>
	
	<body>
		<div class="mainBox">
			<div class="greetings">
				<span class="hi">Hello @yield('name'),</span> <br><br>
				<span class="date">Your schedule for <i>@yield('date')</i> is ready</span><br><br>
			</div>
			
			<div class="card">
				<div class="header">
					<img src="{{ asset('images/kasatlogo.jpg') }}" class="logo"> 
					<span class="schoolName">@yield('school')</span><br><br>
					<div class="tool"><img src="{{ asset('icons/placeholder.png') }}" title="View Map" class="mapp"></div>
					<span class="local">@yield('location')</span>
					<div class="data">
						<img src="{{ asset('icons/calendar.png') }}" class="mapp2">
						<span class="local2">@yield('date')</span>
					</div>
				</div>
				<br><br><br>
				<div class="sketch">
					<div class="clock">
						@yield('time')
					</div>
					<div class="classInfo">
						<span class="className">@yield('class')</span><br>
						<span class="chapName">@yield('content')</span>
						<br><br>
						<hr>
						<br>
						<img src="{{ asset('icons/tick.png') }}" class="small"> Kit Ready<br>
						<img src="{{ asset('icons/tick.png') }}" class="small">Materials Ready<br>
					</div>
				</div>
			</div>
		</div>	
	</body>
</html>