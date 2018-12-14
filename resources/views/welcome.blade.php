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
<div id="app-2">
  <span v-bind:title="message">
    Hover your mouse over me for a few seconds
    to see my dynamically bound title!
  </span>
</div>
<div id="app-1" v-bind:title="message">
    <span>
        xxxxxxxxxxxxx
    </span>
</div>
<script src="{{ mix('js/app.js') }}"></script>
<script>
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
</script>
</body>
</html>
