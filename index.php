<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoch Steht Er</title>
</head>
<body>
    <header>
        <h1>Welcome</h1>
    </header>
    <main>
        <section>
            <p>
              <?php
              echo 'Hoch steht er am '.date('Y-m-d H:i:s').' .... aber richtig ;)';
              ?>
            </p>
        </section>
    </main>
    <footer>
        <p>&copy; 2000-<?php echo date('Y'); ?> https://www.hochstehter.de</p>
    </footer>
</body>
</html>
