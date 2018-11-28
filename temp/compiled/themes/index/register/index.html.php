<!DOCTYPE html>
<html>
	<?php echo $this->fetch('head.html'); ?>
	<body class="fullBody bg-fff">
		 
		<div class="header-back-fixed goBack"></div>
		 
		<div class="flex-center pd-10 bg-fff">
			<image class="wh-100 bd-radius-50" src="/static/images/logo.png"></image>
			
		
		</div>
		<form id="regForm">
		
		<div class="input-flex">
			<div class="input-flex-label">手机</div>
			<input class="input-flex-text" id="telephone" name="telephone" placeholder="请输入手机号码" />
		</div>
		<div class="input-flex">					
			<div class="input-flex-label">验证码</div>					 
			<input type="text" name="yzm" class="input-flex-text">				 
			<div class="input-flex-btn" id="sendSms">获取验证码</div>
		</div>
		<div class="input-flex">
			<div class="input-flex-label">昵称</div>
			<input class="input-flex-text" name="nickname" placeholder="请输入昵称" />
		</div>
		<div class="input-flex">
			<div class="input-flex-label">密码</div>
			<input class="input-flex-text" name="password" type="text" placeholder="请输入密码" type="password" />
		</div>
		<div class="input-flex">
			<div class="input-flex-label">重复密码</div>
			<input class="input-flex-text" name="password2" placeholder="请再次输入密码" type="password" />
		</div>
		<div class="row-box">
			<button type="button" id="reg-submit" class="btn-row-submit">立即注册</button>
			<div class="flex-center">
				<a class="mgb-10 cl2" href="/index.php?m=login">已有账号？立即登录</a>
				
			</div>
		</div>
		</form>
		<?php echo $this->fetch('footer.html'); ?>
		<script type="text/javascript">
			$(document).on("click","#sendSms",function(res){
				var telephone=$("#telephone").val();
				$.get("/index.php?m=register&a=SendSms&ajax=1",{
					telephone:$("#telephone").val(),
				},function(res){
					skyToast(res.message);
				},"json");
			})
			$(document).on("click","#reg-submit",function(){
				$.post("/index.php?m=register&a=regsave&ajax=1",$("#regForm").serialize(),function(res){
					skyToast(res.message);
					if(res.error){
						window.location="/";
					}
				},"json");
			})
		</script>
	</body>
</html>
