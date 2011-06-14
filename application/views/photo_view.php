<html>
<head>
<title>Photo
</title>

<link rel="stylesheet" type="text/css" href="/style/style.css"/>

<body>

<div class="main" style="width: 660px;display: block; margin-left: auto; margin-right: auto; margin-top: 30px;">

	<div class="image_container" style="border-radius: 10px; width: 680px; height: 680px; padding: 4px; position: relative; box-shadow:inset 0 0 20px #000000;display: block; margin-left: auto; margin-right: auto; background: white;">

		<div class="image" style="position:relative; top:50%; height:612px; margin-top:-306px;">

		<img style="display: block; margin-left: auto; margin-right: auto;box-shadow: 2px 2px 5px #111;" src="<?php echo $json_o->data->images->standard_resolution->url;?>">

		</div> <!-- ends image class--> 	

	</div> <!-- ends image_container class-->

<!--	<hr style="width: 668px; height:0px; color:none; background:none; border:none; border-top:1px solid #ddd; border-bottom:1px solid #999;"/> -->

	<div class="meta_container" style="width: 688px;display: block; margin-left: auto; margin-right: auto;">

		<div class="user_info" style=" height: 200px;">

			<div class="profile_picture" style="margin-left: 40px; margin-top: 40px; float: left;">
				<img style="border-radius: 5px;" src="<?php echo $json_o->data->user->profile_picture;?>"/>
			</div>
		
			<div class="profile_name" style="float: right; width: 450px; margin-top: 40px; margin-left: 40px;">
				<h1 style="color: white;"><?php echo $json_o->data->user->username;?></h1>
			</div>

		</div> <!-- ends user_info-->
		
		<div class="engagement" style="clear: both;">

			<div class="likes" style="margin-left: 40px; margin-right: 40px;">

				<div class="like_count">

					<h4 style="color: white;"><i style="font-style: normal; color: grey;">&hearts;</i> <?php echo $json_o->data->likes->count;?> likes</h4>

				</div> <!-- ends like_count-->

				<div class="like_user_list" style="height:80px;">

					<?php foreach($json_o->data->likes->data as $p): ?>
				
					<div class="like_user" style="float: left; width: 76px; text-align: center; font-size: 75%; overflow: hidden;">
						<img style="margin-left: 3px; margin-right: 3px; border-radius: 5px;" width="66" src="<?php echo $p->profile_picture;?>"/>
						<br/><?php echo $p->username;?>
					</div> <!-- ends like_user-->

					<?php endforeach;?>

				</div> <!-- ends like_user_list -->

			</div> <!-- ends likes class-->

		<div class="comments" style="margin-left: 40px; margin-right: 40px;">

			<div class="comment_count">

				<h4 style="color: white;"><img src="http://s3.amazonaws.com/instagram-static/images/p-page/speechBubble.png" width="11"> <?php echo $json_o->data->comments->count;?> comments</h4>

			</div> <!-- ends comment_count-->

			<?php foreach($json_o->data->comments->data as $p): ?>

			<div class="comment_user_list" style="clear: both;">

				<div class="comment_user" style="float: left; width: 76px; text-align: center; font-size: 75%; overflow: hidden; margin: 10 10 10 0;">

					<img style="margin-left: 3px; margin-right: 3px; border-radius: 5px;" width="66" src="<?php echo $p->from->profile_picture;?>"/>
					<br/><?php echo $p->from->username;?>

				</div> <!-- ends comment_user-->

				<div class="comment_user_text" style="float: right; width: 500px; height: 40px; margin: 10 0 10 0; padding: 10; border-radius: 5px; background: white; overflow: auto;">

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