const blogItems = [
  {
    blogTime: "24 JUL, 2022",
    blogImg: "imgs/blog-item-image-01.webp",
    blogTitle: "Black Friday Guide: Best Sales & Discount Codes",
    blogAuthor: "Admin",
    blogCategory: "Cooking, Food",
    blogDesc:
      "Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius",
  },
  {
    blogTime: "24 JUL, 2022",
    blogImg: "imgs/blog-item-image-02.webp",
    blogTitle: "Black Friday Guide: Best Sales & Discount Codes",
    blogAuthor: "Admin",
    blogCategory: "Cooking, Food",
    blogDesc:
      "Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius",
  },
  {
    blogTime: "24 JUL, 2022",
    blogImg: "imgs/blog-item-image-03.webp",
    blogTitle: "Black Friday Guide: Best Sales & Discount Codes",
    blogAuthor: "Admin",
    blogCategory: "Cooking, Food",
    blogDesc:
      "Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius",
  },
  {
    blogTime: "24 JUL, 2022",
    blogImg: "imgs/blog-item-image-04.webp",
    blogTitle: "Black Friday Guide: Best Sales & Discount Codes",
    blogAuthor: "Admin",
    blogCategory: "Cooking, Food",
    blogDesc:
      "Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius",
  },
];
const featuredProducts = [
  {
    img: "imgs/featured-product-image-05.jpg",
    name: "White Shirt With Pleat Detail Back",
    price: "$19.00",
  },
  {
    img: "imgs/featured-product-image-06.webp",
    name: "Converse All Star Hi Black Canvas",
    price: "$39.00",
  },
  {
    img: "imgs/featured-product-image-07.jpg",
    name: "Nixon Porter Leather Watch In Tan",
    price: "$17.00",
  },
  {
    img: "imgs/featured-product-image-03.webp",
    name: "Denim jacket blue",
    price: "$39.00",
  },
  {
    img: "imgs/category-image-02.jpg",
    name: "Nixon Porter Leather Watch In Tan",
    price: "$17.00",
  },
];
window.addEventListener("load", () => {
  blogItems.map((item) => {
    const blogTemplate = `
          <div class="blog-item pb-20">
                    <div class="blog-image overflow-hidden relative">
                      <img
                        src="${item.blogImg}"
                        alt=""
                        class="ct-image "
                      />
                      <div
                        class="time absolute px-5 py-1 left-0 bottom-[5%] bg-black text-white uppercase font-normal leading-6"
                      >
                        ${item.blogTime}
                      </div>
                    </div>
                    <div class="content pt-8">
                      <h2
                        class="title pb-3 text-3xl font-medium leading-8 text-gray-800 cursor-pointer"
                      >
                        ${item.blogTitle}
                      </h2>
                      <p
                        class="capitalize pb-5 text-sm text-gray-400 leading-6 font-normal"
                      >
                        <span>By ${item.blogAuthor}</span> | <span>${item.blogCategory}</span> |
                        <span>8 comments</span>
                      </p>
                      <p class="text-base leading-7 text-gray-400 font-normal pb-3">
                        ${item.blogDesc}
                      </p>
                      <p
                        class="text-base leading-5 text-gray-600 font-normal pb-3 hover:text-pri flex items-centerc cursor-pointer"
                      >
                        Continue Reading
                        <span class="material-symbols-outlined pl-1">
                          trending_flat
                        </span>
                      </p>
                    </div>
                  </div>
          `;
    $(".blog-list").insertAdjacentHTML("beforeend", blogTemplate);
  });
  featuredProducts.map((item) => {
    const blogTemplate = `
    <div class="featured-product-item flex gap-2 mb-4">
    <div class="img w-[30%]">
      <img src="${item.img}" alt="" class='h-[120px] object-cover'/>
    </div>
    <div class="info w-[65%]">
      <div class="title name mb-4">
        ${item.name}
      </div>
      <div class="text-gray-600 text-base">${item.price}</div>
    </div>
  </div>
          `;
    $(".featured-product-list").insertAdjacentHTML("beforeend", blogTemplate);
  });
});
