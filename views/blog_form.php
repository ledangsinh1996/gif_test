
	<input type="hidden" name="txt" id="id" value="<?php echo isset($blog['id']) ? $blog['id']:0?>">
	<input type="text" name="txt" id="name" value="<?php echo isset($blog['name']) ? $blog['name']:''?>"><br><br>
	<textarea name="txt" id="content"><?php echo isset($blog['content']) ? $blog['content']:''?></textarea><br><br>
	<input type="submit" value="Save" onclick="save()">
