@extends('layouts2.libros')
@section('contenido2')
<body>
<div class="page-nav">
    <h1>Biblioteca virtual</h1>
    <button id="checkout" class="button-checkout" onclick="pay()">Pagar</button>
    <a href="/categorias" class="btn btn-light m-3" >Registrar libros</a>

</div>

<div class="page-content">
    @foreach($librosData as $librosDatas)
    <div class="product-container">
        <h3>{{$librosDatas -> libro}}</h3>
        <img src="https://www.adobe.com/es/express/create/cover/media_10487a00f81e45735d68f68bc2739b65bb4997de1.png?width=400&format=png&optimize=medium" />
        <h1>{{$librosDatas -> estado}}</h1>
        <button class="button-add" onclick="add('product-3', 250)">Agregar</button>
    </div>
    @endforeach

</div>
</body>
<script>
    let products = [];
    let total = 0;

    function add(product, price) {
        console.log(product, price);
        products.push(product);
        total = total + price;
        document.getElementById("checkout").innerHTML = `Pagar $${total}`
    }

    function pay() {
        window.alert(products.join(", \n"));
    }

</script>

@endsection
