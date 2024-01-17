const cartCounter = document.querySelector('.cart-counter');
const addCartButtons = document.querySelectorAll('.add-cart-btn');

addCartButtons.forEach(button => button.addEventListener('click', addCart));

function addCart() {
    cartCounter.innerHTML = Number(cartCounter.innerHTML) + 1;
}

function removeCart() {
    if (Number(cartCounter.innerHTML) > 0) {
        cartCounter.innerHTML = Number(cartCounter.innerHTML) - 1;
    }
}

