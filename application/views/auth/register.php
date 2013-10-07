<div class="container">
	<div class="jumbotron">
		<div class="heading">
			<h2>Register</h2>
		</div>
		<form action='register/add' method='post'>
			<table class="table">
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" class="form-control" /></td>
				</tr>
				<tr>
					<td>Email Address:</td>
					<td><input type="text" name="email" class="form-control" /></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" class="form-control" /></td>
				</tr>
				<tr>
					<td>Which team do you support?</td>
					<td>
						<select name="team_id" class="form-control">
							<option value="">None</option>
							<?php 
								foreach ($team as $team) {
									echo "<option value=" . $team->id . ">";
									echo $team->name;
									echo "</option>";
								}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><button type="submit" class="btn btn-primary pull-right">Register</button></td>
				</tr>
			</table>
		</form>
	</div>
</div>