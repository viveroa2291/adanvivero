// When minimized, it will do an animation with the hamburger feature
function myRotate(x) {    
  x.classList.toggle("change");
}   
// When minimized, it will display the hamburger feature 
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
// ------------------------------------------------------------------------------
/**
 * Area Selected 
 */

function sectionSelected() {
  var x = document.getElementById("area-selector").value;
  document.getElementById("demo").innerHTML = x;
}


// ------------------------------------------------------------------------------
const vandervoortImages = [''];
function vandervoortSelected() {

}
// ------------------------------------------------------------------------------
const ozarkSection = document.getElementById('ozark');

const ozarkImages = ["states-images/arkansas-images/view.jpeg", "states-images/arkansas-images/restaurant.jpeg"];
const ozarkImagesAlt = ["This is a picture of me on the side of the road. We were driving and decided to take a picture of the view which is difficult to see with the barricade in the way.", 
"This is a picture of me outside of one of my favorite Mexican restaurant when visiting my cousins. They provide very delicious food and give you large portions."];
const ozarkDates = ["August 16, 2017", "August 16, 2017"];
const ozarkDescription = ["This is a picture of me on the side of the road. <br> We were driving and decided to take a picture <br> of the view which is difficult to see with the <br> barricade in the way.",
"This is a picture of me outside of one of my favorite Mexican <br> restaurant when visiting my cousins. They provide very delicious <br> food and give you large portions."];
const ozarkTitle = ["On The Road", "Mexican Restaurant"];
var ozark_div_element = document.createElement("div");
ozark_div_element.classList.add('body-images');
document.getElementById("ozark").appendChild(ozark_div_element);

var ozark_image_element;
var ozark_card_element;
var ozark_card_body_element;
var ozark_card_text;
var ozark_card_date;
var ozark_card_date_small;
var ozark_card_body_element;

for (var a = 0; a < ozarkImages.length; a++) {
  var ozark_content_element = document.createElement("div");
  ozark_content_element.classList.add('card', 'm-5', 'mx-sm-auto', 'not-wide-card');
  ozark_div_element.appendChild(ozark_content_element);
  

  ozark_card_element = document.createElement("div");
  ozark_card_element.classList.add('card-header', 'text-center');
  ozark_card_element.innerHTML = ozarkTitle[a];
  ozark_content_element.appendChild(ozark_card_element);

  ozark_image_element = document.createElement("img");
  ozark_image_element.classList.add('arkansas-images', 'not-wide');
  ozark_image_element.src = ozarkImages[a];
  ozark_image_element.alt = ozarkImagesAlt[a];
  ozark_content_element.appendChild(ozark_image_element);

  ozark_card_body_element = document.createElement("div");
  ozark_card_body_element.classList.add('card-body', 'm-1');
  ozark_content_element.append(ozark_card_body_element);

  ozark_card_text = document.createElement("p");
  ozark_card_text.classList.add('card-text');
  ozark_card_text.innerHTML = ozarkDescription[a];
  ozark_card_body_element.appendChild(ozark_card_text);

  ozark_card_date = document.createElement("p");
  ozark_card_date.classList.add('card-text');
  ozark_card_date_small = document.createElement("small");
  ozark_card_date_small.classList.add('text-muted');
  ozark_card_date_small.innerHTML = ozarkDates[a];
  ozark_card_date.appendChild(ozark_card_date_small);

  ozark_card_body_element.appendChild(ozark_card_date);
  }      
// ------------------------------------------------------------------------------
const hendersonSection = document.getElementById('henderson');

const hendersonImages = ["states-images/arkansas-images/university.jpeg", "states-images/arkansas-images/university2.jpeg"];
const hendersonImagesAlt = ["This is a picture of me at my cousin's undergrad and graduate school. He took me in for a tour of where he works and where he went to school.", "This is a picture of me at my cousin's undergrad and graduate school. He took me in for a tour of where he works and where he went to school."];
const hendersonDates = ["December 31, 2020", "December 31, 2020"];
const hendersonDescription = ["This is a picture of me at my cousin's <br> undergrad and graduate school. He <br> took me in for a tour of where he works <br> and where he went to school.",
"This is a picture of me at my cousin's <br> undergrad and graduate school. He <br> took me in for a tour of where he works <br> and where he went to school."];
const hendersonTitle = ["Henderson State University", "Henderson State University"];

var div_element = document.createElement("div");
div_element.classList.add('body-images');
document.getElementById("henderson").appendChild(div_element);

var henderson_image_element;
var henderson_card_element;
var henderson_card_body_element;
var henderson_card_text;
var henderson_card_date;
var henderson_card_date_small;
var henderson_card_body_element;

 // function hendersonSelected() {
   for (var i = 0; i < hendersonImages.length; i++) {
    var henderson_content_element = document.createElement("div");
    henderson_content_element.classList.add('card', 'm-5', 'mx-sm-auto', 'not-wide-card');
    div_element.appendChild(henderson_content_element);
    

    henderson_card_element = document.createElement("div");
    henderson_card_element.classList.add('card-header', 'text-center');
    henderson_card_element.innerHTML = hendersonTitle[i];
    henderson_content_element.appendChild(henderson_card_element);

    henderson_image_element = document.createElement("img");
    henderson_image_element.classList.add('arkansas-images', 'not-wide');
    henderson_image_element.src = hendersonImages[i];
    henderson_image_element.alt = hendersonImagesAlt[i];
    henderson_content_element.appendChild(henderson_image_element);

    henderson_card_body_element = document.createElement("div");
    henderson_card_body_element.classList.add('card-body', 'm-1');
    henderson_content_element.append(henderson_card_body_element);

    henderson_card_text = document.createElement("p");
    henderson_card_text.classList.add('card-text');
    henderson_card_text.innerHTML = hendersonDescription[i];
    henderson_card_body_element.appendChild(henderson_card_text);

    henderson_card_date = document.createElement("p");
    henderson_card_date.classList.add('card-text');
    henderson_card_date_small = document.createElement("small");
    henderson_card_date_small.classList.add('text-muted');
    henderson_card_date_small.innerHTML = hendersonDates[i];
    henderson_card_date.appendChild(henderson_card_date_small);

    henderson_card_body_element.appendChild(henderson_card_date);
    }      
// }
// ------------------------------------------------------------------------------
const arkansasImages = [''];
function otherSelected(){

}
// ------------------------------------------------------------------------------

// This block of code is when an image is clicked, it expands the image. 
var modal = document.getElementById("myModal");

var img = document.getElementsByClassName("arkansas-images");
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
