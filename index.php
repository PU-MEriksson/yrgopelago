<?php

require_once __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/functions.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


// //Show the calender for room 2
// echo generateCalendar($database, 2, '2025-01-01');
// //Show the calender for room 3
// echo generateCalendar($database, 3, '2025-01-01');
?>

<main>
    <!-- Hero -->
    <section class="hero">
        <video autoplay muted loop playsinline class="background-video">
            <source src="./assets/images/whisker-haven-retreat.mp4" type="video/mp4">
        </video>
        <div class="hero-content">
            <h1>Welcome to Whisker Haven Retreat</h1>
            <p>Your purrfect getaway awaits!</p>
        </div>
        <div class="book-now">
            <a href="#booking" class="cta">Book Now</a>
        </div>
    </section>

    <!-- About section -->
    <section id="about">
        <h2>About the Whisker Haven Retreat</h2>
        <div class="about-container">
            <img src="./assets/images/sunset.jpg" alt="">
            <article>
                <h3>Welcome to Purradise Island</h3>
                <p> Nestled in the heart of the tropics, Purradise Island is a haven for both cats and cat lovers. With its lush greenery, golden beaches, and crystal-clear waters, it’s the perfect escape from the hustle and bustle of everyday life. The island is home to a thriving cat sanctuary where every stay helps support rescue efforts.</p>
            </article>
        </div>
        <div class="about-container middle">
            <img src="./assets/images/cat-lounge.png" alt="">
            <article>
                <h3>Your Home Away from Home</h3>
                <p>At The Whisker Haven Retreat, we combine luxury and compassion. Enjoy our beautifully designed cat-friendly rooms, each with direct access to our sanctuary. Guests can relax while helping our feline friends find forever homes. Whether you’re here to unwind or make a difference, you’ll leave with memories to cherish.</p>
            </article>
        </div>
        <div class="about-container">
            <img src="./assets/images/kittens.jpg" alt="">
            <article>
                <h3>Stay for the Cause</h3>
                <p>Every booking at The Whisker Haven Retreat supports our rescue efforts. By staying with us, you help provide medical care, food, and shelter for our rescued cats. Meet our friendly residents, learn their stories, and even consider adopting your next furry companion!</p>
            </article>
        </div>
    </section>

    <!-- Rooms-section -->
    <section id="rooms">
        <h2>Our Rooms</h2>
        <div class="rooms-container">
            <!-- Budget Room -->
            <div class="room-selection">
                <img src="./assets/images/budget-room.png" alt="Budget hotel room">
                <h3>Cozy Comfort on a Budget</h3>
                <p>Experience the charm of The Whisker Haven Retreat without breaking the bank. Our Budget Rooms offer a snug and simple retreat featuring a queen-sized bed, minimalist decor, and cat-friendly touches like a small scratching post and cozy cat bed. Perfect for solo travelers or couples seeking an affordable stay while enjoying all the amenities of our tropical paradise.</p>
                <ul>
                    <li>Queen-sized bed</li>
                    <li>Private bathroom</li>
                    <li>Complimentary Wi-Fi</li>
                    <li>Cat bed and scratching post</li>
                </ul>
                <a href="#booking" class="cta">Book Now</a>
            </div>

            <!-- Standard Room -->
            <div class="room-selection">
                <img src="./assets/images/standard-room.png" alt="Standard hotel room">
                <h3>Purrfect Balance of Comfort and Style</h3>
                <p>Our Standard Rooms are ideal for those who want a little extra space and luxury. Enjoy a king-sized bed, modern tropical decor, and a private balcony with stunning views of the lush island landscape. Cat lovers will appreciate the included climbing tree and cat toy set, ensuring your feline companions feel at home.</p>
                <ul>
                    <li>King-sized bed</li>
                    <li>Private balcony with tropical views</li>
                    <li>Cat climbing tree and toy set</li>
                    <li>Complimentary breakfast</li>
                </ul>
                <a href="#booking" class="cta">Book Now</a>
            </div>

            <!-- Luxury Room -->
            <div class="room-selection">
                <img src="./assets/images/luxury-room.png" alt="Luxury hotel room">
                <h3>Indulge in Ultimate Feline-Friendly Luxury</h3>
                <p>For guests seeking a premium experience, our Luxury Rooms offer unmatched elegance and exclusivity. Bask in the spacious suite featuring a king-sized canopy bed, lavish tropical decor, and a personal outdoor jacuzzi. Your feline friends will adore the custom-designed cat play area and premium bedding. Treat yourself to the purrfect escape.</p>
                <ul>
                    <li>King-sized canopy bed</li>
                    <li>Outdoor jacuzzi</li>
                    <li>Premium cat play area</li>
                    <li>Complimentary room service</li>
                </ul>
                <a href="#booking" class="cta">Book Now</a>
            </div>
        </div>
    </section>

    <!-- Add-ons/Features -->
    <section id="features">
        <h2>Add-ons to your stay</h2>
        <div class="features">
            <div class="features-container">
                <h3>Feature</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus alias tempora est incidunt, excepturi nobis, harum similique exercitationem at animi quasi nemo inventore sint ex iure eius iusto, reiciendis consequuntur!</p>
            </div>
            <div class="features-container">
                <h3>Feature</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus alias tempora est incidunt, excepturi nobis, harum similique exercitationem at animi quasi nemo inventore sint ex iure eius iusto, reiciendis consequuntur!</p>
            </div>
            <div class="features-container">
                <h3>Feature</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus alias tempora est incidunt, excepturi nobis, harum similique exercitationem at animi quasi nemo inventore sint ex iure eius iusto, reiciendis consequuntur!</p>
            </div>
        </div>
    </section>

    <!-- Booking section -->
    <section id="booking">
        <h2>Book your room</h2>
        <div class="booking">
            <form method="POST" action="booking.php" class="booking-form">
                <label for="visitor_name">Your Name:</label>
                <input type="text" name="visitor_name" required>

                <label for="arrival_date">Arrival Date:</label>
                <input type="date" name="arrival_date" min="2025-01-01" max="2025-01-31" required>

                <label for="departure_date">Departure Date:</label>
                <input type="date" name="departure_date" min="2025-01-01" max="2025-01-31" required>

                <label for="room_id">Room:</label>
                <select name="room_id" required>
                    <option value="1">Budget Room</option>
                    <option value="2">Standard Room</option>
                    <option value="3">Luxury Room</option>
                </select>

                <label for="transfer_code">Transfer Code:</label>
                <input type="text" name="transfer_code">
                <!-- Add required for transfer code later!! -->
                <button type="submit">Book Now</button>
            </form>
            <div class="calender-container">
                <h3>Availability</h3>
                <h4>Budget</h4>
                <?php //Show the calender for room 1
                echo generateCalendar($database, 1, '2025-01-01');
                ?>
                <h4>Standard</h4>
                <?php //Show the calender for room 2
                echo generateCalendar($database, 2, '2025-01-01');
                ?>
                <h4>Luxury</h4>
                <?php //Show the calender for room 3
                echo generateCalendar($database, 3, '2025-01-01');
                ?>
            </div>
        </div>
    </section>
</main>


<?php
require __DIR__ . '/includes/footer.php';
?>