
// Array per emmagatzemar els productes del carret
let cart = [];

// Afegir producte al carret
function addToCart(product, price) {
    cart.push({ product, price });
    updateCart();
}

// Eliminar producte del carret
function removeFromCart(index) {
    cart.splice(index, 1);
    updateCart();
}

// Actualitzar el contingut del carret
function updateCart() {
    const cartContainer = document.getElementById('cartItems');
    cartContainer.innerHTML = '';

    let total = 0;
    cart.forEach((item, index) => {
        const cartItem = document.createElement('div');
        cartItem.innerHTML = `${item.product} - ${item.price}€ <button onclick="removeFromCart(${index})">Eliminar</button>`;
        cartContainer.appendChild(cartItem);
        total += item.price;
    });

    document.getElementById('total').innerText = `Total: ${total.toFixed(2)}€`;
}
