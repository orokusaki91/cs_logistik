<nav>  
   <div class="admin_panel_head">
      <h1>CS Logistik dashboard</h1>
      <form action="{{ url('admin/logout') }}" method="post">
      	{{ csrf_field() }}
      	<button type="submit">Log out</button>
      </form>
   </div>
</nav>