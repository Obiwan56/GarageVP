document.addEventListener('DOMContentLoaded', function () {
    const annoncesData = document.getElementById('annonces-data').textContent;
    const annonces = JSON.parse(annoncesData);

    // Ajoutez un écouteur d'événements au bouton de filtre
    const filtreBtn = document.getElementById('filtreBtn');
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

        // Envoyer une requête AJAX pour filtrer les annonces
        axios.post('/annonces/filtre', {
            prixMin: prixMin,
            prixMax: prixMax,
            kmMin: kmMin,
            kmMax: kmMax,
            yearMin: yearMin,
            yearMax: yearMax,
            carbu: carbu,
            boite: boite
        })
        .then(function (response) {
            // Mettre à jour le contenu des annonces avec les résultats filtrés
            document.getElementById('annonces-container').innerHTML = response.data;
        })
        .catch(function (error) {
            alert('Erreur lors du filtrage des annonces :', error);
        });
    });
});
