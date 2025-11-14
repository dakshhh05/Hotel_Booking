<?php
session_start();

if (isset($_GET['id'])) {
  $_SESSION['redirect_after_login'] = $_SERVER['REQUEST_URI'];
}


$products = [
  1 => [
    "name" => "Hotel Paradise",
    "location" => "Paris, France",
    "price" => "₹8,999",
    "img" => "img2/paris.jpg",
    "desc" => "A luxury hotel in the heart of Paris, with elegant rooms and city views. Includes free breakfast and Wi-Fi.",
    "rating" => "4.5 ★ Excellent (120 reviews)",
    "facilities" => [
      ["icon" => "fa-solid fa-wifi", "text" => "Free Wi-Fi"],
      ["icon" => "fa-solid fa-mug-saucer", "text" => "Breakfast Included"],
      ["icon" => "fa-solid fa-city", "text" => "City View"],
    ]
  ],
  2 => [
    "name" => "Beach Resort",
    "location" => "Goa, India",
    "price" => "₹6,499",
    "img" => "img2/goa.jpg",
    "desc" => "Relax at our beachfront resort in Goa. Enjoy pools, spas, and seafood dining. Perfect for families and couples.",
    "rating" => "4.3 ★ Very Good (98 reviews)",
    "facilities" => [
      ["icon" => "fa-solid fa-umbrella-beach", "text" => "Beach Access"],
      ["icon" => "fa-solid fa-swimming-pool", "text" => "Swimming Pool"],
      ["icon" => "fa-solid fa-utensils", "text" => "Seafood Dining"],
    ]
  ],
  3 => [
    "name" => "Luxury Stay",
    "location" => "Rome, Italy",
    "price" => "₹8,499",
    "img" => "img2/itali.jpg",
    "desc" => "Stay in the Himalayas with breathtaking views and cozy rooms. Includes bonfire and trekking packages.",
    "rating" => "4.6 ★ Superb (210 reviews)",
    "facilities" => [
      ["icon" => "fa-solid fa-mountain", "text" => "Mountain View"],
      ["icon" => "fa-solid fa-fire", "text" => "Bonfire Nights"],
      ["icon" => "fa-solid fa-person-hiking", "text" => "Trekking"],
    ]
  ],
  4 => [
    "name" => "City Center Inn",
    "location" => "London, UK",
    "price" => "₹9,499",
    "img" => "img2/london.jpg",
    "desc" => "Modern hotel located in the center of London. Walking distance to major attractions. Free Wi-Fi and breakfast included.",
    "rating" => "4.4 ★ Great (180 reviews)",
    "facilities" => [
      ["icon" => "fa-solid fa-subway", "text" => "Near Metro"],
      ["icon" => "fa-solid fa-mug-hot", "text" => "Breakfast Free"],
      ["icon" => "fa-solid fa-wifi", "text" => "High-Speed Wi-Fi"],
    ]
  ],
  5 => [
    "name" => "Alpine Lodge",
    "location" => "Switzerland",
    "price" => "₹15,499",
    "img" => "img2/switzerland.jpg",
    "desc" => "Ski resort nestled in the Alps, offering chalets, hot tubs, and snowy adventures.",
    "rating" => "4.6 ★ Superb (175 reviews)",
    "facilities" => [
      ["icon" => "fa-solid fa-skiing", "text" => "Skiing"],
      ["icon" => "fa-solid fa-hot-tub-person", "text" => "Hot Tubs"],
      ["icon" => "fa-solid fa-snowflake", "text" => "Snow Activities"],
    ]
  ],
  6 => [
    "name" => "Skyline Inn",
    "location" => "New York, USA",
    "price" => "₹12,999",
    "img" => "img2/newyork.jpg",
    "desc" => "Modern hotel in Manhattan with skyline views, rooftop bar, and luxury amenities.",
    "rating" => "4.7 ★ Superb (315 reviews)",
    "facilities" => [
      ["icon" => "fa-solid fa-city", "text" => "Skyline View"],
      ["icon" => "fa-solid fa-martini-glass-citrus", "text" => "Rooftop Bar"],
      ["icon" => "fa-solid fa-dumbbell", "text" => "Fitness Center"],
    ]
  ],
  7 => [
    "name" => "Lakeview Retreat",
    "location" => "Udaipur, India",
    "price" => "₹3,499",
    "img" => "img2/udaipur.jpg",
    "desc" => "Enjoy a romantic stay by Lake Pichola with candlelight dinners and heritage interiors.",
    "rating" => "4.8 ★ Exceptional (260 reviews)",
    "facilities" => [
      ["icon" => "fa-solid fa-water", "text" => "Lake View"],
      ["icon" => "fa-solid fa-heart", "text" => "Romantic Dinner"],
      ["icon" => "fa-solid fa-landmark", "text" => "Heritage Interiors"],
    ]
  ],
  8 => [
    "name" => "Island View Resort",
    "location" => "Maldives",
    "price" => "₹18,999",
    "img" => "img2/maldives.jpg",
    "desc" => "Overwater bungalows with crystal clear waters, snorkeling, and private dining on the beach.",
    "rating" => "5.0 ★ Exceptional (500 reviews)",
    "facilities" => [
      ["icon" => "fa-solid fa-water", "text" => "Overwater Villas"],
      ["icon" => "fa-solid fa-fish", "text" => "Snorkeling"],
      ["icon" => "fa-solid fa-umbrella-beach", "text" => "Private Beach"],
    ]
  ],
  9 => [
    "name" => "City Center Suites",
    "location" => "Dubai, UAE",
    "price" => "₹13,499",
    "img" => "img2/dubai.jpg",
    "desc" => "Stay in the heart of Dubai near Burj Khalifa with luxury shopping and rooftop pools.",
    "rating" => "4.6 ★ Superb (300 reviews)",
    "facilities" => [
      ["icon" => "fa-solid fa-building", "text" => "Near Burj Khalifa"],
      ["icon" => "fa-solid fa-shopping-bag", "text" => "Luxury Shopping"],
      ["icon" => "fa-solid fa-water-ladder", "text" => "Rooftop Pool"],
    ]
  ],
  10 => [
    "name" => "Royal Desert Camp",
    "location" => "Jaisalmer, India",
    "price" => "₹4,199",
    "img" => "img4/jaisalmer.jpg",
    "desc" => "Experience desert life in luxury tents with camel rides, cultural shows, and authentic Rajasthani meals.",
    "rating" => "4.4 ★ Excellent (150 reviews)",
    "facilities" => [
      ["icon" => "fa-solid fa-campground", "text" => "Luxury Tents"],
      ["icon" => "fa-solid fa-camel", "text" => "Camel Rides"],
      ["icon" => "fa-solid fa-drum", "text" => "Cultural Shows"],
    ]
  ],
  11 => [
    "name" => "Rainforest Retreat",
    "location" => "Kerala, India",
    "price" => "₹5,899",
    "img" => "img4/kerela.jpg",
    "desc" => "Eco-friendly cottages surrounded by lush greenery, Ayurveda spa, and backwater tours.",
    "rating" => "4.5 ★ Excellent (180 reviews)",
    "facilities" => [
      ["icon" => "fa-solid fa-leaf", "text" => "Eco Cottages"],
      ["icon" => "fa-solid fa-spa", "text" => "Ayurveda Spa"],
      ["icon" => "fa-solid fa-water", "text" => "Backwater Tours"],
    ]
  ],
  12 => [
    "name" => "Safari Wilderness Camp",
    "location" => "Kenya",
    "price" => "₹11,299",
    "img" => "img4/kenya.jpg",
    "desc" => "Luxury safari tents with guided wildlife tours, African cuisine, and sunset bonfires.",
    "rating" => "4.7 ★ Excellent (220 reviews)",
    "facilities" => [
      ["icon" => "fa-solid fa-binoculars", "text" => "Wildlife Safari"],
      ["icon" => "fa-solid fa-fire", "text" => "Sunset Bonfire"],
      ["icon" => "fa-solid fa-drum", "text" => "African Cuisine"],
    ]
  ],
  13 => [
    "name" => "Seaside Inn",
    "location" => "Chennai, India",
    "price" => "₹3,999",
    "img" => "img4/chennai.jpg",
    "desc" => "Cozy rooms with sea-facing balconies, seafood dining, and beach access.",
    "rating" => "4.2 ★ Very Good (90 reviews)",
    "facilities" => [
      ["icon" => "fa-solid fa-water", "text" => "Sea View"],
      ["icon" => "fa-solid fa-utensils", "text" => "Seafood"],
      ["icon" => "fa-solid fa-umbrella-beach", "text" => "Beach Access"],
    ]
  ],
  14 => [
    "name" => "Hilltop Resort",
    "location" => "Shimla, India",
    "price" => "₹6,299",
    "img" => "img4/shimla.jpg",
    "desc" => "Heritage hotel on the hills, offering panoramic views and colonial-style rooms.",
    "rating" => "4.5 ★ Excellent (140 reviews)",
    "facilities" => [
      ["icon" => "fa-solid fa-mountain", "text" => "Hilltop View"],
      ["icon" => "fa-solid fa-landmark", "text" => "Colonial Rooms"],
      ["icon" => "fa-solid fa-fire", "text" => "Cozy Fireplace"],
    ]
  ],
  15 => [
    "name" => "Cultural Stay Palace",
    "location" => "Jaipur, India",
    "price" => "₹7,899",
    "img" => "img4/jaipur.jpg",
    "desc" => "Stay in a restored royal palace with traditional architecture and cultural performances.",
    "rating" => "4.7 ★ Superb (210 reviews)",
    "facilities" => [
      ["icon" => "fa-solid fa-crown", "text" => "Royal Palace"],
      ["icon" => "fa-solid fa-drum", "text" => "Cultural Shows"],
      ["icon" => "fa-solid fa-chess-king", "text" => "Heritage Decor"],
    ]
  ],
  16 => [
    "name" => "Ocean Breeze Villas",
    "location" => "Phuket, Thailand",
    "price" => "₹9,499",
    "img" => "img4/phuket.jpg",
    "desc" => "Private villas near the beach with water sports, spa, and nightlife nearby.",
    "rating" => "4.8 ★ Exceptional (350 reviews)",
    "facilities" => [
      ["icon" => "fa-solid fa-water", "text" => "Private Pool"],
      ["icon" => "fa-solid fa-person-swimming", "text" => "Water Sports"],
      ["icon" => "fa-solid fa-glass-martini", "text" => "Nightlife Nearby"],
    ]
  ],
  17 => [
    "name" => "The Hotel Seiryu",
    "location" => "Kyoto, Japan",
    "price" => "₹12,999",
    "img" => "img3/The Hotel Seiryu Kyoto Kiyomizu.jpg",
    "desc" => "Modern comfort meets traditional Japanese charm, steps away from Kiyomizu-dera Temple.",
    "rating" => "4.4 ★ Excellent (95 reviews)",
    "facilities" => [
      ["icon" => "fa-solid fa-torii-gate", "text" => "Near Temple"],
      ["icon" => "fa-solid fa-bath", "text" => "Japanese Onsen"],
      ["icon" => "fa-solid fa-leaf", "text" => "Zen Garden"],
    ]
  ],
  18 => [
    "name" => "Luxury Sky Hotel",
    "location" => "Singapore",
    "price" => "₹14,999",
    "img" => "img4/singapore.jpg",
    "desc" => "Iconic skyscraper hotel with infinity pool, rooftop dining, and city skyline views.",
    "rating" => "4.9 ★ Outstanding (420 reviews)",
    "facilities" => [
      ["icon" => "fa-solid fa-infinity", "text" => "Infinity Pool"],
      ["icon" => "fa-solid fa-utensils", "text" => "Rooftop Dining"],
      ["icon" => "fa-solid fa-city", "text" => "Skyline Views"],
    ]
  ],
  19 => [
    "name" => "Historic Castle Stay",
    "location" => "Scotland, UK",
    "price" => "₹12,199",
    "img" => "img4/scotland.jpg",
    "desc" => "Live like royalty in a real castle with stone chambers, grand halls, and lush gardens.",
    "rating" => "4.6 ★ Superb (130 reviews)",
    "facilities" => [
      ["icon" => "fa-solid fa-chess-rook", "text" => "Castle Stay"],
      ["icon" => "fa-solid fa-tree", "text" => "Lush Gardens"],
      ["icon" => "fa-solid fa-landmark", "text" => "Stone Chambers"],
    ]
  ],
  20 => [
    "name" => "Tropical Escape Resort",
    "location" => "Bali, Indonesia",
    "price" => "₹10,999",
    "img" => "img4/bali.jpg",
    "desc" => "Private villas with infinity pools, lush gardens, and spa treatments in Bali’s paradise.",
    "rating" => "4.9 ★ Outstanding (400 reviews)",
    "facilities" => [
      ["icon" => "fa-solid fa-water", "text" => "Infinity Pool"],
      ["icon" => "fa-solid fa-spa", "text" => "Spa Treatments"],
      ["icon" => "fa-solid fa-umbrella-beach", "text" => "Private Villas"],
    ]
  ],
];


