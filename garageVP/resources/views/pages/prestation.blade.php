@extends('squelette')

@section('contenu')
    <div class="titre2 text-center text-primary">
        <div class="titre2-contenu">
            <h1>Nos Prestations</h1>
        </div>
    </div>

    <section>
        <article>
            <div class="container p-4">
                <h2 class="text-center text-primary">Réparation de la carrosserie</h2>
                <div class="row row-cols-2 align-items-center">
                    <div class="col">
                        <p class="pcarrosserie">Nos carrossiers travaille avec précision et minutie, afin de garantir un
                            travail professionnel et de qualité. C'est la qualité de notre travail qui permet de garantir la
                            sécurité du véhicule. Nous sommes méticuleux, même pour les remplacements ou les réparations les
                            plus minimes.</p>
                    </div>
                    <div class="col">
                        <img class="w-100 rounded" src="/image_garage-vp/carrosserie.jpg" alt="">
                    </div>
                    <div class="bouton p-4">
                        <a href="/contact" class="btn btn-primary">Contactez-nous</a>
                    </div>
                </div>
            </div>
        </article>

        <article>
            <div class="container p-4 bg-dark text-white">
                <h2 class="text-center text-primary">Entretien et réparation de véhicules</h2>
                <div class="row row-cols-2 align-items-center">
                    <div class="col">
                        <img class="w-100 rounded" src="/image_garage-vp/entretien.jpg" alt="">
                    </div>
                    <div class="col">
                        <p class="pcarrosserie">Une voiture et plus particulièrement son moteur sont soumis à de grosses
                            contraintes mécaniques et thermiques, et à un phénomène d’usure : la révision d’une voiture
                            essence a pour but de vérifier l’état des principales pièces, et de changer si besoin les pièces
                            usées ou dénaturées et donc dangereuses.
                            L'entretien d’une voiture essence porte sur les points les plus importants comme le moteur, les
                            équipements électriques, les pneus ou les niveaux.</p>
                    </div>
                    <div class="bouton p-4">
                        <a href="/contact" class="btn btn-primary">Contactez-nous</a>
                    </div>
                </div>
            </div>
        </article>

        <article>
            <div class="container p-4">
                <h2 class="text-center text-primary">Vente de véhicule d'occasion</h2>
                <div class="row row-cols-2 align-items-center">
                    <div class="col">
                        <p class="pcarrosserie">Nous souhaitons réinventer l’achat de véhicule. A ce titre, nous sommes les
                            plus avantageux en termes de prix de vente, quel que soit le modèle ou la marque de la voiture
                            achetée. Nos voitures d’occasion sont rigoureusement sélectionnées parmi des centaines de
                            véhicules.
                            Nous vous proposons à l’achat des véhicules d’occasion récents bénéficiant du meilleur rapport
                            qualité/prix/esthétique du marché. En effet, nous comparons des milliers de prix de voiture
                            neuves et d’occasion en temps réel afin que vous puissiez bénéficier des meilleurs prix.
                            Et si malgré tous nos efforts, la voiture que vous avez achetée est vendue à un prix inférieur
                            chez un autre professionnel de l’automobile, nous nous engageons à vous rembourser la
                            différence.</p>
                    </div>
                    <div class="col">
                        <img class="w-100 rounded" src="/image_garage-vp/vendeur.jpg" alt="">
                    </div>
                    <div class="bouton p-4">
                        <a href="/occasion" class="btn btn-primary">Voir les véhicules</a>
                    </div>
                </div>
            </div>
        </article>

    </section>
@endsection
