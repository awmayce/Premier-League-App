<div class="container">
	<div class="jumbotron">
		<div class="row">
			<div class="col-md-4">
				<ul class="nav nav-pills nav-stacked">
					<li><?php echo HTML::anchor('user/update', 'Edit Profile'); ?></li>
					<li class="disabled"><?php echo 'Change Password'; ?></li>
				</ul>
			</div>
			<div class="col-md-8">		
				<h2>Edit Account</h2>
				<?php
					if(isset($error))
					{
						echo "<div class='alert alert-danger'>";
						echo "<a class='close' data-dismiss='alert' href='#' aria-hidden='true'>x</a>";
						echo $error;
						echo "</div>";
					}
				?>
				<form action='' method='post'>
					<table class="table">
						<tr>
							<td>Current Password:</td>
							<td><input type="password" name="password" class="form-control" /></td>
						</tr>
						<tr>
							<td>New Password:</td>
							<td><input type="password" name="n_password" class="form-control" /></td>
						</tr>
						<tr>
							<td>Confirm Password:</td>
							<td><input type="password" name="c_password" class="form-control" /></td>
						</tr>
						<tr>
							<td></td>
							<td><button type="submit" class="btn btn-primary pull-right">Change Password</button></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</div>