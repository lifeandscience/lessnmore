<?php include('stubs/header.php'); ?>
<p>
	<a href="/-/">Back</a>
</p>
<table border="0" cellspacing="0" cellpadding="10">
	<tr>
		<th>URL</th>
		<th>Lessn'd</th>
		<th>Hits</th>
		<th>Active?</th>
		<th>Mark Gone</th>
	</tr>
	
<?php foreach($top_urls as $url) { 
	$short = htmlspecialchars(BCURLS_URL.$url['custom_url'], ENT_QUOTES, 'UTF-8');
	?>
	<tr>
		<td><?php echo htmlspecialchars($url['url'], ENT_QUOTES, 'UTF-8')?></td>
		<td><!-- <a href="<?php /*=$short*/ ?>"> --><?php echo $short?><!-- </a> --></td>
		<td><?php echo $url['hits']?></td>
		<td><?php echo $url['redir_type'] == 'gone' ? 'Gone' : 'Active'; ?></td>
		<td><?php if($url['redir_type'] != 'gone'){ ?><a href="?mark_gone=1&slug=<?php echo $url['custom_url']; ?>">Mark Gone</a><?php } ?></td>
	</tr>
<?php } ?>

</table>

<table border="0" cellspacing="0" cellpadding="10">
	<tr>
		<th>Referer</th>
		<th>Hits</th>
	</tr>
	
<?php foreach($top_referers as $url) { ?>
<tr>
	<td><?php echo htmlspecialchars($url['referer'], ENT_QUOTES, 'UTF-8')?></td>
	<td><?php echo $url['hits']?></td>
</tr>
<?php } ?>

</table>

<?php include('stubs/footer.php'); ?>
