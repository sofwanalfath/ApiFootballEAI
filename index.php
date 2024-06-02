<?php 
    require 'api/api_get_standings.php';
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Standings</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
       body {
    background-color: #b0b0b0; 
    margin-top: 24px;
    
}
    </style>
</head>
<body>
<div class="container">
        <h1 style="color: black;">KLASEMEN LIGA API EAI</h1>
        <ul class="nav justify-content-center my-16">
            <li class="nav-item mx-3">
                <a class="btn btn-dark <?php echo (isset($_GET['league']) && $_GET['league'] == 'english') ? 'btn-primary text-white' : 'btn-outline-primary'; ?>" href="index.php?league=english">English League</a>
            </li>
            
            <li class="nav-item mx-3">
                <a class="btn btn-dark <?php echo (isset($_GET['league']) && $_GET['league'] == 'german') ? 'btn-primary text-white' : 'btn-outline-primary'; ?>" href="index.php?league=german">German League</a>
            </li>
            
            <li class="nav-item mx-3">
                <a class="btn btn-dark <?php echo (isset($_GET['league']) && $_GET['league'] == 'italy') ? 'btn-primary text-white' : 'btn-outline-primary'; ?>" href="index.php?league=italy">Italy League</a>
            </li>
            <li class="nav-item mx-3">
                <a class="btn btn-dark <?php echo (isset($_GET['league']) && $_GET['league'] == 'indonesia') ? 'btn-primary text-white' : 'btn-outline-primary'; ?>" href="index.php?league=indonesia">indonesia League</a>
            </li>
            <li class="nav-item mx-3">
                <a class="btn btn-dark <?php echo (isset($_GET['league']) && $_GET['league'] == 'spain') ? 'btn-primary text-white' : 'btn-outline-primary'; ?>" href="index.php?league=spain">Spanyol League</a>
            </li>
        </ul>

        <?php
        if (isset($_GET['league'])) {
            $league = $_GET['league'];

            if ($league === 'english') {
                include 'pages/englishLeague.php';
            } elseif ($league === 'france') {
                include 'pages/franceLeague.php';
            } elseif ($league === 'german') {
                include 'pages/germanLeague.php';
            } elseif ($league === 'indonesia') {
                include 'pages/indonesiaLeague.php';
            } elseif ($league === 'italy') {
                include 'pages/italyLeague.php';
            } elseif ($league === 'spain') {
                include 'pages/spainLeague.php';
            } else {
                include 'pages/englishLeague.php';
            }
        } else {
            include 'pages/englishLeague.php';
        };
        ?>
    </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
