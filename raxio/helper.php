 <!-- date of the day when user registered -->
<?php
	function getuserdate($data) 
	{
		 $t=$data;
		 $tt=substr($t,0,7);
		 $ttt=explode('-',$tt);
		 $date=array('01'=>'Jan','02'=>'Feb','03'=>'March','04'=>'Aprl','05'=>'May','06'=>'June','07'=>'July','08'=>'Aug','09'=>'Sept','10'=>'Oct','11'=>'Nov','12'=>'Dec');
		 echo $date[$ttt[1]]." ".$ttt[0];
	 }
 ?>