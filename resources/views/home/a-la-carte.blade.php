@extends('templates.master')

@section('title', 'Los Olivos Hand Car Wash :: A La Carte Prices :: Phoenix, AZ')

@section('description', 'View a la carte prices for Los Olivos Hand Car Wash')

@section('content')
<div class="row body">
    <div class="col xs-6 hidden-xs col-sm-3 col-md-3">
        <img src="/images/bumper.jpg" class="img-responsive" alt="Soapy bumper" />
    </div>
    <div class="col-xs-12 col-sm-9 col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">
                    Prices (A La Carte)
                </h1>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6 text">
                        <dl>
                            <dt>Full service hand car wash</dt>
                            <dd>$12.99</dd>
                        </dl>
                        <dl>
                            <dt>Blue Poly-Clear Coat treatment</dt>
                            <dd>$5.00</dd>
                        </dl>
                        <dl>
                            <dt>Air freshener</dt>
                            <dd>$2.00</dd>
                        </dl>
                        <dl>
                            <dt>Spray wax</dt>
                            <dd>$5.00</dd>
                        </dl>
                        <dl>
                            <dt>Polish rims (each)</dt>
                            <dd>$10.00</dd>
                        </dl>
                        <dl>
                            <dt>Plastic mats cleaned</dt>
                            <dd>$3.00</dd>
                        </dl>
                        <dl>
                            <dt>Exterior wash only</dt>
                            <dd>$6.00</dd>
                        </dl>
                    </div>
                    <div class="col-md-6">
                        <dl>
                            <dt>Black Magic tires</dt>
                            <dd>$3.00</dd>
                        </dl>
                        <dl>
                            <dt>Black Magic interior</dt>
                            <dd>$7.00</dd>
                        </dl>
                        <dl>
                            <dt>Black Magic exterior</dt>
                            <dd>$6.00</dd>
                        </dl>
                        <dl>
                            <dt>Black Magic complete</dt>
                            <dd>$13.00</dd>
                        </dl>
                        <dl>
                            <dt>Back to Black (Maguiar's Exterior)</dt>
                            <dd>$10.00</dd>
                        </dl>
                        <dl>
                            <dt>Shampoo mats (4)</dt>
                            <dd>$7.99</dd>
                        </dl>
                        <dl>
                            <dt>Cream Pro conditioning</dt>
                            <dd>$5-$25*</dd>
                        </dl>
                        <p><em>Prices effective Aug, 1, 2014. Prices may vary due to size or condition of vehicle.</em></p>

                        <p><em>*Depends on vehicle size</em></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@stop
