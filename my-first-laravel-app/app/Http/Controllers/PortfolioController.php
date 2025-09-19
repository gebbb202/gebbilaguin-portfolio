<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{

    public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

            'name' => 'Jhon Vic Gebilaguin',

            'title' => 'Professional Basketball Player',

            'email' => 'jhonvicgebilaguin@gmail.com',

            'phone' => '+63994089844',

            'location' => 'PH, Manila',

            'bio' => 'Every line of code is a chance to get better. Obsession isn’t a weakness — it’s the fuel that separates the average from the exceptional...',

            'profile_image' => 'https://lh3.googleusercontent.com/a/ACg8ocJNDvqiCUrjwpFY57DgbnKhi66_2iTAgTvNMio2F16SA3W2ktFXKGv3EOb84ZqH48Ye_OkHSp-YTZJ6AfVSQA5GhoAC6Vk=s288-c-no',

            'skills' => ['Leadership', 'Teamwork', 'Communication'],

            'projects' => ['A long-term personal development project focused on transforming passion for sports into professional excellence. This journey involves mastering physical conditioning, developing a winning mindset, and building leadership and teamwork skills both on and off the field.'], // Project data

            'experience' => ['Trained rigorously 5–6 days per week, focusing on strength, endurance, skill, and tactical development.'], // Experience data

            'education' => ['Dagat-Dagatan Elementary School','Longos National High-School','College Of Saint Amatiel'], // Education data

            'social_links' => ['instagram: trzzygeb','facebook: Gebilaguin Jann Vic'] // Social media links

        ];

        return view('portfolio.index', compact('portfolio'));

    }

}