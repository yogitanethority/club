<?php
    include "connection.php";
?>
<table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Login</th>                       
                        <th>Nicename</th>
                        <th>Email</th>
                        <th>URL</th>
                        <th>Registered</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
$ret=mysqli_query($conn,"select * from wp_users");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {
 
?>
<!--Fetch the Records -->
                    <tr>
                        <td><?php echo $cnt;?></td>
                        <td><?php  echo $row['user_login'];?></td>
                        <td><?php  echo $row['user_nicename'];?></td>                        
                        <td><?php  echo $row['user_email'];?></td>
                        <td> <?php  echo $row['user_url'];?></td>
                        <td> <?php  echo $row['user_registered'];?></td>
                        
                    </tr>
<?php 
$cnt=$cnt+1;
} } else {?>
<tr>
<th style="text-align:center; color:red;" colspan="6">No Record Found</th>
</tr>
<?php } ?>                 
              
</tbody>
 </table>