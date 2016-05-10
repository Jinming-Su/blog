var WINDOW_WIDTH=1366;
var WINDOW_HEIGHT=768;

$(function(){

    WINDOW_HEIGHT=document.body.clientHeight;
    WINDOW_WIDTH=document.body.clientWidth;

    var canvas=$("#canvas")[0];
    var context=canvas.getContext("2d");

    //Loading pic
    var pic = new Image();
    pic.src = '/img/image/person.png';
    pic.onload = function() {
        context.drawImage(pic,50,50,300,300);
    }

    canvas.width=WINDOW_WIDTH;
    canvas.height=WINDOW_HEIGHT;
    //context.fillStyle="black";
    //context.fillRect(0,0,canvas.width,canvas.height);

    var skyStyle=context.createLinearGradient(0,0,0,canvas.height);
    skyStyle.addColorStop(0.0,'black');
    skyStyle.addColorStop(1.0,'#035');
    context.fillStyle=skyStyle;
    context.fillRect(0,0,canvas.width,canvas.height);


    for(var i=0;i<150;i++){
        var r=Math.random()*5+5;
        var x=Math.random()*canvas.width;
        var y=Math.random()*canvas.height*0.65;
        var a=Math.random()*360;
        drawStar(context,x,y,r,a);
    }

    fillMoon(context,2,Math.random()*1000,Math.random()*150+50,80,30);

    drawLand(context);

    context.save();
    context.beginPath();
    context.font="bold 30px Arial";
    context.strokeStyle="#396";
    context.strokeText("   ------  Just do IT",850,550);
    context.closePath();
    context.restore();
})


function drawLand(cxt){
    cxt.save();
    cxt.beginPath();
    cxt.moveTo(0,600);
    cxt.bezierCurveTo(440,500,1060,WINDOW_HEIGHT+100,WINDOW_WIDTH,600);
    cxt.lineTo(WINDOW_WIDTH,WINDOW_HEIGHT);
    cxt.lineTo(0,WINDOW_HEIGHT);
    cxt.closePath();

    var landStyle=cxt.createLinearGradient(0,WINDOW_HEIGHT,0,0);
    landStyle.addColorStop(0.0,"#030");
    landStyle.addColorStop(1.0,"#580");
    cxt.fillStyle=landStyle;
    cxt.fill();
    cxt.restore();
}

function fillMoon(cxt,d,x,y,R,rot,fillColor){
    cxt.save();
    cxt.translate(x,y);
    cxt.rotate(rot*Math.PI/180);
    cxt.scale(R,R);
    pathMoon(cxt,d);
    cxt.fillStyle=fillColor||"#fb5";
    cxt.fill();
    cxt.restore();
}

function pathMoon(cxt,d){
    cxt.beginPath();
    cxt.arc(0,0,1,0.5*Math.PI,1.5*Math.PI,true);
    cxt.moveTo(0,-1);
    cxt.arcTo(d,0,0,1,dis(0,-1,d,0)/d);
    cxt.closePath();
}

function dis(x1,y1,x2,y2){
    return Math.sqrt((x1-x2)*(x1-x2)+(y1-y2)*(y1-y2));
}

function drawStar(cxt,x,y,R,rot){

    cxt.save();

    cxt.translate(x,y);
    cxt.rotate(rot/180*Math.PI);
    cxt.scale(R,R);

    starPath(cxt);

    cxt.fillStyle="#fb3";
    cxt.fill();

    cxt.restore();
}

function starPath(cxt){
    cxt.beginPath();
    for(var i=0;i<5;i++){
        cxt.lineTo(Math.cos((18+i*72)/180*Math.PI),
            -Math.sin((18+i*72)/180*Math.PI));
        cxt.lineTo(Math.cos((54+i*72)/180*Math.PI)*0.5,
            -Math.sin((54+i*72)/180*Math.PI)*0.5);
    }

    cxt.closePath();
}