<?php

declare(strict_types=1);
require __DIR__ . '/../database/database.php'; //Connection to database

// Functions for bookings

//Check if a room is available, returns true if rooms is available
function isRoomAvailable(PDO $database, int $roomId, string $arrivalDate, string $departureDate): bool
{
    $statement = $database->prepare("
        SELECT id
        FROM bookings
        WHERE room_id = :room_id
        AND (
            (arrival_date < :departure_date AND departure_date > :arrival_date)
        )
    ");
    $statement->execute([
        ':room_id' => $roomId,
        ':arrival_date' => $arrivalDate,
        ':departure_date' => $departureDate
    ]);

    // Fetch all matching bookings
    $conflictingBookings = $statement->fetchAll(PDO::FETCH_ASSOC);

    // If the array is empty, the room is available
    return count($conflictingBookings) === 0;
}


//Test variables
$roomId = 1;
$arrivalDate = "2025-01-11";
$departureDate = "2025-01-12";

// $isAvailable = isRoomAvailable($database, $roomId, $arrivalDate, $departureDate);
// echo $isAvailable;

// // Output the result
// if ($isAvailable === true) {
//     echo "Room is available!";
// } else {
//     echo "Room is not available.";
// }

//Change variable names so they isn't the same used as in the isRoomAvailable function?
//Variables to used to save a booking
$visitorName = 'Andersson';
$arrivalDate = 2025 - 02 - 02;
$departureDate = '2025-02-03';
$roomId = '3';
$transferCode = 'ABCD';


//Function to add a booking to the database
function saveBooking(PDO $database, string $visitorName, int $roomId, string $arrivalDate, string $departureDate, string $transferCode)
{
    $query = 'INSERT INTO bookings (visitor_name, arrival_date, departure_date, room_id, transfer_code) VALUES (:visitor_name, :arrival_date, :departure_date, :room_id, :transfer_code)';
    $statement = $database->prepare($query);

    $statement->bindParam(':visitor_name', $visitorName, PDO::PARAM_STR);
    $statement->bindParam(':arrival_date', $arrivalDate, PDO::PARAM_STR);
    $statement->bindParam(':departure_date', $departureDate, PDO::PARAM_STR);
    $statement->bindParam(':room_id', $roomId, PDO::PARAM_INT);
    $statement->bindParam(':transfer_code', $transferCode, PDO::PARAM_STR);

    try {
        $statement->execute();
        echo "Successful booking";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

saveBooking($database, $visitorName, $roomId, $arrivalDate, $departureDate, $transferCode);
