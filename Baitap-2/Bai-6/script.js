function check()
{
	if (document.f1.dangnhap.value =='')
	{
		window.alert("Tên tài khoản không được để trống");
		document.f1.dangnhap.focus();
		return false;
	}
	if (document.f1.matkhau.value.length < 5)
	{
		window.alert("Mật khẩu phải nhiều hơn 5 ký tự");
		document.f1.matkhau.focus();
		return false;
	}
	 if (document.f1.matkhau.value != document.f1.nhaplai.value)
	{
		window.alert("Mật khẩu gõ lại không khớp");
		document.f1.nhaplai.focus();
		return false;
	}
	 if (document.f1.nam.value == "")
	{
		window.alert("Năm sinh khống được để trống");
		document.f1.nam.focus();
		return false;
	}
	 if (document.f1.ten.value == "")
	{
		window.alert("Tên không được để trống");
		document.f1.ten.focus();
		return false;
	}
	if (document.f1.email.value == "")
	{
		window.alert("Chưa nhập email.");
		document.f1.email.focus();
		return false;
	}
	re=/\w+@\w+\.\w+/;
	if(re.test(email)==false)
	{
		window.alert("Email không đúng định dạng");
		document.f1.email.focus();
		return false;
	}
	}
