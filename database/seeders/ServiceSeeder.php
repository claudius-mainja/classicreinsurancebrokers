<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'type' => 'product', 'sort_order' => 1,
                'name' => 'Motor Insurance',
                'slug' => 'motor-insurance',
                'subtitle' => 'Specialist motor reinsurance broking services, connecting insurance companies with leading global and regional motor reinsurance markets for fleet and individual vehicle risk protection across Zimbabwe and Africa.',
                'description' => 'Our Motor Insurance practice delivers professional reinsurance broking services to insurance companies across the full spectrum of automotive risks. From private passenger vehicles to large commercial fleets, we arrange treaty and facultative placements with leading reinsurers, providing reliable risk transfer capacity and portfolio support.',
                'full_description' => 'Our Motor Insurance practice delivers professional reinsurance broking services to insurance companies across Zimbabwe and the region. We structure both treaty and facultative arrangements covering private passenger vehicles, commercial fleets, third-party liability, and accidental damage exposures. Our team has deep experience in the Zimbabwean motor insurance market, enabling us to connect insurance companies with compatible reinsurance partners, negotiate competitive terms, and provide expert claims advocacy. We work with leading international and regional motor reinsurers to deliver tailored solutions that strengthen our clients capacity to write motor business with confidence.',
                'features' => [['value' => 'Private Vehicle Fleets'], ['value' => 'Commercial Vehicle Fleets'], ['value' => 'Third-Party Liability'], ['value' => 'Accidental Damage'], ['value' => 'Goods in Transit Extensions'], ['value' => 'Fleet Management Solutions']],
                'benefits' => [['value' => 'Access to leading motor reinsurance markets for your insurance portfolio'], ['value' => 'Tailored treaty and facultative structures for fleet and personal lines'], ['value' => 'Expert claims advocacy and loss recovery support'], ['value' => 'Market intelligence and pricing guidance to strengthen your competitive edge']],
                'process' => [['value' => 'Portfolio analysis and reinsurance needs assessment'], ['value' => 'Market strategy development and capacity sourcing'], ['value' => 'Placement with compatible reinsurance partners'], ['value' => 'Ongoing programme monitoring and renewal management']],
            ],
            [
                'type' => 'product', 'sort_order' => 2,
                'name' => 'Household',
                'slug' => 'household',
                'subtitle' => 'Professional household reinsurance broking, connecting insurance companies with reinsurance markets for residential property portfolio protection across Zimbabwe.',
                'description' => 'Our Household Insurance practice provides expert reinsurance broking services to insurance companies for residential property risks. We arrange treaty and facultative placements covering buildings, contents, and associated perils, ensuring our clients have the capacity they need to serve the Zimbabwean household market.',
                'full_description' => 'Our Household Insurance practice provides expert reinsurance broking services to insurance companies for residential property risks across Zimbabwe and the region. We arrange treaty and facultative placements covering buildings, contents, fire and allied perils, burglary, theft, and weather-related risks. Our team brings extensive experience in catastrophe exposure management for household books, helping insurance clients understand and manage their accumulation risks. We structure flexible reinsurance programmes that accommodate diverse risk profiles, from urban low-risk properties to high-value homes and rural exposures, ensuring our clients can underwrite with confidence.',
                'features' => [['value' => 'Buildings Insurance'], ['value' => 'Contents Insurance'], ['value' => 'Fire & Allied Perils'], ['value' => 'Burglary & Theft'], ['value' => 'Weather-Related Risks'], ['value' => 'Home Emergency Cover']],
                'benefits' => [['value' => 'Stable reinsurance capacity for household portfolios'], ['value' => 'Flexible treaty structures accommodating diverse risk profiles'], ['value' => 'Catastrophe exposure management and accumulation control'], ['value' => 'Portfolio diversification support across property classes']],
                'process' => [['value' => 'Portfolio exposure review and catastrophe modelling'], ['value' => 'Optimal reinsurance structure design'], ['value' => 'Placement with aligned reinsurance partners'], ['value' => 'Continuous portfolio monitoring and renewal optimisation']],
            ],
            [
                'type' => 'product', 'sort_order' => 3,
                'name' => 'Engineering',
                'slug' => 'engineering',
                'subtitle' => 'Specialist engineering reinsurance broking, connecting insurance companies with leading reinsurance markets for complex construction, infrastructure, and industrial machinery risks.',
                'description' => 'Our Engineering Insurance practice delivers expert reinsurance broking services to insurance companies for complex engineering and construction risks. We arrange treaty and facultative placements across all major engineering classes, from infrastructure mega-projects to industrial machinery breakdown.',
                'full_description' => 'Our Engineering Insurance practice delivers expert reinsurance broking services to insurance companies for complex engineering and construction risks across Zimbabwe and the region. We arrange treaty and facultative placements across all major engineering classes, including contractor all risks, erection all risks, plant and machinery breakdown, electronic equipment insurance, and delay in start-up. Our team has extensive experience in assessing and structuring capacity for infrastructure mega-projects, industrial facilities, and commercial construction. We connect our clients with leading engineering reinsurance markets for optimal risk transfer, and provide dedicated claims advocacy with a technical engineering focus.',
                'features' => [['value' => 'Contractor All Risks'], ['value' => 'Erection All Risks'], ['value' => 'Plant & Machinery Breakdown'], ['value' => 'Electronic Equipment Insurance'], ['value' => 'Delay in Start-up'], ['value' => 'Infrastructure Project Cover']],
                'benefits' => [['value' => 'Specialist engineering capacity sourcing through our reinsurer network'], ['value' => 'High-capacity facultative placement for major infrastructure projects'], ['value' => 'Portfolio diversification across engineering classes'], ['value' => 'Dedicated claims advocacy with technical engineering expertise']],
                'process' => [['value' => 'Technical risk assessment and engineering review'], ['value' => 'Capacity structuring and market selection'], ['value' => 'Facultative or treaty placement execution'], ['value' => 'Project lifecycle monitoring and claims advocacy']],
            ],
            [
                'type' => 'product', 'sort_order' => 4,
                'name' => 'Assets All Risks',
                'slug' => 'assets-all-risks',
                'subtitle' => 'Commercial and industrial property reinsurance broking, connecting insurance companies with reinsurance markets for comprehensive asset protection across Zimbabwe.',
                'description' => 'Our Assets All Risks practice provides professional reinsurance broking services to insurance companies for commercial and industrial property portfolios. We structure treaty and facultative placements covering physical assets against fire, natural perils, theft, and accidental damage.',
                'full_description' => 'Our Assets All Risks practice provides professional reinsurance broking services to insurance companies for commercial and industrial property portfolios across Zimbabwe. We structure treaty and facultative placements covering physical assets against fire, natural perils, theft, and accidental damage, underpinned by robust catastrophe management and business interruption expertise. Our team works closely with insurance clients to assess asset exposures, conduct catastrophe modelling, and design optimal retention and risk transfer structures. We have access to leading property reinsurance markets, enabling us to arrange competitive capacity across a wide range of industrial, commercial, and manufacturing risks, from single-site facilities to multi-location portfolio programmes.',
                'features' => [['value' => 'Property Damage'], ['value' => 'Business Interruption'], ['value' => 'Consequential Loss'], ['value' => 'Worldwide Coverage'], ['value' => 'Industrial Asset Protection'], ['value' => 'Commercial Property Cover']],
                'benefits' => [['value' => 'Broad all-risks reinsurance capacity through our market network'], ['value' => 'Integrated catastrophe exposure management support'], ['value' => 'Business interruption valuation and coverage expertise'], ['value' => 'Multi-year programme structuring for portfolio stability']],
                'process' => [['value' => 'Asset exposure assessment and valuation review'], ['value' => 'Catastrophe modelling and retention analysis'], ['value' => 'Programme design and risk allocation'], ['value' => 'Placement and ongoing portfolio management']],
            ],
            [
                'type' => 'product', 'sort_order' => 5,
                'name' => 'Liability Insurance',
                'slug' => 'liability-insurance',
                'subtitle' => 'Comprehensive liability reinsurance broking, connecting insurance companies with specialist liability markets for public, product, and professional indemnity coverage across Zimbabwe.',
                'description' => 'Our Liability Insurance practice provides expert reinsurance broking services to insurance companies for third-party liability exposures. We cover a broad spectrum of liability classes, delivering professional placement support and claims advocacy for our clients across Zimbabwe and the region.',
                'full_description' => 'Our Liability Insurance practice provides expert reinsurance broking services to insurance companies for third-party liability exposures across Zimbabwe and the region. We cover a broad spectrum of liability classes including public liability, product liability, professional indemnity, employers liability, directors and officers liability, and environmental liability. Our team brings deep expertise in assessing complex liability risks and structuring multi-layered reinsurance programmes that optimise risk transfer and cost. We have access to specialist liability and D&O markets globally, enabling us to arrange competitive terms for both standard and complex liability exposures. Our claims advocacy service ensures effective handling and equitable settlement of liability claims on behalf of our insurance clients.',
                'features' => [['value' => 'Public Liability'], ['value' => 'Product Liability'], ['value' => 'Professional Indemnity'], ['value' => 'Employers Liability'], ['value' => 'Directors & Officers Liability'], ['value' => 'Environmental Liability']],
                'benefits' => [['value' => 'Access to specialist liability and D&O reinsurance markets'], ['value' => 'Deep expertise in complex liability risk assessment'], ['value' => 'Claims advocacy and coverage advisory for your clients'], ['value' => 'Multi-layered programme structuring capability']],
                'process' => [['value' => 'Liability exposure analysis and benchmarking'], ['value' => 'Market selection and capacity allocation'], ['value' => 'Programme structuring and documentation'], ['value' => 'Ongoing risk monitoring and claims support']],
            ],
            [
                'type' => 'product', 'sort_order' => 6,
                'name' => 'Group Personal Accidents',
                'slug' => 'group-personal-accidents',
                'subtitle' => 'Specialist GPA reinsurance broking, connecting insurance companies with accident and health reinsurance markets for group scheme protection across Zimbabwe.',
                'description' => 'Our Group Personal Accidents practice delivers professional reinsurance broking services to insurance companies for accident and health portfolios. We arrange treaty and facultative placements across all GPA product variants for the Zimbabwean and regional market.',
                'full_description' => 'Our Group Personal Accidents practice delivers professional reinsurance broking services to insurance companies for accident and health portfolios across Zimbabwe. We arrange treaty and facultative placements across all GPA product variants, including accidental death, permanent and temporary disablement, medical expense reimbursement, and emergency evacuation. Our team has extensive experience in scheme design and risk assessment, helping insurance clients structure competitive and sustainable GPA portfolios. We work with leading accident and health reinsurers to provide consistent capacity, flexible terms for affinity schemes, and efficient claims advocacy that supports prompt benefit payments to policyholders.',
                'features' => [['value' => 'Accidental Death Cover'], ['value' => 'Permanent Disablement'], ['value' => 'Temporary Disablement'], ['value' => 'Medical Expense Reimbursement'], ['value' => 'Emergency Evacuation'], ['value' => 'Group Affinity Schemes']],
                'benefits' => [['value' => 'Consistent reinsurance capacity for GPA treaty programmes'], ['value' => 'Expert underwriting support for scheme design'], ['value' => 'Efficient claims advocacy and management on your behalf'], ['value' => 'Portfolio support across affinity and group schemes']],
                'process' => [['value' => 'Scheme design and risk assessment'], ['value' => 'Treaty structuring and pricing'], ['value' => 'Placement with aligned reinsurer partners'], ['value' => 'Claims management and renewal support']],
            ],
            [
                'type' => 'product', 'sort_order' => 7,
                'name' => 'Travel Insurance',
                'slug' => 'travel-insurance',
                'subtitle' => 'Professional travel reinsurance broking, connecting insurance companies with travel and assistance reinsurance markets for domestic and international travel portfolios.',
                'description' => 'Our Travel Insurance practice delivers expert reinsurance broking services to insurance companies for domestic and international travel portfolios. We arrange treaty and facultative placements covering medical evacuation, trip cancellation, baggage, and personal accident exposures.',
                'full_description' => 'Our Travel Insurance practice delivers expert reinsurance broking services to insurance companies for domestic and international travel portfolios. We arrange treaty and facultative placements for comprehensive travel products including medical evacuation, trip cancellation, baggage loss, personal accident, and emergency assistance. Our team has extensive experience in the African travel insurance market, enabling us to connect our clients with compatible reinsurance partners for the specific needs of travellers in the region. We work with leading travel reinsurers and global assistance networks to provide reliable capacity and efficient claims adjudication for our clients policyholders.',
                'features' => [['value' => 'Medical Evacuation'], ['value' => 'Trip Cancellation'], ['value' => 'Baggage Loss'], ['value' => 'Personal Accident'], ['value' => 'Emergency Assistance'], ['value' => 'Domestic & International Cover']],
                'benefits' => [['value' => 'Reliable reinsurance capacity for travel insurance programmes'], ['value' => 'Global medical evacuation and assistance network access'], ['value' => 'Efficient claim adjudication and payment processes'], ['value' => 'Flexible capacity for both domestic and international travel']],
                'process' => [['value' => 'Product review and risk assessment'], ['value' => 'Capacity structuring and treaty design'], ['value' => 'Placement with specialist travel reinsurer partners'], ['value' => 'Ongoing claims monitoring and programme review']],
            ],
            [
                'type' => 'product', 'sort_order' => 8,
                'name' => 'Goods In Transit',
                'slug' => 'goods-in-transit',
                'subtitle' => 'Specialist goods in transit reinsurance broking, connecting insurance companies with marine and cargo reinsurance markets for protection across all transport modes.',
                'description' => 'Our Goods In Transit practice delivers professional reinsurance broking services to insurance companies for cargo moving across all modes of transport. We arrange marine cargo and transit coverage for insurance clients serving the logistics, trading, and manufacturing sectors.',
                'full_description' => 'Our Goods In Transit practice delivers professional reinsurance broking services to insurance companies for cargo moving across all modes of transport throughout Zimbabwe and the region. We arrange marine cargo and transit coverage for insurance clients serving logistics, trading, manufacturing, and agricultural sectors. We structure capacity for road transit, rail transit, air cargo, sea freight, and warehouse-to-warehouse movements, with stock throughput solutions for complex supply chains. We have access to leading marine and cargo reinsurance markets, enabling us to arrange competitive terms for a wide range of transit exposures. Our claims advocacy expertise ensures efficient resolution of transit losses in favour of our clients and their policyholders.',
                'features' => [['value' => 'Road Transit'], ['value' => 'Rail Transit'], ['value' => 'Air Cargo'], ['value' => 'Sea Freight'], ['value' => 'Warehouse-to-Warehouse Cover'], ['value' => 'Stock Throughput']],
                'benefits' => [['value' => 'Broad transit capacity across all transport modes'], ['value' => 'Access to specialist marine and cargo reinsurer partners'], ['value' => 'Warehouse-to-warehouse protection for complete logistics chains'], ['value' => 'Expert claims advocacy for transit losses']],
                'process' => [['value' => 'Logistics chain mapping and exposure assessment'], ['value' => 'Marine and transit market selection'], ['value' => 'Programme structuring and placement'], ['value' => 'Claims advocacy and risk improvement guidance']],
            ],
            [
                'type' => 'product', 'sort_order' => 9,
                'name' => 'Agriculture Insurance',
                'slug' => 'agriculture-insurance',
                'subtitle' => 'Specialist agricultural reinsurance broking, connecting insurance companies with agri-reinsurance markets for crop, livestock, and weather-index protection across Zimbabwe.',
                'description' => 'Our Agriculture Insurance practice delivers professional reinsurance broking services to insurance companies serving Zimbabwe vital agricultural sector. We structure treaty and facultative placements covering crop, livestock, and forestry risks, with expertise in weather-index and parametric products.',
                'full_description' => 'Our Agriculture Insurance practice delivers professional reinsurance broking services to insurance companies serving Zimbabwe vital agricultural sector, connecting them with the capacity they need. We structure treaty and facultative placements covering crop insurance, livestock mortality, weather-index insurance, multi-peril crop cover, aquaculture, and forestry risks. Our team has deep expertise in agricultural risk assessment and experience working with government and development programmes on agricultural insurance schemes. We have access to specialist agricultural reinsurers and parametric risk transfer markets, enabling us to design sustainable capacity solutions that help protect Zimbabwe food security and farming communities while enabling our clients to grow their agricultural portfolios.',
                'features' => [['value' => 'Crop Insurance'], ['value' => 'Livestock Mortality'], ['value' => 'Weather-Index Insurance'], ['value' => 'Multi-Peril Crop Cover'], ['value' => 'Aquaculture Insurance'], ['value' => 'Forestry Insurance']],
                'benefits' => [['value' => 'Specialist agricultural reinsurance expertise and market relationships'], ['value' => 'Innovative weather-index and parametric product capability'], ['value' => 'Government and development programme partnership experience'], ['value' => 'Comprehensive portfolio support from crop to livestock']],
                'process' => [['value' => 'Agricultural risk profiling and data analysis'], ['value' => 'Capacity structuring and scheme design'], ['value' => 'Market placement and capacity aggregation'], ['value' => 'Claims monitoring and scheme performance review']],
            ],
        ];

        $specialties = [
            [
                'type' => 'specialty', 'sort_order' => 1,
                'name' => 'Aviation',
                'slug' => 'aviation',
                'description' => 'Specialist aviation reinsurance broking services, connecting insurance companies with leading London and international aviation reinsurance markets for hull, liability, and passenger coverage across Africa.',
                'full_description' => 'Our Aviation practice delivers expert reinsurance broking services to insurance companies for aviation risks across Africa. We arrange treaty and facultative placements with leading London and international aviation markets for airline fleets, general aviation, rotorcraft, airports, and aviation product exposures. Our team brings specialist knowledge in assessing complex aviation risks and securing optimal terms for our insurance clients, backed by strong relationships with Lloyd and London company aviation underwriters.',
                'features' => [['value' => 'Airline Hull & Liability'], ['value' => 'General Aviation'], ['value' => 'Rotorcraft Cover'], ['value' => 'Airport Operators Liability'], ['value' => 'Maintenance Facilities'], ['value' => 'Aviation Product Liability']],
                'benefits' => [['value' => 'Access to Lloyd and London company aviation markets for your clients'], ['value' => 'Specialist aviation underwriting expertise supporting your underwriting decisions'], ['value' => 'Fleet and single-risk facultative placement capability'], ['value' => 'Dedicated aviation claims advocacy on your behalf']],
                'process' => [['value' => 'Fleet or risk exposure assessment'], ['value' => 'Aviation market strategy and capacity sourcing'], ['value' => 'Facultative or treaty placement'], ['value' => 'Ongoing risk monitoring and renewal support']],
            ],
            [
                'type' => 'specialty', 'sort_order' => 2,
                'name' => 'Bankers Blanket',
                'slug' => 'bankers-blanket',
                'description' => 'Specialist bankers blanket reinsurance broking, connecting insurance companies with financial lines reinsurance markets for fidelity and crime risk protection.',
                'full_description' => 'Our Bankers Blanket practice provides expert reinsurance broking services to insurance companies for financial institution crime risks. We structure treaty and facultative placements covering fidelity guarantee, forgery, computer crime, and internal fraud exposures, backed by deep expertise in financial institution risk. Our team connects our clients with specialist financial lines reinsurance markets, enabling them to offer comprehensive crime coverage to banks, microfinance institutions, and financial services providers.',
                'features' => [['value' => 'Fidelity Guarantee'], ['value' => 'Forgery Cover'], ['value' => 'Theft & Fraud'], ['value' => 'Computer Crime'], ['value' => 'Internal Fraud Protection'], ['value' => 'Financial Institution Cover']],
                'benefits' => [['value' => 'Specialist financial lines reinsurance capacity'], ['value' => 'Deep understanding of banking operational risks'], ['value' => 'Comprehensive crime and fidelity coverage expertise'], ['value' => 'Discrete claims handling and advisory support']],
                'process' => [['value' => 'Financial institution risk profile assessment'], ['value' => 'Coverage design and limit structuring'], ['value' => 'Specialty market placement'], ['value' => 'Claims advocacy and risk management guidance']],
            ],
            [
                'type' => 'specialty', 'sort_order' => 3,
                'name' => 'Construction Projects',
                'slug' => 'construction-projects',
                'description' => 'Specialist construction project reinsurance broking, connecting insurance companies with construction and engineering reinsurance markets for infrastructure and project risk protection.',
                'full_description' => 'Our Construction Projects practice delivers expert reinsurance broking services to insurance companies for construction sector risks. We facilitate treaty and facultative placements throughout the entire construction lifecycle, from project initiation through to final completion or handover. Our broking services connect insurance clients with compatible reinsurance partners for contractor all risks, delay in start-up, and third-party liability exposures, ensuring balanced and diversified reinsurance support.',
                'features' => [['value' => 'Physical Structures Under Construction'], ['value' => 'On-Site Materials, Equipment & Machinery'], ['value' => 'Contractor All Risks'], ['value' => 'Delay in Start-up'], ['value' => 'Third-Party Liability'], ['value' => 'Infrastructure Development']],
                'benefits' => [['value' => 'High-capacity facultative placement for mega-projects'], ['value' => 'Coverage from project initiation through to completion'], ['value' => 'Portfolio diversification across construction classes'], ['value' => 'Dedicated construction claims advocacy for your clients']],
                'process' => [['value' => 'Project risk assessment and engineering review'], ['value' => 'Capacity aggregation and market approach'], ['value' => 'Facultative placement and contract negotiation'], ['value' => 'Project monitoring and claims support']],
            ],
            [
                'type' => 'specialty', 'sort_order' => 4,
                'name' => 'Cyber',
                'slug' => 'cyber',
                'description' => 'Specialist cyber reinsurance broking, connecting insurance companies with global cyber reinsurance markets for data breach, ransomware, and cyberattack protection.',
                'full_description' => 'Our Cyber practice delivers expert reinsurance broking services to insurance companies for the escalating threat of cyber incidents. We arrange treaty and facultative placements for comprehensive protection against data breaches, cyberattacks, ransomware, and unauthorised access and data destruction. Our broking services connect insurance clients with leading global cyber reinsurance markets and expert incident response resources, enabling them to write cyber business with confidence in an evolving risk landscape.',
                'features' => [['value' => 'Data Breaches'], ['value' => 'Cyberattacks'], ['value' => 'Ransomware'], ['value' => 'Unauthorized Access & Data Destruction'], ['value' => 'Business Interruption'], ['value' => 'Privacy Regulation Defence']],
                'benefits' => [['value' => 'Coverage for data breach costs and unauthorised disclosure of sensitive information'], ['value' => 'Protection against financial repercussions from malicious cyberattacks'], ['value' => 'Ransomware incident mitigation including recovery costs and ransom payments'], ['value' => 'Access to leading global cyber reinsurance markets and incident response expertise']],
                'process' => [['value' => 'Cyber exposure assessment and portfolio analysis'], ['value' => 'Coverage design and limit optimisation'], ['value' => 'Specialty cyber market placement'], ['value' => 'Incident response coordination and claims support']],
            ],
            [
                'type' => 'specialty', 'sort_order' => 5,
                'name' => 'Kidnap & Ransom',
                'slug' => 'kidnap-and-ransom',
                'description' => 'Specialist kidnap and ransom reinsurance broking, connecting insurance companies with Lloyd and London market K&R specialists for executive and corporate protection.',
                'full_description' => 'Our Kidnap & Ransom practice delivers expert reinsurance broking services to insurance companies for the high-severity, low-frequency risks associated with kidnapping, extortion, and ransom demands. We connect our clients with specialist K&R reinsurance markets and crisis response networks worldwide, enabling insurance companies to offer comprehensive protection for corporate executives and high-net-worth individuals operating in high-risk environments.',
                'features' => [['value' => 'Ransom Payments'], ['value' => 'Crisis Response Consultancy'], ['value' => 'Legal Liability Cover'], ['value' => 'Extortion Threats'], ['value' => 'Executive Protection'], ['value' => 'High-Net-Worth Individual Cover']],
                'benefits' => [['value' => 'Specialist K&R reinsurance capacity and crisis management network'], ['value' => 'Access to leading Lloyd and London market expertise'], ['value' => 'Comprehensive extortion and threat coverage for your clients'], ['value' => 'Discrete and confidential handling protocols']],
                'process' => [['value' => 'Client risk profile and travel exposure assessment'], ['value' => 'Coverage design and limit setting'], ['value' => 'Specialty market placement'], ['value' => '24/7 crisis response and claims support']],
            ],
            [
                'type' => 'specialty', 'sort_order' => 6,
                'name' => 'Marine Hull',
                'slug' => 'marine-hull',
                'description' => 'Specialist marine hull reinsurance broking, connecting insurance companies with London and international marine reinsurance markets for ocean-going vessels and inland waterway craft.',
                'full_description' => 'Our Marine Hull practice delivers expert reinsurance broking services to insurance companies for ocean-going vessels, fishing fleets, and inland waterway craft operating in African waters. We arrange treaty and facultative placements for hull and machinery, war risks, and protection & indemnity exposures, backed by deep maritime underwriting experience and access to London and international marine reinsurance markets.',
                'features' => [['value' => 'Hull & Machinery'], ['value' => 'War Risks Cover'], ['value' => 'Protection & Indemnity'], ['value' => 'Excess Liabilities'], ['value' => 'Fishing Fleet Cover'], ['value' => 'Inland Waterway Vessels']],
                'benefits' => [['value' => 'Access to London and international marine reinsurance markets'], ['value' => 'Specialist hull and P&I underwriting expertise'], ['value' => 'Comprehensive war risk and geopolitical cover capability'], ['value' => 'Effective claims handling for maritime losses on your behalf']],
                'process' => [['value' => 'Vessel and fleet risk assessment'], ['value' => 'Marine market strategy and selection'], ['value' => 'Hull, war, and P&I placement'], ['value' => 'Ongoing fleet monitoring and renewal support']],
            ],
            [
                'type' => 'specialty', 'sort_order' => 7,
                'name' => 'Power Projects',
                'slug' => 'power-projects',
                'description' => 'Specialist power project reinsurance broking, connecting insurance companies with energy reinsurance markets for power generation and renewable energy risk protection.',
                'full_description' => 'Our Power Projects practice delivers expert reinsurance broking services to insurance companies for Africa growing energy sector. We arrange treaty and facultative placements for thermal, hydroelectric, solar, and wind energy projects through both construction and operational phases, covering infrastructure damage, machinery breakdown, business interruption, and third-party liability exposures. Our team connects insurance clients with dedicated energy reinsurance markets and renewable energy specialists for comprehensive risk transfer across the power sector.',
                'features' => [['value' => 'Thermal Power Cover'], ['value' => 'Hydroelectric Projects'], ['value' => 'Solar Energy Insurance'], ['value' => 'Wind Farm Cover'], ['value' => 'Machinery Breakdown'], ['value' => 'Business Interruption']],
                'benefits' => [['value' => 'Specialist energy and power reinsurance capacity'], ['value' => 'Multi-phase coverage from construction to operation'], ['value' => 'Alternative and renewable energy project expertise'], ['value' => 'Technical engineering and loss prevention advisory']],
                'process' => [['value' => 'Power project feasibility and risk assessment'], ['value' => 'Phase-specific coverage structuring'], ['value' => 'Energy market placement and capacity aggregation'], ['value' => 'Project stage monitoring and claims support']],
            ],
            [
                'type' => 'specialty', 'sort_order' => 8,
                'name' => 'Political Risks',
                'slug' => 'political-risks',
                'description' => 'Specialist political risk reinsurance broking, connecting insurance companies with political risk and trade credit reinsurance markets for cross-border investment and trade protection.',
                'full_description' => 'Our Political Risks practice delivers expert reinsurance broking services to insurance companies for cross-border investments and trade in emerging markets, with particular expertise in the Zimbabwean and African context. We arrange placements for expropriation, currency inconvertibility, contract frustration, trade disruption, and sovereign default exposures, backed by access to leading political risk reinsurance markets and geopolitical analysis expertise. Our broking services enable insurance clients to offer political risk coverage with confidence, supported by informed risk assessment and specialist market relationships.',
                'features' => [['value' => 'Expropriation Cover'], ['value' => 'Currency Inconvertibility'], ['value' => 'Contract Frustration'], ['value' => 'Trade Disruption'], ['value' => 'Sovereign Default'], ['value' => 'Cross-Border Investment Protection']],
                'benefits' => [['value' => 'Access to specialist political risk and trade credit reinsurance markets'], ['value' => 'Geopolitical risk analysis and country expertise'], ['value' => 'Multi-year policy structuring for investment protection'], ['value' => 'Experienced claims handling for complex political events']],
                'process' => [['value' => 'Country and counterparty risk assessment'], ['value' => 'Coverage design and policy structuring'], ['value' => 'Specialty political risk market placement'], ['value' => 'Ongoing risk monitoring and claims advocacy']],
            ],
            [
                'type' => 'specialty', 'sort_order' => 9,
                'name' => 'Political Violence & Terrorism',
                'slug' => 'political-violence-terrorism',
                'description' => 'Specialist political violence and terrorism reinsurance broking, connecting insurance companies with terrorism pools and global markets for SRCC and sabotage protection.',
                'full_description' => 'Our Political Violence & Terrorism practice delivers expert reinsurance broking services to insurance companies in an increasingly complex global risk environment. We arrange placements for sabotage, terrorism, strikes, riots, civil commotion, and malicious damage across property, business interruption, and contingency exposures. Our broking services connect insurance clients with specialist terrorism pools and international reinsurance markets for effective risk transfer and accumulation management.',
                'features' => [['value' => 'Sabotage Cover'], ['value' => 'Terrorism Insurance'], ['value' => 'Riots & Civil Commotion'], ['value' => 'Strikes Cover'], ['value' => 'Malicious Damage'], ['value' => 'Strategic Infrastructure Protection']],
                'benefits' => [['value' => 'Access to government terrorism pools and global reinsurance capacity'], ['value' => 'Specialist political violence underwriting expertise'], ['value' => 'Comprehensive SRCC and terrorism cover structuring'], ['value' => 'Accumulation management and exposure monitoring']],
                'process' => [['value' => 'Political violence exposure and location assessment'], ['value' => 'Terrorism pool and market strategy'], ['value' => 'Coverage design and placement'], ['value' => 'Risk monitoring, accumulation control, and claims support']],
            ],
        ];

        foreach (array_merge($products, $specialties) as $data) {
            Service::create($data);
        }

        $this->command->info('Seeded ' . count($products) . ' products and ' . count($specialties) . ' specialties.');
    }
}
