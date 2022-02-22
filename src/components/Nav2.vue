<template>
  <section id="nav-2">
    <div class="container-fluid">
      <nav
        class="d-flex d-lg navbar navbar-expand-lg navbar-light fixed-top2"
        id="navbarfix"
      >
        <div class="container-fluid">
          <div class="d-flex">
            <a
              href="index.html"
              class="d-flex"
            >
              <img
                id="logos"
                src="../HtmlFiles/img/logo-cropped.svg"
                class="d-none d-md-flex"
                width="50px"
                alt="Aktasdesignn"
              />
              <h2 class="p-1 wow animated animate__pulse text-center">
                Proje Mobilya Tasarım
              </h2>
            </a>
          </div>

          <button
            class="navbar-toggler"
            id="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div
            class="collapse navbar-collapse justify-content-end"
            data-toggle="collapse"
            id="navbarSupportedContent"
          >
            <ul class="navbar-nav text-center">
              <li class="nav-item dropdown">

                <router-link
                  active-class="active"
                  to="/"
                  exact
                >
                  <a class="nav-link router-lin">
                    Anasayfa<span class="sr-only">(current)</span> </a>
                </router-link>

              </li>
              <li class="nav-item">
                <router-link
                  active-class="active"
                  to="/hakkimizda"
                  exact
                >
                  <a
                    class="nav-link  router-lin"
                    href="about.html"
                  >Hakkımızda<span class="sr-only">(current)</span></a>
                </router-link>
              </li>

              <li class="nav-item  dropdown   ">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  onclick="DisplayBlock()"
                  id="navbarDropdownMenuLink"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Hizmetlerimiz
                </a>
                <ul
                  class="dropdown-menu wow animated fadeIn"
                  id="Ulmiz"
                  aria-labelledby="navbarDropdownMenuLink"
                >
                  <div
                    id="AnahtarTesDropdownClose"
                    class="overflow-auto"
                    style="max-height: 500px"
                  >
                    <li>
                      <router-link
                        active-class="active"
                        to="/hizmetlerimiz"
                      ><a
                          v-on:click="method1()"
                          class="dropdown-item"
                          href="Hizmetlerimiz.html"
                        >Anahtar Teslim</a></router-link>
                    </li>
                    <li>
                      <router-link
                        active-class="active"
                        to="/hizmetlerimiz"
                      ><a
                          v-on:click="method1()"
                          class="dropdown-item"
                          href="Hizmetlerimiz.html"
                        >Projelendirme</a></router-link>
                    </li>
                    <li>
                      <router-link
                        active-class="active"
                        to="/hizmetlerimiz"
                      ><a
                          v-on:click="method1()"
                          class="dropdown-item"
                          href="Hizmetlerimiz.html"
                        >Tadilat</a></router-link>
                    </li>
                    <li>
                      <router-link
                        active-class="active"
                        to="/hizmetlerimiz"
                      ><a
                          v-on:click="method1()"
                          class="dropdown-item"
                          href="Hizmetlerimiz.html"
                        >Online Danışmanlık</a></router-link>
                    </li>
                  </div>
                </ul>
              </li>
              <li class="nav-item">
                <router-link
                  active-class="active"
                  :to="{path:'/projects'}"
                  exact
                >
                  <a
                    class="nav-link  router-lin"
                    href="projects.html"
                  >Projeler<span class="sr-only">(current)</span></a>
                </router-link>
              </li>

              <li class="nav-item dropdown">
                <router-link
                  active-class="active"
                  to="/iletisim"
                  exact
                >
                  <a
                    class="nav-link  router-lin"
                    href="contact.html"
                  > İletişim </a>
                </router-link>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
</template>
<

<script>
    export default {
        methods:{
        method1(){
         $('.nav-link').on('click',function() {
            $('.navbar-collapse').collapse('hide');
          });
        },
         NavLinkClose(){
               var item = document.getElementById("Ulmiz").style.display;
            if (item == "block") {
             document.getElementById("Ulmiz").style.display = "none";
              }
           },
      },

          mounted() {
        this.$nextTick(() => {  


           $("#nav-2").on("hide.bs.collapse", function(){
                        $('.navbar-collapse').slideUp();
            });
            $("#nav-2").on("show.bs.collapse", function(){
              $('.navbar-collapse').slideDown();
            });
            
           $('.router-lin').on('click',function() {
            $('.navbar-collapse').collapse('hide');;
          });
       

             

          

          $('.router-lin').on('click', function(){
             $('.dropdown-menu').slideUp();
             }); 

              $('#AnahtarTesDropdownClose>li').on('click', function(){
             $('.dropdown-menu').slideUp();
             $('.navbar-collapse').collapse('hide');
             });

                
               }
             )
         }
      }
</script>

