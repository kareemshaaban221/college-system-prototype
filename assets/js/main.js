let page = window.location.href.split('/')[window.location.href.split('/').length - 1];
let item = document.querySelectorAll('.nav-item');
let upBtn = document.getElementById('upBtn');
let bell = document.getElementById('bell');
let bellMsg = document.getElementById('bellMsg');
$(upBtn).fadeOut(0);
$(upBtn).click(()=>{
    scrollTo(0, 0);
})
$(bellMsg).hide();

$(bell).hover(()=>{
    $(bellMsg).animate({opacity:'toggle'},200);
})

document.addEventListener('scroll', upBtnShow);

removeAllActive(item);
if(page == "news.php"){
    activate('news');
}
else if(page == "aboutus.php"){
    activate('aboutus');
}
else if(page == "contact.php"){
    activate('contact');
}
else{
    page = page.split('?')[0];
    if(page == 'courses.php'){
        activate('courses');
    }
    else if(page == "news.php"){
        activate('news');
    }
    else if(page == "contact.php"){
        activate('contact');
    }
    else{
        activate('home');
    }
}

function removeAllActive(item){
    for (const it of item) {
        it.classList.remove('active');
    }
}
function activate(id){
    let temp = document.getElementById(''+id);
    temp.classList.add('active');
}
function upBtnShow(){
    if(scrollY > 600){
        $(upBtn).fadeIn();
    }
    else{
        $(upBtn).fadeOut();
    }
}