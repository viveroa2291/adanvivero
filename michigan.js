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
var modal = document.getElementById("myModal");
var img = document.getElementsByClassName("michigan-images");
var image = document.getElementsByClassName("box-image");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

sawyer();
lakehouse();
wakefield();
detroit();
function sectionSelected() {
  var x = document.getElementById("area-selector").value;
  if(x == "Sawyer") 
  {
    while(document.getElementById("demo").firstChild) {
      document.getElementById("demo").removeChild(document.getElementById("demo").firstChild);
    } 
    document.getElementById("demo").appendChild(sawyer()); 
  }
  else if(x == "Lakehouse") 
  {
    while(document.getElementById("demo").firstChild) {
      document.getElementById("demo").removeChild(document.getElementById("demo").firstChild);
    }
    document.getElementById("demo").appendChild(lakehouse()); 
  }
  else if(x == "Wakefield") 
  {
    while(document.getElementById("demo").firstChild) {
      document.getElementById("demo").removeChild(document.getElementById("demo").firstChild);
    }
    document.getElementById("demo").appendChild(wakefield()); 

  }
  else if(x == "Detroit") 
  {
    while(document.getElementById("demo").firstChild) {
      document.getElementById("demo").removeChild(document.getElementById("demo").firstChild);
    }
    document.getElementById("demo").appendChild(detroit()); 

  }
  else if(x == "all") {

    while(document.getElementById("demo").firstChild) {
      document.getElementById("demo").removeChild(document.getElementById("demo").firstChild);
    }
    sawyer();
    lakehouse();
    wakefield();
    detroit();
  }
}
function sawyer() {
let count = 0.0;
const sawyerImages = ["states-images/michigan-images/sami.jpeg", "states-images/michigan-images/nicole.jpeg", "states-images/michigan-images/sami2.jpeg", "states-images/michigan-images/nicole-sami.jpeg", "states-images/michigan-images/gabi-nora.jpeg", "states-images/michigan-images/sawyer2.jpeg", "states-images/michigan-images/alex.jpeg", "states-images/michigan-images/kaitlin-alex.jpeg", "states-images/michigan-images/sawyer.jpeg", "states-images/michigan-images/alex2.jpeg"];
const sawyerImagesAlt = ["This is the picture of my friend Sami and I sitting on a tree at The Dunes in Sawyer Michigan.",
"This is the picture of my friend Nicole and I sitting on a tree at The Dunes in Sawyer Michigan.",
"This is the picture of my friend Sami and I in the clean mud of The Dunes in Sawyer Michigan.",
"This is the picture of my friends Nicole and Sami in the clean mud of The Dunes in Sawyer Michigan.",
"This is the picture of my friends Gabi and Nora at the beach in Sawyer Michigan.",
"This is the picture of my friends Alex, Kaitlin, Gabi, and Nora at the beach in Sawyer Michigan.",
"This is the picture of my friend Alex and I sitting on a tree at the Dunes.",
"This is the picture of my friends Alex, Kaitlin, and I sitting on a tree at the Dunes covered in clean mud.",
"This is a group picture of my friends and I sitting on a tree at The Dunes.",
"This is a selfie taken by me of my friend Alex and I covered in clean mud at The Dunes."];
const sawyerDates = ["July 14, 2019", "July 14, 2019", "July 14, 2019", "July 14, 2019", "August 10, 2019", "August 10, 2019", "August 10, 2019", "August 10, 2019", "August 10, 2019", "August 10, 2019"];
const sawyerDescription = ["This is the picture of my friend Sami and I <br> sitting on a tree at The Dunes in Sawyer <br> Michigan.",
"This is the picture of my friend Nicole and I <br> sitting on a tree at The Dunes in Sawyer <br> Michigan.",
"This is the picture of my friend Sami and I <br> in the clean mud of The Dunes in Sawyer <br> Michigan.",
"This is the picture of my friends Nicole and Sami in the clean mud of <br> The Dunes in Sawyer Michigan.",
"This is the picture of my friends Gabi and Nora at the beach in <br> Sawyer Michigan.",
"This is the picture of my friends Alex, Kaitlin, Gabi, and Nora <br> at the beach in Sawyer Michigan.",
"This is the picture of my friend Alex and I sitting on a tree at the Dunes.",
"This is the picture of my friends Alex, Kaitlin, and I sitting on a <br> tree at the Dunes covered in clean mud.",
"This is a group picture of my friends and I sitting on a tree at <br> The Dunes.",
"This is a selfie taken by me of my friend <br> Alex and I covered in clean mud at <br> The Dunes."];
const sawyerTitle = ["The Dunes", "The Dunes", "The Dunes", "Clean mud of The Dunes", "Beach of the Dunes", "Beach of the Dunes", "The Dunes", "The Dunes", "The Dunes", "Clean Mud"];
const sawyerImageWidth = ["not-wide", "not-wide", "not-wide", "mid-wide", "mid-wide", "mid-wide", "mid-wide", "mid-wide", "mid-wide", "not-wide"];

var sawyer_text = document.createElement("h3");
sawyer_text.classList.add('body-headers');
sawyer_text.innerHTML = 'Sawyer (The Dunes)';

var sawyer_hr = document.createElement("hr");
sawyer_hr.classList.add('header-hr');
document.getElementById("demo").appendChild(sawyer_text);
document.getElementById("demo").appendChild(sawyer_hr);

var sawyer_div = document.createElement("div");
sawyer_div.classList.add('body-images');
document.getElementById("demo").appendChild(sawyer_div);

var sawyer_image;
var sawyer_card;
var sawyer_card_body;
var sawyer_text;
var sawyer_date;
var sawyer_date_small;
var sawyer_card_body;

for(var a = 0; a < sawyerImages.length; a++) {
  if(count >= 4.0) {
    sawyer_div = document.createElement("div");
    sawyer_div.classList.add('body-images');
    document.getElementById("demo").appendChild(sawyer_div);
    count = 0.0;
  }
  if(sawyerImageWidth[a] != "mid-wide") {
    var sawyer_content = document.createElement("div");
    sawyer_content.classList.add('card', 'm-5', 'mx-sm-auto', 'not-wide-card');
    sawyer_div.appendChild(sawyer_content);

    sawyer_card = document.createElement("div");
    sawyer_card.classList.add('card-header', 'text-center');
    sawyer_card.innerHTML = sawyerTitle[a];
    sawyer_content.appendChild(sawyer_card);

    sawyer_image = document.createElement("img");
    sawyer_image.classList.add('michigan-images', 'not-wide');
    sawyer_image.src = sawyerImages[a];
    sawyer_image.alt = sawyerImagesAlt[a];
    sawyer_content.appendChild(sawyer_image);

    sawyer_card_body = document.createElement("div");
    sawyer_card_body.classList.add('card-body', 'm-1');
    sawyer_content.append(sawyer_card_body);

    sawyer_text = document.createElement("p");
    sawyer_text.classList.add('card-text');
    sawyer_text.innerHTML = sawyerDescription[a];
    sawyer_card_body.appendChild(sawyer_text);

    sawyer_date = document.createElement("p");
    sawyer_date.classList.add('card-text');
    sawyer_date_small = document.createElement("small");
    sawyer_date_small.classList.add('text-muted');
    sawyer_date_small.innerHTML = sawyerDates[a];
    sawyer_date.appendChild(sawyer_date_small);

    sawyer_card_body.appendChild(sawyer_date);
    count = count + 1.5;
  }
  if(sawyerImageWidth[a] === "mid-wide") {
    var sawyer_content = document.createElement("div");
    sawyer_content.classList.add('card', 'm-5', 'mx-sm-auto', 'mid-wide-card');
    sawyer_div.appendChild(sawyer_content);
    
    sawyer_card = document.createElement("div");
    sawyer_card.classList.add('card-header', 'text-center');
    sawyer_card.innerHTML = sawyerTitle[a];
    sawyer_content.appendChild(sawyer_card);

    sawyer_image = document.createElement("img");
    sawyer_image.classList.add('michigan-images', 'mid-wide');
    sawyer_image.src = sawyerImages[a];
    sawyer_image.alt = sawyerImagesAlt[a];
    sawyer_content.appendChild(sawyer_image);

    sawyer_card_body = document.createElement("div");
    sawyer_card_body.classList.add('card-body', 'm-1');
    sawyer_content.append(sawyer_card_body);

    sawyer_text = document.createElement("p");
    sawyer_text.classList.add('card-text');
    sawyer_text.innerHTML = sawyerDescription[a];
    sawyer_card_body.appendChild(sawyer_text);

    sawyer_date = document.createElement("p");
    sawyer_date.classList.add('card-text');
    sawyer_date_small = document.createElement("small");
    sawyer_date_small.classList.add('text-muted');
    sawyer_date_small.innerHTML = sawyerDates[a];
    sawyer_date.appendChild(sawyer_date_small);

    sawyer_card_body.appendChild(sawyer_date);
    count = count + 2.0;
  }
}
function images() {
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
}
function lakehouse() {
  let count = 0.0;
const lakehouseImages = ["states-images/michigan-images/nikki.jpeg", "states-images/michigan-images/nikki-chloe.jpeg", "states-images/michigan-images/nikki2.jpeg", "states-images/michigan-images/fireworks.jpeg"];
const lakehouseImagesAlt = ["This is a picture of my friend Nikki and I at Lake Michigan Beach on the Fourth of July.",
"This is an image of my friends Nikki, Chloe, and I at Lake Michigan Beach on the Fourth of July.",
"This is an image of my friends Nikki and I at Lake Michigan Beach on the Fourth of July.",
"This is an image of my friends Nikki, Chloe, and I blowing up fireworks outside on the Fourth of July."];
const lakehouseDates = ["July 4, 2020", "July 4, 2020", "July 4, 2020", "July 4, 2020"];
const lakehouseDescription = ["This is a picture of my friend Nikki and I <br> at Lake Michigan Beach on the Fourth <br> of July.",
"This is an image of my friends Nikki, Chloe, <br> and I at Lake Michigan Beach on the <br> Fourth of July.",
"This is an image of my friends Nikki and I <br> at Lake Michigan Beach on the Fourth <br> of July.",
"This is an image of my friends Nikki, Chloe, <br> and I blowing up fireworks outside on the <br> Fourth of July."];
const lakehouseTitle = ["Lake Michigan Beach", "Lake Michigan Beach", "Lake Michigan Beach", "Fireworks"];
const lakehouseImageWidth = ["not-wide", "not-wide", "not-wide", "not-wide"];

var lakehouse_text = document.createElement("h3");
lakehouse_text.classList.add('body-headers');
lakehouse_text.innerHTML = 'Lake Michigan Beach (Friend\'s Lakehouse)';

var lakehouse_hr = document.createElement("hr");
lakehouse_hr.classList.add('header-hr');
document.getElementById("demo").appendChild(lakehouse_text);
document.getElementById("demo").appendChild(lakehouse_hr);

var lakehouse_div = document.createElement("div");
lakehouse_div.classList.add('body-images');
document.getElementById("demo").appendChild(lakehouse_div);

var lakehouse_image;
var lakehouse_card;
var lakehouse_card_body;
var lakehouse_text;
var lakehouse_date;
var lakehouse_date_small;

count = 0.0;

for(var b = 0; b < lakehouseImages.length; b++) {
  if(count > 4.0) {
    lakehouse_div = document.createElement("div");
    lakehouse_div.classList.add('body-images');
    document.getElementById("demo").appendChild(lakehouse_div);
    count = 0.0;
  }
  if(lakehouseImageWidth[b] != "wide") {
    var lakehouse_content = document.createElement("div");
    lakehouse_content.classList.add('card', 'm-5', 'mx-sm-auto', 'not-wide-card');
    lakehouse_div.appendChild(lakehouse_content);

    lakehouse_card = document.createElement("div");
    lakehouse_card.classList.add('card-header', 'text-center');
    lakehouse_card.innerHTML = lakehouseTitle[b];
    lakehouse_content.appendChild(lakehouse_card);

    lakehouse_image = document.createElement("img");
    lakehouse_image.classList.add('michigan-images', 'not-wide');
    lakehouse_image.src = lakehouseImages[b];
    lakehouse_image.alt = lakehouseImagesAlt[b];
    lakehouse_content.appendChild(lakehouse_image);

    lakehouse_card_body = document.createElement("div");
    lakehouse_card_body.classList.add('card-body', 'm-1');
    lakehouse_content.append(lakehouse_card_body);

    lakehouse_text = document.createElement("p");
    lakehouse_text.classList.add('card-text');
    lakehouse_text.innerHTML = lakehouseDescription[b];
    lakehouse_card_body.appendChild(lakehouse_text);

    lakehouse_date = document.createElement("p");
    lakehouse_date.classList.add('card-text');
    lakehouse_date_small = document.createElement("small");
    lakehouse_date_small.classList.add('text-muted');
    lakehouse_date_small.innerHTML = lakehouseDates[b];
    lakehouse_date.appendChild(lakehouse_date_small);

    lakehouse_card_body.appendChild(lakehouse_date);
    count = count + 1.5;
  }
  if(lakehouseImageWidth[b] === "wide") {
    var lakehouse_content = document.createElement("div");
    lakehouse_content.classList.add('card', 'm-5', 'mx-sm-auto', 'wide-card');
    lakehouse_div.appendChild(lakehouse_content);

    lakehouse_card = document.createElement("div");
    lakehouse_card.classList.add('card-header', 'text-center');
    lakehouse_card.innerHTML = lakehouseTitle[b];
    lakehouse_content.appendChild(lakehouse_card);

    lakehouse_image = document.createElement("img");
    lakehouse_image.classList.add('michigan-images', 'wide');
    lakehouse_image.src = lakehouseImages[b];
    lakehouse_image.alt = lakehouseImagesAlt[b];
    lakehouse_content.appendChild(lakehouse_image);

    lakehouse_card_body = document.createElement("div");
    lakehouse_card_body.classList.add('card-body', 'm-1');
    lakehouse_content.append(lakehouse_card_body);

    lakehouse_text = document.createElement("p");
    lakehouse_text.classList.add('card-text');
    lakehouse_text.innerHTML = lakehouseDescription[b];
    lakehouse_card_body.appendChild(lakehouse_text);

    lakehouse_date = document.createElement("p");
    lakehouse_date.classList.add('card-text');
    lakehouse_date_small = document.createElement("small");
    lakehouse_date_small.classList.add('text-muted');
    lakehouse_date_small.innerHTML = lakehouseDates[b];
    lakehouse_date.appendChild(lakehouse_date_small);

    lakehouse_card_body.appendChild(lakehouse_date);
    count = count + 2.0;
  }
}
  function images() {
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
}

function wakefield() {
let count = 0.0;
const wakefieldImages = ["states-images/michigan-images/cabin.jpeg", "states-images/michigan-images/wakefield3.jpeg", "states-images/michigan-images/ski.jpeg", "states-images/michigan-images/wakefield4.jpeg", "states-images/michigan-images/wakefield.jpeg", "states-images/michigan-images/wakefield2.jpeg"];
const wakefieldImagesAlt = ["This is an image of me sitting inside my cabin before skiing.", 
"This is an image of me skiing in Wakefield Michigan.", 
"This is an image of where I was skiing in Wakefield Michigan.",
"This is a selfie of me skiing in Wakefield Michigan after I fell and had snow all over my face.",
"This is a selfie of me skiing in Wakefield Michigan.",
"This is a selfie of me skiing in Wakefield Michigan."];
const wakefieldDates = ["January 22, 2022", "January 22, 2022", "January 22, 2022", "January 22, 2022", "January 23, 2022", "January 23, 2022"];
const wakefieldDescription = ["This is an image of me sitting inside my <br> cabin before skiing.", 
"This is an image of me skiing in Wakefield <br> Michigan.",
"This is an image of where I was skiing in Wakefield Michigan.",
"This is a selfie of me skiing in Wakefield Michigan after I fell <br> and had snow all over my face.",
"This is a selfie of me skiing in Wakefield Michigan.",
"This is a selfie of me skiing in Wakefield Michigan."];
const wakefieldTitle = ["Cabin", "Wakefield", "Wakefield", "Wakefield", "Wakefield", "Wakefield"];
const wakefieldImageWidth = ["not-wide", "not-wide", "mid-wide", "mid-wide", "mid-wide", "mid-wide"];

var wakefield_text = document.createElement("h3");
wakefield_text.classList.add('body-headers');
wakefield_text.innerHTML = 'Wakefield';

var wakefield_hr = document.createElement("hr");
wakefield_hr.classList.add('header-hr');
document.getElementById("demo").appendChild(wakefield_text);
document.getElementById("demo").appendChild(wakefield_hr);

var wakefield_div = document.createElement("div");
wakefield_div.classList.add('body-images');
document.getElementById("demo").appendChild(wakefield_div);

var wakefield_image;
var wakefield_card;
var wakefield_card_body;
var wakefield_text;
var wakefield_date;
var wakefield_date_small;

count = 0.0;

for(var c = 0; c < wakefieldImages.length; c++) {
  if(count >= 3.0) {
    wakefield_div = document.createElement("div");
    wakefield_div.classList.add('body-images');
    document.getElementById("demo").appendChild(wakefield_div);
    count = 0.0;
  }
  if(wakefieldImageWidth[c] != "mid-wide") {
    var wakefield_content = document.createElement("div");
    wakefield_content.classList.add('card', 'm-5', 'mx-sm-auto', 'not-wide-card');
    wakefield_div.appendChild(wakefield_content);

    wakefield_card = document.createElement("div");
    wakefield_card.classList.add('card-header', 'text-center');
    wakefield_card.innerHTML = wakefieldTitle[c];
    wakefield_content.appendChild(wakefield_card);

    wakefield_image = document.createElement("img");
    wakefield_image.classList.add('michigan-images', 'not-wide');
    wakefield_image.src = wakefieldImages[c];
    wakefield_image.alt = wakefieldImagesAlt[c];
    wakefield_content.appendChild(wakefield_image);

    wakefield_card_body = document.createElement("div");
    wakefield_card_body.classList.add('card-body', 'm-1');
    wakefield_content.append(wakefield_card_body);

    wakefield_text = document.createElement("p");
    wakefield_text.classList.add('card-text');
    wakefield_text.innerHTML = wakefieldDescription[c];
    wakefield_card_body.appendChild(wakefield_text);

    wakefield_date = document.createElement("p");
    wakefield_date.classList.add('card-text');
    wakefield_date_small = document.createElement("small");
    wakefield_date_small.classList.add('text-muted');
    wakefield_date_small.innerHTML = wakefieldDates[c];
    wakefield_date.appendChild(wakefield_date_small);

    wakefield_card_body.appendChild(wakefield_date);
    count = count + 1.5;
  }
  if(wakefieldImageWidth[c] === "mid-wide") {
    var wakefield_content = document.createElement("div");
    wakefield_content.classList.add('card', 'm-5', 'mx-sm-auto', 'mid-wide-card');
    wakefield_div.appendChild(wakefield_content);

    wakefield_card = document.createElement("div");
    wakefield_card.classList.add('card-header', 'text-center');
    wakefield_card.innerHTML = wakefieldTitle[c];
    wakefield_content.appendChild(wakefield_card);

    wakefield_image = document.createElement("img");
    wakefield_image.classList.add('michigan-images', 'mid-wide');
    wakefield_image.src = wakefieldImages[c];
    wakefield_image.alt = wakefieldImagesAlt[c];
    wakefield_content.appendChild(wakefield_image);

    wakefield_card_body = document.createElement("div");
    wakefield_card_body.classList.add('card-body', 'm-1');
    wakefield_content.append(wakefield_card_body);

    wakefield_text = document.createElement("p");
    wakefield_text.classList.add('card-text');
    wakefield_text.innerHTML = wakefieldDescription[c];
    wakefield_card_body.appendChild(wakefield_text);

    wakefield_date = document.createElement("p");
    wakefield_date.classList.add('card-text');
    wakefield_date_small = document.createElement("small");
    wakefield_date_small.classList.add('text-muted');
    wakefield_date_small.innerHTML = wakefieldDates[c];
    wakefield_date.appendChild(wakefield_date_small);

    wakefield_card_body.appendChild(wakefield_date);
    count = count + 2.0;
  }
}
  function images() {
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
}

function detroit() {
let count = 0.0;
const detroitImages = ["states-images/michigan-images/me.jpeg"];
const detroitImagesAlt = ["This is an image of me sitting inside a bus on a way to a German event."];
const detroitDates = ["August 31, 2013"];
const detroitDescription = ["This is an image of me sitting inside <br> a bus on a way to a German event."];
const detroitTitle = ["German Event"];
const detroitImageWidth = ["not-wide"];

var detroit_text = document.createElement("h3");
detroit_text.classList.add('body-headers');
detroit_text.innerHTML = 'Detroit';

var detroit_hr = document.createElement("hr");
detroit_hr.classList.add('header-hr');
document.getElementById("demo").appendChild(detroit_text);
document.getElementById("demo").appendChild(detroit_hr);

var detroit_div = document.createElement("div");
detroit_div.classList.add('body-images');
document.getElementById("demo").appendChild(detroit_div);

var detroit_image;
var detroit_card;
var detroit_card_body;
var detroit_text;
var detroit_date;
var detroit_date_small;

count = 0.0;

for(var d = 0; d < detroitImages.length; d++) {
  if(count > 2.9) {
    detroit_div = document.createElement("div");
    detroit_div.classList.add('body-images');
    document.getElementById("demo").appendChild(detroit_div);
    count = 0.0;
  }
  if(detroitImageWidth[d] != "wide") {
    var detroit_content = document.createElement("div");
    detroit_content.classList.add('card', 'm-5', 'mx-sm-auto', 'not-wide-card');
    detroit_div.appendChild(detroit_content);

    detroit_card = document.createElement("div");
    detroit_card.classList.add('card-header', 'text-center');
    detroit_card.innerHTML = detroitTitle[d];
    detroit_content.appendChild(detroit_card);

    detroit_image = document.createElement("img");
    detroit_image.classList.add('michigan-images', 'not-wide');
    detroit_image.src = detroitImages[d];
    detroit_image.alt = detroitImagesAlt[d];
    detroit_content.appendChild(detroit_image);

    detroit_card_body = document.createElement("div");
    detroit_card_body.classList.add('card-body', 'm-1');
    detroit_content.append(detroit_card_body);

    detroit_text = document.createElement("p");
    detroit_text.classList.add('card-text');
    detroit_text.innerHTML = detroitDescription[d];
    detroit_card_body.appendChild(detroit_text);

    detroit_date = document.createElement("p");
    detroit_date.classList.add('card-text');
    detroit_date_small = document.createElement("small");
    detroit_date_small.classList.add('text-muted');
    detroit_date_small.innerHTML = detroitDates[d];
    detroit_date.appendChild(detroit_date_small);

    detroit_card_body.appendChild(detroit_date);
    count = count + 1.5;
  }
  if(detroitImageWidth[d] === "wide") {
    var detroit_content = document.createElement("div");
    detroit_content.classList.add('card', 'm-5', 'mx-sm-auto', 'wide-card');
    detroit_div.appendChild(detroit_content);

    detroit_card = document.createElement("div");
    detroit_card.classList.add('card-header', 'text-center');
    detroit_card.innerHTML = detroitTitle[d];
    detroit_content.appendChild(detroit_card);

    detroit_image = document.createElement("img");
    detroit_image.classList.add('michigan-images', 'wide');
    detroit_image.src = detroitImages[d];
    detroit_image.alt = detroitImagesAlt[d];
    detroit_content.appendChild(detroit_image);

    detroit_card_body = document.createElement("div");
    detroit_card_body.classList.add('card-body', 'm-1');
    detroit_content.append(detroit_card_body);

    detroit_text = document.createElement("p");
    detroit_text.classList.add('card-text');
    detroit_text.innerHTML = detroitDescription[d];
    detroit_card_body.appendChild(detroit_text);

    detroit_date = document.createElement("p");
    detroit_date.classList.add('card-text');
    detroit_date_small = document.createElement("small");
    detroit_date_small.classList.add('text-muted');
    detroit_date_small.innerHTML = detroitDates[d];
    detroit_date.appendChild(detroit_date_small);

    detroit_card_body.appendChild(detroit_date);
    count = count + 2.0;
  }
}
function images() {
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
}

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