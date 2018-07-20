<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/framework/app.css">
        <title>Laravel</title>

    </head>
    <body>
        <div class="container">
            <div class="cards">
                @for($i = 0; $i <= 10; $i++)
                    <div class="card">
                        <div class="image" style="background: url(https://placeimg.com/400/400/any);"></div>
                        <h1>title</h1>
                        <div class="footer">
                            <div class="owner">
                                <a href="#" class="logo">
                                    <img src="https://placeimg.com/40/40/any">
                                </a>
                                <div class="content">
                                    <div>Company name</div>
                                </div>
                            </div>
                            <div class="actions">
                                <span class="like"> Like 123</span>
                                <span class="comment"> Comments 14</span>
                            </div>
                        </div>
                    </div>
                    
                @endfor
            </div>            
        </div>
    </body>
</html>
