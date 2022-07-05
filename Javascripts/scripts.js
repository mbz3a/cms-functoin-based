/* Just for this Doc Admin Dashboard */

let dashboard_menu = document.getElementsByClassName('menu-heading');
for(let i=0 ; i<dashboard_menu.length ; i++){
    
    let children_mi = dashboard_menu[i].parentElement.children;

    for(let j=0 ; j<children_mi.length ; j++){
        if(children_mi[j].classList.contains('menu-sub-menus')){
            dashboard_menu[i].addEventListener('click',function(){toggleMe(this)});
        }
    }
}


function toggleMe(a){ 
    let item = a.parentElement.children[1];
    if(item.classList.contains("show")){
        item.classList.remove("show");
    }
    else{
        item.classList.add("show");
    }
}


/* Set Page Titles */

let getitle = document.getElementById('set_title');
let get_titletag = document.getElementsByTagName('title');
get_titletag[0].innerHTML = getitle.getAttribute('data-set-title'); 


/* Check the modal Admin Part */

let modal_con =document.getElementById('ad_modal-con');
let data_err =document.getElementById('ad_modal-con').getAttribute('data-err');
let modal_box =document.getElementById('ad_modal-box');
let admin_err_img =document.getElementById('ad_err_img');
let ad_err_msg =document.getElementById('ad_err_msg');

console.log(data_err);
if(data_err=="modal-off"){
    modal_con.classList.add('display-none');
}
else if(data_err=="yes"){
    modal_con.classList.add('flex-show');
    admin_err_img.src="img/error.png";
    ad_err_msg.innerHTML = "We face a problem there...";
}
else if(data_err=="no"){
    modal_con.classList.add('flex-show');
    admin_err_img.src="img/checked.png";
    ad_err_msg.innerHTML = "Menu Added Successfully";
}
// ad_err_msg



// if()