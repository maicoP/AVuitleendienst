@extends("global.base")

@section("page-title")
	Overzicht
@stop

@section("nav")
	@include("global.nav")
@stop

@section("content")
	<h2>Beheer</h2>
	<div>
		<a href="/beheer/materiaal">Beheer studenten</a>
		<a href="/beheer/gebruikers">Beheer materiaal</a>
	</div>
@stop