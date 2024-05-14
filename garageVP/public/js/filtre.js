function filtrerAnnonces() {
    let km = $('#km').val();
    let annee = $('#annee').val();
    let prix = $('#prix').val();

    // Afficher toutes les annonces pour commencer
    $('.col').show();

    // Filtrer les annonces en fonction des valeurs sélectionnées
    if (km) {
        $('.col').each(function() {
            let annonceKm = parseInt($(this).find('.fw-bold.km').text());
            if (!(km.includes('-') && annonceKm >= parseInt(km.split('-')[0]) && annonceKm <= parseInt(km.split('-')[1]))) {
                $(this).hide();
            }
        });
    }

    if (annee) {
        $('.col').each(function() {
            let annonceAnnee = parseInt($(this).find('.fw-bold.annee').text());
            if (!(annee.includes('-') && annonceAnnee >= parseInt(annee.split('-')[0]) && annonceAnnee <= parseInt(annee.split('-')[1]))) {
                $(this).hide();
            }
        });
    }

    if (prix) {
        $('.col').each(function() {
            let annoncePrix = parseInt($(this).find('.fw-bold.prix').text());
            if (!(prix.includes('-') && annoncePrix >= parseInt(prix.split('-')[0]) && annoncePrix <= parseInt(prix.split('-')[1]))) {
                $(this).hide();
            }
        });
    }

    // Envoyer les données du formulaire de filtrage à l'URL de la route
    let formData = $('#filtrer-form').serialize();

    // Ajouter le jeton CSRF à la requête AJAX
    formData += '&_token=' + $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        type: "POST",
        url: url, // Utilisation de l'URL récupérée
        data: formData,
        success: function (response) {
            // Traiter la réponse et afficher les résultats
            console.log(response);
        },
        error: function (error) {
            console.error('Erreur:', error);
        }
    });
}
