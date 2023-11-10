 <?php

include("get_config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $partyType = $_POST["partyType"];
    $termsAccepted = isset($_POST["terms"]) ? 1 : 0;

    // Perform the database insertion without the insertReservation function
    global $conn;
    
    $sql = "INSERT INTO reservations (fullName, email, phone, date, time, partyType, termsAccepted)
            VALUES ('$fullName', '$email', '$phone', '$date', '$time', '$partyType', '$termsAccepted')";
    
    if (mysqli_query($conn, $sql)) {
        // Successful insertion
        echo "Appointment submitted successfully! 
        <br>
        <br>
        <br>Redirecting in 5 seconds...";
        echo '<script>
                setTimeout(function() {
                    window.location.href = "index.html";
                }, 300); // 5 seconds delay
              </script>';
    } else {
        // Insertion failed
        echo "Appointment submission failed. Please try again.";
    }
}
?>