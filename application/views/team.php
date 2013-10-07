<div class="container">
	<div class="jumbotron">
		<img class='team-badge' src="<?php echo URL::base("http")."media/images/teams/".$team->source.".png"; ?>" />
		<div class='team-information'>
			Team name: <?php echo $team->name ?><br />
			Team manager: <?php echo $team->manager ?><br />
			Team stadium: <?php echo $team->stadium ?><br />
			Team nickname: <?php echo $team->nickname ?><br />
			Established: <?php echo $team->established ?>
		</div>
	</div>
</div>