<?

// PHP file to simulate database updates
// Used in Titanium database tutorial 2j

error_reporting(0);

// These keys are compiled into the mobile app
$valid_keys = array('gt8DSk44w');

// Grab the GET arguments
$auth = @$_GET["auth"];

// Check app key
$authorized = 0;
foreach ($valid_keys as $key) {
	$check = ($key);
	if ($check == $auth) {
		$authorized = 1;
	}
}
// If not authorized, then return empty object
if (!$authorized) {
	$items_array = array();
	$return_object = array();
	$return_object["items"] = $items_array;
	echo json_encode($return_object);
	exit;
}

// an array of possible shapes
$shapes = array();
$shapes[0] = array(	"id" => "11",	"catid" => "2",	"name" => "Pentagon",	"desc" => "A pentagon has <b>five</b> sides." );
$shapes[1] = array(	"id" => "11",	"catid" => "2",	"name" => "Oval",	"desc" => "Squishing a circle turns it into an <span style='color:green'>oval</span>." );
$shapes[2] = array(	"id" => "11",	"catid" => "2",	"name" => "Cone",	"desc" => "Cones are good for holding <b>ice cream</b>." );
$shapes[3] = array(	"id" => "11",	"catid" => "2",	"name" => "Cube",	"desc" => "Rubik made a <i>famous game</i> with a cube." );	
$shapes[4] = array(	"id" => "11",	"catid" => "2",	"name" => "Sphere",	"desc" => "<span style='color:blue'>Earth</span> is not a perfect sphere." );

// an array of possible colors
$colors = array();
$colors[0] = array( "id" => "12",	"catid" => "3",	"name" => "Yellow",	"desc" => "If a <b>banana</b> isn't yellow, don't eat it." );
$colors[1] = array( "id" => "12",	"catid" => "3",	"name" => "Orange",	"desc" => "<span style='color:orange'>Orange</span> you glad I didn't say banana" );
$colors[2] = array(	"id" => "12",	"catid" => "3",	"name" => "Black",	"desc" => "Paint it <b>black</b>." );
$colors[3] = array(	"id" => "12",	"catid" => "3",	"name" => "White",	"desc" => "As white as the <i>fallen snow</i>." );	
$colors[4] = array(	"id" => "12",	"catid" => "3",	"name" => "Brown",	"desc" => "<span style='color:brown'>Brown</span> is so unassuming." );	

// choose a random index
$i = rand(1, count($shapes)) - 1;

// fill the two random items into a new array
$items_array = array();
$items_array[0] = $shapes[$i];
$items_array[1] = $colors[$i];

// return the JSON
$return_object = array();
$return_object["items"] = $items_array;
echo json_encode($return_object);
echo json_encode($colors[0]);
exit;

?>
