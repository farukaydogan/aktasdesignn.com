<template>
  <section class="projects" data-scroll-index="3">
    <div class="container">
      <div class="row">
        <div>
          <b-modal
            ref="my-modal"
            id="modal-xl"
            size="xl"
            :title="$route.query.name"
          >
            <b-carousel
              id="  -1"
              v-model="slide"
              :interval="4000"
              controls
              indicators  fade
    
              background="white"
           
              style="text-shadow: 1px 1px 2px #333;"
              
            >
              <b-carousel-slide
                v-for="item in $route.query"
                :key="item.img"
                v-if="item != $route.query.name"
              >
                <template #img>
                  <img
                    :src="item"
                    class="d-block img-fluid w-100"
                    width="1024"
                    height="480"
                    alt="image slot"
                  />
                </template>
              </b-carousel-slide>
            </b-carousel>
          </b-modal>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 pt-3">
          <div class="owl-carousel owl-theme" id="Mutfak">
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni fransa mutfak 5.jpg" alt="" />
              </div>
              <div class="con">
                <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'fransa-ada-mutfak-projesi' },
                      query: {
                        img: require('../HtmlFiles/img/fransa mutfak 5.jpg'),
                        img2: require('../HtmlFiles/img/fransa mutfak 6.jpg'),
                        name: 'Fransa Ada Mutfak'
                      }
                    }"
                    exact
                  >
                    <a href="">
                      Castres 81100, Fransa / Ada Mutfak Projesi
                    </a></router-link
                  >
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni fransa mutfak 9.jpg" alt="" />
              </div>
              <div class="con">
                 <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'fransa-mini-mutfak-projesi' },
                      query: {
                        img: require('../HtmlFiles/img/fransa mutfak 9.jpg'),
                        name: 'Fransa Mini Mutfak'
                      }
                    }"
                    exact
                  >
                    <a href="">
                      Castres 81100, Fransa / Mini Mutfak Projesi</a
                    ></router-link
                  >
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni beyaz mutfak.jpeg" alt="" />
              </div>
              <div class="con">
                <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'bursa-mutfak-projesi' },
                      query: {
                        img: require('../HtmlFiles/img/beyaz mutfak.jpeg'),
                        name: 'Bursa Mutfak'
                      }
                    }"
                    exact
                  >
                    <a href="">Nilüfer, Bursa / Mutfak Projesi</a></router-link
                  >
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni fransa mutfak 1.jpg" alt="" />
              </div>
              <div class="con">
               <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'fransa-ada-mutfak-projesi' },
                      query: {
                        img: require('../HtmlFiles/img/fransa mutfak 1.jpg'),
                        img2: require('../HtmlFiles/img/fransa mutfak 2.jpg'),
                        name: 'Fransa  Mutfak'
                      }
                    }"
                    exact
                  >
                    <a href="">
                      Castres 81100, Fransa / Ada Mutfak Projesi</a
                    ></router-link
                  >
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni f.a. 2.jpg" alt="" />
              </div>
              <div class="con">
              <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'besevler-bursa-mutfak-projesi' },
                      query: {
                        img: require('../HtmlFiles/img/f.a. 2.jpg'),
                        img2: require('../HtmlFiles/img/f.a. 4.jpg'),
                        img3: require('../HtmlFiles/img/f.a. 3.jpg'),
                        name: 'Beşevler, Bursa / Mutfak Projesi'
                      }
                    }"
                    exact
                  >
                    <a href="">Beşevler, Bursa / Mutfak Projesi</a></router-link
                  >
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img
                  src="../HtmlFiles/img/yeni fatih atlas mutfak.jpg"
                  alt=""
                />
              </div>
              <div class="con">
                <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'atlas-bursa-mutfak-projesi' },
                      query: {
                        img: require('../HtmlFiles/img/fatih atlas mutfak.jpg'),
                        name: 'Beşevler, Bursa / Mutfak Projesi'
                      }
                    }"
                    exact
                  >
                    <a href="">Atlas, Bursa / Mutfak Projesi</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img
                  src="../HtmlFiles/img/yeni elit vizyon mutfak 1.jpg"
                  alt=""
                />
              </div>
              <div class="con">
                 <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'besevler-bursa-mutfak-projesi' },
                      query: {
                        img: require('../HtmlFiles/img/fatih atlas mutfak.jpg'),
                        name: 'Beşevler, Bursa / Mutfak Projesi'
                      }
                    }"
                    exact
                  >
                    <a href="">Atlas, Bursa / Mutfak Projesi</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni fransa mutfak 11.jpg" alt="" />
              </div>
              <div class="con">
                <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'besevler-bursa-mutfak-projesi' },
                      query: {
                        img: require('../HtmlFiles/img/fransa mutfak 11.jpg'),
                        img2: require('../HtmlFiles/img/fransa mutfak 12.jpg'),
                        img3: require('../HtmlFiles/img/fransa mutfak 10.jpg'),

                        name: 'Beşevler, Bursa / Mutfak Projesi'
                      }
                    }"
                    exact
                  >
                    <a href=""> Castres 81100, Fransa / Mutfak Projesi</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img
                  src="../HtmlFiles/img/yeni hamamlıkızık fatih bey.jpg"
                  alt=""
                />
              </div>
              <div class="con">
                 <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'hamamlıkızık-bursa-mutfak-projesi' },
                      query: {
                        img: require('../HtmlFiles/img/hamamlıkızık fatih bey.jpg'),
                        name: 'Hamamlıkızık, Bursa / Mutfak Projesi'
                      }
                    }"
                    exact
                  >
                    <a href=""> Hamamlıkızık, Bursa / Mutfak Projesi</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img
                  src="../HtmlFiles/img/yeni karadeniz inşaat 1.jpg"
                  alt=""
                />
              </div>
              <div class="con">
               <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'nilufer-bursa-mutfak-projesi' },
                      query: {
                        img: require('../HtmlFiles/img/karadeniz inşaat 1.jpg'),
                        img2: require('../HtmlFiles/img/karadeniz inşaat 2.jpg'),
                        name: 'Nilüfer, Bursa / Mutfak Projesi'
                      }
                    }"
                    exact
                  >
                    <a href=""> Nilüfer, Bursa / Mutfak Projesi</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni fransa mutfak 13.jpg" alt="" />
              </div>
              <div class="con">
                 <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'nilufer-bursa-mutfak-projesi' },
                      query: {
                        img2: require('../HtmlFiles/img/fransa mutfak 13.jpg'),
                        img3: require('../HtmlFiles/img/fransa mutfak 14.jpg'),

                        name: 'Nilüfer, Bursa / Mutfak Projesi'
                      }
                    }"
                    exact
                  >
                    <a href=""> Nilüfer, Bursa / Mutfak Projesi</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-20 text-center">
          <h6 class="small-title float-right">
            <a href="">Tüm Projelere Gözat</a>
          </h6>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row pt-5">
        <div class="col-md-12 mb-20 text-center"></div>
      </div>

      <div class="row">
        <div class="col-md-12 pt-3">
          <div class="owl-carousel owl-theme">
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni banyo dolabı 1.jpg" alt="" />
              </div>
              <div class="con">
                 <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'yıldırım-bursa-banyo-projesi' },
                      query: {
                        img: require('../HtmlFiles/img/banyo dolabı 1.jpg'),
                        name: 'Yıldırım, Bursa / Banyo Projesi'
                      }
                    }"
                    exact
                  >
                    <a href=""> Yıldırım, Bursa / Banyo Projesi</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img
                  src="../HtmlFiles/img/yeni elit vizyon banyo 2.jpg"
                  alt=""
                />
              </div>
              <div class="con">
                <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'fsm-bursa-banyo-projesi' },
                      query: {
                        img: require('../HtmlFiles/img/elit vizyon banyo 2.jpg'),
                        img2: require('../HtmlFiles/img/elit vizyon banyo 1.jpg'),
                        name: 'Fatih Sultan Mehmet, Bursa / Banyo Projesi'
                      }
                    }"
                    exact
                  >
                    <a href=""> Fsm, Bursa / Banyo Projesi</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni dolap.jpeg" alt="" />
              </div>
              <div class="con">
                <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'nilufer-bursa-banyo-projesi' },
                      query: {
                        img: require('../HtmlFiles/img/banyo dolabı 2.jpg'),
                        name: 'Nilüfer, Bursa / Banyo Projesi'
                      }
                    }"
                    exact
                  >
                    <a href="">Nilüfer, Bursa / Banyo Projesi</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img
                  src="../HtmlFiles/img/yeni fransa banyo dolabı.jpg"
                  alt=""
                />
              </div>
              <div class="con">
                 <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'castres-81100-fransa-banyo-projesi' },
                      query: {
                        img: require('../HtmlFiles/img/fransa banyo dolabı.jpg'),
                        name: 'Castres 81100 , Fransa / Banyo Projesi'
                      }
                    }"
                    exact
                  >
                    <a href="">Castres 81100 , Fransa / Banyo Projesi</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni gürsu özcan bey.jpg" alt="" />
              </div>
              <div class="con">
                <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'gursu-bursa-banyo-projesi' },
                      query: {
                        img: require('../HtmlFiles/img/gürsu özcan bey.jpg'),
                        name: 'Gürsu, Bursa / Banyo Projesi'
                      }
                    }"
                    exact
                  >
                    <a href="">Gürsu, Bursa / Banyo Projesi</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-20 text-center pt-5"></div>
      </div>

      <div class="row">
        <div class="col-md-12 pt-3">
          <div class="owl-carousel owl-theme">
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni ofis 10.jpeg" alt="" />
              </div>
              <div class="con">
                 <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'aktas-design-ofis-projesi' },
                      query: {
                        img: require('../HtmlFiles/img/ofis-1.jpeg'),
                        img2: require('../HtmlFiles/img/ofis 1.jpg'),

                        name: ' Aktaş Design, Ofis Projesi'
                      }
                    }"
                    exact
                  >
                    <a href=""> Aktaş Design, Ofis Projesi</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni ofis 11.jpeg" alt="" />
              </div>
              <div class="con">
                 <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'aktas-design-ofis-projesi' },
                      query: {
                        img: require('../HtmlFiles/img/ofis-2.jpeg'),

                        name: ' Aktaş Design, Ofis Projesi'
                      }
                    }"
                    exact
                  >
                    <a href=""> Aktaş Design, Ofis Projesi</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni ofis 3.jpg" alt="" />
              </div>
              <div class="con">
               <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'aktas-design-toplantı-salonu' },
                      query: {
                        img: require('../HtmlFiles/img/ofis 3.jpg'),

                        name: 'Aktaş Design, Toplantı Salonu Tasarımı'
                      }
                    }"
                    exact
                  >
                    <a href="">Aktaş Design, Toplantı Salonu Tasarımı</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni ofis 9.jpg" alt="" />
              </div>
              <div class="con">
                 <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'aktas-design-ofis-projesi' },
                      query: {
                        img: require('../HtmlFiles/img/ofis 9.jpg'),

                        name: ' Aktaş Design, Ofis Projesi'
                      }
                    }"
                    exact
                  >
                    <a href="">Aktaş Design, Ofis Projesi</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni çalışma masası.jpg" alt="" />
              </div>
              <div class="con">
                 <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: '23-nisan-calisma-odası' },
                      query: {
                        img: require('../HtmlFiles/img/çalışma masası.jpg'),
                        name: '23 Nisan Mahallesi, Çalışma Odası Tasarımı'
                      }
                    }"
                    exact
                  >
                    <a href="">23 Nisan Mahallesi, Çalışma Odası Tasarımı</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni ofis 2.jpg" alt="" />
              </div>
              <div class="con">
                 <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'aktas-design-ofis-projesi' },
                      query: {
                        img: require('../HtmlFiles/img/ofis 2.jpg'),
                        name: 'Aktaş Design, Ofis Projesi'
                      }
                    }"
                    exact
                  >
                    <a href="">Aktaş Design, Ofis Projesi</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni ofis 7.jpg" alt="" />
              </div>
              <div class="con">
                <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'aktas-design-kahve-kosesi' },
                      query: {
                        img: require('../HtmlFiles/img/ofis 7.jpg'),
                        name: 'Aktaş Design, Ofis Kahve Köşesi Tasarımı'
                      }
                    }"
                    exact
                  >
                    <a href="">Aktaş Design, Ofis Kahve Köşesi Tasarımı</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-20 text-center">
          <h6 class="small-title float-right">
            <a href="">Tüm Projelere Gözat</a>
          </h6>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row pt-5">
        <div class="col-md-12 mb-20 text-center"></div>
      </div>

      <div class="row">
        <div class="col-md-12 pt-3">
          <div class="owl-carousel owl-theme">
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni h.k. 3.jpg" alt="" />
              </div>
              <div class="con">
                 <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'besevler-bursa-oturma-odasi' },
                      query: {
                        img: require('../HtmlFiles/img/h.k. 3.jpg'),
                        img2: require('../HtmlFiles/img/h.k. 2.jpg'),
                        name: 'Beşevler, Bursa / Oturma Odası Tasarımı'
                      }
                    }"
                    exact
                  >
                    <a href=""> Beşevler, Bursa / Oturma Odası Tasarımı</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni h.k. 2.jpg" alt="" />
              </div>
              <div class="con">
                <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'besevler-bursa-oturma-odasi' },
                      query: {
                        img: require('../HtmlFiles/img/h.k. 2.jpg'),
                        img2: require('../HtmlFiles/img/h.k. 3.jpg'),
                        name: ' Beşevler, Bursa / Oturma Odası Tasarımı'
                      }
                    }"
                    exact
                  >
                    <a href=""> Beşevler, Bursa / Oturma Odası Tasarımı</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img
                  src="../HtmlFiles/img/yeni manisa oturma odası.jpg"
                  alt=""
                />
              </div>
              <div class="con">
                <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'manisa-oturma-odasi' },
                      query: {
                        img: require('../HtmlFiles/img/manisa oturma odası.jpg'),
                        name: 'Manisa / Oturma Odası Tasarımı'
                      }
                    }"
                    exact
                  >
                    <a href="">Manisa / Oturma Odası Tasarımı</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni h.k. 1.jpg" alt="" />
              </div>
              <div class="con">
                 <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'besevler-bursa-tv-unitesi' },
                      query: {
                        img: require('../HtmlFiles/img/h.k. 1.jpg'),
                        name: 'Beşevler, Bursa / TV Ünitesi Tasarımı'
                      }
                    }"
                    exact
                  >
                    <a href="">Beşevler, Bursa / TV Ünitesi Tasarımı</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni ö.s. 6.jpg" alt="" />
              </div>
              <div class="con">
                <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'kayapa-bursa-kız-cocuk-odasi' },
                      query: {
                        img: require('../HtmlFiles/img/ö.s. 6.jpg'),
                        img2: require('../HtmlFiles/img/ö.s. 4.jpg'),
                        name: 'Kayapa, Bursa / Kız Çocuk Odası Tasarımı'
                      }
                    }"
                    exact
                  >
                    <a href="">Kayapa, Bursa / Kız Çocuk Odası Tasarımı</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni ö.s. 2.jpg" alt="" />
              </div>
              <div class="con">
                 <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'Kayapa-bursak-kiz-cocuk-odasi' },
                      query: {
                        img: require('../HtmlFiles/img/ö.s. 2.jpg'),
                        img2: require('../HtmlFiles/img/ö.s. 3.jpg'),
                        img3: require('../HtmlFiles/img/ö.s. 5.jpg'),
                        name: 'Kayapa, Bursa / Kız Çocuk Odası Tasarımı'
                      }
                    }"
                    exact
                  >
                    <a href="">Kayapa, Bursa / Kız Çocuk Odası Tasarımı</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
            <div class="item mb-80">
              <div class="position-re o-hidden">
                <img src="../HtmlFiles/img/yeni h.k. 4.jpg" alt="" />
              </div>
              <div class="con">
                <h5 @click="showModal()">
                  <router-link
                    active-class="active"
                    :to="{
                      name: 'projects',
                      params: { id: 'besevler-bursa-teras-tasarimi' },
                      query: {
                        img: require('../HtmlFiles/img/h.k. 4.jpg'),
                        img2: require('../HtmlFiles/img/h.k. 5.jpg'),
                        name: 'Beşevler, Bursa / Teras Tasarımı'
                      }
                    }"
                    exact
                  >
                    <a href="">Beşevler, Bursa / Teras Tasarımı</a>
                  </router-link>
                </h5>
                <a href=""><i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row pb-3">
        <div class="col-md-12 mt-20 text-center">
          <h6 class="small-title float-right">
            <a href="">Tüm Projelere Gözat</a>
          </h6>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
    
    };
  },
  mounted() {
   

    this.$nextTick(() => {
      var $owl = $(".owl-carousel").owlCarousel({
        items: parseInt($(window).width() / 340),
        loop: true,
        // autoplay:true,
        autoplayHoverPause: true,
        margin: 8
      });

      $owl.trigger("refresh.owl.carousel");
    });
  },
  methods: {
    showModal() {
      this.$refs["my-modal"].show();
    },
    hideModal() {
      this.$refs["my-modal"].hide();
    },
    toggleModal() {
      // We pass the ID of the button that we want to return focus to
      // when the modal has hidden
      this.$refs["my-modal"].toggle("#toggle-btn");
    }
  }
};
</script>

<style scoped>.carousel-control-prev-icon,
.carousel-control-next-icon {
  height: 100px !important;
  width: 100px !important;
}
</style>
