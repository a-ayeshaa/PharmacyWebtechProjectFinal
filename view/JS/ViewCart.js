function getCart()
{

	const xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {

		if (this.readyState === 4 && this.status === 200) {
				const json = JSON.parse(this.responseText);
				
				let x = "";

				for (let i = 0; i < json.length; i++) {
					x += "<tr>" + 
				"<td>" + json[i].OrderNumber + "</td>" + 
				"<td>" + json[i].MedicineCode + "</td>" +   
				"<td>" + json[i].MedicineName + "</td>" + 
				"<td>" + json[i].MedicinePrice + "</td>" +   
				"<td>" + json[i].Quantity + "</td>" +
				"<td>" + json[i].TotalPrice + "</td>" +
				"</tr>"
				}
				document.getElementById("i2").innerHTML = x;
				console.log(x);
			}
		else if (this.status === 404)
		{
			document.getElementById("i2").innerHTML = "CART IS EMPTY";
		}
		}
		xhttp.open("POST", "../model/getCart.php");
		xhttp.send();
}