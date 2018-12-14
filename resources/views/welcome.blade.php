<!DOCTYPE html>
<html lang="vi VN" xmlns:v-bind="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <title>SPA Vuejs</title>

    <!-- Main styles for this application -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <meta id="csrf-token" name="csrf-token" value="{{ csrf_token() }}">
</head>
<body>
<div id="app">

</div>
<div id="app-2">
  <span v-bind:title="message">
    Hover your mouse over me for a few seconds
    to see my dynamically bound title!
  </span>
</div>
<div id="app-1" v-bind:title="message">
    <span>
        @{{ message }}
    </span>
</div>

<div id="app-3" v-if="seen">
    <h1>TRUE !!!</h1>
</div>

<div id="app-4">
    <ol>
        <li v-for="todo in todos">
            {{ todo.text }}
        </li>
    </ol>
</div>

<script src="{{ mix('js/app.js') }}"></script>
<script>
    var app4 = new Vue({
        el: '#app-4',
        data: {
            todos: [
                { text: 'Learn JavaScript' },
                { text: 'Learn Vue' },
                { text: 'Build something awesome' }
            ]
        }
    })

    var app3 = new Vue({

    });

    var app1 = new Vue({
       el: '#app-1',
       data: {
           message: 'Hello Vue!'
       }
    });

    var app2 = new Vue({
        el: '#app-2',
        data: {
            message: 'You loaded this page on ' + new Date().toLocaleString()
        }
    })

    var app3 = new Vue({
        el: '#app-3',
        data: {
            seen: true
        }
    });
</script>
</body>
</html>
