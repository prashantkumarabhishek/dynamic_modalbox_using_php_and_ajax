<?php  
//Prashantabhishek.com/blog/
 include("connection.php"); 
  $query = "SELECT uid,Name FROM users";  
 $result = mysqli_query($connection, $query); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>How to Create Dynamic Modal Box with Ajax, PHP and Mysql</title>  
           <script src="js/jquery-min.js"></script>  
           <link rel="stylesheet" href="css/bootstrap.min.css" />  
           <script src="js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">How to Create Dynamic Modal Box with Ajax, PHP and Mysql</h3>  
                <br />  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="70%">Name</th>  
                               <th width="30%">View</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["Name"]; ?></td>  
                               <td><input type="button" name="view" value="view" id="<?php echo $row["uid"]; ?>" class="btn btn-info btn-xs view_data" /></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">User Details</h4>  
                </div>  
                <div class="modal-body" id="User_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var user_id = $(this).attr("id");  
           $.ajax({  
                url:"user-details.php",  
                method:"post",  
                data:{user_id:user_id},  
                success:function(data){  
                     $('#User_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>
