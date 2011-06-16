<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>Instagram photo taken by <?php echo $username;?>
</title>

<link rel="stylesheet" type="text/css" href="/style/style.css"/>

<body>

<div class="main" style="width: 660px; display: block; margin-left: auto; margin-right: auto; margin-top: 30px;">

	<div class="image_container" style="border-radius: 8px; -webkit-border-radius: 8px; -moz-border-radius: 8px; width: 680px; height: 680px; padding: 4px; position: relative; box-shadow:inset 0 0 20px #000000;display: block; margin-left: auto; margin-right: auto; background: white;">

		<div class="image" style="position:relative; top:50%; height:612px; margin-top:-306px;">

		<img style="display: block; margin-left: auto; margin-right: auto; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; box-shadow: 0 1px 4px rgba(0,0,0,.50); -webkit-box-shadow: 0 1px 4px rgba(0,0,0,.50); -moz-box-shadow: 0 1px 4px rgba(0,0,0,.50);" src="<?php echo $photourl;?>">

		</div> <!-- ends image class--> 	

	</div> <!-- ends image_container class-->

	<div class="meta_container" style="width: 688px;display: block; margin-left: auto; margin-right: auto;">

		<div class="user_info" style=" height: 200px;">

			<div class="profile_picture" style="margin-left: 40px; margin-top: 40px; float: left;">
				<img style="border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px;" src="<?php echo $profilephotourl;?>"/>
			</div>
		
			<div class="profile_name" style="float: right; width: 450px; margin-top: 40px; margin-left: 40px;">
				<h1 style="color: white;"><?php echo $username;?></h1>
				<ul style="list-style-type: none; height: 80px; margin: auto 0 0 -60px;">
				<li style="float: left;padding-left: 20px; padding-right: 10px; display: block; line-height: 40px; font: 18px 'Lucida Grande', Helvetica; background-color: transparent; color: #fff;"><?php echo $photocount;?> <br/>Photos</li>
				<li style="float: left;padding-left: 20px; padding-right: 10px; display: block; line-height: 40px; font: 18px 'Lucida Grande', Helvetica; background-color: transparent; color: #fff;"><?php echo $followers;?> <br/>Followers</li>
				<li style="float: left;padding-left: 20px; padding-right: 10px; display: block; line-height: 40px; font: 18px 'Lucida Grande', Helvetica; background-color: transparent; color: #fff;"><?php echo $following;?> <br/>Following</li>

				</ul>
			</div>

		</div> <!-- ends user_info-->
		
		<div class="engagement" style="clear: both;">

			<div class="likes" style="margin-left: 40px; margin-right: 40px;">

				<div class="like_count">

					<h4 style="color: white;"><i style="font-style: normal; color: grey;">&hearts;</i> <?php echo $likecount;?> likes</h4>

				</div> <!-- ends like_count-->

				<div class="like_user_list" style="height:80px;">

					<?php foreach($likeuser as $p): ?>
				
					<div class="like_user" style="float: left; width: 76px; text-align: center; font-size: 75%; overflow: hidden;">
						<img style="margin-left: 3px; margin-right: 3px; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px;" width="66" src="<?php echo $p->profile_picture;?>"/>
						<br/><?php echo $p->username;?>
					</div> <!-- ends like_user-->

					<?php endforeach;?>

				</div> <!-- ends like_user_list -->

			</div> <!-- ends likes class-->

		<div class="comments" style="margin-left: 40px; margin-right: 40px;">

			<div class="comment_count">

				<h4 style="color: white;"><img src="http://s3.amazonaws.com/instagram-static/images/p-page/speechBubble.png" width="11"> <?php echo $commentcount;?> comments</h4>

			</div> <!-- ends comment_count-->

			<?php foreach($commentuser as $p): ?>

			<div class="comment_user_list" style="clear: both;">

				<div class="comment_user" style="float: left; width: 76px; text-align: center; font-size: 75%; overflow: hidden; margin: 10 10 10 0;">

					<img style="margin-left: 3px; margin-right: 3px; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px;" width="66" src="<?php echo $p->from->profile_picture;?>"/>
					<br/><?php echo $p->from->username;?>

				</div> <!-- ends comment_user-->

				<div class="comment_user_text" style="float: right; width: 500px; height: 40px; margin: 10 0 10 0; padding: 10; border-radius: 5px; background: white; overflow: auto; padding: 5px;">

					<?php echo $p->text;?>

				</div> <!-- ends comment_user_text-->

			</div> <!-- ends comment_user_list-->

			<?php endforeach;?>


		</div> <!-- ends comments class-->





		</div> <!-- ends engagement class-->

	</div>  <!-- ends meta_container class-->

</div> <!-- ends main class-->

<br/>




</body>
</html>