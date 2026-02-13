
var all_languges = document.querySelector(".selecting_box").children;
var hlb = document.getElementById("hlb");
var isChanged = false;

// mobile js
var all_languges_m = document.querySelector(".selecting_box_m")?.children;
var hlb_m = document.getElementById("hlb_m");
var isChanged_m = false;




function isOpeningLanguage() {
    document.getElementById("animating_icons_lang").style.transform = "rotate(180deg)"
    hlb.style.borderBottomLeftRadius = "0px";
    hlb.style.borderBottomRightRadius = "0px";
    document.getElementById("selecting_box_id").style.display = "block";
}
function isOpeningLanguage_m() {
    document.getElementById("animating_icons_lang_m").style.transform = "rotate(180deg)"
    hlb_m.style.borderBottomLeftRadius = "0px"
    hlb_m.style.borderBottomRightRadius = "0px"
    document.getElementById("selecting_box_id_m").style.display = "block"
}
function isClosingLanguage() {
    document.getElementById("animating_icons_lang").style.transform = "rotate(0deg)"
    hlb.style.borderBottomLeftRadius = "10px"
    hlb.style.borderBottomRightRadius = "10px"
    document.getElementById("selecting_box_id").style.display = "none";
}
function isClosingLanguage_m() {
    document.getElementById("animating_icons_lang_m").style.transform = "rotate(0deg)"
    hlb_m.style.borderBottomLeftRadius = "10px"
    hlb_m.style.borderBottomRightRadius = "10px"
    document.getElementById("selecting_box_id_m").style.display = "none"
}



for (let i = 0; i < all_languges.length; i++) {
    const element = all_languges[i];

    element.addEventListener("click", () => {
        var selected_language = document.getElementById("selected_language");
        sessionStorage.setItem('language', element.textContent);
        let change_val = selected_language.textContent;
        selected_language.innerHTML = sessionStorage.getItem('language');
        element.innerHTML = change_val;
        isClosingLanguage();
        isChanged = false
    })

}
// mobile js

for (let i = 0; i < all_languges_m?.length; i++) {
    const element = all_languges_m[i];

    element.addEventListener("click", () => {
        var selected_language_m = document.getElementById("selected_language_m");
        sessionStorage.setItem('language', element.textContent);
        let change_val = selected_language_m.textContent;
        selected_language_m.innerHTML = sessionStorage.getItem("language");
        element.innerHTML = change_val;
        isClosingLanguage_m();
        isChanged_m = false
    })

}











// search box
var searching_box = searching_box = document.querySelector('.searching_box')

window.addEventListener('click', () => {
    if (window.innerWidth > 1291) {
        searching_box = document.querySelector('.searching_box')
    } else {
        searching_box = document.querySelector('.searching_box_m');
    }
})


document.onclick = function (event) {
    if (event.target.id === 'search_id' || event.target.id === 'search_id_i') {
        searching_box?.classList.add('openingSearchbox');
        isChanged = false;
        isClosingLanguage()



    } else if (event.target.id === 'search_id_m' || event.target.id === 'search_id_i_m') {
        searching_box.classList.add('openingSearchbox');
        isClosingLanguage_m()
        isChanged = false;
    } else if (event.target.id === 'hlb' || event.target.id === 'selected_language' || event.target.id === 'animating_icons_lang') {

        isChanged = !isChanged;

        if (isChanged) {
            isOpeningLanguage()
            searching_box?.classList.remove('openingSearchbox');
        } else {
            isClosingLanguage()
            isChanged = false
        }

    } else if (event.target.id === 'hlb_m' || event.target.id === 'selected_language_m' || event.target.id === 'animating_icons_lang_m') {

        isChanged_m = !isChanged_m;

        if (isChanged_m) {
            isOpeningLanguage_m();
            searching_box.classList.remove('openingSearchbox');
        } else {
            isClosingLanguage_m()
            isChanged = false;
        }

    } else if (event.target.id === 'searchingBox' || event.target.id === 'search_id_input' || event.target.id === 'search_id_input_i' || event.target.id === 'search_id_input_m' || event.target.id === 'search_id_input_i_m') {
        return
    } else {
        searching_box?.classList.remove('openingSearchbox');
        if (isChanged) {
            isClosingLanguage();
            isChanged = false
        }
        if (isChanged_m) {
            isClosingLanguage_m();
            isChanged = false;
        }
    }
}


// scroll to top button


var to_top_btn = document.querySelector(".to_top_scroll");

window.addEventListener('scroll', (e) => {
    if (window.pageYOffset > 500) {
        to_top_btn.style.display = 'block';
        to_top_btn.onclick = function () {
            window.scrollTo(window.pageYOffset, 0)
        }
    } else {
        to_top_btn.style.display = 'none'
    }
})

