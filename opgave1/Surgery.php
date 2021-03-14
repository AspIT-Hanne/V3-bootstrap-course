<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <title>Bootstrap</title>
</head>
<body class="pt-5 pb-5">

<?php @include "includes/menu.php"; ?>

<header class="mt-2">
  <img src="images/wisdompetlogo.svg" alt="Wisdom Pet Logo">
</header>

<div class="container">

    <section class="row">
        <article class="col">
            <h1>Surgery and Dental Services</h1>
            <p class="lead mt-5 mb-5">We are equipped with an in house surgical and dental suite that allows us to offer a variety of procedures to help maintain your pets health.</h3>
        </article>
    </section>

  <section class="row">
    <article class="col accordion">
        <div class="card">
            <div class="card-header" id="HeadingSurgery">
                <h2>
                    <button class="btn btn-link text-decoration-none text-secondary text-uppercase" type="button" data-toggle="collapse" data-target="#ContentSurgery">
                        Surgery
                    </button>
                </h2>
            </div>
            <div id="ContentSurgery" class="collapse">
                <div class="card-body">
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

        <div class="card">
            <div class="card-header" id="HeadingDental">
                <h2>
                    <button class="btn btn-link text-decoration-none text-secondary text-uppercase" type="button" data-toggle="collapse" data-target="#ContentDental">
                        Dentistry
                    </button>
                </h2>
            </div>
            <div id="ContentDental" class="collapse">
                <div class="card-body">
                    We offer a wide range of comprehensive veterinary dental services, from routine cleanings (prophylaxis) to extractions and periodontal disease management, as needed. Radiology is also used as part of our extensive dentistry services. Specially designed dental radiology equipment allows our specialists to view structures that lie below the gum line. With this knowledge, the best decisions can be made about what dental treatment is right for your pet. 
                </div>
            </div>
        </div>

    </article>
  </section>


</div><!-- content container -->

<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
