
<body>
<?php

require 'Navigatie.php';
require 'Voorraad.php';

?>

<table  style="margin: 50px" class="table">
    <thead>
        <h1>Voorraad vriezer</h1>
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
        while($row = $result->fetch_assoc()){
            echo "<tr>
                <td>". $row["Product"] . "</td>
                <td>". $row["Voorraad"] . "</td>
                <td>". $row["Nieuw"] . "</td>
                <td>". $row["Uit"] . "</td>
                <td>". $row["Eigen"] . "</td>

                <td>
                    <a class='btn btn-primary btn-sm' href='update'>update</a>
                </td>

            </tr>";
        }
            
        ?>
</tbody>
</table>

</body>


