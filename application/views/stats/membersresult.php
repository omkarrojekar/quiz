<div class="table-responsive">
            <table class="table table-bordered table-lg table-v2 table-striped">
            <thead>
            <tr>
            <th class="text-center">Sr No</th>      
            <th class="text-center">Name</th>
            <th class="text-center">Marks</th>
            <th class="text-center">Time Taken</th>
            </tr>
            </thead>

		<?php
                  $counter = 1;
			foreach ($members as $row) {
		?>
		<tbody>
            <tr>
            <td class="text-center"><?php echo $counter; $counter = $counter+1; ?></td>
            <td class="text-center"><?php echo $row['firstName']." ".$row['lastName']; ?></td>
            <td class="text-center"><?php echo $row['marks']; ?></td>
            <td class="text-center"><?php echo (int) ($row['timetaken']/60). " Mins ".($row['timetaken']%60)." Secs "; ?></td>
            </tr>

		<?php } ?>
		</tbody></table></div>
