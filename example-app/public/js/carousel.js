//import './bootstrap';

let _image = [];
let div1 = document.getElementById(image1)
let div2 = document.getElementById(image2)
let div3 = document.getElementById(image3)
let div4 = document.getElementById(image4)

_image.push(div1);
_image.push(div2);
_image.push(div3);
_image.push(div4);

function moveLeft()
{
    let lastImage = _image[0];

    for (let i = 0; i < _image.length; i++) 
   {
       if(i < _image.length - 1)
       {
            _image[i] = _image[i + 1];
       }
       else
       {
            _image[i] = lastImage;
       }
   }

   
}

function moveRight()
{
   // Set a variable to have the book which will move to the other side of the array
   let lastImage = _image[_image.length - 1];

   // Exchange the places of the table by 1 to the right
   for (let i = _image.length - 1; i >= 0; i--) 
   {
       if (i > 0) 
       {
        _image[i] = _image[i - 1];
       }
       else
       {
        _image[i] = lastImage;
       }
   }
}