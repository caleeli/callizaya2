[
  {
    id: "plan",
    title: "Fase 1 \u2013 Planificaci\xF3n",
    principle: "Alineamiento estrat\xE9gico y gesti\xF3n de riesgos",
    context: "Se va a implementar un ERP para una entidad p\xFAblica. Debes preparar el marco de gobernanza inicial, el plan y la estructura de roles.",
    options: [
      {
        id: "plan-a",
        label: "Establecer comit\xE9 de gobernanza y matriz RACI",
        description: "Define roles claros (patrocinador, PMO, auditor\xEDa interna). Sesiones de kickoff con stakeholders clave.",
        delta: {
          tiempo: -5,
          presupuesto: -5,
          confianza: 8,
          riesgo: -8,
          tags: [
            "good-roles",
            "stakeholders"
          ],
          lesson: "Roles y responsabilidad claros reducen riesgos."
        }
      },
      {
        id: "plan-b",
        label: "Plan m\xEDnimo viable, arranque r\xE1pido",
        description: "Reducir el arranque formal para ganar velocidad. Documentaci\xF3n ligera y decisiones ad-hoc.",
        delta: {
          tiempo: 5,
          presupuesto: 0,
          confianza: -4,
          riesgo: 8,
          tags: [
            "fast-start",
            "weak-governance"
          ],
          lesson: "La velocidad sin gobernanza aumenta el riesgo."
        }
      },
      {
        id: "plan-c",
        label: "Consultor\xEDa breve para evaluaci\xF3n de riesgos",
        description: "Traer un tercero para mapa de riesgos temprano (ciber, procesos, adopci\xF3n).",
        delta: {
          tiempo: -3,
          presupuesto: -8,
          confianza: 3,
          riesgo: -10,
          tags: [
            "risk-assessment"
          ],
          lesson: "Una evaluaci\xF3n de riesgos temprana evita sorpresas."
        }
      }
    ]
  },
  {
    id: "diseno",
    title: "Fase 2 \u2013 Dise\xF1o y Alcance",
    principle: "Estandarizaci\xF3n vs. personalizaci\xF3n; control de cambios",
    context: "Debes definir el alcance funcional y el nivel de personalizaci\xF3n del ERP frente a best practices del producto.",
    options: [
      {
        id: "design-a",
        label: "Adoptar procesos est\xE1ndar del ERP (low-code)",
        description: "Minimizar personalizaciones y adaptar el proceso al sistema.",
        delta: {
          tiempo: -5,
          presupuesto: -5,
          confianza: 5,
          riesgo: -6,
          tags: [
            "std-process"
          ],
          lesson: "Adoptar est\xE1ndares reduce complejidad y riesgo."
        }
      },
      {
        id: "design-b",
        label: "Personalizaci\xF3n moderada aprobada por comit\xE9",
        description: "Customs s\xF3lo donde hay claro ROI y con control de cambios.",
        delta: {
          tiempo: 0,
          presupuesto: -8,
          confianza: 2,
          riesgo: -2,
          tags: [
            "custom-governed"
          ],
          lesson: "La personalizaci\xF3n controlada puede aportar valor."
        }
      },
      {
        id: "design-c",
        label: "Personalizaci\xF3n amplia para calzar procesos actuales",
        description: "Se decide replicar procesos legados para evitar resistencia.",
        delta: {
          tiempo: 8,
          presupuesto: -12,
          confianza: -3,
          riesgo: 12,
          tags: [
            "custom-heavy"
          ],
          lesson: "Las personalizaciones extensas elevan costos y fallas."
        }
      }
    ]
  },
  {
    id: "ejec",
    title: "Fase 3 \u2013 Ejecuci\xF3n (Desarrollo & Integraciones)",
    principle: "Control, auditor\xEDa y seguridad; gesti\xF3n de proveedores",
    context: "Se implementan m\xF3dulos e integraciones clave. Debes elegir el enfoque de control y seguimiento.",
    options: [
      {
        id: "exec-a",
        label: "Controles y auditor\xEDas por hitos",
        description: "Revisiones QA independientes, auditor\xEDa de cambios y seguridad.",
        delta: {
          tiempo: -3,
          presupuesto: -6,
          confianza: 6,
          riesgo: -8,
          tags: [
            "qa",
            "audit"
          ],
          lesson: "Los controles por hitos mejoran la calidad y reducen riesgo."
        }
      },
      {
        id: "exec-b",
        label: "Sprints en fast-track con reportes semanales",
        description: "Se prioriza velocidad con reporting b\xE1sico.",
        delta: {
          tiempo: -6,
          presupuesto: -2,
          confianza: 0,
          riesgo: 4,
          tags: [
            "fast-track"
          ],
          lesson: "Fast-track acelera, pero puede ocultar problemas."
        }
      },
      {
        id: "exec-c",
        label: "Delegar control al proveedor principal",
        description: "Menos sobrecarga interna, m\xE1s dependencia del vendor.",
        delta: {
          tiempo: -4,
          presupuesto: -4,
          confianza: -2,
          riesgo: 6,
          tags: [
            "vendor-led"
          ],
          lesson: "Exceso de dependencia del proveedor eleva el riesgo residual."
        }
      }
    ]
  },
  {
    id: "pruebas",
    title: "Fase 4 \u2013 Pruebas y Gesti\xF3n del Cambio",
    principle: "Calidad, adopci\xF3n y comunicaciones",
    context: "Se acerca el go-live. Hay que decidir el enfoque de pruebas y de preparaci\xF3n de usuarios.",
    options: [
      {
        id: "test-a",
        label: "Pruebas integrales + pilotos en \xE1reas cr\xEDticas",
        description: "Casos de negocio end-to-end, UAT formal y piloto controlado.",
        delta: {
          tiempo: -5,
          presupuesto: -7,
          confianza: 6,
          riesgo: -10,
          tags: [
            "uat",
            "pilot"
          ],
          lesson: "UAT fuerte y piloto reducen fallas en producci\xF3n."
        }
      },
      {
        id: "test-b",
        label: "Pruebas funcionales b\xE1sicas + manuales",
        description: "Comprobaciones principales, sin piloto.",
        delta: {
          tiempo: -3,
          presupuesto: -3,
          confianza: 0,
          riesgo: 4,
          tags: [
            "basic-test"
          ],
          lesson: "Pruebas b\xE1sicas pueden dejar brechas ocultas."
        }
      },
      {
        id: "test-c",
        label: "Enfoque m\xEDnimo para no retrasar",
        description: "Se reduce UAT para cumplir fecha p\xFAblica.",
        delta: {
          tiempo: 0,
          presupuesto: -1,
          confianza: -4,
          riesgo: 10,
          tags: [
            "min-test"
          ],
          lesson: "Reducir UAT por tiempo suele salir caro en producci\xF3n."
        }
      }
    ]
  },
  {
    id: "golive",
    title: "Fase 5 \u2013 Puesta en Marcha",
    principle: "Monitoreo, escalamiento y continuidad",
    context: "Se decide el plan de go-live y soporte inicial.",
    options: [
      {
        id: "go-a",
        label: "Go-live gradual con soporte extendido",
        description: "Rollout por oleadas, mesa de ayuda 24/7 y tablero de incidentes.",
        delta: {
          tiempo: -2,
          presupuesto: -6,
          confianza: 6,
          riesgo: -6,
          tags: [
            "phased",
            "support"
          ],
          lesson: "Despliegue gradual y soporte robusto estabilizan el sistema."
        }
      },
      {
        id: "go-b",
        label: "Big-bang con war room",
        description: "Salida \xFAnica, equipo de respuesta inmediata.",
        delta: {
          tiempo: -1,
          presupuesto: -4,
          confianza: 1,
          riesgo: 2,
          tags: [
            "big-bang"
          ],
          lesson: "Big-bang puede funcionar, pero es fr\xE1gil ante sorpresas."
        }
      },
      {
        id: "go-c",
        label: "Go-live forzado por presi\xF3n pol\xEDtica",
        description: "Se sale sin checklist completo.",
        delta: {
          tiempo: 0,
          presupuesto: -1,
          confianza: -6,
          riesgo: 12,
          tags: [
            "forced-go"
          ],
          lesson: "Forzar salida sin checklist eleva fallas y costos reputacionales."
        }
      }
    ]
  }
];
var RANDOM_EVENTS = [
  {
    id: "stakeholder-pushback",
    title: "Resistencia de stakeholders",
    description: "Un \xE1rea clave siente poca participaci\xF3n y bloquea decisiones.",
    triggerChance: 0.35,
    effect: {
      confianza: -6,
      riesgo: 4,
      tags: [
        "low-comm"
      ],
      lesson: "Involucrar stakeholders y comunicar pronto evita bloqueos."
    },
    principle: "Participaci\xF3n y transparencia"
  },
  {
    id: "scope-creep",
    title: "Scope creep",
    description: "Surgen requerimientos no planificados tras ver primeros avances.",
    triggerChance: 0.3,
    effect: {
      tiempo: 4,
      presupuesto: -6,
      riesgo: 5,
      tags: [
        "change-control"
      ],
      lesson: "Control de cambios protege cronograma y costo."
    },
    principle: "Control de cambios"
  },
  {
    id: "vendor-delay",
    title: "Demora del proveedor",
    description: "El proveedor clave reprograma entregables por carga de trabajo.",
    triggerChance: 0.25,
    effect: {
      tiempo: 5,
      riesgo: 3,
      tags: [
        "vendor-risk"
      ],
      lesson: "Gestionar proveedores cr\xEDticos y SLA."
    },
    principle: "Gesti\xF3n de proveedores"
  },
  {
    id: "security-gap",
    title: "Hallazgo de brecha de seguridad",
    description: "Auditor\xEDa detecta configuraci\xF3n insegura en un m\xF3dulo.",
    triggerChance: 0.2,
    effect: {
      presupuesto: -5,
      riesgo: 6,
      tags: [
        "security"
      ],
      lesson: "Seguridad by-design y hardening temprano."
    },
    principle: "Seguridad y cumplimiento"
  }
]