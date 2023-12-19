window.onload=function () {
  statusTest=false;
  document.getElementById("test").onblur=function ()
  {
  statusTest=checkTest();
  alert("Status "+statusTest);
  }
};
function checkTest()
{
var status=false;
var test=document.getElementById("test").value;
var regtest=/^(\d{1,4})?nik(\d{1,4})?$/i;
if(test.match(regtest)!=null)
{
    status=true;
}
else
{
    status=false;
}
return status;
}
