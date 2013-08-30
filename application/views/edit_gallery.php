<div class="main_body">
<h2> Create a new item in a slide </h1>

<?php echo form_open_multipart('gallery/edit_save') ?>

<input type="hidden" name="dummy" value="<?php echo $gallery_data['gallery_id'];?>">
    <p><label for="album_cover">Album cover</label>
	<img src="<?php echo base_url()."images/gallery_image/".$gallery_data['gallery_img_path'] ?>" alt="some_text" style="max-width: 500px; max-height: 500px;"></p>

    <p><label for="gallery_name">Gallery name</label>
    <input name="gallery_name" value="<?php echo  $gallery_data['gallery_desc']?>" required/></p>

	<p><label for="enable_disable">Publish</label>
	<input type="radio" name="enable_disable" value="1" <?php if($gallery_data['enable_disable']==1){echo "checked";}?> /> Yes
	<input type="radio" name="enable_disable" value="0" <?php if($gallery_data['enable_disable']==0){echo "checked";}?>/>No
	</p>

   <h3>Existing images in the gallery</h3>
	 <?php foreach ($gallery_images as $data_image): ?>
		<p><a href="<?php echo base_url()."images/gallery_image/".$data_image['image_path'] ?>" target="_blank">
		<img src="<?php echo base_url()."images/gallery_image/".$data_image['image_path'] ?>" alt="no image found"/></a>
		<a href="<?php echo base_url()."index.php/gallery_image/delete/".$data_image['image_id'] ?>" >Delete</a>
		</p>

  <?php endforeach ?> 

	<input type="submit" name="Upload" value="Save" /> 

</form>
</div>