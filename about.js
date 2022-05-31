const feature = document.getElementById('featureTitle');
const previousButton = document.getElementById('previous-button');
const nextButton = document.getElementById('next-button');
const card = document.getElementById('cardTitle');
const images = document.getElementById('images');
const description = document.getElementById('description');

const featureTitles = ["Introduction", "Extra"];
const imageSource = ["images/schofieldHall.jpeg", "images/doorCounty.jpeg"]
const descriptionWords = ["My Name is Adan. I am currently a student at the University of Wisconsin-Eau Claire on my last semester. I am studying to become a Computer Science major.", "The next stuff."];
let s = 0;

function advance(delta) {
    s = (s + delta + featureTitles.length) % featureTitles.length;
    feature.innerHTML = featureTitles[s];
    card.innerHTML = featureTitles[s];
    description.innerHTML = descriptionWords[s];
    images.src = imageSource[s];
}
previousButton.addEventListener('click', () => advance(-1));
nextButton.addEventListener('click', () => advance(1));

advance(0);