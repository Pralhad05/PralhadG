<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container">
        <form method="POST" action="{{ route('register') }}">

            <center>
                <h1>Registeration Form</h1>
            </center>
            <div class="mb-3">
                <label for="name">Name</label>
                <input id="name" class="form-control" type="text" name="name" required>
            </div>

            <div class="mb-3">
                <label for="email">Email</label>
                <input id="email" class="form-control" type="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="password">Password</label>
                <input id="password" class="form-control" type="password" name="password" required>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>

</html>