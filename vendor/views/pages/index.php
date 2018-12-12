<table>
    <tr>
	<td>title</td>
	<td>text</td>
	<td>date</td>
    </tr>
<?php foreach ($this->articles as $value) :?>
    <tr>
	<td><?=$value['title']?></td>
	<td><?=$value['text']?></td>
	<td><?=$value['date']?></td>
    </tr>
<?php endforeach; ?>
</table>