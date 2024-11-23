document.addEventListener("DOMContentLoaded", () => {
  const addToCartButtons = document.querySelectorAll(".add-to-cart");
  const cartCount = document.getElementById("cart-count");

  // Recuperar el carrito del almacenamiento local
  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  // Actualizar el contador inicial
  updateCartCount();

  // Añadir evento a los botones de "Agregar al carrito"
  addToCartButtons.forEach((button) => {
    button.addEventListener("click", (e) => {
      const productId = button.getAttribute("data-product-id");
      const productName = button.getAttribute("data-product-name");
      const productPrice = parseFloat(button.getAttribute("data-product-price"));
      const productStock = parseInt(button.getAttribute("data-product-stock"));

      // Verificar si el producto ya está en el carrito
      const existingProduct = cart.find((item) => item.id === productId);

      if (existingProduct) {
        if (existingProduct.quantity < productStock) {
          existingProduct.quantity++;
        } else {
          alert("No hay suficiente stock disponible.");
        }
      } else {
        cart.push({ id: productId, name: productName, price: productPrice, quantity: 1 });
      }

      // Guardar el carrito en almacenamiento local
      localStorage.setItem("cart", JSON.stringify(cart));

      // Actualizar el contador del carrito
      updateCartCount();
    });
  });

  function updateCartCount() {
    const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
    cartCount.textContent = totalItems;
  }
});