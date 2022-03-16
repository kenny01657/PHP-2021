"use strict";

const breadOverview = document.querySelector(".bread-overview");
const form = document.querySelector(".form");
const addBread = document.querySelector(".add-bread");
const overlay = document.querySelector(".overlay");
const closeBtn = document.querySelector(".close-btn");
const formHeader = document.querySelector(".form-header");
const submitBtn = document.querySelector(".submit-btn");
const currentBread = document.querySelector("#header-text");

const selectFlour = document.querySelector("#flour");
const selectShape = document.querySelector("#shape");
const idWeight = document.querySelector("#weight");

let breadContainer = breadOverview.children;

function showForm() {
  form.classList.remove("hidden");
  overlay.classList.remove("hidden");
}

function hideForm() {
  form.classList.add("hidden");
  overlay.classList.add("hidden");
  submitBtn.setAttribute("name", "submit-btn");

  reset();
}

function reset() {
  const flour = ["volkoren", "spelt", "rogge", "tarwe"];
  const shape = ["bolvormig", "vierkant", "rond", "rechthoek"];
  for (let i = 0; i < selectFlour.length; i++) {
    selectFlour.children[i].value = flour[i];
    selectFlour.children[i].textContent = flour[i];
  }

  for (let i = 0; i < shape.length; i++) {
    selectShape.children[i].value = shape[i];
    selectShape.children[i].textContent = shape[i];
  }
}

function selectOption(num, select) {
  let array = [];
  let temp;

  for (let i = 0; i < select.children.length; i++) {
    array[i] = select.children[i].value;
  }

  for (let i = 0; i < num; i++) {
    temp = array[select.children.length - 1];

    for (let j = select.children.length - 1; j >= 0; j--) {
      array[j] = array[j - 1];
    }

    array[0] = temp;
  }

  for (let i = 0; i < array.length; i++) {
    select.children[i].value = array[i];
    select.children[i].textContent = array[i];
  }
}

for (let i = 0; i < breadContainer.length; i++) {
  breadContainer[i].addEventListener("click", function () {
    let flour = breadContainer[i].querySelector(".flour").textContent;
    let shape = breadContainer[i].querySelector(".shape").textContent;
    let weight = breadContainer[i].querySelector(".weight").textContent;

    let flourNum;
    let shapeNum;

    let temp = [weight[0], weight[1], weight[2], weight[3]];
    let temp2 = "";
    for (let i = 0; i < temp.length; i++) {
      temp2 += weight[i];
    }

    if (flour == "tarwe") {
      flourNum = 1;
    } else if (flour == "rogge") {
      flourNum = 2;
    } else if (flour == "spelt") {
      flourNum = 3;
    }

    if (shape == "rechthoek") {
      shapeNum = 1;
    } else if (shape == "rond") {
      shapeNum = 2;
    } else if (shape == "vierkant") {
      shapeNum = 3;
    }

    selectOption(flourNum, selectFlour);
    selectOption(shapeNum, selectShape);
    idWeight.value = Number(temp2);

    formHeader.textContent = `Edit item ${i + 1}`;
    currentBread.value = i;
    submitBtn.setAttribute("name", "edit");
    showForm();
  });
}

addBread.addEventListener("click", function () {
  if (form.classList.contains("hidden")) {
    formHeader.textContent = "Add bread to overview";
    showForm();
  }
});

closeBtn.addEventListener("click", hideForm);
overlay.addEventListener("click", hideForm);

document.addEventListener("keydown", function (e) {
  if (e.key === "Escape" && !form.classList.contains("hidden")) {
    hideForm();
  }
});
