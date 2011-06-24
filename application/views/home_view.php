<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>Stylegram - tag your photos with #fashion and share with the world!
</title>

<link rel="stylesheet" type="text/css" href="/style/style.css"/>

<body>

<div class="main" style="width: 696px; display: block; margin-left: auto; margin-right: auto; margin-top: 30px;">

<?php foreach($photoinfo->data as $p): ?>
			
				<div class="pic<?php echo ++$i;?>" style="float: left; background: #eee; border: 1px solid #fff; padding: 10px 10px 8px 10px; margin: 10px; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px;box-shadow: 0 2px 15px #000; -webkit-box-shadow: 0 2px 15px #000; -moz-box-shadow: 0 2px 15px #000;">

					<?php echo anchor('home/view/'.$p->id, '<img src="'.$p->images->low_resolution->url.'"></a>');?>
					
					<div class="user_container" style="margin: 10px 0 0 0; width: 306px;">
					
						<div class="user_profile_photo" style="margin: 0; padding: 0; width: 50px; float: left;">
						
						<img src="<?php echo $p->user->profile_picture;?>" width="50px"/>
						
						</div> <!-- end user_profile_photo-->
										
						<div class="user_profile_info" style="float: left; padding: 0 0 0 10px; top:50%; line-height: 30px; margin-top: -10px;">
						
						<h3><?php echo $p->user->username;?></h3>

						</div> <!-- end user_profile_info-->							

					</div> <!-- end user_container-->
				
				</div> <!-- end pic -->

<?php endforeach;?>


</div>

<br/>

<div style="clear: both;">

<?php if (empty($uri)) {
		  echo '';
		  }
		  else {
		  echo '<a href="javascript:history.go(-1)">Previous</a>';
		  }?>

<p><?php if (empty($nextmaxtagid)) {
		echo '';
		}
		else {
		echo anchor('home/browse/'.$nextmaxtagid, 'Next');
		}?></p>

</div>

</body>
</html>