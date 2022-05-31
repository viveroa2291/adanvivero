const previousButton = document.getElementById('previous-button'); // The back button
const nextButton = document.getElementById('next-button'); // The next button
const headerDiv = document.getElementById('header');
const descriptionDiv = document.getElementById('descriptionBody');

const headerTitles = ["Home", "About", "Contact", "Story", "Projects"];
const headerDescritpions = ["This is the home page", "This is the about page", "This is the contact page", "This is the story page", "This is the projects page."];
const linkTitles = ["home.html", "about.html", "contact.html", "story.html", "projects.html"];
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