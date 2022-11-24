var demo = document.getElementById("demo");
var demo1 = document.getElementById("demo1");
var demo2 = document.getElementById("demo2");
var demo3 = document.getElementById("demo3");
function function1() {  
demo.style.border='1px solid red';
demo1.style.border="none";
demo2.style.border="none";
demo3.style.border="none";
document.getElementById("topmain").src = document.getElementById("demo").src;
}
function function2() {  
demo1.style.border='1px solid red';
demo.style.border="none";
demo2.style.border="none";
demo3.style.border="none";
document.getElementById("topmain").src = document.getElementById("demo1").src;
}
function function3() {  
demo2.style.border='1px solid red';
demo.style.border="none";
demo1.style.border="none";
demo3.style.border="none";
document.getElementById("topmain").src = document.getElementById("demo2").src;
}
function function4() {  
demo3.style.border='1px solid red';
demo.style.border="none";
demo1.style.border="none";
demo2.style.border="none";
document.getElementById("topmain").src = document.getElementById("demo3").src;
}
function function5() {  
document.getElementById("button01").style.border="1px solid red";
document.getElementById("button02").style.border="none";
document.getElementById("button03").style.border="none";
document.getElementById("size").innerHTML= document.getElementById("button01").innerText;
}
function function6() {  
document.getElementById("button02").style.border="1px solid red";
document.getElementById("button01").style.border="none";
document.getElementById("button03").style.border="none";
document.getElementById("size").innerHTML= document.getElementById("button02").innerText;
}
function function7() {  
document.getElementById("button03").style.border="1px solid red";
document.getElementById("button01").style.border="none";
document.getElementById("button02").style.border="none";
document.getElementById("size").innerHTML= document.getElementById("button03").innerText;
}
function function8(){
document.getElementById("button1").style.border="1px solid red";
document.getElementById("button2").style.border="none";
document.getElementById("color").innerHTML= document.getElementById("button1").innerText;
}
function function9(){
document.getElementById("button2").style.border="1px solid red";
document.getElementById("button1").style.border="none";
document.getElementById("color").innerHTML= document.getElementById("button2").innerText;
}