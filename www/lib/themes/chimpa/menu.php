<nav id="menu-principal">
	<ul class="nav nav-pills">
    <li><a href="<?php echo get("webURL"); ?>">Inicio</a></li>
		<?php if(SESSION("rol") == 0) { ?>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Lugar <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo get("webURL"); ?>/default/establecimiento/add">Agregar</a></li>
          <li><a href="<?php echo get("webURL"); ?>/default/establecimiento/listado/1">Editar</a></li>
          <li><a href="<?php echo get("webURL"); ?>/default/establecimiento/listado">Listado</a></li>
          </ul>
        </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuarios <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Agregar</a></li>
          <li><a href="#">Editar</a></li>
          <li><a href="#">Listado</a></li>
        </ul>
      </li>
    <?php } #if ?>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Artículos <b class="caret"></b></a>
        <ul class="dropdown-menu">
        <?php if(in_array(SESSION("rol"), array(0,4))) { ?><li><a href="<?php echo get("webURL"); ?>/default/articulo/add">Agregar</a></li><?php } #if ?>
        <?php if(in_array(SESSION("rol"), array(0,4))) { ?><li><a href="<?php echo get("webURL"); ?>/default/articulo/listado/0/12/1">Editar</a></li><?php } #if ?>
        <?php if(in_array(SESSION("rol"), array(0))) { ?><li><a href="#">Extracto</a></li><?php } #if ?>
        <?php if(in_array(SESSION("rol"), array(0,1,2,3,4))) { ?><li><a href="<?php echo get("webURL"); ?>/default/articulo/listado">Listado</a></li><?php } #if ?>
        <?php if(in_array(SESSION("rol"), array(0,1,2,3,4))) { ?><li><a href="#">Apartar</a></li><?php } #if ?>
      </ul>
    </li>
    <?php if(in_array(SESSION("rol"), array(0,4))) { ?>
  		<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Remisiones <b class="caret"></b></a>
        <ul class="dropdown-menu">
    			<li><a href="#">Compra</a></li>
    			<li><a href="#">Venta</a></li>
    			<li><a href="#">Rotación</a></li>
    			<li><a href="#">Entrega inmediata</a></li>
        </ul>
      </li>
    <?php } #if ?>
    <?php if(in_array(SESSION("rol"), array(0,1,2,4))) { ?><li><a href="#">Remisiones pendientes</a></li><?php } #if ?>
		<?php if(in_array(SESSION("rol"), array(0,1,2,4))) { ?><li><a href="<?php echo get("webURL"); ?>/default/articulo/carrito">Carrito</a></li><?php } #if ?>
		<li><a href="<?php echo get("webURL"); ?>/default/default/logout">Cerrar sesión <?php echo SESSION("user"); ?></a></li>
	</ul>
</nav>
