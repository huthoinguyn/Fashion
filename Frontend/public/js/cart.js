const cart = $("#cart");
const prodlist = $$(".product-item");

const app = {
  cartList: [],
  cartRender: function () {
    const cartItems = this.cartList.map((item, index) => {
      return `
    <li class="cart-item items odd" data-index="${index}">
    <div class="infoWrap">
      <div class="cartSection w-[60%]">
        <img
          src="${item.img}"
          alt=""
          class="itemImg w-[128px] h-[100px] object-cover"
        />
        <p class="itemNumber">#QUE-007544-002</p>
        <h3>${item.name}</h3>

        <p><input type="text" class="qty product-qty" value = '1' /> x ${item.price}</p>

      </div>

      <div class='prodqty w-[10%]'>
      </div>

      <div class="prodTotal cartSection  w-[20%] text-center">
        <p>${item.price}</p>
      </div>
      <div class="cartSection removeWrap  w-[10%] text-center">
        <a href="#" class="remove">x</a>
      </div>
    </div>
  </li>
      `;
    });
    $(".cartWrap").innerHTML = cartItems.join("");
    this.cartNoti();
    this.cartTotal();
    this.delCart();
  },
  handleEvents: function () {
    const _this = this;
    $("#cart-icon").onclick = (e) => {
      e.preventDefault();
      cart.style.display = "block";
    };
    document.body.onclick = (e) => {
      if (e.target.matches("#cart")) cart.style.display = "none";
    };
    $$(".product-item").forEach((prod) => {
      const name = prod.querySelector(".product-name").textContent,
        image = prod.querySelector(".product-image"),
        price = prod.querySelector(".product-price span").textContent,
        style = window.getComputedStyle(image, false),
        bi = style.backgroundImage.slice(4, -1).replace(/"/g, "");
      prod.querySelector(".add-cart-btn").onclick = () => {
        _this.addCart(bi, name, price);
        _this.cartRender();
      };
    });
  },
  cartTotal: function () {
    let total = 0;
    let ship = 0;
    let tax = 0;
    this.cartList.map((item) => {
      total += Number(item.price.slice(1));
    });
    if (total > 0) {
      ship = 5;
      tax = 4;
    }

    $(".subtotal .subtotal").innerText = "$" + total;
    $(".subtotal .ship").innerText = "$" + ship;
    $(".subtotal .tax").innerText = "$" + tax;
    total = total + ship + tax;
    $(".subtotal .final .value").innerText = "$" + total;
  },
  delCart: function () {
    const _this = this;
    $$(".cart-item").forEach((item) => {
      item.querySelector(".cartSection .remove").onclick = (e) => {
        e.preventDefault();
        const delId = item.dataset.index;
        if (delId > -1) {
          _this.cartList.splice(delId, 1);
        }
        _this.cartRender();
      };
    });
  },
  addCart: function (img, name, price) {
    this.cartList.push({
      img,
      name,
      price,
    });
  },
  cartNoti: function () {
    const cartCount = this.cartList.length;
    cartCount >= 1
      ? ($("#cart-icon .cart-noti").style.display = "flex")
      : ($("#cart-icon .cart-noti").style.display = "none");
    $("#cart-icon .cart-noti p").innerText = cartCount;
  },
  start: function () {
    this.handleEvents();
    this.cartRender();
  },
};

app.start();
