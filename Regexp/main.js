window.onload=function ()
{
//https://regex101.com/
var stroka="Привет Вован, ка дела баратан-ВОВАН?";
/*document.getElementById("text").innerHTML=stroka;
if(stroka.toLowerCase().indexOf("вован")!=-1)
    alert("Имя Вован существует")*/
//var regexp=/Вован/gi;
//SEARCH
/*
if(stroka.search(regexp)!=-1)
 //Функция search ищет в строке совпаения регулярному выражению, которое получает в виде параметра, и если совпадение есть функция возвращает индекм с которого начинается совпадение, если нет,
    //то функция выбирает само значение и сообщает о наличии.
    alert("Вован найден")
*/
//MATCH
/*var res=stroka.match(regexp);//Функция match применяет к строке регулярное выражение и каждое совпадение заносит в массив который и получаем в результате.
    alert(res.length);
    for(var i=0;i<res.length;i++)
    {
        document.write(res[i]+"<br>")
    }*/
//TEST
    /*var stroka1="Моя банковская карта 4192-5471-3842-1728, а карточка моего друга 4192-5471-3842-1729, это хорошо и заслуживает оценки 5555!";
    //var regexp=/4192-5471-3842-1728/;
   // var  regexp=/\d\d\d\d-\d\d\d\d-\d\d\d\d-\d\d\d\d/g;
    //Модификация
    var regexp=/\d{4}-\d{4}-\d{4}-\d{4}/g;//Символьный класс заменяет любой символ на число от 1 до 9, {4}-количество повторений символтного класса.
    var res=stroka1.match(regexp);
    alert(res.length);
    for(var i=0;i<res.length;i++)
    {
        document.write(res[i]+"<br>")
    }*/
    //TELEPHONE
    /*var text="Мой телефон +38(000)-123-45-67, а телефон преподователя +38(095)-438-27-45, надо позвонить";
    var regexp=/\+\d{2}\(\d{3}\)-\d{3}-\d{2}-\d{2}/g;//Спец символы типа:+,() и тп, необходимо экранировать поставив \.
    var res=text.match(regexp);
    alert(res.length)
    for(var i=0;i<res.length;i++)
    {
        document.write(res[i]+"<br>")
    }*/
    var textdomen="Мои домены super.ua, syper.kiev.ua, rozetka.com.ua, pricell@ua, www.article.com.ua," +
        "http:\\articles.in.ua, https:www.news23-57.kiev.ua, http:reno.ua, https:\\hleb.com.ua, vse.bivaet.i.ua, SLON.com.ua, giEaF123.city.com.ua, google.com, putin-gad.ru и многие друшие сайты.";
var regexp=/(https?:\\\\)?(\.www)?[a-z0-9-.]{1,1000}(\.[a-z]{1,8})?\.ua/gi;
var res=textdomen.match(regexp);
var num=1;
for(var i=0;i<res.length;i++)
{
 document.write(num+" "+res[i]+"<br>");
num++
}
};