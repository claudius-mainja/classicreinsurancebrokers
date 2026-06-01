<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function product($slug)
    {
        $products = [
            'motor-insurance' => [
                'name' => 'Motor Insurance',
                'subtitle' => 'Reinsurance-to-reinsurance capacity solutions for motor portfolios, connecting reinsurers for fleet and individual vehicle risk distribution across Zimbabwe and Africa.',
                'description' => 'Our Motor Insurance practice facilitates retrocession and co-reinsurance capacity across the full spectrum of automotive risks. From private passenger vehicles to large commercial fleets, we arrange treaty and facultative placements between reinsurers for reliable risk distribution and portfolio diversification.',
                'fullDescription' => 'Our Motor Insurance practice facilitates retrocession and co-reinsurance capacity between reinsurers across the full spectrum of automotive risks in Zimbabwe and the region. We structure both treaty and facultative arrangements for private passenger vehicles, commercial fleets, third-party liability, and accidental damage exposures. Our team has deep experience in the Zimbabwean motor reinsurance market, enabling us to connect reinsurers with compatible capacity partners, negotiate competitive terms, and provide expert claims advocacy. We work with leading international and regional motor reinsurers to deliver tailored solutions that meet the unique needs of each portfolio, from small private vehicle schemes to large commercial fleet operations.',
                'features' => [
                    'Private Vehicle Fleets',
                    'Commercial Vehicle Fleets',
                    'Third-Party Liability',
                    'Accidental Damage',
                    'Goods in Transit Extensions',
                    'Fleet Management Solutions',
                ],
                'benefits' => [
                    'Access to leading motor reinsurance markets through our intermediary network',
                    'Tailored retrocession and co-reinsurance structures for fleet portfolios',
                    'Portfolio diversification and accumulation management',
                    'Market intelligence and pricing guidance for reinsurer partners',
                ],
                'process' => [
                    'Risk profiling and portfolio analysis',
                    'Market strategy development for capacity sourcing',
                    'Placement with compatible reinsurance partners',
                    'Ongoing programme monitoring and renewal management',
                ],
            ],
            'household' => [
                'name' => 'Household Insurance',
                'subtitle' => 'Reinsurance-to-reinsurance capacity for residential property portfolios, connecting reinsurers for buildings, contents, and catastrophe protection.',
                'description' => 'Our Household Insurance practice facilitates capacity sharing between reinsurers for residential property risks. We arrange treaty and facultative retrocession for household portfolios covering buildings, contents, and associated perils across Zimbabwe and the region.',
                'fullDescription' => 'Our Household Insurance practice facilitates capacity sharing between reinsurers for residential property risks across Zimbabwe and the region. We arrange treaty and facultative retrocession for household portfolios covering buildings, contents, fire and allied perils, burglary, theft, and weather-related risks. Our team brings extensive experience in catastrophe exposure management for household books, helping reinsurer partners understand and mitigate accumulation risks. We structure flexible retrocession programmes that accommodate diverse risk profiles, from urban low-risk properties to high-value homes and rural exposures, ensuring optimal risk distribution and portfolio balance.',
                'features' => [
                    'Buildings Insurance',
                    'Contents Insurance',
                    'Fire & Allied Perils',
                    'Burglary & Theft',
                    'Weather-Related Risks',
                    'Home Emergency Cover',
                ],
                'benefits' => [
                    'Stable retrocession capacity for household portfolios',
                    'Flexible treaty structures accommodating diverse risk profiles',
                    'Catastrophe exposure management and aggregation control',
                    'Portfolio diversification across property classes',
                ],
                'process' => [
                    'Portfolio exposure review and catastrophe modelling',
                    'Optimal retrocession structure design',
                    'Placement with aligned reinsurance partners',
                    'Continuous portfolio monitoring and renewal optimisation',
                ],
            ],
            'engineering' => [
                'name' => 'Engineering Insurance',
                'subtitle' => 'Reinsurance-to-reinsurance capacity for complex engineering and construction risks, connecting reinsurers for infrastructure and industrial portfolio distribution.',
                'description' => 'Our Engineering Insurance practice facilitates retrocession and co-reinsurance capacity for complex engineering risks. We arrange treaty and facultative placements between reinsurers across all major engineering classes, from infrastructure mega-projects to industrial machinery breakdown.',
                'fullDescription' => 'Our Engineering Insurance practice facilitates retrocession and co-reinsurance capacity between reinsurers for complex engineering and construction risks across Zimbabwe and the region. We arrange treaty and facultative placements across all major engineering classes, including contractor\'s all risks, erection all risks, plant and machinery breakdown, electronic equipment insurance, and delay in start-up. Our team has extensive experience in assessing and structuring capacity for infrastructure mega-projects, industrial facilities, and commercial construction. We connect reinsurers with leading engineering markets for optimal risk distribution, and provide dedicated claims advocacy with a technical engineering focus.',
                'features' => [
                    'Contractor\'s All Risks',
                    'Erection All Risks',
                    'Plant & Machinery Breakdown',
                    'Electronic Equipment Insurance',
                    'Delay in Start-up',
                    'Infrastructure Project Cover',
                ],
                'benefits' => [
                    'Specialist engineering capacity sourcing and market access',
                    'High-capacity facultative placement for major projects',
                    'Portfolio diversification across engineering classes',
                    'Dedicated claims advocacy with technical engineering focus',
                ],
                'process' => [
                    'Technical risk assessment and engineering review',
                    'Capacity structuring and market selection',
                    'Facultative or treaty placement execution',
                    'Project lifecycle monitoring and claims advocacy',
                ],
            ],
            'assets-all-risks' => [
                'name' => 'Assets All Risks',
                'subtitle' => 'Reinsurance-to-reinsurance capacity for commercial and industrial property portfolios, connecting reinsurers for broad-form asset protection.',
                'description' => 'Our Assets All Risks practice facilitates retrocession and capacity sharing for commercial and industrial property portfolios. We structure co-reinsurance arrangements covering physical assets against fire, natural perils, theft, and accidental damage between reinsurer partners.',
                'fullDescription' => 'Our Assets All Risks practice facilitates retrocession and capacity sharing for commercial and industrial property portfolios across Zimbabwe. We structure co-reinsurance arrangements covering physical assets against fire, natural perils, theft, and accidental damage, underpinned by robust catastrophe management and business interruption expertise. Our team works closely with reinsurer partners to assess asset exposures, conduct catastrophe modelling, and design optimal retention and risk distribution structures. We have access to leading property reinsurance markets, enabling us to arrange competitive capacity across a wide range of industrial, commercial, and manufacturing risks, from single-site facilities to multi-location portfolio programmes.',
                'features' => [
                    'Property Damage',
                    'Business Interruption',
                    'Consequential Loss',
                    'Worldwide Coverage',
                    'Industrial Asset Protection',
                    'Commercial Property Cover',
                ],
                'benefits' => [
                    'Broad all-risks capacity through intermediary network',
                    'Integrated catastrophe exposure management',
                    'Business interruption valuation and coverage expertise',
                    'Multi-year programme structuring for portfolio stability',
                ],
                'process' => [
                    'Asset exposure assessment and valuation review',
                    'Catastrophe modelling and retention analysis',
                    'Programme design and risk allocation',
                    'Placement and ongoing portfolio management',
                ],
            ],
            'liability-insurance' => [
                'name' => 'Liability Insurance',
                'subtitle' => 'Reinsurance-to-reinsurance capacity for third-party liability exposures, connecting reinsurers for public, product, and professional indemnity portfolios.',
                'description' => 'Our Liability Insurance practice facilitates retrocession and capacity sharing between reinsurers for third-party liability exposures across Zimbabwe and the region. We cover a broad spectrum of liability classes, delivering expert underwriting support and claims advocacy.',
                'fullDescription' => 'Our Liability Insurance practice facilitates retrocession and capacity sharing between reinsurers for third-party liability exposures across Zimbabwe and the region. We cover a broad spectrum of liability classes including public liability, product liability, professional indemnity, employers\' liability, directors and officers liability, and environmental liability. Our team brings deep expertise in assessing complex liability risks and structuring multi-layered retrocession programmes that optimise risk distribution and cost. We have access to specialist liability and D&O markets globally, enabling us to arrange competitive terms for both standard and complex liability exposures. Our claims advocacy service ensures effective handling and equitable settlement of liability claims across the reinsurer network.',
                'features' => [
                    'Public Liability',
                    'Product Liability',
                    'Professional Indemnity',
                    'Employers\' Liability',
                    'Directors & Officers Liability',
                    'Environmental Liability',
                ],
                'benefits' => [
                    'Access to specialist liability and D&O markets through intermediary network',
                    'Deep expertise in complex liability risk assessment',
                    'Claims advocacy and coverage advisory services',
                    'Multi-layered retrocession structuring capability',
                ],
                'process' => [
                    'Liability exposure analysis and benchmarking',
                    'Market selection and capacity allocation',
                    'Programme structuring and documentation',
                    'Ongoing risk monitoring and claims support',
                ],
            ],
            'group-personal-accidents' => [
                'name' => 'Group Personal Accidents',
                'subtitle' => 'Reinsurance-to-reinsurance capacity for group accident and health portfolios, connecting reinsurers for employee benefit risk distribution.',
                'description' => 'Our Group Personal Accidents practice facilitates retrocession and capacity sharing between reinsurers for accident and health portfolios. We arrange treaty and facultative placements across all GPA product variants for the Zimbabwean and regional market.',
                'fullDescription' => 'Our Group Personal Accidents practice facilitates retrocession and capacity sharing between reinsurers for accident and health portfolios across Zimbabwe. We arrange treaty and facultative placements across all GPA product variants, including accidental death, permanent and temporary disablement, medical expense reimbursement, and emergency evacuation. Our team has extensive experience in scheme design and risk assessment, helping reinsurer partners structure competitive and sustainable GPA portfolios. We work with leading accident and health reinsurers to provide consistent retrocession capacity, flexible terms for affinity schemes, and efficient claims advocacy that supports prompt benefit payments.',
                'features' => [
                    'Accidental Death Cover',
                    'Permanent Disablement',
                    'Temporary Disablement',
                    'Medical Expense Reimbursement',
                    'Emergency Evacuation',
                    'Group Affinity Schemes',
                ],
                'benefits' => [
                    'Consistent retrocession capacity for GPA treaty programmes',
                    'Expert underwriting support for scheme design',
                    'Efficient claims advocacy and management',
                    'Portfolio diversification across affinity and group schemes',
                ],
                'process' => [
                    'Scheme design and risk assessment',
                    'Treaty structuring and pricing',
                    'Placement with aligned reinsurer partners',
                    'Claims management and renewal support',
                ],
            ],
            'travel-insurance' => [
                'name' => 'Travel Insurance',
                'subtitle' => 'Reinsurance-to-reinsurance capacity for domestic and international travel portfolios, connecting reinsurers for medical evacuation and trip protection risks.',
                'description' => 'Our Travel Insurance practice facilitates retrocession and capacity sharing between reinsurers for travel portfolios. We arrange treaty and facultative placements covering medical evacuation, trip cancellation, baggage, and personal accident exposures.',
                'fullDescription' => 'Our Travel Insurance practice facilitates retrocession and capacity sharing between reinsurers for domestic and international travel portfolios. We arrange treaty and facultative placements for comprehensive travel products including medical evacuation, trip cancellation, baggage loss, personal accident, and emergency assistance. Our team has extensive experience in the African travel insurance market, enabling us to connect reinsurers with compatible capacity partners for the specific needs of travellers in the region. We work with leading travel reinsurers and global assistance networks to provide reliable retrocession capacity and efficient claims adjudication.',
                'features' => [
                    'Medical Evacuation',
                    'Trip Cancellation',
                    'Baggage Loss',
                    'Personal Accident',
                    'Emergency Assistance',
                    'Domestic & International Cover',
                ],
                'benefits' => [
                    'Reliable retrocession capacity for travel insurance programmes',
                    'Global medical evacuation and assistance network access',
                    'Efficient claim adjudication and payment processes',
                    'Flexible capacity for both domestic and international travel',
                ],
                'process' => [
                    'Product review and risk assessment',
                    'Capacity structuring and treaty design',
                    'Placement with specialist travel reinsurer partners',
                    'Ongoing claims monitoring and programme review',
                ],
            ],
            'goods-in-transit' => [
                'name' => 'Goods In Transit',
                'subtitle' => 'Reinsurance-to-reinsurance capacity for cargo and transit risks, connecting reinsurers for protection across all transport modes.',
                'description' => 'Our Goods In Transit practice facilitates retrocession and capacity sharing for cargo moving across all modes of transport. We arrange marine cargo and transit coverage between reinsurer partners serving logistics, trading, and manufacturing sectors.',
                'fullDescription' => 'Our Goods In Transit practice facilitates retrocession and capacity sharing for cargo moving across all modes of transport throughout Zimbabwe and the region. We arrange marine cargo and transit coverage between reinsurer partners serving logistics, trading, manufacturing, and agricultural sectors. Our team structures capacity for road transit, rail transit, air cargo, sea freight, and warehouse-to-warehouse movements, with stock throughput solutions for complex supply chains. We have access to leading marine and cargo reinsurance markets, enabling us to arrange competitive terms for a wide range of transit exposures. Our claims advocacy expertise ensures efficient resolution of transit losses across the reinsurer network.',
                'features' => [
                    'Road Transit',
                    'Rail Transit',
                    'Air Cargo',
                    'Sea Freight',
                    'Warehouse-to-Warehouse Cover',
                    'Stock Throughput',
                ],
                'benefits' => [
                    'Broad transit capacity across all transport modes',
                    'Access to specialist marine and cargo reinsurer partners',
                    'Warehouse-to-warehouse protection for complete logistics chains',
                    'Expert claims advocacy for transit losses',
                ],
                'process' => [
                    'Logistics chain mapping and exposure assessment',
                    'Marine and transit market selection',
                    'Programme structuring and placement',
                    'Claims advocacy and risk improvement guidance',
                ],
            ],
            'agriculture-insurance' => [
                'name' => 'Agriculture Insurance',
                'subtitle' => 'Reinsurance-to-reinsurance capacity for agricultural risk portfolios, connecting reinsurers for crop, livestock, and weather-index protection.',
                'description' => 'Our Agriculture Insurance practice facilitates retrocession and capacity sharing for Zimbabwe\'s vital agricultural sector. We structure co-reinsurance arrangements between reinsurers covering crop, livestock, and forestry risks, with expertise in weather-index and parametric products.',
                'fullDescription' => 'Our Agriculture Insurance practice facilitates retrocession and capacity sharing for Zimbabwe\'s vital agricultural sector, connecting reinsurers to support agricultural risk portfolios. We structure co-reinsurance arrangements covering crop insurance, livestock mortality, weather-index insurance, multi-peril crop cover, aquaculture, and forestry risks. Our team has deep expertise in agricultural risk assessment and experience working with government and development programmes on agricultural insurance schemes. We have access to specialist agricultural reinsurers and parametric risk transfer markets, enabling us to design sustainable capacity solutions that help protect Zimbabwe\'s food security and farming communities through effective risk distribution.',
                'features' => [
                    'Crop Insurance',
                    'Livestock Mortality',
                    'Weather-Index Insurance',
                    'Multi-Peril Crop Cover',
                    'Aquaculture Insurance',
                    'Forestry Insurance',
                ],
                'benefits' => [
                    'Specialist agricultural retrocession expertise and market relationships',
                    'Innovative weather-index and parametric product capability',
                    'Government and development programme partnership experience',
                    'Comprehensive portfolio diversification from crop to livestock',
                ],
                'process' => [
                    'Agricultural risk profiling and data analysis',
                    'Capacity structuring and scheme design',
                    'Market placement and capacity aggregation',
                    'Claims monitoring and scheme performance review',
                ],
            ],
        ];

        $product = $products[$slug] ?? null;

        if (!$product) {
            abort(404);
        }

        return view('pages.product', compact('product'));
    }

    public function specialty($slug)
    {
        $specialties = [
            'aviation' => [
                'name' => 'Aviation Insurance',
                'description' => 'Reinsurance-to-reinsurance capacity for aviation risks, connecting reinsurers for hull, liability, and passenger coverage across Africa.',
                'fullDescription' => 'Our Aviation practice facilitates retrocession and co-reinsurance capacity for aviation risks across Africa. We arrange treaty and facultative placements between reinsurers for airline fleets, general aviation, rotorcraft, airports, and aviation product exposures, with access to leading London and international aviation markets. Our team brings specialist knowledge in assessing complex aviation risks and connecting reinsurers for optimal risk distribution.',
                'features' => [
                    'Airline Hull & Liability',
                    'General Aviation',
                    'Rotorcraft Cover',
                    'Airport Operators Liability',
                    'Maintenance Facilities',
                    'Aviation Product Liability',
                ],
                'benefits' => [
                    'Access to Lloyd\'s and London company aviation markets through intermediary network',
                    'Specialist aviation underwriting expertise for capacity decisions',
                    'Fleet and single-risk facultative placement capability',
                    'Dedicated aviation claims advocacy',
                ],
                'process' => [
                    'Fleet or risk exposure assessment',
                    'Aviation market strategy and capacity sourcing',
                    'Facultative or treaty placement',
                    'Ongoing risk monitoring and renewal support',
                ],
            ],
            'bankers-blanket' => [
                'name' => 'Bankers\' Blanket Insurance',
                'description' => 'Reinsurance-to-reinsurance capacity for financial institution crime risks, connecting reinsurers for fidelity and fraud protection.',
                'fullDescription' => 'Our Bankers\' Blanket practice facilitates retrocession and capacity sharing between reinsurers for financial institution crime risks. We structure co-reinsurance arrangements covering fidelity guarantee, forgery, computer crime, and internal fraud exposures, backed by deep expertise in financial institution risk. Our team connects reinsurers with specialist financial lines markets for optimal risk distribution across banks, microfinance institutions, and financial services providers.',
                'features' => [
                    'Fidelity Guarantee',
                    'Forgery Cover',
                    'Theft & Fraud',
                    'Computer Crime',
                    'Internal Fraud Protection',
                    'Financial Institution Cover',
                ],
                'benefits' => [
                    'Specialist financial lines retrocession capacity',
                    'Deep understanding of banking operational risks',
                    'Comprehensive crime and fidelity coverage expertise',
                    'Discrete claims handling and advisory support',
                ],
                'process' => [
                    'Financial institution risk profile assessment',
                    'Coverage design and limit structuring',
                    'Specialty market placement',
                    'Claims advocacy and risk management guidance',
                ],
            ],
            'construction-projects' => [
                'name' => 'Construction Projects Insurance',
                'description' => 'Reinsurance-to-reinsurance capacity for construction project risks, connecting reinsurers for contractor\'s all risks and infrastructure protection.',
                'fullDescription' => 'Mitigate underwriting exposure in the construction sector through our specialised retrocession and co-reinsurance solutions designed for construction projects. We facilitate capacity sharing between reinsurers throughout the entire construction lifecycle, from project initiation through to final completion or handover. Our intermediary services connect reinsurers with compatible partners for robust risk distribution on contractor\'s all risks, delay in start-up, and third-party liability exposures, ensuring balanced and diversified portfolios.',
                'features' => [
                    'Physical Structures Under Construction',
                    'On-Site Materials, Equipment & Machinery',
                    'Contractor\'s All Risks',
                    'Delay in Start-up',
                    'Third-Party Liability',
                    'Infrastructure Development',
                ],
                'benefits' => [
                    'High-capacity facultative placement for mega-projects',
                    'Risk distribution from project initiation through to completion',
                    'Portfolio diversification across construction classes',
                    'Dedicated construction claims advocacy',
                ],
                'process' => [
                    'Project risk assessment and engineering review',
                    'Capacity aggregation and market approach',
                    'Facultative placement and contract negotiation',
                    'Project monitoring and claims support',
                ],
            ],
            'cyber' => [
                'name' => 'Cyber Insurance',
                'description' => 'Reinsurance-to-reinsurance capacity for cyber risks, connecting reinsurers for data breach, ransomware, and cyberattack protection.',
                'fullDescription' => 'Strengthen underwriting resilience against the escalating threat of cyber incidents through our specialised cyber retrocession and co-reinsurance solutions. We facilitate capacity sharing between reinsurers for comprehensive protection against Data Breaches, Cyberattacks, Ransomware, and Unauthorized Access and Data Destruction. Our intermediary services connect reinsurers with leading global cyber markets and expert risk modelling capabilities for optimal risk distribution and portfolio diversification.',
                'features' => [
                    'Data Breaches',
                    'Cyberattacks',
                    'Ransomware',
                    'Unauthorized Access & Data Destruction',
                    'Business Interruption',
                    'Privacy Regulation Defence',
                ],
                'benefits' => [
                    'Coverage for data breach costs and unauthorized disclosure of sensitive information',
                    'Protection against financial repercussions from malicious cyberattacks',
                    'Ransomware incident mitigation including recovery costs and ransom payments',
                    'Access to leading global cyber reinsurance markets and incident response expertise',
                ],
                'process' => [
                    'Cyber exposure assessment and portfolio analysis',
                    'Coverage design and limit optimisation',
                    'Specialty cyber market placement',
                    'Incident response coordination and claims support',
                ],
            ],
            'kidnap-and-ransom' => [
                'name' => 'Kidnap & Ransom Insurance',
                'description' => 'Reinsurance-to-reinsurance capacity for K&R risks, connecting reinsurers for kidnapping, extortion, and crisis response coverage.',
                'fullDescription' => 'Our Kidnap & Ransom practice facilitates retrocession and co-reinsurance capacity between reinsurers for the high-severity, low-frequency risks associated with kidnapping, extortion, and ransom demands. We connect reinsurers with specialist K&R markets and crisis response networks worldwide, enabling effective risk distribution for corporate executive and high-net-worth individual exposures in high-risk environments.',
                'features' => [
                    'Ransom Payments',
                    'Crisis Response Consultancy',
                    'Legal Liability Cover',
                    'Extortion Threats',
                    'Executive Protection',
                    'High-Net-Worth Individual Cover',
                ],
                'benefits' => [
                    'Specialist K&R retrocession capacity and crisis management network',
                    'Access to leading Lloyd\'s and London market experts',
                    'Comprehensive extortion and threat coverage expertise',
                    'Discrete and confidential handling protocols',
                ],
                'process' => [
                    'Client risk profile and travel exposure assessment',
                    'Coverage design and limit setting',
                    'Specialty market placement',
                    '24/7 crisis response and claims support',
                ],
            ],
            'marine-hull' => [
                'name' => 'Marine Hull Insurance',
                'description' => 'Reinsurance-to-reinsurance capacity for marine hull risks, connecting reinsurers for ocean-going vessels and inland waterway craft.',
                'fullDescription' => 'Our Marine Hull practice facilitates retrocession and co-reinsurance capacity for ocean-going vessels, fishing fleets, and inland waterway craft operating in African waters. We arrange treaty and facultative placements between reinsurers for hull and machinery, war risks, and protection & indemnity exposures, backed by deep maritime underwriting experience and access to London and international marine markets.',
                'features' => [
                    'Hull & Machinery',
                    'War Risks Cover',
                    'Protection & Indemnity',
                    'Excess Liabilities',
                    'Fishing Fleet Cover',
                    'Inland Waterway Vessels',
                ],
                'benefits' => [
                    'Access to London and international marine markets through intermediary network',
                    'Specialist hull and P&I underwriting expertise',
                    'Comprehensive war risk and geopolitical cover capability',
                    'Effective claims handling for maritime losses',
                ],
                'process' => [
                    'Vessel and fleet risk assessment',
                    'Marine market strategy and selection',
                    'Hull, war, and P&I placement',
                    'Ongoing fleet monitoring and renewal support',
                ],
            ],
            'power-projects' => [
                'name' => 'Power Projects Insurance',
                'description' => 'Reinsurance-to-reinsurance capacity for power generation and renewable energy projects, connecting reinsurers for construction and operational risks.',
                'fullDescription' => 'Our Power Projects practice facilitates retrocession and co-reinsurance capacity for Africa\'s growing energy sector. We arrange treaty and facultative placements between reinsurers for thermal, hydroelectric, solar, and wind energy projects through both construction and operational phases, covering infrastructure damage, machinery breakdown, business interruption, and third-party liability exposures. Our team connects reinsurers with dedicated energy markets and renewable energy specialists for optimal risk distribution across the power sector.',
                'features' => [
                    'Thermal Power Cover',
                    'Hydroelectric Projects',
                    'Solar Energy Insurance',
                    'Wind Farm Cover',
                    'Machinery Breakdown',
                    'Business Interruption',
                ],
                'benefits' => [
                    'Specialist energy and power retrocession capacity',
                    'Multi-phase coverage from construction to operation',
                    'Alternative and renewable energy project expertise',
                    'Technical engineering and loss prevention advisory',
                ],
                'process' => [
                    'Power project feasibility and risk assessment',
                    'Phase-specific coverage structuring',
                    'Energy market placement and capacity aggregation',
                    'Project stage monitoring and claims support',
                ],
            ],
            'political-risks' => [
                'name' => 'Political Risks Insurance',
                'description' => 'Reinsurance-to-reinsurance capacity for political risk exposures, connecting reinsurers for cross-border investment and trade protection.',
                'fullDescription' => 'Our Political Risks practice facilitates retrocession and co-reinsurance capacity for cross-border investments and trade in emerging markets, with particular expertise in the Zimbabwean and African context. We arrange capacity between reinsurers for expropriation, currency inconvertibility, contract frustration, trade disruption, and sovereign default exposures, backed by access to leading political risk markets and geopolitical analysis expertise. Our intermediary services enable reinsurers to diversify into political risk classes with informed risk assessment.',
                'features' => [
                    'Expropriation Cover',
                    'Currency Inconvertibility',
                    'Contract Frustration',
                    'Trade Disruption',
                    'Sovereign Default',
                    'Cross-Border Investment Protection',
                ],
                'benefits' => [
                    'Access to specialist political risk and trade credit markets',
                    'Geopolitical risk analysis and country expertise',
                    'Multi-year policy structuring for investment protection',
                    'Experienced claims handling for complex political events',
                ],
                'process' => [
                    'Country and counterparty risk assessment',
                    'Coverage design and policy structuring',
                    'Specialty political risk market placement',
                    'Ongoing risk monitoring and claims advocacy',
                ],
            ],
            'political-violence-terrorism' => [
                'name' => 'Political Violence & Terrorism Insurance',
                'description' => 'Reinsurance-to-reinsurance capacity for political violence and terrorism risks, connecting reinsurers for SRCC and sabotage protection.',
                'fullDescription' => 'Our Political Violence & Terrorism practice facilitates retrocession and co-reinsurance capacity in an increasingly complex global risk environment. We arrange capacity between reinsurers for sabotage, terrorism, strikes, riots, civil commotion, and malicious damage across property, business interruption, and contingency exposures. Our intermediary services connect reinsurers with specialist terrorism pools and international markets for effective risk distribution and accumulation management.',
                'features' => [
                    'Sabotage Cover',
                    'Terrorism Insurance',
                    'Riots & Civil Commotion',
                    'Strikes Cover',
                    'Malicious Damage',
                    'Strategic Infrastructure Protection',
                ],
                'benefits' => [
                    'Access to government terrorism pools and global capacity',
                    'Specialist political violence underwriting expertise',
                    'Comprehensive SRCC and terrorism cover structuring',
                    'Accumulation management and exposure monitoring',
                ],
                'process' => [
                    'Political violence exposure and location assessment',
                    'Terrorism pool and market strategy',
                    'Coverage design and placement',
                    'Risk monitoring, accumulation control, and claims support',
                ],
            ],
        ];

        $specialty = $specialties[$slug] ?? null;

        if (!$specialty) {
            abort(404);
        }

        return view('pages.specialty', compact('specialty'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function privacy()
    {
        return view('legal.privacy');
    }

    public function terms()
    {
        return view('legal.terms');
    }
}
