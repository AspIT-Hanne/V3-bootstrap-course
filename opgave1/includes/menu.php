<?php $page = explode("/", $_SERVER['PHP_SELF'])[3]; ?>

<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <a class="navbar-brand position-absolute m-5 m-md-3" href="index.php">
        Wisdom Pet Medicine
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navContent">
      <ul class="navbar-nav w-100 justify-content-center">
        <li class="nav-item active">
          <a class="nav-link text-uppercase text-secondary <?php if($page == "index.php") {echo "fw-bold";}?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase text-secondary <?php if($page == "doctors.php") {echo "fw-bold";}?>" href="doctors.php">Our doctors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase text-secondary <?php if($page == "testimonials.php") {echo "fw-bold";}?>" href="testimonials.php">Testimonials</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-uppercase text-secondary <?php if($page == "Behavioural.php" || $page == "inhousediag.php" || $page == "Surgery.php") {echo "fw-bold";}?>" href="#" id="TreatmentDropdown" role="button" data-bs-toggle="dropdown">
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