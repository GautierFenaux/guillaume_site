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