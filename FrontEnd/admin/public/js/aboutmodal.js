// Temukan tombol untuk membuka modal
var btnOpenModal = document.querySelector(".btn-about");

// Temukan elemen modal
var modalAbout = document.getElementById("myModal");

// Temukan tombol untuk menutup modal
var spanClose = document.getElementsByClassName("close")[0];

// Ketika tombol dibuka, tampilkan modal
btnOpenModal.onclick = function() {
  modalAbout.style.display = "block";
}

// Ketika pengguna mengklik (x), tutup modal
spanClose.onclick = function() {
  modalAbout.style.display = "none";
}

// Ketika pengguna mengklik di luar modal, tutup modal
window.onclick = function(event) {
  if (event.target == modalAbout) {
    modalAbout.style.display = "none";
  }
}

// Handle form submission
document.getElementById("about-form").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent form from submitting normally
  // Get input values
  var description = document.getElementById("about-description").value;
  var image = document.getElementById("about-image").files[0]; // Assuming only one file is selected
  
  // Perform further processing (e.g., upload image, save description)
  // ...
  
  // Close modal after saving changes
  modalAbout.style.display = "none";
});
