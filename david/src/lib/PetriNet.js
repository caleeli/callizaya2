export default class PetriNet {
    constructor() {
        this.places = {};        // Lugares en la red
        this.transitions = {};   // Transiciones en la red
        this.logs = [];          // Registro de eventos
    }

    // Agrega un mensaje al registro de eventos
    log(message) {
        this.logs.push(message);
    }

    // Agrega un lugar a la red
    addPlace(placeId, tokens = 0) {
        this.places[placeId] = tokens;
    }

    // Agrega una transición a la red
    addTransition(transitionId, inputPlaces, outputPlaces) {
        this.transitions[transitionId] = {
            input: inputPlaces,
            output: outputPlaces
        };
    }

    // Verifica si una transición puede dispararse
    canFire(transitionId) {
        const transition = this.transitions[transitionId];
        for (let place of transition.input) {
            if (this.places[place] <= 0) {
                return false;
            }
        }
        return true;
    }

    // Dispara una transición
    fire(transitionId) {
        if (this.canFire(transitionId)) {
            const transition = this.transitions[transitionId];
            // Quita una ficha de cada lugar de entrada
            for (let place of transition.input) {
                this.places[place]--;
            }
            // Añade una ficha a cada lugar de salida
            for (let place of transition.output) {
                this.places[place]++;
            }
            this.log(`✅ Transición ${transitionId} disparada.`);
        } else {
            this.log(`⚠️ Transición ${transitionId} no puede dispararse.`);
        }
    }

    getPosition(svg) {
        if (!svg) return;
        // Find place where the token is located
        const key = Object.keys(this.places).find(key => this.places[key] === 1);
        const element = svg.ownerDocument.getElementById(key);
        // Fix scale
        const x = element.getAttribute('cx');
        const y = element.getAttribute('cy');
        return {
            x,
            y,
        };
    }
}
