<div class="container">
	<div class="jumbotron">
		<div class="heading">
			<h2>Login</h2>
		</div>
		<br />
		<?php if(isset($error)): ?>
			<div class="alert alert-danger">
				<a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
				<?php echo "<p>".$error."</p>" ?>
			</div>
		<?php endif; ?>
		<form action='<?php echo URL::site('user/login') ?>' method='post'>
			<table class="table">
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" class="form-control" /></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" class="form-control" /></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<button type="submit" id="submit" class="btn btn-primary pull-right">Login</button>
						<a href="<?php echo URL::site('register') ?>" class="btn btn-default pull-right">Register</a>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>