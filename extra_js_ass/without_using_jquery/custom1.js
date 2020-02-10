function increse_height()
{
    //alert("123");
    var x = document.getElementsByClassName("height");
    x[0].style.height = "300px";
   
}

function moving_Image() {
    document.getElementsByClassName("height")[1].style["margin-left"]="400px";
    //style.position="relative";
    //x.style.left = "400px";
    /*var x=document.getElementById("height");
    x.style.position="relative";
    x.style.left="400px";*/
}

window.onscroll = function() {scroll_text()};

function scroll_text(){
  if($(window).scrollTop() > 700 && $(window).scrollTop() < 900)
  {
    $(".full").css({"position":"fixed","top":"0px"});
  }
  else
  {
    $(".full").css({"position":"static","top":"0px"});
  }
}

function cover(){
   //document.getElementsByClassName('secion6').style["display"]=='block';
   //document.querySelector("p")[4].appendChild(div);
   wrap(document.querySelector("intro"), document.createElement('div'));

}

function fill_color(){
  //document.getElementByClassName("selction7")[]
  var parent=getElementByClassName("selction7")
  var child=parent.querySelectorAll('li');
  child[0].style.backgroundColor='red';
}

function value_change(){
  var div = document.getElementById('test3');
  div.innerHTML += 'Hello World';
}