const Modal=document.getElementById("addModal");


function toggleModal(){
  Modal.classList.remove("hidden");
  Modal.classList.add("show");
}

function returnPage(){
  Modal.classList.add("hidden");
}
  