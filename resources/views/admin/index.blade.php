<!doctype html>
	<head>
		<link rel="stylesheet" href="css/002.css" type="text/css">
		<title>Admin Panel</title>
	</head>

	<body>

		<div id="bigboi">
			<div id="sidebar">
				<div id="title">
					<img src="icons/engineer.png" style="width:24px;float:left;">
					<span style="font-size:18px;color:#b5b5b5;float:left;margin-left:5px;margin-top:3px;">Admin Panel</span><br><br>
					<span style="float:right;font-size:12px;">v.1.0.0
				</div>
				<div id="linkz">
					<a href="#" class="activelinks"><img src="icons/home.png" class="small">Home</a><br><br>
					<a href="#" class="links"><img src="icons/school.png" class="small">Schools</a><br><br>
					<a href="#" class="links"><img src="icons/teacher.png" class="small">Teachers</a><br><br>
					<a href="#" class="links"><img src="icons/tick.png" class="small">ToDos</a><br><br>
					<a href="#" class="links"><img src="icons/sent.png" class="small">Sent</a><br><br>
					<a href="#" class="links"><img src="icons/kit.png" class="small">Kits</a><br><br>
					<a href="#" class="links"><img src="icons/sett.png" class="small">Settings</a><br><br>
					<a href="#" class="links"><img src="icons/bye.png" class="small">Logout</a><br><br>
				</div>
			</div>
			<div id="mainboy">
				<div id="welcome">
					<div id="admin">
						<img src="images/me.jpg" style="width:32px;border-radius:100px;">&nbsp;&nbsp;&nbsp;
						<img src="icons/white.png" style="width:24px;margin-bottom:5px;">
					</div>	
					<br><br>
					<span class="himan">Welcome Admin</span>
				</div>
				<div id="bottom">
					<div id="adder">
						<button class="addme">
							<img src="icons/plus.png" style="width:12px;">
							<a href="{{ route('create.schedule') }}" style="text-decoration:none;color:#fff">ADD NEW</a>
						</button>
					</div>
					<div id="logs">
						<div id="left">
							<img src="icons/reload.png" class="small2">
							<span style="font-family:Century Gothic;font-size:18px;">Pending</span>
							<br><br>
							<div id="alltheinfo">
								<div id="smallCard">
									<img src="images/kasatlogo.jpg" class="logo">
									<span style="float:left;font-size:15px;font-weight:bold;">Kastamandap School</span>
									<span style="float:right;font-size:12px;font-style:italic;">December 3rd 2017</span><br><br>
									<div id="info">
										<span class="time">9:00-10:00</span>
											<span class="className">Class 6 B</span><br>
											<span class="subName">Introduction to DotA</span><br>
											<span class="subName" style="color:#8e44ad;">Animesh Pandey</span>
											<br><br>
											<span style="float:right;color:#2980b9;">Edit | View | Delete</span>
											<br>
									</div>
								</div>
								<br><br>
								<div id="smallCard">
									<img src="images/para.png" class="logo">
									<span style="float:left;font-size:15px;font-weight:bold;">Paragon International School</span>
									<span style="float:right;font-size:12px;font-style:italic;">December 3rd 2017</span><br><br>
									<div id="info">
										<span class="time">9:00-10:00</span>
											<span class="className">Class 6 A</span><br>
											<span class="subName">DotA: Advanced Mechanics</span><br>
											<span class="subName" style="color:#8e44ad;">William Rai</span>
											<br><br>
											<span style="float:right;color:#2980b9;">Edit | View | Delete</span>
											<br>
									</div>
								</div>
								<br><br>
								<div id="smallCard">
									<img src="images/rupy.png" class="logo">
									<span style="float:left;font-size:15px;font-weight:bold;">Rupy's International School</span>
									<span style="float:right;font-size:12px;font-style:italic;">December 3rd 2017</span><br><br>
									<div id="info">
										<span class="time">9:00-10:00</span>
											<span class="className">Class 6 C</span><br>
											<span class="subName">DotA: Supporting Your Team</span><br>
											<span class="subName" style="color:#8e44ad;">Prayush Bijuk</span>
											<br><br>
											<span style="float:right;color:#2980b9;">Edit | View | Delete</span>
											<br>
									</div>
								</div>
							</div>
						</div>
						<div id="right">
							<img src="icons/history.png" class="small2">
							<span style="font-family:Century Gothic;font-size:18px;">History</span>
							<br><br>
							<div id="alltheinfo">
								<div id="smallCard">
									<img src="images/kasatlogo.jpg" class="logo">
									<span style="float:left;font-size:15px;font-weight:bold;">Kastamandap School</span>
									<span style="float:right;font-size:12px;font-style:italic;">November 28th 2017</span><br><br>
									<div id="info">
										<span class="time">9:00-10:00</span>
											<span class="className">Class 8 B</span><br>
											<span class="subName">DotA: Offlaning Techniques</span><br>
											<span class="subName" style="color:#8e44ad;">William Rai</span>
											<br><br>
									</div>
								</div>
								<br><br>
								<div id="smallCard">
									<img src="images/rupy.png" class="logo">
									<span style="float:left;font-size:15px;font-weight:bold;">Rupy's International School</span>
									<span style="float:right;font-size:12px;font-style:italic;">November 28th 2017</span><br><br>
									<div id="info">
										<span class="time">9:00-10:00</span>
											<span class="className">Class 6 B</span><br>
											<span class="subName">DotA: How to Increase MMR</span><br>
											<span class="subName" style="color:#8e44ad;">Nischal Kharel</span>
											<br><br>
									</div>
								</div>
								<br><br>
								<div id="smallCard">
									<img src="images/rupy.png" class="logo">
									<span style="float:left;font-size:15px;font-weight:bold;">Rupy's International School</span>
									<span style="float:right;font-size:12px;font-style:italic;">November 26th 2017</span><br><br>
									<div id="info">
										<span class="time">9:00-10:00</span>
											<span class="className">Class 6 B</span><br>
											<span class="subName">DotA: How to be a NOOB</span><br>
											<span class="subName" style="color:#8e44ad;">Animesh Pandey</span>
											<br><br>
									</div>
								</div>
								<br><br>
								<div id="smallCard">
									<img src="images/para.png" class="logo">
									<span style="float:left;font-size:15px;font-weight:bold;">Paragon International School</span>
									<span style="float:right;font-size:12px;font-style:italic;">November 24th 2017</span><br><br>
									<div id="info">
										<span class="time">10:00-11:00</span>
											<span class="className">Class 6 B</span><br>
											<span class="subName">DotA: How to stop addiction</span><br>
											<span class="subName" style="color:#8e44ad;">Prayush Bijuk</span>
											<br><br>
									</div>
								</div>
								<br><br>
								<div id="smallCard">
									<img src="images/kasatlogo.jpg" class="logo">
									<span style="float:left;font-size:15px;font-weight:bold;">Kastamandap School</span>
									<span style="float:right;font-size:12px;font-style:italic;">November 23rd 2017</span><br><br>
									<div id="info">
										<span class="time">9:00-10:00</span>
											<span class="className">Class 6 B</span><br>
											<span class="subName">DotA:How to farm efficiently</span><br>
											<span class="subName" style="color:#8e44ad;">Aakash Raj Dahal</span>
											<br><br>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</body>


</html>