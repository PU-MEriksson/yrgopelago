<?php

require_once __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/includes/header.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once __DIR__ . '/vendor/autoload.php';

?>

<body>
    <section class="booking-section">
        <h2>Book your room</h2>
        <form method="POST" action="booking.php">
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



        </form>
    </section>
</body>

<?php
require __DIR__ . '/includes/footer.php';
?>