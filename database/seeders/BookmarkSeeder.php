<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get Test user
        $testUser = User::where('email','test@test.com')->firstOrFail();

        $jobIds = Job::pluck('id')->toArray();

        // Randomly select jobs to bookmark
        $randomJobIds = array_rand($jobIds, 3);

        // Attach the selected jobs as bookmarked for the test user
        foreach ($randomJobIds as $jobId) {
            $testUser->bookmarkedJobs()->attach($jobIds[$jobId]);
        }
    }
}
