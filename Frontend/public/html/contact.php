<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
  </style>
</head>

<body>
  <!-- slider -->
  <div style="background-image: url('imgs/slider-contact.jpg');" class=" h-[239px] flex flex-col items-center justify-center text-white">
    <h2 class="text-5xl leading-[56px] font-bold">Contact</h2>
  </div>
  <!-- content -->
  <div class="w-full pt-16 pb-16">
    <div class="w-full flex justify-center items-center gap-8">
      <div class="map w-[40%] h-full">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62860.63914868875!2d105.72255072784505!3d10.034185113828485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0629f6de3edb7%3A0x527f09dbfb20b659!2zQ-G6p24gVGjGoSwgTmluaCBLaeG7gXUsIEPhuqduIFRoxqEsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1658845557769!5m2!1svi!2s" style="border: 0" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full min-h-[560px]"></iframe>
      </div>
      <div class="form w-[40%] text-gray-700 ">
        <h3 class="title pt-4 pb-8 text-3xl leading-7">Send us your message</h3>
        <form action="">
          <input type="text" placeholder="Full Name" />
          <input type="tel" placeholder="Phone Number" />
          <input type="email" placeholder="Email Address" />
          <textarea name="" id="" rows="6" placeholder="Message"></textarea>
          <input type="submit" value="Send" class="ct-button max-w-[160px]">
        </form>
      </div>
    </div>
  </div>
</body>

</html>