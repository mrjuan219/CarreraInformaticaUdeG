<?php
$filas = $_POST['filas'];
echo "Filas a insertar $filas <br>";
echo "<table id='branch-table' border='1' bordercolor='black'>
        <thead>
            <tr>
                <th colspan='4'>Tabla</th>
            </tr>
        </thead>
        <tbody>";
for($i = 1; $i <= $filas; $i++){
    echo "<tr>
            <td>".$i."</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>";
}
echo "</tbody>
    </table>";
?>
<script src="main.js"></script>
