let LikeButtonIconList = document.querySelectorAll("a .fa-heart");
for(let LikeButtonIcon of LikeButtonIconList){
    let a = LikeButtonIcon.closest(".card-iconlink");
    a.addEventListener('click', like);
}
function like(e){
    e.preventDefault();
    let icon = this.querySelector(".fa-heart");
    if(icon.classList.contains('far')){
        icon.classList.add('fas')
        icon.classList.remove('far');
    }
    else if(icon.classList.contains('fas')){
        icon.classList.add('far')
        icon.classList.remove('fas');
    }
}
let BookmarkButtonIconList = document.querySelectorAll("a .fa-bookmark");
for(let BookmarkButtonIcon of BookmarkButtonIconList){
    let a = BookmarkButtonIcon.closest(".card-iconlink");
    a.addEventListener('click', bookmark);
}
function bookmark(e){
    e.preventDefault();
    let icon = this.querySelector(".fa-bookmark");
    if(icon.classList.contains('far')){
        icon.classList.add('fas')
        icon.classList.remove('far');
    }
    else if(icon.classList.contains('fas')){
        icon.classList.add('far')
        icon.classList.remove('fas');
    }
}