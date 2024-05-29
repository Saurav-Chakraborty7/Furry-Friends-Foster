<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>3F</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
</head>

<body>


  <!-- nav bar -->
  <nav class="position-fixed" style="z-index: 10;">
    <div class="logo">Furry Friends</div>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
      <i class="fas fa-bars"></i>
    </label>
    <ul>
      <li><a class="active" href="#top">Home</a></li>
      <li><a href="#about-us">About Us</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#footer">Contact Us</a></li>
      <li><a href="#price">Pricing</a></li>
      <li><a href="./login.php">Sign In</a></li>
      <li><a href="./signup.php">Sign Up</a></li>

    </ul>
  </nav>



  <div class="bg-image">
    <p class="headline-1"><strong>Finding forever homes for furry friends</strong></p>
    <p class="headline-2">Search for adoptable pets on our pet adoption website</p>


    <!-- Search bar -->
    <!-- <div class="input-group rounded">
      <form id="search-form">
        <input type="text" placeholder="Search cats, dogs, others...">
        <button type="submit">
          <i class="fa fa-search"></i>
        </button>
      </form>
    </div> -->


    <!-- Cards -->
    <div class="card-container">
      <div class="card">
        <a href="./Add to Cart/Cat_Home.php"></a>
        <img src="img/catdog_hmm.png" alt="card image 1">
        <div class="card-content">
          <h2>Cats & Dogs</h2>
        </div>
      </div>
      
      <div class="card">
      <a href="./Add to Cart/Doctor_Home.php"></a>
        <img src="img/doctor_hmm.png" alt="card image 3">
        <div class="card-content">
          <h2>Doctors</h2>
        </div>
      </div>
      <div class="card">
      <a href="./Add to Cart/Hostel_Home.php"></a>
        <img src="img/hostel_hmm.png" alt="card image 3">
        <div class="card-content">
          <h2>Hostel</h2>
        </div>
      </div>
    </div>
  </div>


<!-- about us -->
  <section id="about-us">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h1 class="title1 text-center mb-5">What is 3F</h1>
          <p>Furry Friends Foster is likely a program or organization that focuses on fostering animals, such as cats or
            dogs, until they can be adopted into permanent homes. This can include providing temporary housing, care,
            and socialization for the animals while they await adoption.</p>
        </div>
        <div class="col-md-6 about-img">
          <img src="img/adopt_hmm.jpg" class="img-fluid cent" </div>
        </div>
      </div>
  </section>



  <section id="services">
    <div class="container">
      <h1 class="title2 text-center">Our company provides</h1>
      <div class="row">

        <div class="col-md-4 hell1">
          <img src="img/catdog_hmm1.jpg" class="img-fluid cent" </div>
          <div class="hell-img">
            <h4 style="font-weight:600;padding-top: 15px;">Cat and Dog Boarding</h4>
            <p>We provide short and long term (per night basis) stay for our furry cat and dog friends here at 3F. From
              just a night to as many nights you need, your cat buddy will be safe & healthy with us.</p>
          </div>
        </div>
        <div class="col-md-4 hell2">
          <img src="img/catdog_hmm3.jpg" class="img-fluid cent" </div>
          <div class="hell-img2">
            <h4 style="font-weight:600;padding-top: 15px;">Cat and Dog Boarding</h4>
            <p>Here at 3F, we provide both short- and long-term (based on per-night rates) lodging for our canine and feline friends. Your cat friend will be secure & healthy with us for as few or as many nights as you need.
</p>
          </div>
        </div>
        <div class="col-md-4 hell3">
          <img src="img/catdog_hmm2.jpg" class="img-fluid cent" </div>
          <div class="hell-img3">
            <h4 style="font-weight:600;padding-top: 15px;">Cat and Dog Boarding</h4>
            <p>For our canine and feline pals, we provide both short-term and long-term lodging (charged by the night). Your feline friend will be secure & healthy with us for one night or however many you require.
