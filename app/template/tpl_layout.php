<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <style>
        body {
            font-family: sans-serif;
        }

        .audio-player {
            margin-bottom: 10px;
        }

        .logout,
        .login {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <?php if ($auth): ?>
        <div class="logout"><a href="logout.php">Выход</a></div>
    <?php else: ?>
        <div class="login"><a href="login.php">Вход</a></div>
    <?php endif; ?>
    <div id="feed">
        <?php echo $portial ?>

    </div>
    <button type="button" id="paginator">Далее...</button>
</body>
<script>
    async function getFetch(url) {
        const response = await fetch(url, {
            method: 'get'
        })
        return await response.text();

    }
    async function getPage(event) {
        event.stopPropagation()
        event.preventDefault()

        let num_page = event.target.getAttribute('data-id')
        console.log(num_page)
        let limit = 5
        url = 'portial?offset=' + limit * num_page + '&limit=' + limit
        console.log(url)
        let data = await getFetch(url)
        console.log(data)
        if (!data) {
            event.target.remove() 
            console.log("No data")
        } else
        {   console.log("Data")
                }
        feed = document.getElementById('feed')
        feed.innerHTML = feed.innerHTML + data
        event.target.setAttribute('data-id', parseInt(num_page) + 1)

    }

    const parent = document.getElementById('paginator')
    parent.addEventListener('click', getPage)
</script>

</html>