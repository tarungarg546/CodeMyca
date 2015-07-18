function verify_username(Id)
	{
		var user=document.getElementById(Id);
					var temp=document.getElementById('uerror');

		if(user.value.length<4)
		{
			user.style.border='1px solid red';
			temp.style.display='inline-block';
		}
		else
		{
			user.style.border='1px solid green';
			temp.style.display='none';
		}
	}
	function verify_password(Id)
	{
		var pass=document.getElementById(Id);
					var temp=document.getElementById('perror');

		if(pass.value.length<7)
		{
			pass.style.border='1px solid red';
			temp.style.display='inline-block';
		}
		else
		{
			temp.style.display='none';
			pass.style.border='1px solid green';

		}
	}
	function validate()
	{
		var flag=0;
		var user=document.getElementById('username');
		var pass=document.getElementById('pass');
		if (user.value.length<4) 
			{
				user.style.border='1px solid red';
				var tu=document.getElementById('uerror');
				tu.style.display='inline-block';
				flag=1;
			}
			if (pass.value.length<7)
			{
				pass.style.border='1px solid red';
				var tp=document.getElementById('perror');
					flag=1;
					tp.style.display='inline-block';
			}
			if(flag==1)
				document.getElementById('goto').form.action='javascript:validate();';
			else
				document.getElementById('goto').form.action='cl.php';
	}
	function verify_user(Id)
	{
		var temp=document.getElementById('uerrors');

		var user=document.getElementById(Id);
		if (user.value.length<4) {
			user.style.border='1px solid red';
			var temp=document.getElementById('uerrors');
			temp.style.display='inline-block';
		}
		else{
			user.style.border='1px solid green';
			temp.style.display='none';
		}
	}
	function verify_pass(Id)
	{
		var temp=document.getElementById('perrors');
		var pass=document.getElementById(Id);
		if (pass.value.length<7) {
			temp.style.display='inline-block';
			pass.style.border='1px solid red';
		}
		else
		{
			temp.style.display='none';
			pass.style.border='1px solid green';

		}
	}
	function verify_email(Id)
	{
		var reg = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var temp=document.getElementById('errors');
		var email=document.getElementById(Id);
		if (!reg.test(email.value)) {
			temp.style.display='inline-block';
			email.style.border='1px solid red';
		}
		else
		{
			temp.style.display='none';
			email.style.border='1px solid green';
		}
	}
	function verify()
	{
		var flag=0;
		var username=document.getElementById('user');
		var password=document.getElementById('password');
		var email=document.getElementById('email');
		var reg = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (username.value.length<4) {
			flag=1;
			var temp1=document.getElementById('uerrors');
			temp1.style.display='inline-block';
			username.style.border='1px solid red';
		}
		if (password.value.length<7) {
			flag=1;
			password.style.border='1px solid red';
			var temp2=document.getElementById('perrors');
			temp2.style.display='inline-block';
		}
		if (!reg.test(email.value)) {
			flag=1;
			email.style.border='1px solid red';
			var temp3=document.getElementById('errors');
			temp3.style.display='inline-block';
		}
		if (flag)
			document.getElementById('sign_up').form.action='javascript:verify();';
		else
			document.getElementById('sign_up').form.action='ca.php';

	}