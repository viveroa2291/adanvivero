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
  if(x == "Vandervoort") 
  {
    document.getElementById("demo").appendChild(vandervoort()); 
    document.getElementById("demo").removeChild(ozark());
    document.getElementById("demo").removeChild(henderson());
    document.getElementById("demo").removeChild(other());
  }
  else if(x == "Ozark") 
  {
    document.getElementById("demo").appendChild(ozark()); 
  }
  else if(x == "Henderson") 
  {
    document.getElementById("demo").appendChild(henderson()); 
  }
  else if(x == "Other") 
  {
    document.getElementById("demo").appendChild(other()); 
  }
  else if(x == "all") {
    document.getElementById("demo").appendChild(vandervoort());
    document.getElementById("demo").appendChild(ozark()); 
    document.getElementById("demo").appendChild(henderson()); 
    document.getElementById("demo").appendChild(other());  
  }
  // document.getElementById("demo").innerHTML = x;
}
let count = 0.0;

// ------------------------------------------------------------------------------
const vandervoortSection = document.getElementById('vandervoort');
const vandervoortImages = ["states-images/arkansas-images/me.jpeg", "states-images/arkansas-images/hunting.jpeg", "states-images/arkansas-images/goats.jpeg", "states-images/arkansas-images/cows.jpeg", "states-images/arkansas-images/lake-me.jpeg", "states-images/arkansas-images/goat-me2.jpeg", "states-images/arkansas-images/goat-me.jpeg", "states-images/arkansas-images/cow-me.jpeg"];
const vandervoortImagesAlt = ["This is a mirror picture that I took in my cousins newly remodeled bathroom and was a time when taking mirror pictures was popular on the iphone.", 
"This is an image of me holding a hunting rifle at my cousins house where we went target shooting on their land <b>safely</b>. It was a fun experience and learned information on gun safety.",
"This is an image of goats eating their food in my cousins farm.",
"This is an image of the cows on my cousin's farm.",
"This is an image of me at the lake that my cousins took me to.",
"This is an image of me holding a baby goat on my cousin's farm.",
"This is an image of me and one of my cousin's goat on his farm.",
"This is an image of me taking a picture with one of my cousin's cow."];
const vandervoortDates = ["December 29, 2012", "December 28, 2015", "December 31, 2015", "December 31, 2015", "June 15, 2016", "August 19, 2017", "January 1, 2016", "December 28, 2020"];
const vandervoortDescription = ["This is a mirror picture that I took in my <br> cousins newly remodeled bathroom and <br> was a time when taking mirror pictures <br> was popular on the iphone.",
"This is an image of me holding a hunting <br> rifle at my cousins house where we <br> went target shooting on their land <br> <b>safely</b>. It was a fun experience and <br> learned information on gun safety.",
"This is an image of goats eating their <br> food in my cousins farm.",
"This is an image of the cows on my <br> cousin's farm.",
"This is an image of me at the lake that <br> my cousins took me to.",
"This is an image of me holding a baby <br> goat on my cousin's farm.",
"This is an image of me and one of my cousin's goat on his farm.",
"This is an image of me taking a <br> picture with one of my cousin's cow."];
const vandervoortTitle = ["Cousin's Bathroom", "Cousin's Land", "Cousin's Farm", "Cousin's Farm", "Lake", "Cousin's Farm", "Cousin's Farm", "Cousin's Farm"];
const vandervoortImageWidth = ["not-wide", "not-wide", "not-wide", "not-wide", "not-wide", "not-wide", "wide", "not-wide"];
// function vandervoort() {
var vandervoort_text = document.createElement("h3");
vandervoort_text.classList.add('body-headers');
vandervoort_text.innerHTML = 'Vandervoort';
var vandervoort_hr = document.createElement("hr");
vandervoort_hr.classList.add('header-hr');
document.getElementById("vandervoort").appendChild(vandervoort_text);
document.getElementById("vandervoort").appendChild(vandervoort_hr);
var vandervoort_div_element = document.createElement("div");
vandervoort_div_element.classList.add('body-images');
document.getElementById("vandervoort").appendChild(vandervoort_div_element);

var vandervoort_image_element;
var vandervoort_card_element;
var vandervoort_card_body_element;
var vandervoort_card_text;
var vandervoort_card_date;
var vandervoort_card_date_small;
var vandervoort_card_body_element;

