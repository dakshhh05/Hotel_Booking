<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BooknGo Travel: Vacations, Cheap Hotels</title>
  <link rel="icon" href="img/favicon.jpg" type="image/jpg">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header>
    <div class="nav-bar container">
      <div class="logo">
        <img src="img/logo_svg.svg" alt="BooknGo Logo">
      </div>
      <div class="shop">
        <div class="shop2">
          <a href="#shop" style="text-decoration:none; color:inherit;">
            <p class="p">Shop Travel</p>
          </a>
          <i class="fa-solid fa-angle-down"> </i>
        </div>
      </div>

      <div class="spacer"></div>

      <div class="right-side">
        <div class="text">
          <p class="ind">IND</p>
          <img src="https://upload.wikimedia.org/wikipedia/en/4/41/Flag_of_India.svg" alt="flag">
          <a href="#help" style="text-decoration:none; color:inherit;" title="Support">
            <p class="Support">Support</p>
          </a>
          <a href="#help" style="text-decoration:none; color:inherit;" title="Help">
            <p class="Help">Help</p>
          </a>
          <i class="fa-regular fa-comments"></i>

          <!-- Show username if logged in, otherwise show Sign in -->
          <?php if (isset($_SESSION['username'])): ?>
            <p class="Sign_in">
              <?php echo htmlspecialchars($_SESSION['username']); ?>
            </p>
            <a href="logout.php" style="text-decoration:none; color:inherit;">
              <p class="logouteffect">Logout</p>
            </a>
          <?php else: ?>
            <a href="sign_in.html" style="text-decoration:none; color:inherit;" title="Sign in">
              <p class="Sign_in">Sign in</p>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <hr class="hr">


    <div class="container">
      <div class="where">
        <div class="content">
          <h2>Find Your Perfect Stay</h2>
          <div class="search">
            <form action="">
              <div class="input-group">
                <i class="fa-solid fa-location-dot"></i>
                <input type="text" placeholder="Where to?" class="search-input">
              </div>
              <div class="input-group">
                <i class="fa-regular fa-calendar"></i>
                <input type="date" class="search-input">
              </div>
              <div class="input-group">
                <i class="fa-solid fa-user"></i>
                <select class="search-input">
                  <option>1 Person</option>
                  <option>2 Person</option>
                  <option>3 Person</option>
                  <option>4+ Person</option>
                </select>
              </div>
              <button type="submit" class="search-btn">Search</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="banner container"> <img src="https://a.travel-assets.com/egds/marks/onekey__standard__always_light.svg"
        alt="">
      <p class="dis">Save 10% or more on over 100,000 hotels with Member Prices</p>
      <div class="sign_add">
        <a href="sign_in.html" style="text-decoration:none; color:inherit;" title="Sign in">
          <p>Upgrade now</p>
        </a>
      </div>
    </div>

    <div class="container">
      <div class="offers">

        <div class="offer">
          <div class="offer-left">
            <h3>Special Deal</h3>
            <p>Save 20% on hotels <i class="fa-solid fa-arrow-right"></i></p>
          </div>
          <div class="offer-right">
            <img src="img2/cave.jpg" alt="Offer">
          </div>
        </div>

        <div class="offer">
          <div class="offer-left">
            <h3>Stay 10 night, get 1 reward night</h3>
            <p>Search stay <i class="fa-solid fa-arrow-right"></i></p>
          </div>
          <div class="offer-right">
            <img src="img2/Picsart_25-09-19_18-22-49-326.jpg" alt="Offer">
          </div>
        </div>

        <div class="offer">
          <div class="offer-left">
            <h3>Holiday Package</h3>
            <p>Book & Save more <i class="fa-solid fa-arrow-right"></i></p>
          </div>
          <div class="offer-right">
            <img src="img2/Picsart_25-09-19_18-23-12-052.jpg" alt="Offer">
          </div>
        </div>

      </div>
    </div>

  </header>

  <<div class="container">
    <div class="text" id="shop">
      <h2>Discover your new favourite stay</h2>
    </div>
    <div class="box-container">
      <div class="small-box">
        <img src="img2/living_room.jpg" alt="Place 1">
        <p>Apartment</p>
      </div>

      <div class="small-box">
        <img src="img2/resort.jpg" alt="Place 2">
        <p>Resort</p>
      </div>

      <div class="small-box">
        <img src="img2/swimmingpool.jpg" alt="Place 3">
        <p>Spa</p>
      </div>

      <div class="small-box">
        <img src="img2/bed_room.jpg" alt="Place 4">
        <p>Apart Hotel</p>
      </div>

      <div class="small-box">
        <img src="img2/boat.jpg" alt="Place 5">
        <p>Boathouse</p>
      </div>
    </div>
    </div>

    <div class="container">
      <div class="hero_banner">
        <img src="img2/hero_banner.jpg" alt="">
        <div class="hero_box">
          <h2>City break package deal</h2>
          <p>Bundle your flight + hotel to save on your next city break</p>
          <div class="package_deal">
            <h3>
              Upgrade your package
            </h3>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="popular_destination">
        <h2>Explore stay in popular destinations</h2>
        <p>Average prices based on current calendar month</p>
      </div>
      <div class="slider-container">
        <button class="slider-btn left" id="leftBtn">&#10094;</button>

        <div class="slider-viewport">
          <div class="slider" id="slider">

            <a href="details.php?id=1" class="details-btn" style="text-decoration:none; color:inherit;">
              <div class="card">
                <img src="img2/paris.jpg" alt="">
                <div class="card-info">
                  <h4>Hotel Paradise</h4>
                  <div class="meta">Paris, France</div>
                  <div class="price-row">
                    <div class="price">₹8,999</div>
                    <div class="meta">Avg night</div>
                  </div>
                </div>
              </div>
            </a>

            <a href="details.php?id=2" class="details-btn" style="text-decoration:none; color:inherit;">
              <div class="card">
                <img src="img2/goa.jpg" alt="">
                <div class="card-info">
                  <h4>Beach Resort</h4>
                  <div class="meta">Goa, India</div>
                  <div class="price-row">
                    <div class="price">₹6,499</div>
                    <div class="meta">Avg night</div>
                  </div>
                </div>
              </div>
            </a>

            <a href="details.php?id=3" class="details-btn" style="text-decoration:none; color:inherit;">
              <div class="card">
                <img src="img2/itali.jpg" alt="">
                <div class="card-info">
                  <h4>Luxury Stay</h4>
                  <div class="meta">Rome, Italy</div>
                  <div class="price-row">
                    <div class="price">₹8,499</div>
                    <div class="meta">Avg night</div>
                  </div>
                </div>
              </div>
            </a>

            <a href="details.php?id=4" class="details-btn" style="text-decoration:none; color:inherit;">
              <div class="card">
                <img src="img2/london.jpg" alt="">
                <div class="card-info">
                  <h4>City Center Inn</h4>
                  <div class="meta">London, UK</div>
                  <div class="price-row">
                    <div class="price">₹9,499</div>
                    <div class="meta">Avg night</div>
                  </div>
                </div>
              </div>
            </a>



            <a href="details.php?id=5" class="details-btn" style="text-decoration:none; color:inherit;">
              <div class="card">
                <img src="img2/zurich.jpg" alt="">
                <div class="card-info">
                  <h4>Alpine Lodge</h4>
                  <div class="meta">Zurich, Switzerland</div>
                  <div class="price-row">
                    <div class="price">₹15,499</div>
                    <div class="meta">Avg night</div>
                  </div>
                </div>
              </div>
            </a>

            <a href="details.php?id=6" class="details-btn" style="text-decoration:none; color:inherit;">
              <div class="card">
                <img src="img2/newyork.jpg" alt="">
                <div class="card-info">
                  <h4>Skyline Inn</h4>
                  <div class="meta">New York, USA</div>
                  <div class="price-row">
                    <div class="price">₹12,999</div>
                    <div class="meta">Avg night</div>
                  </div>
                </div>
              </div>
            </a>

            <a href="details.php?id=7" class="details-btn" style="text-decoration:none; color:inherit;">
              <div class="card">
                <img src="img2/udaipur.jpg" alt="">
                <div class="card-info">
                  <h4>Lakeview Retreat</h4>
                  <div class="meta">Udaipur, India</div>
                  <div class="price-row">
                    <div class="price">₹3,499</div>
                    <div class="meta">Avg night</div>
                  </div>
                </div>
              </div>
            </a>

            <a href="details.php?id=8" class="details-btn" style="text-decoration:none; color:inherit;">
              <div class="card">
                <img src="img2/maldives.jpg" alt="">
                <div class="card-info">
                  <h4>Island View Resort</h4>
                  <div class="meta">Maldives</div>
                  <div class="price-row">
                    <div class="price">₹18,999</div>
                    <div class="meta">Avg night</div>
                  </div>
                </div>
              </div>
            </a>

            <a href="details.php?id=9" class="details-btn" style="text-decoration:none; color:inherit;">
              <div class="card">
                <img src="img2/dubai_cloud.jpg" alt="">
                <div class="card-info">
                  <h4>City Center Suites</h4>
                  <div class="meta">Dubai, UAE</div>
                  <div class="price-row">
                    <div class="price">₹13,499</div>
                    <div class="meta">Avg night</div>
                  </div>
                </div>
              </div>
            </a>

            <!-- jbdkabdk -->

            <a href="details.php?id=10" class="details-btn" style="text-decoration:none; color:inherit;">
              <div class="card">
                <img src="img4/jaisalmer.jpg" alt="">
                <div class="card-info">
                  <h4>Royal Desert Camp</h4>
                  <div class="meta">Jaisalmer, India</div>
                  <div class="price-row">
                    <div class="price">₹4,199</div>
                    <div class="meta">Avg night</div>
                  </div>
                </div>
              </div>
          </div> </a>


          <button class="slider-btn right" id="rightBtn">&#10095;</button>
        </div>
      </div>


      <section class="why-section">
        <h2>Why book with BooknGo?</h2>
        <div class="why-container">

          <div class="why-box">
            <i class="fas fa-magic"></i>
            <h3>Plan Smarter with AI</h3>
            <p>BooknGo uses artificial intelligence to help you create personalized travel plans based on your
              preferences, budget, and travel style.</p>
          </div>

          <div class="why-box">
            <i class="fas fa-star"></i>
            <h3>Visualize Your Trip</h3>
            <p>Explore community-generated itineraries or build your own unique journey with intelligent suggestions
              tailored just for you.</p>
          </div>

          <div class="why-box">
            <i class="fas fa-handshake"></i>
            <h3>Book with Confidence</h3>
            <p>Secure flights, hotels, transfers, and activities in one place, with real-time availability and price
              guarantees.</p>
          </div>

          <div class="why-box">
            <i class="fas fa-check-circle"></i>
            <h3>Bon Voyage!</h3>
            <p>Sit back and relax — your smart travel assistant has already done the hard work.</p>
          </div>

        </div>
      </section>

      <!-- <div class="container"> -->
      <div class="popular_destination">
        <h2>Explore these unique place</h2>
        <p>These average prices are calculated based on the current calendar month</p>
      </div>
      <div class="slider-container">
        <button class="slider-btn left" id="leftBtn">&#10094;</button>

        <div class="slider-viewport">
          <div class="slider" id="slider">

            <a href="details.php?id=11" class="details-btn" style="text-decoration:none; color:inherit;">
              <div class="card">
                <img src="img4/kerela.jpg" alt="">
                <div class="card-info">
                  <h4>Rainforest Retreat</h4>
                  <div class="meta">Kerala, India</div>
                  <div class="price-row">
                    <div class="price">₹5,899</div>
                    <div class="meta">Avg night</div>
                  </div>
                </div>
              </div>
            </a>

            <a href="details.php?id=12" class="details-btn" style="text-decoration:none; color:inherit;">
              <div class="card">
                <img src="img4/kenya.jpg" alt="">
                <div class="card-info">
                  <h4>Safari Wilderness Camp</h4>
                  <div class="meta">Kenya</div>
                  <div class="price-row">
                    <div class="price">₹11,299</div>
                    <div class="meta">Avg night</div>
                  </div>
                </div>
              </div>
            </a>

            <a href="details.php?id=13" class="details-btn" style="text-decoration:none; color:inherit;">
              <div class="card">
                <img src="img4/chennai.jpg" alt="">
                <div class="card-info">
                  <h4>Seaside Inn</h4>
                  <div class="meta">Chennai, India</div>
                  <div class="price-row">
                    <div class="price">₹8,499</div>
                    <div class="meta">Avg night</div>
                  </div>
                </div>
              </div>
            </a>

            <a href="details.php?id=14" class="details-btn" style="text-decoration:none; color:inherit;">
              <div class="card">
                <img src="img4/shimla.jpg" alt="">
                <div class="card-info">
                  <h4>Hilltop Resort</h4>
                  <div class="meta">Shimla, India</div>
                  <div class="price-row">
                    <div class="price">₹6,299</div>
                    <div class="meta">Avg night</div>
                  </div>
                </div>
              </div>
            </a>



            <a href="details.php?id=15" class="details-btn" style="text-decoration:none; color:inherit;">
              <div class="card">
                <img src="img4/jaipur.jpg" alt="">
                <div class="card-info">
                  <h4>Cultural Stay Palace</h4>
                  <div class="meta">Jaipur, India</div>
                  <div class="price-row">
                    <div class="price">₹7,899</div>
                    <div class="meta">Avg night</div>
                  </div>
                </div>
              </div>
            </a>

            <a href="details.php?id=16" class="details-btn" style="text-decoration:none; color:inherit;">
              <div class="card">
                <img src="img4/phuket.jpg" alt="">
                <div class="card-info">
                  <h4>Ocean Breeze Villas</h4>
                  <div class="meta">Phuket, Thailand</div>
                  <div class="price-row">
                    <div class="price">₹9,499</div>
                    <div class="meta">Avg night</div>
                  </div>
                </div>
              </div>
            </a>

            <a href="details.php?id=17" class="details-btn" style="text-decoration:none; color:inherit;">
              <div class="card">
                <img src="img3/The Hotel Seiryu Kyoto Kiyomizu.jpg" alt="">
                <div class="card-info">
                  <h4>The Hotel Seiryu</h4>
                  <div class="meta">Kyoto, Japan</div>
                  <div class="price-row">
                    <div class="price">₹12,999</div>
                    <div class="meta">Avg night</div>
                  </div>
                </div>
              </div>
            </a>

            <a href="details.php?id=18" class="details-btn" style="text-decoration:none; color:inherit;">
              <div class="card">
                <img src="img4/singapore.jpg" alt="">
                <div class="card-info">
                  <h4>Luxury Sky Hotel</h4>
                  <div class="meta">Singapore</div>
                  <div class="price-row">
                    <div class="price">₹14,999</div>
                    <div class="meta">Avg night</div>
                  </div>
                </div>
              </div>
            </a>

            <a href="details.php?id=19" class="details-btn" style="text-decoration:none; color:inherit;">
              <div class="card">
                <img src="img4/scotland.jpg" alt="">
                <div class="card-info">
                  <h4>Historic Castle Stay</h4>
                  <div class="meta">Scotland, UK</div>
                  <div class="price-row">
                    <div class="price">₹12,199</div>
                    <div class="meta">Avg night</div>
                  </div>
                </div>
              </div>
            </a>

            <!-- jbdkabdk -->

            <a href="details.php?id=20" class="details-btn" style="text-decoration:none; color:inherit;">
              <div class="card">
                <img src="img4/bali.jpg" alt="">
                <div class="card-info">
                  <h4>Tropical Escape Resort</h4>
                  <div class="meta">Bali, Indonesia</div>
                  <div class="price-row">
                    <div class="price">₹10,999</div>
                    <div class="meta">Avg night</div>
                  </div>
                </div>
              </div>
          </div> </a>


          <button class="slider-btn right" id="rightBtn">&#10095;</button>
        </div>
      </div>


      <footer>

        <div class="footer-color">
          <div class="container">
            <div class="footpanel" id="help">

              <a href="#"><img src="img/logo_svg.svg" alt="BooknGo Logo" class="foot_logo"></a>


              <div class="footer-columns">

                <ul>
                  <li class="footer-title">Company</li>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Jobs</a></li>
                  <li><a href="#">List your property</a></li>
                  <li><a href="#">Partnerships</a></li>
                  <li><a href="#">Newsroom</a></li>
                </ul>


                <ul>
                  <li class="footer-title">Explore</li>
                  <li><a href="#">India Travel Guide</a></li>
                  <li><a href="#">Hotel in ndia</a></li>
                  <li><a href="#">Domestic flights</a></li>
                  <li><a href="#">Holiday package in India</a></li>
                  <li><a href="#">Car hire in India</a></li>
                  <li><a href="#">All recommndation types</a></li>
                </ul>


                <ul>
                  <li class="footer-title">Policies</li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Cookies</a></li>
                  <li><a href="#">Terms of use</a></li>
                  <li><a href="#">Content guidelines and reporting content</a></li>
                </ul>


                <ul>
                  <li class="footer-title">Help</li>
                  <li><a href="#">Terms & Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Cookies</a></li>
                </ul>
              </div>
            </div>

            <div class="foot_hr"></div>
            <div class="copywrite">
              <p>© 2025 BooknGo, Inc. All rights reserved. BooknGo and the BooknGo Logo are trademarks or registered trademarks of BooknGo, Inc.</p>
            </div>
          </div>
        </div>



      </footer>

      <script src="script.js"></script>
</body>

</html>