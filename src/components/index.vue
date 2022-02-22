<template>
       <section id="indexSlider">
        <div class="container-fluid" style="background-color:#886e49">
            <div class="row col-sm-12  mx-auto">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img  v-bind:src="url" class="d-block w-100" alt="Aktasdesignn">
                        </div>
                        <div class="carousel-item">
                            <img  v-bind:src="url2" class="d-block w-100" alt="Aktasdesignn">
                        </div>
                        <div class="carousel-item">
                            <img  v-bind:src="url3" class="d-block w-100" alt="Aktasdesignn">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {

   
    data() {
        return{
            url:require('../HtmlFiles/img/slider-1.jpg'),
            url2:require('../HtmlFiles/img/slider-2.jpg'),
            url3:require('../HtmlFiles/img/slider-3.jpg')
        }
    },
    
        mounted() {
      this.$nextTick(() => {  
        if (parseInt($(window).width())<700  && parseInt($(window).height())>300) {
                this.url=require('../HtmlFiles/img/slider-1-mobile.jpg');
                this.url2=require('../HtmlFiles/img/slider-2-mobile.jpg');
                this.url3=require('../HtmlFiles/img/slider-3-mobile.jpg');

        }
        }
      )},


}
</script>
