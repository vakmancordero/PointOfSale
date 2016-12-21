@extends('layouts.template')

@section('title')
    Kaizen - Punto de venta
@stop

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sales/main.css') }}">
@stop

@section('javascript')
    <script src="{{ asset('js/sales/sales.js') }}"></script>
@stop

@section('content')

    <div class="ui large top fixed menu transition hidden">
        <div class="ui container">
            <a class="active item">Inicio</a>
            <a class="item">Nosotros</a>
            <a class="item">Productos</a>
            <div class="right menu">
                <div class="item">
                    <a class="ui button">Iniciar sesión</a>
                </div>
            </div>
        </div>
    </div>

    <div class="ui vertical inverted sidebar menu left">
        <a class="active item">Inicio</a>
        <a class="item">Nosotros</a>
        <a class="item">Productos</a>
        <a class="item">Iniciar sesión</a>
    </div>

    <div class="pusher" ng-app="salesApp" ng-controller="SalesController">
        <div class="ui fixed inverted menu">
            <div class="ui container">
                <a href="#" class="header item">
                    <img class="logo" src="{{asset('img/logo.png')}}">
                    Kaizen Sales
                </a>
                <a href="/" class="item">Inicio</a>
                <div class="ui dropdown item">
                    Herramientas <i class="dropdown icon"></i>
                    <div class="menu">
                        <a class="item" href="#">Link Item</a>
                        <a class="item" href="#">Link Item</a>
                        <div class="divider"></div>
                        <div class="header">Header Item</div>
                        <div class="item">
                            <i class="dropdown icon"></i>
                            Sub Menu
                            <div class="menu">
                                <a class="item" href="#">Link Item</a>
                                <a class="item" href="#">Link Item</a>
                            </div>
                        </div>
                        <a class="item" href="#">Link Item</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui vertical stripe segment">
            <h1 class="ui header container">Bienvenido Arturo Cordero!</h1>
            <div class="ui middle aligned piled segment stackable grid container ">
                <div class="row">
                    <div class="eight wide column">
                        <div class="ui aligned stackable grid">
                            <div class="row">
                                <div class="seven wide column">
                                    <h3 class="ui header ">Número de venta:</h3>
                                </div>
                                <div class="five wide column">
                                    <h3 class="ui header ">09</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="eight wide right floated column" align="right">
                        <h2>Sábado, 31 de diciembre de 2016</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="aligned column">
                        <p>03:49 hrs - 10a Oriente Sur #185, Tuxtla Gtz, Chiapas</p>
                    </div>
                </div>
            </div>

            <div class="ui middle aligned piled segment stackable grid container">

                <div class="row">
                    <div class="wide column">
                        <h1>Cuenta:</h1>
                        <div class="ui four column grid aligned stackable">
                            <div class="row">
                                <div class="column">
                                    <div class="big ui search">
                                        <div class="ui fluid icon input">
                                            <input class="prompt" type="text" placeholder="Buscar producto..." id="test" ng-model="product.name">
                                            <i class="search icon"></i>
                                        </div>
                                        <div class="results"></div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="big ui fluid right labeled input">
                                        <input type="number" placeholder="Cantidad..." ng-model="product.quantify">
                                        <div class="ui basic label">
                                            Unidades
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <button class="big ui fluid orange button" ng-click="addProduct()">
                                        <i class="add circle icon"></i>
                                        Agregar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="wide column">
                        <table class="ui inverted table celled structured">
                            <thead>
                                <tr>
                                    <th class="center aligned">Nombre</th>
                                    <th class="center aligned">Cantidad</th>
                                    <th class="center aligned">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John</td>
                                    <td>Approved</td>
                                    <td>None</td>
                                </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>3 People</th>
                                <th>2 Approved</th>
                                <th></th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui vertical stripe segment">
            <div class="ui text container">
                <h3 class="ui header">Breaking The Grid, Grabs Your Attention</h3>
                <p>Instead of focusing on content creation and hard work, we have learned how to master the art of doing nothing by providing massive amounts of whitespace and generic content that can seem massive, monolithic and worth your attention.</p>
                <a class="ui large button">Read More</a>
                <h4 class="ui horizontal header divider">
                    <a href="#">Case Studies</a>
                </h4>
                <h3 class="ui header">Did We Tell You About Our Bananas?</h3>
                <p>Yes I know you probably disregarded the earlier boasts as non-sequitur filler content, but its really true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>
                <a class="ui large button">I'm Still Quite Interested</a>
            </div>
        </div>
    </div>

@stop