const form = document.querySelector(".form");
form.addEventListener("submit", function (e) {
  e.preventDefault();
  // Get Value from Input
  const id = document.getElementById("id").value;
  const foodMenu = document.querySelectorAll("#food_menu option:checked");
  const valuesFood = Array.from(foodMenu).map((el) => el.value);
  const status = Array.from(document.getElementsByName("status")).find(
    (r) => r.checked
  ).value;
  const name = document.getElementById("name").value;
  const totalOrder = document.getElementById("total_order").value;

  checkInput(id);
  checkInput(status);
  checkInput(name);
  checkInput(totalOrder);
  checkInputArray(valuesFood);

  if (
    checkInput(id) == true &&
    checkInput(name) == true &&
    checkInput(status) == true &&
    checkInput(totalOrder) == true &&
    checkInputArray(valuesFood) == true
  ) {
    form.reset();
    // Get Element
    const resId = document.getElementById("res_id");
    const resName = document.getElementById("res_name");
    const resStatus = document.getElementById("res_status");
    const resMenu = document.getElementById("res_menu");
    const resOrder = document.getElementById("res_order");
    const resDiscount = document.getElementById("diskon");
    const resHarga = document.getElementById("res_harga");

    let totalPrice = 0;

    Array.from(foodMenu).map(
      (el) => (totalPrice += parseFloat(el.dataset.price))
    );

    let discount = 0;
    let totalDisc = 0;

    if (status == "Member") {
      if (totalOrder == 1) {
        discount = 5;
        totalDisc = (totalPrice * discount) / 100;
        totalPrice -= totalDisc;
      } else if (totalOrder >= 2 && totalOrder <= 3) {
        discount = 7;
        totalDisc = (totalPrice * discount) / 100;
        totalPrice -= totalDisc;
      } else {
        discount = 10;
        totalDisc = (totalPrice * discount) / 100;
        totalPrice -= totalDisc;
      }
    } else if (status == "Non-member") {
      if (totalOrder >= 1 && totalOrder <= 3) {
        discount = 0;
      } else if (totalOrder > 3 && totalOrder <= 5) {
        discount = 5;
        totalDisc = (totalPrice * discount) / 100;
        totalPrice -= totalDisc;
      } else {
        Array.from(foodMenu).map((el) => {
          totalDisc += (parseFloat(el.dataset.price) * 5) / 100;
          discount += 5;
        });
        totalPrice += totalDisc;
      }
    }

    resId.innerText = id;
    resName.innerText = name;
    resStatus.innerText = status;
    resMenu.innerText = valuesFood;
    resOrder.innerText = totalOrder;
    resDiscount.innerText = discount;
    resHarga.innerText = totalPrice;
  }
});

function checkInput(values) {
  if (values == "" || values == null) {
    return false;
  }
  return true;
}

function checkInputArray(values) {
  if (values.length == 0) {
    alert("Jenis makanan tidak boleh kosong!");
    return false;
  }
  return true;
}
