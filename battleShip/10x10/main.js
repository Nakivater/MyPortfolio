
class Ship{
    name;
    health;
    orientation;
    hit=0;
    #mass=[];
    constructor(name,health,orientation) {
        this.name=name;
        this.health=health;
        this.orientation=orientation;
    }
battle(player,height,width){

        if(this.hit<this.health) {
            if (this.orientation == 0) {
                //console.log(height,this.#mass[0]);
                for (let i = 0; i < this.health; i++) {
                    if (height == this.#mass[0]+i && this.#mass[1] == width) {
                        $("#result").text("Попадание");
this.hit++;
break;
                    }
                }
            } else if (this.orientation == 1) {
                for (let i = 0; i < this.health; i++) {
                    if (height == this.#mass[0] && this.#mass[1] + i == width) {
                        $("#result").text("Попадание");
                        this.hit++;
                        break;
                    }
                }
            }
        }
        if(this.hit==this.health)
        {
            $("#result").text("Уничтожен "+ this.name);
            this.hit++;
        }

}
generate(){

}
setMass(x,y){
        this.#mass.push(x,y);
}
getMass(){
        return this.#mass;
}
}
class Player{
    name;
    #shots=0;
    constructor(name) {
        this.name=name;
    }
    shot(){
this.#shots+=1;
    }
}

$(function (){
    $("#start").on("click",function () {
        $("#start").hide();
        let ships = [new Ship("Bismark", 4, random(0, 1)), new Ship("Destroyer", 3, random(0, 1)), new Ship("Destroyer", 3, random(0, 1)), new Ship("Ship", 2, random(0, 1)), new Ship("Ship", 2, random(0, 1)),
            new Ship("Ship", 2, random(0, 1)), new Ship("Boat", 1, random(0, 1)), new Ship("Boat", 1, random(0, 1)), new Ship("Boat", 1, random(0, 1)), new Ship("Boat", 1, random(0, 1))];

        let field = generate(ships);
        let player = new Player("Vasya");
        console.log(field);
        //changeField(field);
        fire(ships, field, player);
        viewDestroy(ships);
        if(!time)
            console.log("false");
    });
});
function fire(ships,field,player)
{
    for (let i=0;i<10;i++){
        for (let y=0;y<10;y++){
            $("#img"+i+y).on("click",function (){
                if(field[i][y]==0){
                    $("#result").text("Мимо"+ this.name);
                    $("#img" + i + y).attr("src", "../images/2.png");
                } else if(field[i][y]==1) {
                    $("#img" + i + y).attr("src", "../images/3.png");
                    for (let x = 0; x < ships.length; x++)
                    {
                        ships[x].battle(player,i,y)
                    }
                    viewDestroy(ships);
                }
            });
        }
    }
}
function random(min,max){
    return Math.round(min+Math.random()*(max-min));
}

function generate(ships) {
    let field = [];
    for (let i = 0; i < 10; i++) {
        field.push([0, 0, 0, 0, 0, 0, 0, 0, 0, 0]);

        for(let y=0;y<10;y++){
            $("#img"+i+y).attr("src", "../images/field.png");
        }
    }
    for (let i = 0; i < ships.length; i++) {
        let status = true;
let n=0;
        while (status) {
            if(n==1000)
                status=false;
            n++
            let ship = [];
            let height = random(1, 9 - ships[i].health);
            let width = random(1, 9 - ships[i].health);
                /*      if(height==9&&
                field[height][width-1]==0&&field[height][width]==0&&field[height][width+1]==0&&
                field[height-1][width-1]==0&&field[height-1][width]==0&&field[height-1][width+1]==0)
            {
                ship=generatev2(field,height,width,ship,ships[i].orientation,ships[i].health);
            } else
                if(width==9&&
                    field[height][width-1]==0&&field[height][width]==0&&
                    field[height-1][width-1]==0&&field[height-1][width]==0&&
                    field[height+1][width-1]==0&&field[height+1][width]==0)
                {
                    ship=generatev2(field,height,width,ship,ships[i].orientation,ships[i].health);
                }
                else
if(field[height][width-1]==0&&field[height][width]==0&&field[height][width+1]==0&&
    field[height-1][width-1]==0&&field[height-1][width]==0&&field[height-1][width+1]==0&&
    field[height+1][width-1]==0&&field[height+1][width]==0&&field[height+1][width+1]==0)
{
    ship=generatev2(field,height,width,ship,ships[i].orientation,ships[i].health);
}*/
            if(field[height][width-1]==0&&field[height][width]==0&&field[height][width+1]==0&&
                field[height-1][width-1]==0&&field[height-1][width]==0&&field[height-1][width+1]==0&&
                field[height+1][width-1]==0&&field[height+1][width]==0&&field[height+1][width+1]==0)
            {
                ship=generatev2(field,height,width,ship,ships[i].orientation,ships[i].health);
            }
            if(ship.length==ships[i].health) {
                console.log("Gen");
                status = false
                if (ships[i].orientation == 0){
                    for (let j=0;j<ship.length;j++){
                        field[height+j][width]=1;
                    }
                } else
                {
                    for (let h=0;h<ship.length;h++){
                        field[height][width+h]=1;
                    }
                }
                //console.log(height,width);
                ships[i].setMass(height,width);
            }


        }
    }
    return field;
}

