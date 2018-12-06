console.log('hello')

let headerColorChanged = false;

function changeHeaderColor() {
    var navbar = document.getElementsByClassName("navbar")[0];

    if (!headerColorChanged) {
        navbar.style.backgroundColor = "#806a44";    
        headerColorChanged = true;
    } else {
        navbar.style.backgroundColor = "#735F3D";
        headerColorChanged = false;
    }

}

let imageShown = false;

function fadeEnterImage() {
    if (!imageShown) {
        $("#fun-image").fadeIn(1500); 
        imageShown = true;
    } else {
        $("#fun-image").fadeOut(1500); 
        imageShown = false;
    }
}
