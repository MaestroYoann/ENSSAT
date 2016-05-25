<?php foreach ($todolist as $todo_item): ?>
	<ul>
	<li><?php echo $todo_item['title'].". "
		.anchor('todo/delete/'.$todo_item["id"],'[supp]'); ?</li>
	</ul>
<?php endforeach ?>