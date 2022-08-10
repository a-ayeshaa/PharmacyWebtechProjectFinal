
	<div class="Cart">
		<button id="hide" type="button" onclick="getCart();"><b>VIEW CART</b></button>
		<div class="cart">
		<table id="t1">
			<tbody id="i2"></tbody>
		</table>
		<script>
			function getCart()
			{

				const xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {

					if (this.readyState === 4 && this.status === 200) {
							const json = JSON.parse(this.responseText);
							
							let x = "";
							x += "<tr>" +
							"<td>" + "Order Number" + "</td>" + 
							"<td>" + "MedicineCode" + "</td>" +   
							"<td>" + "MedicineName" + "</td>" + 
							"<td>" + "MedicinePrice" + "</td>" +   
							"<td>" + "Quantity" + "</td>" +
							"<td>" + "Total Price" + "</td>" + 
							"</tr>"
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

							x+= "GrandTotal = " + <?php echo $_COOKIE[$_SESSION['username']] ?> ;

							document.getElementById("i2").innerHTML = x;
							console.log(x);
						}
					else if (this.status === 404)
					{
						document.getElementById("i2").innerHTML = "CART IS EMPTY";
					}
					}
					xhttp.open("GET", "../model/getCart.php");
					xhttp.send();
			}
		</script>
		</div>
	</div>