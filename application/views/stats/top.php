
   <div class="table-responsive">
            <table class="table table-lightborder">
            <thead>
            <tr>
            <th>Users</th>
            <th class="text-right">Attempting Answers</th>
            </tr>
            </thead>

		<?php
			foreach ($members as $row) {
		?>
		<tbody>
            <tr>
            <td class="nowrap"><?php echo $row['firstName']." ".$row['lastName']; ?></td>
            <td class="text-center"><?php echo $row['counter']; ?></td>
            </tr>

		<?php } ?>
		</tbody></table></div>


	                
	                