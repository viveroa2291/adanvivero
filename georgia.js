function myRotate(x) {    
  x.classList.toggle("change");
}   
function toggleNav() {    
  let elements = document.getElementsByClassName('minimize');
  if(document.getElementById('hamburger').style.marginBottom === "11rem") {
      document.getElementById('hamburger').style.marginBottom="0";
  }
  else {
     document.getElementById('hamburger').style.marginBottom="11rem"; 
  }
  for(let i = 0; i < elements.length; i++) {
      elements[i].classList.toggle('show');
  }
}

atlanta();
cnn();
coca();
other();

function sectionSelected() {
  var x = document.getElementById("area-selector").value;
  if(x == "Atlanta") 
  {
    while(document.getElementById("demo").firstChild) {
      document.getElementById("demo").removeChild(document.getElementById("demo").firstChild);
    } 
    document.getElementById("demo").appendChild(atlanta()); 
  }
  else if(x == "Cnn") 
  {
    while(document.getElementById("demo").firstChild) {
      document.getElementById("demo").removeChild(document.getElementById("demo").firstChild);
    }
    document.getElementById("demo").appendChild(cnn()); 
  }
  else if(x == "Coca") 
  {
    while(document.getElementById("demo").firstChild) {
      document.getElementById("demo").removeChild(document.getElementById("demo").firstChild);
    }
    document.getElementById("demo").appendChild(coca()); 

  }
  else if(x == "Other") {
    while(document.getElementById("demo").firstChild) {
      document.getElementById("demo").removeChild(document.getElementById("demo").firstChild);
    }
    document.getElementById("demo").appendChild(other());  
  }
  else if(x == "all") {

    while(document.getElementById("demo").firstChild) {
      document.getElementById("demo").removeChild(document.getElementById("demo").firstChild);
    }
    atlanta();
    cnn();
    coca();
    other();
  }
}
// ------------------------------------------------------------------------------
function atlanta() {
  let count = 0.0;
  const atlantaImages = ["states-images/georgia-images/atlanta.jpeg", "states-images/georgia-images/atlanta2.jpeg"];
  const atlantaImagesAlt = ["This is a picture of me in downtown Atlanta. I really liked the city and what it had to offer.",
"This is the picture of me in downtown Atlanta."];
  const atlantaDates = ["May 06, 2018", "May 06, 2018"];
  const atlantaDescription = ["This is a picture of me in downtown Atlanta. I really liked the city <br> and what it had to offer.",
"This is the picture of me in downtown Atlanta."];
  const atlantaTitle = ["Downtown Atlanta", "Downtown Atlanta"];
  const atlantaImageWidth = ["mid", "mid"];

var atlanta_text = document.createElement("h3");
atlanta_text.classList.add('body-headers');
atlanta_text.innerHTML = 'Atlanta';

var atlanta_hr = document.createElement("hr");
atlanta_hr.classList.add('header-hr');
document.getElementById("demo").appendChild(atlanta_text);
document.getElementById("demo").appendChild(atlanta_hr);

var atlanta_div = document.createElement("div");
atlanta_div.classList.add('body-images');
document.getElementById("demo").appendChild(atlanta_div);

var atlanta_image;
var atlanta_card;
var atlanta_card_body;
var atlanta_text;
var atlanta_date;
var atlanta_date_small;

for(var a = 0; a < atlantaImages.length; a++) {
  if(count > 4.0) {
    atlanta_div = document.createElement("div");
    atlanta_div.classList.add('body-images');
    document.getElementById("demo").appendChild(atlanta_div);
    count = 0.0;
  }
  if(atlantaImageWidth[a] != "wide") {
    var atlanta_content = document.createElement("div");
    atlanta_content.classList.add('card', 'm-5', 'mx-sm-auto', 'mid-wide-card');
    atlanta_div.appendChild(atlanta_content);

    atlanta_card = document.createElement("div");
    atlanta_card.classList.add('card-header', 'text-center');
    atlanta_card.innerHTML = atlantaTitle[a];
    atlanta_content.appendChild(atlanta_card);

    atlanta_image = document.createElement("img");
    atlanta_image.classList.add('georgia-images', 'mid-wide');
    atlanta_image.src = atlantaImages[a];
    atlanta_image.alt = atlantaImagesAlt[a];
    atlanta_content.appendChild(atlanta_image);

    atlanta_card_body = document.createElement("div");
    atlanta_card_body.classList.add('card-body', 'm-1');
    atlanta_content.append(atlanta_card_body);

    atlanta_text = document.createElement("p");
    atlanta_text.classList.add('card-text');
    atlanta_text.innerHTML = atlantaDescription[a];
    atlanta_card_body.appendChild(atlanta_text);

    atlanta_date = document.createElement("p");
    atlanta_date.classList.add('card-text');
    atlanta_date_small = document.createElement("small");
    atlanta_date_small.classList.add('text-muted');
    atlanta_date_small.innerHTML = atlantaDates[a];
    atlanta_date.appendChild(atlanta_date_small);

    atlanta_card_body.appendChild(atlanta_date);
    count = count + 1.5;
  }
  if(atlantaImageWidth[a] === "wide") {
    var atlanta_content = document.createElement("div");
    atlanta_content.classList.add('card', 'm-5', 'mx-sm-auto', 'wide-card');
    atlanta_div.appendChild(atlanta_content);
    
    atlanta_card = document.createElement("div");
    atlanta_card.classList.add('card-header', 'text-center');
    atlanta_card.innerHTML = atlantaTitle[a];
    atlanta_content.appendChild(atlanta_card);

    atlanta_image = document.createElement("img");
    atlanta_image.classList.add('georgia-images', 'wide');
    atlanta_image.src = atlantaImages[a];
    atlanta_image.alt = atlantaImagesAlt[a];
    atlanta_content.appendChild(atlanta_image);

    atlanta_card_body = document.createElement("div");
    atlanta_card_body.classList.add('card-body', 'm-1');
    atlanta_content.append(atlanta_card_body);

    atlanta_text = document.createElement("p");
    atlanta_text.classList.add('card-text');
    atlanta_text.innerHTML = atlantaDescription[a];
    atlanta_card_body.appendChild(atlanta_text);

    atlanta_date = document.createElement("p");
    atlanta_date.classList.add('card-text');
    atlanta_date_small = document.createElement("small");
    atlanta_date_small.classList.add('text-muted');
    atlanta_date_small.innerHTML = atlantaDates[a];
    atlanta_date.appendChild(atlanta_date_small);

    atlanta_card_body.appendChild(atlanta_date);
    count = count + 2.0;
  }
}
}
// ------------------------------------------------------------------------------

