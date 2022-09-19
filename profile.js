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
  // This will be Edit Mode on the profile page
  function edit() {
    var uploadProfilePic = document.getElementById("upload-pic");
    var biography = document.getElementById("biography");
    var editMode = document.getElementById("edit-mode");
    var profileSection = document.getElementById("profile-header");
    var postButton = document.getElementById("biography-post");

    if(uploadProfilePic.style.display === "none" && biography.style.display === "none") {
        profileSection.style.backgroundColor = "rgb(242, 242, 242)";
        profileSection.style.paddingTop = "2rem";
        profileSection.style.paddingBottom = "2rem";
        
        editMode.style.display = "block";
        editMode.innerHTML ="Edit Mode On";

        biography.style.display = "block";
        uploadProfilePic.style.display = "block";
        postButton.style.display = "block";
    }
    else {
        profileSection.style.backgroundColor = "transparent";
        profileSection.style.paddingTop = "0";
        profileSection.style.paddingBottom = "0";
        biography.style.display = "none";
        uploadProfilePic.style.display = "none";
        editMode.style.display = "none";
        postButton.style.display = "none";
    }
  }
  // Code on getting height and width for the images 
/*
    var biography = document.getElementById("biography");
    const imageSource = ["images/schofieldHall.jpeg", "images/doorCounty.jpeg", "images/prospect.jpeg", "states-images/south-dakota-images/podium.jpeg", "states-images/south-dakota-images/thumbs-up.jpeg", "states-images/south-dakota-images/high-five.jpeg", "states-images/south-dakota-images/rapid-city.jpeg",  "states-images/ohio-images/beach.jpeg"];
    var element_image; 
    
    for(var i = 0; i < imageSource.length; i++) {
    element_image = document.createElement("img");
    element_image.src = imageSource[i];
    document.getElementById("demo").appendChild(element_image);
    biography.innerHTML += element_image.height + " and " + element_image.naturalWidth + "<br>";
}
*/ 
  
  // Testing Code 
  /*
  $(document).ready(function() {
    var $bg = $('.bg-img'),
        data = $('#data')[0],
        elbounds = {
            w: parseInt($bg.width()), 
            h: parseInt($bg.height())
        },
        bounds = {w: 2350 - elbounds.w, h: 1750 - elbounds.h},
        origin = {x: 0, y: 0},
        start = {x: 0, y: 0},
        movecontinue = false;
    
    function move (e){
        var inbounds = {x: false, y: false},
            offset = {
                x: start.x - (origin.x - e.clientX), 
                y: start.y - (origin.y - e.clientY)
            };
        
        data.value = 'X: ' + offset.x + ', Y: ' + offset.y;
        
        inbounds.x = offset.x < 0 && (offset.x * -1) < bounds.w;
        inbounds.y = offset.y < 0 && (offset.y * -1) < bounds.h;
        
        if (movecontinue && inbounds.x && inbounds.y) {
            start.x = offset.x;
            start.y = offset.y;
            
            $(this).css('background-position', start.x + 'px ' + start.y + 'px');
        }
        
        origin.x = e.clientX;
        origin.y = e.clientY;
        
        e.stopPropagation();
        return false;
    }
    
    function handle (e){
        movecontinue = false;
        $bg.unbind('mousemove', move);
        
        if (e.type == 'mousedown') {
            origin.x = e.clientX;
            origin.y = e.clientY;
            movecontinue = true;
            $bg.bind('mousemove', move);
        } else {
            $(document.body).focus();
        }
        
        e.stopPropagation();
        return false;
    }
    
    function reset () {
        start = {x: 0, y: 0};
        $(this).css('backgroundPosition', '0 0');
    }
    
    $bg.bind('mousedown mouseup mouseleave', handle);
    $bg.bind('dblclick', reset);
});
*/