for (var b = 0; b < vandervoortImages.length; b++) {
  if(count > 4.0) {
    vandervoort_div_element = document.createElement("div");
    vandervoort_div_element.classList.add('body-images');
    document.getElementById("vandervoort").appendChild(vandervoort_div_element);
    count = 0.0;
  }
    if(vandervoortImageWidth[b] != "wide") {
      var vandervoort_content_element = document.createElement("div");
      vandervoort_content_element.classList.add('card', 'm-5', 'mx-sm-auto', 'not-wide-card');
      vandervoort_div_element.appendChild(vandervoort_content_element);
      

      vandervoort_card_element = document.createElement("div");
      vandervoort_card_element.classList.add('card-header', 'text-center');
      vandervoort_card_element.innerHTML = vandervoortTitle[b];
      vandervoort_content_element.appendChild(vandervoort_card_element);

      vandervoort_image_element = document.createElement("img");
      vandervoort_image_element.classList.add('arkansas-images', 'not-wide');
      vandervoort_image_element.src = vandervoortImages[b];
      vandervoort_image_element.alt = vandervoortImagesAlt[b];
      vandervoort_content_element.appendChild(vandervoort_image_element);

      vandervoort_card_body_element = document.createElement("div");
      vandervoort_card_body_element.classList.add('card-body', 'm-1');
      vandervoort_content_element.append(vandervoort_card_body_element);

      vandervoort_card_text = document.createElement("p");
      vandervoort_card_text.classList.add('card-text');
      vandervoort_card_text.innerHTML = vandervoortDescription[b];
      vandervoort_card_body_element.appendChild(vandervoort_card_text);

      vandervoort_card_date = document.createElement("p");
      vandervoort_card_date.classList.add('card-text');
      vandervoort_card_date_small = document.createElement("small");
      vandervoort_card_date_small.classList.add('text-muted');
      vandervoort_card_date_small.innerHTML = vandervoortDates[b];
      vandervoort_card_date.appendChild(vandervoort_card_date_small);

      vandervoort_card_body_element.appendChild(vandervoort_card_date);
      count = count + 1.5;
    }
    if(vandervoortImageWidth[b] === "wide") {
      var vandervoort_content_element = document.createElement("div");
      vandervoort_content_element.classList.add('card', 'm-5', 'mx-sm-auto', 'wide-card');
      vandervoort_div_element.appendChild(vandervoort_content_element);
      

      vandervoort_card_element = document.createElement("div");
      vandervoort_card_element.classList.add('card-header', 'text-center');
      vandervoort_card_element.innerHTML = vandervoortTitle[b];
      vandervoort_content_element.appendChild(vandervoort_card_element);

      vandervoort_image_element = document.createElement("img");
      vandervoort_image_element.classList.add('arkansas-images', 'wide');
      vandervoort_image_element.src = vandervoortImages[b];
      vandervoort_image_element.alt = vandervoortImagesAlt[b];
      vandervoort_content_element.appendChild(vandervoort_image_element);

      vandervoort_card_body_element = document.createElement("div");
      vandervoort_card_body_element.classList.add('card-body', 'm-1');
      vandervoort_content_element.append(vandervoort_card_body_element);

      vandervoort_card_text = document.createElement("p");
      vandervoort_card_text.classList.add('card-text');
      vandervoort_card_text.innerHTML = vandervoortDescription[b];
      vandervoort_card_body_element.appendChild(vandervoort_card_text);

      vandervoort_card_date = document.createElement("p");
      vandervoort_card_date.classList.add('card-text');
      vandervoort_card_date_small = document.createElement("small");
      vandervoort_card_date_small.classList.add('text-muted');
      vandervoort_card_date_small.innerHTML = vandervoortDates[b];
      vandervoort_card_date.appendChild(vandervoort_card_date_small);

      vandervoort_card_body_element.appendChild(vandervoort_card_date);
      count = count + 2.0; 
    }
  }    
 // }
