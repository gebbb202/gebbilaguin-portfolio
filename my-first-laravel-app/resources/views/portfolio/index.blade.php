@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Portfolio')

@section('content')

<!-- Hero Section -->

<section class="hero-section">

    <div class="container">

        <img src="{{ $portfolio['profile_image'] }}" alt="{{ $portfolio['name'] }}" class="profile-img">

        <h1 class="display-4 mb-3">{{ $portfolio['name'] }}</h1>

        <h3 class="mb-4">{{ $portfolio['title'] }}</h3>

        <p class="lead mb-4">{{ $portfolio['bio'] }}</p>

    </div>

</section>

<!-- About Section -->

<section id="about" class="section">

    <div class="container">

        <h2 class="section-title">About Me</h2>

        <p>I'm a dedicated and passionate athlete with a relentless drive to compete, improve, and reach the highest levels of my sport. For over years, I’ve committed myself to daily training, disciplined routines, and a mindset built around growth, resilience, and excellence. Whether it’s on the field, in the gym, or in everyday life, I believe in showing up with purpose, pushing past limits, and setting the standard — not just meeting it.

I thrive under pressure, value teamwork as much as personal performance, and constantly seek new ways to sharpen both my body and mind. My journey as an athlete isn’t just about winning — it’s about becoming the best version of myself and inspiring others to do the same.</p>

    </div>

</section>

<!-- Projects Section -->

<section id="projects" class="section bg-light">

    <div class="container">

        <h2 class="section-title">My Projects</h2>
       <p>To build the physical, mental, and emotional strength required to compete at the professional level — through hard work, consistency, and a champion mindset.</p>
       <p>Daily Training: Structured strength, conditioning, and skill sessions 5–6 days per week.

Game IQ: Studying the game — reviewing film, analyzing plays, and learning from professionals.

Mental Discipline: Practicing focus, visualization, and resilience through every challenge.

Nutrition & Recovery: Maintaining a pro-level lifestyle that fuels performance and prevents injury.

Competition: Gaining experience through local, regional, and national events.

Brand & Legacy: Building a personal brand that reflects my values, journey, and impact — on and off the field.</p>
    </div>

</section>

<!-- Contact Section -->

<section id="contact" class="section">

    <div class="container">

        <h2 class="section-title">My Dream</h2>

        <p>Enter the NBA and become the first Filipino to play in the NBA</p>

    </div>

</section>

@endsection