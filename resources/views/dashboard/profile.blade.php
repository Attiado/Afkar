<!DOCTYPE html>
<html lang="en">
<head>
<title>Profile </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
.modal {
  visibility: hidden;
  opacity: 0;
  position: absolute;
  top: 0; right: 0;
  bottom: 0; left: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(77, 77, 77, .7);
  transition: all .4s;
}
.modal:target {
  visibility: visible;
  opacity: 1;
}
a {
  text-decoration: none;
  padding: 15px;
  width: 100%;
  background-color: white;
  border-radius: 5px;
  text-transform: uppercase;
  color: black;
}

.modal_content {
  border-radius: 4px;
  position: relative;
  
  width: 500px;
  height:500px;
  background: white;
  padding: 1.5em 2em;
}

.modal_close {
  position: relative;
  padding-right:7px;
  padding-left:7px;
  bottom:20px;
  left:20rem;
  color: #fff;
  background-color:grey;
  text-decoration: none;
}
#sidebar-wrapper {
	background:#ccc;
	height:100vh;
margin-left:40rem;
}
ul #panels {
	list-style-type: none;
  
	margin: 0;
	padding: 0;
	margin-left:300px;
	background:red;
}
#sidebar-wrapper .sidebar-nav {
	position: absolute;
	top: 0;
 
	width: 60rem;
	font-size: 14px;
	margin: 0;
	padding: 0;
	list-style: none;
}
#sidebar-wrapper .sidebar-nav li {
	text-indent: 0;
  
	line-height: 45px;
}


#sidebar-wrapper .sidebar-nav li a.active {
	background-color:#85ce36;
  
	color:#fff;
}
#sidebar-wrapper .sidebar-nav li a:focus, #sidebar-wrapper .sidebar-nav li a:hover {
	background-color:#2d363f;
  
}

</style>

</head>
<body id="sidebar-wrapper">

<div class="sidebar-wrapper" class="modal">
  <div class="modal_content">
  <ul id="sidemenu" class="sidebar-nav">
      <li> <a href="#" class="active"> <span class="sidebar-icon"><i class="fa fa-dashboard"></i></span> <span class="sidebar-title">Dashboard</span> </a> </li>
      <li> <a class="accordion-toggle collapsed toggle-switch toggle-icon" data-toggle="collapse" href="#submenu-2"> <span class="sidebar-icon"><i class="fa fa-users"></i></span> <span class="sidebar-title">Gestion des Utilisateurs</span> <i class="fa icon-toggle fa-angle-right" aria-hidden="true"></i> </a>
        <ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
          <li><a href="{{ route('users.index') }}" class="abc"><i class="fa fa-caret-right"></i>Users</a></li>
          <li><a data-toggle="collapse" href="{{ route('posts.index') }}" class="abc"><i class="fa fa-caret-right"></i>Roles</a></li>
          <li><a data-toggle="collapse" href="#tab3" class="abc"><i class="fa fa-caret-right"></i>Rédacteurs</a></li>

        </ul>
      </li>
      <li> <a class="accordion-toggle collapsed toggle-switch toggle-icon" data-toggle="collapse" href="#submenu-3"> <span class="sidebar-icon"><i class="fa fa-newspaper-o"></i></span> <span class="sidebar-title">Gestion</span> <i class="fa icon-toggle fa-angle-right" aria-hidden="true"></i> </a>
        <ul id="submenu-3" class="panel-collapse collapse panel-switch" role="menu">
          <li><a href="{{ route('posts.index') }}"><i class="fa fa-caret-right"></i>Gestion des articles</a></li>
          <li><a href="{{ route('categories.index') }}"><i class="fa fa-caret-right"></i>Gestion des catégories</a></li>
                  </ul>
      </li>
     
      <li> <a class="accordion-toggle collapsed toggle-switch toggle-icon" data-toggle="collapse" href="#submenu-5"> <span class="sidebar-icon"><i class="fa fa-newspaper-o"></i></span> <span class="sidebar-title">Paramètres du compte</span> <i class="fa icon-toggle fa-angle-right" aria-hidden="true"></i> </a>
        <ul id="submenu-5" class="panel-collapse collapse panel-switch" role="menu">
          <li><a href="#"><i class="fa fa-caret-right"></i>Modifier le profil</a></li>
          <li><a href="#"><i class="fa fa-caret-right"></i>modifier le mot de passe</a></li>
        </ul>
      </li>
      <li> <a href="#" class="abc"> <span class="sidebar-icon"><i class="fa fa-database"></i></span> <span class="sidebar-title">Other Tabs</span> </a> </li>
    </ul>
  </aside>
  <ul id="panels">
    <li id="tab1" class="collapse"> <?php @include('layouts.header'); ?> </li>
    <li id="tab2" class="collapse"> <?php   @include('posts.index'); ?> </li>
  </ul>

    <a href="#" class="modal_close">&times;</a>
  </div>
</div>

</body>

</html>
