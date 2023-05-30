<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'film' => 'The Shawshank Redemption',
            'user' => 'John Doe',
            'rating' => '9.5',
            'review' => 'This movie is a masterpiece. The acting, the storyline, and the ending are all fantastic',
            'tanggal' => '2022-03-12',
        ]); 
        Review::create([
            'film' => 'Parasite',
            'user' => 'Mark Johnson',
            'rating' => '9.0',
            'review' => 'This movie is a gripping social commentary that is both humorous and thought provoking. Highly recommended',
            'tanggal' => '2022-05-01',
        ]); 
        Review::create([
            'film' => 'Inception',
            'user' => 'Jane Smith',
            'rating' => '8.5',
            'review' => 'The concept of this movie is mind bending and the special effects are incredible. However are felt the plot was a bit convoluted at times',
            'tanggal' => '2022-04-23',
        ]); 
        Review::create([
            'film' => 'Jalan yang Jauh Jangan Lupa Pulang',
            'user' => 'Angga Dwimas Sasongko',
            'rating' => '8.8',
            'review' => 'Gaya storytelling dalam film ini terasa khas banget dengan Angga Dwimas Sasongko. Kali ini sang sutradara seperti ingin membuat visualisasi layaknya penonton sedang membaca novel.',
            'tanggal' => '2023-02-02',
        ]);  
        Review::create([
            'film' => 'Imperfect',
            'user' => 'Ernest Prakasa',
            'rating' => '8.5',
            'review' => 'Imperfect memang mengangkat sebuah isu yang kerap kali terjadi dalam gaya hidup sehari-hari. Dan dalam film ini, Rara memang adalah sang tokoh utama. Tapi kita juga dapat melihat, bahwa perasaan insecure dialami oleh beberapa tokohnya sekaligus',
            'tanggal' => '2019-12-19',
        ]); 
    }
}
