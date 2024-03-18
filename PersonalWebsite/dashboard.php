
<?php 
	$title = 'Dashboard';
	require_once 'includes/header.php'; 
?>
    
<div style='background-color:#ffff00'>
	<center><p style="color:white"><h2>Medical Records System</h2></p></center>
</div> 

	<center><p style="color:white"><h5>List of Nurse Registered</h5></p></center>

<div> 
	<?php
		$mysqli = new mysqli('localhost', 'root','','dbg6cruz') or die (mysqli_error($mysqli));
            	$resultset = $mysqli->query("SELECT * from tblNurse") or die ($mysqli->error);
            	$resultset2 = $mysqli->query("SELECT * from tblPatient") or die ($mysqli->error);   
        ?>
        <table id="tblNurse" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%"> 
        	<thead>
                	<tr> 
                    		<th>nurseID</th> 
                    		<th>nurseName</th> 
                    		<th>nursePosition</th>
                    		<th>nurseRoom</th> 
                    		<th>nurseFloor</th> 
                	</tr> 
            	</thead>
            	
        	<tbody>
                	<?php
                    		while($row = $resultset->fetch_assoc()):
                 	?>
                		<tr>
                    			<td><?php echo $row['nurseID'] ?></td>
                    			<td><?php echo $row['nurseName'] ?></td>
                    			<td><?php echo $row['nursePosition'] ?></td>
                    			<td><?php echo $row['nurseRoom'] ?></td>
                    			<td><?php echo $row['nurseFloor'] ?></td>
                    			<td>
                        			<a href = "">VIEW</a>                        
                        			<a href = "">DELETE</a>
                    			</td>
                		</tr>
                	<?php endwhile;?>
                </tbody>         
	</table>
	
        <center><p style="color:white"><h5>List of Patient Registered</h5></p></center>
        
        <table id="tblPatient " class="table table-striped table-bordered table-sm" cellspacing="0" width="100%"> 
        	<thead>
	    		<tr> 
	    		        <th>patientID</th> 
	    		        <th>patientNurseID</th> 
	    		        <th>patientName</th>
	    		        <th>patientBirth</th> 
	    		        <th>patientAddress</th> 
	    		        <th>patientPhone</th> 
	    		        <th>patientMedHistory</th> 
	    		</tr> 
	    	</thead>
	    	
	        <tbody>
	        	<?php
	    		    while($row = $resultset2->fetch_assoc()):
	    		 ?>
	    		<tr>
	    		    <td><?php echo $row['patientID'] ?></td>
	    		    <td><?php echo $row['patientNurseID'] ?></td>
	    		    <td><?php echo $row['patientName'] ?></td>
	    		    <td><?php echo $row['patientBirth'] ?></td>
	    		    <td><?php echo $row['patientAddress'] ?></td>
	    		    <td><?php echo $row['patientPhone'] ?></td>
	    		    <td><?php echo $row['patientMedHistory'] ?></td>
	    		    <td>
	    		        <a href = "">VIEW</a>                        
	    		        <a href = "">DELETE</a>
	    		    </td>
	    		</tr>
	    		                
                <?php endwhile;?>
                </body>
                </table>
    </div>



<?php require_once 'includes/footer.php'; ?>

