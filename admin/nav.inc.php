<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">
              <span data-feather="home"></span>
              Panel de Informacion <span class="sr-only">(current)</span>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link active" href="post.php">
              <span data-feather="home"></span>
              Publicaciones <span class="sr-only">(current)</span>
            </a>
          </li>
		  
          <link rel="stylesheet" href="../animacion.css">
     
	 <?php
		 if(isset($_SESSION['author_role'])){
			 if($_SESSION['author_role']=="admin"){
				 ?>
				 <!--Only Admin-->
				 
				 <li class="nav-item">
				<a class="nav-link" href="category.php">
				<span data-feather="file"></span>
				Categorias
				</a>
				</li>
				 
				 <?php
			 }
		 }
		 
	 ?>
	 
	 <?php
		 if(isset($_SESSION['author_role'])){
			 if($_SESSION['author_role']=="admin"){
				 ?>
				 <!--Only Admin-->
		<li class="nav-item">
            <a class="nav-link active" href="page.php">
              <span data-feather="home"></span>
              Pestañas <span class="sr-only">(current)</span>
            </a>
          </li>
		   <?php
			 }
		 }
		 
	 ?>
		  
        <?php
		 if(isset($_SESSION['author_role'])){
			 if($_SESSION['author_role']=="admin"){
				 ?>
				 <!--Only Admin-->
		<li class="nav-item">
            <a class="nav-link active" href="setting.php">
              <span data-feather="home"></span>
              Configuracion <span class="sr-only">(current)</span>
            </a>
          </li>
		  <?php
			 }
		 }
		 
	 ?>
		  
        </ul>

        
      </div>
    </nav>