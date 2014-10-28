@extends('_master')


@section('title')
	Persona Generator
@stop

@section('content')
	<div class="jumbotron">
		<img src=' {{ URL::asset('images/person.jpg') }} ' alt='Person' class="img-circle" id="jumbotronlogo">
        <h1>Persona Generator</h1>
        <p class="clearfix">According to Usability.gov, a persona "is used to create reliable and realistic representations of your key audience segments for reference". With personas in mind, designers can "focus decisions surrounding site components by adding a layer of real-world consideration to the conversation." </p>
        <p>Click here to <a class="btn btn-md btn-default" href="#button" role="button">Sign in!</a> and begin making your own personas.</p>
        <p id="newaccount">Don't have an account? Click here to make one.</p>
    </div>
@stop