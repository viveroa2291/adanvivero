const previousButton = document.getElementById('previous-button'); // The back button
const nextButton = document.getElementById('next-button'); // The next button
const headerDiv = document.getElementById('header');
const descriptionDiv = document.getElementById('descriptionBody');
const dot = document.getElementsByClassName('dot');
const images = document.getElementById('main-image');

const headerTitles = ["Welcome", "About", "Contact", "Story", "Travel", "Projects"];
const headerDescritpions = ["Welcome to my website. <br> This is the <a class='home-links' href='index.html'>Home</a> page where there is a <b>Guide</b> on the left and a <b>Timeline</b> on the right. <br> The <b>Guide</b> provides an overview about the website of a concise details of each webpage is. <br> On the other hand, the <b>Timeline</b> is a display of my achievements throughout my life. <br> Down below is a footer with my social media accounts and can translate the page into <b>Spanish</b> if you wish to do so. <br> You can click through the arrows or the dots below to see what each page is about in a brief statement.",
"In the <a class='home-links' href='about.html'>About</a> page, it dives into further in my life on a deeper level where you can read about me. <br> It can be referenced as a biography.", 
"In the <a class='home-links' href='contact.html'>Contact</a> page, it provides my social media platforms that can also be found in the footer. <br> The only difference is that you can see my usernames versus just having it linked.", 
"In the <a class='home-links' href='story.html'>Story</a> page, it provides an overview of my story as a programmer and what the hardships that I endured in programming. <br> It also provides an overview of what I have been working on <br> and an in depth about me.", 
"In the <a class='home-links' href='travel.html'>Travel</a> page, it will show images of my places that I have traveled and some stories. <br> Important to point out, I enjoy traveling a lot and visiting different locations.", 
"In the <a class='home-links' href='projects.html'>Projects</a> page, it will provide projects that I have been working on <br> and what I plan on working on in the future. <br> I enjoy working on projects of my own in my free time."];
const linkTitles = ["index.html", "about.html", "contact.html", "story.html", "travel.html", "projects.html"];
const imageSource = ["images/doorCounty.jpeg", "images/doorCountyBoat.jpeg", "home-images/dock.jpeg", "images/schofieldHall.jpeg","home-images/moab.jpeg", "home-images/projects.jpeg"];
let s = 0;

function advance(delta) {
    var i;
    s = (s + delta + headerTitles.length) % headerTitles.length;
    descriptionDiv.innerHTML = headerDescritpions[s];
    headerDiv.innerHTML = headerTitles[s];
    headerDiv.setAttribute("href", linkTitles[s]);
    images.src = imageSource[s];
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