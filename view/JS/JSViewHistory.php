<style>
table
{
	border: 1px  solid #ffbb99;
	padding: 8px;
	text-align: left;
	background-color: #d27979;
	color: white;
	width: 50%;
}

td
{
	border: 2px solid #ffbb99;
}

</style>

<div class="History">
	<button id="hide" type="button" onclick="getHistory();"><b>VIEW HISTORY</b></button>
	<br><br>
	<div class="history">
	<table>
		<tbody id="i4"></tbody>
	</table>
	<script>
		function getHistory()
		{

			const xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {

				if (this.readyState === 4 && this.status === 200) {
						const json = JSON.parse(this.responseText);
						
						let x = "";
						x += "<tr>" +
						"<td>" + "OrderID" + "</td>" + 
						"<td>" + "UserName" + "</td>" + 
						"<td>" + "MedicineCodes" + "</td>" +   
						"<td>" + "Quantities" + "</td>" + 
						"<td>" + "GrandTotal" + "</td>" +   
						"</tr>"
						for (let i = 0; i < json.length; i++) {
							x += "<tr>" + 
						"<td>" + json[i].OrderID + "</td>" + 
						"<td>" + json[i].username + "</td>" + 
						"<td>" + json[i].MedicineCodes + "</td>" +   
						"<td>" + json[i].Quantities + "</td>" + 
						"<td>" + json[i].GrandTotal + "</td>" +   
						"</tr>"
						}
						document.getElementById("i4").innerHTML = x;
						console.log(x);
					}
				else if (this.status === 404)
				{
					document.getElementById("i4").innerHTML = "CART IS EMPTY";
				}
				}
				xhttp.open("GET", "../model/getHistory.php");
				xhttp.send();
		}
	</script>
	</div>
</div>