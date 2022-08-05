window.addEventListener("load", () => {
  let sliders = [
    {
      img: "./imgs/slider-image-01.png",
      content: {
        title:
          "<span class='text-slate-700 font-extrabold uppercase'> Winter collection</span>",
        desc: "<span class='text-slate-700'>Fashion week happens twice a year in the major fashion capitals of the world: <br/> New york, London, Milan and Paris. The following season.</span>",
      },
    },
    {
      img: "./imgs/slider-image-02.avif",
      content: {
        title:
          "<span class='text-white font-extrabold uppercase'> The summer edition</span>",
        desc: "<span class='text-white text-center'>The world of clothing is always changing, as new cultural influences</span>",
      },
    },
    {
      img: "./imgs/slider-image-03.avif",
      content: {
        title:
          "<span class='text-slate-700 font-extrabold uppercase'> The summer edition</span>",
        desc: "<span class='text-slate-700 text-center'>The world of clothing is always changing, as new cultural influences</span>",
      },
    },
  ];
  let indexSlider = 0;
  function changeSlider(indexSlider) {
    const sliderTemplate = `
            <h3 class="text-6xl tracking-wide is-fadeIn">
                ${sliders[indexSlider].content.title}
                </h3>
                <p class="mt-4 mb-9 is-fadeRight font-normal leading-9 text-base">
                  ${sliders[indexSlider].content.desc}
              </p>
              <a
                href="./html/product.php"
                class="w-fit px-6 py-2 bg-pri text-white rounded-sm is-fadeUp"
                >Shopping now</a
              >
            `;
    $("#slider").style.backgroundImage = `url(${sliders[indexSlider].img})`;
    $(".slider-wrap").innerHTML = sliderTemplate;
  }
  setInterval(() => {
    indexSlider++;
    if (indexSlider >= sliders.length) {
      indexSlider = 0;
    }
    changeSlider(indexSlider);
  }, 6000);
});
