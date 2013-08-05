function checkForm(fform) 
	{ 
		if(fform.pwd.value !="" && fform.pwd.value == fform.repwd.value)
		{ 
			if(fform.pwd.value.length < 8)
			{ 
				alert("Error: Password must contain at least eight characters!");
				fform.pwd.focus();
				return false;
			}}
		else
		{
		 alert("Error: Please Check That You've Entered And Re-nter Your Password!");
		 fform.pwd.focus();
		 return false;
		}
}
