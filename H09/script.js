"use strict";

const breadOverview = document.querySelector(".bread-overview");
const form = document.querySelector(".form");
const addBread = document.querySelector(".add-bread");
const overlay = document.querySelector(".overlay");
const closeBtn = document.querySelector(".close-btn");
const formHeader = document.querySelector(".form-header");

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
}

for (let i = 0; i < breadContainer.length; i++) {
  breadContainer[i].addEventListener("click", function () {
    let flour = breadContainer[i].querySelector(".flour").textContent;
    let shape = breadContainer[i].querySelector(".shape").textContent;
    let weight = breadContainer[i].querySelector(".weight").textContent;
    selectFlour.children[0].textContent = flour;
    selectShape.children[0].textContent = shape;
    idWeight.placeholder = weight;

    formHeader.textContent = "Edit item";
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
