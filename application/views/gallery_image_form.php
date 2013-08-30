<div class="main_body">
<h2> Add a new image to an album </h1>

<?php echo form_open_multipart('gallery_image/add') ?>

<p><label for="gallery_name">Gallery name</label>
    
  <select name="gallery_id">
  <?php foreach ($gallery_data as $data_image): ?>
  	<option value="<?php echo $data_image['gallery_id'] ?>"><?php echo $data_image['gallery_desc'] ?></option>
      
  <?php endforeach ?>

</select>

<div class="image_upload">
   
	<p><label for="album_cover">Image file</label>
	<input type="file" name="userfile1" size="20" />
	<label>Caption</label>
	<input type="text" name="image_caption1" />
	</p>

	<p><label for="album_cover">Image file</label>
	<input type="file" name="userfile2" size="20" />
	<label>Caption</label>
	<input type="text" name="image_caption2" />
	</p>

	<p><label for="album_cover">Image file</label>
	<input type="file" name="userfile3" size="20" />
	<label>Caption</label>
	<input type="text" name="image_caption3" />
	</p>

	<p><label for="album_cover">Image file</label>
	<input type="file" name="userfile4" size="20" />
	<label>Caption</label>
	<input type="text" name="image_caption4" />
	</p>

	<p><label for="album_cover">Image file</label>
	<input type="file" name="userfile5" size="20" />
	<label>Caption</label>
	<input type="text" name="image_caption5" />
	</p>
	<!-- <p><label for="enable_disable">Publish</label>
	<input type="radio" name="enable_disable" value="1" checked/> Yes
	<input type="radio" name="enable_disable" value="0"/>No
	</p> -->
</div>

	<input type="submit" name="Upload" value="Save" /> 

</form>
</div>