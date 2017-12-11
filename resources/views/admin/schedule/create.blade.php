<!doctype html>
	<head>
		<link rel="stylesheet" href="{{ asset('css/002.css') }}" type="text/css">
		<title>Add New | Admin Panel</title>
	</head>

	<body>

		<div id="bigboi">
			<div id="sidebar">
				<div id="title">
					<img src="{{ asset('icons/engineer.png') }}" style="width:24px;float:left;">
					<span style="font-size:18px;color:#b5b5b5;float:left;margin-left:5px;margin-top:3px;">Admin Panel</span><br><br>
					<span style="float:right;font-size:12px;">v.1.0.0
				</div>
				<div id="linkz">
					<a href="#" class="activelinks"><img src="{{ asset('icons/home.png') }}" class="small">Home</a><br><br>
					<a href="#" class="links"><img src="{{ asset('icons/school.png') }}" class="small">Schools</a><br><br>
					<a href="#" class="links"><img src="{{ asset('icons/teacher.png') }}" class="small">Teachers</a><br><br>
					<a href="#" class="links"><img src="{{ asset('icons/tick.png') }}" class="small">ToDos</a><br><br>
					<a href="#" class="links"><img src="{{ asset('icons/sent.png') }}" class="small">Sent</a><br><br>
					<a href="#" class="links"><img src="{{ asset('icons/kit.png') }}" class="small">Kits</a><br><br>
					<a href="#" class="links"><img src="{{ asset('icons/sett.png') }}" class="small">Settings</a><br><br>
					<a href="#" class="links"><img src="{{ asset('icons/bye.png') }}" class="small">Logout</a><br><br>
				</div>
			</div>
			<div id="mainboy">
				<div id="welcome">
					<div id="admin">
						<img src="{{ asset('images/me.jpg') }}" style="width:32px;border-radius:100px;">&nbsp;&nbsp;&nbsp;
						<img src="{{ asset('icons/white.png') }}" style="width:24px;margin-bottom:5px;">
					</div>	
					<br><br>
					<span class="himan">Welcome Admin</span>
				</div>
				<div id="bottom">
					<center>
					<div id="form">
						<div id="red">
							<span style="font-size:20px;font-weight:bold;">+</span> 
								<span style="font-weight:bold;font-size:20px;">ADD NEW SCHEDULE</span> 
						</div>
						<br><br>
						<div id="mainForm">
							<form method="POST" action="{{ route('send.manual.notification') }}">
								{{ csrf_field() }}
								<label>School: </label><br>
								<input type="text" placeholder="Enter School's Name" class="boxee" name="school" required/><br><br>
								<label>Teacher: </label><br>
								<input type="text" placeholder="Enter Teacher's Name" class="boxee" name="teacher" required/><br><br>
								<label>Class</label><br>
								<input type="text" placeholder="Enter Class" class="boxee" name="class" required/><br><br>
								<label>Content</label><br>
								<input type="text" placeholder="Enter Content" class="boxee" name="content" required/><br><br>
								<label>Start Date: </label><br>
								<input type="date" class="boxee" name="startdate" required/><br><br>
								<label>End Date: </label><br>
								<input type="date" class="boxee" name="enddate" required/><br><br>
								<label>Day</label><br>
								<select name="day" class="boxee">
									<option value="">Select Day</option>
									@foreach( $days as $day )
										<option value="{{ $day }}">{{ $day }}</option>
									@endforeach
								</select><br><br>
								<label>Start Time</label><br>
								<input type="time" placeholder="00:00" class="boxee" style="width:118px;" name="starttime" required/><br>
								<label>End Time</label><br>
								<input type="time" placeholder="00:00" class="boxee" style="width:118px;" name="endtime" required/><br><br>
								<label>Email:</label><br>
								<input type="email" placeholder="Enter Email" class="boxee" name="email" required/><br><br>
								<label class="container">Kit Ready
	  								<input type="checkbox" checked="checked" name="kit">
	  								<span class="checkmark"></span>
								</label><br><br>
								<label class="container">Materials Ready
	 								 <input type="checkbox" checked="checked" name="material">
	 								 <span class="checkmark"></span>
								</label>
								<br><br>
								<button class="addme" type="submit">
									<img src="{{ asset('icons/pyaa.png') }}" style="width:12px;">
									SEND NOTIFICATION
								</button>
								<br><br><br>
							</form>
						</div>
					</div>
				</center>
				</div>
			</div>
		</div>

	</body>


</html>