<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>

    </header>

    <main id="app">
        <ul>
            
            <li v-for="todo in todos">
                {{todo.task}}
            </li>

           
        </ul>
    </main>

    <footer>

    </footer>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> 

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="js/scripts.js"></script>
</body>
</html>