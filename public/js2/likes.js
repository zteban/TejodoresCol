 for(i=29;i<1000;i++){
 
  /*===== BOTON LIKES =====*/ 
  const likeBtn = document.querySelector(".like__btn"+i);
  let likeIcon = document.querySelector("#icon"+i)
  let count31 = document.querySelector("#count"+i);
  /*===== Funcion al Clickear boton =====*/ 
  let clicked = false;
  likeBtn.addEventListener("click",()=>{
  if(!clicked){
      clicked = true;
      likeIcon.innerHTML = '<i class="fas fa-thumbs-up"></i>';
      count31.textContent++;
  }
  else{
      clicked = false;
      likeIcon.innerHTML = '<i class="far fa-thumbs-up"></i>';
      count31.textContent--;
  }
  });  

}

