window.onload=function () {
    //https://regex101.com/
    var statusName=false;
   var statusLogin=false;
    var statusPassword=false;
    var statusPassword1=false;
    var statusTel=false;
    var statusKod=false;
    var statusPas1=false;
    var statusPas2=false;
var statusEmail=false;
    var statusDomen=false;
document.getElementById("name").onblur=function () {
    statusName=checkName();
};
document.getElementById("login").onblur=function () {
    statusLogin=checkLogin();
};
document.getElementById("password").onblur=function () {
    statusPassword=checkPassword();
};
document.getElementById("password1").onblur=function () {
    statusPassword1=checkPassword1();
};
document.getElementById("tel").onblur=function () {
    statusTel=checkTel();
};
document.getElementById("kod").onblur=function () {
    statusKod=checkKod();
};
document.getElementById("pas1").onblur=function () {
    statusPas1=checkPas1();
};
document.getElementById("pas2").onblur=function () {
    statusPas2=checkPas2();
};
document.getElementById("email").onblur=function () {
    statusEmail=checkEmail();
};
document.getElementById("domen").onblur=function () {
    statusDomen=checkDomen();
};
document.getElementById("register").onclick=function (){
    submit(statusName,statusLogin,statusPassword,statusPassword1,statusTel,statusKod,statusPas1,statusPas2,statusEmail,statusDomen);
};
};
function submit(statusName,statusLogin,statusPassword,statusPassword1,statusTel,statusKod,statusPas1,statusPas2,statusEmail,statusDomen)
{
    if(statusName&&statusLogin&&statusPassword&&statusPassword1&&statusTel&&statusKod&&statusPas1&&statusPas2&&statusEmail&&statusDomen)
    {
       /* document.getElementById("ssubmit").innerHTML="";
        document.getElementById("submit").removeAttribute("class");
        document.getElementById("submit").setAttribute("class","inputsucsess");*/
       document.getElementById("submit").submit();
    }
    else
    {
        document.getElementById("ssubmit").innerHTML="Неверно заполнена форма";
        document.getElementById("submit").removeAttribute("class");
        document.getElementById("submit").setAttribute("class","inputerror")
    }
}
function checkName() {
    var status = false;
    var name = document.getElementById("name").value;
    var regbyname=/^([а-я]{3,12})$/i;
    if(name.match(regbyname)!=null)
    {
        status=true;
        document.getElementById("sname").innerHTML="";
        document.getElementById("name").removeAttribute("class");
        document.getElementById("name").setAttribute("class","inputsucsess");
    }
    else
    {
        status=false;
        document.getElementById("sname").innerHTML="Некоректно введено название имени";
        document.getElementById("name").removeAttribute("class");
        document.getElementById("name").setAttribute("class","inputerror");
    }
    return status;
}
///////////////////////////////////////////////////////////////////////////////////
function checkLogin() {
var status=false;
var login=document.getElementById("login").value;
var regbylogin=/^([a-z]{4,12})$/i;
if(login.match(regbylogin)!=null)
{
    status=true;
document.getElementById("slogin").innerHTML="";
document.getElementById("login").removeAttribute("class");
    document.getElementById("login").setAttribute("class","inputsucsess");
}
else
{
 status=false;
 document.getElementById("slogin").innerHTML="Некоректно введен логин";
 document.getElementById("login").removeAttribute("class");
 document.getElementById("login").setAttribute("class","inputerror");
}
return status;
}
/////////////////////////////////////////////////////////////////////////////////////
function checkPassword() {
    var status = false;
    var password = document.getElementById("password").value;
    var regbypas = /^\d{4}$/i;
    if (password.match(regbypas) != null) {
        status = true;
        document.getElementById("spassword").innerHTML = "";
        document.getElementById("password").removeAttribute("class");
        document.getElementById("password").setAttribute("class", "inputsucsess");
    }
    else {
        status = false;
        document.getElementById("spassword").innerHTML = "Некоректно введен пароль";
        document.getElementById("password").removeAttribute("class");
        document.getElementById("password").setAttribute("class", "inputerror");
    }
    return status;
}
////////////////////////////////////////////////////////////////////////////////////
function checkPassword1() {
    var status = false;
    var password= document.getElementById("password").value;
    var password1 = document.getElementById("password1").value;
    if(password==password1) {
        var regbypas1 = /^\d{4}$/i;
        if (password1.match(regbypas1) != null) {
            status = true;
            document.getElementById("spassword1").innerHTML = "";
            document.getElementById("password1").removeAttribute("class");
            document.getElementById("password1").setAttribute("class", "inputsucsess");
        }
        else {
            status = false;
            document.getElementById("spassword1").innerHTML = "Некоректно введен второй пароль";
            document.getElementById("password1").removeAttribute("class");
            document.getElementById("password1").setAttribute("class", "inputerror");
        }
        return status;
    }
    else
    {
        status = false;
        document.getElementById("spassword1").innerHTML = "Пароли не совпадают";
        document.getElementById("password1").removeAttribute("class");
        document.getElementById("password1").setAttribute("class", "inputerror");
    }
}
///////////////////////////////////////////////////////////////////////////////////////
function checkTel() {
    var status=false;
    var tel=document.getElementById("tel").value;
    var regbytel=/\+38\(\d{3}\)-\d{3}-\d{2}-\d{2}/gi;
    if(tel.match(regbytel)!=null)
    {
        status=true;
        document.getElementById("stel").innerHTML="";
        document.getElementById("tel").removeAttribute("class");
        document.getElementById("tel").setAttribute("class","inputsucsess")
    }
    else
    {
        status=false;
        document.getElementById("stel").innerHTML="Некоректно введен телефон";
        document.getElementById("tel").removeAttribute("class");
        document.getElementById("tel").setAttribute("class","inputerror")
    }
    return status;
}
/////////////////////////////////////////////////////////////////////////////////////
function checkKod() {
    var status=false;
    var kod=document.getElementById("kod").value;
    var regbykod=/^\d{16}$/i;
    if(kod.match(regbykod)!=null)
    {
        status=true;
        document.getElementById("skod").innerHTML="";
        document.getElementById("kod").removeAttribute("class");
        document.getElementById("kod").setAttribute("class","inputsucsess")
    }
    else
    {
        status=false;
        document.getElementById("skod").innerHTML="Некоректно введен индефикационый код";
        document.getElementById("kod").removeAttribute("class");
        document.getElementById("kod").setAttribute("class","inputerror")
    }
    return status;
}
/////////////////////////////////////////////////////////////////////////////////////
function checkPas1() {
    var status=false;
    var pas1=document.getElementById("pas1").value;
    var regbypas1=/[a-zA-Z]{2}/;
    if(pas1.match(regbypas1)!=null)
    {
        status=true;
        document.getElementById("spas1").innerHTML="";
        document.getElementById("pas1").removeAttribute("class");
        document.getElementById("pas1").setAttribute("class","inputsucsess")
    }
    else
    {
        status=false;
        document.getElementById("spas1").innerHTML="Некоректно введена серия паспорта";
        document.getElementById("pas1").removeAttribute("class");
        document.getElementById("pas1").setAttribute("class","inputerror")
    }
    return status;
}
/////////////////////////////////////////////////////////////////////////////////////
function checkPas2() {
    var status=false;
    var pas2=document.getElementById("pas2").value;
    var regbypas2=/^\d{6}$/i;
    if(pas2.match(regbypas2)!=null)
    {
        status=true;
        document.getElementById("spas2").innerHTML="";
        document.getElementById("pas2").removeAttribute("class");
        document.getElementById("pas2").setAttribute("class","inputsucsess")
    }
    else
    {
        status=false;
        document.getElementById("spas2").innerHTML="Некоректно введен номер паспорта";
        document.getElementById("pas2").removeAttribute("class");
        document.getElementById("pas2").setAttribute("class","inputerror")
    }
    return status;
}
/////////////////////////////////////////////////////////////////////////////////////
function checkEmail() {
    var status=false;
    var email=document.getElementById("email").value;
    var regbyemail=/([A-Za-z0-9-._]{1,1000})@_?([a-zA-Z]{1,100})?(\.[a-z]{2,8})?/gi;
    if(email.match(regbyemail)!=null)
    {
        status=true;
        document.getElementById("semail").innerHTML="";
        document.getElementById("email").removeAttribute("class");
        document.getElementById("email").setAttribute("class","inputsucsess")
    }
    else
    {
        status=false;
        document.getElementById("semail").innerHTML="Некоректно введен email";
        document.getElementById("email").removeAttribute("class");
        document.getElementById("email").setAttribute("class","inputerror")
    }
    return status;
}
/////////////////////////////////////////////////////////////////////////////////////
function checkDomen() {
    var status=false;
    var domen=document.getElementById("domen").value;
    var regbydomen=/(https?:\\\\)?(\.www)?[a-z0-9-.]{1,1000}(\.[a-z]{1,8})?/gi;
    if(domen.match(regbydomen)!=null)
    {
        status=true;
        document.getElementById("sdomen").innerHTML="";
        document.getElementById("domen").removeAttribute("class");
        document.getElementById("domen").setAttribute("class","inputsucsess")
    }
    else
    {
        status=false;
        document.getElementById("sdomen").innerHTML="Некоректно введен домен";
        document.getElementById("domen").removeAttribute("class");
        document.getElementById("domen").setAttribute("class","inputerror")
    }
    return status;
}
/////////////////////////////////////////////////////////////////////////////////////
