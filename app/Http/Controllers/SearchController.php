<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');

        if (!$query || strlen(trim($query)) < 2) {
            return view('pages.search', ['results' => null]);
        }

        $query = trim($query);
        $like = '%' . $query . '%';

        $products = collect($this->searchProducts($query));
        $specialties = collect($this->searchSpecialties($query));

        $blogPosts = BlogPost::published()
            ->where(function ($q) use ($like) {
                $q->where('title', 'like', $like)
                  ->orWhere('content', 'like', $like)
                  ->orWhere('excerpt', 'like', $like);
            })
            ->get()
            ->map(function ($post) {
                return (object) [
                    'title' => $post->title,
                    'url' => route('blog.show', $post->slug),
                    'excerpt' => strip_tags($post->excerpt ?: substr($post->content, 0, 200)),
                    'type' => 'Blog Post',
                ];
            });

        $careers = Career::where('is_active', true)
            ->where(function ($q) use ($like) {
                $q->where('title', 'like', $like)
                  ->orWhere('description', 'like', $like)
                  ->orWhere('requirements', 'like', $like);
            })
            ->get()
            ->map(function ($job) {
                return (object) [
                    'title' => $job->title,
                    'url' => route('careers.show', $job->slug),
                    'excerpt' => strip_tags(substr($job->description, 0, 200)),
                    'type' => 'Career',
                ];
            });

        $results = $products->concat($specialties)
            ->concat($blogPosts)
            ->concat($careers);

        $perPage = 12;
        $page = request()->input('page', 1);
        $total = $results->count();
        $items = $results->forPage($page, $perPage);

        $results = new \Illuminate\Pagination\LengthAwarePaginator(
            $items,
            $total,
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        return view('pages.search', compact('results'));
    }

    private function searchProducts($query)
    {
        $products = [
            'motor-insurance' => 'Motor Insurance',
            'household' => 'Household Insurance',
            'engineering' => 'Engineering Insurance',
            'assets-all-risks' => 'Assets All Risks',
            'liability-insurance' => 'Liability Insurance',
            'group-personal-accidents' => 'Group Personal Accidents',
            'travel-insurance' => 'Travel Insurance',
            'goods-in-transit' => 'Goods In Transit',
            'agriculture-insurance' => 'Agriculture Insurance',
        ];

        $results = [];
        foreach ($products as $slug => $name) {
            if (stripos($name, $query) !== false || stripos($slug, str_replace(' ', '-', $query)) !== false) {
                $results[] = (object) [
                    'title' => $name,
                    'url' => route('services.product', $slug),
                    'excerpt' => "Reinsurance product covering {$name} risks across African markets.",
                    'type' => 'Product',
                ];
            }
        }

        return $results;
    }

    private function searchSpecialties($query)
    {
        $specialties = [
            'aviation' => 'Aviation Insurance',
            'bankers-blanket' => "Bankers' Blanket Insurance",
            'construction-projects' => 'Construction Projects Insurance',
            'cyber' => 'Cyber Insurance',
            'kidnap-and-ransom' => 'Kidnap & Ransom Insurance',
            'marine-hull' => 'Marine Hull Insurance',
            'power-projects' => 'Power Projects Insurance',
            'political-risks' => 'Political Risks Insurance',
            'political-violence-terrorism' => 'Political Violence & Terrorism Insurance',
        ];

        $results = [];
        foreach ($specialties as $slug => $name) {
            if (stripos($name, $query) !== false || stripos($slug, str_replace(' ', '-', $query)) !== false) {
                $results[] = (object) [
                    'title' => $name,
                    'url' => route('services.specialty', $slug),
                    'excerpt' => "Specialty reinsurance solution for {$name} risks.",
                    'type' => 'Specialty',
                ];
            }
        }

        return $results;
    }
}
