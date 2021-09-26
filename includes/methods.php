<?php 

    include './database.php';


    // Checks if the search button is clicked
    if(isset($_POST["searchSubmit"])){
        // Checks the value if it is empty or not
        $value = $_POST["searchInput"] != "" ? searchLicense($_POST["searchInput"],$conn) : null;
        
        if($value != null){
            $jsonValue = json_encode($value);
            echo "<table id='platesTbl'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>License Plate</th>
                    <th>Registration Date</th>
                </tr>
            </thead>
            <tbody id='table-body'>";
            foreach ($value as $key => $var) {
                echo "
                    <tr>
                        <td>".$var['id']."</td>
                        <td>".$var['name']."</td>
                        <td>".$var['phone_num']."</td>
                        <td>".$var['plate_num']."</td>
                        <td>".$var['reg_date']."</td>
                    </tr>
                ";
            } 
            echo "
            </tbody>
            </table>
            ";
        } else echo 'Not Found In The Database';
        
    }

    // Function to return the searched License Plate
    function searchLicense($searchValue,$conn){

        $sql = "SELECT * FROM licenseplates WHERE plate_num LIKE '%$searchValue%'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        } else return null;
    }

    // Checks if the full list is requested
    if(isset($_POST["fullTable"])){
        
        $sql = "SELECT * FROM licenseplates";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            echo "<table id='platesTbl'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>License Plate</th>
                    <th>Registration Date</th>
                </tr>
            </thead>
            <tbody id='table-body'>";
            foreach ($result as $key => $var) {
                // echo(json_encode($var));
                echo "
                    <tr>
                        <td>".$var['id']."</td>
                        <td>".$var['name']."</td>
                        <td>".$var['phone_num']."</td>
                        <td>".$var['plate_num']."</td>
                        <td>".$var['reg_date']."</td>
                    </tr>
                ";
            } 
            echo "
            </tbody>
            </table>
            ";
            
        } else return null;
            
                
        
    }

    // checks if the register button is clicked
    if(isset($_POST["registerPlate"])){
        $name = $_POST["owner"];
        $phone = $_POST["phone"];
        $plate = $_POST["plate"];
        $curDate = date("Y-m-d");
        $sql = "INSERT INTO `licenseplates` (`name`, `phone_num`, `plate_num`, `reg_date`) VALUES ('$name', '$phone', '$plate', '$curDate')";
        $result = mysqli_query($conn,$sql);
    }