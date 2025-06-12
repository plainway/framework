<?php

use Extro\ViewEngine\View;

/** @var View $this; */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" href="/favicon.png" type="image/png">
    <title><?= htmlspecialchars($this->getData('title')) ?></title>
    <style>
        :root {
            --primary: #46C286;
            --dark: #1e293b;
            --light: #f8fafc;
            --error: #ef4444;
        }

        body {
            font-size: 18px;
            font-family: 'Roboto', sans-serif;
            letter-spacing: .1em;
            line-height: 1.5;
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            background: var(--dark);
            color: var(--light);
        }

        .container {
            max-width: 800px;
            text-align: center;
            padding: 2rem;
        }

        .logo-container svg {
            height: 200px;
            width: 200px;
            justify-self: center;
        }

        .logo-container svg g {
            fill: var(--primary);
        }

        .title {
            font-weight: 500;
            font-size: 3.5rem;
            letter-spacing: .1em;
            color: var(--primary);
        }

        .subtitle {
            font-weight: 500;
            font-size: 2rem;
            letter-spacing: .1em;
        }

        .links {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 2rem;
        }

        a {
            color: var(--primary);
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            transition: all 0.2s;
        }

        a:hover {
            background: rgba(79, 70, 229, 0.1);
        }
    </style>
</head>
<body>
<?= $this->renderSection('content') ?>
</body>
</html>