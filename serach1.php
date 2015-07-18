<!DOCTYPE HTML>
<html>
<head>
	<title>
		Ajax Search
	</title>
</head>
<body>
	<input type="text" name="search" id="search" autocomplete="on" placeholder="Enter text to search" />
	<div id="rest" style="height:100%; width:100%;"></div>
	<script type="text/javascript">
	var i=document.getElementById('search');
	i.addEventListener("keyup",search(i),false);
	function search (Id) {
		if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else { // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                    document.getElementById("rest").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","you.txt", true);
            xmlhttp.send();
        }
	</script>
</body>
</html>