<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Pava Travel Co.</title>
    @vite('resources/css/aboutus.css')
    
</head>
<body>

    <header class="navbar">
        <div class="logo">PAVA <span>Travel Co.</span></div>
        <nav>
            <ul class="nav-links">
                <li><a href="">Destinations</a></li>
                <li><a href="">Hotels</a></li>
                <li><a href="">Bookings</a></li>
                <li><a href="">Login</a></li>
                <li><button class="signup-btn">Sign up</button></li>
            </ul>
        </nav>
    </header>

    <main class="about-page">
        <section class="intro-section">
            <div class="intro-text">
                <h1>About Us</h1>
                <p>
                    At Pava Travel Co., we believe that every journey should be as unforgettable as the destination. 
                    Founded with a passion for exploration and authentic experiences, we specialize in crafting personalized 
                    travel adventures that go beyond the ordinary. Our mission is to make your travel dreams come to life—one 
                    unforgettable trip at a time.
                </p>
                <p>
                    We specialize in curated travel packages that let you experience the world, one country at a time. Whether you're dreaming of 
                    the beaches of Greece, the streets of Tokyo, or the wildlife of South Africa, we craft unforgettable journeys tailored to your interests.
                </p>
            </div>
            <div class="intro-image">
                <img src="{{ asset('images/family.png') }}" alt="Happy Family at Airport">
            </div>
        </section>

        <section class="quote-section">
            <blockquote>
                "Bringing a travel platform to life takes more than just code—it takes creativity, precision, and a commitment to quality, all to make your journey smoother, seamless, and stress-free. That’s what drives our development team."
            </blockquote>
        </section>

        <section class="developers-section">
            <h2>Meet the Developers</h2>
            <div class="developers">
                @php
                    $developers = [
                        ['name' => 'Jake Matthew Viado', 'image' => 'jake.png'],
                        ['name' => 'Mary Ann Anacay', 'image' => 'mary.png'],
                        ['name' => 'Ela Shaina Aguilar', 'image' => 'ela.png'],
                        ['name' => 'Julius Patrick Peji', 'image' => 'julius.png'],
                    ];
                @endphp

                @foreach($developers as $dev)
                    <div class="developer-card">
                        <img src="{{ asset('images/' . $dev['image']) }}" alt="{{ $dev['name'] }}">
                        <h3>{{ $dev['name'] }}</h3>
                        <p>Bachelor of Science in Information Technology<br>Rogationist College</p>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="social-icons">
            <a href=""><img src="{{ asset('images/facebook.png') }}" alt="Facebook"></a>
            <a href=""><img src="{{ asset('images/instagram.png') }}" alt="Instagram"></a>
            <a href=""><img src="{{ asset('images/email.png') }}" alt="Email"></a>
        </div>
    </footer>

</body>
</html>
