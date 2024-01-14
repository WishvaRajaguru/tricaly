const tooltipTriggerList = document.querySelectorAll(
  '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);

// *****************************navbar*********************************

const header = document.querySelector("#navbar");
const headerSecondary = document.querySelector("#navbarSecondary");
const navbarHeight = header.getBoundingClientRect().height;
const navbarSecondaetHeight = headerSecondary.getBoundingClientRect().height;
let lastScroll = 0;

document.getElementById("white-box-body").style.setProperty("height", navbarHeight+"px","important");
console.log(navbarHeight);

window.addEventListener("scroll", () => {
  const currentScroll = window.scrollY;

  if (currentScroll <= navbarHeight) {
    header.classList.remove("scroll-up");
    header.classList.remove("scroll-down");
    headerSecondary.classList.add("secondary-scroll-up");
    headerSecondary.classList.remove("secondary-scroll-down");
    headerSecondary.classList.add("secondary-scroll-hide");
    headerSecondary.classList.remove("secondary-scroll-show");
  } else if (currentScroll > lastScroll && currentScroll > navbarHeight) {
    header.classList.remove("scroll-up");
    header.classList.add("scroll-down");
    headerSecondary.classList.remove("secondary-scroll-up");
    headerSecondary.classList.remove("secondary-scroll-down");
    headerSecondary.classList.remove("secondary-scroll-hide");
    headerSecondary.classList.add("secondary-scroll-show");
  }

  lastScroll = currentScroll;
});


// *********************************************************************

// const contImg = document.querySelector("content-header-img");
// const contImgHeight = contImg.getBoundingClientRect().height;

// *************************horizontal**********************************

const firstCardWidth = document.querySelector(
  ".content-horizontal-card"
).offsetWidth;

function horizontalMove(btn) {
  var box = btn.parentElement;
  var courasal = box.children[1];
  courasal.scrollLeft += btn.id === "left" ? -firstCardWidth : firstCardWidth;
}

// ************************************************************************

function sideNavBtnClick(e) {
  var btnList = document.querySelectorAll(".syd-side-bar div .syd-menu-btn");

  for (var x = 0; x < btnList.length; x++) {
    if (btnList[x].id == e.id) {
      // console.log(document.getElementById(e.id).nextSibling);
      document.querySelector("#" + e.id + " svg").classList.remove("default");
      document.querySelector("#" + e.id + " svg").classList.add("selected");
    } else {
      document
        .querySelector("#" + btnList[x].id + " svg")
        .classList.remove("selected");
      document
        .querySelector("#" + btnList[x].id + " svg")
        .classList.add("default");
    }
  }
}

var dropDownSearch;

function searchInput() {
  dropDownSearch = new bootstrap.Dropdown(
    document.getElementById("searchInput")
  );
  dropDownSearch.show();
}

var menuCollapse;
var isShown = false;
var shownContent = "home";

function menuCollapseable(menu) {
  menuCollapse = new bootstrap.Collapse("#" + menu.dataset.controls, {
    toggle: false,
  });
  var currentContent = menu.dataset.areacontent;
  var selected = document.querySelectorAll("#collapseButtonList");
  var iterations = 0;
  for (var i = 0; i < selected.length; i++) {
    iterations++;
    for (var j = 0; j < selected[i].children.length; j++) {
      if (
        selected[i].children[j].firstElementChild.dataset.areacontent ==
        currentContent
      ) {
        var selectedItem = selected[i].children[j];
        if (isShown && shownContent == currentContent && iterations != 2) {
          menuCollapse.hide();
          isShown == false;
          console.log("hide collapse");
        } else if (isShown && shownContent != currentContent) {
          shownContent = currentContent;
          //show new content of selected
          console.log(shownContent);
        } else {
          menuCollapse.show();
          isShown = true;
          shownContent = currentContent;
          //show new content of selected
          console.log(shownContent);
        }
        selectedItem.classList.add("activated");
      } else {
        if (selected[i].children[j].classList.contains("activated")) {
          selected[i].children[j].classList.remove("activated");
        }
      }
    }
  }
}
