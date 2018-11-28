<!DOCTYPE  html>
<html>
<?php echo $this->fetch('head.html'); ?>
<body>

<div class="tabs-border">
	<a href="/admin.php?m=admin_group" class="item">管理组列表</a>
	<a href="/admin.php?m=admin_group&a=add" class="item active">添加</a>
</div>

<div class="main-body">
<form method="post" action="<?php echo $this->_var['appadmin']; ?>?m=admin_group&a=save">
<input type="hidden" name="id" value="<?php echo $this->_var['zu']['id']; ?>" />
<table class="table-add">
  <tr>
    <td width="11%" align="right">组名：</td>
    <td width="89%"><input name="title" type="text" id="title" value="<?php echo $this->_var['zu']['title']; ?>" /></td>
    </tr>
  <tr>
    <td align="right">权限设置：</td>
    <td><input type="checkbox" value="1" id="checkall" /> 全选</td>
    </tr>
    
    <?php echo $this->_var['str']; ?>
   
  </table>
	<div class="btn-row-submit js-submit">保存</div> 

</form>


</div> 


<?php echo $this->fetch('footer.html'); ?>
<script language="javascript">
$(document).ready(function()
{
	$("#checkall").click(function()
	{
		if($(this).prop("checked")==true)
		{
			$(".percheck").prop("checked",true);
		}else
		{
			$(".percheck").prop("checked",false);
		}
	});
});
</script>
</body>
</html>