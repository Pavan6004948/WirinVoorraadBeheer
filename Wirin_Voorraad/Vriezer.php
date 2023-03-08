<body>
<?php
require_once 'dbConfig.php';
require 'Navigatie.php';



$sql = "SELECT * FROM vriezer";
$result = $connection->query($sql);

if (!$result) {
	die("invalid query: " . $connection->error);
}
?>

<table  style="margin: 50px" class="table">
    <thead>
        <h1>Voorraad vriezer<?php  ?></h1>
        <tr>
            <th>Product</th>
            <th>Voorraad</th>
            <th>Nieuw</th>
            <th>uit</th>
            <th>Laat/Eigen</th>
        </tr>
    </thead>

    <tbody>
        <?php
            if($sql = "vriezer"){
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                        <td>". $row["Product"] . "</td>
                        <td>". $row["Voorraad"] . "</td>
                        <td>". $row["Nieuw"] . "</td>
                        <td>". $row["Uit"] . "</td>
                        <td>". $row["Eigen"] . "</td>

                        <td>
                            <a class='btn btn-outline-primary btn-sm' href='update'>update</a>
                            <a class='btn btn-outline-danger btn-sm' href='detete'>delete</a>
                        </td>

                    </tr>";
                }
            }


        ?>
</tbody>
</table>

</body>


