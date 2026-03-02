<?php
$result = $conn->query("SELECT * FROM users");

echo "<table class='table table-bordered'>";
echo "<tr><th>ID</th><th>Ime</th><th>Prezime</th><th>Email</th><th>Akcija</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['ime']}</td>
        <td>{$row['prezime']}</td>
        <td>{$row['email']}</td>
        <td>
            <a href='update.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
            <a href='delete.php?id={$row['id']}' 
   onclick='return confirmDelete()' 
   class='btn btn-danger btn-sm'>Delete</a>
        </td>
    </tr>";
}

echo "</table>";
?>