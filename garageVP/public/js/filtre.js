// Ajoutez un écouteur d'événements lorsque le DOM est chargé
document.addEventListener('DOMContentLoaded', function () {
    const annonces = json($annonces);
    const filtreBtn = document.getElementById('filtreBtn');

    // Ajoutez un écouteur d'événements au bouton de filtre
    filtreBtn.addEventListener('click', function () {
        // Récupérez les valeurs sélectionnées dans les champs de sélection
        const prixMin = document.getElementById('prixMin').value;
        const prixMax = document.getElementById('prixMax').value;
        const kmMin = document.getElementById('kmMin').value;
        const kmMax = document.getElementById('kmMax').value;
        const yearMin = document.getElementById('yearMin').value;
        const yearMax = document.getElementById('yearMax').value;
        const carbu = document.getElementById('carbu').value;
        const boite = document.getElementById('boite').value;

        // Filtrer les annonces en fonction des critères sélectionnés
        const annoncesFiltrees = filtrerAnnonces(prixMin, prixMax, kmMin, kmMax, yearMin, yearMax, carbu, boite, annonces);

        // Afficher les annonces filtrées
        afficherAnnonces(annoncesFiltrees);
    });
});

function filtrerAnnonces(prixMin, prixMax, kmMin, kmMax, yearMin, yearMax, carbu, boite, annonces) {
    return annonces.filter(function (annonce) {
        // Filtrer les annonces en fonction des critères sélectionnés
        return (prixMin === 'Prix min' || annonce.prix >= prixMin) &&
            (prixMax === 'Prix max' || annonce.prix <= prixMax) &&
            (kmMin === 'Km min' || annonce.km >= kmMin) &&
            (kmMax === 'Km max' || annonce.km <= kmMax) &&
            (yearMin === 'Année min' || annonce.annee >= yearMin) &&
            (yearMax === 'Année max' || annonce.annee <= yearMax) &&
            (carbu === 'Energie' || annonce.energie === carbu) &&
            (boite === 'Boite' || annonce.boite === boite);
    });
}

function afficherAnnonces(annonces) {
    // Sélectionnez l'élément conteneur où vous voulez afficher les annonces
    let conteneurAnnonces = document.querySelector('.row.row-cols-1.row-cols-sm-2.row-cols-md-3.row-cols-lg-4.row-cols-xl-5.g-4.justify-content-center');

    // Assurez-vous que le conteneur est vide avant d'ajouter de nouvelles annonces
    conteneurAnnonces.innerHTML = '';

    // Parcourez chaque annonce dans la liste
    annonces.forEach(function (annonce) {
        // Créez les éléments HTML pour chaque annonce
        let annonceHTML = `
            <div class="col mb-4">
                <div class="card">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item" data-bs-interval="10000">
                                <img src="{{ asset('storage/' . $annonce->img1) }}" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item" data-bs-interval="10000">
                                <img src="{{ asset('storage/' . $annonce->img2) }}" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item" data-bs-interval="10000">
                                <img src="{{ asset('storage/' . $annonce->img3) }}" class="d-block w-100" alt="">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">${annonce.model}</h5>
                        <div>
                            <p>${annonce.annee}</p>
                            <p>${annonce.energie}</p>
                            <p>${annonce.km} km</p>
                            <p class="text-primary text-center">${annonce.prix} €</p>
                        </div>
                        <a class="btn btn-primary d-grid gap-2 col-6 mx-auto" href="/detailAnnonce/${annonce.id}">Voir détail</a>
                    </div>
                </div>
            </div>
        `;

        // Ajoutez le contenu de l'annonce dans le conteneur
        conteneurAnnonces.innerHTML += annonceHTML;
    });
}
