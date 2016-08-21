@extends('templates.master')

@section('title', 'Los Olivos Hand Car Wash :: About :: Phoenix, AZ')

@section('description', 'View a list of Los Olivos\' work with the community.')

@section('content')
<div class="row body">
    <div class="col xs-6 hidden-xs col-sm-3 col-md-3">
        <img src="/images/sign.jpg" class="img-responsive" alt="Soapy bumper" />
    </div>
    <div class="col-xs-12 col-sm-9 col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">
                    About Los Olivos Hand Car Wash
                </h1>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-6 col-md-6 text">
                    	 <p style="margin-bottom: 20px;">Sponsor of:</p>

                       <ul class="pricing">
                       		<li>Phoenix Mercury</li>
                       </ul>

                       <p style="margin-bottom: 20px;">Partner of:</p>

												<ul class="pricing">
														<li>City of Phoenix</li>
														<li>Phoenix Police Department</li>
														<li>FBI</li>
														<li>U.S. Secret Service</li>
												</ul>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <p style="margin-bottom: 20px;">Supporter of:</p>

												 <ul class="pricing">
														<li>Ronald McDonald House</li>
														<li>Phoenix Children's Hospital</li>
														<li>Phoenix Pride</li>
														<li>Rainbows Festival</li>
														<li>Splash Bash</li>
														<li>AIDS Walk Phoenix</li>
														<li>Dining Out for Life</li>
												 </ul>
									</div>

                </div>
            </div>
        </div>
    </div>
</div>
@stop

