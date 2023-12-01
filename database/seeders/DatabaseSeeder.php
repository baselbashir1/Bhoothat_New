<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\EducationLevel;
use Illuminate\Database\Seeder;
use App\Http\Enums\EducationLevelArabic;
use App\Http\Enums\EducationLevelEnglish;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create();

        $educationLevelEnglish = EducationLevelEnglish::getEducationLevelEnglish();
        $educationLevelArabic = EducationLevelArabic::getEducationLevelArabic();

        for ($i = 0, $j = 0; $i < 3, $j < 3; $i++, $j++) {
            EducationLevel::create([
                'name_en' => $i,
                'name_ar' => $j
            ]);
        }

        // foreach ([$educationLevelEnglish, $educationLevelArabic] as $val) {
        //     EducationLevel::create([
        //         'name_en' => $val[0],
        //         'name_ar' => $val[1]
        //     ]);
        // }

        // foreach ($educationLevelEnglish as $en) {
        //     EducationLevel::create([
        //         'name_en' => $en,
        //         'name_ar' => $en
        //     ]);
        // }
    }
}
