<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:#<?php echo $team->main_colour ?>;">
	<div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand" href="#">Premier League App</a>
	</div>
	<div class="collapse navbar-collapse navbar-ex1-collapse">
  		<ul class="nav navbar-nav">
  			<li class=<?php echo @$active_home; ?>  /><?php echo HTML::anchor('welcome', 'Home'); ?></li>
  			<li class=<?php echo @$active_app; ?>   /><?php echo HTML::anchor('app', 'App'); ?></li>
  			<li class=<?php echo @$active_table; ?> /><?php echo HTML::anchor('table', 'Table'); ?></li>
  		</ul>
  		<ul class="nav navbar-nav navbar-right">

  				

  			<?php if($logged_in) : ?><!-- if logged in -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background-color:#<?php echo $team->dropdown_colour ?>;"><?php echo $user ?> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<?php if($role == 'admin'): ?>
							<li class="dropdown-header">Admin</li>
						  	<li><?php echo HTML::anchor('admin', 'Admin area') ?></li>
						  	<li class="divider"></li>
						<?php endif; ?>
					  	<li><?php echo HTML::anchor('user/update', 'Edit Account'); ?></li>
					  	<li class="divider"></li>
					  	<li><?php echo HTML::anchor('user/logout', 'Logout'); ?></li>
					</ul>
				</li>

  			<?php else : ?><!-- Not logged in -->

				<li><?php echo HTML::anchor('user/login', 'Login'); ?></li>

  			<?php endif ?>

  		</ul>
  	</div>
</nav>