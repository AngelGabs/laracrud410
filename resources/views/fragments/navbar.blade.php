<style>
    header {
        background: rgba(122, 79, 249, 0.8);
        color: #fff;
        padding-block: 4px;
        margin-block: -8px;
        margin-inline: -8px;
    }

    nav p{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 25px;
        padding-inline: 20px;
    }

    nav p a{
        color: #fff;
        text-decoration: none;
        padding-block: 10px;
        margin-inline: 10px;
    }

    nav p a:hover{
        background: rgb(236, 201, 136);
        padding-block: 5px;
        padding-inline: 10px;
    }
</style>
<header>
    <nav>
        <p>
            <a href="{{route('index')}}">Inicio</a>
            <a href="{{route('products.index')}}">Productos</a>
            <a href="{{route('clients.index')}}">Cliente</a>
            <a href="{{route('sales.index')}}">Ventas</a>
        </p>    
    </nav>    
</header>
<br>