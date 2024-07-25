export default class BPMNEngine {
    constructor() {
        this.state = 'inicio';
        this.data = {};
    }

    next(action) {
        switch (this.state) {
            case 'inicio':
                this.state = 'revisar-solicitud';
                this.revisarSolicitud(action);
                break;
            case 'revisar-solicitud':
                if (this.aprobarSolicitud(action)) {
                    this.state = 'notificar-al-solicitante';
                    this.notificarSolicitante(true);
                } else {
                    this.state = 'rechazar-solicitud';
                    this.notificarSolicitante(false);
                }
                break;
            default:
                this.state = 'fin';
            }
    }

    revisarSolicitud(action) {
        Object.assign(this.data, action);
    }

    aprobarSolicitud(action) {
        Object.assign(this.data, action);
        return action.decision === 'aprobar';
    }

    notificarSolicitante(aprobado) {
        if (aprobado) {
            console.log('Solicitud aprobada. Notificando al solicitante...');
        } else {
            console.log('Solicitud rechazada. Notificando al solicitante...');
        }
    }
}
