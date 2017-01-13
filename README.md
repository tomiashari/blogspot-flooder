# blogspot-flooder
PHP Script for Flooding Blogspot Traffic Stats

#
<pre>
require_once('lib/flood.php');

$url = 'tomi-xxx.blogspot.co.id'; // url to flood
$hits = '5'; // total hits

$flood = new Flood();
$flood->send_flood($url, $hits);
</pre>

# cli usage
<pre>
root@tomi:~# php send.php
Sucessfully send hits to tomi-xxx.blogspot.co.id from refferer site: www.javhd.com
Sucessfully send hits to tomi-xxx.blogspot.co.id from refferer site: www.redtube.com
Sucessfully send hits to tomi-xxx.blogspot.co.id from refferer site: www.javhd.com
Sucessfully send hits to tomi-xxx.blogspot.co.id from refferer site: www.brazzers.com
Sucessfully send hits to tomi-xxx.blogspot.co.id from refferer site: www.redtube.com
done.
</pre>
