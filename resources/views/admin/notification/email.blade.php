@extends('admin.layouts.notification.email')


@section('title')
	Class Notification
@endsection


@section('name')
	{{ $data->teacher }}
@endsection


@section('date')
	{{ $date->toFormattedDateString() }}
@endsection


@section('school')
	{{ $data->school }}
@endsection


@section('location')
	Need to add one later.
@endsection


@section('time')
	{{ $data->startTime }} - {{ $data->endTime }}
@endsection


@section('class')
	{{ $data->class }}
@endsection


@section('content')
	{{ $data->content }}
@endsection