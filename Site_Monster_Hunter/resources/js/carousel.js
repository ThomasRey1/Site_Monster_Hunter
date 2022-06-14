//import './bootstrap';

/*class ImageCarousel{
    imageObject = Array(Image);

    constructor(linkImage, text){
        this.linkImage = linkImage;
        this.text = text;
    }

    turnLeft(){
        let lastDiv = this.imageObject[0];

        for(let i = 0; i < this.imageObject.length; i++){
            if(i < this.imageObject.length - 1){
                this.imageObject[i] = this.imageObject[i + 1];
            }
            else{
                this.imageObject[i] = lastDiv;
            }
        }

        div1.children[0].src = this.imageObject[0].linkImage;
        div1.children[1].innerHTML = this.imageObject[0].text;
        div2.children[0].src = this.imageObject[1].linkImage;
        div2.children[1].innerHTML = this.imageObject[1].text;
        div3.children[0].src = this.imageObject[2].linkImage;
        div3.children[1].innerHTML = this.imageObject[2].text;
    }

    turnRight(){
        let lastDiv = this.imageObject[this.imageObject.length - 1];

        for(let i = this.imageObject.length - 1; i >= 0; i--){
            if(i > 0){
                this.imageObject[i] = this.imageObject[i - 1];
            }
            else{
                this.imageObject[i] = lastDiv;
            }
        }

        div1.children[0].src = this.imageObject[0].linkImage;
        div1.children[1].innerHTML = this.imageObject[0].text;
        div2.children[0].src = this.imageObject[1].linkImage;
        div2.children[1].innerHTML = this.imageObject[1].text;
        div3.children[0].src = this.imageObject[2].linkImage;
        div3.children[1].innerHTML = this.imageObject[2].text;
    }
}

let images = new ImageCarousel("","");
let image1 = new ImageCarousel("image/img_chania.jpg", "à l'aide 1");
let image2 = new ImageCarousel("image/img_chania2.jpg", "à l'aide 2");
let image3 = new ImageCarousel("image/img_flower.jpg", "à l'aide 3");
let image4 = new ImageCarousel("image/img_flower2.jpg", "à l'aide 4");

let div1 = document.getElementById("carouselImage1");
let div2 = document.getElementById("carouselImage2");
let div3 = document.getElementById("carouselImage3");

images.imageObject.push(image1);
images.imageObject.push(image2);
images.imageObject.push(image3);
images.imageObject.push(image4);

images.imageObject.shift();

let leftBtn = document.getElementById("leftBtn");
leftBtn.addEventListener("click", function(){
    images.turnLeft();
});

let rightBtn = document.getElementById("rightBtn");
rightBtn.addEventListener("click", function(){
    images.turnRight();
});
*/

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" bg-[#717171]", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " bg-[#717171]";
}