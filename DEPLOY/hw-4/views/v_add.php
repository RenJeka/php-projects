<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление статьи</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
          integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

    <style>
        * {
            font-size: 22px;
        }
    </style>
</head>

<body>
<div class="container">

    <div class="row px-3">
        <div class="col">

            <div class="display-6 text-center ">
                Добавление статьи
            </div>

            <form method="post">
                <div class="mb-3">
                    <label for="articleTitle" class="form-label">Заголовок статьи:</label>
                    <input
                        type="text"
                        name="title"
                        class="form-control"
                        id="articleTitle"
                        aria-describedby="articleTitleHelp"
                        value="<?=$inputParameters['title']?>"
                    >
                    <div id="articleTitleHelp" class="form-text">Введите сюда название своей статьи</div>
                </div>

                <div class="mb-3">
                    <label
                        for="articleCategory"
                        class="form-label"
                    >Выберите категорию статьи:</label>
                    <select name="id_category" class="form-select">
                        <option value="" hidden>Выберите значение:</option>
                        <? foreach ($categories as $category): ?>
                            <option
                                value=<?= $category['id_category'] ?>
                                <?=$category['id_category'] == $inputParameters['id_category'] ? 'selected' : ''?>
                            >
                                <?= $category['categoryName'] ?>
                            </option>
                        <? endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="articleText" class="form-label">Введите текст статьи: </label>
                    <textarea
                        name="text"
                        class="form-control"
                        id="articleText"
                        rows="10"
                    > <?=$inputParameters['text']?></textarea>
                </div>

                <div class="mb-3">
                    <label for="articleImageUrl" class="form-label">Ссылка на изображение</label>
                    <input
                        type="text"
                        name="imageUrl"
                        class="form-control"
                        id="articleImageUrl"
                        aria-describedby="articleImgUrlHelp"
                        value="<?=$inputParameters['imageUrl']?>"
                    >
                    <div id="articleImgUrlHelp" class="form-text">Просто правой кн. мыши на любой картинки в
                        интернете → и "Копировать URL"</div>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success btn-lg btn-block">Добавить статью</button>
                </div>
                <? foreach ($validateErrors as $error ):?>
                    <p><?=$error?></p>
                <? endforeach;?>
            </form>

            <a href="index.php" class="btn btn-primary btn-sm">На главную</a>

        </div>
    </div>
</div>
</body>

</html>