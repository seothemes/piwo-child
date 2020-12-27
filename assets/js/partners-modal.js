// Get the modal
var modal = document.getElementById("myModal");
var modalTwo = document.getElementById("myModalTwo");
var modalThree = document.getElementById("myModalThree");
var modalFour = document.getElementById("myModalFour");

// Get the button that opens the modal cicle trough it and add the event function
var btn = document.getElementsByClassName("myBtn");
var i
for (i = 0; i < btn.length; i++) {
    btn[i].onclick = function() {
    modal.style.display = "block";
   }
  }

var btnTwo = document.getElementsByClassName("myBtnTwo");
var i
for (i = 0; i < btnTwo.length; i++) {
    btnTwo[i].onclick = function() {
    modalTwo.style.display = "block";
   }
  }

var btnThree = document.getElementsByClassName("myBtnThree");
var i
for (i = 0; i < btnThree.length; i++) {
    btnThree[i].onclick = function() {
    modalThree.style.display = "block";
   }
  }

var btnFour = document.getElementsByClassName("myBtnFour");
var i
for (i = 0; i < btnFour.length; i++) {
    btnFour[i].onclick = function() {
    modalFour.style.display = "block";
   }
  }

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var spanTwo = document.getElementById("closeTwo");
var spanThree = document.getElementById("closeThree");
var spanFour = document.getElementById("closeFour");

// When the user clicks the button, open the modal 

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
spanTwo.onclick = function() {
  modalTwo.style.display = "none";
}
spanThree.onclick = function() {
  modalThree.style.display = "none";
}
spanFour.onclick = function() {
  modalFour.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  else if (event.target == modalTwo) {
    modalTwo.style.display = "none";
  }
  else if (event.target == modalThree) {
    modalThree.style.display = "none";
  }
  else if (event.target == modalFour) {
    modalFour.style.display = "none";
  }
}
