<nav>  
   <div class="admin_panel_head">
    	<h1><a href="{{ url('admin') }}" style="text-decoration: none; color: #fff">CS Logistik Admin</a></h1>
     	@if(Auth::check())
			<form action="{{ url('admin/logout') }}" method="post">
	      		{{ csrf_field() }}
	      		<button type="submit">Log out</button>
                <button type="submit" class="fa-power-off2"><i class="fa fa-power-off" aria-hidden="true"></i></button>
	      	</form>
     	@endif
   </div>
</nav>