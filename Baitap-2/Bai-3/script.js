var conf=confirm("Nhấn OK để thấy thông báo chào mừng!")
	if (conf){
		document.write("<IMG SRC='image.png' width=300px>");
		document.write("<BR>Chào bạn đến với lớp java");
	}
	else
		document.write("bạn vừa nhấn vào nút cancel");
