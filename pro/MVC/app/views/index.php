<h2>users</h2>

<table class="table table-bordered table-hover">

	<thead>
	  <tr>
	    <th>Nome</th>
	    <th>Email</th>
	  </tr>
	</thead>
	<tbody>
	  <?php foreach($users as $user): ?>
	    <tr>
	      <td><?=$user->name; ?></td>
	      <td><?=$user->email; ?></td>
				<td style="vertical-align:middle; text-align:center;"><a href="/user_edit?id=<?=$user->id;?>" class="btn btn-info"> edit </a></td>
				<td style="vertical-align:middle; text-align:center;"><a href="/user_destroy?id=<?=$user->id;?>" class="btn btn-danger"> delete</a></td>
	    </tr>
	  <?php endforeach; ?>
	</tbody>
	
</table>