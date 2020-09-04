<?php 
session_start();

if(!isset($_SESSION['user_name'])){

header("location: login.php");
}
else {

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Post | Affordable Attorney leads </title>
<link rel="shortcut icon" type="site_icon.png" />

<!--#####################################Libraries file##########################################-->

<?php include "libs.php"; ?>
<!--<script src="client_validate.js"></script>
-->
</head>

	
<body>
      
<div class="wrapper">
    <?php include"admin_sidebar.php" ?>
        
        <section class="container-fluid text-left text-black pt-1 pb-5">    
            
            <span class=" d-block p-3" style="background-color:#d1ecf1; color:#0c5460;">
                <h4 class="text-left font-weight-bold">VIEW POST </h4>
            </span> 
            
            <!--
        <section class="pl-2 pr-2">
            <div class="container bg-white text-center text-black dash pt-2 mt-5 mb-5 border-light border-right border-left border-top border-bottom">  
                <h4 class="text-left pl-5 font-weight-bold p-3" style="background-color:#d1ecf1; color:#0c5460;">
                	Dashboard  
                </h4>-->
                
                <center>
                <div class="mt-4 font-weight-medium">
                    
                    <table id="zctb" class="dashboard_table mt-5 border-bottom mb-5 table-hover">
                        <thead>
                            <tr style="background-color:#5ba5f5;">
                                <th class="p-3 font-weight-bold xs_texts">#</th>
                                <!--<th class="p-3  font-weight-bold xs_texts">Date</th>-->
                                <th class="p-3 font-weight-bold xs_texts">Author</th>
                                <th class="p-3 font-weight-bold xs_texts">Title</th>
                                <th class="p-3 font-weight-bold xs_texts">Image</th>
                                <th class="p-3 font-weight-bold xs_texts">Content</th>
                                <th class="p-3 font-weight-bold xs_texts">Delete</th>
                                <th class="p-3 font-weight-bold xs_texts">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        
							<?php 
                                include("includes/connect.php");
                                
                                $query = "select * from posts order by 1 DESC"; 
                                
                                $run = mysqli_query($con,$query);
                                
                                while($row=mysqli_fetch_array($run))
                                {
                                    $post_id = $row['post_id'];
                                    // $post_date = $row['post_date'];
                                    $post_author = $row['post_author'];
                                    $post_title = $row['post_title'];
                                    $post_image = $row['post_image'];
                                    // $post_content= substr($row['post_content'],0,100);
                                    $post_content= $row['post_content'];

                                    $post_content=strip_tags($post_content);
                                    $post_content=substr($post_content,0,120);
                            ?>
                            <tr>              
                                <td class="table_data xs_texts p-2"><?php echo $post_id; ?></td>
                                <!--<td class="table_data xs_texts"><?php //echo $post_date; ?></td>-->
                                <td class="table_data xs_texts p-2"><?php echo $post_author; ?></td>
                                <td class="table_data xs_texts p-2"><?php echo $post_title; ?></td>
                                <td class="table_data xs_texts p-2"><img src="../images/<?php echo $post_image; ?>" width="100" height="100"></td>
                                <td class="table_data mydate xs_texts p-2"><?php echo $post_content; ?>. . .</td>
                                <td>
                                	<a href="delete.php?del=<?php echo $post_id; ?>" class="page-link">Delete</a>
                                </td>
                				<td>
                                	<a href="edit_posts.php?edit=<?php echo $post_id; ?>" class="page-link">Edit</a>
                                </td>
                                
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    
                </div>
                </center>
                
                
            </div>
        </section>
        
	</div><!--end of content class div-->
   	
</div><!--end of wrapper class div-->

    
    
    <?php 
        if(isset($_GET['insert']))
		{
        	include("insert_post.php");
        }
    ?>
    
    <script>
	    $(document).ready(function(){
			$('#sidebarCollapse').on('click',function(){
				$('#sidebar').toggleClass('active');
			});
		});  
	</script>

</body>
</html>

<?php } ?>
   