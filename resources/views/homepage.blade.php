<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navigation />

    <header class="hero">
    <div class="overlay">
      <h1>Live a life to the 
      fullest, make your 
      memories with us -
      Book now!</h1>
      <button>Find out more</button>
    </div>
  </header>

  <section class="services">
    <h2>We Offer Best Services</h2>
    <div class="service-cards">
      <div class="card">
        <img src="../images/weather.png" class="img-weather" alt="Image Not Available" />
                </img>
        <h3>Calculated Weather</h3>
        <p>Get accurate, location-based weather forecasts.</p>
      </div>
      <div class="card">
        <img src="../images/plane.png" class="img-plane" alt="Image Not Available" />
                </img>
        <h3>Affordable Flights</h3>
        <p>Find and book budget-friendly flights to your chosen destination.</p>
      </div>
      <div class="card">
        <img src="../images/microphone.png" class="img-microphone" alt="Image Not Available" />
                </img>
        <h3>Cultural Experience</h3>
        <p>Explore rich traditions and cultures of each place.</p>
      </div>
      <div class="card">
        <img src="../images/customize.png" class="img-customize" alt="Image Not Available" />
                </img>
        <h3>Custom Travel Package</h3>
        <p>We design trips tailored to your needs.</p>
      </div>
    </div>
  </section>

  <!-- To be populated -->

  <section class="destinations">
    <h2>Our Top Destinations</h2>
    <div class="destination-cards">
      <div class="destination">
        <img src="https://assets.vogue.in/photos/667922097830445356ea2be9/3:4/w_2560%2Cc_limit/Paris.jpg" alt="Paris" />
        <div class="info">
          <h3>Paris</h3>
          <p>₱ 22,999 - 5 Days Trip</p>
        </div>
      </div>
</div>

<div class="destination-cards">
        <div class="destination">
        <img src="https://exodus-website.s3.amazonaws.com/uploads/2022/08/japan-kyoto-1024x646.jpg" alt="Japan" />
        <div class="info">
          <h3>Japan</h3>
          <p>₱ 19,599 - 7 Days Trip</p>
        </div>
      </div>
</div>

<div class="destination-cards">
        <div class="destination">
        <img src="https://res.cloudinary.com/enchanting/q_80,f_auto,c_lfill,x_w_mul_0.49,y_h_mul_0.53,g_xy_center,w_360,h_270/exodus-web/2023/02/shutterstock_2131706207.jpg" alt="Vietnam" />
        <div class="info">
          <h3>Vietnam</h3>
          <p>₱ 24,399 - 7 Days Trip</p>
        </div>
      </div>
</div>
      <!-- <div class="destination">
        <img src="japan.jpg" alt="Japan" />
        <div class="info">
          <h3>Japan</h3>
          <p>₱ 19,599 - 7 Days Trip</p>
        </div>
      </div>
      <div class="destination">
        <img src="vietnam.jpg" alt="Vietnam" />
        <div class="info">
          <h3>Vietnam</h3>
          <p>₱ 24,399 - 7 Days Trip</p>
        </div>
      </div>
    </div> -->
  </section>
        
</body>

</html>