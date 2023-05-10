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
            <h1>Surgery and Dental Services</h1>
            <p class="lead mt-5 mb-5">We are equipped with an in house surgical and dental suite that allows us to offer a variety of procedures to help maintain your pets health.</h3>
        </article>
    </section>

  <section class="row">
    <article class="col accordion" id="surgery">
    <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Surgery
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#surgery">
                <div class="accordion-body">
                    <p>We know the stress that you can feel when your pet is undergoing an operation. Our board-certified surgeon and supportive staff will be there every step of the way, providing instructions the night before, prepping your pet before the operation, maintaining incredible attention to detail during the operation, and providing you with post-operative instructions for at home care. Our surgical services include but are not limited to:
                    </p>
                    <ul>
                        <li>Tibial Plateau Leveling Osteotomy (TPLO)</li>
                        <li>Tibial Tuberosity Advancement  (TTA)</li>
                        <li>Spay/Neutering</li>
                        <li>Mass Removals</li>
                        <li>Cystotomy</li>
                        <li>Ear Hematoma Correction</li>
                        <li>Cherry Eye Correction</li>
                        <li>Enucleation (eye removal)</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Dentistry
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#surgery">
                <div class="accordion-body">
                    We offer a wide range of comprehensive veterinary dental services, from routine cleanings (prophylaxis) to extractions and periodontal disease management, as needed. Radiology is also used as part of our extensive dentistry services. Specially designed dental radiology equipment allows our specialists to view structures that lie below the gum line. With this knowledge, the best decisions can be made about what dental treatment is right for your pet. 
                </div>
            </div>
        </div>
        

    </article>
  </section>


</div><!-- content container -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
