<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
        ];
    }
    public function default()
    {
        //Blog, Articles, Security, education

        //Blog - News, Industry News
        //Articles -  computing, business, finance
        //Security - VPN, Cyber Security, Ransomware
        //Education - Bootcamps, Development, Business Management



        $categories = DB::table('categories')->insert([
            [
                'title' => 'Blog',
                'slug' => 'blog',
                'parent_id' => null
            ],
            [
                'title' => 'Articles',
                'slug' => 'articles',
                'parent_id' => null
            ],
            [
                'title' => 'Security',
                'slug' => 'security',
                'parent_id' => null
            ],
            [
                'title' => 'Education',
                'slug' => 'education',
                'parent_id' => null
            ],
            [
                'title' => 'News',
                'slug' => 'news',
                'parent_id' => 1
            ],
            [
                'title' => 'Industry News',
                'slug' => 'industry-news',
                'parent_id' => 1
            ],
            [
                'title' => 'Computing',
                'slug' => 'computing',
                'parent_id' => 2
            ],
            [
                'title' => 'business',
                'slug' => 'business',
                'parent_id' => 2
            ],
            [
                'title' => 'Finance',
                'slug' => 'finance',
                'parent_id' => 2
            ],
            [
                'title' => 'VPN',
                'slug' => 'vpn',
                'parent_id' => 3
            ],
            [
                'title' => 'Cyber Security',
                'slug' => 'cyber-security',
                'parent_id' => 3
            ],
            [
                'title' => 'Ransomeware',
                'slug' => 'ransomware',
                'parent_id' => 3
            ],
            [
                'title' => 'Bootcamps',
                'slug' => 'bootcamps',
                'parent_id' => 4
            ],
            [
                'title' => 'Development',
                'slug' => 'development',
                'parent_id' => 4
            ],
            [
                'title' => 'Business Management',
                'slug' => 'business-management',
                'parent_id' => 4
            ],
        ]);
    }
}
