function singleelem(elem) {
     return document.querySelector(elem);
};
function multielem(elem) {
     return document.querySelectorAll(elem);
};
let homeWrap = singleelem(".home");
let indexheader = singleelem(".index-header");
let formToggler = singleelem(".login-small");
console.log(formToggler);
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