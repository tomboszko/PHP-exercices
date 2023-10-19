<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Unicorn</title>
</head>
<body>

    <h1>Unicorn</h1>

    <?php
    $animal = isset($_POST['animal']) ? $_POST['animal'] : '';
    $image = '';

    switch ($animal) {
        case 'human':
            $image = 'https://media2.giphy.com/media/vvBsAcNyjKk6iOkVx3/giphy.gif?cid=ecf05e47o1qamtuhws7nrst6o8s4l6p007538n6u8ml3a58l&ep=v1_gifs_search&rid=giphy.gif&ct=g';
            break;
        case 'cat':
            $image = 'https://media3.giphy.com/media/vFKqnCdLPNOKc/giphy.gif?cid=ecf05e47pdg1h57p5yshqkkz30064x73nn3pv77s408inon1&ep=v1_gifs_search&rid=giphy.gif&ct=g';
            break;
        case 'unicorn':
            $image = 'https://media3.giphy.com/media/j0kQJxo5mzGYb4EvWK/giphy.gif?cid=ecf05e478zh1zdq3rh20h8644a8xzlqwm0o4lz3iz40rcxff&ep=v1_gifs_search&rid=giphy.gif&ct=g';
            break;
        default:
            break;
    }
    ?>

    <form method="post" action="">
        <label for="animal">Are you a human, a cat or a unicorn?</label>
        <select name="animal">
            <option value="human">Human</option>
            <option value="cat">Cat</option>
            <option value="unicorn">Unicorn</option>
        </select>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php if ($image) { ?>
        <img src="<?php echo $image; ?>" alt="Animated Gif">
    <?php } ?>

</body>
</html>