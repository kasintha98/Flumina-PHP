"use strict";

const mainBackground = document.getElementById("mainBackground");
const footer = document.querySelector(".footer");
const canvas = document.getElementById("particleCanvas");
const banner = document.querySelector(".banner");
const customerReferences = document.getElementById("customerReferences");
const awardReferences = document.getElementById("awardReferences");
const backgroundHolder = document.querySelector(".mainBackgroundHolder");

const prodBtn = document.querySelector(".prod-btn");
const solBtn = document.querySelector(".sol-btn");
const comBtn = document.querySelector(".com-btn");
const carBtn = document.querySelector(".car-btn");
const parBtn = document.querySelector(".par-btn");

const clsBtnPro = document.querySelector(".clsBtnPro");
const clsBtnSol = document.querySelector(".clsBtnSol");
const clsBtnCom = document.querySelector(".clsBtnCom");
const clsBtnCar = document.querySelector(".clsBtnCar");
const clsBtnPar = document.querySelector(".clsBtnPar");

let isOpen;

const init = function () {
  isOpen = false;

  mainBackground.classList.remove("hide");
  footer.classList.remove("hide");
  particleCanvas.classList.remove("hide");
  banner.classList.remove("hide");
  customerReferences.classList.remove("hide");
  awardReferences.classList.remove("hide");
  backgroundHolder.classList.remove("hide");
};
init();

prodBtn.addEventListener("click", function () {
  isOpen = true;

  if (isOpen == true) {
    mainBackground.classList.add("hide");
    footer.classList.add("hide");
    particleCanvas.classList.add("hide");
    banner.classList.add("hide");
    customerReferences.classList.add("hide");
    awardReferences.classList.add("hide");
    backgroundHolder.classList.add("hide");
  }
});

solBtn.addEventListener("click", function () {
  isOpen = true;

  if (isOpen == true) {
    mainBackground.classList.add("hide");
    footer.classList.add("hide");
    particleCanvas.classList.add("hide");
    banner.classList.add("hide");
    customerReferences.classList.add("hide");
    awardReferences.classList.add("hide");
    backgroundHolder.classList.add("hide");
  }
});

comBtn.addEventListener("click", function () {
  isOpen = true;

  if (isOpen == true) {
    mainBackground.classList.add("hide");
    footer.classList.add("hide");
    particleCanvas.classList.add("hide");
    banner.classList.add("hide");
    customerReferences.classList.add("hide");
    awardReferences.classList.add("hide");
    backgroundHolder.classList.add("hide");
  }
});

carBtn.addEventListener("click", function () {
  isOpen = true;

  if (isOpen == true) {
    mainBackground.classList.add("hide");
    footer.classList.add("hide");
    particleCanvas.classList.add("hide");
    banner.classList.add("hide");
    customerReferences.classList.add("hide");
    awardReferences.classList.add("hide");
    backgroundHolder.classList.add("hide");
  }
});

parBtn.addEventListener("click", function () {
  isOpen = true;

  if (isOpen == true) {
    mainBackground.classList.add("hide");
    footer.classList.add("hide");
    particleCanvas.classList.add("hide");
    banner.classList.add("hide");
    customerReferences.classList.add("hide");
    awardReferences.classList.add("hide");
    backgroundHolder.classList.add("hide");
  }
});

clsBtnPro.addEventListener("click", function () {
  init();
});

clsBtnSol.addEventListener("click", function () {
  init();
});

clsBtnCom.addEventListener("click", function () {
  init();
});

clsBtnCar.addEventListener("click", function () {
  init();
});

clsBtnPar.addEventListener("click", function () {
  init();
});

//lang codes - es,pl,pt,zh-CN,zh-TW,ar,so,ru,hy,ko,vi

function googleTranslateElementInit() {
  new google.translate.TranslateElement(
    {
      pageLanguage: "en",
      includedLanguages: "en,de",
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
    },
    "google_translate_element"
  );
}

$("document").ready(function () {
  $("#google_translate_element").on("click", function () {
    // Change font family and color
    $("iframe")
      .contents()
      .find(
        ".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div"
      ) //, .goog-te-menu2 *
      .css({
        color: "#544F4B",
        "background-color": "#e3e3ff",
        "font-family": '"Open Sans",Helvetica,Arial,sans-serif',
      });

    // Change hover effects  #e3e3ff = white
    $("iframe")
      .contents()
      .find(".goog-te-menu2-item div")
      .hover(
        function () {
          $(this)
            .css("background-color", "#17548d")
            .find("span.text")
            .css("color", "#e3e3ff");
        },
        function () {
          $(this)
            .css("background-color", "#e3e3ff")
            .find("span.text")
            .css("color", "#544F4B");
        }
      );

    // Change Google's default blue border
    $("iframe")
      .contents()
      .find(".goog-te-menu2")
      .css("border", "1px solid #17548d");

    $("iframe")
      .contents()
      .find(".goog-te-menu2")
      .css("background-color", "#e3e3ff");

    // Change the iframe's box shadow
    $(".goog-te-menu-frame").css({
      "-moz-box-shadow": "0 3px 8px 2px #666666",
      "-webkit-box-shadow": "0 3px 8px 2px #666",
      "box-shadow": "0 3px 8px 2px #666",
    });
  });
});
