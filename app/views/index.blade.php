@include('header')

<body>

<div class="container">
<h3 class="logo"><center>Менеджер контактов</center></h3>
@include('navbar')

@include('_common._addContact')
@include('_common._editContact')
<br>
@include('_common._conTable')
</div>

@include('scripts')



</script>
</body>
</html>