<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>About Us</title>
</head>

<body>
    <div class="container">
        <h1 class="text-3xl font-bold underline"><?php echo htmlspecialchars($company->name); ?></h1>
        <p><?php echo nl2br(htmlspecialchars($company->description)); ?></p>
    </div>
</body>
</html>