// ------------------------------------------------------------------------------
const ozarkSection = document.getElementById('ozark');
const ozarkImages = ["states-images/arkansas-images/view.jpeg", "states-images/arkansas-images/restaurant.jpeg"];
const ozarkImagesAlt = ["This is a picture of me on the side of the road. We were driving and decided to take a picture of the view which is difficult to see with the barricade in the way.", 
"This is a picture of me outside of one of my favorite Mexican restaurant when visiting my cousins. They provide very delicious food and give you large portions."];
const ozarkDates = ["August 16, 2017", "August 16, 2017"];
const ozarkDescription = ["This is a picture of me on the side of the road. <br> We were driving and decided to take a picture <br> of the view which is difficult to see with the <br> barricade in the way.",
"This is a picture of me outside of one of my favorite Mexican <br> restaurant when visiting my cousins. They provide very delicious <br> food and give you large portions."];
const ozarkTitle = ["On The Road", "Mexican Restaurant"];
const ozarkImageWidth = ["not-wide", "wide"];
// function ozark() {
var ozark_text = document.createElement("h3");
ozark_text.classList.add('body-headers');
ozark_text.innerHTML = "Ozark";
var ozark_hr = document.createElement("hr");
ozark_hr.classList.add('header-hr');
document.getElementById("ozark").appendChild(ozark_text);
document.getElementById("ozark").appendChild(ozark_hr);
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
count = 0.0;

for (var a = 0; a < ozarkImages.length; a++) {
  if(count > 4.0) {
    ozark_div_element = document.createElement("div");
    ozark_div_element.classList.add('body-images');
    document.getElementById("ozark").appendChild(ozark_div_element);
    count = 0.0;
  }
  if(ozarkImageWidth[a] != "wide") {
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
    count = count + 1.5;
    }
    if(ozarkImageWidth[a] === "wide") {
    var ozark_content_element = document.createElement("div");
    ozark_content_element.classList.add('card', 'm-5', 'mx-sm-auto', 'wide-card');
    ozark_div_element.appendChild(ozark_content_element);
    

    ozark_card_element = document.createElement("div");
    ozark_card_element.classList.add('card-header', 'text-center');
    ozark_card_element.innerHTML = ozarkTitle[a];
    ozark_content_element.appendChild(ozark_card_element);

    ozark_image_element = document.createElement("img");
    ozark_image_element.classList.add('arkansas-images', 'wide');
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
    count = count + 2.0; 
  }
  }      
 // }
// ------------------------------------------------------------------------------
const hendersonSection = document.getElementById('henderson');

const hendersonImages = ["states-images/arkansas-images/university.jpeg", "states-images/arkansas-images/university2.jpeg"];
const hendersonImagesAlt = ["This is a picture of me at my cousin's undergrad and graduate school. He took me in for a tour of where he works and where he went to school.", "This is a picture of me at my cousin's undergrad and graduate school. He took me in for a tour of where he works and where he went to school."];
const hendersonDates = ["December 31, 2020", "December 31, 2020"];
const hendersonDescription = ["This is a picture of me at my cousin's <br> undergrad and graduate school. He <br> took me in for a tour of where he works <br> and where he went to school.",
"This is a picture of me at my cousin's <br> undergrad and graduate school. He <br> took me in for a tour of where he works <br> and where he went to school."];
const hendersonTitle = ["Henderson State University", "Henderson State University"];

var henderson_text = document.createElement("h3");
henderson_text.classList.add('body-headers');
henderson_text.innerHTML = "Henderson State University";
document.getElementById("henderson").appendChild(henderson_text);
var henderson_hr = document.createElement("hr");
henderson_hr.classList.add('header-hr');
document.getElementById("henderson").appendChild(henderson_hr);
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

//  function henderson() {
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
//   }
// ------------------------------------------------------------------------------
const arkansasImages = ["states-images/arkansas-images/cousins.jpeg", "states-images/arkansas-images/lake-me2.jpeg", "states-images/arkansas-images/cousins2.jpeg"];
const arkansasImageAlt = ["This is a picture of my cousins and I at their house.", 
"This is an image of me at a Lake Horsehead in Clarksville Arkansas.",
"This is an image of my cousins and I a year and a half later from the image on the left."];
const arkansasDates = ["January 1, 2016", "June 20, 2016", "August 17, 2017"];
const arkansasDescription = ["This is a picture of my cousins and I <br> at their house.", 
"This is an image of me at a Lake Horsehead <br> in Clarksville Arkansas.", 
"This is an image of my cousins and I a year and a half later <br> from the image on the left."];
const arkansasTitle = ["Altus (Cousin's House", "Clarksville Lake", "Waldron"];
const arkansasImageWidth = ["not-wide", "not-wide", "wide"];

