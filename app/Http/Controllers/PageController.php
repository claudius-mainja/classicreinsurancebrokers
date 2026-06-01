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
                'subtitle' => 'Specialist motor reinsurance broking services, connecting insurance companies with leading global and regional motor reinsurance markets for fleet and individual vehicle risk protection across Zimbabwe and Africa.',
                'description' => 'Our Motor Insurance practice delivers professional reinsurance broking services to insurance companies across the full spectrum of automotive risks. From private passenger vehicles to large commercial fleets, we arrange treaty and facultative placements with leading reinsurers, providing reliable risk transfer capacity and portfolio support.',
                'fullDescription' => 'Our Motor Insurance practice delivers professional reinsurance broking services to insurance companies across Zimbabwe and the region. We structure both treaty and facultative arrangements covering private passenger vehicles, commercial fleets, third-party liability, and accidental damage exposures. Our team has deep experience in the Zimbabwean motor insurance market, enabling us to connect insurance companies with compatible reinsurance partners, negotiate competitive terms, and provide expert claims advocacy. We work with leading international and regional motor reinsurers to deliver tailored solutions that strengthen our clients\' capacity to write motor business with confidence.',
                'features' => [
                    'Private Vehicle Fleets',
                    'Commercial Vehicle Fleets',
                    'Third-Party Liability',
                    'Accidental Damage',
                    'Goods in Transit Extensions',
                    'Fleet Management Solutions',
                ],
                'benefits' => [
                    'Access to leading motor reinsurance markets for your insurance portfolio',
                    'Tailored treaty and facultative structures for fleet and personal lines',
                    'Expert claims advocacy and loss recovery support',
                    'Market intelligence and pricing guidance to strengthen your competitive edge',
                ],
                'process' => [
                    'Portfolio analysis and reinsurance needs assessment',
                    'Market strategy development and capacity sourcing',
                    'Placement with compatible reinsurance partners',
                    'Ongoing programme monitoring and renewal management',
                ],
            ],
            'household' => [
                'name' => 'Household Insurance',
                'subtitle' => 'Professional household reinsurance broking, connecting insurance companies with reinsurance markets for residential property portfolio protection across Zimbabwe.',
                'description' => 'Our Household Insurance practice provides expert reinsurance broking services to insurance companies for residential property risks. We arrange treaty and facultative placements covering buildings, contents, and associated perils, ensuring our clients have the capacity they need to serve the Zimbabwean household market.',
                'fullDescription' => 'Our Household Insurance practice provides expert reinsurance broking services to insurance companies for residential property risks across Zimbabwe and the region. We arrange treaty and facultative placements covering buildings, contents, fire and allied perils, burglary, theft, and weather-related risks. Our team brings extensive experience in catastrophe exposure management for household books, helping insurance clients understand and manage their accumulation risks. We structure flexible reinsurance programmes that accommodate diverse risk profiles, from urban low-risk properties to high-value homes and rural exposures, ensuring our clients can underwrite with confidence.',
                'features' => [
                    'Buildings Insurance',
                    'Contents Insurance',
                    'Fire & Allied Perils',
                    'Burglary & Theft',
                    'Weather-Related Risks',
                    'Home Emergency Cover',
                ],
                'benefits' => [
                    'Stable reinsurance capacity for household portfolios',
                    'Flexible treaty structures accommodating diverse risk profiles',
                    'Catastrophe exposure management and accumulation control',
                    'Portfolio diversification support across property classes',
                ],
                'process' => [
                    'Portfolio exposure review and catastrophe modelling',
                    'Optimal reinsurance structure design',
                    'Placement with aligned reinsurance partners',
                    'Continuous portfolio monitoring and renewal optimisation',
                ],
            ],
            'engineering' => [
                'name' => 'Engineering Insurance',
                'subtitle' => 'Specialist engineering reinsurance broking, connecting insurance companies with leading reinsurance markets for complex construction, infrastructure, and industrial machinery risks.',
                'description' => 'Our Engineering Insurance practice delivers expert reinsurance broking services to insurance companies for complex engineering and construction risks. We arrange treaty and facultative placements across all major engineering classes, from infrastructure mega-projects to industrial machinery breakdown.',
                'fullDescription' => 'Our Engineering Insurance practice delivers expert reinsurance broking services to insurance companies for complex engineering and construction risks across Zimbabwe and the region. We arrange treaty and facultative placements across all major engineering classes, including contractor\'s all risks, erection all risks, plant and machinery breakdown, electronic equipment insurance, and delay in start-up. Our team has extensive experience in assessing and structuring capacity for infrastructure mega-projects, industrial facilities, and commercial construction. We connect our clients with leading engineering reinsurance markets for optimal risk transfer, and provide dedicated claims advocacy with a technical engineering focus.',
                'features' => [
                    'Contractor\'s All Risks',
                    'Erection All Risks',
                    'Plant & Machinery Breakdown',
                    'Electronic Equipment Insurance',
                    'Delay in Start-up',
                    'Infrastructure Project Cover',
                ],
                'benefits' => [
                    'Specialist engineering capacity sourcing through our reinsurer network',
                    'High-capacity facultative placement for major infrastructure projects',
                    'Portfolio diversification across engineering classes',
                    'Dedicated claims advocacy with technical engineering expertise',
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
                'subtitle' => 'Commercial and industrial property reinsurance broking, connecting insurance companies with reinsurance markets for comprehensive asset protection across Zimbabwe.',
                'description' => 'Our Assets All Risks practice provides professional reinsurance broking services to insurance companies for commercial and industrial property portfolios. We structure treaty and facultative placements covering physical assets against fire, natural perils, theft, and accidental damage.',
                'fullDescription' => 'Our Assets All Risks practice provides professional reinsurance broking services to insurance companies for commercial and industrial property portfolios across Zimbabwe. We structure treaty and facultative placements covering physical assets against fire, natural perils, theft, and accidental damage, underpinned by robust catastrophe management and business interruption expertise. Our team works closely with insurance clients to assess asset exposures, conduct catastrophe modelling, and design optimal retention and risk transfer structures. We have access to leading property reinsurance markets, enabling us to arrange competitive capacity across a wide range of industrial, commercial, and manufacturing risks, from single-site facilities to multi-location portfolio programmes.',
                'features' => [
                    'Property Damage',
                    'Business Interruption',
                    'Consequential Loss',
                    'Worldwide Coverage',
                    'Industrial Asset Protection',
                    'Commercial Property Cover',
                ],
                'benefits' => [
                    'Broad all-risks reinsurance capacity through our market network',
                    'Integrated catastrophe exposure management support',
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
                'subtitle' => 'Comprehensive liability reinsurance broking, connecting insurance companies with specialist liability markets for public, product, and professional indemnity coverage across Zimbabwe.',
                'description' => 'Our Liability Insurance practice provides expert reinsurance broking services to insurance companies for third-party liability exposures. We cover a broad spectrum of liability classes, delivering professional placement support and claims advocacy for our clients across Zimbabwe and the region.',
                'fullDescription' => 'Our Liability Insurance practice provides expert reinsurance broking services to insurance companies for third-party liability exposures across Zimbabwe and the region. We cover a broad spectrum of liability classes including public liability, product liability, professional indemnity, employers\' liability, directors and officers liability, and environmental liability. Our team brings deep expertise in assessing complex liability risks and structuring multi-layered reinsurance programmes that optimise risk transfer and cost. We have access to specialist liability and D&O markets globally, enabling us to arrange competitive terms for both standard and complex liability exposures. Our claims advocacy service ensures effective handling and equitable settlement of liability claims on behalf of our insurance clients.',
                'features' => [
                    'Public Liability',
                    'Product Liability',
                    'Professional Indemnity',
                    'Employers\' Liability',
                    'Directors & Officers Liability',
                    'Environmental Liability',
                ],
                'benefits' => [
                    'Access to specialist liability and D&O reinsurance markets',
                    'Deep expertise in complex liability risk assessment',
                    'Claims advocacy and coverage advisory for your clients',
                    'Multi-layered programme structuring capability',
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
                'subtitle' => 'Specialist GPA reinsurance broking, connecting insurance companies with accident and health reinsurance markets for group scheme protection across Zimbabwe.',
                'description' => 'Our Group Personal Accidents practice delivers professional reinsurance broking services to insurance companies for accident and health portfolios. We arrange treaty and facultative placements across all GPA product variants for the Zimbabwean and regional market.',
                'fullDescription' => 'Our Group Personal Accidents practice delivers professional reinsurance broking services to insurance companies for accident and health portfolios across Zimbabwe. We arrange treaty and facultative placements across all GPA product variants, including accidental death, permanent and temporary disablement, medical expense reimbursement, and emergency evacuation. Our team has extensive experience in scheme design and risk assessment, helping insurance clients structure competitive and sustainable GPA portfolios. We work with leading accident and health reinsurers to provide consistent capacity, flexible terms for affinity schemes, and efficient claims advocacy that supports prompt benefit payments to policyholders.',
                'features' => [
                    'Accidental Death Cover',
                    'Permanent Disablement',
                    'Temporary Disablement',
                    'Medical Expense Reimbursement',
                    'Emergency Evacuation',
                    'Group Affinity Schemes',
                ],
                'benefits' => [
                    'Consistent reinsurance capacity for GPA treaty programmes',
                    'Expert underwriting support for scheme design',
                    'Efficient claims advocacy and management on your behalf',
                    'Portfolio support across affinity and group schemes',
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
                'subtitle' => 'Professional travel reinsurance broking, connecting insurance companies with travel and assistance reinsurance markets for domestic and international travel portfolios.',
                'description' => 'Our Travel Insurance practice delivers expert reinsurance broking services to insurance companies for domestic and international travel portfolios. We arrange treaty and facultative placements covering medical evacuation, trip cancellation, baggage, and personal accident exposures.',
                'fullDescription' => 'Our Travel Insurance practice delivers expert reinsurance broking services to insurance companies for domestic and international travel portfolios. We arrange treaty and facultative placements for comprehensive travel products including medical evacuation, trip cancellation, baggage loss, personal accident, and emergency assistance. Our team has extensive experience in the African travel insurance market, enabling us to connect our clients with compatible reinsurance partners for the specific needs of travellers in the region. We work with leading travel reinsurers and global assistance networks to provide reliable capacity and efficient claims adjudication for our clients\' policyholders.',
                'features' => [
                    'Medical Evacuation',
                    'Trip Cancellation',
                    'Baggage Loss',
                    'Personal Accident',
                    'Emergency Assistance',
                    'Domestic & International Cover',
                ],
                'benefits' => [
                    'Reliable reinsurance capacity for travel insurance programmes',
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
                'subtitle' => 'Specialist goods in transit reinsurance broking, connecting insurance companies with marine and cargo reinsurance markets for protection across all transport modes.',
                'description' => 'Our Goods In Transit practice delivers professional reinsurance broking services to insurance companies for cargo moving across all modes of transport. We arrange marine cargo and transit coverage for insurance clients serving the logistics, trading, and manufacturing sectors.',
                'fullDescription' => 'Our Goods In Transit practice delivers professional reinsurance broking services to insurance companies for cargo moving across all modes of transport throughout Zimbabwe and the region. We arrange marine cargo and transit coverage for insurance clients serving logistics, trading, manufacturing, and agricultural sectors. We structure capacity for road transit, rail transit, air cargo, sea freight, and warehouse-to-warehouse movements, with stock throughput solutions for complex supply chains. We have access to leading marine and cargo reinsurance markets, enabling us to arrange competitive terms for a wide range of transit exposures. Our claims advocacy expertise ensures efficient resolution of transit losses in favour of our clients and their policyholders.',
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
                'subtitle' => 'Specialist agricultural reinsurance broking, connecting insurance companies with agri-reinsurance markets for crop, livestock, and weather-index protection across Zimbabwe.',
                'description' => 'Our Agriculture Insurance practice delivers professional reinsurance broking services to insurance companies serving Zimbabwe\'s vital agricultural sector. We structure treaty and facultative placements covering crop, livestock, and forestry risks, with expertise in weather-index and parametric products.',
                'fullDescription' => 'Our Agriculture Insurance practice delivers professional reinsurance broking services to insurance companies serving Zimbabwe\'s vital agricultural sector, connecting them with the capacity they need. We structure treaty and facultative placements covering crop insurance, livestock mortality, weather-index insurance, multi-peril crop cover, aquaculture, and forestry risks. Our team has deep expertise in agricultural risk assessment and experience working with government and development programmes on agricultural insurance schemes. We have access to specialist agricultural reinsurers and parametric risk transfer markets, enabling us to design sustainable capacity solutions that help protect Zimbabwe\'s food security and farming communities while enabling our clients to grow their agricultural portfolios.',
                'features' => [
                    'Crop Insurance',
                    'Livestock Mortality',
                    'Weather-Index Insurance',
                    'Multi-Peril Crop Cover',
                    'Aquaculture Insurance',
                    'Forestry Insurance',
                ],
                'benefits' => [
                    'Specialist agricultural reinsurance expertise and market relationships',
                    'Innovative weather-index and parametric product capability',
                    'Government and development programme partnership experience',
                    'Comprehensive portfolio support from crop to livestock',
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
                'description' => 'Specialist aviation reinsurance broking services, connecting insurance companies with leading London and international aviation reinsurance markets for hull, liability, and passenger coverage across Africa.',
                'fullDescription' => 'Our Aviation practice delivers expert reinsurance broking services to insurance companies for aviation risks across Africa. We arrange treaty and facultative placements with leading London and international aviation markets for airline fleets, general aviation, rotorcraft, airports, and aviation product exposures. Our team brings specialist knowledge in assessing complex aviation risks and securing optimal terms for our insurance clients, backed by strong relationships with Lloyd\'s and London company aviation underwriters.',
                'features' => [
                    'Airline Hull & Liability',
                    'General Aviation',
                    'Rotorcraft Cover',
                    'Airport Operators Liability',
                    'Maintenance Facilities',
                    'Aviation Product Liability',
                ],
                'benefits' => [
                    'Access to Lloyd\'s and London company aviation markets for your clients',
                    'Specialist aviation underwriting expertise supporting your underwriting decisions',
                    'Fleet and single-risk facultative placement capability',
                    'Dedicated aviation claims advocacy on your behalf',
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
                'description' => 'Specialist bankers\' blanket reinsurance broking, connecting insurance companies with financial lines reinsurance markets for fidelity and crime risk protection.',
                'fullDescription' => 'Our Bankers\' Blanket practice provides expert reinsurance broking services to insurance companies for financial institution crime risks. We structure treaty and facultative placements covering fidelity guarantee, forgery, computer crime, and internal fraud exposures, backed by deep expertise in financial institution risk. Our team connects our clients with specialist financial lines reinsurance markets, enabling them to offer comprehensive crime coverage to banks, microfinance institutions, and financial services providers.',
                'features' => [
                    'Fidelity Guarantee',
                    'Forgery Cover',
                    'Theft & Fraud',
                    'Computer Crime',
                    'Internal Fraud Protection',
                    'Financial Institution Cover',
                ],
                'benefits' => [
                    'Specialist financial lines reinsurance capacity',
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
                'description' => 'Specialist construction project reinsurance broking, connecting insurance companies with construction and engineering reinsurance markets for infrastructure and project risk protection.',
                'fullDescription' => 'Our Construction Projects practice delivers expert reinsurance broking services to insurance companies for construction sector risks. We facilitate treaty and facultative placements throughout the entire construction lifecycle, from project initiation through to final completion or handover. Our broking services connect insurance clients with compatible reinsurance partners for contractor\'s all risks, delay in start-up, and third-party liability exposures, ensuring balanced and diversified reinsurance support.',
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
                    'Coverage from project initiation through to completion',
                    'Portfolio diversification across construction classes',
                    'Dedicated construction claims advocacy for your clients',
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
                'description' => 'Specialist cyber reinsurance broking, connecting insurance companies with global cyber reinsurance markets for data breach, ransomware, and cyberattack protection.',
                'fullDescription' => 'Our Cyber practice delivers expert reinsurance broking services to insurance companies for the escalating threat of cyber incidents. We arrange treaty and facultative placements for comprehensive protection against data breaches, cyberattacks, ransomware, and unauthorised access and data destruction. Our broking services connect insurance clients with leading global cyber reinsurance markets and expert incident response resources, enabling them to write cyber business with confidence in an evolving risk landscape.',
                'features' => [
                    'Data Breaches',
                    'Cyberattacks',
                    'Ransomware',
                    'Unauthorized Access & Data Destruction',
                    'Business Interruption',
                    'Privacy Regulation Defence',
                ],
                'benefits' => [
                    'Coverage for data breach costs and unauthorised disclosure of sensitive information',
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
                'description' => 'Specialist kidnap and ransom reinsurance broking, connecting insurance companies with Lloyd\'s and London market K&R specialists for executive and corporate protection.',
                'fullDescription' => 'Our Kidnap & Ransom practice delivers expert reinsurance broking services to insurance companies for the high-severity, low-frequency risks associated with kidnapping, extortion, and ransom demands. We connect our clients with specialist K&R reinsurance markets and crisis response networks worldwide, enabling insurance companies to offer comprehensive protection for corporate executives and high-net-worth individuals operating in high-risk environments.',
                'features' => [
                    'Ransom Payments',
                    'Crisis Response Consultancy',
                    'Legal Liability Cover',
                    'Extortion Threats',
                    'Executive Protection',
                    'High-Net-Worth Individual Cover',
                ],
                'benefits' => [
                    'Specialist K&R reinsurance capacity and crisis management network',
                    'Access to leading Lloyd\'s and London market expertise',
                    'Comprehensive extortion and threat coverage for your clients',
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
                'description' => 'Specialist marine hull reinsurance broking, connecting insurance companies with London and international marine reinsurance markets for ocean-going vessels and inland waterway craft.',
                'fullDescription' => 'Our Marine Hull practice delivers expert reinsurance broking services to insurance companies for ocean-going vessels, fishing fleets, and inland waterway craft operating in African waters. We arrange treaty and facultative placements for hull and machinery, war risks, and protection & indemnity exposures, backed by deep maritime underwriting experience and access to London and international marine reinsurance markets.',
                'features' => [
                    'Hull & Machinery',
                    'War Risks Cover',
                    'Protection & Indemnity',
                    'Excess Liabilities',
                    'Fishing Fleet Cover',
                    'Inland Waterway Vessels',
                ],
                'benefits' => [
                    'Access to London and international marine reinsurance markets',
                    'Specialist hull and P&I underwriting expertise',
                    'Comprehensive war risk and geopolitical cover capability',
                    'Effective claims handling for maritime losses on your behalf',
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
                'description' => 'Specialist power project reinsurance broking, connecting insurance companies with energy reinsurance markets for power generation and renewable energy risk protection.',
                'fullDescription' => 'Our Power Projects practice delivers expert reinsurance broking services to insurance companies for Africa\'s growing energy sector. We arrange treaty and facultative placements for thermal, hydroelectric, solar, and wind energy projects through both construction and operational phases, covering infrastructure damage, machinery breakdown, business interruption, and third-party liability exposures. Our team connects insurance clients with dedicated energy reinsurance markets and renewable energy specialists for comprehensive risk transfer across the power sector.',
                'features' => [
                    'Thermal Power Cover',
                    'Hydroelectric Projects',
                    'Solar Energy Insurance',
                    'Wind Farm Cover',
                    'Machinery Breakdown',
                    'Business Interruption',
                ],
                'benefits' => [
                    'Specialist energy and power reinsurance capacity',
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
                'description' => 'Specialist political risk reinsurance broking, connecting insurance companies with political risk and trade credit reinsurance markets for cross-border investment and trade protection.',
                'fullDescription' => 'Our Political Risks practice delivers expert reinsurance broking services to insurance companies for cross-border investments and trade in emerging markets, with particular expertise in the Zimbabwean and African context. We arrange placements for expropriation, currency inconvertibility, contract frustration, trade disruption, and sovereign default exposures, backed by access to leading political risk reinsurance markets and geopolitical analysis expertise. Our broking services enable insurance clients to offer political risk coverage with confidence, supported by informed risk assessment and specialist market relationships.',
                'features' => [
                    'Expropriation Cover',
                    'Currency Inconvertibility',
                    'Contract Frustration',
                    'Trade Disruption',
                    'Sovereign Default',
                    'Cross-Border Investment Protection',
                ],
                'benefits' => [
                    'Access to specialist political risk and trade credit reinsurance markets',
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
                'description' => 'Specialist political violence and terrorism reinsurance broking, connecting insurance companies with terrorism pools and global markets for SRCC and sabotage protection.',
                'fullDescription' => 'Our Political Violence & Terrorism practice delivers expert reinsurance broking services to insurance companies in an increasingly complex global risk environment. We arrange placements for sabotage, terrorism, strikes, riots, civil commotion, and malicious damage across property, business interruption, and contingency exposures. Our broking services connect insurance clients with specialist terrorism pools and international reinsurance markets for effective risk transfer and accumulation management.',
                'features' => [
                    'Sabotage Cover',
                    'Terrorism Insurance',
                    'Riots & Civil Commotion',
                    'Strikes Cover',
                    'Malicious Damage',
                    'Strategic Infrastructure Protection',
                ],
                'benefits' => [
                    'Access to government terrorism pools and global reinsurance capacity',
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
