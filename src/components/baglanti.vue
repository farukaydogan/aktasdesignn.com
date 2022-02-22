<template>
     <section class="projects" data-scroll-index="3">
        <div class="container">
              <b-modal ref="my-modal" id="modal-xl" size="xl"   >
                   <b-carousel id="carousel-1" v-model="slide"   :interval="4000" controls indicators background="white" img-width="1024" img-height="480" style="text-shadow: 1px 1px 2px #333;" @sliding-start="onSlideStart" @sliding-end="onSlideEnd"  >
                      <b-carousel-slide>
                        <template #img   >
                          <img   class="d-block img-fluid w-100" width="1024" height="480"     alt="image slot">
                        </template>
                      
                     {{this.alluser.length-this.link-1}}
                      </b-carousel-slide>
                  </b-carousel>
             </b-modal>
              

           <div class="row">
             <div class="col-md-12 pt-3"  v-if="alluser.length >0">
                 <carousel :items="this.windows"  :margin="8" :stagePadding="1" :nav="true" >
                    <div class="item mx-auto" v-for="users in alluser" v-bind:key="users.id"  >
                          <div class="position-re o-hidden">
                            <img :src="users.photo" alt="" />
                          </div>
                          <div class="con">
                            <h5>
                          <!--    <router-link active-class="active" :to="{name:'project',params:{id:'fransa-ada-mutfak-projesi'},query:{img:'../src/HtmlFiles/img/fransa mutfak 5.jpg',img2:'../src/HtmlFiles/img/fransa mutfak 6.jpg',name:'Fransa Ada Mutfak',}}" exact  > <a href="">  Castres 81100, Fransa / Ada Mutfak Projesi </a></router-link>
                            --> 
                            <button @click="showModal(users.id-1)"  type="button" class="btn btn-outline-light">{{users.photo_name}}</button>
                          </h5>
                            <a href=""><i class="ti-arrow-right"></i></a>
                          </div>
                        </div>

                </carousel>
           </div> 
          </div>
        </div>
     </section>
</template>

<script>
import axios from 'Axios'
import carousel from 'vue-owl-carousel'
  
export default {
   components: { carousel ,   
       },
  data(){
    return{
     
      alluser:'',
      windows:0,
      link:0,
          slide: 0,
        sliding: null,
         sayac:0,
     
    }
  },
   methods: {
     arttir(){
       this.sayac++;
     },
        onSlideStart(slide) {
        this.sliding = true
      },
      onSlideEnd(slide) {
        this.sliding = false
      },
      showModal(link) {
        this.link = link;
        this.$refs['my-modal'].show();
      },
      hideModal() {
        this.$refs['my-modal'].hide()
      },
      toggleModal() {
        // We pass the ID of the button that we want to return focus to
        // when the modal has hidden
        this.$refs['my-modal'].toggle('#toggle-btn')
      }
    },
      created() {
    axios.get('http://localhost/baglan.php')
      .then((res) => {
        this.alluser=res.data
        console.log(res.data)
      })
      this.windows= parseInt($(window).width()/340)
    },
      
};

</script>

