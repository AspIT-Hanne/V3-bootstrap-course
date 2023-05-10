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

  <section class="row" id="mission">
    <article class="col">

      <h1>Our Commitment to you</h1>
      <p class="lead mt-5 mb-5">Wisdom Pet Medicine strives to blend the best in traditional and alternative medicine in the diagnosis and treatment of companion animals including dogs, cats, birds, reptiles, rodents, and fish. We apply the wisdom garnered in the centuries old tradition of veterinary medicine, to find the safest treatments and cures.</p>
      <p class="lead mt-5 mb-5">We strive to be your pet's medical experts from youth through the senior years. We build preventative health care plans for each and every one of our patients, based on breed, age, and sex, so that your pet receives the most appropriate care at crucial milestones. We want to give your pet a long and healthylife.</p>
    </article>
  </section>

  <section class="row row-cols-1 row-cols-sm-2 row-cols-md-3 mb-5" id="services">
    <article class="col">
      <img src="images/icon-exoticpets.svg" class="mx-auto">
      <h2 class="text-center">Exotic Pets</h2>
      <p>We offer specialized care for reptiles, rodents, birds, and other exotic pets.</p>
    </article>
  
    <article class="col">
      <img src="images/icon-grooming.svg" class="mx-auto">
      <h2 class="text-center">Grooming</h2>
      <p>Our therapeutic grooming treatments help battle fleas, allergic dermatitis, and other challenging skin conditions.</p>
    </article>
  
    <article class="col">
      <img src="images/icon-health.svg" class="mx-auto">
      <h2 class="text-center">General Health</h2>
      <p>Wellness and senior exams, ultrasound, x-ray, and dental cleanings are just a few of our general health services.</p>
    </article>
  
    <article class="col">
      <img src="images/icon-nutrition.svg" class="mx-auto">
      <h2 class="text-center">Nutrition</h2>
      <p>Let our nutrition experts review your pet's diet and prescribe a custom nutrition plan for optimum health and disease prevention.</p>
    </article>
  
    <article class="col">
      <img src="images/icon-pestcontrol.svg" class="mx-auto">
      <h2 class="text-center">Pest Control</h2>
      <p>We offer the latest advances in safe and effective prevention and treatment of fleas, ticks, worms, heart worm, and other parasites.</p>
    </article>
  
    <article class="col">
      <img src="images/icon-vaccinations.svg" class="mx-auto">
      <h2 class="text-center">Vaccinations</h2>
      <p>Our veterinarians are experienced in modern vaccination protocols that prevent many of the deadliest diseases in pets.</p>
    </article>
  </section>

  <section class="row">
    <article class="col">
  
      <h2>Testimonials</h2>
      
      <figure>
        <blockquote class="blockquote">
          <p>When Samantha, our Siamese cat, began sleeping all the time and urinating excessively, we brought her to see the specialists at Wisdom. Now, two years later, Samantha is still free from any complications of diabetes, and her blood sugar regularly tests normal.</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          The McPhersons
        </figcaption>
      </figure>
        
      

      <a href="testimonials.php"><button class="btn btn-primary">Read more testimonials from our customers</button></a>
    </article>
  </section>


</div><!-- content container -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
