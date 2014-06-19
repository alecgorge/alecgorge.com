<!doctype html>
<html>
	<head>
		<title>Brebeuf Edline for iPhone, iPod Touch and iPad</title>
		<link type="text/css" rel="stylesheet" href="http://twitter.github.io/bootstrap/assets/css/bootstrap.css" />
		<style>
			body {
				
			}

			.maroon-gradient {
				background: #561d1d; /* Old browsers */
				/* IE9 SVG, needs conditional override of 'filter' to 'none' */
				background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzU2MWQxZCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM0NDFjMTkiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
				background: -moz-linear-gradient(top,  #561d1d 0%, #441c19 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#561d1d), color-stop(100%,#441c19)); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(top,  #561d1d 0%,#441c19 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(top,  #561d1d 0%,#441c19 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(top,  #561d1d 0%,#441c19 100%); /* IE10+ */
				background: linear-gradient(top,  #561d1d 0%,#441c19 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#561d1d', endColorstr='#441c19',GradientType=0 ); /* IE6-8 */				
			}

			#header {
				padding:50px 0;
				border-radius:15px 15px 0 0;
			}

			#header h1 {
				color:#441c19;
				font-size:5.5em;
				line-height:1em;
				letter-spacing:-1px;
			}

			#header p {
				color:white;
				font-size:1.2em;
				line-height:1.6em;
				padding:25px 50px 0 0;
			}

			#wrapper {
				margin:50px auto 0;
				width:960px;
				color:#333;
			}

			#content {
				background:white;
			}

			ul.big {
				margin-left:0px;
			}

			ul.big li {
				font-size:1.5em;
				font-weight:bold;
				line-height:2em;
				color:black;
				padding-left:0px;
				list-style-position: inside;
				list-style-image: url('tick-circle.png');
			}

			.thumbnails {
				position:relative;
				width:2000px;
			}

			.thumbnails img {
				height:287px;
			}

			h2 {
				font-size: 3em;
				margin-top:40px;
				padding-bottom:20px;
			}

			h3 {
				font-size: 2em;
				margin-bottom:10px;
			}

			.market {
				float: right;
				display:block;
				margin-left:15px;
			}
		</style>
		<!--[if gte IE 9]>
			<style type="text/css">
				.gradient {
					filter: none;
				}
			</style>
		<![endif]-->
	</head>
	<body onload="setupZoom()">
		<div id="wrapper" class="container">
			<div class="row-fluid">
				<div id="header">
					<a href="http://market.android.com/details?id=com.alecgorge.android.brebeufedline" class="market"><img src="http://www.android.com/images/brand/60_avail_market_logo1.png" alt="Available in Android Market" /></a>
					<a href="http://itunes.apple.com/us/app/brebeuf-edline/id501559510" class="market"><img src="appstore.png" alt="Available on the App Store" /></a>
					<h1>Brebeuf Edline</h1>
				</div>
				<div id="content">
					<ul class="big">
						<li class="free">FREE</li>
						<li>See classes, calendar items and contents from the sidebar</li>
						<li>Open Word documents, PowerPoints and PDFs</li>
						<li>Check your grades</li>
						<li>Never enter your password again</li>
					</ul>
					<h2>Screenshots</h2>
					<h3>iPhone</h3>
					<ul class="thumbnails">
					<?php foreach(glob('Screenshots/*.png') as $v) {
						$img = "Screenshots/". basename($v);
					 ?>
						<li class="">
							<a href="<?php echo $img; ?>" class="thumbnail">
								<img src="<?php echo $img; ?>" alt="" height="287">
							</a>
						</li>
					 <?php } ?>
					</ul>
					<h3>iPad</h3>
					<ul class="thumbnails">
					<?php foreach(glob('Screenshots/iPad/*.png') as $v) {
						$img = "Screenshots/iPad/". basename($v);
					 ?>
						<li class="">
							<a href="<?php echo $img; ?>" class="thumbnail">
								<img src="<?php echo $img; ?>" alt="" height="287">
							</a>
						</li>
					 <?php } ?>
					</ul>
					<h3>Android</h3>
					<ul class="thumbnails">
					<?php foreach(glob('Screenshots/Android/*.png') as $v) {
						$img = "Screenshots/Android/". basename($v);
					 ?>
						<li class="">
							<a href="<?php echo $img; ?>" class="thumbnail">
								<img src="<?php echo $img; ?>" alt="" height="287">
							</a>
						</li>
					 <?php } ?>
					</ul>
					<h2 id="support">Support</h2>
					<p>Questions? Comments? Concerns? Other? Send an email to: <script type="text/javascript">
						//<![CDATA[
						<!--
						var x='function f(x){var i,o="",l=x.length;for(i=0;i<l;i+=2) {if(i+1<l)o+=x.charAt(i+1);try{o+=x.charAt(i);}catch(e){}}return o;}f("ufcnitnof x({)av r,i=o\\"\\"o,=l.xelgnhtl,o=;lhwli(e.xhcraoCedtAl(1/)3=!68{)rt{y+xx=l;=+;lc}tahce({)}}of(r=i-l;1>i0=i;--{)+ox=c.ahAr(t)i};erutnro s.buts(r,0lo;)f}\\"(2),3\\"\\\\~tevtig(+{\'*.m!(YRL}[K\\\\\\\\\\\\\\\\^VQZ0Q03\\\\\\\\VW@BNIGI7K02\\\\\\\\\\\\n{\\\\04\\\\0y\\\\31\\\\0F\\\\UNkI?>k@Xjr8|xwx1Wzvokyi4Hd|ocvf>q1m02\\\\\\\\36\\\\0R\\\\27\\\\03\\\\02\\\\\\\\30\\\\05\\\\02\\\\\\\\20\\\\06\\\\05\\\\04\\\\00\\\\\\\\22\\\\07\\\\02\\\\\\\\37\\\\01\\\\03\\\\\\\\03\\\\0n\\\\\\\\\\\\10\\\\0G\\\\16\\\\0r\\\\\\\\\\\\33\\\\07\\\\00\\\\\\\\00\\\\05\\\\00\\\\\\\\00\\\\00\\\\01\\\\\\\\02\\\\0X\\\\16\\\\04\\\\02\\\\\\\\434:tu\\\\\\\\7n?*i#y&iaQQM^G^7D03\\\\\\\\C[DNFREL\\"\\\\f(;} ornture;}))++(y)^(iAtdeCoarchx.e(odrChamCro.fngriSt+=;o27=1y%+;y+2)<3(iif){++;i<l;i=0(ior;fthnglex.l=\\\\,\\\\\\"=\\",o iar{vy)x,f(n ioctun\\"f)")';while(x=eval(x));
						while(x=eval(x));
						//-->
						//]]>
						</script>
					</p>
					<p>&nbsp;</p>
					<p>This app is not affiliated with Brebeuf Jesuit Preparatory School, Edline or Blackboard Inc.</p>
					<p>Copyright &copy; 2012 Ramblingwood and Alec Gorge</p>
				</div>
			</div>
		</div>
		<script src="js-global/FancyZoom.js" type="text/javascript"></script>
		<script src="js-global/FancyZoomHTML.js" type="text/javascript"></script>
	</body>
</html>