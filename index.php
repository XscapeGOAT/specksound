<?php 
if(isset($_POST['submit'])){
    $to = "specksound@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $myName = $_POST['myName'];
    $subject = $myName . " submitted a message.";
    $message = $myName . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    }
?>
<!DOCTYPE html>
<html lang=en>
<head>
<link rel=icon href=http://specksound.com/SpecFavi.ico type=image/gif sizes=64x64>
<title>SPECK SOUND | Recording Mixing & Production | NYC</title>
<meta charset=utf-8>
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv=x-ua-compatible content="ie=edge">
<meta name=description content="Knowledge and ability to take your to project to the next level. Alec Speckenbach is SpeckSound; recording artist, mixing engineer & music producer.">
<style>@font-face{font-family:'MenschRegular';src:url('http://specksound.com/fonts/mensch-wf.eot');src:url('http://specksound.com/fonts/mensch-wf.eot?#iefix') format('embedded-opentype'),url('http://specksound.com/fonts/mensch-wf.woff') format('woff'),url('http://specksound.com/fonts/mensch-wf.ttf') format('truetype'),url('http://specksound.com/fonts/mensch-wf.svg#MenschMenschRegular') format('svg');font-weight:normal;font-style:normal}@font-face{font-family:'MenschBoldInline';src:url('http://specksound.com/fonts/mensch-inline-wf.eot');src:url('http://specksound.com/fonts/mensch-inline-wf.eot?#iefix') format('embedded-opentype'),url('http://specksound.com/fonts/mensch-inline-wf.woff') format('woff'),url('http://specksound.com/fonts/mensch-inline-wf.ttf') format('truetype'),url('http://specksound.com/fonts/mensch-inline-wf.svg#MenschMenschBoldInline') format('svg');font-weight:normal;font-style:normal}</style>
<link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css integrity=sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY crossorigin=anonymous>
<style>body:before{content:"";display:block;position:fixed;left:0;top:0;width:100%;height:100%;z-index:-10;-webkit-background-size:inherit;-moz-background-size:inherit;-o-background-size:inherit;background-size:inherit}body{padding-right:0!important;margin-right:0!important;background-color:#040402;position:relative}body.modal-open{overflow:auto}#hero{margin-top:360px;margin-bottom:220px;padding-top:8px;padding-bottom:10px;background-color:#040402;border-radius:6px}*{font-family:'MenschRegular'}h1{font-size:2.5rem;padding-top:.2em}h2{color:#f36267;text-align:center;margin-top:30px;margin-bottom:30px;font-size:2.5rem}h3{color:#d8d8d8;font-family:'MenschBoldInline';margin-top:20px;margin-bottom:20px;padding-left:20px;padding-bottom:10px;font-size:2.0rem}p,li p,label{color:#d8d8d8;font-size:1.1rem;padding-bottom:10px}a,ul{color:#2ca2c6}section,footer{background-color:#040402;padding-top:40px;padding-bottom:40px;margin-top:200px}a.darken{display:inline-block;background:black;padding:0;margin-bottom:20px}a.darken span{display:none;position:relative;float:left;color:#d8d8d8}.message{top:-190px;margin-bottom:-190px;text-align:center;margin-top:20px}a.darken img{display:block;-webkit-transition:all .5s linear;-moz-transition:all .5s linear;-ms-transition:all .5s linear;-o-transition:all .5s linear;transition:all .5s linear}a.darken:hover img{opacity:.4}button img{width:30px;padding-top:-10px}.navbar{background-color:#040402}.navbar-brand{font-size:1.5rem}.top{padding-bottom:30px}.h1-white{color:#d8d8d8;font-family:'MenschBoldInline'}.h1-red{color:#f36267;display:inline;font-family:'MenschBoldInline'}.portfolio-link{font-size:1.4em}.indent{text-indent:25px}.h3-blue{color:#2ca2c6;padding-bottom:24px}.btn-outline{border-color:#2ca2c6;color:#2ca2c6;background-color:#040402}.social{margin-bottom:20px}.clientz{list-style-type:none;margin-left:-38px}.clientz li p{font-size:1.5em}iframe{width:100%;height:166;border:0}.cite{font-style:italic}.TGB{margin-left:30px}.matt{margin-left:58px}.RMB{margin-left:42px}.TDH{margin-left:16px}.acro{margin-top:55px}.ACR{margin-left:52px}footer img{max-width:120px}</style>
</head>
<body data-spy=scroll>
<nav class="navbar navbar-fixed-top bg-faded">
<a class=navbar-brand href=#top>
SPECK SOUND
</a>
<div class=pull-md-right>
<div class="text-xs-center container-fluid">
<button class="navbar-toggler hidden-md-up pull-xs-right" type=button data-toggle=collapse data-target=#collapseNavbar>
<img class=img-fluid src=http://specksound.com/hamburg_speck.jpg alt="Menu Button" />
</button>
</div>
<div class="collapse navbar-toggleable-sm text-xs-center" id=collapseNavbar>
<ul class="nav navbar-nav hidden-md-up">
<li class=nav-item>
<a class=nav-link href=#portfolio data-toggle=collapse data-target=#collapseNavbar>Portfolio</a>
</li>
<li class=nav-item>
<a class=nav-link href=#about data-toggle=collapse data-target=#collapseNavbar>About</a>
</li>
<li class=nav-item>
<a class=nav-link href=#mixing data-toggle=collapse data-target=#collapseNavbar>Mixing</a>
</li>
<li class=nav-item>
<a class=nav-link href=#audio data-toggle=collapse data-target=#collapseNavbar>Audio Engineering</a>
</li>
<li class=nav-item>
<a class=nav-link href=#clients data-toggle=collapse data-target=#collapseNavbar>Clients</a>
</li>
<li class=nav-item>
<a class=nav-link href=#credits data-toggle=collapse data-target=#collapseNavbar>Credits</a>
</li>
<li class=nav-item>
<a class=nav-link href=#contact data-toggle=collapse data-target=#collapseNavbar>Contact</a>
</li>
</ul>
<ul class="nav navbar-nav hidden-sm-down">
<li class=nav-item>
<a class=nav-link href=#portfolio>Portfolio</a>
</li>
<li class=nav-item>
<a class=nav-link href=#about>About</a>
</li>
<li class=nav-item>
<a class=nav-link href=#mixing>Mixing</a>
</li>
<li class=nav-item>
<a class=nav-link href=#audio>Audio Engineering</a>
</li>
<li class=nav-item>
<a class=nav-link href=#clients>Clients</a>
</li>
<li class=nav-item>
<a class=nav-link href=#credits>Credits</a>
</li>
<li class=nav-item>
<a class=nav-link href=#contact>Contact</a>
</li>
</ul>
</div>
</div>
</nav>
<div>
<div id=top class=container>
<div id=hero class=col-xs-12>
<h1 class="text-xs-center h1-white">ALEC <span class=h1-red>SPECK</span>ENBACH</h1>
</div>
</div>
<section class=container id=portfolio>
<h2>Work Portfolio</h2>
<div class=container>
<div class="container text-xs-center">
<div class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-xl-1'>
<a href=https://soundcloud.com/nick-ross-pimentel/sets/passage-by-the-goddamn-band target=_blank class="darken portfolio-link">
Engineering
<img class=img-fluid src=http://specksound.com/passa.jpg alt="Passage (2016) The Goddamn Band Album Art" width=200 height=200>
</a>
</div>
<div class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2'>
<a href=https://matttakiff.bandcamp.com/album/matt-takiff target=_blank class="darken portfolio-link">
Mixing
<img class=img-fluid src=http://specksound.com/matt_tar.jpg alt="Matt Takiff (2016) by Matt Takiff Album Art" width=200 height=200>
</a>
</div>
<div class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2'>
<a href=https://soundcloud.com/speck_ex/gone-without-it-demo target=_blank class="darken portfolio-link">
Original
<img class=img-fluid src=http://specksound.com/goneWith.JPG alt="Gone Without It (Demo) by Alec Speckenbach" width=200 height=200>
</a>
</div>
<div class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2'>
<a href=https://soundcloud.com/magicreedandtheriptides/id-rather-go-blind target=_blank class="darken portfolio-link">
Live Mix
<img class=img-fluid src=http://specksound.com/ratherGo.JPG alt="I'd Rather Go Blind by Magic Reed & the Riptides" width=200 height=200>
</a>
</div>
<div class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2'>
<a href=https://www.fandor.com/films/a_bridge_to_a_border target=_blank class="darken portfolio-link">
Film Audio
<img class=img-fluid src=http://specksound.com/aBridge.jpg alt="A Bridge to a Border (2014)" width=200 height=200>
</a>
</div>
</div>
</div>
</section>
<section class=container id=about>
<h2>About</h2>
<div class=container>
<div class="col-xs-12 col-sm-10 offset-sm-1">
<p class=indent>
SpeckSound is the business of Alec Speckenbach, recording, mixing engineer, and music producer. Since getting his start in production at age 15, Alec has applied himself in all areas of the sound industry.
</p>
<p class=indent>
He has a wide range of experience, from recording, mixing, and producing his own albums in his basement to mixing post-production sound for award winning filmmakers like Rob Nilsson. Hes worked FOH at major concert venue Revolution Hall on occasion and
even built a studio from scratch with a colleague.
</p>
<h3 class="text-xs-center col-xs-10 offset-xs-1 h3-blue">
Take your sound to the next level
</h3>
<p class=indent>
Throughout 2016, Alec worked out of Cloud City Sound and Room 13 in Portland, OR, alongside and under engineers like Justin Phelps, Jordan Richter, and Billy Anderson. Here he honed his skills and resume, taking on projects of varying musical and non-musical
genres.
</p>
<p class=indent>
Since the start of 2017, Alec has resided in Brooklyn, NY, pursuing podcast, theater, and musical opportunities. He???ll gladly lend his knowledge and abilities to your next project. All you have to do is ask, are you ready to take your sound to the next
level?
</p>
<br>
<div class=container>
<a href=#contact>
<div class="btn btn-outline pull-xs-right">
Let???s get started!
</div>
</a>
</div>
</div>
</div>
<br>
</section>
<section class=container id=mixing>
<h2>Mixing</h2>
<div class=container>
<div class="col-xs-12 col-sm-10 offset-sm-1">
<ul>
<li>
<p>
$20/hour (Usually 4 to 5 hours per track)
</p>
</li>
</ul>
<p>
Interested in a larger project? (Albums, EPs, Mixtapes, etc.) <a href=#contact>Contact me</a> for negotiable rates
</p>
</div>
</div>
</section>
<section class=container id=audio>
<h2>Audio Engineering</h2>
<div class=container>
<div class="col-xs-12 col-sm-10 offset-sm-1">
<p>
I work from <a href=http://www.kks.nyc/ target=_blank>King Killer Studios</a> in Brooklyn, NY
</p>
<p>
Recording rates are typically $150/day but vary from project to project and can be negotiated <a href=#contact>personally</a>.
</p>
</div>
</div>
</section>
<section class="container text-xs-center" id=contact>
<h2>Contact</h2>
<div class=container>
<div class="col-xs-12 col-sm-10 offset-sm-1">
<div class=text-xs-center>
<br>
<div class=container>
<a class="col-xs-12 col-sm-6 col-md-3 social" href=https://www.facebook.com/alec.speckenbach target=_blank>
<div class="btn btn-outline">
Facebook
</div>
</a>
<a class="col-xs-12 col-sm-6 col-md-3 social" href=https://instagram.com/alecspeck/ target=_blank>
<div class="btn btn-outline">
Instagram
</div>
</a>
<a class="col-xs-12 col-sm-6 col-md-3 social" href=https://twitter.com/SpeckBeats target=_blank>
<div class="btn btn-outline">
Twitter
</div>
</a>
<a class="col-xs-12 col-sm-6 col-md-3 social" href=https://soundcloud.com/speck_ex target=_blank>
<div class="btn btn-outline">
Soundcloud
</div>
</a>
</div>
<br>
<h3>
Reach me on social media or contact me directly.
</h3>
</div>
<br>
<br>
<div class=container>
<form method=post>
<div class="form-group row">
<label class="col-xs-3 offset-md-2 col-lg-1 offset-lg-3 col-form-label">Name</label>
<div class="col-xs-9 col-md-5">
<input class=form-control type=text placeholder="John Doe" name=myName>
</div>
</div>
<div class="form-group row">
<label class="col-xs-3 offset-md-2 col-lg-1 offset-lg-3 col-form-label">Email</label>
<div class="col-xs-9 col-md-5">
<input class=form-control type=email placeholder=jdoe@email.com name=email>
</div>
</div>
<div class="form-group row">
<label class="col-xs-3 offset-md-2 col-lg-1 offset-lg-3 col-form-label">Message</label>
<div class="col-xs-9 col-md-5">
<textarea class=form-control placeholder="Hi, I have an album to be mixed..." name=message rows=5></textarea>
</div>
</div>
<p>Page will refresh on sumbission.</p>
<button type=submit name=submit class="btn btn-outline" value=submit>Submit</button>
</form>
</div>
</div>
</div>
</section>
<section class=container id=clients>
<h2>Clients</h2>
<div class=container>
<ul class="text-xs-center clientz">
<li class="col-xs-12 col-md-6">
<p>
Matt Takiff
</p>
</li>
<li class="col-xs-12 col-md-6">
<p>
Ryan Mcbride
</p>
</li>
<li class="col-xs-12 col-md-6">
<p>
Momo and the Coup
</p>
</li>
<li class="col-xs-12 col-md-6">
<p>
The Dancing Hats
</p>
</li>
<li class="col-xs-12 col-md-6">
<p>
Stretch
</p>
</li>
<li class="col-xs-12 col-md-6">
<p>
Purple After Party
</p>
</li>
<li class="col-xs-12 col-md-6">
<p>
Kush Caffrey
</p>
</li>
<li class="col-xs-12 col-md-6">
<p>
Fuego
</p>
</li>
<li class="col-xs-12 col-md-6">
<p>
TRE X
</p>
</li>
<li class="col-xs-12 col-md-6">
<p>
Dan Kerman
</p>
</li>
</ul>
</div>
</section>
<section class=container id=credits>
<h2>Credits</h2>
<h3 class="col-xs-12 col-sm-10 offset-sm-1">Studio</h3>
<div class=container>
<div class="container text-xs-center">
<div class='col-xs-12 col-md-6 col-lg-4'>
<a href=https://thegoddamnband.bandcamp.com/ target=_blank class=darken>
<img class=img-fluid src=http://specksound.com/passa.jpg alt="Passage (2016) The Goddamn Band Album Art" width=200 height=200>
<span class="message TGB">
<cite>Passage</cite>
<br>
<strong>The Goddamn Band</strong>
<br>
2016
<br>
Engineered
<br>
+ Mixed
</span>
</a>
</div>
<div class='col-xs-12 col-md-6 col-lg-4'>
<a href=https://matttakiff.bandcamp.com/album/matt-takiff target=_blank class=darken>
<img class=img-fluid src=http://specksound.com/matt_tar.jpg alt="Matt Takiff (2016) by Matt Takiff Album Art" width=200 height=200>
<span class="message matt">
<cite>Matt Takiff</cite>
<br>
<strong>Matt Takiff</strong>
<br>
2016
<br>
Engineered
<br>+ Mixed
</span>
</a>
</div>
<div class='col-xs-12 col-md-6 col-lg-4'>
<a href=https://soundcloud.com/mcbry-1/sets/ryan-mcbride-ep-fall-down-to target=_blank class=darken>
<img class=img-fluid src=http://specksound.com/ryanmc.jpg alt="Ryan McBride EP (2015) by Ryan McBride" width=200 height=200>
<span class="message RMB">
<cite>Ryan McBride EP</cite>
<br>
<strong>Ryan McBride</strong>
<br>
2015
<br>
Engineered <br>
+ Mixed
</span>
</a>
</div>
<div class='col-xs-12 col-md-6 col-lg-4'>
<a href=https://thegoddamnband.bandcamp.com/album/the-goddamn-band-album target=_blank class=darken>
<img class=img-fluid src=http://specksound.com/gdb1.jpg alt="The Goddamn Band Album (I) (2014) by The Goddamn Band Album Art" width=200 height=200>
<span class="message TGB">
<cite>The Goddamn <br> Band Album (I)</cite>
<br>
<strong>The Goddamn Band</strong>
<br>
2014
<br>
Engineered
</span>
</a>
</div>
<div class='col-xs-12 col-md-6 col-lg-4 container'>
<a href=https://thedancinghats.bandcamp.com/ target=_blank class=darken>
<img class=img-fluid src=http://specksound.com/we_are.jpg alt="We Are All Still Friends (2013) by The Dancing Hats Album Art" width=200 height=200>
<span class="message TDH">
<cite>We Are All Still Friends</cite>
<br>
<strong>The Dancing Hats</strong>
<br>
2013
<br>
Engineered
</span>
</a>
</div>
<div class='col-xs-12 col-md-6 col-lg-4 acro'>
<a href=https://theacronyms.bandcamp.com/ target=_blank class=darken>
<img class=img-fluid src=http://specksound.com/acro.jpg alt="Acrorhythm (2013) by The Acronyms Album Art" width=200 height=200>
<span class="message ACR">
<cite>Acrorhythm</cite>
<br>
<strong>The Acronyms</strong>
<br>
2013
<br>
Engineered,<br>Mastered,<br>+ Mixed
</span>
</a>
</div>
</div>
</div>
<h3 class="col-xs-12 col-sm-10 offset-sm-1">Live at <a href=http://www.revolutionhall.com/ target=_blank>Revolution Hall</a></h3>
<div class="col-xs-12 col-sm-10 offset-sm-1">
<ul>
<li>
<p>
<a href=http://noelfielding.co.uk/ target=_blank>Noel Fielding</a> (2016) Assistant Engineer
</p>
</li>
<li>
<p>
<a href=http://matrandol.com/ target=_blank>Mat Randol</a> (2016) Engineer
</p>
</li>
</ul>
</div>
<h3 class="col-xs-12 col-sm-10 offset-sm-1">Live at <a href=https://college.lclark.edu/student_life/klc_radio/ target=_blank>KLC Radio</a></h3>
<div class="col-xs-12 col-sm-10 offset-sm-1">
<ul>
<li>
<p>
<a href=https://soundcloud.com/klcstudios/gabe-barnett-them-rounders-in-studio-3515 target=_blank>Gabe Barnett + Them Rounders</a> (2015) Engineered
</p>
</li>
<li>
<p>
<a href=https://soundcloud.com/klcstudios/moonshiner-in-studio-3515 target=_blank>Moon Shiner</a> (2015) Engineered
</p>
</li>
<li>
<p>
<a href=https://soundcloud.com/klcstudios/iris-shanks-live-10-18-13 target=_blank>Iris Shanks</a> (2013) Engineered
</p>
</li>
<li>
<p>
<a href=https://soundcloud.com/klcstudios/matt-heller-live-10-4-13 target=_blank>Matthew Heller</a> (2013) Engineered
</p>
</li>
</ul>
</div>
<h3 class="col-xs-12 col-sm-10 offset-sm-1">Film</h3>
<br>
<div class="col-xs-12 col-sm-10 offset-sm-1">
<ul>
<li>
<p>
<a href=http://www.imdb.com/title/tt3252020/ target=_blank><cite>A Bridge to A Boarder (2014)</cite></a> for the <a href=http://www.mvff.com/ target=_blank>Mill Valley Film Festival</a> Sound Design + Sound Editor
</p>
</li>
<li>
<p>
<a href=http://www.imdb.com/title/tt3017382/ target=_blank><cite>A Leap to Take (2013)</cite></a> for the <a href=http://www.moscowfilmfestival.ru/miff38/eng/ target=_blank>Moscow International Film Festival</a> Sound
Editor + Mixed
</p>
</li>
<li>
<p>
<a href=http://www.imdb.com/title/tt3179218/ target=_blank><cite>Collapse (2013)</cite></a> for the <a href=http://fccvarna.bg/love-is-folly target=_blank>Love is Folly Film Festival</a> + <a href=http://www.mvff.com/ target=_blank>Mill Valley Film Festival</a> Sound Editor + Mixed
</p>
</li>
</ul>
</div>
</section>
</div>
<footer class="text-xs-center container-fluid">
<img class=center-block src=http://specksound.com/SpecSpeaker.jpg alt="Speck Audio Speaker" />
<br>
<br>
<p>
&copy; 2017 <a href=#top>TOP</a>
</p>
<br>
<br>
</footer>
<script src=https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js integrity=sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY crossorigin=anonymous></script>
<script src=https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js integrity=sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB crossorigin=anonymous></script>
<script src=https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js integrity=sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD crossorigin=anonymous></script>
<script>$(document).ready(function(){$(document).on("click","a",function(a){$("html, body").animate({scrollTop:$($.attr(this,"href")).offset().top-100},500)})});$(".darken").hover(function(){$(this).find(".message").fadeIn(1000)},function(){$(this).find(".message").fadeOut(1000)});</script>
<script>(function(h,f,k,d,g,b,j){h[k]=h[k]||function(){(h[k].q=h[k].q||[]).push(arguments)};b=f.createElement(d);j=f.getElementsByTagName(d)[0];b.async=true;b.src=g;j.parentNode.insertBefore(b,j)})(window,document,"galite","script","https://cdn.jsdelivr.net/npm/ga-lite@2/dist/ga-lite.min.js");galite("create","UA-103028352-1","auto");galite("send","pageview");</script>
</body>
</html>