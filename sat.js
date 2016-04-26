function startTime()
{
var vreme=new Date();
var c=vreme.getHours();
var m=vreme.getMinutes();
var s=vreme.getSeconds();
// dodaje nulu ispred brojeva manjih od 10
m=checkTime(m);
s=checkTime(s);
document.getElementById('sat').innerHTML=c+":"+m+":"+s;
t=setTimeout('startTime()',500);
}

function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}
