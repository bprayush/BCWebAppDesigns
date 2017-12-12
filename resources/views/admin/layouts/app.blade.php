<!doctype html>
	<head>
		<link rel="stylesheet" href="css/002.css" type="text/css">
		@yield('styles')
		<title>Admin Panel</title>
	</head>

	<body>

		<div id="bigboi">
			@include('admin.layouts.partials.sidepanel')
			<div id="mainboy">
				<div id="welcome">
					<div id="admin">
						<img src="images/me.jpg" style="width:32px;border-radius:100px;">&nbsp;&nbsp;&nbsp;
						<img src="icons/white.png" style="width:24px;margin-bottom:5px;">
					</div>	
					<br><br>
					<span class="himan">Welcome Admin</span>
				</div>
				@yield('content')
			</div>
		</div>

	@yield('scripts')

	</body>
</html>