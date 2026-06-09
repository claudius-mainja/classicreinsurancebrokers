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

export const collections = {
  blog: blogCollection,
};
