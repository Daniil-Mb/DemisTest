<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>TestDemisGroup</title>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <nav class="header__nav"> 
                <ul class="header__ul-menu">
                    <li class="header__li"><a class="header__a" href="/main">Главная</a></li>
                    <li class="header__li"><a class="header__a" href="/news">Новости</a></li>
                    <li class="header__li"><a class="header__a" href="/feedback ">Обратная связь</a></li>
                </ul>
            </nav>
        </div>
    </header> 
    <main class="main">
        <div class="container">
            
        <?php include 'application/views/'.$content_view; ?>

        </div>
    </main>    
    <footer class="footer">
        <div class="container">

        </div>
    </footer>   
    <script src="/js/main.js"></script>
</div>
</body>  
</html>