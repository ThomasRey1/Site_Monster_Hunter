let categorieIndex = "description"

function selectCategorie(categorie, post) {
    categorieIndex = categorie
    show(post);
}

function show(post) {
    let img1 = document.getElementById("img1");
    let img2 = document.getElementById("img2");
    let title = document.getElementById("title");
    let text = document.getElementById("text");
    let part2 = document.getElementById("part2");
    let part2img = document.getElementById("part2img");
    let categories = document.getElementsByClassName("categorie");
    for (let i = 0; i < categories.length; i++) {
        categories[i].className = categories[i].className.replace(" border-b-2", "");
    }
    let categorie
    switch (categorieIndex) {
        case "description":
            categorie = document.getElementById("description");
            categorie.className += " border-b-2";
            img1.src = "/images/" + post['imageMonster'];
            img1.alt = post['imageMonster'];
            img2.src = "/images/" + post['imageTwoMonster'];
            img2.alt = post['imageTwoMonster'];
            title.innerText = "Détail";
            text.innerText = post['descrMonster'];
            part2.className = part2.className.replace("grid-cols-1", "grid-cols-2");
            part2img.className = part2img.className.replace("w-[80%]", "w-full");
            break;

        case "weakness":
            categorie = document.getElementById("weakness");
            categorie.className += " border-b-2";
            img1.src =  "/images/" + post['imageElementMonster'];
            img1.alt = post['imageElementMonster'];
            img2.src = "/images/" + post['imageFleauMonster'];
            img2.alt = post['imageFleauMonster'];
            title.innerText = "Détail";
            text.innerText = post['WeaknessMonster'];
            part2.className = part2.className.replace("grid-cols-1", "grid-cols-2");
            part2img.className = part2img.className.replace("w-[80%]", "w-full");
            break;

        case "materiel":
            categorie = document.getElementById("materiel");
            categorie.className += " border-b-2";
            img1.src = "/images/" + post['imageNoviceMonster'];
            img1.alt = post['imageNoviceMonster'];
            img2.src = "/images/" + post['imageExpertMonster'];
            img2.alt = post['imageExpertMonster'];
            title.innerText = "Expert";
            text.innerText = "";
            part2.className = part2.className.replace("grid-cols-2", "grid-cols-1");
            part2img.className = part2img.className.replace("w-full", "w-[80%]");
        break;

        default:
            break;
    }
}