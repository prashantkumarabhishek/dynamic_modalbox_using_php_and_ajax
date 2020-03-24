<?php 
include('connection.php'); 
 if(isset($_REQUEST["user_id"]))  
 {  
      $output = '';  
      $id=(int)$_REQUEST["user_id"];
      $query = "SELECT * FROM users WHERE uid = '".$id."'";  
      $result = mysqli_query($connection, $query);  
	 	  $nums=mysqli_num_rows($result);
 
 ?>
	<div class="table-responsive">  
		<table class="table table-bordered">
			<?php
			if($nums>0)
			{
				$rows = mysqli_fetch_array($result);
				?>
				<tr>  
                     <td width="40%"><label>Name</label></td>  
                     <td width="60%"><?=$rows["Name"];?></td>  
                </tr>  
                <tr>  
                     <td width="40%"><label>City</label></td>  
                     <td width="60%"><?=$rows["City"];?></td>  
                </tr>  
                <tr>  
                     <td width="40%"><label>State</label></td>  
                     <td width="60%"><?=$rows["State"];?></td>  
                </tr>  
                <tr>  
                     <td width="40%"><label>Country</label></td>  
                     <td width="60%"><?=$rows["Country"];?></td>  
                </tr> 
				<?php
			}
				?> 
			
		</table>
	</div>
<?php } ?>