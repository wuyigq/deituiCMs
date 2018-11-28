<!DOCTYPE html>
<html>
	<?php echo $this->fetch('head.html'); ?>
	<body>
		<div class="header">
			<div class="header-title">旧书回收</div>
		</div>
		<div class="header-row"></div>
		<div class="main-body">
			<style>
				.row-box div{
					margin-bottom:5px;
				}
				.sd-bd{
					height: 20px;
					margin-right: 3px;
					background-color: #f60;
					width: 3px;
				}
				 
			</style>
			<div class="row-box mgb-10">
				<div class="flex"><div class="sd-bd"></div>将那些沉睡在书架上的图书捐献出来，让我们发挥它们的用处。</div>
				<div>捐献图书可以获得书币，书币可以用来兑换会员卡，也可以捐赠它人。
				</div>
				<div>获得书币=书籍总价+快递费用。</div>
			</div>
			<div class="row-box mgb-10">
				
				<div class="flex-table">
					<div class="flex-table-label">回收站点：</div>
					 <div class="flex-table-box">福鼎站</div>					
				</div>
				
				<div class="flex-table">
					<div class="flex-table-label">联系人：</div>
					<div class="flex-table-box">老雷</div>					
				</div>
				<div class="flex-table">
					<div class="flex-table-label">联系电话：</div>
					<div class="flex-table-box">15985840591</div>					
				</div>
				<div class="flex-table">
					<div class="flex-table-label">回收地址：</div>
					<div class="flex-table-box">福建省宁德市福鼎市前岐镇鹿兴小区68号</div>					
				</div>
				<div class="flex-table">
					<div class="flex-table-label">站点说明：</div>
					<div class="flex-table-box">
						<div>福鼎市辖17个乡镇、办事处、开发区、281个村（居）民委员会。面积1461.7平方公里，总人口582230人</div>
						<div>
							福鼎站我们预计会有23家。
						</div>
					</div>					
				</div>
				 
			</div>
			<form style="display: none;">
				<div class="input-flex">
					<div class="input-flex-label input-flex-require">联系人</div>
					<input class="input-flex-text" name="nickname" type="text" />
				</div>
				<div class="input-flex">
					<div class="input-flex-label">地址</div>
					<input class="input-flex-text" name="address" type="text" />
				</div>
				<div class="input-flex">
					<div class="input-flex-label">书籍数量</div>
					<input class="input-flex-text" type="text" /> 
					<div class="input-flex-note">本</div>
				</div>
				<div class="input-flex">
					<div class="input-flex-label">收货地址</div>
					<input class="input-flex-text" type="text" value="福鼎市前岐镇鹿兴小区68号" /> 
				</div>
			</form>
		</div>
		 
		<?php echo $this->fetch('footer.html'); ?>
		<?php wx_jssdk();?>
		<script type="text/javascript">
		 wxshare_title="书香来旧书回收，分享知识，共享美好生活。";	
		</script>
	</body>
</html>
