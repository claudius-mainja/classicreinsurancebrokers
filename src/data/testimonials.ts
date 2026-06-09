export interface Testimonial {
  name: string;
  position: string;
  company: string;
  content: string;
  rating: number;
}

export const testimonials: Testimonial[] = [
  {
    name: 'Tendai M.',
    position: 'CEO',
    company: 'Leading Zimbabwean Insurer',
    content:
      "Classic Reinsurance Brokers has consistently delivered exceptional reinsurance placements for our portfolio. Their deep understanding of both local and international markets ensures we always get competitive terms. Their team's professionalism and technical expertise make them our trusted reinsurance partner.",
    rating: 5,
  },
  {
    name: 'Sarah C.',
    position: 'Head of Underwriting',
    company: 'Regional Insurance Company',
    content:
      'The team at Classic Reinsurance Brokers provides outstanding advisory support. Their market intelligence and analytical capabilities have helped us optimise our reinsurance programme significantly. We particularly value their responsiveness and the quality of their treaty presentations.',
    rating: 5,
  },
  {
    name: 'Peter N.',
    position: 'Managing Director',
    company: 'African Insurance Group',
    content:
      'We have worked with Classic Reinsurance Brokers for several years and have always been impressed by their technical competence and market access. They consistently find innovative solutions for complex risks and their claims advocacy is first-class.',
    rating: 5,
  },
];
