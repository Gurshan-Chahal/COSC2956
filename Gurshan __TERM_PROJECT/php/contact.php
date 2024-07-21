<?php

include "../includes/header.php";

?>

<style>
    body {
        background-image: url('../images/contact.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    .card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .card-body {
        padding: 2rem;
    }
    .form-group label {
        font-weight: bold;
    }
    .form-control {
        border-radius: 5px;
    }
    .btn-dark {
        background-color: #343a40;
        border-color: #343a40;
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-body">
                    <h3 class="card-title text-center">Contact Us</h3>
                    <form action="/contactForm.php" method="post">
                        <div class="form-group mt-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="contact">Contact Details</label>
                            <input type="text" name="contact" class="form-control" id="contact" placeholder="Enter your contact number" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="question">Ask your Question</label>
                            <textarea name="details" class="form-control" id="question" placeholder="Ask your question" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark btn-block mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include "../includes/footer.php";

?>
