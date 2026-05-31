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
                'subtitle' => 'Comprehensive reinsurance solutions for motor fleet and individual vehicle risks, providing financial protection against accidents, theft, and liability.',
                'description' => 'Our Motor Insurance reinsurance solutions provide robust capacity and underwriting expertise across the full spectrum of automotive risks. From private passenger vehicles to large commercial fleets, we structure treaty and facultative programmes that deliver reliable protection and competitive pricing for our clients.',
                'features' => [
                    'Private Vehicle Fleets',
                    'Commercial Vehicle Fleets',
                    'Third-Party Liability',
                    'Accidental Damage',
                    'Goods in Transit Extensions',
                    'Fleet Management Solutions',
                ],
                'benefits' => [
                    'Access to leading motor reinsurance markets with competitive capacity',
                    'Tailored treaty structures for fleet portfolios of all sizes',
                    'Expert claims advocacy and loss recovery support',
                    'Regular market intelligence and pricing guidance',
                ],
                'process' => [
                    'Risk profiling and portfolio analysis',
                    'Market strategy development',
                    'Competitive placement with leading reinsurers',
                    'Ongoing programme monitoring and renewal management',
                ],
            ],
            'household' => [
                'name' => 'Household Insurance',
                'subtitle' => 'Household reinsurance coverage protecting against property damage, theft, and liability risks for residential properties.',
                'description' => 'Our Household Insurance reinsurance solutions provide comprehensive coverage for residential property risks, including buildings, contents, and associated perils. We support insurers with robust treaty capacity and facultative placement for household portfolios across Zimbabwe and the region.',
                'features' => [
                    'Buildings Insurance',
                    'Contents Insurance',
                    'Fire & Allied Perils',
                    'Burglary & Theft',
                    'Weather-Related Risks',
                    'Home Emergency Cover',
                ],
                'benefits' => [
                    'Stable and secure reinsurance capacity for household portfolios',
                    'Flexible treaty structures accommodating diverse risk profiles',
                    'Catastrophe exposure management and aggregation control',
                    'Expert underwriting guidance and claims support',
                ],
                'process' => [
                    'Portfolio exposure review and catastrophe modelling',
                    'Optimal treaty structure design',
                    'Placement with aligned reinsurance partners',
                    'Continuous portfolio monitoring and renewal optimisation',
                ],
            ],
            'engineering' => [
                'name' => 'Engineering Insurance',
                'subtitle' => 'Specialized engineering reinsurance covering construction risks, machinery breakdown, and electronic equipment protection.',
                'description' => 'Our Engineering Insurance reinsurance solutions deliver specialist capacity and technical underwriting expertise for complex engineering and construction risks. We provide treaty and facultative support across all major engineering classes, from infrastructure mega-projects to industrial machinery breakdown.',
                'features' => [
                    'Contractor\'s All Risks',
                    'Erection All Risks',
                    'Plant & Machinery Breakdown',
                    'Electronic Equipment Insurance',
                    'Delay in Start-up',
                    'Infrastructure Project Cover',
                ],
                'benefits' => [
                    'Specialist engineering underwriting expertise and market knowledge',
                    'High-capacity facultative placement for major projects',
                    'Comprehensive treaty support for engineering portfolios',
                    'Dedicated claims handling with technical engineering focus',
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
                'subtitle' => 'Comprehensive coverage for business assets against physical loss or damage from a wide range of perils.',
                'description' => 'Our Assets All Risks reinsurance solutions provide broad-form protection for commercial and industrial property portfolios. We structure comprehensive programmes that cover physical assets against fire, natural perils, theft, and accidental damage, supported by robust catastrophe management and business interruption expertise.',
                'features' => [
                    'Property Damage',
                    'Business Interruption',
                    'Consequential Loss',
                    'Worldwide Coverage',
                    'Industrial Asset Protection',
                    'Commercial Property Cover',
                ],
                'benefits' => [
                    'Broad all-risks cover with competitive market capacity',
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
                'subtitle' => 'Protection against third-party liability claims, including public liability, product liability, and professional indemnity.',
                'description' => 'Our Liability Insurance reinsurance solutions provide essential capacity for insurers writing third-party liability exposures. We cover a broad spectrum of liability classes, delivering expert underwriting support, claims advocacy, and access to leading international liability markets.',
                'features' => [
                    'Public Liability',
                    'Product Liability',
                    'Professional Indemnity',
                    'Employers\' Liability',
                    'Directors & Officers Liability',
                    'Environmental Liability',
                ],
                'benefits' => [
                    'Access to specialist liability and D&O markets',
                    'Deep expertise in complex liability risk assessment',
                    'Claims advocacy and coverage advisory services',
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
                'subtitle' => 'Coverage for groups of individuals against accidental injury, disability, or death, often provided as employee benefits.',
                'description' => 'Our Group Personal Accidents reinsurance solutions provide comprehensive coverage for insurers offering accident and health benefits to corporate clients and affinity groups. We deliver reliable treaty capacity and facultative support across all GPA product variants.',
                'features' => [
                    'Accidental Death Cover',
                    'Permanent Disablement',
                    'Temporary Disablement',
                    'Medical Expense Reimbursement',
                    'Emergency Evacuation',
                    'Group Affinity Schemes',
                ],
                'benefits' => [
                    'Consistent capacity for GPA treaty programmes',
                    'Expert underwriting support for scheme design',
                    'Efficient claims handling and management',
                    'Flexible terms for affinity and group schemes',
                ],
                'process' => [
                    'Scheme design and risk assessment',
                    'Treaty structuring and pricing',
                    'Placement with aligned reinsurers',
                    'Claims management and renewal support',
                ],
            ],
            'travel-insurance' => [
                'name' => 'Travel Insurance',
                'subtitle' => 'Coverage for travelers against unforeseen events such as trip cancellations, medical emergencies, and lost luggage.',
                'description' => 'Our Travel Insurance reinsurance solutions support insurers providing domestic and international travel coverage. We offer treaty and facultative capacity for comprehensive travel products, including medical evacuation, trip cancellation, baggage, and personal accident benefits.',
                'features' => [
                    'Medical Evacuation',
                    'Trip Cancellation',
                    'Baggage Loss',
                    'Personal Accident',
                    'Emergency Assistance',
                    'Domestic & International Cover',
                ],
                'benefits' => [
                    'Reliable capacity for travel insurance programmes',
                    'Global medical evacuation and assistance expertise',
                    'Efficient claim adjudication and payment processes',
                    'Flexible cover for both domestic and international travel',
                ],
                'process' => [
                    'Product review and risk assessment',
                    'Capacity structuring and treaty design',
                    'Placement with specialist travel reinsurers',
                    'Ongoing claims monitoring and programme review',
                ],
            ],
            'goods-in-transit' => [
                'name' => 'Goods In Transit',
                'subtitle' => 'Protection for goods and merchandise while in transit by road, rail, sea, or air against damage, theft, or loss.',
                'description' => 'Our Goods In Transit reinsurance solutions protect cargo moving across all modes of transport. We provide comprehensive marine cargo and transit coverage for insurers serving logistics companies, traders, and manufacturers, with access to leading marine reinsurance markets.',
                'features' => [
                    'Road Transit',
                    'Rail Transit',
                    'Air Cargo',
                    'Sea Freight',
                    'Warehouse-to-Warehouse Cover',
                    'Stock Throughput',
                ],
                'benefits' => [
                    'Broad transit cover across all transport modes',
                    'Access to specialist marine and cargo reinsurers',
                    'Warehouse-to-warehouse protection for complete logistics chains',
                    'Expert claims handling for transit losses',
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
                'subtitle' => 'Specialized coverage for agricultural risks including crop failure, livestock mortality, and equipment damage.',
                'description' => 'Our Agriculture Insurance reinsurance solutions provide essential protection for Zimbabwe\'s vital agricultural sector. We structure innovative programmes covering crop, livestock, and forestry risks, with expertise in weather-index products and multi-peril crop insurance schemes.',
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
                    'Product design and scheme structuring',
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
                'description' => 'Comprehensive aviation reinsurance solutions covering hull, liability, and passenger risks for commercial and private aircraft.',
                'fullDescription' => 'Our Aviation Insurance reinsurance practice delivers specialist capacity and technical underwriting expertise for aviation risks across Africa. We provide treaty and facultative support for airline fleets, general aviation, rotorcraft, airports, and aviation product manufacturers, with access to leading London and international aviation markets.',
                'features' => [
                    'Airline Hull & Liability',
                    'General Aviation',
                    'Rotorcraft Cover',
                    'Airport Operators Liability',
                    'Maintenance Facilities',
                    'Aviation Product Liability',
                ],
                'benefits' => [
                    'Access to Lloyd\'s and London company aviation markets',
                    'Specialist aviation underwriting expertise',
                    'Fleet and single-risk facultative placement capability',
                    'Dedicated aviation claims advocacy',
                ],
                'process' => [
                    'Fleet or risk exposure assessment',
                    'Aviation market strategy and selection',
                    'Facultative or treaty placement',
                    'Ongoing risk monitoring and renewal support',
                ],
            ],
            'bankers-blanket' => [
                'name' => 'Bankers\' Blanket Insurance',
                'description' => 'Specialized coverage protecting financial institutions against fraud, theft, and other criminal activities.',
                'fullDescription' => 'Our Bankers\' Blanket insurance solutions provide comprehensive protection for banks, microfinance institutions, and other financial services providers. We structure reinsurance programmes that cover fidelity guarantee, forgery, computer crime, and internal fraud, backed by deep expertise in financial institution risk.',
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
                'description' => 'Tailored reinsurance solutions for major construction projects, covering contractors\' all risks and related liabilities.',
                'fullDescription' => 'Our Construction Projects reinsurance practice supports insurers underwriting large-scale infrastructure and commercial construction risks. We provide high-capacity facultative placement and treaty support for contractors\' all risks, erection all risks, delay in start-up, and third-party liability exposures.',
                'features' => [
                    'Contractor\'s All Risks',
                    'Erection All Risks',
                    'Delay in Start-up',
                    'Third-Party Liability',
                    'Infrastructure Development',
                    'Commercial Construction',
                ],
                'benefits' => [
                    'High-capacity facultative placement for mega-projects',
                    'Specialist engineering and construction underwriting expertise',
                    'Project lifecycle coverage from groundbreaking to completion',
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
                'description' => 'Protection against cyber threats, data breaches, and associated business interruption and liability costs.',
                'fullDescription' => 'Our Cyber Insurance reinsurance solutions help insurers navigate the rapidly evolving cyber risk landscape. We provide treaty and facultative capacity for data breach response, ransomware, network security liability, and business interruption, backed by access to leading global cyber markets and expert risk modelling.',
                'features' => [
                    'Data Breach Response',
                    'Ransomware Cover',
                    'Business Interruption',
                    'Network Security Liability',
                    'Privacy Regulation Defence',
                    'Cyber Extortion',
                ],
                'benefits' => [
                    'Access to leading global cyber reinsurance markets',
                    'Advanced cyber risk modelling and aggregation tools',
                    'Incident response and crisis management expertise',
                    'Regulatory and privacy liability coverage advisory',
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
                'description' => 'Specialized coverage for kidnapping, ransom demands, and extortion threats against individuals and organizations.',
                'fullDescription' => 'Our Kidnap & Ransom reinsurance solutions provide critical protection for insurers covering corporate executives, high-net-worth individuals, and organizations operating in high-risk environments. We deliver specialist capacity, crisis response expertise, and access to leading K&R markets worldwide.',
                'features' => [
                    'Ransom Payments',
                    'Crisis Response Consultancy',
                    'Legal Liability Cover',
                    'Extortion Threats',
                    'Executive Protection',
                    'High-Net-Worth Individual Cover',
                ],
                'benefits' => [
                    'Specialist K&R capacity and crisis management network',
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
                'description' => 'Coverage for vessels against physical damage, collision liability, and other maritime risks.',
                'fullDescription' => 'Our Marine Hull reinsurance practice delivers specialist capacity for ocean-going vessels, fishing fleets, and inland waterway craft operating in African waters. We provide treaty and facultative support for hull and machinery, war risks, and protection & indemnity exposures, backed by deep maritime underwriting experience.',
                'features' => [
                    'Hull & Machinery',
                    'War Risks Cover',
                    'Protection & Indemnity',
                    'Excess Liabilities',
                    'Fishing Fleet Cover',
                    'Inland Waterway Vessels',
                ],
                'benefits' => [
                    'Access to London and international marine markets',
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
                'description' => 'Specialized coverage for power generation facilities during construction and operational phases.',
                'fullDescription' => 'Our Power Projects reinsurance practice supports Africa\'s growing energy sector with specialist capacity for power generation facilities. We cover thermal, hydroelectric, solar, and wind energy projects through both construction and operational phases, with access to dedicated energy reinsurance markets.',
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
                'description' => 'Protection against government actions, currency inconvertibility, and contract frustration in foreign markets.',
                'fullDescription' => 'Our Political Risks reinsurance solutions protect cross-border investments and trade in emerging markets. We provide specialist capacity for expropriation, currency inconvertibility, contract frustration, and trade disruption, backed by access to leading political risk markets and geopolitical analysis expertise.',
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
                'description' => 'Coverage against damage caused by political violence, terrorism, strikes, riots, and civil commotion.',
                'fullDescription' => 'Our Political Violence & Terrorism reinsurance solutions provide critical protection in an increasingly complex global risk environment. We cover sabotage, terrorism, strikes, riots, civil commotion, and malicious damage across property, business interruption, and contingency exposures, with access to specialist terrorism pools and international markets.',
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