$id = $_GET['id'] ?? 1;
$product = $products[$id] ?? null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $product["name"] ?? "Product Details" ?></title>
  <link rel="stylesheet" href="style.css">

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    .details-page {
      margin-top: 30px;
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 25px;
    }

    .details-left {
      background: #fff;
      border-radius: 1rem;
      padding: 20px;
      box-shadow: 0 6px 18px rgba(10, 20, 40, 0.08);
    }

    .details-left img {
      width: 100%;
      border-radius: 1rem;
      margin-bottom: 15px;
      object-fit: cover;
    }

    .details-left h2 {
      margin: 10px 0;
      font-size: 1.6rem;
      font-weight: 600;
    }

    .details-left p {
      color: #444;
      font-size: 0.95rem;
      line-height: 1.5;
    }

    .details-right {
      background: #fff;
      border-radius: 1rem;
      padding: 20px;
      box-shadow: 0 6px 18px rgba(10, 20, 40, 0.08);
      height: fit-content;
    }

    .price {
      font-size: 1.5rem;
      font-weight: 700;
      color: #000000ff;
      margin-bottom: 10px;
    }

    .book-btn {
      display: block;
      text-align: center;
      background: #ffd700;
      color: #ffffffff;
      padding: 12px;
      border-radius: 0.7rem;
      font-weight: 500;
      text-decoration: none;
      transition: background 0.3s;
      margin-top: 10px;
    }

    .book-btn:hover {
      background: #ffe600ff;
      cursor: pointer;
    }

    .rating {
      margin-top: 15px;
      font-weight: 500;
      color: #222;
    }

    .facilities {
      margin-top: 20px;
      background: #f9f9f9;
      padding: 15px;
      border-radius: 10px;
    }

    .facilities h3 {
      margin-bottom: 10px;
      font-size: 18px;
      color: #333;
    }

    .facilities ul {
      list-style: none;
      padding: 0;
    }

    .facilities ul li {
      margin: 5px 0;
      font-size: 15px;
      color: #555;
    }

    /* Modal background */
    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.6);
      justify-content: center;
      align-items: center;
    }

    /* Modal box */
    .modal-content {
      background: #fff;
      width: 400px;
      max-width: 90%;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
      animation: fadeIn 0.3s ease-in-out;
    }

    /* Close button */
    .modal-content .close {
      float: right;
      font-size: 24px;
      cursor: pointer;
      color: #333;
    }

    /* Form elements */
    .modal-content form {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .modal-content label {
      font-weight: bold;
      margin-top: 5px;
    }

    .modal-content input {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      outline: none;
    }

    .modal-content input:focus {
      border-color: #ffd700;
      box-shadow: 0 0 5px rgba(255, 215, 0, 0.6);
    }

    /* Buttons */
    .modal-content .book-btn {
      background: #ffd700;
      border: none;
      padding: 12px;
      margin-top: 10px;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .modal-content .book-btn:hover {
      background: #e6c200;
    }

    /* Animation */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>

  <div class="container">
    <?php if ($product): ?>
      <div class="details-page">
        <!-- Left Section -->
        <div class="details-left">
          <img src="<?= $product["img"] ?>" alt="<?= htmlspecialchars($product["name"]) ?>">
          <h2><?= htmlspecialchars($product["name"]) ?></h2>
          <p><strong>Location:</strong> <?= htmlspecialchars($product["location"]) ?></p>
          <p><?= htmlspecialchars($product["desc"]) ?></p>

          <!-- Facilities Section -->
          <?php if (!empty($product["facilities"])): ?>
            <div class="facilities">
              <h3>Facilities & Amenities</h3>
              <ul>
                <?php foreach ($product["facilities"] as $facility): ?>
                  <li>
                    <i class="<?= $facility['icon'] ?>"></i> <?= htmlspecialchars($facility['text']) ?>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>
        </div>

        <!-- Right Section -->
        <div class="details-right">
          <div class="price"><?= htmlspecialchars($product["price"]) ?> <small>/ night</small></div>
          <div class="rating"><?= htmlspecialchars($product["rating"]) ?></div>

          <?php if (isset($_SESSION['username'])): ?>
            <!-- Logged-in booking button -->
            <a href="javascript:void(0)" class="book-btn" onclick="document.getElementById('bookingModal').style.display='flex'">
              BOOK THIS NOW
            </a>

            <!-- Booking Modal -->
            <div id="bookingModal" class="modal">
              <div class="modal-content">
                <span class="close" onclick="document.getElementById('bookingModal').style.display='none'">&times;</span>
                <h2>Book <?= htmlspecialchars($product['name']); ?></h2>

                <form method="POST" id="bookingForm">
                  <label>Full Name</label>
                  <input type="text" name="fullname" required>

                  <label>Email</label>
                  <input type="email" name="email" required>

                  <label>Phone</label>
                  <input type="tel" name="phone" pattern="[0-9]{10}" maxlength="10" minlength="10" inputmode="numeric" required placeholder="Enter 10-digit number">

                  <label>Check-in Date</label>
                  <input type="date" id="checkin" name="checkin" required onchange="updateTotal()">

                  <label>Check-out Date</label>
                  <input type="date" id="checkout" name="checkout" required onchange="updateTotal()">

                  <label>Guests</label>
                  <input type="number" id="guests" name="guests" min="1" value="1" required oninput="updateTotal()">

                  <p><strong>Price per night:</strong> ₹<span id="price"><?= (int)filter_var($product["price"], FILTER_SANITIZE_NUMBER_INT) ?></span></p>
                  <p><strong>Total Price:</strong> ₹<span id="total"><?= (int)filter_var($product["price"], FILTER_SANITIZE_NUMBER_INT) ?></span></p>

                  <input type="hidden" name="hotel_name" value="<?= htmlspecialchars($product['name']); ?>">
                  <input type="hidden" id="totalInput" name="total_price" value="<?= (int)filter_var($product["price"], FILTER_SANITIZE_NUMBER_INT) ?>">

                  <button type="submit" name="book_now" class="book-btn">Confirm Booking</button>
                </form>
              </div>
            </div>
          <?php else: ?>
            <!-- Not logged-in -->
            <a href="sign_in.html" class="book-btn">BOOK THIS NOW</a>
          <?php endif; ?>
        </div>
      </div>
    <?php else: ?>
      <p>Product not found.</p>
    <?php endif; ?>
  </div>

  <?php
  // Database connection
  $conn = new mysqli("localhost", "root", "", "bookngo"); // Change DB details
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Insert booking into database
  if (isset($_POST['book_now'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $guests = $_POST['guests'];
    $hotel_name = $_POST['hotel_name'];
    $total_price = $_POST['total_price'];
    $username = $_SESSION['username'];

    $stmt = $conn->prepare("INSERT INTO bookings (username, hotel_name, fullname, email, phone, checkin, checkout, guests, total_price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssii", $username, $hotel_name, $fullname, $email, $phone, $checkin, $checkout, $guests, $total_price);
    $stmt->execute();
    $stmt->close();

    echo "<script>alert('$hotel_name booked successfully!'); document.getElementById('bookingModal').style.display='none';</script>";
  }

  $conn->close();
  ?>

  <script>
    // Close modal on outside click
    window.onclick = function(event) {
      const modal = document.getElementById('bookingModal');
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

    // Update total price based on number of guests and nights
    function updateTotal() {
      const price = parseInt(document.getElementById("price").innerText);
      const guests = parseInt(document.getElementById("guests").value) || 1;
      const checkin = document.getElementById("checkin").value;
      const checkout = document.getElementById("checkout").value;
      let nights = 1;

      if (checkin && checkout) {
        const date1 = new Date(checkin);
        const date2 = new Date(checkout);
        const diffTime = date2 - date1;
        nights = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
        if (nights < 1) nights = 1;
      }

      const total = price * guests * nights;
      document.getElementById("total").innerText = total;
      document.getElementById("totalInput").value = total;
    }
  </script>


</body>

</html>