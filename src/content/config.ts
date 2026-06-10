import { defineCollection, z } from 'astro:content';

const blogCollection = defineCollection({
  type: 'content',
  schema: z.object({
    title: z.string(),
    excerpt: z.string(),
    publishedAt: z.date(),
    author: z.string(),
    authorAvatar: z.string().default('/images/team-placeholder.jpg'),
    category: z.string(),
    tags: z.array(z.string()).default([]),
    featuredImage: z.string().default('/images/herobg.png'),
    readingTime: z.string().default('5'),
    ogImage: z.string().optional(),
  }),
});

const jobsCollection = defineCollection({
  type: 'content',
  schema: z.object({
    title: z.string(),
    location: z.string().default('Harare, Zimbabwe'),
    type: z.enum(['Full-time', 'Part-time', 'Contract', 'Internship']).default('Full-time'),
    department: z.string(),
    description: z.string(),
    requirements: z.array(z.string()).default([]),
    salaryRange: z.string().optional(),
    closingDate: z.date().optional(),
    published: z.boolean().default(true),
  }),
});

export const collections = {
  blog: blogCollection,
  jobs: jobsCollection,
};
