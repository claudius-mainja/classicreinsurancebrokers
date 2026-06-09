export interface Product {
  name: string;
  slug: string;
  subtitle: string;
  description: string;
  fullDescription: string;
  features: string[];
  benefits: string[];
  process: string[];
}

export const products: Product[] = [
  {
    name: 'Motor Insurance',
    slug: 'motor-insurance',
    subtitle:
      'Professional reinsurance broking for motor portfolios, including private and commercial vehicle fleets. Treaty and facultative solutions for insurance companies across Zimbabwe.',
    description:
      'Our motor reinsurance solutions provide insurance companies with access to capacity for private car, commercial vehicle, and fleet portfolios.',
    fullDescription:
      'Classic Reinsurance Brokers arranges treaty and facultative motor reinsurance placements for insurance companies across Zimbabwe. We access capacity from leading regional and international reinsurers, structuring proportional and non-proportional treaties that give our clients the stability and capacity they need to write motor business with confidence.',
    features: [
      'Private Vehicle Comprehensive — Reinsurance capacity for private passenger car portfolios covering collision, theft, fire, and third-party liability for private motorists across Zimbabwe',
      'Commercial Vehicle Fleets — Reinsurance support for commercial fleet programmes covering delivery vans, trucks, buses, and specialised vehicles operating across Zimbabwe and cross-border',
      'Third-Party Only & Third-Party Fire/Theft — Treaty and facultative solutions for TPO and TPF&T motor books, providing capacity for insurers writing entry-level and basic motor covers',
      'Motor Trade Policies — Reinsurance for motor trade risks including dealer stock, repairer premises, road risk, and garage liability for automotive businesses throughout Zimbabwe',
      'Fleet Programme Management — Structured reinsurance programmes for large corporate and government fleets, providing consistent capacity and multi-year stability for fleet operators',
      'Pool & Association Schemes — Reinsurance solutions for motor insurance pools and association schemes, enabling collective underwriting and risk-sharing among multiple insurers',
    ],
    benefits: [
      'Access to leading regional and international motor reinsurance capacity',
      'Proportional and non-proportional treaty structures tailored to your portfolio',
      'Claims advocacy and recovery support across motor classes',
      'Regular market updates and capacity intelligence',
      'Dedicated broking team with deep motor reinsurance expertise',
    ],
    process: [
      'Portfolio Risk Assessment',
      'Market Strategy & Tender',
      'Programme Structuring',
      'Placement & Binding',
    ],
  },
  {
    name: 'Household',
    slug: 'household',
    subtitle:
      'Reinsurance intermediary services for household insurance portfolios. Comprehensive coverage solutions for insurers serving homeowners and renters across Zimbabwe.',
    description:
      'Household reinsurance solutions covering buildings, contents, and personal liability for insurance companies.',
    fullDescription:
      'We provide professional reinsurance broking services for household insurance portfolios, covering buildings, contents, personal liability, and valuable items. Our team structures treaty and facultative placements that give insurance companies the capacity to write household business with confidence across urban and suburban markets.',
    features: [
      'Buildings & Structures — Reinsurance for residential building covers including walls, roofs, foundations, and permanent fixtures against fire, storm, flood, and allied perils across Zimbabwe',
      'Household Contents — Treaty capacity for household contents insurance covering furniture, appliances, clothing, and personal belongings against theft, fire, and accidental damage in homes',
      'Personal Liability — Reinsurance for homeowners and occupiers liability covers protecting insureds against legal liability for injury or damage occurring on residential premises',
      'Valuable Items (Jewellery, Art, Electronics) — Facultative and treaty solutions for high-value items including jewellery, fine art, antiques, and expensive electronics requiring specified all-risks cover',
      'Home Emergency Cover — Reinsurance for emergency assistance products covering burst pipes, electrical failure, roof damage, and urgent repairs for residential properties across Zimbabwe',
      'Renters & Landlord Insurance — Capacity for tenant contents and landlord building insurance programmes, addressing the growing rental property market in urban centres across Zimbabwe',
    ],
    benefits: [
      'Dedicated household reinsurance specialists',
      'Competitive treaty terms from leading regional markets',
      'Coverage tailored to Zimbabwean property market conditions',
      'Claims advocacy and loss recovery support',
      'Regular portfolio performance reviews and reporting',
    ],
    process: [
      'Portfolio Analysis',
      'Market Engagement',
      'Programme Design',
      'Placement & Ongoing Support',
    ],
  },
  {
    name: 'Engineering',
    slug: 'engineering',
    subtitle:
      'Specialist engineering reinsurance broking for Contractors All Risks, Erection All Risks, plant and machinery, and engineering projects across Zimbabwe and Africa.',
    description:
      'Comprehensive engineering reinsurance solutions for contractors, developers, and engineering firms.',
    fullDescription:
      'Classic Reinsurance Brokers provides specialist engineering reinsurance broking services covering Contractors All Risks (CAR), Erection All Risks (EAR), Plant & Machinery, Machinery Breakdown, and Electronic Equipment risks. We connect insurance companies with global engineering reinsurance markets, structuring bespoke facultative and treaty solutions for major infrastructure and industrial projects.',
    features: [
      'Contractors All Risks (CAR) — Reinsurance for construction projects covering civil works, buildings, infrastructure, and associated risks during the construction phase for contractors across Africa',
      'Erection All Risks (EAR) — Capacity for plant and machinery erection projects including steel structures, industrial equipment installation, and mechanical/electrical works at project sites',
      'Plant & Machinery Insurance — Treaty and facultative solutions for construction and industrial plant including excavators, cranes, loaders, graders, and earthmoving equipment operating on site',
      'Machinery Breakdown — Reinsurance covering sudden and unforeseen breakdown of industrial machinery, including motors, generators, compressors, pumps, and production equipment in manufacturing plants',
      'Electronic Equipment Insurance — Coverage for electronic data processing equipment, telecommunications infrastructure, control systems, and office technology against breakdown and external perils',
      'Advance Loss of Profits (ALOP) — Reinsurance for delay in start-up and consequential loss following material damage to engineering projects, protecting revenue streams during extended project completion',
    ],
    benefits: [
      'Deep technical knowledge of engineering risk assessment',
      'Access to global engineering reinsurance capacity',
      'Bespoke facultative solutions for major projects',
      'Claims advocacy with engineering loss adjusters',
      'Project lifecycle support from design to completion',
    ],
    process: [
      'Technical Risk Assessment',
      'Capacity Sourcing',
      'Programme Structuring',
      'Placement & Risk Monitoring',
    ],
  },
  {
    name: 'Assets All Risks',
    slug: 'assets-all-risks',
    subtitle:
      'Comprehensive Assets All Risks reinsurance broking for commercial and industrial property portfolios, including fire, burglary, and all-risk covers for insurance companies.',
    description:
      'Assets All Risks reinsurance solutions covering commercial property, industrial assets, and business interruption.',
    fullDescription:
      'Our Assets All Risks reinsurance solutions provide insurance companies with comprehensive capacity for commercial and industrial property portfolios. We structure treaty and facultative placements covering fire, burglary, all risks, business interruption, and terrorism, backed by strong relationships with leading global and regional property reinsurers.',
    features: [
      'Fire & Perils — Reinsurance for commercial and industrial property portfolios covering fire, lightning, explosion, storm, flood, earthquake, and allied perils across Zimbabwe and the region',
      'Burglary & Theft — Treaty capacity for burglary and theft covers protecting commercial premises, retail establishments, warehouses, and offices against forced entry and property loss',
      'All Risks Cover — Comprehensive all-risks reinsurance for commercial assets including stock, equipment, and movable property on a worldwide basis with broad accidental damage protection',
      'Business Interruption — Reinsurance for consequential loss following property damage, covering loss of gross profit, increased cost of working, and extended indemnity periods for businesses',
      'Terrorism & Sabotage — Capacity for terrorism and sabotage covers protecting commercial properties, critical infrastructure, and public venues against politically motivated damage and disruption',
      'Money Insurance — Reinsurance solutions for money covers protecting cash in transit, cash on premises, and personal accident cover for employees handling cash for commercial clients',
    ],
    benefits: [
      'Extensive property reinsurer relationships globally and regionally',
      'Multi-layered programme structuring for high-value risks',
      'Catastrophe exposure management and modelling support',
      'Claims advocacy and loss recovery expertise',
      'Regular portfolio performance analytics and reporting',
    ],
    process: [
      'Exposure Assessment',
      'Market Strategy',
      'Layered Programme Design',
      'Placement & Annual Review',
    ],
  },
  {
    name: 'Liability Insurance',
    slug: 'liability-insurance',
    subtitle:
      'Professional liability reinsurance broking for general liability, product liability, professional indemnity, and directors and officers insurance portfolios.',
    description:
      'Comprehensive liability reinsurance solutions for insurance companies serving commercial and professional clients.',
    fullDescription:
      'Classic Reinsurance Brokers arranges liability reinsurance placements covering General Liability, Product Liability, Professional Indemnity, Directors & Officers, Employment Practices Liability, and Environmental Liability. We connect insurance companies with specialist liability reinsurers across global and regional markets, structuring programmes that provide the capacity and expertise needed for complex liability exposures.',
    features: [
      'General Liability (Public & Products) — Reinsurance for public and product liability exposures covering legal liability for third-party bodily injury and property damage arising from business operations',
      'Professional Indemnity — Capacity for professional indemnity covers protecting lawyers, accountants, engineers, architects, medical professionals, and consultants against negligence claims in Zimbabwe',
      'Directors & Officers Liability — Reinsurance for D&O liability protecting company directors and officers against claims alleging breach of duty, wrongful acts, or mismanagement in corporate decision-making',
      'Employment Practices Liability — Treaty solutions for EPLI covering claims related to wrongful dismissal, discrimination, harassment, and other employment-related disputes in the workplace',
      'Environmental Liability — Reinsurance for environmental impairment liability covering gradual and sudden pollution events, clean-up costs, and third-party claims arising from contaminated sites',
      'Cyber Liability — Capacity for cyber insurance covers including data breach response, business interruption from system attacks, ransomware extortion, and privacy liability for businesses across Africa',
    ],
    benefits: [
      'Specialist liability reinsurer relationships across major markets',
      'Deep underwriting expertise in emerging liability classes',
      'Facultative capacity for complex and high-exposure risks',
      'Claims advocacy with specialist liability adjusters',
      'Technical guidance on policy wordings and coverage',
    ],
    process: [
      'Liability Exposure Review',
      'Market Selection',
      'Programme Structure',
      'Placement & Claims Support',
    ],
  },
  {
    name: 'Group Personal Accidents',
    slug: 'group-personal-accidents',
    subtitle:
      'Group personal accident reinsurance broking for employer-sponsored schemes, associations, and affinity groups across Zimbabwe and Africa.',
    description:
      'Group personal accident reinsurance solutions for employer schemes, associations, and groups.',
    fullDescription:
      'We provide professional reinsurance intermediary services for Group Personal Accident portfolios, covering employer-sponsored schemes, association groups, and affinity programmes. Our team structures treaty and facultative placements that give insurance companies the capacity and expertise to write GPA business across diverse occupational and demographic groups.',
    features: [
      'Employer-Sponsored GPA Schemes — Reinsurance for employer-provided group personal accident schemes covering employees against accidental death, permanent disablement, and medical expenses at work',
      'Association & Affinity Group Schemes — Treaty capacity for GPA programmes underwritten through professional associations, trade unions, and affinity groups offering accident benefits to their members',
      'Occupational Accident Cover — Reinsurance for occupation-specific accident covers tailored for high-risk industries including mining, construction, agriculture, and manufacturing across Zimbabwe',
      'Travel Accident Cover — Capacity for travel accident covers providing capital benefits for accidental death or disablement occurring while insured persons are travelling on domestic or international journeys',
      '24-Hour Accident Cover — Comprehensive round-the-clock accident protection covering insured persons whether at work, at home, or engaged in leisure activities anywhere in the world',
      'Education & School Schemes — Reinsurance for student accident programmes covering pupils and students during school hours, sporting activities, excursions, and educational travel across Zimbabwe',
    ],
    benefits: [
      'Specialist GPA underwriting expertise',
      'Access to competitive treaty capacity',
      'Flexible programme structures for diverse groups',
      'Efficient claims processing and advocacy',
      'Portfolio analytics and claims trend reporting',
    ],
    process: [
      'Scheme Portfolio Analysis',
      'Market Engagement',
      'Treaty/Facultative Structuring',
      'Placement & Renewal Management',
    ],
  },
  {
    name: 'Travel Insurance',
    slug: 'travel-insurance',
    subtitle:
      'Travel insurance reinsurance broking for inbound, outbound, and domestic travel portfolios, including single-trip, multi-trip, and annual policies.',
    description:
      'Travel insurance reinsurance solutions for insurers serving business and leisure travellers.',
    fullDescription:
      'Classic Reinsurance Brokers provides travel insurance reinsurance broking services covering single-trip, multi-trip, annual, and group travel policies. We connect insurance companies with international travel reinsurance capacity, structuring programmes that cover medical expenses, trip cancellation, baggage loss, personal accident, and emergency evacuation for travellers across Africa and worldwide.',
    features: [
      'Single-Trip Travel Insurance — Reinsurance for individual travel policies covering medical expenses, trip disruption, baggage loss, and personal accident for leisure and business travellers abroad',
      'Multi-Trip Annual Policies — Treaty capacity for annual multi-trip travel insurance programmes providing frequent travellers with ongoing cover for medical, cancellation, and baggage risks worldwide',
      'Group Travel Insurance — Reinsurance for group travel schemes covering corporate groups, school tours, sports teams, and pilgrimages with tailored benefits for each travelling group\'s specific needs',
      'Medical Evacuation & Repatriation — Capacity for emergency medical evacuation and repatriation covers ensuring insured travellers receive urgent medical transport to appropriate facilities across Africa',
      'Trip Cancellation & Curtailment — Reinsurance for cancellation and curtailment covers protecting travellers against financial loss when trips are cancelled, interrupted, or cut short due to covered events',
      'Baggage & Personal Effects — Treaty solutions for baggage insurance covering loss, theft, or damage to luggage and personal belongings during air, road, and rail travel internationally',
    ],
    benefits: [
      'Global travel reinsurer relationships',
      '24/7 emergency assistance integration support',
      'Flexible underwriting for diverse traveller profiles',
      'Automated policy administration support',
      'Claims advocacy and medical evacuation coordination',
    ],
    process: [
      'Product Review',
      'Capacity Sourcing',
      'Programme Design',
      'Placement & Assistance Integration',
    ],
  },
  {
    name: 'Goods In Transit',
    slug: 'goods-in-transit',
    subtitle:
      'Goods in transit reinsurance broking for cargo, freight, and logistics insurance portfolios, covering road, rail, air, and maritime transport risks.',
    description:
      'Goods in transit reinsurance solutions for insurers serving cargo and logistics clients.',
    fullDescription:
      'Our Goods In Transit reinsurance solutions cover cargo and freight risks across road, rail, air, and maritime transport modes. We structure treaty and facultative placements that provide insurance companies with reliable capacity for local, cross-border, and international transit exposures, backed by strong relationships with marine and transport reinsurers.',
    features: [
      'Road Transit (Local & Cross-Border) — Reinsurance for goods carried by road including trucks and tankers on local routes within Zimbabwe and cross-border corridors to SADC and regional destinations',
      'Rail Freight Insurance — Capacity for rail freight covers protecting bulk commodities, containerised cargo, and industrial goods transported via national and regional railway networks across Africa',
      'Air Cargo Insurance — Treaty solutions for airfreight covers including general cargo, perishables, high-value goods, and time-sensitive shipments carried on scheduled and charter flights worldwide',
      'Maritime & Inland Marine — Reinsurance for marine cargo and inland marine exposures covering goods shipped by sea, lake, or river as well as goods on inland waterways within the region',
      'Warehouse & Storage Cover — Capacity for stationary risk covers protecting goods held in transit warehouses, distribution centres, bonded stores, and logistics hubs against fire, theft, and damage',
      'Transit All Risks & Named Perils — Comprehensive transit insurance covers on an all-risks or named perils basis, giving insurers flexibility in structuring cargo reinsurance programmes for diverse clients',
    ],
    benefits: [
      'Strong marine and cargo reinsurer relationships',
      'Competitive terms for Southern African transit corridors',
      'Facultative capacity for high-value consignments',
      'Claims advocacy with specialist marine adjusters',
      'Regular market intelligence and capacity updates',
    ],
    process: [
      'Portfolio & Corridor Analysis',
      'Reinsurer Engagement',
      'Programme Structuring',
      'Placement & Claims Support',
    ],
  },
  {
    name: 'Agriculture Insurance',
    slug: 'agriculture-insurance',
    subtitle:
      'Agriculture reinsurance broking for crop, livestock, and weather-index insurance portfolios, supporting food security and agricultural development across Africa.',
    description:
      'Agriculture reinsurance solutions covering crop, livestock, aquaculture, and forestry risks.',
    fullDescription:
      'Classic Reinsurance Brokers provides specialist agriculture reinsurance broking services covering crop insurance, livestock insurance, aquaculture, forestry, and weather-index based products. We connect insurance companies with agricultural reinsurance capacity from leading regional and international markets, supporting food security and agricultural development across Zimbabwe and the broader African market.',
    features: [
      'Crop Insurance (Multi-Peril & Named Peril) — Reinsurance for crop production covers protecting farmers against drought, flood, hail, pest infestation, and disease for staple and cash crops across Zimbabwe',
      'Livestock Insurance — Treaty capacity for livestock mortality covers protecting cattle, poultry, pigs, sheep, and goats against disease, accident, and natural perils on farms and ranches in the region',
      'Aquaculture Insurance — Reinsurance for fish farming operations covering stock mortality, water quality failure, disease outbreaks, and infrastructure damage at aquaculture facilities across Africa',
      'Forestry Insurance — Capacity for commercial forestry plantations covering timber stands against fire, storm, pest infestation, and illegal harvesting throughout the growing and harvesting cycle',
      'Weather-Index Insurance — Parametric reinsurance solutions triggered by weather indices including rainfall, temperature, and vegetation indexes, enabling rapid payouts without traditional loss assessment delays',
      'Input Financing Insurance — Reinsurance for agricultural input credit programmes protecting lenders and input suppliers against farmer default due to crop failure or adverse weather conditions',
    ],
    benefits: [
      'Specialist agricultural reinsurance knowledge',
      'Access to international agricultural reinsurance capacity',
      'Weather-index and parametric product structuring support',
      'Claims assessment and loss adjustment expertise',
      'Technical support for agricultural product development',
    ],
    process: [
      'Agricultural Risk Assessment',
      'Capacity Sourcing',
      'Product & Programme Design',
      'Placement & Season Monitoring',
    ],
  },
];

export function getProductBySlug(slug: string): Product | undefined {
  return products.find((p) => p.slug === slug);
}

export function getProductImage(slug: string): string {
  return `/images/${slug.replace(/-/g, '')}.png`;
}

export function getProductImageWithFallback(slug: string): string {
  const png = getProductImage(slug);
  const jpg = png.replace('.png', '.jpg');
  return png;
}