function generatev2(field,height,width,ship,orientation,health){
    //console.log(height,width,ship,orientation,health);
    if(health==1)
    {
        if(orientation==0)
        ship.push(height);
        else
            ship.push(width);
    }
    else if(orientation==0){
        for(let i=0;i<health;i++){
           /* if(height==9&&
                field[height+i][width-1]==0&&field[height+i][width]==0&&field[height+i][width+1]==0&&
                field[height-1+i][width-1]==0&&field[height-1+i][width]==0&&field[height-1+i][width+1]==0)
            {
ship.push(height+i);
            } else
            if(width==9&&
                field[height+i][width-1]==0&&field[height+i][width]==0&&
                field[height-1+i][width-1]==0&&field[height-1+i][width]==0&&
                field[height+1+i][width-1]==0&&field[height+1+i][width]==0)
            {
ship.push(height+i);
            }
            else*/
            if(field[height+i][width-1]==0&&field[height+i][width]==0&&field[height+i][width+1]==0&&
                field[height-1+i][width-1]==0&&field[height-1+i][width]==0&&field[height-1+i][width+1]==0&&
                field[height+1+i][width-1]==0&&field[height+1+i][width]==0&&field[height+1+i][width+1]==0)
            {
ship.push(height+i);
            }
        }
    }
   else {
        for(let i=0;i<health;i++){
            /*if(height==9&&
                field[height][width-1+i]==0&&field[height][width+i]==0&&field[height][width+1+i]==0&&
                field[height-1][width-1+i]==0&&field[height-1][width+i]==0&&field[height-1][width+1+i]==0)
            {
ship.push(width+i);
            } else
            if(width==9&&
                field[height][width-1+i]==0&&field[height][width+i]==0&&
                field[height-1][width-1+i]==0&&field[height-1][width+i]==0&&
                field[height+1][width-1+i]==0&&field[height+1][width+i]==0)
            {
ship.push(width+i);
            }
            else*/
            if(field[height][width-1+i]==0&&field[height][width+i]==0&&field[height][width+1+i]==0&&
                field[height-1][width-1+i]==0&&field[height-1][width+i]==0&&field[height-1][width+1+i]==0&&
                field[height+1][width-1+i]==0&&field[height+1][width+i]==0&&field[height+1][width+1+i]==0)
            {
ship.push(width+i);
            }
        }
    }

    return ship;
}




       function changeField(field) {
           for (let i = 0; i < field.length; i++) {
               for (let y = 0; y < field[i].length; y++) {
                   if (field[i][y] == 1) {
                       $("#img" + i + y).attr("src", "../images/2.png");
                   }
               }
           }
       }

       function viewDestroy(ships){
    let n=0;
    for (let i=0;i<ships.length;i++){
        if(ships[i].health<ships[i].hit)
            n++;
    }
    if(n==10) {
        $("#result1").text("Уничтожены все корабли");
        game==false;
    }
    else
           $("#result1").text("Уничтожено "+n+" кораблей");
       }

