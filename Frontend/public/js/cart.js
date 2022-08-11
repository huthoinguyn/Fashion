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

        <p><input type="text" class="qty product-qty" value = '1' /> x  $${item.price}</p>

      </div>

      <div class='prodqty w-[10%]'>
      </div>

      <div class="prodTotal cartSection  w-[20%] text-center">
        <p>$${item.price}</p>
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
    $(".continue").onclick = (e) => {
      e.preventDefault();
      cart.style.display = "none";
    };
    $$(".product-item").forEach((prod) => {
      const name = prod.querySelector(".product-name").textContent,
        image = prod.querySelector(".product-image"),
        price = prod.querySelector(".product-price span").textContent,
        style = window.getComputedStyle(image, false),
        bi = style.backgroundImage.slice(4, -1).replace(/"/g, "");
      prod.querySelector(".add-cart-btn").onclick = (e) => {
        e.preventDefault()
        _this.addCart(bi, name, Number(price.slice(1)));
        _this.cartRender();
      };
    });
    $(".user").onclick = (e) => {
      e.preventDefault();
      $(".user-info").classList.toggle("show-user");
    };

    if ($(".add-cart")) {
      $(".add-cart").onclick = () => {
        _this.addCart("../imgs/fog-01.webp", "Fear of god", "1295");
        _this.cartRender();
      };
    }
    // $$(".product-qty").forEach((item) => {
    //   item.onchange = (e) => {
    //     item.addEventListener("input", (e) => {
    //       const quantity = e.target.value;
    //       let total = _this.productTotal(price, quantity);
    //       console.log(
    //         "🚀 ~ file: cart.js ~ line 68 ~ item.addEventListener ~ total",
    //         total
    //       );
    //       _this.cartRender();
    //     });
    //   };
    // });
  },
  // prodTotal: function (price, quantity) {
  //   const newPrice = price.slice(1);
  //   return Number((Number(newPrice) * Number(quantity)).toFixed(2));
  // },
  cartTotal: function () {
    let total = 0;
    let ship = 0;
    let tax = 0;
    this.cartList.map((item) => {
      total += Number(item.price);
    });
    if (total > 0) {
      tax = 4;
    }
    if (total > 0 && total < 100) {
      ship = 5;
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
