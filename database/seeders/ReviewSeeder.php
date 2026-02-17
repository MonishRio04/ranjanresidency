<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'name' => 'Hameeda Banu',
                'rating' => 5,
                'comment' => 'Clean rooms and good facilities at Ranjan Residency. The service was excellent and the staff were very helpful during our stay.',
                'created_at' => now()->subMonth(),
            ],
            [
                'name' => 'Jaganraja Appadurai',
                'rating' => 5,
                'comment' => 'We spent 2 full days recently here @ Ranjan Residency, Vellore for an Entrepreneur Association meeting. It was clean, well maintained, spacious and nicely located on the highway.',
                'created_at' => now()->subYear(),
            ],
            [
                'name' => 'Ragavendran Chandran',
                'rating' => 5,
                'comment' => 'Excellent place for a comfortable stay near Bangalore highway. The rooms are clean and the residency staff provide great hospitality.',
                'created_at' => now()->subYears(2),
            ],
            [
                'name' => 'Mohan R.mohan',
                'rating' => 4,
                'comment' => 'Decent stay with good room facilities at an affordable budget. Walkable distance from Poigai stopping along with NH towards Bangalore.',
                'created_at' => now()->subYears(3),
            ],
            [
                'name' => 'Aarthi Siva',
                'rating' => 4,
                'comment' => 'Spacious rooms and well-maintained facilities. The location is very convenient for guests travelling from outside Vellore for hospital visits.',
                'created_at' => now()->subYears(1),
            ]
        ];

        foreach ($reviews as $review) {
            \App\Models\Review::create($review);
        }
    }
}
