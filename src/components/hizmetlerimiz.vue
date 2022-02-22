<template>
   <section id="AnahtarTeslim">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-sm-6  col-lg-4   col-xl-3 offset-sm-1  wow animated  animate__fadeInDown"
                    id="AnahtarTeslimCol">
                    <h1>ANAHTAR TESLİM</h1>
                    <h2>Projeniz için destek alın!</h2>
                    <h2>Süreci instagram sayfamızdan takip edin </h2>
                    <a href="https://www.instagram.com/aktasdesignn/" id="Anahtarİnsta"
                        class="btn btn-danger mx-auto "><i class="fab fa-instagram"></i> Birlikte düşünelim</a>
                    <a href="https://api.whatsapp.com/send?phone=905061631325" id="AnahtarWp"
                        class="btn btn-success mx-auto "><i class="fab fa-whatsapp"></i> MİMAR İLE KONUŞ</a>
                </div>

                <div id="NelerYapıyoruz">
                    <h1 class="mx-auto">Neler Yapıyoruz ? </h1>
                </div>
                <div class="row justify-content-center mx-auto">
                    <div class="col-sm-6 col-md-4 col-lg-3">

                        <div class="item">
                            <div class="zoom ">
                                <a href="#AnahtarTeslimCol"> <img src="../HtmlFiles/img/tadil.jpg" alt="Aktasdesignn Tadilat"> </a>
                            </div>
                            <div class="itemText ">
                                <h3 class="yazi  wow animate__animated animate__fadeInLeft"> Tadilat</h3>
                                <a href="#AnahtarTeslimCol" class="btnDetails" data-wow-duration="2s">Projede belirlediğimiz
                                    tasarımlar göz önüne alınarak tadilat işlemleri yapılır.</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3   ">

                        <div class="item">
                            <div class="zoom">
                                 <a href="#AnahtarTeslimCol"> <img src="../HtmlFiles/img/atolye1.jpg" alt="Aktasdesignn Uygulama"></a>
                            </div>
                            <div class="itemText">
                                <h3 class="yazi wow animate__animated animate__fadeInDown">Uygulama</h3>
                                <a href="#AnahtarTeslimCol" class="btnDetails">Tadilat, alt yapı işleri bitiminde projeniz için
                                    uygulamaya geçecek konuma getirilir. </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3   ">

                        <div class="item">
                            <div class="zoom">
                                <a href="#AnahtarTeslimCol"> <img src="../HtmlFiles/img/mobilya2.jpeg" alt="Aktasdesignn Mobilya"></a>
                            </div>
                            <div class="itemText">
                                <h3 class="yazi wow  animate__animated animate__fadeInRight">Mobilya</h3>
                                <a href="#AnahtarTeslimCol" class="btnDetails">Projenizin tadilat işleri biter bitmez ürünlerin
                                    ölçüleri atölyeye verilir ve üretime başlanır. </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-auto pt-5">
            <div class="col-sm-6 col-md-4 col-lg-3  mx-auto">
                <div class="item">
                    <div class="zoom">
                        <a href="#AnahtarTeslimCol"> <img src="../HtmlFiles/img/montaj.jpg" alt="Aktasdesignn Montaj"></a>
                    </div>
                    <div class="itemText">
                        <h3 class="yazi wow animate__animated animate__fadeInLeft">Montaj</h3>
                        <a href="#AnahtarTeslimCol" class="btnDetails">Hazır hale gelmiş olan mobilyalarımız teslim edilir
                            ve özenle ekip arkadaşlarımız tarafından montajı yapılır. </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3  mx-auto">
                <div class="item">
                    <div class="zoom">
                        <a href="#AnahtarTeslimCol"> <img src="../HtmlFiles/img/dekore2.jpeg" alt="Aktasdesignn Montaj"></a>
                    </div>
                    <div class="itemText">
                        <h3 class="yazi  wow animate__animated animate__fadeInDown">Dekorasyon</h3>
                        <a href="#AnahtarTeslimCol" class="btnDetails">Mobilya ve üretimle eş zamanlı olarak projemize renk
                            katacak olan belirlediğimiz dekoratif ürünler temin edilir.</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3   mx-auto">
                <div class="item">
                    <div class="zoom">
                        <a @click="AnahtarTeslimCol()"> <img src="../HtmlFiles/img/takip2.jpg" alt="Aktasdesignn Takip"></a>
                    </div>
                    <div class="itemText">
                        <h3 class="yazi wow animate__animated animate__fadeInRight">Takip</h3>
                        <a href="#AnahtarTeslimCol" class="btnDetails">Tüm süreci takip eden ekip arkadaşlarımızla projeniz
                            ile ilgili her zaman irtibatta olabilirsiniz.</a>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-md-4 col-lg-3   mx-auto pb-3">
                <div class="item">
                    <div class="zoom">
                        <a href="#AnahtarTeslimCol"> <img src="../HtmlFiles/img/anhtr.jpg" alt="Aktasdesignn Teslim"></a>
                    </div>
                    <div class="itemText">
                        <h3 class="yazi  wow animate__animated animate__fadeInUp">Teslim</h3>
                        <a href="#AnahtarTeslimCol" class="btnDetails"> <b>Güvenle başladığımız projemiz tüm detaylarıyla
                                takip edildikten sonra sizlere teslim edilir. </b> </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

</template>


<script>
export default {
  methods:{
      AnahtarTeslimCol:function(){
            
      }
  }
}
</script>