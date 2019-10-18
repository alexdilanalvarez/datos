
var balls = []; // array of Jitter objects
var data; // a reference to all the data from the file
var dates = [];	// an array of all the "date" values
var texts = []; // an array of all the "text" values
var temps = []; // an array of all the "high" values

function preload(){
	//loads .json data
		data = loadJSON('paris-weather.json');
}

function setup() {
  createCanvas(800,700);
  noStroke();
  // Creates objects
  for (var i=0; i<10; i++) {
    balls.push(new Hothot());
  }
}

function draw() {
  background(50);

  var forecastArray = data.query.results.channel.item.forecast;
  for (var i=0; i<forecastArray.length; i++) {
    dates[i] = forecastArray[i].date;
    texts[i] = forecastArray[i].text;
    temps[i] = forecastArray[i].high;
    //moves balls
    balls[i].move(temps[i]);
    //displays balls
    balls[i].display(temps[i], dates[i]);
  }
}

// Function determines ellipse characteristics
function Hothot() {
  this.direction = 0.9;
  this.x =random(1,1400);
  
  this.move = function(speedVar) {
    //maps speed range to paris temperature range
    this.speed = (map(speedVar, 50, 20, 1, 5)*this.direction);
    this.x += this.speed
    //allows balls to bounce off canvas boundaries
		if(this.x < 0 || this.x > width)
			this.direction = -this.direction;
  };

  //maps color dates and warm/cool color to ellipses
  this.display = function(colorVar, date) {
    this.temp = map(colorVar, min(temps), max(temps),10, 100);
    
    var colorVal = map(colorVar, min(temps), max(temps), 210, 10);
    tempColor = color(colorVal, 255, 163-colorVal);
   	fill(tempColor);
    
    
    //aligns text with shapes 
   this.y = map(colorVar, min(temps), max(temps), 40, height-50);
   text(date, this.temp/2+this.x, this.y);
   rect(this.x, this.y, map(colorVar, min(temps), max(temps), 100, 10), map(colorVar, min(temps), max(temps), 10, 100));
  
   
   ellipse(this.y, this.x,  map(colorVar, min(temps), max(temps), 10, 100));
   text(date, this.temp/2+this.y, this.x);


  };
}