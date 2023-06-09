// Lógica para el carrito de compras
var cartItems = 0;

// Obtener el botón del carrito
var cartButton = document.getElementById('cartButton');

// Obtener los botones de "Agregar al carrito"
var addToCartButtons = document.getElementsByClassName('addToCartButton');

// Agregar un listener a cada botón de "Agregar al carrito"
for (var i = 0; i < addToCartButtons.length; i++) {
  addToCartButtons[i].addEventListener('click', function() {
    cartItems++; // Incrementar el número de elementos en el carrito
    cartButton.innerText = 'Carrito (' + cartItems + ')'; // Actualizar el texto del botón del carrito
  });
}

function scrollToSection(sectionId) {
  var element = document.getElementById(sectionId);
  element.scrollIntoView({ behavior: "smooth", block: "start" });
}
