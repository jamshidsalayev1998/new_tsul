var b_nav_links = document.querySelectorAll(".bottom_nav  .main_links");
var b_mega_menus = document.querySelectorAll(".bottom-nav .mega_menu_custom");
var t_nav_links = document.querySelectorAll(".top_nav  .main_links");
var t_mega_menus = document.querySelectorAll(".top-nav .mega_menu_custom");``



for (let i = 0; i < b_nav_links.length; i++) {
    const element = b_nav_links[i];
    element.onmouseenter = function(e){
        element.style.backgroundColor = "#F6F7FD"
        element.style.borderBottom = "1px solid blue"
    }
    element.addEventListener('mouseleave', () => {
        element.style.backgroundColor = "transparent"
        element.style.borderBottom = "1px solid transparent"
    })
}
for (let i = 0; i < b_mega_menus.length; i++) {
    const m_element = b_mega_menus[i];
    m_element.addEventListener('mouseleave', () => {
        console.log("afsdfa",m_element.parentElement);
        m_element.parentElement.style.backgroundColor = "transparent"
        element.style.borderBottom = "1px solid transparent"
    })
}

for (let i = 0; i < t_nav_links.length; i++) {
    const element = t_nav_links[i];
    element.onmouseenter = function(e){
        element.style.backgroundColor = "#2C42A6"
    }
    element.addEventListener('mouseleave', () => {
        element.style.backgroundColor = "#233585"
    })
}
for (let i = 0; i < t_mega_menus.length; i++) {
    const m_element = t_mega_menus[i];
    m_element.addEventListener('mouseleave', () => {
        console.log("afsdfa",m_element.parentElement);
        m_element.parentElement.style.backgroundColor = "#233585"
    })
}
