<?php

?>
<link rel="stylesheet" href="/static/css/bootstrap.css">
<table class="table">
    <tr>
        <th>id</th>
        <th>名称</th>
        <th>年龄</th>
        <th>操作</th>
    </tr>
<?php foreach ($users as $user):?>
    <tr>
        <td><?=$user['id']?></td>
        <td><?=$user['name']?></td>
        <td><?=$user['age']?></td>
        <td><a href="/index/index/deit/id/<?=$user['id']?>">操作</a>  <a href="/index/index/del/id/<?=$user['id']?>">删除</a> </td>
    </tr>
    <?php endforeach;?>
</table>