@include('header')

<body>

<div class="container">
<h3 class="logo"><center>Менеджер контактов</center></h3>
@include('navbar')
<br><br>
<h1>Список контактов</h1>

@include('_common._conTable')
@include('_common._editContact')


</div>

@include('scripts')

</body>
</html>