var other_hr = document.createElement("hr");
other_hr.classList.add('header-hr');
var arkansas_text = document.createElement("h3");
arkansas_text.classList.add('body-headers');
arkansas_text.innerHTML = "Other parts of Arkansas";
document.getElementById("other").appendChild(arkansas_text);
document.getElementById("other").appendChild(other_hr);
var arkansas_div_element = document.createElement("div");
arkansas_div_element.classList.add('body-images');
document.getElementById("other").appendChild(arkansas_div_element);


var arkansas_image_element;
var arkansas_card_element;
var arkansas_card_body_element;
var arkansas_card_text;
var arkansas_card_date;
var arkansas_card_date_small;
var arkansas_card_body_element;
count = 0.0;
// function other() {
for (var c = 0; c < arkansasImages.length; c++) {
  if(count > 4.0) {
    arkansas_div_element = document.createElement("div");
    arkansas_div_element.classList.add('body-images');
    document.getElementById("other").appendChild(arkansas_div_element);
    count = 0.0;
  }
  if(arkansasImageWidth[c] != "wide") {
    var arkansas_content_element = document.createElement("div");
    arkansas_content_element.classList.add('card', 'm-5', 'mx-sm-auto', 'not-wide-card');
    arkansas_div_element.appendChild(arkansas_content_element);
    

    arkansas_card_element = document.createElement("div");
    arkansas_card_element.classList.add('card-header', 'text-center');
    arkansas_card_element.innerHTML = arkansasTitle[c];
    arkansas_content_element.appendChild(arkansas_card_element);

    arkansas_image_element = document.createElement("img");
    arkansas_image_element.classList.add('arkansas-images', 'not-wide');
    arkansas_image_element.src = arkansasImages[c];
    arkansas_image_element.alt = arkansasImageAlt[c];
    arkansas_content_element.appendChild(arkansas_image_element);

    arkansas_card_body_element = document.createElement("div");
    arkansas_card_body_element.classList.add('card-body', 'm-1');
    arkansas_content_element.append(arkansas_card_body_element);

    arkansas_card_text = document.createElement("p");
    arkansas_card_text.classList.add('card-text');
    arkansas_card_text.innerHTML = arkansasDescription[c];
    arkansas_card_body_element.appendChild(arkansas_card_text);

    arkansas_card_date = document.createElement("p");
    arkansas_card_date.classList.add('card-text');
    arkansas_card_date_small = document.createElement("small");
    arkansas_card_date_small.classList.add('text-muted');
    arkansas_card_date_small.innerHTML = arkansasDates[c];
    arkansas_card_date.appendChild(arkansas_card_date_small);

    arkansas_card_body_element.appendChild(arkansas_card_date);
    count = count + 1.5;
    }
    if(arkansasImageWidth[c] === "wide") {
    var arkansas_content_element = document.createElement("div");
    arkansas_content_element.classList.add('card', 'm-5', 'mx-sm-auto', 'wide-card');
    arkansas_div_element.appendChild(arkansas_content_element);
    

    arkansas_card_element = document.createElement("div");
    arkansas_card_element.classList.add('card-header', 'text-center');
    arkansas_card_element.innerHTML = arkansasTitle[c];
    arkansas_content_element.appendChild(arkansas_card_element);

    arkansas_image_element = document.createElement("img");
    arkansas_image_element.classList.add('arkansas-images', 'wide');
    arkansas_image_element.src = arkansasImages[c];
    arkansas_image_element.alt = ozarkImagesAlt[c];
    arkansas_content_element.appendChild(arkansas_image_element);

    arkansas_card_body_element = document.createElement("div");
    arkansas_card_body_element.classList.add('card-body', 'm-1');
    arkansas_content_element.append(arkansas_card_body_element);

    arkansas_card_text = document.createElement("p");
    arkansas_card_text.classList.add('card-text');
    arkansas_card_text.innerHTML = arkansasDescription[c];
    arkansas_card_body_element.appendChild(arkansas_card_text);

    arkansas_card_date = document.createElement("p");
    arkansas_card_date.classList.add('card-text');
    arkansas_card_date_small = document.createElement("small");
    arkansas_card_date_small.classList.add('text-muted');
    arkansas_card_date_small.innerHTML = arkansasDates[c];
    arkansas_card_date.appendChild(arkansas_card_date_small);

    arkansas_card_body_element.appendChild(arkansas_card_date);
    count = count + 2.0; 
  }
  }      
// }
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
