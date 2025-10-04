[
  {
    id: "plan",
    title: "Phase 1 – Planning",
    principle: "Strategic alignment and risk management",
    context: "An ERP will be implemented for a public entity. You must prepare the initial governance framework, plan and role structure.",
    options: [
      {
        id: "plan-a",
        label: "Establish governance committee and RACI matrix",
        description: "Define clear roles (sponsor, PMO, internal audit). Kickoff sessions with key stakeholders.",
        delta: {
          tiempo: -5,
          presupuesto: -5,
          confianza: 8,
          riesgo: -8,
          tags: [
            "good-roles",
            "stakeholders"
          ],
          lesson: "Clear roles and responsibilities reduce risks."
        }
      },
      {
        id: "plan-b",
        label: "Minimum viable plan, quick start",
        description: "Reduce formal startup to gain speed. Light documentation and ad-hoc decisions.",
        delta: {
          tiempo: 5,
          presupuesto: 0,
          confianza: -4,
          riesgo: 8,
          tags: [
            "fast-start",
            "weak-governance"
          ],
          lesson: "Speed without governance increases risk."
        }
      },
      {
        id: "plan-c",
        label: "Brief consulting for risk assessment",
        description: "Bring in a third party for early risk mapping (cyber, processes, adoption).",
        delta: {
          tiempo: -3,
          presupuesto: -8,
          confianza: 3,
          riesgo: -10,
          tags: [
            "risk-assessment"
          ],
          lesson: "Early risk assessment prevents surprises."
        }
      }
    ]
  },
  {
    id: "diseno",
    title: "Phase 2 – Design and Scope",
    principle: "Standardization vs. customization; change control",
    context: "You must define the functional scope and level of ERP customization versus product best practices.",
    options: [
      {
        id: "design-a",
        label: "Adopt standard ERP processes (low-code)",
        description: "Minimize customizations and adapt the process to the system.",
        delta: {
          tiempo: -5,
          presupuesto: -5,
          confianza: 5,
          riesgo: -6,
          tags: [
            "std-process"
          ],
          lesson: "Adopting standards reduces complexity and risk."
        }
      },
      {
        id: "design-b",
        label: "Moderate customization approved by committee",
        description: "Customs only where there is clear ROI and with change control.",
        delta: {
          tiempo: 0,
          presupuesto: -8,
          confianza: 2,
          riesgo: -2,
          tags: [
            "custom-governed"
          ],
          lesson: "Controlled customization can add value."
        }
      },
      {
        id: "design-c",
        label: "Extensive customization to fit current processes",
        description: "It is decided to replicate legacy processes to avoid resistance.",
        delta: {
          tiempo: 8,
          presupuesto: -12,
          confianza: -3,
          riesgo: 12,
          tags: [
            "custom-heavy"
          ],
          lesson: "Extensive customizations increase costs and failures."
        }
      }
    ]
  },
  {
    id: "ejec",
    title: "Phase 3 – Execution (Development & Integrations)",
    principle: "Control, audit and security; vendor management",
    context: "Key modules and integrations are implemented. You must choose the control and monitoring approach.",
    options: [
      {
        id: "exec-a",
        label: "Controls and audits by milestones",
        description: "Independent QA reviews, change audit and security.",
        delta: {
          tiempo: -3,
          presupuesto: -6,
          confianza: 6,
          riesgo: -8,
          tags: [
            "qa",
            "audit"
          ],
          lesson: "Milestone controls improve quality and reduce risk."
        }
      },
      {
        id: "exec-b",
        label: "Fast-track sprints with weekly reports",
        description: "Speed is prioritized with basic reporting.",
        delta: {
          tiempo: -6,
          presupuesto: -2,
          confianza: 0,
          riesgo: 4,
          tags: [
            "fast-track"
          ],
          lesson: "Fast-track accelerates, but can hide problems."
        }
      },
      {
        id: "exec-c",
        label: "Delegate control to main provider",
        description: "Less internal overhead, more dependency on vendor.",
        delta: {
          tiempo: -4,
          presupuesto: -4,
          confianza: -2,
          riesgo: 6,
          tags: [
            "vendor-led"
          ],
          lesson: "Excessive vendor dependency increases residual risk."
        }
      }
    ]
  },
  {
    id: "pruebas",
    title: "Phase 4 – Testing and Change Management",
    principle: "Quality, adoption and communications",
    context: "Go-live is approaching. You must decide the testing approach and user preparation.",
    options: [
      {
        id: "test-a",
        label: "Comprehensive testing + pilots in critical areas",
        description: "End-to-end business cases, formal UAT and controlled pilot.",
        delta: {
          tiempo: -5,
          presupuesto: -7,
          confianza: 6,
          riesgo: -10,
          tags: [
            "uat",
            "pilot"
          ],
          lesson: "Strong UAT and pilot reduce production failures."
        }
      },
      {
        id: "test-b",
        label: "Basic functional testing + manual",
        description: "Main checks, no pilot.",
        delta: {
          tiempo: -3,
          presupuesto: -3,
          confianza: 0,
          riesgo: 4,
          tags: [
            "basic-test"
          ],
          lesson: "Basic testing can leave hidden gaps."
        }
      },
      {
        id: "test-c",
        label: "Minimal approach to avoid delays",
        description: "UAT is reduced to meet public deadline.",
        delta: {
          tiempo: 0,
          presupuesto: -1,
          confianza: -4,
          riesgo: 10,
          tags: [
            "min-test"
          ],
          lesson: "Reducing UAT for time usually costs more in production."
        }
      }
    ]
  },
  {
    id: "golive",
    title: "Phase 5 – Go-Live",
    principle: "Monitoring, escalation and continuity",
    context: "The go-live and initial support plan is decided.",
    options: [
      {
        id: "go-a",
        label: "Gradual go-live with extended support",
        description: "Rollout in waves, 24/7 help desk and incident dashboard.",
        delta: {
          tiempo: -2,
          presupuesto: -6,
          confianza: 6,
          riesgo: -6,
          tags: [
            "phased",
            "support"
          ],
          lesson: "Gradual deployment and robust support stabilize the system."
        }
      },
      {
        id: "go-b",
        label: "Big-bang with war room",
        description: "Single rollout, immediate response team.",
        delta: {
          tiempo: -1,
          presupuesto: -4,
          confianza: 1,
          riesgo: 2,
          tags: [
            "big-bang"
          ],
          lesson: "Big-bang can work, but is fragile to surprises."
        }
      },
      {
        id: "go-c",
        label: "Forced go-live due to political pressure",
        description: "Go-live without complete checklist.",
        delta: {
          tiempo: 0,
          presupuesto: -1,
          confianza: -6,
          riesgo: 12,
          tags: [
            "forced-go"
          ],
          lesson: "Forcing go-live without checklist increases failures and reputational costs."
        }
      }
    ]
  }
];
var RANDOM_EVENTS = [
  {
    id: "stakeholder-pushback",
    title: "Stakeholder resistance",
    description: "A key area feels little participation and blocks decisions.",
    triggerChance: 0.35,
    effect: {
      confianza: -6,
      riesgo: 4,
      tags: [
        "low-comm"
      ],
      lesson: "Involving stakeholders and communicating early prevents blocks."
    },
    principle: "Participation and transparency"
  },
  {
    id: "scope-creep",
    title: "Scope creep",
    description: "Unplanned requirements arise after seeing first progress.",
    triggerChance: 0.3,
    effect: {
      tiempo: 4,
      presupuesto: -6,
      riesgo: 5,
      tags: [
        "change-control"
      ],
      lesson: "Change control protects schedule and cost."
    },
    principle: "Change control"
  },
  {
    id: "vendor-delay",
    title: "Vendor delay",
    description: "The key vendor reschedules deliverables due to workload.",
    triggerChance: 0.25,
    effect: {
      tiempo: 5,
      riesgo: 3,
      tags: [
        "vendor-risk"
      ],
      lesson: "Manage critical vendors and SLA."
    },
    principle: "Vendor management"
  },
  {
    id: "security-gap",
    title: "Security gap finding",
    description: "Audit detects insecure configuration in a module.",
    triggerChance: 0.2,
    effect: {
      presupuesto: -5,
      riesgo: 6,
      tags: [
        "security"
      ],
      lesson: "Security by-design and early hardening."
    },
    principle: "Security and compliance"
  }
]
