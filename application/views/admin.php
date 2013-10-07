<div class='container'>
	<div class='jumbotron'>
		<div class="container">
			<h2 class="pull-left">Admin Page</h2>
			<a href="#add" class="btn btn-default pull-right" data-toggle="modal">Add Team</a>
		</div>

		<?php foreach($team as $team): ?>
			<?php $id = $team->id; ?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<?php echo $team->name ?>
					<span class="glyphicon glyphicon-remove pull-right" data-toggle="modal" href="#delete<?php echo $team->id;?>"></span>
				</div>
				<form action='<?php echo "admin/update/" . $team->id; ?>' method="post">
					<div class="table">
						<table class="table">
							<tr>
								<td>Manager: </td>
								<td><input type="text" class="form-control" name="manager" value="<?php echo $team->manager; ?>"></td>
							</tr>
							<tr>
								<td>Stadium: </td>
								<td><input type="text" class="form-control" name="stadium" value="<?php echo $team->stadium; ?>"></td>
							</tr>
							<tr>
								<td>Nickname: </td>
								<td><input type="text" class="form-control" name="nickname" value="<?php echo $team->nickname; ?>"></td>
							</tr>
							<tr>
								<td>Established: </td>
								<td><input type="text" class="form-control" name="established" value="<?php echo $team->established; ?>"></td>
							</tr>
							<tr>
								<td></td>
								<td><button type="submit" class="btn btn-success pull-right">Save</button></td>
							</tr>
						</table>
					</div>
				</form>
			</div><!-- End Main -->


			<!-- Delete Team -->
			<div class="modal fade" id="delete<?php echo $team->id;?>">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title">Delete Team</h4>
			      </div>
			      <div class="modal-body">
			      	<p>Are you sure you want to delete <?php echo $team->name; ?></p>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <a href="<?php echo URL::site('admin/delete/' . $id) ?>" class="btn btn-primary">Delete</a>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		<?php endforeach ?>

		<!-- Add team -->
		<div class="modal fade" id="add">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
						<h4 class="modal-title">Add Team</h4>
					</div>
					<form action="admin/add" method="post">
					<div class="modal-body">
						<table class="table table-striped">
							<tr>
								<td>Team Name:</td>
								<td><input type='text' name='name' class='form-control' /></td>
							</tr>
							<tr>
								<td>Manager:</td>
								<td><input type='text' name='manager' class='form-control' /></td>
							</tr>
							<tr>
								<td>Stadium:</td>
								<td><input type='text' name='stadium' class='form-control' /></td>
							</tr>
							<tr>
								<td>Nickname:</td>
								<td><input type='text' name='nickname' class='form-control' /></td>
							</tr>
								<td>Establshed:</td>
								<td><input type='text' name='established' class='form-control' /></td>
							</tr>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Add</button>
					</div>
					</form>
				</div>
			</div>
		</div>


	</div>
</div>