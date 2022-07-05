let allImg = document.getElementsByTagName('img');

for(var i=0 ; i < allImg.length ;i++){

    let loc = allImg[i].getAttribute('data-loc');
    let imgSrc =allImg[i].src ;
    let imgSrcArr =imgSrc.split('/') ;
    let index = imgSrcArr.length;

    if(loc=="products" || loc=="news"){
        let finnalSrc = "./../"+imgSrcArr[index-4]+"/"+imgSrcArr[index-3]+"/"+imgSrcArr[index-2]+"/"+imgSrcArr[index-1];
        allImg[i].src  = finnalSrc ;
    }   
    else{
        let finnalSrc = "./../"+imgSrcArr[index-2]+"/"+imgSrcArr[index-1];
        allImg[i].src  = finnalSrc ;
    }
}