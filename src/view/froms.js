const Modal = document.getElementById("addModal");
const ModalCategory = document.getElementById("addModalCategory");

function toggleModalProject() {
  Modal.classList.remove("hidden");
  Modal.classList.add("show");
  ModalCategory.classList.add("hidden");
}

function returnPage() {
  Modal.classList.add("hidden");
}

function toggleModalCategory() {
  console.log("toggleModalCategory called");
  ModalCategory.classList.remove("hidden");
  ModalCategory.classList.add("show");
  Modal.classList.add("hidden");
}


function returnPage1() {
  ModalCategory.classList.add("hidden");
}
