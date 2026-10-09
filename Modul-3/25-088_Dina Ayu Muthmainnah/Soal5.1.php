<?php
$data = array(
    array("Alex", "220401", "0812345678"),
    array("Bianca", "220402", "0812345687"),
    array("Candice", "220403", "0812345665")
);

$data[] = array("Daniel", "220404", "0812345670");
$data[] = array("Elena", "220405", "0812345671");
$data[] = array("Fiona", "220406", "0812345672");
$data[] = array("Gabe", "220407", "0812345673");
$data[] = array("Hannah", "220408", "0812345674");

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Name</th><th>NIM</th><th>Mobile</th></tr>";

for ($i = 0; $i < count($data); $i++) {
    echo "<tr>";
    echo "<td>" . $data[$i][0] . "</td>";
    echo "<td>" . $data[$i][1] . "</td>";
    echo "<td>" . $data[$i][2] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>