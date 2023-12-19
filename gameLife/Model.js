/*
Виджет
1 Поле разделенно на клетки. Каждая ячейка является возможным местом "клетки".

Модель
1 Связь с виджетом и контроллером

Контроллер
1 Создание правил игры:
В начале игрок указывает конфигурацию клеток(живые\мертвые) в количестве, распределение рандомно.
Существует кнопка Старт\Пауза + Следующее поколение + Очистить.
При переходе:
Происходит изменение состояний клеток => по правилам.
Распределение живых клеток в начале игры называется первым поколением. Каждое следующее поколение рассчитывается на основе предыдущего по таким правилам:
!!!!!!!!в пустой (мёртвой) клетке, рядом с которой ровно три живые клетки, зарождается жизнь;
!!!!!!!!если у живой клетки есть две или три живые соседки, то эта клетка продолжает жить;
!!!!!!!!в противном случае, если соседей меньше двух или больше трёх, клетка умирает («от одиночества» или «от перенаселённости»).
Конец
на поле не останется ни одной «живой» клетки
конфигурация на очередном шаге в точности (без сдвигов и поворотов) повторит себя же на одном из более ранних шагов (складывается периодическая конфигурация)
при очередном шаге ни одна из клеток не меняет своего состояния (складывается стабильная конфигурация; предыдущее правило, вырожденное до одного шага назад)
 */

let height = 100, width = 100;
let myGreed = [], nextGreed = [];
let statusFGen=true;
let base = 60;
let clockTimer, dataObj, dH, dM, dS;
let out = "";
let h = 1, m = 1, tM = 1, s = 0, tS = 0, mS = 0, init = 0;
let statusGo=false;
let msdat=0;
let data1=0,data2=0;
let greedPattern=[[0,0,0,0,0],[0,0,1,0,0],[0,0,0,1,0],[0,1,1,1,0],[0,0,0,0,0]];
dataObj = new Date();
$("#start").on("click",function (){
    if(statusFGen)
    {


        if($("#out").val()=="Standard") {
            firstGen();
            Draw();
alert("Standard!");
        }else if($("#out").val()=="User") {
            loadPattern(greedPattern);
            Draw();
        }
        statusFGen=false;
    }
if(statusGo)
{

    $("#start").html("Start");
    statusGo=false;
}
    else
{
    $("#start").html("Stop");
    statusGo=true;
}
    StartStop();
//console.log($("#out").)



});
$("#reset").on("click",function (){
    $("#start").html("Start");
    statusFGen=true;
    $("#block").empty();
ClearClock();
});

function countNeighbor(greed, row, collum) {
    let count = 0;
    if (row - 1 >= 0) {
        count = count + greed[row - 1][collum];
    }
    if (row - 1 >= 0 && collum - 1 >= 0) {
        count += greed[row - 1][collum - 1];
    }
    if (row - 1 >= 0 && collum + 1 < width) {//Collum +1 = greed[row-1].length || width
        count += greed[row - 1][collum + 1];
    }
    if (collum - 1 >= 0) {
        count += greed[row][collum - 1];
    }
    if (collum + 1 < width) {
        count += greed[row][collum + 1];
    }
    if (row + 1 < height && collum - 1 >= 0) {
        count += greed[row + 1][collum - 1];
    }
    if (row + 1 < height) {
        count += greed[row + 1][collum];
    }
    if (row + 1 < height && collum + 1 < width) {
        count += greed[row + 1][collum + 1];
    }
    return count;
}

function firstGen() {
    for (let i = 0; i < height; i++) {
        myGreed[i]=[];
        for (let y = 0; y < width; y++) {
            myGreed[i][y] = mathRandom();
            //console.log(myGreed[i][y]);
        }
    }
}

function mathRandom() {
    return Math.floor(Math.random() * (2));
}

