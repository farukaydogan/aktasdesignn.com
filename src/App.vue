<template>
  <div class="app">
    <phone></phone>
  
    <nav2></nav2>

    <transition name="fade">
      <router-view></router-view>
    </transition>

    <Footer></Footer>


  </div>
</template>


<script>
import nav2 from "./components/Nav2.vue";
import phone from "./components/Phone.vue";
import Footer from "./components/Footer.vue";


export default {
  name: "app",

  components: {
    
   nav2,phone,Footer,
  },
};
</script>
<style >

.fade-enter{
opacity: 0;
}
.fade-enter-active{
    transition: opacity 1s;
}
.fade-leave-enter{

}
.leave-enter-active{
transition: opacity 1s;
opacity: 0;
}
</style>
