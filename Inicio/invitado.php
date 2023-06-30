<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="invitado.css">
</head>

<body>
    <?php
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];

    echo "<h1>Bienvenido, " . $nombre . " " . $apellido . "</h1>";
    ?>
    <div class="container">
        <div class="row">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio sapiente libero corrupti, maiores sunt facilis consequatur deleniti voluptate aliquam, repudiandae doloribus repellat natus voluptatem quisquam atque. Laborum aspernatur incidunt esse! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dignissimos possimus necessitatibus voluptatibus magni ab, excepturi illum optio. Dicta quidem distinctio vel, cum consequatur eius est veritatis recusandae provident iure. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum possimus voluptas ipsa incidunt reiciendis. Officia tempore, asperiores, numquam molestiae accusamus distinctio animi porro nostrum, reprehenderit voluptatibus consectetur eos ad quae. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum quam maxime, consequuntur facere quia excepturi corporis culpa vel aspernatur cumque. Doloribus sit eveniet vero quas architecto unde qui consequuntur dicta.</p>
        </div>
        <div class="row">
        <div class="card" style="width: 18rem;">
            <img src="https://1.bp.blogspot.com/-SQM9w-2gAmk/YOryZxeLWwI/AAAAAAABYGw/fcFnfX228SMf924tRNoVrjUrIqrf7pgZgCLcBGAsYHQ/s2048/E5_B10ZXMAYVDON.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://th.bing.com/th/id/OIF.qfhX6FFoGBJbZEix4JMrUw?pid=ImgDet&rs=1" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://th.bing.com/th/id/R.34fbf48d58a83f2bc3eca080bd655db8?rik=2D8O9VvP4HajQQ&pid=ImgRaw&r=0" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        </div>
    </div>
</body>

</html>