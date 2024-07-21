<?php
include "../includes/header.php";
session_start();
if(!isset($_SESSION['loggedin'])){
    $_SESSION['error-message']="Please log in to continue";
    header('Location: signin.php');
    exit();
}
?>

<div class="home-container mt-5">
    <div class="home-upper-container mt-3 d-flex justify-content-center align-items-center" style="background-image: url('/images/search-img.jpg'); background-size: cover; padding: 20px; height: 500px;">
        <form class="row g-3 w-100 bg-light p-4 rounded" action="/houseForm.php" method="post">
            <div class="col-md-4 m-3">
                <label for="houseType" class="form-label">House Type</label>
                <select id="houseType" name="houseType" class="form-select">
                    <option selected>Choose...</option>
                    <option>Apartment</option>
                    <option>Townhouse</option>
                    <option>Condo</option>
                </select>
            </div>
            <div class="col-md-4 m-3">
                <label for="numRooms" class="form-label">Number of Rooms</label>
                <select id="numRooms" name="rooms" class="form-select">
                    <option selected>Choose...</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
            <div class="col-12 m-3">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
    </div>
    <div class="middle-container mt-5">
        <h2 class="p-4 text-center">New Houses</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4 p-4">
            <?php for ($i = 0; $i < 10; $i++): ?>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src=<?php echo "/images/house".($i+1).".jpg"; ?> class="card-img-top h-100" alt="House Image">
                        <div class="card-body">
                            <form action="description.php" method="post">
                                <input type="hidden" name="image_id" value="<?php echo $i+1; ?>">
                                <button type="submit" class="btn btn-outline-primary">Read</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
    <div class="home-lower-container mt-5 text-center">
        <p>Still not found what you are looking for? <a href="contact.php">Contact Us</a></p>
    </div>
</div>

<?php
include "../includes/footer.php";
?>
