<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\Faq;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        // Team Members
        $team = [
            ['name' => 'Kingstone Mhinda', 'position' => 'Technical Director', 'bio' => null, 'image' => 'Kingstone.png', 'sort_order' => 0],
            ['name' => 'Nyasha E Whende', 'position' => 'Operations Manager', 'bio' => null, 'image' => 'Nyasha.png', 'sort_order' => 1],
            ['name' => 'Rachel N. Hakutangwi', 'position' => 'Senior Reinsurance Broker', 'bio' => null, 'image' => 'rachel.png', 'sort_order' => 2],
            ['name' => 'Tinashe Y Chadenga', 'position' => 'Assistant Accountant', 'bio' => null, 'image' => 'team/Tinashe.jpeg', 'sort_order' => 3],
            ['name' => 'Doreen Mabhiza', 'position' => 'Trainee Broker', 'bio' => null, 'image' => 'team/Doreen.jpeg', 'sort_order' => 4],
        ];

        foreach ($team as $data) {
            TeamMember::create($data);
        }

        // Testimonials
        $testimonials = [
            [
                'name' => 'Tafadzwa Mukwena',
                'position' => 'Managing Director',
                'company' => 'ZimRe Holdings',
                'content' => 'Classic Reinsurance Brokers has been instrumental in helping us access competitive reinsurance capacity across our portfolio. Their technical expertise and deep market relationships consistently deliver exceptional value.',
                'rating' => 5,
            ],
            [
                'name' => 'Sibongile Ndlovu',
                'position' => 'CEO',
                'company' => 'Fidelity Insurance',
                'content' => 'The team at Classic brings unparalleled knowledge of the Zimbabwean insurance market combined with strong international reinsurer relationships. Their claims advocacy has been outstanding.',
                'rating' => 5,
            ],
            [
                'name' => 'Chengetai Makoni',
                'position' => 'Head of Underwriting',
                'company' => 'National Fire & Casualty',
                'content' => 'We have partnered with Classic Reinsurance Brokers for over five years. Their ability to structure innovative treaty programmes tailored to our specific risk profile sets them apart.',
                'rating' => 5,
            ],
        ];

        foreach ($testimonials as $data) {
            Testimonial::create($data);
        }

        // FAQs
        $faqs = [
            [
                'question' => 'What reinsurance broking services does Classic Reinsurance Brokers offer?',
                'answer' => 'We provide comprehensive reinsurance broking services across nine core products including Motor, Household, Engineering, Assets All Risks, Liability, Group Personal Accidents, Travel, Goods In Transit, and Agriculture Insurance. We also specialise in nine specialty risk classes such as Aviation, Cyber, Political Risks, and more. Additionally, we offer strategic reinsurance advisory services.',
                'sort_order' => 0,
            ],
            [
                'question' => 'How can I get a reinsurance quote?',
                'answer' => 'You can request a quote by filling out our contact form, calling us at +263 242 773192/3/4, or emailing info@classicre.co.zw. Our team will respond within 24 hours to discuss your specific requirements and provide a tailored reinsurance solution.',
                'sort_order' => 1,
            ],
            [
                'question' => 'Which markets do you serve?',
                'answer' => 'We primarily serve insurance companies across Zimbabwe and the broader African market. Our extensive network of global and regional reinsurer relationships allows us to access capacity from markets including London, Lloyd\'s, Europe, South Africa, and Asia to structure optimal solutions for our clients.',
                'sort_order' => 2,
            ],
            [
                'question' => 'What types of reinsurance treaties do you arrange?',
                'answer' => 'We arrange both proportional (quota share, surplus) and non-proportional (excess of loss, stop loss) treaty reinsurance structures. Our team designs bespoke programmes that align with each client\'s risk appetite, portfolio characteristics, and growth objectives.',
                'sort_order' => 3,
            ],
            [
                'question' => 'How do you handle claims advocacy?',
                'answer' => 'Our claims advocacy service ensures that your claims are managed efficiently and fairly. We assist with claim preparation, documentation, submission, and negotiation with reinsurers to ensure prompt and equitable settlement. Our team acts as your dedicated advocate throughout the claims process.',
                'sort_order' => 4,
            ],
            [
                'question' => 'Is Classic Reinsurance Brokers regulated?',
                'answer' => 'Yes, Classic Reinsurance Brokers is a licensed and regulated insurance brokerage firm operating in compliance with the Insurance and Pensions Commission (IPEC) of Zimbabwe. We adhere to the highest standards of professional conduct, financial security, and regulatory compliance.',
                'sort_order' => 5,
            ],
        ];

        foreach ($faqs as $data) {
            Faq::create($data);
        }

        $this->command->info('Seeded ' . count($team) . ' team members, ' . count($testimonials) . ' testimonials, and ' . count($faqs) . ' FAQs.');
    }
}
