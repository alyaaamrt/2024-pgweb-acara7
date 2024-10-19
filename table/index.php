<!DOCTYPE html>
<html lang="en">
<body>

<?php
// Array data nama dan hobi
$names_and_hobbies = array(
    array("nama" => "Diana Prameswari", "hobi" => "Memancing"),
    array("nama" => "Allya Miranti", "hobi" => "Memasak"),
    array("nama" => "Zahra Khusnul", "hobi" => "Bernyanyi"),
    array("nama" => "Aurelia Anggi", "hobi" => "Olahraga")
);

// Membuat tabel menggunakan echo
echo "<table border='2'>";
echo "<tr><th>Nama</th><th>Hobi</th></tr>";


// Looping untuk menampilkan data nama dan hobi
foreach ($names_and_hobbies as $row) {
    echo "<tr>";
    echo "<td style='padding: 10px;'>" . $row['nama'] . "</td>"; // Nama
    echo "<td style='padding: 10px;'>" . $row['hobi'] . "</td>"; // Hobi
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
