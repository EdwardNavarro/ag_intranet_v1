<!doctype html>
<!--[if lt IE 7 ]>	<html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>		<html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>		<html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>		<html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<title><?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 */
			global $page, $paged;

			wp_title( '|', true, 'right' );

			// Add the blog name.
			bloginfo( 'name' );

			// Add the blog description for the home/front page.
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";

			// Add a page number if necessary:
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( __( 'Page %s', TEMPLATE_DOMAIN ), max( $paged, $page ) );

		?></title>

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

		<!-- Temporal Files -->
		<link rel='stylesheet' type='text/css' href='<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css'/>
		<link rel='stylesheet' type='text/css' href='<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome.min.css'/>
		<link rel='stylesheet' type='text/css' href='<?php bloginfo('stylesheet_directory'); ?>/css/style.css'/>
		<link rel='stylesheet' type='text/css' href='<?php bloginfo('stylesheet_directory'); ?>/css/style-landing.css'/>
		<script type='text/javascript' src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.7.2.min.js"></script>
		<script type='text/javascript' src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
		<script type='text/javascript' src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>

		<?php wp_head(); ?> 

		<!-- automatic-feed-links in functions.php -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	</head>
	<body>
		<!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

		<!-- <div id="page_wrap">

			<div id="wrapper">

				<div id="top_nav_wrap">
					<div id="top_nav_group">
						<div id="top_nav_left">
							<?php wp_nav_menu( array( 
							'theme_location'  => 'top-nav', 
							'container_id'    => 'menu_container', 
							'container_class' => 'menu_container', 
							'menu_id'         => 'top_nav_menu', 
							'menu_class'      => 'top_nav_menu', 
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
							) ); ?>
						</div>
						<div id="top_nav_right">
							<ul id="top_nav_tools" class="top_nav_tools">
								<li><select name="obj_type" class="select_search" id="obj_type">
									<option value="/" rel="q" data-target="">Intranet</option>
									<option value="/" rel="keywords" data-target="">Personas</option>
									<option value="/" rel="q" data-target="">Noticias</option>
									<option value="http://www.google.com.co/search?" rel="q" data-target="_blank">Google</option>
								</select></li>
								<li><input id="searchfield" name="q" type="text" size="15" placeholder="Buscar"></li>
								<li><input id="send" name="send" type="submit" value="Buscar"></li>
								<li><span class="hourinfo">06:15 PM</span><span class="dateinfo">Febrero 15, 2013</span></li>
								<li><span class="notifications">10</span></li>
								<li><span>Perfil</span></li>
								<li><span>Opciones</span></li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>

		</div> -->


		<!-- START ADMIN THEME -->
		<header class='navbar blue blue2 navbar-fixed-top'>
			<div class='navbar-inner'>
				<div class='container-fluid'>
					<a class="brand pull-left" href="/"><i class='icon-white icon-leaf'></i> AGnet</a>
					<ul class='nav pull-left'>
						<li class='active'><a href="/"><i class='icon-white icon-home'></i> Inicio</a></li>
						<!-- <li><a href="#"><i class='icon-white icon-user'></i> Account</a></li> -->
						<li><a href="/tareas"><i class='icon-white icon-tasks'></i> Tareas</a></li>
						<!-- <li class="dropdown">
		    				<a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
		    					<i class='icon-white icon-star'></i> Features <b class="caret"></b>
		    				</a>
					    <ul class="dropdown-menu">
					    	<li><a href="#">Navbar Colours</a></li>
					    	<li><a href="#">Smooth Animations</a></li>
					    	<li><a href="#">.sharp Class</a></li>
					    	<li><a href="#">Canvas Charts</a></li>
					    	<li><a href="#">Tasks Mini Module</a></li>
					    	<li><a href="#">Messages</a></li>
					    	<li><a href="#">Precoded Functions</a></li>

					    </ul>
		  				</li> -->
					</ul>
					<form class="navbar-search pull-left">
		                <input type="text" class="search-query span3" placeholder="Buscar">
		                <div class="icon-search"></div>
		            </form>
					<ul class='nav pull-right'>
						<li><a href="#" rel='tooltip' title='8 Proyectos Restantes'><span class="badge badge-nav">8</span></a></li>
						<li><a href="#" rel='tooltip' title='2 Tareas Urgentes'><span class="badge badge-nav">2 Urgente</span></a></li>
						<li><a href="#" rel='tooltip' title='Mi Perfil'><i class='icon-white icon-user'></i> <?php global $user_info; echo $user_info-> user_firstname .  " " . apellido1letra($user_info-> user_lastname) . "."; ?></a></li>
						<li><a href="#" rel='tooltip' title='Ayuda'><i class='icon-white icon-question-sign'></i></a></li>
						<li><a href="#" rel='tooltip' title='Configuración' ><i class='icon-white icon-wrench'></i></a></li>
						<li><a href="<?php echo wp_logout_url( home_url() ); ?>" rel='tooltip' title='Salir'><i class='icon-white icon-off'></i></a></li>
					</ul>
				</div>
			</div>
		</header>
		<section class='container-fluid pad40'>
			
			<section class='row-fluid'>
				<div class="span2 sideBar">
					
					<br/>
					<ul>
						<li class="active"><a href="/"><figure><i class='icon-home'></i> Inicio <!-- &nbsp;&nbsp;<span class='badge badge-warning'>2</span> --></figure></a></li>
						<hr/>
						<li class='dropper'>
							<figure><i class='icon-circle-arrow-down'></i> Organización AG &nbsp;›</figure>
							<ul class='subSide'>
								<li><a href="/corporativo">Acerca de Nosotros</a></li>
								<li><a href="/corporativo">Dr. Alan González</a></li>
								<li><a href="/corporativo">Comrpomiso Social</a></li>
							</ul>
						</li>
						<li class='dropper'>
							<figure><i class='icon-circle-arrow-down'></i> Departamentos &nbsp;›</figure>
							<ul class='subSide'>
								<li><a href="/departamentos">Grupo Médico</a></li>
								<li><a href="/departamentos">Estética</a></li>
								<li><a href="/departamentos">Atención al Paciente</a></li>
								<li><a href="/departamentos">Administrativo</a></li>
								<li><a href="/departamentos">Comercial</a></li>
								<li><a href="/departamentos">Financiero</a></li>
								<li><a href="/departamentos">Servicios Generales</a></li>
							</ul>
						</li>
						<hr/>
						<li class='dropper'>
							<figure><i class='icon-circle-arrow-down'></i> Social &nbsp;›</figure>
							<ul class='subSide'>
								<li><a href="/actividad"><i class="icon-th-list"></i> Actividad</a></li>
								<li><a href="/grupos"><i class="icon-group"></i> Grupos</a></li>
								<li><a href="/miembros"><i class="icon-plus-sign-alt"></i> Miembros</a></li>
								<li><a href="<?php echo bp_loggedin_user_domain() ?>"><i class='icon-user'></i> Mi Perfil</a></li>
								<li><a href="<?php echo bp_loggedin_user_domain().'settings/'; ?>"><i class='icon-wrench'></i> Configuración</a></li>
								<li><a href="<?php echo bp_loggedin_user_domain().'messages/'; ?>"><i class="icon-envelope-alt"></i> Mensajes &nbsp;&nbsp;<span class="badge badge-info"><!-- 10 --><?php bp_total_unread_messages_count() ?></span></a></li>
							</ul>
						</li>
						<hr/>
						<li><a href="/novedades"><figure><i class="icon-bullhorn"></i> Novedades</figure></a></li>
						<li><a href="/galerias"><figure><i class="icon-picture"></i> Galerías</figure></a></li>
						<hr/>
						<li data-target='messages'><figure><i class="icon-cloud"></i> Aplicaciones</figure></li>
						<hr/>
						
						<!-- <li class='dropper'>
							<figure><i class='icon-circle-arrow-down'></i> Tareas &nbsp;›</figure>
							<ul class='subSide'>
								<li><i class='icon-plus'></i> List Item 1</li>
								<li><i class='icon-plus'></i> List Item 2</li>
								<li><i class='icon-plus'></i> List Item 3</li>
							</ul>
						</li> -->
						<!-- <li data-target='charts'><figure><i class='icon-signal'></i> Charts</figure></li>
						<hr/> -->
						
						<hr/>
						<li data-target='help'><figure><i class='icon-question-sign'></i> Ayuda</figure></li>
					</ul>
					<div class='sideBottom'>
						<button class='btn btn-primary headblue' data-toggle="collapse" data-target="#tasksSideList">Lista de Tareas <i class='icon-white icon-circle-arrow-down'></i></button>
						<ul id='tasksSideList' class='collapse out'>
							<li data-taskId='3' data-taskState='1'><a href="#">Ver Tareas</a></li>
							<li data-taskId='2' data-taskState='0'><a href="#">Crear Nueva Tarea</a></li>
							<li data-taskId='1' data-taskState='0'><a href="#">Crear Nuevo Proyecto</a></li>
						</ul>
					</div>
				</div>
				