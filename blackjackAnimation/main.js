$(function () {
function card(name,suit,value) {
    this.name=name;
    this.suit=suit;
    this.value=value;}
    var desc=[
    new card('Ace','Clubs',11),
        new card('King','Clubs',10),
        new card('Queen','Clubs',10),
        new card('Jack','Clubs',10),
        new card('Ten','Clubs',10),
        new card('Nine','Clubs',9),
        new card('Eight','Clubs',8),
        new card('Seven','Clubs',7),
        new card('Six','Clubs',6),
        new card('Five','Clubs',5),
        new card('Four','Clubs',4),
        new card('Three','Clubs',3),
        new card('Two','Clubs',2),
        new card('Ace','Diamonds',11),
        new card('King','Diamonds',10),
        new card('Queen','Diamonds',10),
        new card('Jack','Diamonds',10),
        new card('Ten','Diamonds',10),
        new card('Nine','Diamonds',9),
        new card('Eight','Diamonds',8),
        new card('Seven','Diamonds',7),
        new card('Six','Diamonds',6),
        new card('Five','Diamonds',5),
        new card('Four','Diamonds',4),
        new card('Three','Diamonds',3),
        new card('Two','Diamonds',2),
        new card('Ace','Hearts',11),
        new card('King','Hearts',10),
        new card('Queen','Hearts',10),
        new card('Jack','Hearts',10),
        new card('Ten','Hearts',10),
        new card('Nine','Hearts',9),
        new card('Eight','Hearts',8),
        new card('Seven','Hearts',7),
        new card('Six','Hearts',6),
        new card('Five','Hearts',5),
        new card('Four','Hearts',4),
        new card('Three','Hearts',3),
        new card('Two','Hearts',2),
        new card('Ace','Spades',11),
        new card('King','Spades',10),
        new card('Queen','Spades',10),
        new card('Jack','Spades',10),
        new card('Ten','Spades',10),
        new card('Nine','Spades',9),
        new card('Eight','Spades',8),
        new card('Seven','Spades',7),
        new card('Six','Spades',6),
        new card('Five','Spades',5),
        new card('Four','Spades',4),
        new card('Three','Spades',3),
        new card('Two','Spades',2)
    ];
var used_card=new Array();
    var hand={
        card:new Array(),
        current_total:0,
        sumCardTotal:function () {
            this.current_total=0;
            for(var i=0;i<this.card.length;i++)
            {
                var c=this.card[i];
                this.current_total+=c.value;
            }
            $("#hdrTotal").html("Total:"+this.current_total);
            if(this.current_total>21)
            {
                $("#bthStick").trigger("click");
                $("#hdrResult").html("Bust");
                $("#imgResult").attr("src","images/x2.png");
                $("#bthRestart").toggle();
                $("#bthHit").unbind("click");
            }
            else if(this.current_total==21)
            {
                $("#bthStick").trigger("click");
                $("#hdrResult").html("BlackJack");
                $("#imgResult").attr("src","images/check.png");
                $("#bthRestart").toggle();
                $("#bthHit").unbind("click");
            }
            else if(this.current_total<21&&this.card.length==5)
            {
                $("#bthStick").trigger("click");
                $("#hdrResult").html("BlackJack 5 cards");
                $("#imgResult").attr("src","images/check.png");
                $("#bthRestart").toggle();
                $("#bthHit").unbind("click");
            }
        }
    };
//hit();
function deal() {
    for(var i=0;i<2;i++)
    hit();
}
    function gerRand(num){
        var my_num=Math.floor(Math.random()*num);
        return my_num;
    }

    function hit() {
var good_card=false;
do
{
var index=gerRand(52);//desc.lenght;
    if($.inArray(index,used_card)==-1)//!   >-1
    {

        good_card=true;
        var c=desc[index];
        used_card[used_card.length]=index;
        hand.card[hand.card.length]=c;
        var $d=$("<div>");
        $d.addClass("current_hand").appendTo("#my_hand");
        $("<img>").appendTo($d).attr('src','images/'+c.suit+'/'+c.name+'.jpg').fadeOut('slow').fadeIn('slow');
    }
}while (!good_card);
            good_card=false;hand.sumCardTotal();
    }



    $("#bthDeel").click(function () {
        deal();
        $("#bthHit").toggle();
        $(this).toggle();
        $("#bthStick").toggle();
    });
    $("#bthHit").click(function () {
       hit();
    });
    $("#bthStick").click(function () {
        $("#hdrResult").html('stick!');
        $("#result").toggle();
    });
        //////
        $("#bthRestart").click(function () {
            $('#result').toggle();
            $(this).toggle();
            $("#my_hand").empty();
            $("#hdrResult").html('');
            used_card.length = 0;
            hand.current_total = 0;
            //$("#bthHit").bind("click");
            //$("#bthDeel").toggle().trigger('click');
        });
$("#result").on("click",function () {
    location.reload();
})
});
