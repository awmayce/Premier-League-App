<div class='container'>
	<div class='jumbotron'>
		<h2>Premier League Teams</h2>
		<?php 
			echo "<table class='table table-stripped'>";

			echo "<tr>";
				echo "<th>" . "Team Name"      . "</th>";
				echo "<th>" . "Manager"        . "</th>";
				echo "<th>" . "Stadium"        . "</th>";
				echo "<th class='hidden-xs'>" . "Nickname"       . "</th>";
				echo "<th class='hidden-xs'>" . "Established in" . "</th>";
			echo "</tr>";

			foreach($team as $team)
			{
				echo "<tr>";
					echo "<td>" . HTML::anchor(URL::site('../team/no/'.$team->id), $team->name) . "</td>";
					echo "<td>" . $team->manager . "</td>";
					echo "<td>" . $team->stadium . "</td>";
					echo "<td class='hidden-xs'>" . $team->nickname . "</td>";
					echo "<td class='hidden-xs'>" . $team->established . "</td>";
				echo "</tr>";
			}

			echo "</table>";




		 ?>
	</div>
</div>