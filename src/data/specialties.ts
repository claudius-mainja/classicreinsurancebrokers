export interface Specialty {
  name: string;
  slug: string;
  description: string;
  fullDescription: string;
  features: string[];
  benefits: string[];
  process: string[];
}

export const specialties: Specialty[] = [
  {
    name: 'Aviation',
    slug: 'aviation',
    description:
      'Specialist aviation reinsurance broking for airline fleets, general aviation, airports, and aviation products liability — connecting insurers with global aviation markets.',
    fullDescription:
      'Classic Reinsurance Brokers provides specialist aviation reinsurance intermediary services covering airline hull and liability, general aviation, airport operators liability, aviation products liability, and space risks. We connect insurance companies with leading aviation reinsurance markets including Lloyd\'s and London company market specialists, structuring placements for diverse aviation exposures across Africa.',
    features: [
      'Airline Hull & Liability — Comprehensive cover for passenger and cargo airline fleets including hull damage, passenger liability, baggage liability, and third-party liability for commercial carriers across Africa',
      'General Aviation (Private & Business) — Reinsurance solutions for private aircraft, corporate flight departments, charter operators, and flying clubs operating light aircraft and business jets across the region',
      'Helicopter Operations — Specialised cover for helicopter fleets engaged in offshore oil and gas support, emergency medical services, tourism, and utility operations in challenging African environments',
      'Airport Operators Liability — Cover for airport authorities and ground handling operators against third-party bodily injury, property damage, and premises liability arising from airport operations',
      'Aviation Products Liability — Protection for aviation component manufacturers, maintenance and repair organisations, and distributors against claims arising from defective products or faulty workmanship',
      'Hangarkeepers Liability — Cover for hangar and storage facility operators against loss or damage to customer aircraft while in their care, custody, or control on the ground',
    ],
    benefits: [
      'Direct access to Lloyd\'s and London aviation market',
      'Specialist aviation underwriting expertise',
      'Facultative capacity for large fleets and high-value hulls',
      'Claims advocacy with aviation loss adjusters',
      'Regular aviation market intelligence and updates',
    ],
    process: [
      'Aviation Risk Assessment',
      'Market Selection & Engagement',
      'Programme Structuring',
      'Placement & Renewal Management',
    ],
  },
  {
    name: "Bankers' Blanket",
    slug: 'bankers-blanket',
    description:
      "Comprehensive bankers' blanket reinsurance covering financial institution bonds, professional indemnity, and crime-related exposures for banks and financial services firms.",
    fullDescription:
      "Our Bankers' Blanket reinsurance solutions provide insurance companies with access to specialist capacity for financial institution bonds covering employee dishonesty, premises loss, in-transit loss, forgery, and computer crime. We connect insurers with leading financial lines reinsurers, structuring programmes tailored to the unique risk profiles of banks, microfinance institutions, and other financial services firms across Zimbabwe and Africa.",
    features: [
      'Employee Dishonesty Bond — Cover for financial institutions against direct financial loss caused by dishonest, fraudulent, or criminal acts committed by employees acting alone or in collusion with others',
      'Premises Loss Cover — Protection for loss of cash, securities, and valuables held on the insured\'s premises resulting from theft, burglary, robbery, or mysterious disappearance within banking halls',
      'In-Transit Loss Cover — Cover for cash, bullion, securities, and other valuables while being transported between premises, branches, or to and from central banks and clearing houses',
      'Forgery & Alteration Cover — Protection against financial loss arising from forged cheques, altered payment instructions, counterfeit instruments, and fraudulent documentation presented to financial institutions',
      'Computer Crime Cover — Cover for unauthorised access, fraudulent data input, hacking, malware attacks, and electronic fund transfers made fraudulently through the institution\'s computer systems',
      'Directors & Officers Liability — Indemnity for directors and officers of financial institutions against claims alleging wrongful acts, breach of duty, negligence, or mismanagement in their professional capacity',
    ],
    benefits: [
      'Specialist financial lines reinsurer relationships',
      'Deep understanding of banking and financial institution risks',
      'Bespoke programme structuring for diverse financial services',
      'Claims advocacy with specialist financial crime adjusters',
      'Regulatory compliance support for financial institutions',
    ],
    process: [
      'Financial Institution Risk Review',
      'Capacity Sourcing',
      'Programme Design',
      'Placement & Compliance Support',
    ],
  },
  {
    name: 'Construction Projects',
    slug: 'construction-projects',
    description:
      'Construction project reinsurance covering civil engineering, building construction, and infrastructure development risks across Africa — from small developments to major infrastructure.',
    fullDescription:
      'Classic Reinsurance Brokers provides specialist construction project reinsurance broking services for insurers covering civil engineering works, building construction, infrastructure development, and erection projects across Africa. We access facultative and treaty capacity from leading engineering reinsurers, structuring comprehensive programmes that protect contractors, developers, and project owners throughout the construction lifecycle.',
    features: [
      'Contractors All Risks (CAR) — All-risk property cover for building and civil engineering projects under construction, including materials, temporary works, and contractor\'s plant on site throughout the contract period',
      'Erection All Risks (EAR) — Specialised cover for the erection, installation, and commissioning of plant, machinery, steel structures, and industrial equipment during the construction and testing phases',
      'Civil Engineering Completed Works — Cover for completed infrastructure such as roads, bridges, dams, and tunnels against physical loss or damage during the defects liability and maintenance period',
      'Advance Loss of Profits (ALOP) — Indemnity for loss of revenue or additional costs incurred when a project is delayed beyond the scheduled completion date due to a material damage loss insured under CAR or EAR',
      'Plant & Equipment Insurance — Protection for contractor\'s plant, machinery, tools, and construction equipment including mobile plant, cranes, excavators, and temporary site facilities against physical damage',
      'Professional Indemnity for Contractors — Cover for design-and-build contractors, consulting engineers, and project managers against claims arising from professional negligence, design errors, or inadequate specifications',
    ],
    benefits: [
      'Global engineering and construction reinsurer relationships',
      'Project-specific facultative capacity for major developments',
      'Technical risk assessment and engineering support',
      'Construction claims advocacy expertise',
      'Contract advisory and policy wording guidance',
    ],
    process: [
      'Project & Technical Risk Assessment',
      'Market Tender & Capacity Sourcing',
      'Multi-Layered Programme Design',
      'Placement & Construction Monitoring',
    ],
  },
  {
    name: 'Cyber',
    slug: 'cyber',
    description:
      'Cyber reinsurance broking for data breach, ransomware, network liability, and cybercrime exposures — connecting insurers with the rapidly evolving cyber reinsurance market.',
    fullDescription:
      'We provide specialist cyber reinsurance intermediary services covering data breach response, ransomware, network security liability, privacy liability, business interruption, and cybercrime. Our team connects insurance companies with leading cyber reinsurers, structuring programmes that address the growing and evolving cyber risk landscape facing businesses across Zimbabwe and Africa.',
    features: [
      'Data Breach Response & Notification — Cover for costs associated with managing a data breach including forensic investigation, legal counsel, notification to affected parties, credit monitoring, and public relations support',
      'Ransomware & Extortion Cover — Protection against extortion demands by threat actors who have encrypted systems or stolen data, including ransom payments, digital forensics, and system restoration costs',
      'Network Security & Privacy Liability — Indemnity for third-party claims arising from failure of network security resulting in unauthorised access, data exfiltration, virus transmission, or denial of service attacks',
      'Cyber Business Interruption — Cover for loss of income and increased operating costs when network systems are rendered inoperable by a cyber incident, including dependent business interruption from supplier or customer outages',
      'Cybercrime & Social Engineering Fraud — Protection against fraudulent funds transfers, invoice manipulation, CEO fraud, and other socially engineered schemes that trick employees into authorising payments or disclosing sensitive data',
      'Media Liability — Cover for businesses engaged in content creation and publishing against claims of defamation, libel, slander, copyright infringement, and invasion of privacy arising from digital or broadcast media',
    ],
    benefits: [
      'Access to leading global cyber reinsurance capacity',
      'Deep understanding of the African cyber risk landscape',
      'Incident response and breach management support',
      'Portfolio accumulation and aggregation analysis',
      'Regular cyber market updates and threat intelligence',
    ],
    process: [
      'Cyber Exposure Assessment',
      'Market Strategy & Capacity Sourcing',
      'Programme Design & Structure',
      'Placement & Incident Response Integration',
    ],
  },
  {
    name: 'Kidnap & Ransom',
    slug: 'kidnap-and-ransom',
    description:
      'Kidnap and ransom reinsurance broking for extortion, detention, and hijack exposures facing corporates, families, and high-net-worth individuals operating in high-risk environments.',
    fullDescription:
      'Classic Reinsurance Brokers provides specialist Kidnap & Ransom reinsurance broking services covering kidnap, extortion, wrongful detention, product extortion, and hijack exposures. We connect insurance companies with specialist K&R reinsurers with access to leading crisis response consultants, security advisors, and negotiation experts who provide 24/7 incident response support across Africa and worldwide.',
    features: [
      'Kidnap & Ransom Cover — Indemnity for ransom payments, loss of ransom in transit, and related expenses including crisis consultant fees, legal advice, and medical care following a kidnap incident anywhere in the world',
      'Wrongful Detention Insurance — Cover for individuals unlawfully detained, arrested, or imprisoned by government authorities, including reimbursement for legal costs, loss of earnings, and family support expenses',
      'Product Extortion Cover — Protection against threats to contaminate, tamper with, or adulterate products unless an extortion demand is met, covering ransom payments, product recall costs, and lost profits',
      'Hijack & Hi-Jacking Detention — Cover for aircraft, marine vessels, or vehicles that are hijacked or unlawfully seized, including detention expenses, loss of hire, and costs incurred during the incident period',
      'Threat & Hoax Cover — Reimbursement for costs incurred responding to credible threats or hoaxes including evacuation, security sweeps, business interruption, and public relations management',
      'Crisis Management & Response Services — Access to 24/7 specialist crisis response consultants, security advisors, negotiators, and psychological support professionals who manage incidents from initial alert through resolution',
    ],
    benefits: [
      'Access to specialist K&R reinsurance markets',
      'Integration with leading crisis response providers',
      '24/7 incident response and negotiation support',
      'Coverage for high-risk African operating environments',
      'Discretion and confidentiality throughout the process',
    ],
    process: [
      'Security & Risk Assessment',
      'Specialist Market Engagement',
      'Programme Structure & Crisis Response Setup',
      'Placement & Incident Response Drills',
    ],
  },
  {
    name: 'Marine Hull',
    slug: 'marine-hull',
    description:
      'Marine hull reinsurance broking for ocean-going vessels, inland waterway craft, fishing vessels, and marine liabilities — connecting insurers with global marine markets.',
    fullDescription:
      'Our Marine Hull reinsurance solutions cover ocean-going vessels, inland waterway craft, fishing vessels, tugs, barges, and marine liabilities. We connect insurance companies with leading marine reinsurers including Lloyd\'s and international marine markets, structuring hull and machinery, increased value, and protection & indemnity placements for diverse marine exposures across African waters.',
    features: [
      'Ocean-Going Vessel Hull & Machinery — Cover for the physical structure, propulsion systems, machinery, and equipment of ocean-going cargo ships, tankers, bulk carriers, and container vessels trading internationally',
      'Inland Waterway Craft — Protection for barges, riverboats, ferries, and other vessels operating on African lakes, rivers, and inland waterways including the Zambezi, Kariba, and Lake Victoria systems',
      'Fishing Vessel Insurance — Specialised hull and machinery cover for commercial fishing vessels including trawlers, long-liners, and purse seiners operating in African coastal waters including the Indian Ocean and Atlantic',
      'Tugs, Barges & Workboats — Cover for harbour tugs, pusher tugs, deck barges, hopper barges, and specialist workboats engaged in port operations, dredging, and offshore support services',
      'Increased Value (IV) Cover — Additional hull cover that supplements the primary insured value, protecting the vessel owner\'s uninsured interest and reducing exposure to average adjustments and deductibles',
      'Protection & Indemnity (P&I) — Cover for third-party liabilities including collision liability, cargo damage, pollution, wreck removal, crew injury, death claims, and port charges not covered by standard hull policies',
    ],
    benefits: [
      'Direct relationships with Lloyd\'s marine syndicates',
      'Deep marine underwriting and surveying expertise',
      'Facultative capacity for high-value and specialist vessels',
      'Marine claims advocacy with specialist adjusters',
      'Portfolio intelligence and marine market insights',
    ],
    process: [
      'Vessel & Fleet Risk Assessment',
      'Marine Market Engagement',
      'Hull & P&I Programme Design',
      'Placement & Claims Advocacy',
    ],
  },
  {
    name: 'Power Projects',
    slug: 'power-projects',
    description:
      'Power project reinsurance covering thermal, solar, hydro, wind, and renewable energy installations across Africa — from construction through operational phases.',
    fullDescription:
      'Classic Reinsurance Brokers provides specialist power project reinsurance broking services covering thermal power plants, solar photovoltaic installations, hydroelectric facilities, wind farms, and renewable energy projects. We connect insurance companies with global energy reinsurance capacity, structuring comprehensive programmes that protect power projects from the construction phase through commissioning, operational, and maintenance periods across Africa.',
    features: [
      'Thermal Power Plant Construction & Operation — Comprehensive cover for coal, gas, diesel, and heavy fuel oil power plants during construction, commissioning, and operational phases including machinery breakdown and business interruption',
      'Solar Photovoltaic Installations — Protection for utility-scale solar farms and commercial rooftop arrays including photovoltaic panels, inverters, tracking systems, and balance-of-plant against physical damage and performance shortfalls',
      'Hydroelectric Facility Insurance — Cover for hydroelectric power stations including dams, penstocks, turbines, generators, and water management infrastructure during both construction and operational stages',
      'Wind Farm Construction & Operation — Specialised insurance for onshore and offshore wind energy projects covering turbines, towers, foundations, electrical infrastructure, and revenue loss during construction and operation',
      'Renewable Energy Project Cover — Solutions for emerging renewable technologies including biomass, biogas, geothermal, and battery energy storage systems from the development and construction phase through commercial operation',
      'Power Transmission & Distribution Lines — Cover for high-voltage transmission networks, substations, transformers, switchgear, and distribution infrastructure against physical damage and resultant business interruption losses',
    ],
    benefits: [
      'Global energy and power reinsurance relationships',
      'Technical engineering risk assessment capability',
      'Multi-phase programme structuring (construction → operations)',
      'Business interruption and delay in start-up expertise',
      'Environmental liability and decommissioning support',
    ],
    process: [
      'Power Project Technical Review',
      'Global Energy Market Engagement',
      'Construction & Operational Programme Design',
      'Placement & Ongoing Risk Monitoring',
    ],
  },
  {
    name: 'Political Risks',
    slug: 'political-risks',
    description:
      'Political risk reinsurance covering expropriation, currency inconvertibility, contract frustration, and trade credit exposures for cross-border investments and trade across Africa.',
    fullDescription:
      'We provide specialist political risk reinsurance intermediary services covering expropriation, confiscation, deprivation, currency inconvertibility and transfer restriction, contract frustration, and trade credit risks. Our team connects insurance companies with leading political risk and trade credit reinsurers, including multilateral agencies and Lloyd\'s specialists, structuring programmes that support cross-border investment and trade across Africa.',
    features: [
      'Expropriation & Confiscation — Indemnity against loss of assets, equity, or ownership rights when a host government nationalises, expropriates, confiscates, or deprives an investor of their investment without fair compensation',
      'Currency Inconvertibility & Transfer Restriction — Cover when an investor is unable to legally convert local currency into hard currency or transfer funds out of the host country due to government exchange controls or moratoria',
      'Contract Frustration & Breach of Contract — Protection when a government entity breaches or repudiates a contract, including failure to pay, arbitrary contract cancellation, or denial of agreed terms without legal remedy',
      'Political Violence & Sabotage — Cover for physical damage, business interruption, and asset loss resulting from politically motivated acts including rebellion, insurrection, coup d\'état, civil unrest, and sabotage',
      'Trade Credit Insurance — Indemnity against non-payment by buyers due to political events such as war, civil disturbance, import or export embargoes, cancellation of import licences, and sovereign payment defaults',
      'Non-Honouring of Sovereign Obligations — Cover for lenders, bondholders, and investors against a sovereign state\'s failure to honour its financial obligations including loan repayments, bond redemptions, or guaranteed payment undertakings',
    ],
    benefits: [
      'Access to Lloyd\'s, multilateral, and specialty political risk markets',
      'Deep understanding of African political and regulatory environments',
      'Structured solutions for cross-border investors and lenders',
      'Claims advocacy with specialist political risk adjusters',
      'Country risk intelligence and monitoring services',
    ],
    process: [
      'Country & Investment Risk Assessment',
      'Specialist Market Engagement',
      'Multi-Tranche Programme Design',
      'Placement & Ongoing Country Monitoring',
    ],
  },
  {
    name: 'Political Violence & Terrorism',
    slug: 'political-violence-terrorism',
    description:
      'Political violence and terrorism reinsurance covering sabotage, riots, civil commotion, strikes, terrorism, and malicious damage for insurers across Africa.',
    fullDescription:
      'Classic Reinsurance Brokers provides specialist political violence and terrorism reinsurance broking services covering sabotage, riots, civil commotion, strikes (SRCC), terrorism, malicious damage, and war risks for both property and casualty exposures. We connect insurance companies with leading terrorism and political violence reinsurers, structuring pooled and standalone programmes that address the complex and evolving security environment in Africa.',
    features: [
      'Sabotage, Riots, Civil Commotion (SRCC) — Cover for physical loss or damage to property caused by riots, civil commotion, labour disturbances, sabotage, and malicious acts by third parties during public disorder events',
      'Strikes & Lockouts — Protection against property damage and business interruption losses arising from organised work stoppages, strikes, picket-line violence, and employer-imposed lockouts at commercial or industrial premises',
      'Terrorism & Malicious Damage — Indemnity for loss or damage caused by acts of terrorism including bombings, arson, armed attacks, and malicious damage perpetrated by individuals or groups pursuing political, ideological, or religious objectives',
      'War & Civil War Risks — Cover for property damage, business interruption, and asset loss resulting from declared or undeclared war, invasion, civil war, insurrection, rebellion, revolution, and military coup d\'état',
      'Property & Business Interruption Cover — Comprehensive coverage combining material damage to buildings, contents, and stock with consequential business interruption losses following a political violence or terrorism event',
      'Life & Personal Accident Cover for Violence — Personal accident and life cover for individuals who sustain bodily injury, disablement, or death as a direct result of political violence, terrorist acts, riots, or civil commotion',
    ],
    benefits: [
      'Access to global terrorism and political violence reinsurance pools',
      'Standalone and follow-form programme structuring',
      'Aggregation and accumulation exposure monitoring',
      'Claims advocacy with specialist violence adjusters',
      'Security risk intelligence and threat level monitoring',
    ],
    process: [
      'Security Environment Assessment',
      'Pool & Market Engagement',
      'Terrorism & Violence Programme Design',
      'Placement & Threat Monitoring',
    ],
  },
];

export function getSpecialtyBySlug(slug: string): Specialty | undefined {
  return specialties.find((s) => s.slug === slug);
}
