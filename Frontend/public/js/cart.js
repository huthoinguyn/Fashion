// window.addEventListener("load", () => {
//   let cartItems = [];
//   const cartNoti = $("#cart-icon .cart-noti");
//   function setCartNoti(list) {
//     let cartCount = list.length;
//     cartCount >= 1
//       ? (cartNoti.style.display = "flex")
//       : (cartNoti.style.display = "none");
//     $("#cart-icon .cart-noti p").innerText = cartCount;
//   }
//   function addToCart(img, name, price) {
//     cartItems.push({
//       img,
//       name,
//       price,
//     });
//     setCartNoti(cartItems);
//   }
//   function renderCart(img, name, price) {
//     const cartTemplate = `
//     <li class="items odd">
//     <div class="infoWrap">
//       <div class="cartSection w-[60%]">
//         <img
//           src="${img}"
//           alt=""
//           class="itemImg w-[128px] h-[100px] object-cover"
//         />
//         <p class="itemNumber">#QUE-007544-002</p>
//         <h3>${name}</h3>

//         <p><input type="text" class="qty product-qty" value = '1' /> x ${price}</p>

//       </div>

//       <div class='prodqty w-[10%]'>
//       </div>

//       <div class="prodTotal cartSection  w-[20%] text-center">
//         <p>${price}</p>
//       </div>
//       <div class="cartSection removeWrap  w-[10%] text-center">
//         <a href="#" class="remove">x</a>
//       </div>
//     </div>
//   </li>
//       `;
//     $(".cartWrap").insertAdjacentHTML("beforeend", cartTemplate);
//   }
//   const productItems = $$(".product-item");
//   productItems.forEach((item) => {
//     const name = item.querySelector(".product-name").textContent,
//       image = item.querySelector(".product-image"),
//       price = item.querySelector(".product-price span").textContent,
//       addCartBtn = item.querySelector(".add-cart-btn");
//     const style = window.getComputedStyle(image, false);
//     const bi = style.backgroundImage.slice(4, -1).replace(/"/g, "");
//     addCartBtn.addEventListener("click", () => {
//       addToCart(bi, name, price);
//       renderCart(bi, name, price);
//       setProductTotal();
//       delProdCart();
//     });
//     function setProductTotal() {
//       const productQtys = $$(".product-qty");
//       productQtys.forEach((item) => {
//         item.addEventListener("input", (e) => {
//           const quantity = e.target.value;
//           let total = productTotal(price, quantity);
//           e.target.parentNode.parentNode.nextElementSibling.nextElementSibling.innerHTML = `<p>$${total}</p>`;
//         });
//       });
//     }

//     function delProdCart() {
//       const newCartItems = [...cartItems];
//       const delIcons = $$(".cartSection .remove");
//       delIcons.forEach((item) => {
//         item.addEventListener("click", (e) => {
//           e.preventDefault();
//           e.target.parentNode.parentNode.parentNode.remove();
//         });
//       });
//     }
//   });

//   // Toggle Cart
//   let check = true;
//   $("#cart-icon").onclick = (e) => {
//     e.preventDefault();
//     check = false;
//     toggleCart();
//   };
//   $("#cart .continue").onclick = (e) => {
//     e.preventDefault();
//     check = true;
//     toggleCart(check);
//   };
//   document.body.addEventListener("click", (e) => {
//     if (e.target.matches("#cart")) {
//       check = true;
//       toggleCart(check);
//     }
//   });
//   function toggleCart(check) {
//     check
//       ? ($("#cart").style.display = "none")
//       : ($("#cart").style.display = "block");
//   }

//   // product total
//   function productTotal(price, quantity) {
//     const newPrice = price.slice(1);
//     return Number((Number(newPrice) * Number(quantity)).toFixed(2));
//   }
// });

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
  cartTotal: function () {},
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
    // this.cartNoti();
  },
};

app.start();
