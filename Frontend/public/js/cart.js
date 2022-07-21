window.addEventListener("load", () => {
  let cartItems = [];
  const cartNoti = $("#cart-icon .cart-noti");
  function setCartNoti(list) {
    let cartCount = list.length;
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
    setCartNoti(cartItems);
  }
  function renderCart(img, name, price) {
    const cartTemplate = `
    <li class="items odd">
    <div class="infoWrap">
      <div class="cartSection w-[60%]">
        <img
          src="${img}"
          alt=""
          class="itemImg"
        />
        <p class="itemNumber">#QUE-007544-002</p>
        <h3>${name}</h3>

        <p><input type="text" class="qty product-qty" value = '1' /> x ${price}</p>

      </div>

      <div class='prodqty w-[10%]'>
      </div>

      <div class="prodTotal cartSection  w-[20%] text-center">
        <p>${price}</p>
      </div>
      <div class="cartSection removeWrap  w-[10%] text-center">
        <a href="#" class="remove">x</a>
      </div>
    </div>
  </li>
      `;
    $(".cartWrap").insertAdjacentHTML("beforeend", cartTemplate);
  }
  const productItems = $$(".featured-products .product-item");
  productItems.forEach((item) => {
    const name = item.querySelector(".product-name").textContent,
      price = item.querySelector(".product-price span").textContent,
      addCartBtn = item.querySelector(".add-cart-btn");
    addCartBtn.addEventListener("click", () => {
      addToCart("", name, price);
      renderCart("", name, price);
      setProductTotal();
      delProdCart();
    });
    function setProductTotal() {
      const productQtys = $$(".product-qty");
      productQtys.forEach((item) => {
        item.addEventListener("input", (e) => {
          const quantity = e.target.value;
          let total = productTotal(price, quantity);
          e.target.parentNode.parentNode.nextElementSibling.nextElementSibling.innerHTML = `<p>$${total}</p>`;
        });
      });
    }

    function delProdCart() {
      const newCartItems = [...cartItems];
      const delIcons = $$(".cartSection .remove");
      delIcons.forEach((item) => {
        item.addEventListener("click", (e) => {
          e.preventDefault();
          e.target.parentNode.parentNode.parentNode.remove();
        });
      });
    }
  });

  // Toggle Cart
  let check = true;
  $("#cart-icon").onclick = (e) => {
    e.preventDefault();
    check = false;
    toggleCart();
  };
  $("#cart .continue").onclick = (e) => {
    e.preventDefault();
    check = true;
    toggleCart(check);
  };
  document.body.addEventListener("click", (e) => {
    if (e.target.matches("#cart")) {
      check = true;
      toggleCart(check);
    }
  });
  function toggleCart(check) {
    check
      ? ($("#cart").style.display = "none")
      : ($("#cart").style.display = "block");
  }

  // product total
  function productTotal(price, quantity) {
    const newPrice = price.slice(1);
    return Number((Number(newPrice) * Number(quantity)).toFixed(2));
  }
});
