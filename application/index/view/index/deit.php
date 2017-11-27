<?php

?>
<link rel="stylesheet" href="/static/css/bootstrap.css">
<form method="post" class="table" action="">
    <input type="text" placeholder="姓名" name="name" value="<?= $users['name']?>">
    <input type="text" placeholder="年龄"  name="age"value="<?= $users['age']?>">
    <input type="password" placeholder="请再次输出密码" name="password" value="<?= $users['password']?>">
    <input type="radio" name="status" value="1" <?php if ($users['status']==1){echo 'checked';}?>>正常
    <input type="radio" name="status" value="0"  <?php if ($users['status']==0){echo 'checked';}?>>禁用

    <input type="submit" value="提交" class="btn-info">
</form>
