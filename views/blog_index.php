<h1><?php echo $blog_heading; ?></h1>
<a href="blog/form/0">Add New</a>

<table>

	<?php foreach($blogs as $blog) : ?>
	<tr id="row_<?php echo $blog->id; ?>">
		<td>
			<?php echo $blog->id; ?>
		</td>
		<td>
			<a href="blog/view/<?php echo $blog->id; ?>"><?php echo $blog->name; ?></a></li> 
		</td>
		<td>
			<a href="<?php echo BASEURL?>/blog/form/<?php echo $blog->id?>">Edit</a>
		</td>
		<td>
			<a href="javascript:remove('<?php echo $blog->id?>')">Remove</a>
		</td>
	</tr>
	<?php endforeach; ?>

</table>