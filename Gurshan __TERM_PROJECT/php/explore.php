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
    <div class="middle-container mt-5">
        <!-- Apartments Section -->
        <div class="p-4 mb-5 bg-light rounded shadow-sm h-100">
            <h2 class="text-center bg-warning text-white py-2 rounded h-100">Apartments</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4 p-4 h-100">
                <?php for ($i = 0; $i < 4; $i++): ?>
                    <div class="col">
                        <div class="card h-100 bg-white shadow-sm">
                            <img src=<?php echo "/images/house".($i+1).".jpg"; ?> class="card-img-top h-100" alt="House Image">
                            <div class="card-body d-flex flex-column">
                                <form action="description.php" method="post" class="mt-auto">
                                    <input type="hidden" name="image_id" value="<?php echo $i+1; ?>">
                                    <button type="submit" class="btn btn-outline-primary btn-block">Read</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>

        <div class="p-4 mb-5 bg-light rounded shadow-sm h-100">
            <h2 class="text-center bg-warning text-white py-2 rounded">Condos</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4 p-4 h-100">
                <?php for ($i = 4; $i < 8; $i++): ?>
                    <div class="col">
                        <div class="card h-100 bg-white shadow-sm h-100">
                            <img src=<?php echo "/images/house".($i+1).".jpg"; ?> class="card-img-top h-100" alt="House Image">
                            <div class="card-body d-flex flex-column">
                                <form action="description.php" method="post" class="mt-auto">
                                    <input type="hidden" name="image_id" value="<?php echo $i+1; ?>">
                                    <button type="submit" class="btn btn-outline-primary btn-block">Read</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>

        <!-- Townhouses Section -->
        <div class="p-4 mb-5 bg-light rounded shadow-sm h-100">
            <h2 class="text-center bg-warning text-white py-2 rounded">Townhouses</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4 p-4">
                <?php for ($i = 8; $i < 12; $i++): ?>
                    <div class="col">
                        <div class="card h-100 bg-white shadow-sm h-100">
                            <img src=<?php echo "/images/house".($i+1).".jpg"; ?> class="card-img-top h-100" alt="House Image">
                            <div class="card-body d-flex flex-column">
                                <form action="description.php" method="post" class="mt-auto">
                                    <input type="hidden" name="image_id" value="<?php echo $i+1; ?>">
                                    <button type="submit" class="btn btn-outline-primary btn-block">Read</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
    
    <div class="home-lower-container mt-5 text-center">
        <p>Still not found what you are looking for? <a href="contact.php">Contact Us</a></p>
    </div>
</div>

<?php
include "../includes/footer.php";
?>
