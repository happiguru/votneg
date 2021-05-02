@extends('layouts.app')
@section('content')
<section class="showcase">
	<div class="video-container">
		<video class="w-100" src="{{ asset('video/hd0087.mov') }}" autoplay muted loop></video>
	</div>
	<div class="content">
		<h1>Voice Of The New Generation</h1>
		<h3>Raising outstanding leaders in all fields of life</h3>
		<a href="#about" class="btn custom-btn btn-12"><span>Click!</span><span>Read More</span></a>
	</div> 
</section>

@stop