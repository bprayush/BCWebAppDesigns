<html>
	<head>
		<title>Bootstrap Test</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body style="background-color:#f5f5f5;font-family:Century Gothic;">

		<div class="container">
			<div class="">
			<h3>Hello Animesh,</h3> 
			<h6>Your schedule for <kbd>December 3rd, Monday</kbd> is ready !</h6>
			<div class="row">
				<div class="col-md-8 col-lg-8 col-sm-10 col-xs-10" style="background-color:#fff;box-shadow:0px 0px 5px #b5b5b5; border-radius:1px; margin-top:10px;padding:30px;">
				<img src="{{ asset('images/kasatlogo.jpg') }}" style="float:left;width:32px;border-radius:50px;height:32px;">
				<span style="font-weight:bold;float:left;margin-left:8px;margin-top:3px;">Kastamandap School</span><br><br>
				<span style="float:left;margin-left:40px;"><img src="{{ asset('icons/placeholder.png') }}" style="width:20px;">
					<span style="margin-left:5px;font-size:14px;font-style:italic;">
						New Road, Kathmandu
					</span>
				</span>
				<span style="float:right;"><img src="{{ asset('icons/calendar.png') }}" style="width:20px;">
					<span style="margin-left:5px;float:right;font-size:14px;font-weight:bold;">
						December 3rd 2017
					</span>
				</span><br>
				<div style="margin-top:50px;float:left;">
					<div class="btn btn-success">9:00 - 10:00</div>
				</div>
				<div style="float:left; margin-top:60px;margin-left:20px;">
					<h5> <b>Class 6 B</b></h5>
					<h6><i> Introduction to DotA</i></h6>
				</div>
				<br><br><br><br><br><hr>
				<div style="margin-left:130px;">
					<img src="{{ asset('icons/tick.png') }}" style="width:16px;float:left;"> 
					<span style="margin-left:3px;font-size:13px;">Kit Ready</span><br>
					<img src="{{ asset('icons/tick.png') }}" style="width:16px;float:left;"> 
					<span style="margin-left:3px;font-size:13px;">Materials Ready</span>
				</div>
				</div>
			</div>
	</div>

	</body>
</html>