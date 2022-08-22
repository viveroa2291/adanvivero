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
disneyworld();
universal();
seaworld();
other();

function sectionSelected() {
  var x = document.getElementById("area-selector").value;
  if(x == "Disneyworld") 
  {
    while(document.getElementById("demo").firstChild) {
      document.getElementById("demo").removeChild(document.getElementById("demo").firstChild);
    } 
    document.getElementById("demo").appendChild(disneyworld()); 
  }
  else if(x == "Universal") 
  {
    while(document.getElementById("demo").firstChild) {
      document.getElementById("demo").removeChild(document.getElementById("demo").firstChild);
    }
    document.getElementById("demo").appendChild(universal()); 
  }
  else if(x == "Seaworld") 
  {
    while(document.getElementById("demo").firstChild) {
      document.getElementById("demo").removeChild(document.getElementById("demo").firstChild);
    }
    document.getElementById("demo").appendChild(seaworld()); 

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
    disneyworld();
    universal();
    seaworld();
    other(); 
  }
}

// ------------------------------------------------------------------------------
function disneyworld() {
  let count = 0.0;
  const disneyworldImages = ["states-images/florida-images/epcot.jpeg", "states-images/florida-images/disney.jpeg", "states-images/florida-images/disney-family.jpeg", "states-images/florida-images/castle.jpeg", "states-images/florida-images/president.jpeg", "states-images/florida-images/disney2.jpeg"];
  const disneyworldImagesAlt = ["This is a picture of me standing outside of Epcot. I did not have a chance to go into Epcot, but wanted to take a picture since I found the entrance very cool.",
"This is a picture of a statue of Walt Disney and Mickey Mouse at the Disneyworld Magic Kingdom park.",
"This is a picture of my family and I at the entrance of Disneyworld's Magic Kingdom park.",
"This is a picture of me posing in front of the castle in Disneyworld's Magic Kingdom park.",
"This is an image of the outside of the Hall of Presidents display. At the time, we could not enter as they were undergoing changes.",
"This is an image of me taking pictures by the area we were eating."];
  const disneyworldDates = ["March 20, 2017", "March 20, 2017", "March 20, 2017", "March 20, 2017", "March 20, 2017", "March 20, 2017"];
  const disneyworldDescription = ["This is a picture of me standing outside of <br> Epcot. I did not have a chance to go into <br> Epcot, but wanted to take a picture since <br> I found the entrance very cool.",
"This is a picture of a statue of Walt Disney <br> and Mickey Mouse at the Disneyworld <br> Magic Kingdom park.",
"This is a picture of my family and I at the <br> entrance of Disneyworld's Magic Kingdom <br> park.",
"This is a picture of me posing in front <br> of the castle in Disneyworld's Magic <br> Kingdom park.",
"This is an image of the outside of the <br> Hall of Presidents display. At the time, <br> we could not enter as they were <br> undergoing changes.",
"This is an image of me taking pictures <br> by the area we were eating."];
  const disneyworldTitle = ["Epcot", "Walt Disney Statue", "Kingdom Entrance", "Castle", "Hall of Presidents", "Disneyworld"];
  const disneyworldImageWidth = ["not-wide", "not-wide", "not-wide", "not-wide", "not-wide", "not-wide"];

var disneyworld_text = document.createElement("h3");
disneyworld_text.classList.add('body-headers');
disneyworld_text.innerHTML = 'DisneyWorld';

var disneyworld_hr = document.createElement("hr");
disneyworld_hr.classList.add('header-hr');
document.getElementById("demo").appendChild(disneyworld_text);
document.getElementById("demo").appendChild(disneyworld_hr);

var disneyworld_div = document.createElement("div");
disneyworld_div.classList.add('body-images');
document.getElementById("demo").appendChild(disneyworld_div);

var disneyworld_image;
var disneyworld_card;
var disneyworld_card_body;
var disneyworld_text;
var disneyworld_date;
var disneyworld_date_small;

for(var a = 0; a < disneyworldImages.length; a++) {
  if(count > 4.0) {
    disneyworld_div = document.createElement("div");
    disneyworld_div.classList.add('body-images');
    document.getElementById("demo").appendChild(disneyworld_div);
    count = 0.0;
  }
  if(disneyworldImageWidth[a] != "wide") {
    var disneyworld_content = document.createElement("div");
    disneyworld_content.classList.add('card', 'm-5', 'mx-sm-auto', 'mid-wide-card');
    disneyworld_div.appendChild(disneyworld_content);

    disneyworld_card = document.createElement("div");
    disneyworld_card.classList.add('card-header', 'text-center');
    disneyworld_card.innerHTML = disneyworldTitle[a];
    disneyworld_content.appendChild(disneyworld_card);

    disneyworld_image = document.createElement("img");
    disneyworld_image.classList.add('florida-images', 'mid-wide');
    disneyworld_image.src = disneyworldImages[a];
    disneyworld_image.alt = disneyworldImagesAlt[a];
    disneyworld_content.appendChild(disneyworld_image);

    disneyworld_card_body = document.createElement("div");
    disneyworld_card_body.classList.add('card-body', 'm-1');
    disneyworld_content.append(disneyworld_card_body);

    disneyworld_text = document.createElement("p");
    disneyworld_text.classList.add('card-text');
    disneyworld_text.innerHTML = disneyworldDescription[a];
    disneyworld_card_body.appendChild(disneyworld_text);

    disneyworld_date = document.createElement("p");
    disneyworld_date.classList.add('card-text');
    disneyworld_date_small = document.createElement("small");
    disneyworld_date_small.classList.add('text-muted');
    disneyworld_date_small.innerHTML = disneyworldDates[a];
    disneyworld_date.appendChild(disneyworld_date_small);

    disneyworld_card_body.appendChild(disneyworld_date);
    count = count + 1.5;
  }
  if(disneyworldImageWidth[a] === "wide") {
    var disneyworld_content = document.createElement("div");
    disneyworld_content.classList.add('card', 'm-5', 'mx-sm-auto', 'wide-card');
    disneyworld_div.appendChild(disneyworld_content);
    
    disneyworld_card = document.createElement("div");
    disneyworld_card.classList.add('card-header', 'text-center');
    disneyworld_card.innerHTML = disneyworldTitle[a];
    disneyworld_content.appendChild(disneyworld_card);

    disneyworld_image = document.createElement("img");
    disneyworld_image.classList.add('florida-images', 'wide');
    disneyworld_image.src = disneyworldImages[a];
    disneyworld_image.alt = disneyworldImagesAlt[a];
    disneyworld_content.appendChild(disneyworld_image);

    disneyworld_card_body = document.createElement("div");
    disneyworld_card_body.classList.add('card-body', 'm-1');
    disneyworld_content.append(disneyworld_card_body);

    disneyworld_text = document.createElement("p");
    disneyworld_text.classList.add('card-text');
    disneyworld_text.innerHTML = disneyworldDescription[a];
    disneyworld_card_body.appendChild(disneyworld_text);

    disneyworld_date = document.createElement("p");
    disneyworld_date.classList.add('card-text');
    disneyworld_date_small = document.createElement("small");
    disneyworld_date_small.classList.add('text-muted');
    disneyworld_date_small.innerHTML = disneyworldDates[a];
    disneyworld_date.appendChild(disneyworld_date_small);

    disneyworld_card_body.appendChild(disneyworld_date);
    count = count + 2.0;
  }
}
}
// ------------------------------------------------------------------------------
function universal() {
let count = 0.0;
const universalImages = ["states-images/florida-images/jurassic.jpeg", "states-images/florida-images/nbc.jpeg", "states-images/florida-images/jurassic2.jpeg", "states-images/florida-images/harrypotter.jpeg", "states-images/florida-images/universal-sign.jpeg", "states-images/florida-images/universal.jpeg"];
const universalImagesAlt = ["This is an image of me looking up at the Jurassic Park sign.",
"This is an image of me outside of the NBC building after watching a 'Tonight's Show'.",
"This is an image of me looking at the dinosaur acting in shock. I thought the display was very well done and was my favorite park.",
"This is a picture of me standing outside of Hogwarts.",
"This is an image of me standing outside of the Universal Studios sign that rotates 360 degrees.",
"This is an image of me taking a look at the view of the Universal Studios park."];
const universalDates = ["March 22, 2017", "March 22, 2017", "March 22, 2017", "March 22, 2017", "March 22, 2017", "March 22, 2017", "March 22, 2017"];
const universalDescription = ["This is an image of me looking up at <br> the Jurassic Park sign.",
"This is an image of me outside of the <br> NBC building after watching a <br> \"Tonight's Show\".",
"This is an image of me looking at the <br> dinosaur acting in shock. I thought the <br> display was very well done and was <br> my favorite park.",
"This is a picture of me standing outside of Hogwarts.",
"This is an image of me standing outside of the <br> Universal Studios sign that rotates 360 degrees.",
"This is an image of me taking a look at the view of the Universal Studios <br> park."];
const universalTitle = ["Jurassic Park", "NBC Tonight's Show", "Jurassic Park", "Hogwarts", "Universal Sign", "Universal Studios"];
const universalImageWidth = ["not-wide", "not-wide", "not-wide", "wide", "wide", "wide"];

var universal_text = document.createElement("h3");
universal_text.classList.add('body-headers');
universal_text.innerHTML = 'Universal Studios';

var universal_hr = document.createElement("hr");
universal_hr.classList.add('header-hr');
document.getElementById("demo").appendChild(universal_text);
document.getElementById("demo").appendChild(universal_hr);

var universal_div = document.createElement("div");
universal_div.classList.add('body-images');
document.getElementById("demo").appendChild(universal_div);

var universal_image;
var universal_card;
var universal_card_body;
var universal_text;
var universal_date;
var universal_date_small;

for(var b = 0; b < universalImages.length; b++) {
  if(count >= 4.0) {
    universal_div = document.createElement("div");
    universal_div.classList.add('body-images');
    document.getElementById("demo").appendChild(universal_div);
    count = 0.0;
  }
  if(universalImageWidth[b] != "wide") {
    var universal_content = document.createElement("div");
    universal_content.classList.add('card', 'm-5', 'mx-sm-auto', 'not-wide-card');
    universal_div.appendChild(universal_content);

    universal_card = document.createElement("div");
    universal_card.classList.add('card-header', 'text-center');
    universal_card.innerHTML = universalTitle[b];
    universal_content.appendChild(universal_card);

    universal_image = document.createElement("img");
    universal_image.classList.add('florida-images', 'not-wide');
    universal_image.src = universalImages[b];
    universal_image.alt = universalImagesAlt[b];
    universal_content.appendChild(universal_image);

    universal_card_body = document.createElement("div");
    universal_card_body.classList.add('card-body', 'm-1');
    universal_content.append(universal_card_body);

    universal_text = document.createElement("p");
    universal_text.classList.add('card-text');
    universal_text.innerHTML = universalDescription[b];
    universal_card_body.appendChild(universal_text);

    universal_date = document.createElement("p");
    universal_date.classList.add('card-text');
    universal_date_small = document.createElement("small");
    universal_date_small.classList.add('text-muted');
    universal_date_small.innerHTML = universalDates[b];
    universal_date.appendChild(universal_date_small);

    universal_card_body.appendChild(universal_date);
    count = count + 1.5;
  }
  if(universalImageWidth[b] === "wide") {
    var universal_content = document.createElement("div");
    universal_content.classList.add('card', 'm-5', 'mx-sm-auto', 'mid-wide-card');
    universal_div.appendChild(universal_content);
    
    universal_card = document.createElement("div");
    universal_card.classList.add('card-header', 'text-center');
    universal_card.innerHTML = universalTitle[b];
    universal_content.appendChild(universal_card);

    universal_image = document.createElement("img");
    universal_image.classList.add('florida-images', 'mid-wide');
    universal_image.src = universalImages[b];
    universal_image.alt = universalImagesAlt[b];
    universal_content.appendChild(universal_image);

    universal_card_body = document.createElement("div");
    universal_card_body.classList.add('card-body', 'm-1');
    universal_content.append(universal_card_body);

    universal_text = document.createElement("p");
    universal_text.classList.add('card-text');
    universal_text.innerHTML = universalDescription[b];
    universal_card_body.appendChild(universal_text);

    universal_date = document.createElement("p");
    universal_date.classList.add('card-text');
    universal_date_small = document.createElement("small");
    universal_date_small.classList.add('text-muted');
    universal_date_small.innerHTML = universalDates[b];
    universal_date.appendChild(universal_date_small);

    universal_card_body.appendChild(universal_date);
    count = count + 2.0;
  }
}
}
// ------------------------------------------------------------------------------
function seaworld() {
  let count = 0.0;
  const seaworldImages = ["states-images/florida-images/seaworld2.jpeg", "states-images/florida-images/penguin.jpeg", "states-images/florida-images/penguin-me.jpeg", "states-images/florida-images/orca.jpeg", "states-images/florida-images/orcas-glass.jpeg", "states-images/florida-images/seaworld-green.jpeg", "states-images/florida-images/seaworld.jpeg", "states-images/florida-images/fish.jpeg", "states-images/florida-images/seahorses.jpeg"];
  const seaworldImagesAlt = ["This is an image of me standing by the Seaworld lake of the theme park.",
"This is an image of penguins inside a penguin exhibit.",
"This is an image of me interacting with a penguin from the glass. I thought it was pretty cool that the penguin came up to me and made eye contact.",
"This is an image of an orca swimming around its tank.",
"This is an image of orcas and their trainers providing information about orcas to the visitors.",
"This is an image of me in an unknown area of Seaworld's park. It was pretty empty but had nice theming and was surrounded with a lot colorful flowers.",
"This is an image of me sitting by the Seaworld sign.",
"This is a picture of a fish that I took at Seaworld.",
"This is an picture of seahorses that I took at Seaworld."];
  const seaworldDates = ["March 19, 2017", "March 19, 2017", "March 19, 2017", "March 19, 2017", "March 19, 2017", "March 21, 2017", "March 21, 2017", "March 23, 2017", "March 23, 2017"];
  const seaworldDescription = ["This is an image of me standing by the <br> Seaworld lake of the theme park.",
"This is an image of penguins inside a <br> penguin exhibit.",
"This is an image of me interacting with a <br> penguin from the glass. I thought it was <br> pretty cool that the penguin came up to <br> me and made eye contact.",
"This is an image of an orca swimming around <br> its tank.",
"This is an image of orcas and their trainers <br> providing information about orcas to the <br> visitors.",
"This is an image of me in an unknown area <br> of Seaworld's park. It was pretty empty but <br> had nice theming and was surrounded with <br> a lot colorful flowers.",
"This is an image of me sitting by the <br> Seaworld sign.",
"This is a picture of a fish that I took at <br> Seaworld.",
"This is an picture of seahorses that I took <br> at Seaworld."];
  const seaworldTitle = ["Seaworld Lake", "Penguin Exhibit", "Penguin Exhibit", "Shamu Stadium", "Shamu Stadium", "Seaworld", "Seaworld Sign", "Fish", "Seahorses"];
  const seaworldImageWidth = ["not-wide", "not-wide", "not-wide", "wide", "wide", "wide"];
  
  var seaworld_text = document.createElement("h3");
  seaworld_text.classList.add('body-headers');
  seaworld_text.innerHTML = 'SeaWorld';
  
  var seaworld_hr = document.createElement("hr");
  seaworld_hr.classList.add('header-hr');
  document.getElementById("demo").appendChild(seaworld_text);
  document.getElementById("demo").appendChild(seaworld_hr);
  
  var seaworld_div = document.createElement("div");
  seaworld_div.classList.add('body-images');
  document.getElementById("demo").appendChild(seaworld_div);
  
  var seaworld_image;
  var seaworld_card;
  var seaworld_card_body;
  var seaworld_text;
  var seaworld_date;
  var seaworld_date_small;
  
  for(var c = 0; c < seaworldImages.length; c++) {
    if(count > 4.0) {
      seaworld_div = document.createElement("div");
      seaworld_div.classList.add('body-images');
      document.getElementById("demo").appendChild(seaworld_div);
      count = 0.0;
    }
    if(seaworldImageWidth[c] != "wide") {
      var seaworld_content = document.createElement("div");
      seaworld_content.classList.add('card', 'm-5', 'mx-sm-auto', 'not-wide-card');
      seaworld_div.appendChild(seaworld_content);
  
      seaworld_card = document.createElement("div");
      seaworld_card.classList.add('card-header', 'text-center');
      seaworld_card.innerHTML = seaworldTitle[c];
      seaworld_content.appendChild(seaworld_card);
  
      seaworld_image = document.createElement("img");
      seaworld_image.classList.add('florida-images', 'not-wide');
      seaworld_image.src = seaworldImages[c];
      seaworld_image.alt = seaworldImagesAlt[c];
      seaworld_content.appendChild(seaworld_image);
  
      seaworld_card_body = document.createElement("div");
      seaworld_card_body.classList.add('card-body', 'm-1');
      seaworld_content.append(seaworld_card_body);
  
      seaworld_text = document.createElement("p");
      seaworld_text.classList.add('card-text');
      seaworld_text.innerHTML = seaworldDescription[c];
      seaworld_card_body.appendChild(seaworld_text);
  
      seaworld_date = document.createElement("p");
      seaworld_date.classList.add('card-text');
      seaworld_date_small = document.createElement("small");
      seaworld_date_small.classList.add('text-muted');
      seaworld_date_small.innerHTML = seaworldDates[c];
      seaworld_date.appendChild(seaworld_date_small);
  
      seaworld_card_body.appendChild(seaworld_date);
      count = count + 1.5;
    }
    if(seaworldImageWidth[c] === "wide") {
      var seaworld_content = document.createElement("div");
      seaworld_content.classList.add('card', 'm-5', 'mx-sm-auto', 'mid-wide-card');
      seaworld_div.appendChild(seaworld_content);
      
      seaworld_card = document.createElement("div");
      seaworld_card.classList.add('card-header', 'text-center');
      seaworld_card.innerHTML = seaworldTitle[c];
      seaworld_content.appendChild(seaworld_card);
  
      seaworld_image = document.createElement("img");
      seaworld_image.classList.add('florida-images', 'mid-wide');
      seaworld_image.src = seaworldImages[c];
      seaworld_image.alt = seaworldImagesAlt[c];
      seaworld_content.appendChild(seaworld_image);
  
      seaworld_card_body = document.createElement("div");
      seaworld_card_body.classList.add('card-body', 'm-1');
      seaworld_content.append(seaworld_card_body);
  
      seaworld_text = document.createElement("p");
      seaworld_text.classList.add('card-text');
      seaworld_text.innerHTML = seaworldDescription[c];
      seaworld_card_body.appendChild(seaworld_text);
  
      seaworld_date = document.createElement("p");
      seaworld_date.classList.add('card-text');
      seaworld_date_small = document.createElement("small");
      seaworld_date_small.classList.add('text-muted');
      seaworld_date_small.innerHTML = seaworldDates[c];
      seaworld_date.appendChild(seaworld_date_small);
  
      seaworld_card_body.appendChild(seaworld_date);
      count = count + 2.0;
    }
  } 
}
// ------------------------------------------------------------------------------

