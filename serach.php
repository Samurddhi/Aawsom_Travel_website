<?php
$connection = mysqli_connect('localhost', 'root', '', 'serach_db');
try {
    $conn = new PDO("mysql:host=$localhost;dbname=$serach_db", $toserach, $link);
    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare and execute the SQL query
    $stmt = $conn->prepare("SELECT * FROM serach WHERE toserach LIKE ?");
    $stmt->execute(array("%$searchQuery%"));

    // Fetch results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Process results
    if (count($results) > 0) {
        // Display results (example HTML structure)
        foreach ($results as $row) {
            echo "<div class='search-result'>";
            echo "<h3>" . $row['toserach'] . "</h3>";  // Replace with actual field names
            echo "<p>" . $row['links'] . "</p>";
            // ... Add more fields as needed
            echo "</div>";
        }
    } else {
        echo "<p>No results found for your search.</p>";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null; // Close the connection
?>

