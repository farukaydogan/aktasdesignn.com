<template>
  <section id="project">
    <div class="container-fluid mx-auto  text-center">
      <h2 class="pt-2 pb-3">{{$route.query.name}}</h2>
      <div class="row  mx-auto justify-content-center">

        <div
          class="col-md-6 mx-auto"
          v-for="item in $route.query"
          :key="item.img"
          v-show="item!=$route.query.name"
        >
              <div  class="card mb-3">
                    <img :src="item" class="card-img-top" id="imgmiz" >
              </div>  
        </div>
      </div>

      <div
        v-show="false"
        class="row justify-content-center mx-auto"
      >

        <div
          class="col-sm-6 "
          id="mns"
        >
          <img src="img/h.k. 3.jpg">
        </div>
        <div
          class="col-sm-6 mx-auto"
          id="mns"
        >
          <img src="img/h.k. 3.jpg">
        </div>

        <div class="row justify-content-center mx-auto pt-3">

          <div class="col-sm-6">
            <img src="img/fransa mutfak 9.jpg">
          </div>
          <div class="col-sm-6">
            <img src="img/fransa mutfak 9.jpg">
          </div>

        </div>
      </div>
    </div>
  </section>
</template>

