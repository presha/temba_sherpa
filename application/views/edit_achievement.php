<body>
<div class="main_body">
<h2> Create a new item in a slide </h2>

<?php echo form_open_multipart('achievement/edit_save') ?>

<input type="hidden" name="dummy" value="<?php echo $achievement_data['achievement_id'];?>">
<input type="hidden" name="dummy1">

	<p class="present_photo"><label for="achievement_photo">Image related to acheivement</label>
	<img src="<?php echo base_url()."images/achievement_image/".$achievement_data['achievement_photo'] ?>" alt="some_text" style="max-width: 500px; max-height: 500px;"><a href="#" class="photo_del"><img src="<?php echo base_url();?>media/images/delete.png" alt="Delete" style="max-width: 30px; padding-bottom: 77px;"></a></p>

	<p><label for="achievement_title">Achievement title</label>
    <input name="achievement_title" value="<?php echo $achievement_data['achievement_title']?>" required/></p>
    <p><label for="achievement_desc">Achievement description</label>
    <textarea name="achievement_desc" style="height: 120px; width: 350px;" required><?php echo $achievement_data['achievement_desc']?> </textarea> </p>

    <p><label for="achievement_date">Achievement date</label>
    <input name="achievement_date" type="date" value="<?php echo $achievement_data['achievement_date']?>" required/></p>

    <p class="achievement_photo"><label for="achievement_photo">Image related to acheivement</label>
	<input type="file" name="userfile" size="20" /></label></p>
	
	<p><label for="enable_disable">Publish</label>
	<input type="radio" name="enable_disable" value="1" <?php if($achievement_data['enable_disable']==1){echo "checked";}?>/> Yes
	<input type="radio" name="enable_disable" value="0" <?php if($achievement_data['enable_disable']==0){echo "checked";}?>/>No
	</p>

	<input type="submit" name="Upload" value="Save" /> 

</form>
</div>
</body>
 <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>media/js/jquery.js"></script>
 <script>
 $(document).ready(function(){
 	$('.achievement_photo').hide();

 	$(".photo_del").click(function(){
 		$("input[name=dummy1]").val("1");
 		$(".present_photo").hide();
 		$('.achievement_photo').show();
 	});
 });
 </script>