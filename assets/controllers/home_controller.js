import { Controller } from '@hotwired/stimulus';

/**
 * Contrôleur Stimulus pour la page d'accueil type Google Keep.
 * Prêt pour extension : filtre recherche, clic sur carte, etc.
 */
export default class extends Controller {
    static targets = ['grid'];

    static values = {
        // Exemple : filtres ou options futures
    };

    connect() {
        // Structure prête pour comportements futurs (filtre, cartes cliquables)
    }
}
