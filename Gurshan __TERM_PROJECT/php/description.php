<?php
include "../includes/header.php";
include "../db/conn.php";
session_start();
$houseType = "N/A";
$rooms = "N/A";
$address = "N/A";
$availability = "N/A";
$contact = "N/A";
$information = "N/A";
$image = "/images/default.jpg";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $image_id = $_POST['image_id'];
    $sql = "SELECT * FROM house_details WHERE house_id=$image_id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $houseType = $row["type"];
            $rooms = $row["rooms"];
            $address = $row["address"];
            $availability = $row["availability"];
            $contact = $row["contact"];
            $information = $row["information"];
            $image = "/images/house" . $image_id . ".jpg";
        }
    } else {
        echo "No records found";
    }
} else {
    echo "Error executing query: " . mysqli_error($conn);
}
?>

<div class="container mt-5">
    <h1 class="display-4 mt-5 text-center"><strong>House Description</strong></h1>
    <div class="row align-items-center my-4">
        <div class="col-md-6">
            <img src=<?php echo $image; ?> class="img-fluid rounded shadow-lg" alt="House Image">
        </div>
        <div class="col-md-6">
            <div class="bg-light p-4 rounded shadow">
                <h3 class="text-primary">Details</h3>
                <p><strong>House Type:</strong> <?php echo $houseType; ?></p>
                <p><strong>Number of Rooms:</strong> <?php echo $rooms; ?></p>
                <p><strong>Address:</strong> <?php echo $address; ?></p>
                <p><strong>Availability:</strong> <?php echo $availability; ?></p>
                <p><strong>Owner's Contact Details:</strong> <?php echo $contact; ?></p>
                <p><strong>Additional Information:</strong> <?php echo $information; ?></p>
            </div>
        </div>
    </div>
</div>

<?php
include "../includes/footer.php";
?>