function nextGen() {
    for (let i = 0; i < myGreed.length; i++) {
nextGreed[i]=[];
        for (let y = 0; y < myGreed[i].length; y++) {
            let ceil = 0;
            let count = countNeighbor(myGreed, i, y);
            if (myGreed[i][y] == 0) {
                if (count == 3)
                    ceil = 1;
            }
            if (myGreed[i][y] == 1) {
                if (count == 2 || count == 3)
                    ceil = 1
            }

            nextGreed[i][y] = ceil;
            //console.log("Ряд:" + i + "<br> Место:" + y + "<br>Old value:" + myGreed[i][y] + "<br>New value:" + nextGreed[i][y]);
        }
    }
    let temp = myGreed;
    myGreed = nextGreed;
    nextGreed = temp;
}

function Draw() {
    $("#block").empty();
    for (let i = 0; i < height; i++) {
        for (let y = 0; y < width; y++) {
            if (y == 0)
                $("#block").append("<td>");
            if (y == 9) {
                $("#block").append("</td><br>");
            }
            if (myGreed[i][y] == 1)
                $("#block").append("<p class='greedAlive'></p>");
            else
                $("#block").append("<p class='greedDead'></p>");
        }
    }

}

function StartTime()
{
    //console.log(s);
    if(s!=5) {
        let data = new Date();
        let time = (data.getTime() - dataObj.getTime()) - (s * 1000);
        if (time > 999) {
            s += 1;
        }
        if (s >= (m * base)) {
            tS = 0;
            m++;
        } else {
            tS = parseInt((mS / 100) + s);
            if (tS >= base) {
                tS = tS - ((m - 1) * base);
            }
        }
/////////////////////////////
        if (m > (h * base)) {
            tM = 1;
            h++;
        } else {
            tM = parseInt((mS / 100) + m);
            if (tM >= base) {
                tM = tM - ((h - 1) * base);
            }
        }
        ///////////////////////////
        mS = Math.round(time / 10);
        if (mS > 99) {
            mS = 0;
        }
        if (mS == 0) {
            mS = '00';
        }
        if (mS > 0 && mS <= 9) {
            mS = '0' + mS;
        }
        tS=parseInt(tS)+msdat;
        if (tS > 0) {
            dS = tS;
            if (tS < 10) {
                dS = '0' + tS;
            }
        } else {
            dS = '00';
        }
        ///////////////////////
        dM = tM - 1;
        if (dM > 0) {
            if (dM < 10) {
                dM = '0' + dM;
            }
        } else {
            dM = '00';
        }
        //////////////////////
        dH = h - 1;
        if (dH > 0) {
            if (dH < 10) {
                dH = '0' + dH;
            }
        } else {
            dH = '00';
        }
        //////////////////////
        out = dH + ':' + dM + ':' + dS + 's';
        document.getElementById("rezult").innerHTML = out;
        clockTimer = setTimeout(function () {
            StartTime();
        }, 1);
    }
    else
    {
        nextGen();
        Draw();
        ClearClock();
        StartStop();
    }
}
function StartStop()
{
    dataObj=new Date();
    if(init==0)
    {
        StartTime();
        data2=new Date();
        data2=data2.getTime();
        init=1;
    }
    else
    {
        data1=new Date();
        data1=data1.getTime();
        clearTimeout(clockTimer);
        init=0;
        //console.log(data2);
    }
    if((data2-data1)>0&&data1!=0){
        msdat=(data2-data1)/1000;
        msdat=Math.round(msdat);
        console.log(msdat);
    }
    else
    msdat=0;
}
function ClearClock(){
    clearTimeout(clockTimer);
    //let h=1,m=1,tM=1,s=0,tS=0,mS=0,init=0;
    h=1;
    m=1;
    tM=1;
    s=0;
    tS=0;
    mS=0;
    init=0;
    out='00:00:00s';
    document.getElementById("rezult").innerHTML=out;
}


function loadPattern(pattern,x=0,y=0){
    for(let i=0;i<height;i++)
    {
        myGreed[i]=[];
        for(let z=0;z<width;z++)
        {
            myGreed[i][z]=0;
        }
    }
    let r=x;
    let c=y;
    for(let row=0;row<pattern.length;row++){
        console.log("---");
        for(let col=0;col<pattern[row].length;col++){
            console.log(pattern[row][col]);

            myGreed[r][c]=pattern[row][col];
            c++;
        }
        r++;
    }
    console.log(myGreed);
}