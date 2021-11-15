let page = window.location.href.split('/')[window.location.href.split('/').length - 1];
let item = document.querySelectorAll('.nav-item')

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