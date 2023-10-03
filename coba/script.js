class MagicParticle{
   constructor(x, y){
      this.x = x;
      this.y = y;
      this.size = random(10, 30);
      this.baseColor = color(
         random([
            "#e84e66", "#67c69e",
            "#edf1f4", "#80acc9",
            "#73a8b0", "#fe817f",
            "#68d2a4", "#1d203f",
            "#c9a30d",
         ])
      ),
      update() {
         this.x += this.speedX;
         this.y += this.speedY;
         this.opacity -=10;
      }
   }
}