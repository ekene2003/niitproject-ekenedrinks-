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
let increaseBtn = multielem(".increase");
let decrease = multielem(".decrease");
let amountPage = multielem(".amount");
let cartBtn = multielem(".cart");
let minicart = multielem(".mini-cart");
amountPage.forEach(amount => {
  amount.value = `5`;
  console.log(amount);
});
c=0;
increaseBtn.forEach((btn) => {
  btn.onclick = () => {
  // let newValue = amount.value;
  // console.log(newValue);
  //  c += 1;
  //  let current = btn.closest(".mini-sec").querySelector(".amount");
  //  if (current == c ) {
  //       current.innerText = `${c}`;
  //       console.log(current.innerText);
  //  }
  };
});
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
    if (b <= 0) {
      cartamount.innerHTML = `
          <a class="user-link"><i class="fa fa-cart-shopping"></i></a>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            ${b = 0}
            <span class="visually-hidden">unread messages</span>
          </span>
          `;
    }
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
