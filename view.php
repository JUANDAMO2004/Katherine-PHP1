<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Josefin+Sans:ital,wght@1,200&family=Laila:wght@500&family=Poppins&family=Young+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title id="record">View Employee Records</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/logo.png" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
        if (isset($_GET['success']) && $_GET['success'] == '1') {
            echo '<p class="success">Registration was successful!</p>';
        }
        ?>

        <h2>Employee Records</h2>
        <table class=content-table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
                <th>Address</th>
                <th>Phone Number</th>
            </tr>

            <?php
            include("connection.php");

            $sql = "SELECT * FROM employees";
            $result = mysqli_query($conect, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['city'] . "</td>";
                    echo "<td>" . $row['locat'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No records found</td></tr>";
            }

            mysqli_close($conect);
            ?>

        </table>
    </main>

    <footer>
        
    </footer>
</body>
</html>