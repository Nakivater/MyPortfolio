class Ship{
    name;
    health;
    #mass=[];
    constructor(name,health) {
        this.name=name;
        this.health=health;
    }
    battle(player) {
        let cor = player.shot()
        console.log(cor);
        let hit = false;
        if (cor == 0) {
            $("#show").html("Неккоректные координаты, но выстрел произведён");
        } else {
            for (let i = 0; i < this.#mass.length; i++) {
                if (this.#mass[i] == cor) {
                    hit = true;
                    this.#mass.splice(i, 1);
                }
            }
            if ($("#field>#img" + cor).attr("src") == "images/3.png"){}
            else
            {
            if (hit) {
                $("#field>#img" + cor).attr("src", "images/3.png")
                if (this.#mass == 0)
                    $("#show").html("Убил");
                else
                    $("#show").html("Попадание");
            }
            else
                {
                    $("#field>#img" + cor).attr("src", "images/2.png")
                    $("#show").html("Мимо");
                }
            }
        }
    }
getMass(){
        return this.#mass;
}
    generate() {
        let rand=random(1,8);
        for (let i=0;i<this.health;i++)
        {
            this.#mass.push(rand+i)
        }

    console.log(this.#mass);
    }
}
class Player{

    name;
    #shots=0;
    constructor(name) {
        this.name=name;
    }
    getShots()
    {
        return this.#shots;
    }
shot(){
let cor=$("#coordinates").val();
if(isNaN(cor)==true||cor>10) {
    cor=0;
}
this.#shots+=1;
return cor;
    }
}
$(function (){
    generationField();
    console.log();
    let shipR4=new Ship("Bismark",3);
    shipR4.generate();
let player=new Player("Vasya");
$("#shot").on("click",function (){
    shipR4.battle(player)
    console.log(player.getShots());
});

});
/*function generationField(){
    for (let i=0;i<10;i++){
        let img=document.createElement("img");
        img.setAttribute("id","img"+i+1);
        img.setAttribute("src","images/field.png");
        img.setAttribute("width","50px");
        let td=document.createElement("td");
        td.append(document.createTextNode(i+1));
        document.getElementById("tr1").append(td);
        //$("img").style("border","black solid 1px");
        document.getElementById("field").append(img);
    }
}*/
function generationField(){
    for (let i=0;i<10;i++){
        let img=$("<img>");
        img.attr("id","img"+(i+1));
        //console.log(img.attr("id"));
        img.attr("src","images/field.png");
        img.attr("width","50px");
        let td=$("<td>");
        td.text(i+1);
        $("#tr1").append(td);
        img.style="border: black solid 1px"
        $("#field").append(img);
    }
}
function random(min,max){
    return Math.round(min+Math.random()*(max-min));
}