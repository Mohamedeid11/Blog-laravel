<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>
        <form action="/login" method="post" role="form">
            {{csrf_field()}}
            <legend>Login</legend>
            <div class="form-group">
                <label for="username"></label>
                <input type="text" class="form-control" name="username" id="username" placeholder="input.......">
            </div>

            <div class="form-group">
                <label for="password"></label>
                <input type="password" class="form-control" name="password" id="password" placeholder="input.......">
            </div>

            <button type="submit" class="btn btn-primary">login</button>
        </form>
    </body>
</html>
