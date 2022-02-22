<template>
  <section id="AboutParagraf">

    <div class="container">
      <div class="row wow animate__animated animate__fadeInDown">
        <h1 id="font-familys">Akılda kalacak kalitedeki ürünlerimizle tasarımlarınıza renk katarak hayallerinizi gerçekleştiriyoruz.</h1>
      </div>
      <div class="row">

        <div class="col-sm-4">
          <router-link
            :to="{path:'/projects'}"
          >

            <div class="item">
              <div class="zoom ">
                <a href="#AnahtarTeslimCol"> <img
                    src="../HtmlFiles/img/About-1.png"
                    alt="Aktasdesignn Tadilat"
                  > </a>
              </div>
              <div class="itemText ">
                <h3 class="yazi  wow animate__animated animate__fadeInLeft"> İç Mimari Tasarım</h3>
                <router-link
                  :to="{path:'/projects'}"
                >
                  <a
                    href=""
                    class="btnDetails"
                    data-wow-duration="2s"
                  > Bursa’da tasarım hizmeti veren ve mobilya üretimi yapan firmamız sizlere daha iyi hizmet verebilmek için, yıllar süren çalışmaları ile kazanmış olduğu bilgi ve birikimlerini üstün kalite ve üstün iş prensibiyle sunmaktadır.</a>
                </router-link>

              </div>
            </div>
          </router-link>

        </div>

        <div class="col-sm-4">
          <router-link
            :to="{path:'/projects'}"
          >

            <div class="item">
              <div class="zoom ">
                <a href="#AnahtarTeslimCol"> <img
                    src="../HtmlFiles/img/about-22.jpg"
                    alt="Aktasdesignn Tadilat"
                  > </a>
              </div>
              <div class="itemText ">
                <h3 class="yazi  wow animate__animated animate__fadeInUp"> 3D Görselleştirme</h3>
                <router-link
                  :to="{path:'/projects'}"
                >
                  <a
                    href="#AnahtarTeslimCol"
                    class="btnDetails"
                    data-wow-duration="2s"
                  > Önce sizi dinliyoruz, beklentilerinizi anladıktan sonra sizler için düşündüğümüz, hayal ettiğimiz tasarımlarımızı 3D görselleştirme ile sizlere sunuyoruz. Tasarımlarımız beklediğiniz vizyonu karşıladığı sırada ekibimiz harekete geçiyor. Projemizi birebir imalat detaylarına kadar hazırlayıp, projemizin durumunu düzenli olarak sizlere raporluyoruz.</a>
                </router-link>

              </div>
            </div>
          </router-link>
        </div>

        <div class="col-sm-4">
          <router-link
            :to="{path:'/projects'}"
          >

            <div class="item">
              <div class="zoom ">
                <a href="#AnahtarTeslimCol"> <img
                    src="../HtmlFiles/img/about-3.jpeg"
                    alt="Aktasdesignn Tadilat"
                  > </a>
              </div>
              <div class="itemText ">
                <h3 class="yazi  wow animate__animated animate__fadeInRight"> Mobilya Dekor Tasarımı</h3>

                <router-link
                  :to="{path:'/projects'}"
                >
                  <a
                    href="#AnahtarTeslimCol"
                    class="btnDetails"
                    data-wow-duration="2s"
                  >Her geçen gün daha iyi ürün üretmek ve deneyimlerimizi göz önünde bulundurarak, projelerinizde yaşam kolaylığı sağlayarak hayata geçiriyoruz.</a>
                </router-link>

              </div>
            </div>
          </router-link>

        </div>
      </div>
    </div>
  </section>
</template>

