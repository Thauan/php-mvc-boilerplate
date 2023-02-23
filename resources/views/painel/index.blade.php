<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>

<body>
    <h1>Hello word essa pagina funcionou!</h1>

    <p>Aqui abaixo um foreach:</p>
    @if(count($users))
    <ul>
        @foreach ($users as $user)
        <li>{{ $user }}</li>
        @endforeach
    </ul>
    @endif

    <p>Aqui abaixo uma interpolação:</p>
    <h2>{{ $nome }}</h2>
    <div id="app"></div>
</body>

</html>
<script>
    console.log('aqui')
    var application = new Vue({
        el: '#app',
        data: {},
        methods: {},
        created: function() {}
    });
</script>