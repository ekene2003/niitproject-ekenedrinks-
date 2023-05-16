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
let prices = multielem(".price")
let quantity = 1;
b = 0;
let prizearray = [];
let total = singleelem(".total");
  cartBtn.forEach((btn) => {
    btn.onclick = () => {
      let currentPriceWrap = btn.closest(".drinks").querySelector(".price");
        let currentPrice =currentPriceWrap.innerText;
        let newP = parseInt(currentPrice);
        prizearray.push(newP);
        let sumTotal = prizearray.reduce((a,b)=>
        a+b
       ,0);
       console.log(prizearray);
       b++;
      cartamount.innerHTML = `
         <a class="user-link"><i class="fa fa-cart-shopping"></i></a>
         <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
           ${b}
           <span class="visually-hidden">unread messages</span>
         </span>
         `;
      cartWrap.innerHTML += `
                                  <div class="mini-cart" id="cart${b}">
                                     <div class="cart-wrap">
                                          <div class="col-md-4">
                                               <img src="./assets/images/Coca Cola.jpeg" alt="" class="cart-img">
                                          </div>
                                          <div class="col-md-4 mini-sec">
                                               <h3 class="drink-name">Oceaneyes 4</h3>
                                               <p class="drink-cat">Beer</p>
                                               <p class="drink-price"><i class="fa fa-naira-sign"></i>${currentPrice}</p>
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
      let minicart = multielem(".mini-cart");
      carts = {};
      minicart.forEach((cart) => {
        let cartId = cart.getAttribute("id");
        let price = parseFloat(cart.querySelector(".drink-price").textContent.slice(1));
        carts[cartId] = { quantity: 1,price };
        let increaseBtn = cart.querySelector(".increase");
        let decreaseBtn = cart.querySelector(".decrease");
        let amountPage = cart.querySelector(".amount");
        let removeBtn = cart.querySelector(".removeBtn");
        increaseBtn.addEventListener(
          "click",
          (() => {
            const cartObject = carts[cartId];
            return () => {
              cartObject.quantity++;
              amountPage.textContent = cartObject.quantity;
              updateTotalPrice();
            };
          })()
        );
        decreaseBtn.addEventListener(
          "click",
          (() => {
            const cartObject = carts[cartId];
            return () => {
              if (cartObject.quantity > 0) {
                cartObject.quantity--;
                amountPage.textContent = cartObject.quantity;
                updateTotalPrice();
              prizearray.pop();
              console.log(prizearray);
              }
              if (cartObject.quantity < 1) {
                cartamount.innerHTML = `
                    <a class="user-link"><i class="fa fa-cart-shopping"></i></a>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                      ${(b -= 1)}
                      <span class="visually-hidden">unread messages</span>
                    </span>
                    `;
                updateTotalPrice();
                cart.style.display = "none";
              }
            };
          })()
        );

        removeBtn.addEventListener("click", (() => {
          const cartObject = carts[cartId];
          return () => {
            if (cartObject.quantity > 0) {
              prizearray.pop();
              cartObject.quantity = 0;
              amountPage.textContent = cartObject.quantity;
              updateTotalPrice();
              cart.style.display = "none";
              cartamount.innerHTML = `
              <a class="user-link"><i class="fa fa-cart-shopping"></i></a>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                ${(b -= 1)}
                <span class="visually-hidden">unread messages</span>
              </span>
              `;
              console.log(prizearray);
            }
          };
        })());
        function updateTotalPrice() {
          let totalPrice = 0;
          Object.values(carts).forEach((cart) => {
            totalPrice += cart.quantity * cart.price;
          });
          total.innerHTML = `<p class="price">Total :<i class="fa fa-naira-sign"></i> ${+ totalPrice.toFixed(2)}</p>`;
        }
      });
    };
    total.innerHTML = `<p class="price">Total :<i class="fa fa-naira-sign"></i>${sumTotal}</p>`;       

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
