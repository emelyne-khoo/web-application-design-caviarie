function chkEmail(event){
	var email = event.currentTarget;
	var pos = email.value.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
	if (pos != 0){
		alert("Email should be username@domain!");
		email.focus();
		email.select();
		return false;
	}
}