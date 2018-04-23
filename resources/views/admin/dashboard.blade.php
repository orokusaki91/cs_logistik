@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.0/sweetalert2.min.css">
@stop

@section('content')
	Admin Dashboard
@stop

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.0/sweetalert2.all.min.js"></script>
	@if(Session::has('password_reseted'))
		<script>
			swal(
		    	'Erledigt!',
		    	'{{ Session::get('password_reseted') }}',
		    	'success'
		    );
		</script>
	@endif
@stop