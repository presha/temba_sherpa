<div class="main_body">
<h2> Add a new album in a gallery </h1>

<?php echo form_open_multipart('gallery/add') ?>

    <p><label for="gallery_name">Gallery name</label>
    <input name="gallery_name" required/></p>

	<p><label for="album_cover">Album cover</label>
	<input type="file" name="userfile" size="20" /></label></p>

	</p>

	<p><label for="enable_disable">Publish</label>
	<input type="radio" name="enable_disable" value="1" checked/> Yes
	<input type="radio" name="enable_disable" value="0"/>No
	</p>

	<input type="submit" name="Upload" value="Save" /> 

</form>
</div>