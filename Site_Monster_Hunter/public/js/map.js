let categorieIndex = "description"

function selectCategorie(categorie, post) {
    categorieIndex = categorie
    show(post);
}

function show(post) {
    let img1 = document.getElementById("img1");
    let categories = document.getElementsByClassName("categorie");
    for (let i = 0; i < categories.length; i++) {
        categories[i].className = categories[i].className.replace(" border-b-2", "");
    }
    let categorie
    switch (categorieIndex) {
        case "map":
            categorie = document.getElementById("map");
            categorie.className += " border-b-2";
            img1.innerText = post['imageTwoMap'];
            break;

        case "maxi":
            categorie = document.getElementById("maxi");
            categorie.className += " border-b-2";
            img1.innerText = post['imageMaxiMap'];
            break;

        case "faun":
            categorie = document.getElementById("faun");
            categorie.className += " border-b-2";
            img1.innerText = post['imageFaunMap'];
        break;

        case "collect":
            categorie = document.getElementById("collect");
            categorie.className += " border-b-2";
            img1.innerText = post['imageCollectMap'];
        break;

        default:
            break;
    }
}