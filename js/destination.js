const tousLesBoutons = document.querySelectorAll('.articles__bouton');
const articleBoutons = document.querySelector('.articles__boutons');

tousLesBoutons.forEach(function (bouton) {
  articleBoutons.appendChild(bouton);

  bouton.addEventListener('click', function () {
    tousLesBoutons.forEach(b => b.classList.remove('bouton-actif'));
    bouton.classList.add('bouton-actif');

    const domaine = window.location.origin;

    // --- PAR CATÉGORIE ---
    if (bouton.hasAttribute('data-category-id')) {
      const categoryId = bouton.getAttribute('data-category-id');
      const apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
      fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
          afficherArticles(data);
        })
        .catch(error => console.error('Erreur catégorie:', error));
    }

    // --- PAR PAYS via SEARCH ---
    else if (bouton.hasAttribute('data-pays')) {
      const pays = bouton.getAttribute('data-pays');
      const domaine = window.location.origin;
      const apiUrl = `${domaine}/wp-json/wp/v2/posts?search=${pays}&per_page=100`;


      fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
          afficherArticles(data);
        })
        .catch(error => console.error('Erreur pays (search):', error));
    }

    else {
      console.log("Bouton sans catégorie ni pays");
    }
  });
});

function afficherArticles(articles) {
  const destinationList = document.querySelector('.destination__list');
  destinationList.innerHTML = "";

  articles.forEach(article => {
    const articleElement = document.createElement('div');
    articleElement.classList.add('article__cacher');
    articleElement.innerHTML = `
      <h3 class="article__cacher__titre">${article.title.rendered}</h3>
      <div class="article__cacher__info">${article.excerpt.rendered}</div>
      <a href="${article.link}" class="article__cacher__info-plus">Lire plus</a>
    `;
    destinationList.appendChild(articleElement);

    const titre = articleElement.querySelector('.article__cacher__titre');
    const info = articleElement.querySelector('.article__cacher__info');
    titre.addEventListener('click', () => {
      info.classList.toggle("visible");
    });
  });
}
