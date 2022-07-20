window.addEventListener("load", () => {
  let cartItems = [];
  const cartNoti = $("#cart-icon .cart-noti");
  function setCartNoti() {
    let cartCount = cartItems.length;
    cartCount >= 1
      ? (cartNoti.style.display = "flex")
      : (cartNoti.style.display = "none");
    $("#cart-icon .cart-noti p").innerText = cartCount;
  }
  function addToCart(img, name, price) {
    cartItems.push({
      img,
      name,
      price,
    });
    setCartNoti();
  }
  function renderCart() {
    cartItems.map((item) => {
      const cartTemplate = `
      <div class="item flex justify-around w-[80%] h-[48px]">
            <img src="${item.img}" alt="">
            <h3 class="name">${item.name}</h3>
            <p class="price">${item.price}</p>
          </div>
      `;
      $("#cart .cart-list").insertAdjacentHTML("beforeend", cartTemplate);
    });
  }
  const productItems = $$(".featured-products .product-item");
  productItems.forEach((item) => {
    const name = item.querySelector(".product-name").textContent,
      price = item.querySelector(".product-price span").textContent,
      addCartBtn = item.querySelector(".add-cart-btn");
    addCartBtn.addEventListener("click", () => {
      addToCart("", name, price);
    });
  });

  const cartIcon = $("#cart-icon");
  cartIcon.addEventListener("click", (e) => {
    e.preventDefault();
    $("#cart").style.display = "block";
    renderCart();
  });
});
