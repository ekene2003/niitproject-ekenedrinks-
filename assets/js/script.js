function singleelem(elem) {
  return document.querySelector(elem);
}
function multielem(elem) {
  return document.querySelectorAll(elem);
}
let homeWrap = singleelem(".home");
let indexheader = singleelem(".index-header");
let formToggler = singleelem(".login-small");
let cartamount = singleelem(".badge-no");
let drinksBtn = multielem(".drink-btn");
let drinks = multielem(".drinks");
let cartBtn = multielem(".cart");

let cartWrap = singleelem(".mini-cart-wrap");
c=0;
b = 0;
cartBtn.forEach((btn) => {
  btn.onclick = () => {
    b++;
    cartamount.innerHTML = `
       <a class="user-link"><i class="fa fa-cart-shopping"></i></a>
       <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
         ${b}
         <span class="visually-hidden">unread messages</span>
       </span>
       `;
    cartWrap.innerHTML +=`
                                <div class="mini-cart">
                                   <div class="cart-wrap">
                                        <div class="col-md-4">
                                             <img src="./assets/images/Coca Cola.jpeg" alt="" class="cart-img">
                                        </div>
                                        <div class="col-md-4 mini-sec">
                                             <h3 class="minicart-head">Oceaneyes 4</h3>
                                             <p class="minicart-p">Beer</p>
                                             <p class="mincart-p">$40</p>
                                             <div class="minicart-btn">
                                                  <div class="increase"><i class="fa fa-plus"></i></div>
                                                  <div class="vr"></div>
                                                  <div class="amount"> 1</div>
                                                  <div class="vr"></div>
                                                  <div class="decrease"><i class="fa fa-minus"></i></div>
                                             </div>
                                        </div>
                                        <div class="col-md-4 remove-sec">
                                             <div class="removeBtn"><p>Remove</p></div>
                                        </div>
                                   </div>
                              </div>            
    `;
    let increaseBtn = multielem(".increase");
let decreaseBtn = multielem(".decrease");
let amountPage = multielem(".amount");
let minicart = multielem(".mini-cart");
    increaseBtn.forEach((btn) => {
      btn.onclick = () => {
       c += 1;
       let current = btn.closest(".mini-sec").querySelector(".amount");
       current.innerText = `${c}`;
       console.log(current.innerText);
      };
    });
    decreaseBtn.forEach((btn) => {
      btn.onclick = () => {
       c -= 1;
       let current = btn.closest(".mini-sec").querySelector(".amount");
       let currentCart = btn.closest(".mini-cart");
       if (current.innerText <= 1) {
        current.innerText = 0;
        c = 0;
        setTimeout(() => {
       currentCart.style.display="none";
        }, 1000);
        cartamount.innerHTML = `
        <a class="user-link"><i class="fa fa-cart-shopping"></i></a>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
          ${b-=1}
          <span class="visually-hidden">unread messages</span>
        </span>
        `;
       };
       current.innerText = `${c}`;
       console.log(current.innerText);
      };
    });
  };
});
drinksBtn.forEach((btn) => {
  btn.onclick = () => {
    let category = btn.dataset.category;
    console.log(category);
    drinks.forEach((drink) => {
      let drinkType = drink.dataset.type;
      if (category == "all") {
        drink.style.display = "block";
      } else {
        if (category == drinkType) {
          drink.style.display = "block";
        } else {
          drink.style.display = "none";
        }
      }
    });
  };
});
let bg = ["#ff6700", "#ff3016", "#6610f2"];
i = 0;
setInterval(() => {
  i += 1;
  indexheader.style.background = bg[i];
  let newWrap = (homeWrap.style.right = ` ${i}00%`);
  if (homeWrap.style.right == "200%") {
    i = -1;
  }
}, 6000);
