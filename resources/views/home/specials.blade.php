@extends('templates.master')

@section('title', 'Los Olivos Hand Car Wash :: Specials  :: Phoenix, AZ')

@section('description', 'View specials and print coupons for Los Olivos Hand Car Wash')

@section('content')
<div class="row body">
    <div class="col xs-6 hidden-xs col-sm-3 col-md-3">
        <img src="/images/building.jpg" class="img-responsive" alt="building" /><br/>
        <img src="/images/detailing.jpg" class="img-responsive" alt="detailing" /><br/>
        <img src="/images/patio.jpg" class="img-responsive" alt="collage" />

    </div>
    <div class="col-xs-12 col-sm-9 col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">
                    Specials for {{ date('F j, Y') }}
                </h1>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="/images/coupons.jpg" class="img-responsive coupons" alt="coupons" />
                    </div>
                    <div class="col-md-6 text">
                        <p>Three special price packages are available if you print these coupons out by clicking on the image.</p>
                        <p>The Complete Detailing package is offered for $139.99, a special only available with this coupon.  You save $20 on an interior detailing, an engine cleaning and an exterior buff. This package is usually valued at $159.00</p>

                        <p>The Mini Detail is $89.99. You save $10.</p>

                        <p> The Complete Works at $21.99 saves you $13 and includes: vacuuming, air freshener, complete interior/exterior dressing, spray wax and spray Poly Clear-Coat treatment, and washing the mats.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('scripts')
<script>
    function makepage()
    {
        // We break the closing script tag in half to prevent
        // the HTML parser from seeing it as a part of
        // the *main* page.

        return '<html>' + "\n" +
            '<head>' +"\n" +
            '<title>Temporary Printing Window</title>' + "\n" +
            '<script>' + "\n" +
            'function step1() {' + "\n" +
            '  setTimeout(step2(), 10);' + "\n" +
            "}\n" +
            'function step2() {' + "\n" +
            '  window.print();' + "\n" +
            '  window.close();' + "\n" +
            '}' + "\n" +
            '</scr' + 'ipt>' + "\n" +
            '</head>' + "\n" +
            '<body onLoad="step1()">' + "\n" +
            '<img src="/images/coupons.jpg"/>' + "\n" +
            '</body>' + "\n" +
            '</html>' + "\n";
    }

    function printme(evt)
    {
        if (!evt) {
            // Old IE
            evt = window.event;
        }
        var image = evt.target;
        if (!image) {
            // Old IE
            image = window.event.srcElement;
        }
        src = image.src;
        link = "about:blank";
        var pw = window.open(link, "_new");
        pw.document.open();
        pw.document.write(makepage(src));
        pw.document.close();
    }
</script>
<script>
    $(function() {
        $('.coupons').on('click', function(e) {
            e.preventDefault();
            printme(e);
        })
    })
</script>
@stop