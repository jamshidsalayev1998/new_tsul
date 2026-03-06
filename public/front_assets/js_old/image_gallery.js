

var linkimg = document.getElementById("image_l");
var img_box = document.getElementById("img_box");
var link_image_box = document.querySelector(".link_image_box").children;

for (let i = 0; i < link_image_box.length; i++) {
  const element = link_image_box[i];
  element.addEventListener("click", () => {
    img_box.src = element.children[0].src;
  })
}
