<div class="container-fluid cf-content">
	
		<div class="container">
			<?php 
			if(isset($_GET['view'])) {
				 $tamt=$_GET['view'];
			}else{
				 $tamt='';
			}if($tamt=='xemphim'){
				 include('modules/mid/mid.php');
			}elseif ($tamt=='xemtrailer') {
				 include('modules/mid/trailer.php');
			}
			elseif($tamt=='dieukhoan'){
				include('modules/mid/dieukhoan.php');
			}
			elseif($tamt=='lienhe'){
				include('modules/mid/lienhe.php');
			}
			elseif($tamt=='hoidap'){
				include('modules/mid/hoidap.php');
			}
			else
			{
				if(isset($_GET['xem'])){
					 $tam=$_GET['xem'];
				}else{
					 $tam='';
				}if($tam=='phimkinhdi'){
					 include('modules/left/phimkinhdi.php');
				}elseif($tam=='phimle'){
					 include('modules/left/phimle.php');
				}elseif($tam=='anime'){
					 include('modules/left/anime.php');
				}elseif($tam=='phimbo'){
					 include('modules/left/phimbo.php');
				}elseif($tam=='hoathinh'){
					 include('modules/left/hoathinh.php');
				}elseif($tam=='tvshow'){
					 include('modules/left/tvshow.php');
				}elseif($tam=='pagephim'){
					 include('modules/left/pagephim.php');
				}elseif($tam=='thongtinphim'){
					 include('modules/left/thongtinphim.php');
				}elseif($tam=='loaiphim'){
				     include('modules/left/loaiphim.php');
		        }elseif($tam=='thongtintrailer'){
					include('modules/left/thongtintrailer.php');
				}elseif(isset($_POST['btnsearch'])){
					include('modules/left/search.php');
				}else
				     include('modules/left/home.php');
				 include('modules/right/right.php');
		    }
		    ?>
		</div>
</div>
