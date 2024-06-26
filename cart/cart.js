const addButton = document.querySelectorAll(".button");
const totalElement = document.querySelector(".total");
const cartDiv = document.querySelector(".js-cart-items");
let cart = [];

//looping through the add buttons while listening to a click event on each of them
for (let i in addButton) {
  const addBtn = addButton[i];
  addBtn.addEventListener("click", () => {
    const price =
      parseFloat(addBtn.parentNode.querySelector("span").innerHTML) * 100;
    const name = addBtn.parentNode.querySelector("h3").innerHTML.toLowerCase();
    let isThere = false;
    let it;
    //looping through the cart to check if an item is already in the cart
    cart.forEach((item) => {
      if (item.name === name) {
        isThere = true;
        it = item;
      }
    });
    if (isThere) {
      it.qty++;
    } else {
      cart.push({ name: name, price: price, qty: 1 });
    }
    showCart();
  });
}

//displaying the items in the cart
function showCart() {
  let cartHTML = "";
  let total = 0;
  cart.forEach((item) => {
    let itemTotal = (parseFloat(item.qty) * item.price) / 100;
    total += itemTotal;

    //generating the cart HTML
    cartHTML += `<div class="cart-item">
          <div><p><strong>${item.qty}</strong> ${item.name} @ K${
      parseFloat(item.price) / 100
    }</p></div>
          <div>K ${itemTotal}</div>
          <button onclick="remove('${item.name}')">Remove</button>
        </div>`;
  });
  cartDiv.innerHTML = cartHTML;
  totalElement.innerHTML = `<p>TOTAL</p>K${total}`;
}

//deleting an item from the cart
function remove(name) {
  let item;
  for (let i in cart) {
    if (cart[i].name === name) {
      item = i;
    }
  }
  cart.splice(item, 1);
  showCart();
}
