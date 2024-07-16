function toggleMenu() {
  var menu = document.getElementById("userMenu");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}

// Hide the menu when the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.user-btn')) {
    var menu = document.getElementById("userMenu");
    if (menu.style.display === "block") {
      menu.style.display = "none";
    }
  }
}
