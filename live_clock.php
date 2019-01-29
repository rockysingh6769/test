<html>
<head>
<title>Live Clock</title>
</head>
<body onload=display_ct();>


<form name="Tick">
<input type="text" size="12" name="Clock">
<span id='ct' ></span>
</form>

</body>
<script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() 
{
  var x = new Date()
  var hours=x.getHours();
  var minutes=x.getMinutes();
  var seconds=x.getSeconds();
  //var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getYear(); 
  //var x1 = x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds();
  if(hours>11)
  {   dn="PM"
      hours=hours-12
  }
  if (hours==0)
      hours=12
  if (minutes<=9)
      minutes=minutes
  if (seconds<=9)
      seconds=seconds
  document.Tick.Clock.value=
  hours+":"+minutes+":"+seconds+" "+dn;
  document.getElementById('ct').innerHTML = hours+":"+minutes+":"+seconds+" "+dn;
  display_c();
}
</script>
</html>