/* SIZE CONTENT */

var room=document.getElementById("title-room");
var movie=document.getElementById("title-movie");
var premiere=document.getElementById("title-premiere");
var sold=document.getElementById("title-sold");
var cinema=document.getElementById("title-cinema");
var about=document.getElementById("title-about");

if(room && movie && premiere && sold && cinema && about){

    var titles={room:room.innerHTML,movie:movie.innerHTML,premiere:premiere.innerHTML,sold:sold.innerHTML,cinema:cinema.innerHTML,about:about.innerHTML};


    function myFunction(x) {
    
        if (x.matches) { // If media query matches
            room.innerHTML="R";
            movie.innerHTML="M";
            premiere.innerHTML="P";
            sold.innerHTML="S";
            cinema.innerHTML="C";
            about.innerHTML="A";
        }else{
            room.innerHTML=titles.room;
            movie.innerHTML=titles.movie;
            premiere.innerHTML=titles.premiere;
            sold.innerHTML=titles.sold;
            cinema.innerHTML=titles.cinema;
            about.innerHTML=titles.about;
        }
    }
    
    var x = window.matchMedia("(max-width: 785px)");
    myFunction(x);
    x.addListener(myFunction);// Attach listener function on state changes
}

