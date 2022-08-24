// Wind Direction (wd), Average Wind Speed (a_ws), Max Wind Speed (m_ws), 1hr Rainfall (1_rf), 24hr Rainfall (24_rf), Temperature (tem), Humidity (hum), Barometric Pressure (b_pr).
$variables_from_module;
if(isset($_GET['wd']) && isset($_GET['a_ws']) && isset($_GET['m_ws']) && isset($_GET['1_rf']) && isset($_GET['24_rf']) && isset($_GET['tem']) && isset($_GET['hum']) && isset($_GET['b_pr'])){
	$variables_from_module = [
	  "wd" => (int)$_GET['wd'],
	  "a_ws" => (float)$_GET['a_ws'],
	  "m_ws" => (float)$_GET['m_ws'],
	  "1_rf" => (float)$_GET['1_rf'],
	  "24_rf" => (float)$_GET['24_rf'],
	  "tem" => (float)$_GET['tem'],
	  "hum" => (int)$_GET['hum'],
	  "b_pr" => (float)$_GET['b_pr']
    ];
}else{
    $variables_from_module = [
	  "wd" => "err",
	  "a_ws" => "err",
	  "m_ws" => "err",
	  "1_rf" => "err",
	  "24_rf" => "err",
	  "tem" => "err",
	  "hum" => "err",
	  "b_pr" => "err"
    ];
}
