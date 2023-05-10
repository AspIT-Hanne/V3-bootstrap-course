<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <title>Bootstrap</title>
</head>
<body class="pt-5 pb-5">

<header class="mt-2">
  <img src="images/wisdompetlogo.svg" alt="Wisdom Pet Logo">

  <nav class="px-2 navbar navbar-expand-md navbar-light bg-light fixed-top">
    <a class="navbar-brand position-absolute m-5 m-md-3" href="index.php">
        Wisdom Pet Medicine
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navContent">
      <ul class="navbar-nav w-100 justify-content-center">
        <li class="nav-item active">
          <a class="nav-link text-uppercase text-secondary" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase text-secondary" href="doctors.php">Our doctors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase text-secondary" href="testimonials.php">Testimonials</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-uppercase text-secondary" href="#" id="TreatmentDropdown" role="button" data-bs-toggle="dropdown">
            Treatments
          </a>
          <div class="dropdown-menu" aria-labelledby="TreatmentDropdown">
            <a class="dropdown-item text-uppercase text-secondary" href="inhousediag.php">In-House Diagnostics</a>
            <a class="dropdown-item text-uppercase text-secondary" href="Surgery.php">Surgery and Dental Services</a>
            <a class="dropdown-item text-uppercase text-secondary" href="Behavioural.php">Behavioral Consultation</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</header>

<div class="container">
  
  <section class="row">
    <article class="col">
        <h1>Testimonials</h1>
        <p class="lead mt-5 mb-5">We thank you for all your kind words and useful feedback.</h3>
    </article>
  </section>
  
  <section class="h-50">
    <div id="testimonial-carousel" class="carousel slide d-none d-lg-block" data-bs-ride="carousel">
      <div class="carousel-indicators mb-5">
        <button type="button" data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#testimonial-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#testimonial-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/testimonial-janeh.jpg" class="d-block w-100" alt="testimonial rabbit">
          <div class="carousel-caption mb-3 bg-info">
            <p>During the summer, our rabbit, Tonto, began to have severe redness  and itching on his belly and feet. I'm very thankful to the veterinarians and staff at Wisdom for the excellent care Tonto received, and for nipping his allergies in the bud, so to speak.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/testimonial-johnb.jpg" class="d-block w-100" alt="testimonial golden retriever">
          <div class="carousel-caption mb-3 d-block bg-info">
            <p>The staff at Wisdom worked tirelessly to determine why our three-year old Golden Retriever, Roxie, started going into sudden kidney failure. They stabilized her and provided fluids until her kidneys were again functioning normally.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/testimonial-lorraines.jpg" class="d-block w-100" alt="testimonial fish">
          <div class="carousel-caption mb-3 d-block bg-info">
            <p>Wisdom Pet Medicine is the only clinic around that will even book pet fish for appointments. When our 13-year old Comet goldfish, McAllister, turned from silvery white to an angry red, we called around, urgently trying to find a veterinarian who could help. Wisdom not only got us in the same day, but also was able to diagnose McAllister as having a severe case of septicemia.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

    </div>
  </section>

<section class="content" id="testimonials">
  

  <figure class="card d-block d-lg-none">
    <img class="img-fluid card-img-top" src="images/testimonial-janeh.jpg" alt="Jane Photo">
    <div class="card-body">
      <figcaption class="card-text">During the summer, our rabbit, Tonto, began to have severe redness  and itching on his belly and feet. I'm very thankful to the veterinarians and staff at Wisdom for the excellent care Tonto received, and for nipping his allergies in the bud, so to speak.</figcaption>
    </div>
  </figure>

  <figure class="card d-block d-sm-none">
    <img class="img-fluid card-img-top" src="images/testimonial-johnb.jpg" alt="John B Photo">
    <div class="card-body">
      <figcaption>The staff at Wisdom worked tirelessly to determine why our three-year old Golden Retriever, Roxie, started going into sudden kidney failure. They stabilized her and provided fluids until her kidneys were again functioning normally.</figcaption>
    </div>
  </figure>

  <figure class="card d-block d-sm-none">
    <img class="img-fluid card-img-top" src="images/testimonial-lorraines.jpg" alt="Lorraine Photo">
    <div class="card-body">
      <figcaption>Wisdom Pet Medicine is the only clinic around that will even book pet fish for appointments. When our 13-year old Comet goldfish, McAllister, turned from silvery white to an angry red, we called around, urgently trying to find a veterinarian who could help. Wisdom not only got us in the same day, but also was able to diagnose McAllister as having a severe case of septicemia.</figcaption>
    </div>
  </figure>

</section>

</div><!-- content container -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
