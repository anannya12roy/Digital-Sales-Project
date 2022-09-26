<?php
  $page_title = 'My profile';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(3);
?>
  <?php
  $user_id = (int)$_GET['id'];
  if(empty($user_id)):
    redirect('home.php',false);
  else:
    $user_p = find_by_id('users',$user_id);
  endif;
?>
<?php include_once('layouts/header.php'); ?><br><br><br>
<div class="row" >
   <div class="col-md-8" style="padding-left: 30%;">
       <div class="panel profile">
         <div class="jumbotron text-center bg-blue">
            <img class="img-circle img-size-2" src="uploads/users/<?php echo $user_p['image'];?>" alt="">
           <h3><?php echo first_character($user_p['name']); ?></h3>
         </div><br><br>
        <?php if( $user_p['id'] === $user['id']):?>
         <ul class="nav nav-pills nav-stacked" style="text-align: center;">
          <li><a href="edit_account.php"> <i class="glyphicon glyphicon-edit"></i><h4>Edit profile</h4></a></li>
         </ul>
       <?php endif;?>
       </div>
   </div>
</div>
