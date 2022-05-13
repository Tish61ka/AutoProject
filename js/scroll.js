window.addEventListener('scroll', function() {
    if(pageYOffset > 0){
        document.getElementById("information").style.left = 0 + "%";
        document.getElementById("information").style.transition = 1 + "s";
        document.getElementById("go1").style.right = 20 + "px";
        document.getElementById("go1").style.transition = 1 + "s";
    }else if(pageYOffset < document.documentElement.clientHeight){
        document.getElementById("information").style.left = -100 + "%";
        document.getElementById("information").style.transition = 1 + "s";
        document.getElementById("go1").style.right = -20 + "%";
        document.getElementById("go1").style.transition = 1 + "s";
    }
    if(pageYOffset > 500){
        document.getElementById("bot").style.backgroundSize = 100 + "%" + 1 + "px";
    }else if(pageYOffset <= 520){
        document.getElementById("bot").style.backgroundSize = 0 + "%" + 1 + "px";
    }
    if(pageYOffset > 1300){
        document.getElementById("left_picture1").style.left = 0 + "%";
    }else if(pageYOffset <= 1250){
        document.getElementById("left_picture1").style.left = -150 + "%";
    }
    if(pageYOffset > 1600){
        document.getElementById("right_picture1").style.right = 0 + "%";
    }else if(pageYOffset <= 1500){
        document.getElementById("right_picture1").style.right = -150 + "%";
    }
    if(pageYOffset > 1850){
        document.getElementById("left_picture2").style.left = 0 + "%";
    }else if(pageYOffset <= 1800){
        document.getElementById("left_picture2").style.left = -150 + "%";
    }
    if(pageYOffset > 2150){
        document.getElementById("right_picture2").style.right = 0 + "%";
    }else if(pageYOffset <= 2100){
        document.getElementById("right_picture2").style.right = -150 + "%";
    }
    if(pageYOffset > 2400){
        document.getElementById("btn").style.left = 40 + "%";
    }else if(pageYOffset <= 2350){
        document.getElementById("btn").style.left = -20 + "%";
    }
    if(pageYOffset > 2700){
        document.getElementById("profimg").style.left = 0 + "%";
    }else if(pageYOffset <= 2650){
        document.getElementById("profimg").style.left = -150 + "%";
    }
    if(pageYOffset > 3100){
        document.getElementById("searchimg").style.left = 0 + "%";
    }else if(pageYOffset <= 3050){
        document.getElementById("searchimg").style.left = -150 + "%";
    }
    if(pageYOffset > 3400){
        document.getElementById("btn2").style.left = 40 + "%";
    }else if(pageYOffset <= 3350){
        document.getElementById("btn2").style.left = -20 + "%";
    }
  });
function click1(){
    document.getElementById("form2").style.opacity = 1;
    document.getElementById("form1").style.opacity = 0.7;
    document.getElementById("form2").style.zIndex = 3;
    document.getElementById("form1").style.zIndex = 1;
    document.getElementById("form2").style.transitionDuration = 400 + "ms";
    document.getElementById("form1").style.transitionDuration = 400 + "ms";
    document.getElementById("btn2").style.zIndex = 1;
    document.getElementById("btn1").style.zIndex = 3;
    let i = document.querySelector(".input").getAttribute('readonly') = false;
    document.getElementById("input").removeAttribute(readonly = false);
}
function click2(){
    document.getElementById("form1").style.opacity = 1;
    document.getElementById("form2").style.opacity = 0.7;
    document.getElementById("form1").style.zIndex = 3;
    document.getElementById("form2").style.zIndex = 1;
    document.getElementById("form1").style.transitionDuration = 400 + "ms";
    document.getElementById("form2").style.transitionDuration = 400 + "ms";
    document.getElementById("btn1").style.zIndex = 1;
    document.getElementById("btn2").style.zIndex = 3;
}