function other() {
  let count = 0.0;
  const floridaImages = ["states-images/florida-images/hotel.jpeg", "states-images/florida-images/bathroom.jpeg"];
  const floridaImagesAlt = ["This is an image of me standing outside of my hotel.", "This is a bathroom picture that I took in the bathroom of the hotel I was staying at."];
  const floridaDates = ["March 19, 2017", "March 23, 2017"];
  const floridaDescription = ["This is an image of me standing outside <br> of my hotel.",
  "This is a bathroom picture that I took <br> in the bathroom of the hotel I was staying at."];
  const floridaTitle = ["Hotel", "Hotel"];
  const floridaImageWidth = ["not-wide", "not-wide"];
  
  var florida_text = document.createElement("h3");
  florida_text.classList.add('body-headers');
  florida_text.innerHTML = 'Other Florida Parts';
  
  var florida_hr = document.createElement("hr");
  florida_hr.classList.add('header-hr');
  document.getElementById("demo").appendChild(florida_text);
  document.getElementById("demo").appendChild(florida_hr);
  
  var florida_div = document.createElement("div");
  florida_div.classList.add('body-images');
  document.getElementById("demo").appendChild(florida_div);
  
  var florida_image;
  var florida_card;
  var florida_card_body;
  var florida_text;
  var florida_date;
  var florida_date_small;
  
  for(var d = 0; d < floridaImages.length; d++) {
    if(count > 4.0) {
      florida_div = document.createElement("div");
      florida_div.classList.add('body-images');
      document.getElementById("demo").appendChild(florida_div);
      count = 0.0;
    }
    if(floridaImageWidth[d] != "wide") {
      var florida_content = document.createElement("div");
      florida_content.classList.add('card', 'm-5', 'mx-sm-auto', 'not-wide-card');
      florida_div.appendChild(florida_content);
  
      florida_card = document.createElement("div");
      florida_card.classList.add('card-header', 'text-center');
      florida_card.innerHTML = floridaTitle[d];
      florida_content.appendChild(florida_card);
  
      florida_image = document.createElement("img");
      florida_image.classList.add('florida-images', 'not-wide');
      florida_image.src = floridaImages[d];
      florida_image.alt = floridaImagesAlt[d];
      florida_content.appendChild(florida_image);
  
      florida_card_body = document.createElement("div");
      florida_card_body.classList.add('card-body', 'm-1');
      florida_content.append(florida_card_body);
  
      florida_text = document.createElement("p");
      florida_text.classList.add('card-text');
      florida_text.innerHTML = floridaDescription[d];
      florida_card_body.appendChild(florida_text);
  
      florida_date = document.createElement("p");
      florida_date.classList.add('card-text');
      florida_date_small = document.createElement("small");
      florida_date_small.classList.add('text-muted');
      florida_date_small.innerHTML = floridaDates[d];
      florida_date.appendChild(florida_date_small);
  
      florida_card_body.appendChild(florida_date);
      count = count + 1.5;
    }
    if(floridaImageWidth[d] === "wide") {
      var florida_content = document.createElement("div");
      florida_content.classList.add('card', 'm-5', 'mx-sm-auto', 'mid-wide-card');
      florida_div.appendChild(florida_content);
      
      florida_card = document.createElement("div");
      florida_card.classList.add('card-header', 'text-center');
      florida_card.innerHTML = floridaTitle[d];
      florida_content.appendChild(florida_card);
  
      florida_image = document.createElement("img");
      florida_image.classList.add('florida-images', 'mid-wide');
      florida_image.src = floridaImages[d];
      florida_image.alt = floridaImagesAlt[d];
      florida_content.appendChild(florida_image);
  
      florida_card_body = document.createElement("div");
      florida_card_body.classList.add('card-body', 'm-1');
      florida_content.append(florida_card_body);
  
      florida_text = document.createElement("p");
      florida_text.classList.add('card-text');
      florida_text.innerHTML = floridaDescription[d];
      florida_card_body.appendChild(florida_text);
  
      florida_date = document.createElement("p");
      florida_date.classList.add('card-text');
      florida_date_small = document.createElement("small");
      florida_date_small.classList.add('text-muted');
      florida_date_small.innerHTML = floridaDates[d];
      florida_date.appendChild(florida_date_small);
  
      florida_card_body.appendChild(florida_date);
      count = count + 2.0;
    }
  } 
}

var modal = document.getElementById("myModal");

var img = document.getElementsByClassName("florida-images");
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