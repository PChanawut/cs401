<?php
	session_start();
	if(empty($_SESSION["u_id"])){  
		Header("Location: ./");
	}
?>
<!-- style="background-color: #307BC0;" bg-light-->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color : #2D70B8;">
	  <!-- <a class="navbar-brand" href="#">OAP</a> -->
	  <nav class="navbar navbar-expand-sm">
		<a class="navbar-brand text-light" href="index.php">
			<img src="asset/config/logo.png" alt="logo" width="35" height="35" class="d-inline-block align-top">
			OAP
	   </a>
	 </nav>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
	      	<li class="nav-item active">
	        	<a class="nav-link text-light" href="./">หน้าแรก <span class="sr-only">(current)</span></a>
			</li>
			  
		</ul>
	    <!-- <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form> -->
	</div>

</nav>
