
function sideNavBtnClick(e) {
  var btnList = document.querySelectorAll(".syd-side-bar div .syd-menu-btn");

  for (var x = 0; x < btnList.length; x++) {
    if(btnList[x].id==e.id){
        // console.log(document.getElementById(e.id).nextSibling);
        document.querySelector("#"+e.id+" svg").classList.remove("default");
        document.querySelector("#"+e.id+" svg").classList.add("selected");
    }else{
        document.querySelector("#"+btnList[x].id+" svg").classList.remove("selected");
        document.querySelector("#"+btnList[x].id+" svg").classList.add("default");
    }
  }
}

