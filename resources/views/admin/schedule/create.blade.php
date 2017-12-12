@extends('admin.layouts.app')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/002.css') }}">
@endsection

@section('content')
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
@endsection