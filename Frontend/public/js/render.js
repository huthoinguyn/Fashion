window.addEventListener("load", () => {
  const ajax = new XMLHttpRequest();
  ajax.open("GET", "prod.php", true);
  ajax.send();

  ajax.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let prod = JSON.parse(this.responseText);
      prod.map((item) => {
        const productTemplate = `
              <div class="item1 product-item w-[30%]">
                            <div
                              style="background-image: url('../../../BackEnd/images/${item.image}')"
                              class="product-image w-full h-[380px] bg-cover bg-no-repeat bg-center"
                            >
                              <!-- <a href="#"> -->
                              <div
                                class="w-full h-full hover:bg-gray-900 hover:bg-opacity-20 hover:transition-all hover:ease-in-out hover:duration-300 relative overflow-hidden group"
                              >
                                <div
                                  class="add-cart-btn absolute bottom-4 left-1/2 translate-x-[-50%] translate-y-[100%] opacity-0 text-sm ct-button px-6 py-1"
                                >
                                  Add to cart
                                </div>
                              </div>
                              <!-- </a> -->
                            </div>
                            <div class="product-info my-8">
                              <a href="#">
                                <div class="product-name text-base mb-1 hover:text-pri text-center">
                                  ${item.name}
                                </div>
                              </a>
                              <div class="product-price text-center">
                                <span class="text-gray-800">$${item.price}</span>
                              </div>
                            </div>
              `;
        $(".product-list").insertAdjacentHTML("beforeend", productTemplate);
      });
    }
  };
  // const productItems = [
  //   {
  //     img: "../imgs/featured-product-image-01.jpg",
  //     name: "Herschel supply co 25l",
  //     price: "$75.00",
  //   },
  //   {
  //     img: "../imgs/category-image-02.jpg",
  //     name: "Herschel supply co 25l",
  //     price: "$75.00",
  //   },
  //   {
  //     img: "../imgs/featured-product-image-03.webp",
  //     name: "Herschel supply co 25l",
  //     price: "$75.00",
  //   },
  //   {
  //     img: "../imgs/featured-product-image-04.webp",
  //     name: "Herschel supply co 25l",
  //     price: "$75.00",
  //   },
  //   {
  //     img: "../imgs/featured-product-image-04.webp",
  //     name: "Herschel supply co 25l",
  //     price: "$75.00",
  //   },
  //   {
  //     img: "../imgs/featured-product-image-04.webp",
  //     name: "Herschel supply co 25l",
  //     price: "$75.00",
  //   },
  //   {
  //     img: "../imgs/featured-product-image-04.webp",
  //     name: "Herschel supply co 25l",
  //     price: "$75.00",
  //   },
  //   {
  //     img: "../imgs/featured-product-image-04.webp",
  //     name: "Herschel supply co 25l",
  //     price: "$75.00",
  //   },
  // ];
});
