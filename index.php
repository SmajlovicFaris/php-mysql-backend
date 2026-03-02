<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Sistem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Dodaj korisnika</h2>

<form action="create.php" method="POST" class="mb-4">
    <input type="text" name="ime" placeholder="Ime" class="form-control mb-2" required>
    <input type="text" name="prezime" placeholder="Prezime" class="form-control mb-2" required>
    <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
    <button type="submit" class="btn btn-primary">Dodaj</button>
</form>

<h2>Lista korisnika</h2>

<?php include "read.php"; ?>

</body>
</html>