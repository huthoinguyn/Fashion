    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
    const loading = $("#loading");
    const header = $("header");
    const banner = $(".banner");
    window.addEventListener("load", () => {
      loading.style.display = "none";
      document.body.style = "overflow:auto; height:auto; position:relative";

      window.addEventListener("scroll", () => {
        if (window.scrollY > banner.offsetHeight) {
          document.body.style.paddingTop = `${header.offsetHeight}px`;
          header.classList.add("is-fixed");
        } else {
          header.classList.remove("is-fixed");
          document.body.style.paddingTop = 0;
        }
      });
    });