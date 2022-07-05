var modal = document.getElementById("myModal");

var img = document.getElementsByClassName("georgia-images");
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