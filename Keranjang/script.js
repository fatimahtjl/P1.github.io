// HTML structure
const cartHTML = `
  <div id="cart" style="font-family: Georgia, 'Times New Roman', Times, serif; margin: 20px auto; max-width: 800px; border: 2px solid white; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden;">
    <div style="background-color: #F0F4F8; color: black; padding: 20px; text-align: center;">
      <h2 style="margin: 0; font-size: 1.8em;">Keranjang Belanja Anda</h2>
    </div>
    <ul id="cart-items" style="list-style: none; padding: 20px; margin: 0; ">
    </ul>
    <div style="padding: 20px; display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #ddd;">
      <span id="total-price" style="font-size: 1.5em; font-weight: bold;">Total: Rp0</span>
      <button id="checkout" style="padding: 10px 20px; background-color: #F0F4F8; color: black; border: none; border-radius: 5px; cursor: pointer;">Checkout</button>
    </div>
    <div style="padding: 20px; text-align: right; border-top: 1px solid #ddd;">
      <a href="#" style="color: #1E3A8A; font-size: 1.1em; text-decoration: none;">Butuh desain custom? Klik di sini untuk hubungi kami!</a>
    </div>
  </div>
`;

// Insert the HTML structure into the body of the webpage
document.body.innerHTML = cartHTML;

// Array to hold cart items
const cart = [
  { id: 1, name: "Product A", price: 20999, quantity: 1, image: "img/p1 (1).jpeg" },
  { id: 2, name: "Product B", price: 15499, quantity: 2, image: "img/p1 (2).jpeg" },
  { id: 3, name: "Product C", price: 7999, quantity: 1, image: "img/p1 (3).jpeg" }
  
];

// Function to render cart items
function renderCart() {
  const cartItemsContainer = document.getElementById("cart-items");
  const totalPriceElement = document.getElementById("total-price");
  cartItemsContainer.innerHTML = "";
  
  let total = 0;

  cart.forEach((item) => {
    const itemTotal = item.price * item.quantity;
    total += itemTotal;

    const listItem = document.createElement("li");
    listItem.style.display = "flex";
    listItem.style.justifyContent = "space-between";
    listItem.style.alignItems = "center";
    listItem.style.marginBottom = "15px";
    listItem.style.padding = "10px";
    listItem.style.borderBottom = "1px solid #ddd";

    listItem.innerHTML = `
      <div style="display: flex; align-items: center;">
        <img src="${item.image}" alt="${item.name}" style="width: 80px; height: 80px; object-fit: cover; margin-right: 15px; border-radius: 5px;">
        <div>
          <strong style="font-size: 1.2em;">${item.name}</strong><br>
          <span style="color: gray;">Rp${item.price.toLocaleString("id-ID")} x ${item.quantity}</span>
        </div>
      </div>
      <div>
        <button style="margin-right: 10px; background: none; border: 1px solid #ccc; border-radius: 5px; padding: 5px; cursor: pointer;" onclick="updateQuantity(${item.id}, -1)">-</button>
        ${item.quantity}
        <button style="margin-left: 10px; background: none; border: 1px solid #ccc; border-radius: 5px; padding: 5px; cursor: pointer;" onclick="updateQuantity(${item.id}, 1)">+</button>
      </div>
      <span style="font-weight: bold; font-size: 1.2em;">Rp${itemTotal.toLocaleString("id-ID")}</span>
    `;

    cartItemsContainer.appendChild(listItem);
  });

  totalPriceElement.textContent = `Total: Rp${total.toLocaleString("id-ID")}`;
}

// Function to update item quantity
function updateQuantity(itemId, change) {
  const item = cart.find((item) => item.id === itemId);
  if (item) {
    item.quantity += change;
    if (item.quantity <= 0) {
      const index = cart.indexOf(item);
      cart.splice(index, 1);
    }
    renderCart();
  }
}

// Initial render
renderCart();
