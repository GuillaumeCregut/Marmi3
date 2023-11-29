<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
            <?php if(!isset ($title)) : ?>
            Add Your Recipe
            <?php else : ?>
                <?=$title ?>
            <?php endif ?>
        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">

    </head>
    <body>
        <main class="container">
            <a href="/">Home</a>
            <h1>
            <?php if(!isset ($title)) : ?>
            Add Your Recipe
            <?php else : ?>
                <?=$title ?>
            <?php endif ?>
        </h1>

            <?php foreach ($errors as $error) : ?>
                <p><?= $error ?></p>
            <?php endforeach; ?>

            <form action="" method="post">
                <div>
                    <label for="title">Title</label>
                    <input id="title" name="title" type="text" value="<?= $recipe['title'] ?? '' ?>">
                </div>
                <div>
                    <label for="description">Description</label>
                    <textarea id="description" name="description"><?= $recipe['description'] ?? '' ?></textarea>
                </div>
                <?php if(isset($recipe['id'])) : ?>
                    <input type="hidden" name="id" value="<?=$recipe['id'] ?>">
                <?php endif ?>
                <button>Send</button>
            </form>
        </main>
    </body>
</html>
