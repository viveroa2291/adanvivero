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

losAngeles();
disneyland();
huntington();
function sectionSelected() {
  var x = document.getElementById("area-selector").value;
  if(x == "Los Angeles") 
  {
    while(document.getElementById("demo").firstChild) {
      document.getElementById("demo").removeChild(document.getElementById("demo").firstChild);
    } 
    document.getElementById("demo").appendChild(losAngeles()); 
  }
  else if(x == "Disneyland") 
  {
    while(document.getElementById("demo").firstChild) {
      document.getElementById("demo").removeChild(document.getElementById("demo").firstChild);
    }
    document.getElementById("demo").appendChild(disneyland()); 
  }
  else if(x == "Huntington") 
  {
    while(document.getElementById("demo").firstChild) {
      document.getElementById("demo").removeChild(document.getElementById("demo").firstChild);
    }
    document.getElementById("demo").appendChild(huntington()); 

  }
  else if(x == "all") {

    while(document.getElementById("demo").firstChild) {
      document.getElementById("demo").removeChild(document.getElementById("demo").firstChild);
    }
    losAngeles();
    disneyland();
    huntington();

  }
}



// ------------------------------------------------------------------------------
function losAngeles() {
let count = 0.0;
const losAngelesImages = ["states-images/california-images/downtown.jpeg", "states-images/california-images/pbars.jpeg"];
const losAngelesImagesAlt = ["This is a picture of my friends and I in downtown Los Angeles. I was on their shoulders preparing to do an 'L', which is a skill that is performed in mens gymnastics on the parallel bars.",
"This is the picture of me doing the 'L' on top of my friends shoulders in downtown Los Angeles."];
const losAngelesDates = ["August 6, 2015", "August 6, 2015"];
const losAngelesDescription = ["This is a picture of my friends and I in downtown <br> Los Angeles. I was on their shoulders preparing <br> to do an 'L', which is a skill that is performed in <br> mens gymnastics on the parallel bars.",
"This is the picture of me doing the 'L' on top of my <br> friends shoulders in downtown Los Angeles."];
const losAngelesTitle = ["Downtown Los Angeles", "Downtown Los Angeles"];
const losAngelesImageWidth = ["mid-wide", "mid-wide"];

var losAngeles_text = document.createElement("h3");
losAngeles_text.classList.add('body-headers');
losAngeles_text.innerHTML = 'Los Angeles';

var losAngeles_hr = document.createElement("hr");
losAngeles_hr.classList.add('header-hr');
document.getElementById("demo").appendChild(losAngeles_text);
document.getElementById("demo").appendChild(losAngeles_hr);

var losAngeles_div = document.createElement("div");
losAngeles_div.classList.add('body-images');
document.getElementById("demo").appendChild(losAngeles_div);

var losAngeles_image;
var losAngeles_card;
var losAngeles_card_body;
var losAngeles_text;
var losAngeles_date;
var losAngeles_date_small;
var losAngeles_card_body;

for(var a = 0; a < losAngelesImages.length; a++) {
  if(count > 4.0) {
    losAngeles_div = document.createElement("div");
    losAngeles_div.classList.add('body-images');
    document.getElementById("demo").appendChild(losAngeles_div);
    count = 0.0;
  }
  if(losAngelesImageWidth[a] != "wide") {
    var losAngeles_content = document.createElement("div");
    losAngeles_content.classList.add('card', 'm-5', 'mx-sm-auto', 'mid-wide-card');
    losAngeles_div.appendChild(losAngeles_content);

    losAngeles_card = document.createElement("div");
    losAngeles_card.classList.add('card-header', 'text-center');
    losAngeles_card.innerHTML = losAngelesTitle[a];
    losAngeles_content.appendChild(losAngeles_card);

    losAngeles_image = document.createElement("img");
    losAngeles_image.classList.add('california-images', 'mid-wide');
    losAngeles_image.src = losAngelesImages[a];
    losAngeles_image.alt = losAngelesImagesAlt[a];
    losAngeles_content.appendChild(losAngeles_image);

    losAngeles_card_body = document.createElement("div");
    losAngeles_card_body.classList.add('card-body', 'm-1');
    losAngeles_content.append(losAngeles_card_body);

    losAngeles_text = document.createElement("p");
    losAngeles_text.classList.add('card-text');
    losAngeles_text.innerHTML = losAngelesDescription[a];
    losAngeles_card_body.appendChild(losAngeles_text);

    losAngeles_date = document.createElement("p");
    losAngeles_date.classList.add('card-text');
    losAngeles_date_small = document.createElement("small");
    losAngeles_date_small.classList.add('text-muted');
    losAngeles_date_small.innerHTML = losAngelesDates[a];
    losAngeles_date.appendChild(losAngeles_date_small);

    losAngeles_card_body.appendChild(losAngeles_date);
    count = count + 1.5;
  }
  if(losAngelesImageWidth[a] === "wide") {
    var losAngeles_content = document.createElement("div");
    losAngeles_content.classList.add('card', 'm-5', 'mx-sm-auto', 'wide-card');
    losAngeles_div.appendChild(losAngeles_content);
    
    losAngeles_card = document.createElement("div");
    losAngeles_card.classList.add('card-header', 'text-center');
    losAngeles_card.innerHTML = losAngelesTitle[a];
    losAngeles_content.appendChild(losAngeles_card);

    losAngeles_image = document.createElement("img");
    losAngeles_image.classList.add('california-images', 'wide');
    losAngeles_image.src = losAngelesImages[a];
    losAngeles_image.alt = losAngelesImagesAlt[a];
    losAngeles_content.appendChild(losAngeles_image);

    losAngeles_card_body = document.createElement("div");
    losAngeles_card_body.classList.add('card-body', 'm-1');
    losAngeles_content.append(losAngeles_card_body);

    losAngeles_text = document.createElement("p");
    losAngeles_text.classList.add('card-text');
    losAngeles_text.innerHTML = losAngelesDescription[a];
    losAngeles_card_body.appendChild(losAngeles_text);

    losAngeles_date = document.createElement("p");
    losAngeles_date.classList.add('card-text');
    losAngeles_date_small = document.createElement("small");
    losAngeles_date_small.classList.add('text-muted');
    losAngeles_date_small.innerHTML = losAngelesDates[a];
    losAngeles_date.appendChild(losAngeles_date_small);

    losAngeles_card_body.appendChild(losAngeles_date);
    count = count + 2.0;
  }
}
}
// ------------------------------------------------------------------------------
function disneyland() {
let count = 0.0;
const disneylandImages = ["states-images/california-images/disneyland-jon.jpeg", "states-images/california-images/disneyland-jon2.jpeg", "states-images/california-images/disneyland-kristin.jpeg"];
const disneylandImagesAlt = ["This is a picture of my friend Jon and I at Disneyland.",
"This is an image of my friend Jon and I at Disneyland in front of the infamous Mickey Mouse roller coaster.",
"This is an image of my friend Jon and Kristin and I at Disneyland. <br><br><b> Fun fact, they are twins.</b>"];
const disneylandDates = ["August 7, 2015", "August 7, 2015", "August 7, 2015"];
const disneylandDescription = ["This is a picture of my friend Jon and I <br> at Disneyland.", 
"This is an image of my friend Jon and I <br> at Disneyland in front of the infamous <br> Mickey Mouse roller coaster.",
"This is an image of my friend Jon and Kristin and I at Disneyland. <br> Fun fact, they are twins."];
const disneylandTitle = ["Disneyland", "Disneyland", "Disneyland"];
const disneylandImageWidth = ["not-wide", "not-wide", "wide"];

var disneyland_text = document.createElement("h3");
disneyland_text.classList.add('body-headers');
disneyland_text.innerHTML = 'Disneyland';

var disneyland_hr = document.createElement("hr");
disneyland_hr.classList.add('header-hr');
document.getElementById("demo").appendChild(disneyland_text);
document.getElementById("demo").appendChild(disneyland_hr);

var disneyland_div = document.createElement("div");
disneyland_div.classList.add('body-images');
document.getElementById("demo").appendChild(disneyland_div);

var disneyland_image;
var disneyland_card;
var disneyland_card_body;
var disneyland_text;
var disneyland_date;
var disneyland_date_small;

count = 0.0;

for(var b = 0; b < disneylandImages.length; b++) {
  if(count > 2.9) {
    disneyland_div = document.createElement("div");
    disneyland_div.classList.add('body-images');
    document.getElementById("demo").appendChild(disneyland_div);
    count = 0.0;
  }
  if(disneylandImageWidth[b] != "wide") {
    var disneyland_content = document.createElement("div");
    disneyland_content.classList.add('card', 'm-5', 'mx-sm-auto', 'not-wide-card');
    disneyland_div.appendChild(disneyland_content);

    disneyland_card = document.createElement("div");
    disneyland_card.classList.add('card-header', 'text-center');
    disneyland_card.innerHTML = disneylandTitle[b];
    disneyland_content.appendChild(disneyland_card);

    disneyland_image = document.createElement("img");
    disneyland_image.classList.add('california-images', 'not-wide');
    disneyland_image.src = disneylandImages[b];
    disneyland_image.alt = disneylandImagesAlt[b];
    disneyland_content.appendChild(disneyland_image);

    disneyland_card_body = document.createElement("div");
    disneyland_card_body.classList.add('card-body', 'm-1');
    disneyland_content.append(disneyland_card_body);

    disneyland_text = document.createElement("p");
    disneyland_text.classList.add('card-text');
    disneyland_text.innerHTML = disneylandDescription[b];
    disneyland_card_body.appendChild(disneyland_text);

    disneyland_date = document.createElement("p");
    disneyland_date.classList.add('card-text');
    disneyland_date_small = document.createElement("small");
    disneyland_date_small.classList.add('text-muted');
    disneyland_date_small.innerHTML = disneylandDates[b];
    disneyland_date.appendChild(disneyland_date_small);

    disneyland_card_body.appendChild(disneyland_date);
    count = count + 1.5;
  }
  if(disneylandImageWidth[b] === "wide") {
    var disneyland_content = document.createElement("div");
    disneyland_content.classList.add('card', 'm-5', 'mx-sm-auto', 'wide-card');
    disneyland_div.appendChild(disneyland_content);

    disneyland_card = document.createElement("div");
    disneyland_card.classList.add('card-header', 'text-center');
    disneyland_card.innerHTML = disneylandTitle[b];
    disneyland_content.appendChild(disneyland_card);

    disneyland_image = document.createElement("img");
    disneyland_image.classList.add('california-images', 'wide');
    disneyland_image.src = disneylandImages[b];
    disneyland_image.alt = disneylandImagesAlt[b];
    disneyland_content.appendChild(disneyland_image);

    disneyland_card_body = document.createElement("div");
    disneyland_card_body.classList.add('card-body', 'm-1');
    disneyland_content.append(disneyland_card_body);

    disneyland_text = document.createElement("p");
    disneyland_text.classList.add('card-text');
    disneyland_text.innerHTML = disneylandDescription[b];
    disneyland_card_body.appendChild(disneyland_text);

    disneyland_date = document.createElement("p");
    disneyland_date.classList.add('card-text');
    disneyland_date_small = document.createElement("small");
    disneyland_date_small.classList.add('text-muted');
    disneyland_date_small.innerHTML = disneylandDates[b];
    disneyland_date.appendChild(disneyland_date_small);

    disneyland_card_body.appendChild(disneyland_date);
    count = count + 2.0;
  }
}
}
// ------------------------------------------------------------------------------
function huntington() {
let count = 0.0;
const huntingtonImages = ["states-images/california-images/huntington-jon.jpeg", "states-images/california-images/huntington-jon2.jpeg", "states-images/california-images/huntington-karina.jpeg", "states-images/california-images/pyramid.jpeg", "states-images/california-images/huntington-holly.jpeg"];
const huntingtonImagesAlt = ["This is an image of my friend Jon and I at Huntington Beach.",
"This is an image of my friend Jon and I at Huntington Beach.",
"This is an image of my friend Karina and I at Huntington Beach.",
"This is an image of my friends and I attempting to do a pyramid.",
"This is an image of my friend Holly and I at Huntington Beach."];
const huntingtonDates = ["August 10, 2015", "August 10, 2015", "August 10, 2015", "August 10, 2015", "August 10, 2015"];
const huntingtonDescription = ["This is an image of my friend Jon and I <br> at Huntington Beach.",
"This is an image of my friend Jon and I <br> at Huntington Beach.", 
"This is an image of my friend Karina and I <br> at Huntington Beach.", 
"This is an image of my friends and I <br> attempting to do a pyramid.",
"This is an image of my friend Holly and I <br> at Huntington Beach."];
const huntingtonTitle = ["Huntington Beach", "Huntington Beach", "Huntington Beach", "Huntington Beach", "Huntington Beach"];
const huntingtonImageWidth = ["not-wide", "not-wide", "not-wide", "not-wide", "not-wide"];

var huntington_text = document.createElement("h3");
huntington_text.classList.add('body-headers');
huntington_text.innerHTML = 'Huntington Beach';

var huntington_hr = document.createElement("hr");
huntington_hr.classList.add('header-hr');
document.getElementById("demo").appendChild(huntington_text);
document.getElementById("demo").appendChild(huntington_hr);

var huntington_div = document.createElement("div");
huntington_div.classList.add('body-images');
document.getElementById("demo").appendChild(huntington_div);

var huntington_image;
var huntington_card;
var huntington_card_body;
var huntington_text;
var huntington_date;
var huntington_date_small;

count = 0.0;

for(var c = 0; c < huntingtonImages.length; c++) {
  if(count > 4.0) {
    huntington_div = document.createElement("div");
    huntington_div.classList.add('body-images');
    document.getElementById("demo").appendChild(huntington_div);
    count = 0.0;
  }
  if(huntingtonImageWidth[c] != "wide") {
    var huntington_content = document.createElement("div");
    huntington_content.classList.add('card', 'm-5', 'mx-sm-auto', 'not-wide-card');
    huntington_div.appendChild(huntington_content);

    huntington_card = document.createElement("div");
    huntington_card.classList.add('card-header', 'text-center');
    huntington_card.innerHTML = huntingtonTitle[c];
    huntington_content.appendChild(huntington_card);

    huntington_image = document.createElement("img");
    huntington_image.classList.add('california-images', 'not-wide');
    huntington_image.src = huntingtonImages[c];
    huntington_image.alt = huntingtonImagesAlt[c];
    huntington_content.appendChild(huntington_image);

    huntington_card_body = document.createElement("div");
    huntington_card_body.classList.add('card-body', 'm-1');
    huntington_content.append(huntington_card_body);

    huntington_text = document.createElement("p");
    huntington_text.classList.add('card-text');
    huntington_text.innerHTML = huntingtonDescription[c];
    huntington_card_body.appendChild(huntington_text);

    huntington_date = document.createElement("p");
    huntington_date.classList.add('card-text');
    huntington_date_small = document.createElement("small");
    huntington_date_small.classList.add('text-muted');
    huntington_date_small.innerHTML = huntingtonDates[c];
    huntington_date.appendChild(huntington_date_small);

    huntington_card_body.appendChild(huntington_date);
    count = count + 1.5;
  }
}
}
// ------------------------------------------------------------------------------

var modal = document.getElementById("myModal");

var img = document.getElementsByClassName("california-images");
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