function cnn() {
  let count = 0.0;
  const cnnImages = ["states-images/georgia-images/cnn.jpeg", "states-images/georgia-images/cnn2.jpeg"];
  const cnnImagesAlt = ["This is a picture of me standing outside of the CNN building next to the sign.",
"This is a selfie of me inside of the CNN building next to an anchor's chair and table where the news is reported."];
  const cnnDates = ["May 06, 2018", "May 06, 2018"];
  const cnnDescription = ["This is a picture of me standing outside of the CNN building next <br> to the sign.",
"This is a selfie of me inside of the CNN building next to an <br> anchor's chair and table where the news is reported."];
  const cnnTitle = ["CNN Building", "Inside CNN"];
  const cnnImageWidth = ["mid", "mid"];

var cnn_text = document.createElement("h3");
cnn_text.classList.add('body-headers');
cnn_text.innerHTML = 'CNN';

var cnn_hr = document.createElement("hr");
cnn_hr.classList.add('header-hr');
document.getElementById("demo").appendChild(cnn_text);
document.getElementById("demo").appendChild(cnn_hr);

var cnn_div = document.createElement("div");
cnn_div.classList.add('body-images');
document.getElementById("demo").appendChild(cnn_div);

var cnn_image;
var cnn_card;
var cnn_card_body;
var cnn_text;
var cnn_date;
var cnn_date_small;

for(var b = 0; b < cnnImages.length; b++) {
  if(count > 4.0) {
    cnn_div = document.createElement("div");
    cnn_div.classList.add('body-images');
    document.getElementById("demo").appendChild(cnn_div);
    count = 0.0;
  }
  if(cnnImageWidth[b] != "wide") {
    var cnn_content = document.createElement("div");
    cnn_content.classList.add('card', 'm-5', 'mx-sm-auto', 'mid-wide-card');
    cnn_div.appendChild(cnn_content);

    cnn_card = document.createElement("div");
    cnn_card.classList.add('card-header', 'text-center');
    cnn_card.innerHTML = cnnTitle[b];
    cnn_content.appendChild(cnn_card);

    cnn_image = document.createElement("img");
    cnn_image.classList.add('georgia-images', 'mid-wide');
    cnn_image.src = cnnImages[b];
    cnn_image.alt = cnnImagesAlt[b];
    cnn_content.appendChild(cnn_image);

    cnn_card_body = document.createElement("div");
    cnn_card_body.classList.add('card-body', 'm-1');
    cnn_content.append(cnn_card_body);

    cnn_text = document.createElement("p");
    cnn_text.classList.add('card-text');
    cnn_text.innerHTML = cnnDescription[b];
    cnn_card_body.appendChild(cnn_text);

    cnn_date = document.createElement("p");
    cnn_date.classList.add('card-text');
    cnn_date_small = document.createElement("small");
    cnn_date_small.classList.add('text-muted');
    cnn_date_small.innerHTML = cnnDates[b];
    cnn_date.appendChild(cnn_date_small);

    cnn_card_body.appendChild(cnn_date);
    count = count + 1.5;
  }
  if(cnnImageWidth[b] === "wide") {
    var cnn_content = document.createElement("div");
    cnn_content.classList.add('card', 'm-5', 'mx-sm-auto', 'wide-card');
    cnn_div.appendChild(cnn_content);
    
    cnn_card = document.createElement("div");
    cnn_card.classList.add('card-header', 'text-center');
    cnn_card.innerHTML = cnnTitle[b];
    cnn_content.appendChild(cnn_card);

    cnn_image = document.createElement("img");
    cnn_image.classList.add('georgia-images', 'wide');
    cnn_image.src = cnnImages[b];
    cnn_image.alt = cnnImagesAlt[b];
    cnn_content.appendChild(cnn_image);

    cnn_card_body = document.createElement("div");
    cnn_card_body.classList.add('card-body', 'm-1');
    cnn_content.append(cnn_card_body);

    cnn_text = document.createElement("p");
    cnn_text.classList.add('card-text');
    cnn_text.innerHTML = cnnDescription[b];
    cnn_card_body.appendChild(cnn_text);

    cnn_date = document.createElement("p");
    cnn_date.classList.add('card-text');
    cnn_date_small = document.createElement("small");
    cnn_date_small.classList.add('text-muted');
    cnn_date_small.innerHTML = cnnDates[b];
    cnn_date.appendChild(cnn_date_small);

    cnn_card_body.appendChild(cnn_date);
    count = count + 2.0;
  }
}
}
// ------------------------------------------------------------------------------
function coca() {
  let count = 0.0;
  const cocaImages = ["states-images/georgia-images/coca-cola.jpeg", "states-images/georgia-images/coca-cola3.jpeg", "states-images/georgia-images/coca-cola2.jpeg"];
  const cocaImagesAlt = ["This is a picture of me sitting on a couch enjoying a coke drink inside the World of Coca-Cola located in Atlanta.",
"This is a picture of me inside of the World of Coca-Cola. I thought this looked cool.",
"This is an image of me jumping outside of the World of Coca Cola sign."];
  const cocaDates = ["May 06, 2018", "May 06, 2018", "May 06, 2018"];
  const cocaDescription = ["This is a picture of me sitting on a couch enjoying a coke drink inside <br> the World of Coca-Cola located in Atlanta.",
"This is a picture of me inside of the World of Coca-Cola. I thought <br> this looked cool.",
"This is an image of me jumping outside <br> of the World of Coca Cola sign."];
  const cocaTitle = ["Inside the World of Coca-Cola", "Inside the World of Coca-Cola", "Outside of the World of Coca-Cola"];
  const cocaImageWidth = ["wide", "wide", "not-wide"];

var coca_text = document.createElement("h3");
coca_text.classList.add('body-headers');
coca_text.innerHTML = 'World of Coca-Cola';

var coca_hr = document.createElement("hr");
coca_hr.classList.add('header-hr');
document.getElementById("demo").appendChild(coca_text);
document.getElementById("demo").appendChild(coca_hr);

var coca_div = document.createElement("div");
coca_div.classList.add('body-images');
document.getElementById("demo").appendChild(coca_div);

var coca_image;
var coca_card;
var coca_card_body;
var coca_text;
var coca_date;
var coca_date_small;

for(var c = 0; c < cocaImages.length; c++) {
  if(count >= 4.0) {
    coca_div = document.createElement("div");
    coca_div.classList.add('body-images');
    document.getElementById("demo").appendChild(coca_div);
    count = 0.0;
  }
  if(cocaImageWidth[c] != "wide") {
    var coca_content = document.createElement("div");
    coca_content.classList.add('card', 'm-5', 'mx-sm-auto', 'mid-wide-card');
    coca_div.appendChild(coca_content);

    coca_card = document.createElement("div");
    coca_card.classList.add('card-header', 'text-center');
    coca_card.innerHTML = cocaTitle[c];
    coca_content.appendChild(coca_card);

    coca_image = document.createElement("img");
    coca_image.classList.add('georgia-images', 'mid-wide');
    coca_image.src = cocaImages[c];
    coca_image.alt = cocaImagesAlt[c];
    coca_content.appendChild(coca_image);

    coca_card_body = document.createElement("div");
    coca_card_body.classList.add('card-body', 'm-1');
    coca_content.append(coca_card_body);

    coca_text = document.createElement("p");
    coca_text.classList.add('card-text');
    coca_text.innerHTML = cocaDescription[c];
    coca_card_body.appendChild(coca_text);

    coca_date = document.createElement("p");
    coca_date.classList.add('card-text');
    coca_date_small = document.createElement("small");
    coca_date_small.classList.add('text-muted');
    coca_date_small.innerHTML = cocaDates[c];
    coca_date.appendChild(coca_date_small);

    coca_card_body.appendChild(coca_date);
    count = count + 1.5;
  }
  if(cocaImageWidth[c] === "wide") {
    var coca_content = document.createElement("div");
    coca_content.classList.add('card', 'm-5', 'mx-sm-auto', 'wide-card');
    coca_div.appendChild(coca_content);
    
    coca_card = document.createElement("div");
    coca_card.classList.add('card-header', 'text-center');
    coca_card.innerHTML = cocaTitle[c];
    coca_content.appendChild(coca_card);

    coca_image = document.createElement("img");
    coca_image.classList.add('georgia-images', 'wide');
    coca_image.src = cocaImages[c];
    coca_image.alt = cocaImagesAlt[c];
    coca_content.appendChild(coca_image);

    coca_card_body = document.createElement("div");
    coca_card_body.classList.add('card-body', 'm-1');
    coca_content.append(coca_card_body);

    coca_text = document.createElement("p");
    coca_text.classList.add('card-text');
    coca_text.innerHTML = cocaDescription[c];
    coca_card_body.appendChild(coca_text);

    coca_date = document.createElement("p");
    coca_date.classList.add('card-text');
    coca_date_small = document.createElement("small");
    coca_date_small.classList.add('text-muted');
    coca_date_small.innerHTML = cocaDates[c];
    coca_date.appendChild(coca_date_small);

    coca_card_body.appendChild(coca_date);
    count = count + 2.0;
  }
}
}
// ------------------------------------------------------------------------------
function other() {
  let count = 0.0;
  const georgiaImages = ["states-images/georgia-images/airport.jpeg", "states-images/georgia-images/dinner.jpeg", "states-images/georgia-images/pool.jpeg", "states-images/georgia-images/hotel.jpeg"];
  const georgiaImagesAlt = ["This is a picture of my sister's national team for gymnastics. She is part of the special olympics and I was there to help coach the boys. We took a group picture in the airport and I believe this airport ranks in the United States for being one of the biggest airports in the United States.",
"This is a picture of me standing outside of the Marietta Diner which was where we ate for dinner.",
"This is a picture of me sitting pool side by my hotel",
"This is a mirror picture of me in the hotel."];
  const georgiaDates = ["May 04, 2018", "May 04, 2018", "May 04, 2018", "May 06, 2018"];
  const georgiaDescription = ["This is a picture of my sister's national team for gymnastics. She is <br> part of the special olympics and I was there to help coach the boys. <br> We took a group picture in the airport and I believe this airport ranks <br> in the United States for being one of the biggest airports in the <br> United States.",
"This is a picture of me standing outside of the Marietta Diner <br> which was where we ate for dinner.",
"This is a picture of me sitting pool side <br> by my hotel.",
"This is a mirror picture of me in the hotel."];
  const georgiaTitle = ["Airport", "Marietta Diner", "Pool", "Mirror Picture"];
  const georgiaImageWidth = ["wide", "wide", "not-wide", "not-wide"];

var georgia_text = document.createElement("h3");
georgia_text.classList.add('body-headers');
georgia_text.innerHTML = 'Other Georga Pictures';

var georgia_hr = document.createElement("hr");
georgia_hr.classList.add('header-hr');
document.getElementById("demo").appendChild(georgia_text);
document.getElementById("demo").appendChild(georgia_hr);

var georgia_div = document.createElement("div");
georgia_div.classList.add('body-images');
document.getElementById("demo").appendChild(georgia_div);

var georgia_image;
var georgia_card;
var georgia_card_body;
var georgia_text;
var georgia_date;
var georgia_date_small;

for(var d = 0; d < georgiaImages.length; d++) {
  if(count >= 4.0) {
    georgia_div = document.createElement("div");
    georgia_div.classList.add('body-images');
    document.getElementById("demo").appendChild(georgia_div);
    count = 0.0;
  }
  if(georgiaImageWidth[d] != "wide") {
    var georgia_content = document.createElement("div");
    georgia_content.classList.add('card', 'm-5', 'mx-sm-auto', 'mid-wide-card');
    georgia_div.appendChild(georgia_content);

    georgia_card = document.createElement("div");
    georgia_card.classList.add('card-header', 'text-center');
    georgia_card.innerHTML = georgiaTitle[d];
    georgia_content.appendChild(georgia_card);

    georgia_image = document.createElement("img");
    georgia_image.classList.add('georgia-images', 'mid-wide');
    georgia_image.src = georgiaImages[d];
    georgia_image.alt = georgiaImagesAlt[d];
    georgia_content.appendChild(georgia_image);

    georgia_card_body = document.createElement("div");
    georgia_card_body.classList.add('card-body', 'm-1');
    georgia_content.append(georgia_card_body);

    georgia_text = document.createElement("p");
    georgia_text.classList.add('card-text');
    georgia_text.innerHTML = georgiaDescription[d];
    georgia_card_body.appendChild(georgia_text);

    georgia_date = document.createElement("p");
    georgia_date.classList.add('card-text');
    georgia_date_small = document.createElement("small");
    georgia_date_small.classList.add('text-muted');
    georgia_date_small.innerHTML = georgiaDates[d];
    georgia_date.appendChild(georgia_date_small);

    georgia_card_body.appendChild(georgia_date);
    count = count + 1.5;
  }
  if(georgiaImageWidth[d] === "wide") {
    var georgia_content = document.createElement("div");
    georgia_content.classList.add('card', 'm-5', 'mx-sm-auto', 'wide-card');
    georgia_div.appendChild(georgia_content);
    
    georgia_card = document.createElement("div");
    georgia_card.classList.add('card-header', 'text-center');
    georgia_card.innerHTML = georgiaTitle[d];
    georgia_content.appendChild(georgia_card);

    georgia_image = document.createElement("img");
    georgia_image.classList.add('georgia-images', 'wide');
    georgia_image.src = georgiaImages[d];
    georgia_image.alt = georgiaImagesAlt[d];
    georgia_content.appendChild(georgia_image);

    georgia_card_body = document.createElement("div");
    georgia_card_body.classList.add('card-body', 'm-1');
    georgia_content.append(georgia_card_body);

    georgia_text = document.createElement("p");
    georgia_text.classList.add('card-text');
    georgia_text.innerHTML = georgiaDescription[d];
    georgia_card_body.appendChild(georgia_text);

    georgia_date = document.createElement("p");
    georgia_date.classList.add('card-text');
    georgia_date_small = document.createElement("small");
    georgia_date_small.classList.add('text-muted');
    georgia_date_small.innerHTML = georgiaDates[d];
    georgia_date.appendChild(georgia_date_small);

    georgia_card_body.appendChild(georgia_date);
    count = count + 2.0;
  }
}
}
// ------------------------------------------------------------------------------
var modal = document.getElementById("myModal");

var img = document.getElementsByClassName("georgia-images");
var image = document.getElementsByClassName("box-image");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
function images(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}
for(var i = 0; i < img.length; i++)
{
    img[i].onclick = images;
    
}
for(var j = 0; j < img.length; j++)
{
    image[j].onclick = images;
    
}

var span = document.getElementsByClassName("close")[0];

span.onclick = function() { 
  modal.style.display = "none";
}