<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Category;
use App\Models\Writer;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        $articles = [
            [
                'title' => 'Introduction to Machine Learning',
                'excerpt' => 'Learn the basics of Machine Learning — from supervised to unsupervised learning techniques.',
                'content' => 'Machine Learning is a subset of Artificial Intelligence that allows systems to learn automatically...',
                'category' => 'Data Science',
            ],
            [
                'title' => 'Deep Learning Fundamentals',
                'excerpt' => 'Understand how deep learning models are structured and trained using neural networks.',
                'content' => 'Deep Learning uses multi-layered neural networks to extract features and make predictions...',
                'category' => 'Data Science',
            ],
            [
                'title' => 'Data Visualization Techniques',
                'excerpt' => 'Present data insights using effective visualization tools and libraries.',
                'content' => 'Data visualization helps us understand trends and outliers in data through visual representation...',
                'category' => 'Data Science',
            ],
            [
                'title' => 'Introduction to Network Security',
                'excerpt' => 'Discover the fundamentals of protecting systems and data in computer networks.',
                'content' => 'Network Security involves protecting computer networks from unauthorized access...',
                'category' => 'Network Security',
            ],
            [
                'title' => 'Software Security Essentials',
                'excerpt' => 'Learn how to secure software systems from common vulnerabilities and attacks.',
                'content' => 'Software security focuses on identifying and mitigating vulnerabilities in software applications...',
                'category' => 'Network Security',
            ],
            [
                'title' => 'Popular Network Technologies',
                'excerpt' => 'Explore the modern technologies that make up today’s computer networks.',
                'content' => 'From routers to cloud-based networking, understanding modern network technologies is crucial...',
                'category' => 'Network Security',
            ],
        ];

        foreach ($articles as $data) {
            // 🔹 Temukan atau buat kategori
            $category = Category::firstOrCreate(['name' => $data['category']]);

            // 🔹 Ambil writer random, kalau belum ada buat satu
            $writer = Writer::inRandomOrder()->first();
            if (!$writer) {
                $writer = Writer::create([
                    'name' => $faker->name(),
                    'email' => $faker->unique()->safeEmail(),
                ]);
            }

            // 🔹 Buat artikel
            Article::create([
                'title' => $data['title'],
                'excerpt' => $data['excerpt'],
                'content' => $data['content'],
                'category_id' => $category->id,
                'writer_id' => $writer->id,
                'published_at' => $faker->date(),
                'views' => $faker->numberBetween(10, 500),
            ]);
        }
    }
}
