@extends('templates.master')

@section('title', 'Los Olivos Hand Car Wash :: Combination Packages :: Phoenix, AZ')

@section('description', 'View a list of combination packages at Los Olivos Hand Car Wash')

@section('content')
<div class="row body">
    <div class="col xs-6 hidden-xs col-sm-3 col-md-3">
        <img src="/images/spray.png" class="img-responsive" alt="Car getting cleaned" />

        <p>We wash cars the old-fashioned way -- by hand!</p>
    </div>
    <div class="col-xs-12 col-sm-9 col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">
                    Prices (Combination Packages)
                </h1>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6 text">
                        <dl>
                            <dt>The Works</dt>
                            <dd>$18.99</dd>
                        </dl>

                        <ul class="pricing">
                            <li>Hand wash</li>
                            <li>Blue Poly Clear-Coat Treatment</li>
                            <li>Spray wax</li>
                            <li>Freshener</li>
                            <li>Armor All Tires</li>
                            <li>Wash Rubber Mats</li>
                            <li>Vacuum and wipe interior</li>
                            <li>$22.99 Value (You Save $5.00)</li>
                        </ul>

                        <h2>Extra Charges</h2>

                        <dl>
                            <dt>Oversize Vans and Suburbans</dt>
                            <dd>$2.00</dd>
                        </dl>

                        <dl>
                            <dt>Large Trucks</dt>
                            <dd>$2.00</dd>
                        </dl>

                        <dl>
                            <dt>Minivans/SUVs</dt>
                            <dd>$1.00</dd>
                        </dl>

                        <dl>
                            <dt>Utility Vehicles</dt>
                            <dd>$1.00</dd>
                        </dl>

                    </div>
                    <div class="col-md-6">
                        <dl>
                            <dt>Complete Works</dt>
                            <dd>$24.99</dd>
                        </dl>

                        <ul class="pricing">
                            <li>Hand wash</li>
                            <li>Blue Poly Clear-Coat Treatment</li>
                            <li>Spray wax</li>
                            <li>Freshener</li>
                            <li>Black Magic Complete</li>
                            <li>Wheel Brite</li>
                            <lI>Rubber Mats</lI>
                            <li>Vacuum and wipe interior</li>
                        </ul>

                        <br />

                        <p><em>Prices effective Jan. 1, 2017.  Prices subject to change without notice. Prices may vary due to size and condition of vehicle.</em></p>

                        <p><em>Vacuum extra.</em></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop




