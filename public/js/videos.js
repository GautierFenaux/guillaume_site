let modal = document.getElementById('modal-login');
let btn = document.querySelectorAll(".modalButton");

let modals = document.getElementsByClassName('modal');
let spans = document.getElementsByClassName("close");

if (sessionStorage.getItem('reloaded') == null) {
    console.log('page was not reloaded');
    window.onload = function (e) {
        e.preventDefault();
        modal.style.display = "block";
    }
} 
    sessionStorage.setItem('reloaded', 'yes'); // could be anything


    for (let i = 0; i < btn.length; i++) {
        btn[i].onclick = function (e) {
            e.preventDefault();
            modals[i + 1].style.display = "block";
        }
    }
    // When the user clicks on <span> (x), close the modal
    for (let i = 0; i < spans.length; i++) {
        spans[i].onclick = function () {
            for (var index in modals) {
                if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
            }
        }
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target.classList.contains('modal')) {
            for (let index in modals) {
                if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
            }
        }
    }
