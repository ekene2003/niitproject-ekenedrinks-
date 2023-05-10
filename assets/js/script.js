function singleelem(elem) {
     return document.querySelector(elem);
};
function multielem(elem) {
     return document.querySelectorAll(elem);
};
let homeWrap = singleelem(".home");
let indexheader = singleelem(".index-header");
let formToggler = singleelem(".login-small");
let drinksBtn = multielem(".drink-btn");
let drinks = multielem(".drinks");
drinksBtn.forEach(btn => {
     btn.onclick=()=>{
     let category = btn.dataset.category;
        console.log(category);
        drinks.forEach(drink => {
          let drinkType = drink.dataset.type;
          if (category =="all") {
               drink.style.display = "block";
          }
          else{
               if(category == drinkType){
                    drink.style.display = "block";
               }
               else{
                    drink.style.display = "none"
               }
          }
     });
     }
   
});
let bg = ["#ff6700", "#ff3016", "#6610f2"];
i = 0
setInterval(() => {
     i += 1;
     indexheader.style.background = bg[i];
     let newWrap = homeWrap.style.right = ` ${i}00%`;
      if (homeWrap.style.right == "200%") {
           i = -1;
      }
}, 6000);
