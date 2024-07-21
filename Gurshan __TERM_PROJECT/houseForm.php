<?php
    include "./includes/header.php";
    include "./db/conn.php";
    session_start();
    $houseType=$_POST['houseType'];
    $rooms=$_POST['rooms'];
    $address="N/A";
    $availability="N/A";
    $contact="N/A";
    $information="N/A";
    If($_SERVER["REQUEST_METHOD"] == "POST"){
        $sql = "SELECT * FROM house_details WHERE type='$houseType' and rooms=$rooms";
        $result = mysqli_query($conn, $sql);
        if($result){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $house_id=$row['house_id'];
                    $houseType=$row["type"];
                    $rooms=$row["rooms"];
                    $address=$row["address"];
                    $availability=$row["availability"];
                    $contact=$row["contact"];
                    $information=$row["information"];
                    $image="./images/house".$house_id.".jpg";
                    echo '<div class="container mt-5">
                        <h1 class="mt-5">Description</h1>
                        <div class="row align-items-center my-4">
                            <div class="col-md-6">
                                
                                <img src='.$image.' class="img-fluid float-start me-4" alt="House Image">
                            </div>
                            <div class="col-md-6">
                                <p>House Type: '.$houseType.'</p>
                                <p>Number of Rooms: '.$rooms.'</p>
                                <p>Address: '.$address.'</p>
                                <p>Availability: '.$availability.'</p>
                                <p>Owners contact details: '.$contact.'</p>
                                <p>Additional Information: '.$information.'</p>
                            </div>
                        </div>
                    </div>
                    <hr>';
                } 
            }else{
                echo '<div class="container mt-5">
                        <h1 class="mt-5 text-center text-danger">Oops! No record found.</h1>
                    </div>';
            }
        }
        else{
            echo '<div class="container mt-5">
                    <h1 class="mt-5">Description</h1>
                </div>';
        }
    }
    else{                           
        echo "Error executing query: " . mysqli_error($conn);
    }
?>



<?php
include "./includes/footer.php";
?>
