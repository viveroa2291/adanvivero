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
  
const feature = document.getElementById('featureTitle');
const previousButton = document.getElementById('previous-button');
const nextButton = document.getElementById('next-button');
const card = document.getElementById('cardTitle');
const images = document.getElementById('images');
const description = document.getElementById('description');

const featureTitles = ["Introduction", "Growing Up", "High School", "College", "Hobbies and Interests", "Volunteer"];
const imageSource = ["images/schofieldHall.jpeg", "images/doorCounty.jpeg", "images/prospect.jpeg"]
const descriptionWords = ["My Name is Adan Vivero. I just graduated from the University of Wisconsin-Eau Claire with a Bachelors in Science with a degree in computer science. I currently reside in Madison, Wisconsin and am actively searching for an entry level position software position. <br> <br> I am highly interested in Web Development, Mobile App Development, and Software Engineering.",
"I was raised in Mount Prospect Illinois, a northwest suburb of Chicago. I have lived there since I was three years and lived there for the majority of my life. <br> <h3 class='about-header'>Young Interests</h3><br> Growing up, I had an interest in video editing at a young age spending lots of hours on the computer editing videos on Imovie and uploading them on YouTube. From there, I would grab a glimpse and insight on computers at a young age and wouldn't peak my interest in pursuing a career out of it until I reach my senior year of high school.",
"I graduated from Prospect High School in June of 2016. <br> <h3 class='about-header'>Extra Curricular Activities</h3><br> In high school, I was a part of several curricular activities at school which invovled being on the soccer, gymnastics, and wrestling team. Aside from school activities, I also played at a soccer club known as the Chicago Fire. <br> <h3 class='about-header'>Activities</h3> <br> While participating in those sports, the one that stood out to me the most was gymnastics as I enjoyed flipping around a lot and enjoyed practicing and competing, while also gaining muscle in the process. From it, I learned a lot and took a role in leadership my senior year which involved being in touch with the team and setting up open gyms for our team to get some practice in the offseason and recruiting freshman and sophomores in joining the team. <br> <h3 class='about-header'>Awards</h3> <br> As a result, I was nominated to be on the honor guard for my gymnastics team during homecoming where I would represent the team during an homecoming assembly. I was also on the prom court at my high school which was an honor for me to be a part of."];
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