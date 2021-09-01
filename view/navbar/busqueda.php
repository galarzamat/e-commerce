<form class="form-inline my-2 my-lg-0" method="POST">
      <input class="form-control mr-sm-2" 
             type="search" 
             placeholder="Busqueda"
             aria-label="Search"
             name="s"
             onKeyUp="buscar();"
             id="s"
             value="<?=(isset($_POST['s'])?$_POST['s']:""); ?>"
      >
      <button class="btn btn-outline-success my-2 my-sm-0" type="Buscar">Search</button>
</form>