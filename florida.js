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

var img = document.getElementsByClassName("florida-images");
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