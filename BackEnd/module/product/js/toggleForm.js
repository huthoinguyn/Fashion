const form = {
  handleEvents: function () {
    document.body.onclick = (e) => {
        if(e.target.matches('#edit-wrapper') || e.target.matches('#add-wrapper')){
            window.location.href= 'index.php?manage='
        }
    }
  },
  start: function () {
    this.handleEvents();
  },
};

form.start();
