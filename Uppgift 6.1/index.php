<?php

// Skapar och börjar connection
try{
  $mongo = New Mongo();
	$db = $mongo->test;
	$collection = $db->logs;
	;
} catch (MongoConnectionException $check){
	die ('Error msg: '. $check->getMessage());
	}
	
// Skapar array för att spara loggar
$request = array(
	'Remote_Addr' => $_SERVER['REMOTE_ADDR'],
	'Tid' => new MongoDate($_SERVER['REQUEST_TIME']),
	'Http_User_Agent' => $_SERVER['HTTP_USER_AGENT'],
	);

//Lägger array i collection 
$collection->insert($request);

$cursor = $collection->find(array(),array('Remote_Addr','Tid','Http_User_Agent')); 
$cursor->sort(array(-1));


?>
<?php while ($cursor ->hasNext()):  // Skriver ut loggarna 
				$post = $cursor->getNext(); ?>
				<?php echo $request['Remote_Addr'];?>
				<?php echo date('F j Y, g:i a',$request['Tid']->sec);?>
				<?php echo $request['Http_User_Agent'];?>
<?php endwhile; ?>