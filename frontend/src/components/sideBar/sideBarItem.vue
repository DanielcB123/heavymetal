<template>
  <div class="item">
    <i id="docIcon" class="">
      <div id="icon" class="">
        <slot name="icon"></slot>
      </div>
    </i>
    <div class="details pb-10 md:pb-0">
      <h3 class="heading text-4xl">
        <slot name="heading" id="heading"></slot>
      </h3>
      <slot></slot>
    </div>

  </div>
</template>

<style scoped>

.item {
  /* margin-top: 2rem; */
  display: flex;
  
}

#heading{
  color: aqua;
}
.details {
  flex: 1;
  margin-left: 1rem;
  
}

i {
  display: flex;
  place-items: center;
  place-content: center;
  width: 32px;
  height: 32px;

  color: var(--color-text);
  
}

h3 {
  font-size: 1.2rem;
  font-weight: 500;
  margin-bottom: 0.4rem;
  color: var(--color-heading);
  
}
#docIcon{
  z-index: 1;
  border-radius: 8px;
  /* background-color: rgba(180, 252, 255, 0.932); */
  background-color: rgb(172, 231, 255);
  
  
    
}
#docIcon:hover{
      -webkit-transform: rotate(360deg) scale(2); /* Chrome 4+, Op 15+, Saf 3.1, iOS Saf 3.2+ */
       -moz-transform: rotate(360deg) scale(2); /* Fx 3.5-15 */
        -ms-transform: rotate(360deg) scale(2); /* IE 9 */
         -o-transform: rotate(360deg) scale(2); /* Op 10.5-12 */
            transform: rotate(360deg) scale(2); /* Fx 16+, IE 10+ */

    transition: transform 1s;
    transition: all 1s ease;
    background-color: rgb(118, 216, 255);
}
#icon{
  padding-top: 10%;
  transition: all 0.5s ease;
  

}
#icon:hover{
  /* padding-top: 10%; */
        -webkit-transform: rotate(-360deg) scale(2); /* Chrome 4+, Op 15+, Saf 3.1, iOS Saf 3.2+ */
       -moz-transform: rotate(-360deg) scale(2); /* Fx 3.5-15 */
        -ms-transform: rotate(-360deg) scale(2); /* IE 9 */
         -o-transform: rotate(-360deg) scale(2); /* Op 10.5-12 */
            transform: rotate(-360deg) scale(2); /* Fx 16+, IE 10+ */

    transition: transform 1s;
}
@media (min-width: 1024px) {
  .item {
    margin-top: 0;
    padding: 0.4rem 0 1rem calc(var(--section-gap) / 2);
    
    
  }

  i {
    top: calc(50% - 25px);
    left: -26px;
    position: absolute;
    border: 1px solid var(--color-border);
    background: var(--color-background);
    border-radius: 8px;
    width: 50px;
    height: 50px;
    
  }
  .item:before {
    content: '';
    border-left: 1px solid var(--color-border);
    border-color: rgba(255, 255, 255, 0.25);
    position: absolute;
    left: 0;
    bottom: calc(50% + 5px);
    height: calc(50% - 5px);
    
  }

  .item:after {
    content: ' ';
    border-left: 1px solid var(--color-border);
    border-color: rgba(255, 255, 255, 0.25);
    position: absolute;
    left: 0;
    top: calc(50% + 5px);
    height: calc(50% - 5px);
    
  }

  .item:first-of-type:before {
    display: none;
    
  }

  .item:last-of-type:after {
    display: none;
    
  }


}


@media (max-width: 1024px) {
  #docIcon{
    z-index: 1;
    border-radius: 8px;
    background-color: rgb(245, 20, 4);
    /* background-color: rgb(172, 231, 255); */
    width: 40px;
    height: 40px;
    position: relative;
      
  }
  #docIcon:hover{
        -webkit-transform: rotate(360deg) scale(2); /* Chrome 4+, Op 15+, Saf 3.1, iOS Saf 3.2+ */
        -moz-transform: rotate(360deg) scale(2); /* Fx 3.5-15 */
          -ms-transform: rotate(360deg) scale(2); /* IE 9 */
          -o-transform: rotate(360deg) scale(2); /* Op 10.5-12 */
              transform: rotate(360deg) scale(2); /* Fx 16+, IE 10+ */

      transition: transform 1s;
      transition: all 1s ease;
      background-color: rgb(118, 216, 255);
  }

}
@media (max-width: 650px) {
  #docIcon{
    z-index: 1;
    border-radius: 8px;
    /* background-color: rgb(245, 20, 4); */
    background-color: rgb(172, 231, 255);
    width: 40px;
    height: 40px;
    position: absolute;
      
  }
  #docIcon:hover{
        -webkit-transform: rotate(360deg) scale(2); /* Chrome 4+, Op 15+, Saf 3.1, iOS Saf 3.2+ */
        -moz-transform: rotate(360deg) scale(2); /* Fx 3.5-15 */
          -ms-transform: rotate(360deg) scale(2); /* IE 9 */
          -o-transform: rotate(360deg) scale(2); /* Op 10.5-12 */
              transform: rotate(360deg) scale(2); /* Fx 16+, IE 10+ */

      transition: transform 1s;
      transition: all 1s ease;
      background-color: rgb(118, 216, 255);
  }

}
/* .heading{
  color: rgba(0, 217, 255, 0.6);
  transition: all 0.5s ease;
}
.heading:hover{
  color: rgba(0, 217, 255, 0.911);
} */
</style>
