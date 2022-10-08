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

    // States Declaration 
    var alabama = document.getElementById("AL"); 
    var alaska = document.getElementById("AK");
    var arizona = document.getElementById("AZ");
    var arkansas = document.getElementById("AR");
    var california = document.getElementById("CA");
    var colorado = document.getElementById("CO");
    var connecticut = document.getElementById("CT");
    var delaware = document.getElementById("DE");
    var idaho = document.getElementById("ID");
    var illinois = document.getElementById("IL");
    var indiana = document.getElementById("IN");
    var iowa = document.getElementById("IA");
    var florida = document.getElementById("FL");
    var georgia = document.getElementById("GA");
    var hawaii = document.getElementById("HI");
    var kansas = document.getElementById("KS");
    var kentucky = document.getElementById("KY");
    var louisiana = document.getElementById("LA");
    var maine = document.getElementById("ME");
    var maryland = document.getElementById("MD");
    var massachusetts = document.getElementById("MA");
    var michigan = document.getElementById("MI");
    var minnesota = document.getElementById("MN");
    var mississippi = document.getElementById("MS");
    var missouri = document.getElementById("MO");
    var montana = document.getElementById("MT");
    var nebraska = document.getElementById("NE");
    var nevada = document.getElementById("NV");
    var newHampshire = document.getElementById("NH");
    var newJersey = document.getElementById("NJ");
    var newMexico = document.getElementById("NM");
    var newYork = document.getElementById("NY");
    var northCarolina = document.getElementById("NC");
    var northDakota = document.getElementById("ND");    
    var ohio = document.getElementById("OH");
    var oklahoma = document.getElementById("OK");
    var oregon = document.getElementById("OR");
    var pennsylvania = document.getElementById("PA");
    var rhodeIsland = document.getElementById("RI");
    var southCarolina = document.getElementById("SC");
    var southDakota = document.getElementById("SD");
    var tennessee = document.getElementById("TN");
    var texas = document.getElementById("TX");
    var utah = document.getElementById("UT");
    var vermont = document.getElementById("VT");
    var virginia = document.getElementById("VA");
    var washington = document.getElementById("WA");
    var washingtonDC = document.getElementById("DC");
    var westVirginia = document.getElementById("WV");
    var wisconsin = document.getElementById("WI");
    var wyoming = document.getElementById("WY");

    if(uploadProfilePic.style.display === "none" && biography.style.display === "none") {
        profileSection.style.backgroundColor = "rgb(242, 242, 242)";
        profileSection.style.paddingTop = "2rem";
        profileSection.style.paddingBottom = "2rem";

        editMode.style.display = "block";
        editMode.innerHTML ="Edit Mode On";

        biography.style.display = "block";
        uploadProfilePic.style.display = "block";
        postButton.style.display = "block";

        alabama.classList.add('edit-states');
        alaska.classList.add('edit-states');
        arizona.classList.add('edit-states');
        arkansas.classList.add('edit-states');
        california.classList.add('edit-states');

        colorado.classList.add('edit-states');
        connecticut.classList.add('edit-states');
        delaware.classList.add('edit-states');
        idaho.classList.add('edit-states');
        
        illinois.classList.add('edit-states');
        indiana.classList.add('edit-states');
        iowa.classList.add('edit-states');
        florida.classList.add('edit-states');
        georgia.classList.add('edit-states');
        
        hawaii.classList.add('edit-states');
        kansas.classList.add('edit-states');
        kentucky.classList.add('edit-states');
        louisiana.classList.add('edit-states');
        maine.classList.add('edit-states');
        maryland.classList.add('edit-states');
        massachusetts.classList.add('edit-states');
    
        michigan.classList.add('edit-states');
        minnesota.classList.add('edit-states');
        mississippi.classList.add('edit-states');
        missouri.classList.add('edit-states');
        
        montana.classList.add('edit-states');
        nebraska.classList.add('edit-states');
        nevada.classList.add('edit-states');
        newHampshire.classList.add('edit-states');
        newJersey.classList.add('edit-states');
        newMexico.classList.add('edit-states');
        newYork.classList.add('edit-states');
        northCarolina.classList.add('edit-states');
        northDakota.classList.add('edit-states');
        
        ohio.classList.add('edit-states');
        
        oklahoma.classList.add('edit-states');
        oregon.classList.add('edit-states');
        pennsylvania.classList.add('edit-states');
        rhodeIsland.classList.add('edit-states');
        southCarolina.classList.add('edit-states');
        
        southDakota.classList.add('edit-states');
        tennessee.classList.add('edit-states');
        texas.classList.add('edit-states');
        utah.classList.add('edit-states');
    
        vermont.classList.add('edit-states');
        virginia.classList.add('edit-states');
        washington.classList.add('edit-states');
    
        washingtonDC.classList.add('edit-states');
        westVirginia.classList.add('edit-states');
        wisconsin.classList.add('edit-states');
        wyoming.classList.add('edit-states');
    }
    else {
        profileSection.style.backgroundColor = "transparent";
        profileSection.style.paddingTop = "0";
        profileSection.style.paddingBottom = "0";
        biography.style.display = "none";
        uploadProfilePic.style.display = "none";
        editMode.style.display = "none";
        postButton.style.display = "none";

        alabama.classList.remove('edit-states');
        alaska.classList.remove('edit-states');
        arizona.classList.remove('edit-states');
        arkansas.classList.remove('edit-states');
        california.classList.remove('edit-states');

        colorado.classList.remove('edit-states');
        connecticut.classList.remove('edit-states');
        delaware.classList.remove('edit-states');
        idaho.classList.remove('edit-states');
        
        illinois.classList.remove('edit-states');
        indiana.classList.remove('edit-states');
        iowa.classList.remove('edit-states');
        florida.classList.remove('edit-states');
        georgia.classList.remove('edit-states');
        
        hawaii.classList.remove('edit-states');
        kansas.classList.remove('edit-states');
        kentucky.classList.remove('edit-states');
        louisiana.classList.remove('edit-states');
        maine.classList.remove('edit-states');
        maryland.classList.remove('edit-states');
        massachusetts.classList.remove('edit-states');
    
        michigan.classList.remove('edit-states');
        minnesota.classList.remove('edit-states');
        mississippi.classList.remove('edit-states');
        missouri.classList.remove('edit-states');
        
        montana.classList.remove('edit-states');
        nebraska.classList.remove('edit-states');
        nevada.classList.remove('edit-states');
        newHampshire.classList.remove('edit-states');
        newJersey.classList.remove('edit-states');
        newMexico.classList.remove('edit-states');
        newYork.classList.remove('edit-states');
        northCarolina.classList.remove('edit-states');
        northDakota.classList.remove('edit-states');
        
        ohio.classList.remove('edit-states');

        oklahoma.classList.remove('edit-states');
        oregon.classList.remove('edit-states');
        pennsylvania.classList.remove('edit-states');
        rhodeIsland.classList.remove('edit-states');
        southCarolina.classList.remove('edit-states');
        
        southDakota.classList.remove('edit-states');
        tennessee.classList.remove('edit-states');
        texas.classList.remove('edit-states');
        utah.classList.remove('edit-states');
    
        vermont.classList.remove('edit-states');
        virginia.classList.remove('edit-states');
        washington.classList.remove('edit-states');
    
        washingtonDC.classList.remove('edit-states');
        westVirginia.classList.remove('edit-states');
        wisconsin.classList.remove('edit-states');
        wyoming.classList.remove('edit-states');
    }
  }
  // This is to get the picture to preview a display. 
  imgInp.onchange = evt => {
    const [file] = imgInp.files
    if (file) {
      blah.src = URL.createObjectURL(file)
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