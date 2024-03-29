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

<div class="container mt-3">

  <section class="row">
    <article class="col">
        <h1>Our doctors</h1>
        <p class="lead mt-5 mb-5">Meet our doctors who are ready to treat your pet just as well as they treat their own.</h3>
    </article>
  </section>

  <section class="row">
  <article class="col-12 col-md-6 card mb-5" id="drwinthrop">
    <div class="card-body">
      <img class="card-img img-fluid" src="images/doctor-winthrop.jpg" alt="Doctor Winthrop Photo">
      <h2 class="card-title">Dr. Stanley Winthrop</h2>
      <h5 class="card-subtitle">Behaviorist</h5>
      <p class="card-text">Dr. Winthrop is the guardian of Missy, a three-year old Llaso mix, who he adopted at the shelter. Dr. Winthrop is passionate about spay and neuter and pet adoption, and works tireless hours outside the clinic, performing free spay and neuter surgeries for the shelter.</p>
    </div>
    <div class="card-footer">
      <a href="#" class="card-link">About Me</a>
      <a href="#" class="card-link">My Pets</a>
      <a href="#" class="card-link">Client Slideshow</a>
    </div>
  </article>

  <article class="col-12 col-md-6 card mb-5" id="drchase">
    <div class="card-body">
    <img class="card-img img-fluid" src="images/doctor-chase.jpg" alt="Doctor Chase Photo">
      <h2 class="card-title">Dr. Elizabeth Chase</h2>
      <h5 class="card-subtitle">Dentistry</h5>
      <p class="card-text">Dr. Chase spends much of her free time helping the local bunny rescue organization find homes for bunnies, such as Kibbles - a Dalmatian bunny who is part of the large Chase household, including two dogs, three cats, and a turtle.</p>
    </div>
    <div class="card-footer">
      <a href="#" class="card-link">About Me</a>
      <a href="#" class="card-link">My Pets</a>
      <a href="#" class="card-link">Client Slideshow</a>
    </div>
  </article>

  <article class="col-12 col-md-6 card mb-5" id="drsanders">
    <div class="card-body">
    <img class="card-img img-fluid" src="images/doctor-sanders.jpg" alt="Doctor Sanders Photo">
      <h2 class="card-title">Dr. Kenneth Sanders</h2>
      <h5 class="card-subtitle">Nutritionist</h5>
      <p class="card-text">Leroy walked into Dr. Sanders front door when she was moving into a new house. After searching for weeks for Leroy's guardians, she decided to make Leroy a part of her pet family, and now has three cats.</p>
    </div>
    <div class="card-footer">
      <a href="#" class="card-link">About Me</a>
      <a href="#" class="card-link">My Pets</a>
      <a href="#" class="card-link">Client Slideshow</a>
    </div>
  </article>

  <article class="col-12 col-md-6 card mb-5" id="drgardner">
    <div class="card-body">
    <img class="card-img img-fluid" src="images/doctor-gardner.jpg" alt="Doctor Gardner Photo">
      <h2 class="card-title">Dr. Michael Gardner</h2>
      <h5 class="card-subtitle">Practitioner</h5>
      <p class="card-text">When Dr. Gardner was 8 his family moved to Colorado, where he spent most of his free time playing on his neighbors farm. He came to love spending time with the horses, chickens, and goats. He still considers all of his family's farm animals his own, but Frank, his Cattle dog is his nearest and dearest friend.</p>
    </div>
      <div class="card-footer">   
      <a href="#" class="card-link">About Me</a>
      <a href="#" class="card-link">My Pets</a>
      <a href="#" class="card-link">Client Slideshow</a>
      </div>
  </article>

  <article class="col-12 col-md-6 card mb-5" id="drruiz">
    <div class="card-body">
    <img class="card-img img-fluid" src="images/doctor-ruiz.jpg" alt="Doctor Ruiz Photo">
      <h2 class="card-title">Dr. Brook Ruiz</h2>
      <h5 class="card-subtitle">Radiology</h5>
      <p class="card-text">Dr. Brook has spent countless hours helping the local animal shelter with injured animals ,that find their way into their doors. She recently adopted a new feline friend, Trish, that she helped rescue from a flooded area. Trish loves playing with her new sister, Else.</p>
      </div>
      <div class="card-footer">   
      <a href="#" class="card-link">About Me</a>
      <a href="#" class="card-link">My Pets</a>
      <a href="#" class="card-link">Client Slideshow</a>
      </div>
  </article>

  <article class="col-12 col-md-6 card mb-5" id="drwong">
    <div class="card-body">
    <img class="card-img img-fluid" src="images/doctor-wong.jpg" alt="Doctor Wong Photo">
      <h2 class="card-title">Dr. Olivia Wong</h2>
      <h5 class="card-subtitle">Preventive Care</h5>
      <p class="card-text">Dr. Wong is a cancer survivor who was fortunate enough to get to spend time with a therapy dog during her recovery. She became passionate about therapy animals, and has started her own foundation to train and provide education to patients in recovery. Now she gets her own dose of daily therapy from her husky, Lilla.</p>
    </div>
    <div class="card-footer">  
      <a href="#" class="card-link">About Me</a>
      <a href="#" class="card-link">My Pets</a>
      <a href="#" class="card-link">Client Slideshow</a>
    </div>
  </article>

</section>

</div><!-- content container -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
