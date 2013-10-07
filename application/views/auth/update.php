<div class="container">
	<div class="jumbotron">
		<div class="row">
			<div class="col-md-4">
				<ul class="nav nav-pills nav-stacked">
					<li class="disabled"><?php echo 'Edit Profile'; ?></li>
					<li><?php echo HTML::anchor('user/changepassword', 'Change Password'); ?></li>
				</ul>
			</div>
			<div class="col-md-8">		
				<h2>Edit Account</h2>
				<form action='' method='post'>
					<table class="table">
						<tr>
							<td>Username:</td>
							<td><input type="text" name="username" class="form-control" disabled value="<?php echo Auth::instance()->get_user()->username ?>" /></td>
						</tr>
						<tr>
							<td>Email Address:</td>
							<td><input type="text" name="email" class="form-control" value="<?php echo Auth::instance()->get_user()->email ?>" /></td>
						</tr>
						<tr>
							<td>Which team do you support?</td>
							<td>
								<select name="team" class="form-control">
									<?php if(isset($team_id))
									{
										echo "<option value=''>".ORM::factory('team', $team_id)->name."</option>";
									}
										echo "<option value=''>None</option>";
									
									?>
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
	</div>
</div>