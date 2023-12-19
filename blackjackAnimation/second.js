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
    /////////////////////////////////
    function getId() {
        var index=false;
        do {
            var total=Rand(52);
            if($.inArray(total,used_card)==-1)
            {
                used_card[used_card.length]=total;
                index=true;
            }
        }
        while (!index);
        index=false;
    }
    ////////////////////////////////
    hit();
////
function hit() {
    for (var i = 0; i < 52; i++) {
        getId();
        $("<img>").appendTo("#my_hand").attr('src', 'images/hit_small.jpg').attr('id',used_card[i]);
    }
    $("img").rotate(90);
}
$("img").click(function () {
   var id=$(this).attr('id');
    var c=desc[id];
    $(this).attr('src','images/'+c.suit+'/'+c.name+'.jpg').fadeOut('slow').fadeIn('slow');
$(this).rotate(180);
});



















    function Rand(num) {
        var my_num=Math.floor(Math.random()*num);
        return my_num;
    }
});