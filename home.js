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

const previousButton = document.getElementById('previous-button'); // The back button
const nextButton = document.getElementById('next-button'); // The next button
const headerDiv = document.getElementById('header');
const descriptionDiv = document.getElementById('descriptionBody');
const dot = document.getElementsByClassName('dot');
var images = document.getElementById('main-image');

const headerTitles = ["Welcome Page", "About", "Contact", "Story", "Travel", "Projects"];
const headerDescritpions = ["This is the <a class='home-links' href='index.php'>Home</a> page. Feel free to leave a commment down below. <br> <br> Down below is a footer with my social media accounts and will add a feature in the future to translate the page into <b>Spanish</b>. <br> <br>You can click through the arrows or the dots below to see what each page is about.",
"I enjoy programming a lot. In particular, I enjoy web and app development. <br> <br> Aside from programming, I enjoy working out, running, traveling, and market watches. <br> <br>Check out the <a class='home-links' href='about.php'>About</a> page to read more about me.", 
"Reach out to me on the <a class='home-links' href='contact.php'>Contact</a> page. <br> <br> It provides my social media platforms that can also be found in the footer.", 
"The <a class='home-links' href='story.php'>Story</a> page is intended to be a page about me.", 
"In the <a class='home-links' href='travel.php'>Travel</a> page, it will show images of my places that I have traveled and some descriptions. <br> <br> Important to point out, I enjoy traveling a lot and visiting different locations.", 
"In the <a class='home-links' href='projects.php'>Projects</a> page, it will provide projects that I have been working on <br> and what I plan on working on in the future. <br> I enjoy working on projects of my own in my free time."];
const linkTitles = ["index.php", "about.php", "contact.php", "story.php", "travel.php", "projects.php"];
const imageSource = ["images/doorCounty.jpeg", "images/doorCountyBoat.jpeg", "home-images/dock.jpeg", "images/schofieldHall.jpeg","home-images/moab.jpeg", "home-images/projects.jpeg"];
const imageWidth = ["not-wide", "not-wide", "not-wide", "wide", "not-wide", "not-wide"]
let s = 0;

function advance(delta) {
    images.classList.remove("wide");
    var i;
    s = (s + delta + headerTitles.length) % headerTitles.length;
    
    descriptionDiv.innerHTML = headerDescritpions[s];
    headerDiv.innerHTML = headerTitles[s];
    headerDiv.setAttribute("href", linkTitles[s]);
    images.src = imageSource[s];
    if(imageWidth[s] == "wide") {
        images.classList.add("wide");
    }
    dot[s].className += " active"; 
    for(i = 0; i < s; ++i)
    {
        dot[i].className = dot[i].className.replace(" active", "");
    }
    dot[s+1].className = dot[s+1].className.replace(" active", ""); 
    if(s != headerTitles.length){
        dot[headerTitles.length-1].className = dot[headerTitles.length-1].className.replace(" active", "");
    }
}
previousButton.addEventListener('click', () => advance(-1));
nextButton.addEventListener('click', () => advance(1));  
advance(0);

function dots(delta) {
    descriptionDiv.innerHTML = headerDescritpions[delta];
    headerDiv.innerHTML = headerTitles[delta];
    headerDiv.setAttribute("href", linkTitles[delta]);
    images.src = imageSource[delta]; 
    dot[delta].className += " active";
    dot[s].className = dot[s].className.replace(" active", "");
    s = delta;
}