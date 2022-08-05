const detail = {
  handleEvents: function () {
    const _this = this;
    $$(".thumbnail .img").forEach((item) => {
      item.onclick = () => {
        const imageSrc = item.querySelector("img").src;
        _this.preview(imageSrc);
      };
    });
    let num = 1;
    $(".add1").onclick = () => {
      num++;
      _this.count(num);
    };
    $(".minus1").onclick = () => {
      num--;
      if (num <= 0) num = 1;
      _this.count(num);
    };
  },
  preview: function (imageSrc) {
    $(".preview img").src = imageSrc;
  },
  count: function (num) {
    $(".quty").value = num;
  },
  start: function () {
    this.handleEvents();
  },
};

detail.start();
