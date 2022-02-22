<template>
  <section id="contactSection">
    <div class="container ">
      <div class="row ">
        <div class="col-lg-6" id="GetContact">
          <h1 class="text-center">
            Detaylı bilgi ve destek için ekibimiz ile iletişime geçin
          </h1>
          <div class="input-group input-group-sm mb-3">
            <form
              action="../smtp2.php"
              method="post"
              class="text-center"
              enctype="multipart/form-data"
              target="_parent"
              autocomplete="on"
            >
              <div class="input-group mt-4 ">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default"
                    >Ad Soyad</span
                  >
                </div>
                <input
                  autocomplete="on"
                  type="text"
                  class="form-control p-0  m-0"
                  aria-label="Default"
                  aria-describedby="inputGroup-sizing-default"
                  required
                  autofocus
                  name="name"
                />
              </div>
              <div class="input-group mt-4 ">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default"
                    >E-Mail</span
                  >
                </div>
                <input
                  type="email"
                  class="form-control p-0  m-0"
                  aria-label="Default"
                  aria-describedby="inputGroup-sizing-default"
                  required
                  name="email"
                />
              </div>

              <div class="input-group mt-4 ">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default"
                    >Mesajınız
                  </span>
                </div>
                <textarea
                  class="form-control"
                  id="InputMessage"
                  name="message"
                  value=""
                  rows="3"
                ></textarea>
              </div>
              <input
                type="submit"
                name="Merhaba Aktasdesignn.com sitesine bir başvuru yapıldı"
                class="btn mt-3"
              />
            </form>
          </div>
        </div>
        <div class="col-lg-6 wow animated fadeIn" data-wow-duration="3s">
          <div
            id="map-container-google-1"
            class="z-depth-1-half map-container "
          >
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3047.7267077911133!2d29.142496715673232!3d40.1928950771455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca39e85083870d%3A0xc21ccb34891d8966!2zS2FwxLEgQmFua2FzxLE!5e0!3m2!1str!2str!4v1619047718228!5m2!1str!2str"
              width="100%"
              height="500px"
              style="border:0;"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="container" id="Adress">
          <h1>
            <span class="bold">Adres: </span>
            <a
              href="https://www.google.com/maps?ll=40.192891,29.144685&z=16&t=m&hl=tr&gl=TR&mapclient=embed&cid=13987277969205070182"
              >Hacıvat Mahallesi Ankara Yolu Caddesi No : 543-553/9, 16290
              Yıldırım
            </a>
          </h1>
          <h2>
            <span class="bold">Numara: </span>
            <a href="https://api.whatsapp.com/send?phone=905061631325">
              0 506 163 1325</a
            >
          </h2>
          <h2></h2>
        </div>
      </div>
    </div>
  </section>
</template>
