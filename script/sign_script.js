var psCollapse;

function passwordProcess(){
    document.getElementById("getVerifyBtn").setAttribute("disabled",'');

    psCollapse = new bootstrap.Collapse('#pscollapse', {
        toggle: false
      })
    psCollapse.show();
}

function changeType(btn){
    console.log(btn.nextElementSibling);
    var state = btn.nextElementSibling.getAttribute("type");
    console.log(state);
    console.log(btn.children);
    if(state=="password"){
        btn.nextElementSibling.setAttribute("type","text");
    }else{
        btn.nextElementSibling.setAttribute("type","password");
    }
    btn.firstElementChild.classList.toggle("bxs-show");
    btn.firstElementChild.classList.toggle("bxs-hide");
}