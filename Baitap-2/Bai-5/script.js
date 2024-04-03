function Doitien()
{
	var vnd,usd, euro;
	vnd=parseFloat(prompt("Nhập số tiền cần chuyển đổi: ",0));
	usd=vnd/22000;
	euro=vnd/27000
	//alert("USD= "+usd.toFixed(2));
	document.write("<Center>");
	document.write("<H1> Chương trình đổi tiền VNĐ ra ngoại tệ </H1>");
	document.write("<hr width=40%>");
	document.write("<table border='1'>");
	document.write("<tr>");
	document.write("<th colspan='2'>Số tiền VNĐ là: "+ vnd.toFixed(2)+"</th>");
	document.write("</tr>");
	document.write("<tr>");
	document.write("<td> USD </td> <td> "+ usd.toFixed(2)+"</td>");
	document.write("</tr>");
	document.write("<tr>");
	document.write("<td> EURO </td> <td> "+ euro.toFixed(2)+"</td>");
	document.write("</tr>");
	document.write("</table>");	
	document.write("</Center>");	
}
