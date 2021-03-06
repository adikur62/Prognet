@extends('layout.login-template')
@section('title')
	Pendaftaran - ITCC 2018
@endsection
@section('content')
<!--HEADER WEBSITE-->
<div id="bg-login" >
    <div class="container">
        <div class="row pendaftaran-body">
           
            <div class="col-md-2 hidden-sm hidden-xs"></div>
            <div class="col-md-8 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                  
                <section id="contact">
                  	<div class="form" style="background-color: white;">
                  		<form method="post" action="#" class="contactForm">
	                        <div class="row" style="width: 100%; min-height: 450px; margin-right: 0px; margin-left: 0px; margin-top: 40px;">

	                     		<div class="col-md-4 login-page" style="background: #232323; height: 450px;">
				                    <img src="asset/images/logo-itcc5.png" style="width: 70%;margin-left: 35px;margin-top: 70px;" class="img-responsive center-block ">
				                    <h3 style="color: white; text-align: center;">Tema ITCC 2018</h3>
				                    <h4 style="color:#a2c8cc; text-align: center;">"Tema"</h4>
				                    <hr style="width: 80%; color: white; margin-bottom: 5px;">
				                    <p style="margin-left: 35px;"><a href="https://www.facebook.com/ITCC.Udayana"><img style="width: 30px;" src="asset/images/facebook.png"></a><a href="https://twitter.com/ITCCUdayana"><img style="width: 30px;" src="asset/images/twitter.png"></a><a href="https://www.instagram.com/itcc_udayana/"><img style="width: 30px;" src="asset/images/instagram.png"></a><a href="https://ask.fm/itcc_udayana"><img style="width: 30px;" src="asset/images/Askfm.png"></a><a href="https://bit.ly/ITCCUdayana"><img style="width: 30px;" src="asset/images/line.png"></a></p>
	                        
	                     		</div>
	                     		<div class="col-md-8" style="margin-top: 70px; padding-left: 50px; padding-right: 50px; ">
	                        		<h1 style="text-align: center; color: #232323; margin-bottom: 50px;">Cabang Lomba</h1>
	                     			<a class="btn-cabang" href="/signprog" style="width: 100%; margin-bottom: 10px;">Pemrograman</a>
	                     			<a class="btn-cabang" href="/signweb" style="width: 100%; margin-bottom: 10px;">Desain Web</a>
	                     			<a class="btn-cabang" href="/signlcc" style="width: 100%; margin-bottom: 10px;">Cerdas Cermat</a>
	                     			<a class="btn-cabang" href="/signidea" style="width: 100%; margin-bottom: 10px;">Pengembangan Ide Bisnis TIK</a>
	                     			<a class="btn-cabang" href="/signsi" style="width: 100%; margin-bottom: 20px;">Sistem Informasi</a>
	                     		</div>
	                     	</div>
	                	</form>
               		</div>
                </section>

            </div>
        	<div class="col-md-2 hidden-sm hidden-xs"></div>

	    </div>
    </div>
</div>
<!--//HEADER WEBSITE-->
@endsection