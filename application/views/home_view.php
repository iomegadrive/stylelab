<html>
<head>
<title>Home
</title>

<link rel="stylesheet" type="text/css" href="/style/style.css"/>

<body>

<div class="main" style="width: 660px;display: block; margin-left: auto; margin-right: auto; margin-top: 30px;">

<?php foreach($json_o->data as $p): ?>

	<div class="polaroid" style="border-radius: 5px; width: 320px; height: 392px; background-color: white; margin: 30px auto 30px auto;box-shadow: 3px 3px 5px #111;">

		<div class="polaroid_image_container" style="width: 306px; display: block; margin: auto;">

			<div class="polaroid_image" style="height: 306px; width: 306px; margin-top: 30px;">

				<?php echo anchor('home/view/'.$p->id, '<img src="'.$p->images->low_resolution->url.'"></a><br/><br/>');?>

			</div> <!-- end polaroid_image--> 

			<div class="polaroid_user" style="height:60px; margin-top: 10px;">

				<div class="polaroid_user_photo" style="float: left;">

				<?php echo '<img src="'.$p->user->profile_picture.'" width="50"/>';?>

				</div> <!-- end polaroid_user_photo-->
				
				<div class="polaroid_user_photo_info" style="float: right; width: 240px; margin-left: 10px;">

				<?php echo $p->user->username;?>
				
				</div> <!-- end polaroid_user_photo_info-->	

			</div> <!-- end polaroid_user-->

		</div> <!-- end polaroid_image_container-->

	</div> <!-- end polaroid-->

<?php endforeach;?>

</div>

<?php if (empty($tempuri)) {
		  echo '';
		  }
		  else {
		  echo '<a href="javascript:history.go(-1)">Previous</a>';
		  }?>

<p><?php if (empty($json_o->pagination->next_max_tag_id)) {
		echo '';
		}
		else {
		echo anchor('home/browse/'.$json_o->pagination->next_max_tag_id, 'Next');
		}?></p>


</body>
</html>