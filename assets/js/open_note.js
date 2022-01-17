var addNote = document.getElementById("cart__btn-note");
var note = document.getElementById("cart__btn-textarea");
var outputPrice = document.getElementById("cart__bill");

addNote.onclick = () => {
  note.style.opacity = 1;
  note.style.visibility = "visible";
  addNote.style.opacity = 0;
  addNote.style.visibility = "hidden";
};
