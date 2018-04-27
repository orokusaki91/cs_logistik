@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.0/sweetalert2.min.css">
@stop

@section('content')
<div class="admin_panel_main">
    @include('partials.admin._sidebar')
    <div class="main">Willkommen zur Admin-Seite</div>
@stop

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.0/sweetalert2.all.min.js"></script>
	@if(Session::has('password_reseted'))
		<script>
			swal(
		    	'Fehler!',
		    	'{{ Session::get('password_reseted') }}',
		    	'success'
		    );
		</script>
	@endif
@stop