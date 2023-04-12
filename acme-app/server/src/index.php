<?PHP
    include_once("database-interface.php");

    $ds = new datastore($_ENV['DATABASE_HOST'], "acme", "acme", "acme");
    $ds->init();

    $ds->insert("Hello!");

// echo "Hello ".$_ENV['TEST'];

echo "<pre>";
echo "CLUSTER_NAME: " . $_ENV['CLUSTER_NAME'] ."\n";
echo "CONTAINER_IMAGE: " . $_ENV['CONTAINER_IMAGE'] ."\n";
echo "POD_NAMESPACE: " . $_ENV['POD_NAMESPACE'] ."\n";
echo "POD_IP: " . $_ENV['POD_IP'] ."\n";
echo "NODE_NAME: " . $_ENV['NODE_NAME'] ."\n";
echo "</pre>";

?>