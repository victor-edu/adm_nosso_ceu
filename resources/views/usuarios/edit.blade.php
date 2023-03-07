<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body class="container">
    <div class="card mt-5  shadow-lg">
        <div class="card-body ">
            <x-form :action="route('user.update',$user->id )" :nome="$user->name" :email="$user->email" :cpf="$user->cpf" :endereco="$user->endereco" :complemento="$user->complemento" :senha="$user->password" :update="true" />
        </div>
    </div>
</body>
</html>