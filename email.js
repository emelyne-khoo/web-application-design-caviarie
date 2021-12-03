function func() {
    var emailpattern="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.[A-Az-z]{2,3}$/";
	var mail=document.getElementById("email").value;
	
	if(mail==""||!(mail.match(emailpattern)))
	{
		alert('Please Enter valid email');
		return false;
	}
	
	return true;
}