</p>
          </div>
        </div>

      </div>
  </section>


  <section id="price" class="container my-5">
  <div class="row justify-content-center">
      <h1 class="price_headline text-center" style="font-weight: 600; padding-bottom: 10px;">Pricing Plans</h1>
      <p style="color: red; font-weight: bold;"><i>"Our pet adoption platform operates on a principle of love, not money
          - every pet deserves a loving home,
          not a price tag. However, for our pet hosting(only dogs and cats) service, we do have a fee structure in place
          to
          cover the costs of providing a safe and comfortable temporary home for your furry friend."</i></p>
      <div class="col-lg-3 col-md-6">
        <div class="card custom_card">
          <img class="hi" src="img/cat_hmm.png" alt="price card image1">
          <div class="card-content">
            <h2>Cat</h2>
            <hr class="solid">
            <p class="p_details"> SFT SEE-THROUGH CABINS, AIR CONDITIONED, PRIVATE PLAY TIMES, LITTER FACILITIES,
              SLEEPING PODS</p>
              <p>৳ 7,000</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card custom_card">
          <img src="img/dog_hmm.png" alt="price card image1">
          <div class="card-content">
            <h2>Dog</h2>
            <hr class="solid">
            <p class="p_details"> SFT SEE-THROUGH CABINS, AIR CONDITIONED, PRIVATE PLAY TIMES, LITTER FACILITIES,
              SLEEPING PODS</p>
              <p>৳ 5,580</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card custom_card">
          <img src="img/cat_hmm.png" alt="price card image1">
          <div class="card-content">
            <h2>Cat</h2>
            <hr class="solid">
            <p class="p_details"> SFT SEE-THROUGH CABINS, AIR CONDITIONED, PRIVATE PLAY TIMES, LITTER FACILITIES,
              SLEEPING PODS</p>
              <p>৳ 5,500</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card custom_card">
          <img src="img/dog_hmm.png" alt="price card image1">
          <div class="card-content">
            <h2>Dog</h2>
            <hr class="solid">
            <p class="p_details"> SFT SEE-THROUGH CABINS, AIR CONDITIONED, PRIVATE PLAY TIMES, LITTER FACILITIES,
              SLEEPING PODS</p>
              <p>৳ 8,000</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card custom_card">
          <img src="img/doctor_hmm.png" alt="price card image1">
          <div class="card-content">
            <h2>Doctor</h2>
            <hr class="solid">
            <p>We love our profession, and we love helping animals. We want them to be happy and healthy</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card custom_card">
          <img src="img/doctor_hmm.png" alt="price card image1">
          <div class="card-content">
            <h2>Doctor</h2>
            <hr class="solid">
            <p>Our promise to you is that we will always strive to do our best in providing compassionate care for your pet.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container" style="display: flex;">
      <div class="facilites">
        <div class="row">
          <div  class="col">
            <img src="img/clock_hmm.png"class="center">
            <p>24/7 Available Caregivers</p>
          </div>
          <div  class="col">
            <img src="img/paw.png">
            
          </div>
          <div  class="col">
            <img src="img/service.png">
            <p>On time Service</p>
          </div>
          <div  class="col">
            <img src="img/paw.png">
            
          </div>
          <div class="col">
            <img src="img/cathappy.png">
            <p>Make your pet happy & healthy</p>
          </div>
          <div  class="col">
            <img src="img/paw.png">
            
          </div>
          <div class="col">
            <img src="img/secured.png">
            <p>Safe and Secure</p>
          </div>
          <div  class="col">
            <img src="img/paw.png">
            
          </div>
          <div class="col">
            <img src="img/bookmark.png">
            <p>User Friendly</p>
          </div>
         
        </div>
      </div>
    </div>
  </section>


  <section id="footer">
    <div class="container">
      <div class="row align-items-center">
      <h1 class="footer text-center mb-5 bold">Get in touch</h1>
        <div class="col-md-6">
          <h3>Contact</h3>
          <div> <img src="img/call.png">
            <h6>+8801851057549</h6>
          </div>
          <div><img src="img/mail.png">
            <h6>three3f@gmail.com</h6>
          </div>
          <div>
            <img src="img/map.png">
            <h6>House: 12, Road: 11, Sector: 14, Uttara, Dhaka</h6>
          </div>
        </div>
        <div class="col-md-6">
          <h3 class="footer text-center mb-5"></h3>
          <div>
            <h3>Community</h3>
            <img src="img/fb.png">
            <a href="https://www.facebook.com/">Facebook</a><br>
            <img src="img/tiktok.png">
            <a href="https://www.tiktok.com/en/">Tiktok</a><br>
            <img src="img/insta.png">
            <a href="https://www.instagram.com/">Instagram</a>
          </div>
        </div>
      </div>
    </div>
  </section>




  <!-- Smooth Scrool -->
  <script src="smooth-scroll.js"></script>
  <script>
    var scrool = new SmoothScroll('a[href*="#"');
  </script>





</body>

</html>