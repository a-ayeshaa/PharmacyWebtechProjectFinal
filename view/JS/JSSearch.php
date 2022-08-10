<style>
  table,th,td
  {
    border: 2px solid #d27979;
  }
  th
{
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
  background-color: #d27979;
  color: white;
}
</style>
<div class="search">
  <script>
      function showResult(str) {
        var xhttp;    
        if (str == "") {
          document.getElementById("txtHint").innerHTML = "";
          return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "../model/getOrder.php?q="+str, true);
        xhttp.send();
      }
  </script>
</div>