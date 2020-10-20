async   function getPosts() {
    let res = await fetch('http://localhost/php-projects/php_API/2/BackEnd/allposts');
    let posts= await res.json();
    return posts;
}



(async()=>{
    let posts = await getPosts();
    let cardContainer =  document.querySelector("#cardContainer");
    console.dir(cardContainer);
    posts.forEach(post => {
        let card = document.createElement("div");
        let cardBody = document.createElement("div");
        let cardTitle = document.createElement("h5");
        let cardText = document.createElement("p");
        card.classList.add("card");
        cardBody.classList.add("card-body");
        cardTitle.classList.add("card-title");
        cardText.classList.add("card-text");
        cardTitle.innerHTML = post.title;
        cardText.innerHTML = post.body;
        cardBody.appendChild(cardTitle);
        cardBody.appendChild(cardText);
        card.appendChild(cardBody);
        cardContainer.appendChild(card);
    });
})()