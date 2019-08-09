 <?php 
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error)
{
    die("error:".$conn->connect_error);
}
$result = $conn->query("SELECT  marks, firstName,lastName, timetaken from user_answers2 WHERE marks = (SELECT MAX(marks) from user_answers2) ORDER BY timetaken ASC LIMIT 3;");
if($result->num_rows >0)
{
    ?>
       <table class="table table-bordered table-lg table-v2 table-striped">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Name</th>
                            <th>Marks</th>
                            <th>Time </th>
                        </tr>
                    </thead>
                    
    
    <?php
    $counter = 1;
    while($row = $result->fetch_assoc())
    {
            ?>
            <tbody>
                <tr>
                    <td>
                        <?php echo $counter; 
                        $counter = $counter + 1; ?>
                    </td>
                    <td><?php echo $row['firstName']." ".$row['lastName']; ?></td>
                    <td><?php echo $row['marks']; ?></td>
                    <td><?php echo (int)($row['timetaken'] / 60)." Mins ".($row['timetaken'] % 60)." Secs"; ?></td>
                </tr>

            <?php
    }
    ?></tbody></table><?php
}

 ?> 

 
                
                
               