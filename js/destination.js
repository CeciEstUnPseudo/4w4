// On veut prendre tous les boutons avec comme class destination__bouton

const boutons = document.querySelectorAll('.categorie__ul__li');
boutons.forEach(function (bouton) {
  bouton.addEventListener('click', function () {

    console.log("Un bouton a été cliqué!");

    // Enlever les anciens articles de la liste

      const destinationList = document.querySelector('.destination__list');
      destinationList.innerHTML = ""; // On vide la liste avant d'ajouter les nouveaux articles

    //

    // Affichage des articles d'une catégorie spécifique dans une liste

    // document.addEventListener('DOMContentLoaded', function () {
      console.log("On fait la fonction suivante après cliqué!");
      const categoryId = bouton.getAttribute('data-category-id'); // Récupérer l'ID de la catégorie à partir de l'attribut data-category-id du bouton
      const domaine = window.location.href;
      const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
      console.log("APIURL = " + apiUrl);
      fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
          const destinationList = document.querySelector('.destination__list');
          data.forEach(article => {
            const articleElement = document.createElement('div');
            articleElement.innerHTML = `
                      <h3>${article.title.rendered}</h3>
                      <div>${article.excerpt.rendered}</div>
                      <a href="${article.link}">Lire plus</a>
                  `;
            destinationList.appendChild(articleElement);
          });
        })
        .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    // });

  })
});


// Affichage des articles d'une catégorie spécifique dans une liste
// (function(){
// console.log("Vive javascript!");
//   document.addEventListener('DOMContentLoaded', function() {
//     const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
//     const domaine = window.location.href;
//     const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
//     console.log("APIURL = "+apiUrl);
//     fetch(apiUrl)
//         .then(response => response.json())
//         .then(data => {
//             const destinationList = document.querySelector('.destination__list');
//             data.forEach(article => {
//                 const articleElement = document.createElement('div');
//                 articleElement.innerHTML = `
//                     <h3>${article.title.rendered}</h3>
//                     <div>${article.excerpt.rendered}</div>
//                     <a href="${article.link}">Lire plus</a>
//                 `;
//                 destinationList .appendChild(articleElement);
//             });
//         })
//         .catch(error => console.error('Erreur lors de la récupération des articles:', error));
// });
// })