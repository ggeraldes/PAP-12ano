<?php if (count($erros) > 0): ?>
	<div class="erro" >
		<?php foreach ($erros as $erro): ?>
			<p><?php echo $erro; ?></p>
	<?php endforeach ?>
	</div>
<?php endif ?>