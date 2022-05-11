const buttons = document.querySelectorAll(".btn--shop");
const bagCounter = document.getElementById("bag-counter");
const cartProducts = document.querySelector(".cart__products");

const subtotal = document.getElementById("subtotal");
const taxes = document.getElementById("taxes");
const total = document.getElementById("total");


let cart = [];
let bill = []

buttons.forEach((button) => {
  button.addEventListener("click", () => {
    let id = button.getAttribute("data-id");
    let nombre = button.getAttribute("data-nombre");
    let precio = button.getAttribute("data-precio");

    if (!button.classList.contains("btn--active")) {
      cart = [...cart, { id: id, nombre: nombre, precio: precio, cantidad: 1 }];
      button.classList.toggle("btn--active");
      button.innerText = "Quitar";

      var input = document.createElement("div");
      input.dataset.id = id;
      input.className = 'cart__products__item';
      input.innerHTML = `
                <h4>${nombre}</h4>
                <p>${precio}</p>`;

      cartProducts.appendChild(input);

      const initialValue = 0;
      const subtotalBro = cart.reduce(
        (previousValue, currentValue) => previousValue + parseFloat(currentValue.precio),
        initialValue
      );

      const tax = subtotalBro*0.1;
      subtotal.innerText = `${subtotalBro}`;
      taxes.innerText = `${tax}`;
      total.innerText = `${subtotalBro + tax}`;
      bagCounter.innerText = cart.length;

    } else {
      console.log("borrar el item");
      removeElement(id)
      button.innerText = "Agregar";
      button.classList.toggle("btn--active");
    }
  });
});


function removeElement(id) {
  let cartItems = document.querySelectorAll('.cart__products__item')
  cartItems.forEach(item => {
    if (item.getAttribute("data-id") === id){
      item.remove();
    }
  })  
}