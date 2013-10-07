<?php //echo HTML::style('../../media/js/app.js');  ?>
<div class='container'>
	<div class='jumbotron'>
		<div class="page header">
			<h2>App</h2>
		</div>
		<div class="app" id="app">
			<div class="team-badge-wrap">
			<?php foreach($team as $team): ?>
				<form action='http://premier.co.uk/index.php/app/team/<?php echo $team->id ?>' method='post'>
					<!-- <img type='submit' class="team-badge" src="<?php //echo URL::base('http')?>media/images/teams/<?php //echo $team->source ?>.png" title="<?php //echo $team->id; ?>" onclick="loadTeam()" /> -->
					<input type="submit" style="background-image:url('<?php echo URL::base('http')?>media/images/teams/<?php echo $team->source ?>.png');" />
				</form>
			<?php endforeach; ?>
			</div>
			<div class="main-app-area">
				<?php 
					if(isset($app_area)) {
						echo $app_area;
					}
					elseif(isset($team_info))
					{
						echo "<br />Team name: ".$team_info->name;
						echo "<br />Team nickname: ".$team_info->nickname;
						echo "<br />Team stadium: ".$team_info->stadium;
						echo "<br />Team manger: ".$team_info->manager;
						echo "<br />Established in: ".$team_info->established;
					}

				?>
			</div>
		</div>
	</div>
</div>