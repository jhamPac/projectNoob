var ball;
var x = 0;
var y = 100;
var xMove = 4;
var yMove = 6;   //pretty much created an object called ball

function createBall() {

    ball = $('#bouncXing')[0].getContext('2d'); //using raw dom objects with jquery
    setInterval( draw, 10 );
    
    }
    
function draw() {

    ball.clearRect( 0, 0, 500, 500 );
    ball.beginPath();
    ball.fillStyle="#000";
    // Draws a circle of radius 25 at the coordinates of what x and y are on the canvas
    ball.arc( x, y, 25, 0, Math.PI*2, true ); 
    ball.closePath();
    ball.fill();
    
    x += xMove;
    y += yMove;
    
    //boudry logic
    if ( x < 0 || x > 500 ) xMove = -xMove;
    if ( y < 0 || y > 500 ) yMove = -yMove;
}

window.onload = createBall();

//change this one into Jquery version, wrap it with the one from hc