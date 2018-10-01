<div class="container" style="padding-top: 50px;">

	<div class="jumbotron ">
		<h1 class="display-4">Subscribe</h1>
		<p class="lead">Subscribers list</p>
		<hr class="my-4">

		<table class="table table-striped">
			<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Name</th>
				<th scope="col">E-mail</th>
				<th scope="col">Log Date</th>
			</tr>
			</thead>
			<tbody>
			<?foreach ($result as $val) :?>
			<tr>
				<th scope="row"><?=$val['id']?></th>
				<td><?=$val['name']?></td>
				<td><?=$val['email']?></td>
				<td><?=$val['log_date']?></td>
			</tr>
			<?endforeach;?>
			</tbody>
		</table>

	</div>
</div>




