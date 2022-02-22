<template>
  <div class="Phone">
    <section id="Phone">
      <div class="container-fluid">
        <div class="row text-center" >
          <div
            class="col-lg-6 wow animate__animated animate__fadeInLeft"
            data-wow-duration="2s"
          >
            <button class="btn btn-outline dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            
                  <a href="#"  onclick="doGTranslate('tr|tr');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Türkçe" class="nturl selected"><span class="flag-icon flag-icon-tr"></span>Türkçe</a>
            </button>
            <ul id="language" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li>   <a href="#" onclick="doGTranslate('tr|en');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="English" class="dropdown-item nturl"><span class="flag-icon flag-icon-us "></span>İngilizce</a>
              <li> <a href="#"  onclick="doGTranslate('tr|fr');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="France" class="dropdown-item nturl selected"><span class="flag-icon flag-icon-fr"></span>Fransızca</a></li>  
              <li> <a href="#"  onclick="doGTranslate('tr|de');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Deutsch" class="dropdown-item nturl">  <span class="flag-icon flag-icon-de"></span> Almanca</a></li>
              <li> <a href="#"  onclick="doGTranslate('tr|ar');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Arabic" class="dropdown-item nturl selected"><span class="flag-icon flag-icon-sa "></span>Arapça</a></li>  
            </ul>
              
  
            <a
              class="m-3"
              href="https://api.whatsapp.com/send?phone=905061631325 "
              ><i class="fab fa-whatsapp"></i
            ></a>
            <a href="https://api.whatsapp.com/send?phone=905061631325"
              >+90 506 163 13 25</a
            >
          </div>
          
          <div
            class="col-lg-6 wow animate__animated animate__fadeInRight"
            data-wow-duration="2s"
            id="mail"
          >
            <a class="m-3" href="mailto:aaktasdesign@gmail.com ">
              <i class="fa fa-envelope"></i>
            </a>
            <a href="mailto:aaktasdesign@gmail.com ">
              aaktasdesign@gmail.com
            </a>
          </div>
      
          
        </div>
      </div>
    </section>
    
  </div>
  
</template>


<style>
</style>

