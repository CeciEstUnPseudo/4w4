// On veut prendre tous les boutons avec comme class destination__bouton

const boutons = document.querySelectorAll('.articles__bouton');
const articleBoutons = document.querySelector('.articles__boutons');

boutons.forEach(function (bouton) {
  // Mettre le bouton dans articleBoutons
  articleBoutons.appendChild(bouton);
  bouton.addEventListener('click', function () {

    console.log("Un bouton a été cliqué!");

    // On met la classe "actif" pour montrer quel bouton est actif
      boutons.forEach(function(bouton){
        bouton.classList.remove('bouton-actif'); // Enlever la classe active de tous les boutons
      })
      bouton.classList.add('bouton-actif'); // Ajouter la classe active au bouton cliqué
    //

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
            const articleElement = document.createElement('div'); // Créer un nouvel élément div pour chaque article et lui mettre (innerHTML) les 3 éléments
            articleElement.classList.add('article__cacher'); // Ajouter la classe article__cacher pour le style
            articleElement.innerHTML = ` 
                      <h3 class="article__cacher__titre">${article.title.rendered}</h3>
                      <div class="article__cacher__info">${article.excerpt.rendered}</div>
                      <a href="${article.link}" class="article__cacher__info-plus">Lire plus</a>
                  `;
            destinationList.appendChild(articleElement);

            // articleElement.addEventListener('click', function () { // L'event Listener pour montré le contenu de l'article (comme un accordéon) quand on clique sur le titre
            //   articleElement.querySelector('.article__cacher__info').classList.toggle('visible'); // Toggle la classe visible pour montrer ou cacher le contenu
            // });

            // On selectionne le h3 de articleElement
            const articlesTitres = articleElement.querySelectorAll('.article__cacher__titre'); // On prend le titre de l'article
            articlesTitres.forEach(function (titre) { // On met un event listener pour chaque titre
              titre.addEventListener("click", function(){
                const info = titre.nextElementSibling; // On prend l'élément suivant le titre car on ne veut pas toggle tous les titres / tous les articles + on n'utilise pas le parent pour le addEventListener
                info.classList.toggle("visible"); // On toggle la classe visible pour montrer/cacher le resumé (contenu)
              })
            })
            
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