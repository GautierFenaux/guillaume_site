
let modal = document.getElementById('modal-login');



let firstTime = localStorage.getItem("first_time");
console.log(localStorage);
console.log(firstTime);
if(!firstTime) {
    // first time loaded!
    localStorage.setItem("first_time","1");
}

if(firstTime == 1) {
    window.onload = function(e) {
                e.preventDefault();
                modal.style.display = "block";
    }

    localStorage.removeItem('first_time');

};



// Get the button that opens the modal
var btn = document.querySelectorAll(".modalButton");
// All page modals
var modals = document.getElementsByClassName('modal');
// Get the <span> element that closes the modal
var spans = document.getElementsByClassName("close");
for (let i = 0; i < btn.length; i++) {
    btn[i].onclick = function(e) {
        e.preventDefault();
        modals[i].style.display = "block";
    }
}
// When the user clicks on <span> (x), close the modal
for (let i = 0; i < spans.length; i++) {
    spans[i].onclick = function() {
        for (var index in modals) {
            if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
        }
    }
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
        for (let index in modals) {
            if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
        }
    }
}