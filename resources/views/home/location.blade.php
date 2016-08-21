@extends('templates.master')

@section('title', 'Los Olivos Hand Car Wash :: Location :: Phoenix, AZ')

@section('description', 'Los Olivos Hand Car Wash is located on the northwest corner of 3rd Street and McDowell Road. It is located directly north of the school playground. The address is 232 East McDowell Road in central Phoenix.')

@section('content')
<div class="row body">
    <div class="col-xs-12 col-sm-6 col-md-6" id="map">
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">
                    Our Location
                </h1>
            </div>
            <div class="panel-body">
                <img src="/images/location.jpg" class="img-responsive" alt="Los Olivos sign" />

                <p>Los Olivos Hand Car Wash is located on the northwest corner of 3rd Street and McDowell Road. It is located directly north of the school playground. The address is 232 East McDowell Road in central Phoenix.</p>
            </div>
        </div>
    </div>
</div>
@stop

@section('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsozDDp2kzJoqHhg2ZNgL2XVaRYKGdcbo&sensor=false">
</script>
<script type="text/javascript">
    $(function() {
        initialize();
    });
    function initialize() {
        var mapOptions = {
            center: new google.maps.LatLng(33.465882,-112.069750),
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map"),
            mapOptions);

        var lambda = new google.maps.Marker({
            position: new google.maps.LatLng(33.465882,-112.069750),
            draggable: false,
        });

        lambda.setMap(map);

        var infowindow = new google.maps.InfoWindow();

        var lambdaInfo = {
            company: 'Los Olivos Hand Car Wash',
            address: '232 E. McDowell Road',
            city: 'Phoenix',
            state: 'AZ',
            zip: '85004',
        }

        infowindow.setContent(infowindowContent(lambdaInfo));

        infowindow.open(map, lambda);
    }

    function infowindowContent(info) {
        html = '<div>';
        html += '<p style="margin-bottom:5px; color: #000;">' + info.company + '</p>';
        html += '<p style="margin-bottom:5px; color: #000;">' + info.address + '</p>';
        html += '<p style="margin-bottom:5px; color: #000;">' + info.city + ' ' + info.state + ' ' + info.zip + '</p></div>';

        return html;
    }
</script>
@stop