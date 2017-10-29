<?php
	$title = 'Proizvodi';
	$keywords = 'Proizvodi';
	$description = 'Proizvodi';
	include '../include/header.php';
?>

<div class="main-content">

	<div class="row bread-crumbs">
	  <div class="wrapper">
	    <ul>
	      <li><a href="home.php">Početna</a></li>
	      <li><a href="proizvodi.php">Naziv kategorije</a></li>
	      <li>Naziv proizvoda</li>
	    </ul>
	  </div><!-- end of .wrapper -->
	</div><!-- end of .bread-crumbs -->

	<div class="row">
	  <div class="wrapper">
	    <div class="content text-area fw">
	      <h1>Naziv proizvoda</h1>
	      <div class="section group">
	        <div class="col col_4 desc-img gallery">
	          <a href="../images/content-images/p1.png">
	            <span class="zoom"><img src="../images/zoom.svg" alt=""></span>
	            <img src="http://www.server.com/CS/lib/plugins/thumb.php?src=http://www.server.com/CS/images/content-images/p1.png&w=480&h=480&zc=2" alt="">
	          </a>
	        </div><!-- end of .desc-img -->
	        <div class="col col_8 desc-txt">
	          <div class="koristenje fw">
	            <ul>
	              <li><img src="../images/kist.svg" alt=""></li>
	              <li><img src="../images/valjak.svg" alt=""></li>
	              <li><img src="../images/zracnipistolj.svg" alt=""></li>
	            </ul>
	          </div><!-- end of .koristenje -->
	          <h2>HOS (EU VOC)</h2>
	          <p>KEMOLUX ventilirajuća osnovna boja je zračno sušivi alkidni premaz koji omogućuje sušenje (ventiliranje) drva, a sprječava da drvo upija kondenzacijsku ili oborinsku vlagu.</p>
	          <h2>Primjena</h2>
	          <p>Koristi se kao temeljni premaz ili međupremaz u sustavu s KEMOLUX emajl lakovima za zaštitu građevne stolarije i drugih predmeta od drva. Nanosi se kistom, valjkom ili prskanjem s razmakom između pojedinih slojeva od najmanje 16 sati.</p>
	          <h2>Izdašnost</h2>
	          <p>10 - 12 m<sup>2</sup>/l</p>
	          <h2>Asortiman</h2>
	          <div class="boje fw">
	            <ul>
	              <li>
	                <span class="ton-boje" style="background:#CA252B;"></span>
	                <div class="clearfix"></div>
	                <span><strong>T201</strong> crveni</span>
	              </li>
	              <li>
	                <span class="ton-boje" style="background:#949599;"></span>
	                <div class="clearfix"></div>
	                <span><strong>T202</strong> sivi</span>
	              </li>
	            </ul>
	          </div><!-- end of .boje -->
	          <p>* Ton karta je informativnog karaktera</p>
	          <h2>Razrjeđivač</h2>
	          <p>Sintetični razrjeđivač.</p>
	          <h2>Pakiranje</h2>
	          <p>0,75 l / 2,5 l / 18 l</p>
	          <h2>Tehničke karakteristike</h2>
	          <div class="docs-list fw">
	            <ul>
	              <li><a href="../images/content-images/test-dokument.pdf" target="_blank" >Document 1</a></li>
	              <li><a href="../images/content-images/test-dokument.pdf" target="_blank" >Document 2</a></li>
	              <li><a href="../images/content-images/test-dokument.pdf" target="_blank" >Document 3</a></li>
	            </ul>
	          </div><!-- end of .docs-list -->
	          <div class="tag-list fw mt20">
	            <ul>
	              <li><a href="javascript:;">drvo</a></li>
	              <li><a href="javascript:;">kemolux</a></li>
	              <li><a href="javascript:;">osnovna boja</a></li>
	              <li><a href="javascript:;">temeljni premaz</a></li>
	            </ul>
	          </div><!-- end of .docs-list -->
	        </div><!-- end of .desc-txt -->
	      </div><!-- end of .section -->
	    </div><!-- end of .content -->
	  </div><!-- end of .wrapper -->
	</div><!-- end of .row -->

</div><!-- end of .main-content -->

<?php include '../include/footer.php';?>
