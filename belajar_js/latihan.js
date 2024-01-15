const canvas = document.getElementById('myCanvas');
const ctx = canvas.getContext('2d');

let x = 10;
let y = 20;

function draw(){
   ctx.clearRect(0, 0, canvas.width, canvas.height);
   ctx.beginPath();
   ctx.arc(x, y, 20, 0, Math.PI * 2);
   ctx.fillStyle = 'yellow';
   ctx.fill();
   ctx.closePath();

   x += 0.5;
   requestAnimationFrame(draw);
}
draw()
