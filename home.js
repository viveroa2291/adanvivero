const previousButton = document.getElementById('previous-button'); // The back button
const nextButton = document.getElementById('next-button'); // The next button
const headerDiv = document.getElementById('header');
const descriptionDiv = document.getElementById('descriptionBody');

const headerTitles = ["Welcome", "About", "Contact", "Story", "Travel", "Projects"];
const headerDescritpions = ["Welcome to my website. <br> This is the <a class='home-links' href='index.html'>Home</a> page where there is a guide on the left and a timeline on the right. <br> The Guide provides an overview about the website, whereas the Timeline displays my achievements throughout my life.",
"In the <a class='home-links' href='about.html'>About</a> page, it dives into further in my life on a deeper level where you can read about me. <br> It can be referenced as a biography.", 
"This is the contact page", 
"This is the story page", 
"This is the travel page", 
"This is the projects page."];
const linkTitles = ["home.html", "about.html", "contact.html", "story.html","travel.html", "projects.html"];

let s = 0;

function advance(delta) {
    s = (s + delta + headerTitles.length) % headerTitles.length;
    descriptionDiv.innerHTML = headerDescritpions[s];
    headerDiv.innerHTML = headerTitles[s];
    headerDiv.setAttribute("href", linkTitles[s]);
}
previousButton.addEventListener('click', () => advance(-1));
nextButton.addEventListener('click', () => advance(1));
advance(0);

function dots(delta) {
    descriptionDiv.innerHTML = headerDescritpions[delta];
    headerDiv.innerHTML = headerTitles[delta];
    headerDiv.setAttribute("href", linkTitles[delta]); 
    s = delta;
}