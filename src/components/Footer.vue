<template>
  <div class="footer" >
    <section id="footer">
      <div class="container-fluid wow animated fadeIn" data-wow-duration="2s">
        <div class="row">
          <div class="col-md-6">
            <ul class="footerLinks text-white">
              <li><a href="index.html" id="footerLinks"> <router-link active-class="active" to="/#indexSlider" exact >ANASAYFA</router-link></a></li>
              <li><a href="#AboutParagraf" id="footerLinks"> <router-link active-class="active" to="/hakkimizda#AboutParagraf" exact >HAKKIMIZDA</router-link></a></li>
              <li>
                <a href="Hizmetlerimiz.html" id="footerLinks">  <router-link active-class="active" to="/hizmetlerimiz#AnahtarTeslim" exact>HİZMETLERİMİZ</router-link></a>
              </li>
              <li><a href="project.html" id="footerLinks"> <router-link active-class="active"  :to="{path:'/projects#Mutfak'}" exact >PROJELER</router-link></a></li>
              <li><a href="contact.html" id="footerLinks"> <router-link active-class="active" to="/iletisim#contactSection" exact>İLETİŞİM</router-link></a></li>
            
            </ul>
          </div>

          <div class="col-md-6 text-center">
            <h3>Bize Ulaşın</h3>

            <ul class="justify-content-center d-flex p-0">
              <li>
                <a href="mailto:aaktasdesign@gmail.com "
                  ><i class="fa fa-envelope"></i
                ></a>
              </li>
              <li id="footerLinks">
                <a href="https://api.whatsapp.com/send?phone=905061631325"
                  ><i class="fab fa-whatsapp"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>

        <div class="row">
          <div
            id="Copyright"
            class="wow animated fadeInUp mx-auto"
            data-wow-duration="2s"
          >
            <a href="http://www.farukaydogan.com">
              <h3>FTA</h3>

              <h4>
                <span class="copyright">
                  Bu sitenin tüm hakları saklıdır. Copyright © Aktaş Design
                  2021</span
                >
              </h4>
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>