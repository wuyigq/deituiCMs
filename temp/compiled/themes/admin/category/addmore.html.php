<!DOCTYPE  html>
<html>
<?php echo $this->fetch('head.html'); ?>
<body>
	<div class="tabs-border">
		<a class="item active" href="/admin.php?m=category">分类列表</a>
		<a class="item" href="/admin.php?m=category&a=add">添加</a>
	</div>
<div class="main-body"> 
	<form method="post" action="<?php echo $this->_var['appadmin']; ?>?m=category&a=savemore">
		<input type="hidden" name="catid" value="<?php echo $this->_var['data']['catid']; ?>">

		<table class="table table-bordered">
			<col style="width: 100px;" />
			<tr>
				<td>所属分类：</td>
				<td>
					<a href="<?php echo $this->_var['appadmin']; ?>?m=admin_category&pid=<?php echo $this->_var['data']['catid']; ?>"><?php echo $this->_var['data']['cname']; ?></a>
				</td>
			</tr>
			<tr>
				<td>分类内容：</td>
				<td><textarea name="content" style="width:400px; height:200px;"></textarea>(每行一个分类)</td>
			</tr>
			 
		</table>
		<div class="btn-row-submit js-submit">保存</div>
	</form>
</div>
<?php echo $this->fetch('footer.html'); ?>