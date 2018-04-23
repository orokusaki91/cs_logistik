@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
	
 <head>  
     <div class="admin_panel_head"><!-- admin_panel_head -->
        <h1>Administrator</h1>
        <a href="#">Log out</a>
     </div><!-- kraj admin_panel_head -->
 </head>
    
  <nav>

</head>
<body> 

<div class="admin_panel_main"> <!-- admin_panel_main -->

    <div class="sidenav">
      <a href="#">Lorem ipsum</a>
      <a href="#">Lorem ipsum</a>
      <a href="#">Lorem ipsum</a>
      <a href="#">Lorem ipsum</a>
          <button class="dropdown-btn">Lorem ipsum 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
          </div>
          
      <a href="#contact">Lorem ipsum </a>
    </div>

    <div class="main">
      
      
      
    </div>
</div> <!-- kraj admin_panel_main -->

  </nav>










    <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
    
    
    
    
    
    
    
@stop