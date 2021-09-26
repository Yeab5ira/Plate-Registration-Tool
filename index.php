<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/vanilla-dataTables.css">
</head>
<body>

    <div id="add-modal-container" class="add-modal-container">
        <div class="add-modal">
            <div class="close-modal">
                <button onclick="closeModal()">X</button>
            </div>
            <div class="modal-header">
                <h3>Register New License Plate</h3>
                <hr>
            </div>
            <div class="modal-body">
                <!-- <form action="./includes/methods.php" method="post"> -->
                    <input type="text" name="ownerName" id="ownerName" placeholder="Full Name">
                    <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Phone Number">
                    <input type="text" name="plateNumber" id="plateNumber" placeholder="License Plate">
                    <input type="submit" name="registerPlate" value="Register" onclick="registerPlate()">
                <!-- </form> -->
            </div>
        </div>
    </div>

    <div id="body-container" class="body-container">
        <div id="navbar">
            <div class="navbar-container">
                <div class="nav-title-container">
                    <h3>License Plate Registration</h3>
                </div>
                <div class="nav-links-container">
                    <!-- <form action="./includes/methods.php" method="post"> -->
                        <input type="submit" value="Add New License Plate" name="newPlate" onclick="showModal()">
                        <input type="submit" value="List All Registered Plates" name="allPlates" onclick="loadFullTable()">
                    <!-- </form> -->
                </div>
            </div>
        </div>

        <div class="searchbar-container">
            <!-- <form action="./includes/methods.php" method="post"> -->
                <input type="text" name="searchInput" id="searchInput" onkeyup="loadTable()" placeholder="License Plate">
                <input type="submit" value="Search" name="searchSubmit" id="searchSubmit" onclick="loadTable()">
            <!-- </form> -->
            
        </div>
        <div id="table-container">
            
        </div>
    </div>
    
    

    <script src="./assets/js/vanilla-dataTables.js"></script>
    <script src="./assets/js/jquery-3.5.1.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>