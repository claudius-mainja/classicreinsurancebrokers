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
                'subtitle' => 'Comprehensive motor reinsurance covering private and commercial vehicle fleets, third-party liability, and accidental damage with facultative and treaty capacity across Southern Africa.',
                'features' => [
                    'Private Vehicle Fleets',
                    'Commercial Vehicle Fleets',
                    'Third-Party Liability',
                    'Accidental Damage',
                    'Goods in Transit Extensions',
                    'Fleet Management Solutions',
                ],
            ],
            'household' => [
                'name' => 'Household Insurance',
                'subtitle' => 'Domestic property reinsurance for buildings and contents, covering fire, allied perils, burglary, and weather-related risks for homeowners and tenants across urban and rural markets.',
                'features' => [
                    'Buildings Insurance',
                    'Contents Insurance',
                    'Fire & Allied Perils',
                    'Burglary & Theft',
                    'Weather-Related Risks',
                    'Home Emergency Cover',
                ],
            ],
            'engineering' => [
                'name' => 'Engineering Insurance',
                'subtitle' => 'Specialist engineering reinsurance for contractor\'s all risks, erection all risks, plant & machinery breakdown, and electronic equipment insurance supporting infrastructure projects.',
                'features' => [
                    'Contractor\'s All Risks',
                    'Erection All Risks',
                    'Plant & Machinery Breakdown',
                    'Electronic Equipment Insurance',
                    'Delay in Start-up',
                    'Infrastructure Project Cover',
                ],
            ],
            'assets-all-risks' => [
                'name' => 'Assets All Risks',
                'subtitle' => 'Comprehensive all-risks reinsurance for commercial and industrial assets, including property damage, business interruption, and consequential loss on a worldwide coverage basis.',
                'features' => [
                    'Property Damage',
                    'Business Interruption',
                    'Consequential Loss',
                    'Worldwide Coverage',
                    'Industrial Asset Protection',
                    'Commercial Property Cover',
                ],
            ],
            'liability-insurance' => [
                'name' => 'Liability Insurance',
                'subtitle' => 'Comprehensive liability reinsurance covering public liability, product liability, professional indemnity, employers\' liability, and directors & officers liability for diverse industries.',
                'features' => [
                    'Public Liability',
                    'Product Liability',
                    'Professional Indemnity',
                    'Employers\' Liability',
                    'Directors & Officers Liability',
                    'Environmental Liability',
                ],
            ],
            'group-personal-accidents' => [
                'name' => 'Group Personal Accidents',
                'subtitle' => 'Group personal accident reinsurance for employers, associations, and affinity groups covering accidental death, permanent and temporary disablement, and medical expense reimbursement.',
                'features' => [
                    'Accidental Death Cover',
                    'Permanent Disablement',
                    'Temporary Disablement',
                    'Medical Expense Reimbursement',
                    'Emergency Evacuation',
                    'Group Affinity Schemes',
                ],
            ],
            'travel-insurance' => [
                'name' => 'Travel Insurance',
                'subtitle' => 'Comprehensive travel reinsurance covering medical evacuation, trip cancellation, baggage loss, personal accident, and emergency assistance for both domestic and international travellers.',
                'features' => [
                    'Medical Evacuation',
                    'Trip Cancellation',
                    'Baggage Loss',
                    'Personal Accident',
                    'Emergency Assistance',
                    'Domestic & International Cover',
                ],
            ],
            'goods-in-transit' => [
                'name' => 'Goods In Transit',
                'subtitle' => 'Marine cargo and goods-in-transit reinsurance covering loss or damage to merchandise during transportation by road, rail, air, or sea, including warehouse-to-warehouse extensions.',
                'features' => [
                    'Road Transit',
                    'Rail Transit',
                    'Air Cargo',
                    'Sea Freight',
                    'Warehouse-to-Warehouse Cover',
                    'Stock Throughput',
                ],
            ],
            'agriculture-insurance' => [
                'name' => 'Agriculture Insurance',
                'subtitle' => 'Agricultural reinsurance covering crop, livestock, aquaculture, and forestry risks including weather-index, multi-peril crop, and livestock mortality programmes for smallholder and commercial farming.',
                'features' => [
                    'Crop Insurance',
                    'Livestock Mortality',
                    'Weather-Index Insurance',
                    'Multi-Peril Crop Cover',
                    'Aquaculture Insurance',
                    'Forestry Insurance',
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
                'description' => 'Aviation reinsurance covering hull & liability for commercial airlines, general aviation, rotorcraft, airports, and maintenance facilities with access to London and Lloyd\'s markets.',
                'features' => [
                    'Airline Hull & Liability',
                    'General Aviation',
                    'Rotorcraft Cover',
                    'Airport Operators Liability',
                    'Maintenance Facilities',
                    'Aviation Product Liability',
                ],
            ],
            'bankers-blanket' => [
                'name' => 'Bankers\' Blanket Insurance',
                'description' => 'Comprehensive reinsurance for financial institutions covering fidelity, forgery, theft, computer crime, and internal fraud with tailored limits for commercial and investment banks.',
                'features' => [
                    'Fidelity Guarantee',
                    'Forgery Cover',
                    'Theft & Fraud',
                    'Computer Crime',
                    'Internal Fraud Protection',
                    'Financial Institution Cover',
                ],
            ],
            'construction-projects' => [
                'name' => 'Construction Projects Insurance',
                'description' => 'Project-specific reinsurance for major infrastructure developments covering CAR, EAR, delay in start-up, and third-party liability for roads, bridges, dams, and commercial developments.',
                'features' => [
                    'Contractor\'s All Risks',
                    'Erection All Risks',
                    'Delay in Start-up',
                    'Third-Party Liability',
                    'Infrastructure Development',
                    'Commercial Construction',
                ],
            ],
            'cyber' => [
                'name' => 'Cyber Insurance',
                'description' => 'Cyber reinsurance covering data breaches, ransomware, business interruption from system failure, network security liability, and privacy regulation defence for corporate and public entities.',
                'features' => [
                    'Data Breach Response',
                    'Ransomware Cover',
                    'Business Interruption',
                    'Network Security Liability',
                    'Privacy Regulation Defence',
                    'Cyber Extortion',
                ],
            ],
            'kidnap-and-ransom' => [
                'name' => 'Kidnap & Ransom Insurance',
                'description' => 'Specialist K&R reinsurance covering ransom payments, crisis response consultancy, legal liability, and extortion threats for multinational corporations, executives, and high-net-worth individuals.',
                'features' => [
                    'Ransom Payments',
                    'Crisis Response Consultancy',
                    'Legal Liability Cover',
                    'Extortion Threats',
                    'Executive Protection',
                    'High-Net-Worth Individual Cover',
                ],
            ],
            'marine-hull' => [
                'name' => 'Marine Hull Insurance',
                'description' => 'Marine hull reinsurance for ocean-going vessels, coastal craft, fishing fleets, and inland waterway boats covering hull & machinery, war risks, protection & indemnity, and excess liabilities.',
                'features' => [
                    'Hull & Machinery',
                    'War Risks Cover',
                    'Protection & Indemnity',
                    'Excess Liabilities',
                    'Fishing Fleet Cover',
                    'Inland Waterway Vessels',
                ],
            ],
            'power-projects' => [
                'name' => 'Power Projects Insurance',
                'description' => 'Energy reinsurance for power generation assets including thermal, hydroelectric, solar, and wind projects covering construction, operational all risks, machinery breakdown, and business interruption.',
                'features' => [
                    'Thermal Power Cover',
                    'Hydroelectric Projects',
                    'Solar Energy Insurance',
                    'Wind Farm Cover',
                    'Machinery Breakdown',
                    'Business Interruption',
                ],
            ],
            'political-risks' => [
                'name' => 'Political Risks Insurance',
                'description' => 'Political risk reinsurance covering expropriation, currency inconvertibility, contract frustration, trade disruption, and sovereign default for cross-border investments and international trade.',
                'features' => [
                    'Expropriation Cover',
                    'Currency Inconvertibility',
                    'Contract Frustration',
                    'Trade Disruption',
                    'Sovereign Default',
                    'Cross-Border Investment Protection',
                ],
            ],
            'political-violence-terrorism' => [
                'name' => 'Political Violence & Terrorism Insurance',
                'description' => 'Specialist reinsurance covering sabotage, terrorism, riots, strikes, civil commotion, and malicious damage for commercial properties, government assets, and strategic infrastructure.',
                'features' => [
                    'Sabotage Cover',
                    'Terrorism Insurance',
                    'Riots & Civil Commotion',
                    'Strikes Cover',
                    'Malicious Damage',
                    'Strategic Infrastructure Protection',
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
