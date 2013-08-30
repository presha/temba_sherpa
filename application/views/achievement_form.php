<div class="main_body">
<h2> Create a new achievement</h1>

<?php echo form_open_multipart('achievement/add') ?>

    <p><label for="achievement_title">Achievement title</label>
    <input name="achievement_title" required/></p>

    <p><label for="achievement_date">Achievement date</label>
    <input name="achievement_date" type="date" required/></p>

    <p><label for="achievement_desc">Achievement description</label>
    <textarea name="achievement_desc" style="height: 120px; width: 350px;" required></textarea> </p>

	<p><label for="achievement_photo">Image related to acheivement</label>
	<input type="file" name="userfile" size="20" /></label></p>
	</p>

	<p><label for="enable_disable">Publish</label>
	<input type="radio" name="enable_disable" value="1" checked/> Yes
	<input type="radio" name="enable_disable" value="0"/>No
	</p>

	<input type="submit" name="Upload" value="Save" /> 

</form>
</div>