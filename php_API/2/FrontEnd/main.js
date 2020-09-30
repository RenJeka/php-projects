async   function getPosts() {
    let res = await fetch('');
    let posts= await res.json();

}

getPosts();