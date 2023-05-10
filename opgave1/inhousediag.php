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
            <h1>Treatments</h1>
            <p class="lead mt-5 mb-5">We are proud to offer the following services as diagnostic tools to provide us with the best information to help your pets.</h3>
        </article>
    </section>

  <section class="row">
    <article class="col accordion" id="treatment">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    In-house diagnostic lab
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#treatment">
                <div class="accordion-body">
                <p>Our on-site laboratory allows us to perform the following diagnostic testing:</p>
                    <ul>
                        <li>Complete blood counts</li>
                        <li>Thyroid hormone assay</li>
                        <li>Blood chemistry profiles</li>
                        <li>Urinalysis</li>
                        <li>Urine protein/creatinine ratio (UPC)</li>
                        <li>Heartworm testing</li>
                        <li>Lyme and other tick-borne disease testing</li>
                        <li>Fungal cultures</li>
                        <li>Intestinal parasite screening</li>
                        <li>Blood smear and other cytology analysis</li>
                        <li>Cushing's/Addison's disease testing (ACTH stimulation testing)</li>
                        <li>Pancreatitis testing (FPL/CPL)</li>
                        <li>Bile acid measurement</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                    Digital Radiography
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#treatment">
                <div class="accordion-body">
                    We have the ability to take radiographs (x-rays) digitally. This allows us to quickly gain x-rays to help aid in our diagnostics. In many cases, x-rays do not require sedation and are a low-stress, safe option for obtaining more medical information.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                    EKG
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#treatment">
                <div class="accordion-body">
                    EKG/ECG is an abbreviation for electrocardiogram. This tests the electrical waves and impulses in the heart. We utilize this tool routinely during surgical procedures as well as to diagnose heart disease.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                    Ultrasound
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#treatment">
                <div class="accordion-body">
                    Ultrasound imaging can be used to gain detailed images of the abdominal organs. Ultrasound imaging can aide in diagnosing and staging a variety of diseases, assist in routine procedures, and help monitor disease progression. In many cases, ultrasound is a non invasive and low stress method to gain vital information, and in most cases does not require sedation. 
                </div>
            </div>
        </div>

        
    </article>
  </section>


</div><!-- content container -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
