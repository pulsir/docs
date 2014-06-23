<h2>Requirements for installing Pulsir locally</h2>
<p>You'll probably need:<br>
<ul>
<li>a computer running a webserver with PHP</li>
<li>a MySQL server and database</li>
<li>some time, and in semi-rare cases, Vicodin</li>
<li>knowledge (at least a-bit-above-basic) of how PHP and MySQL work, and how to find your way around a PHP project. Without this, don't even try to self-host Pulsir. Please.</li>
</ul>

<h2>Configuring basic things</h2>
<p>First of all, edit the <b>preferences.php</b> and change the <code>$domainroot = 'http://area51.pulsir.eu/';</code> line, making the value the URL to the base of the Pulsir installation <!-- does this sentence even make sense wtf someone please rewrite this -->. You can leave the active theme as whitey or change it to your own theme.</p>
<p>When you've got that ready, change the database preferences in <b>boot.php</b>:
<code>$obj->host = 'localhost';<br>
$obj->username = 'justin';<br>
$obj->password = 'iloveyou';<br>
$obj->db = 'bieberbase';</code><br><br>In the horrible example above, the MySQL server is <b>localhost</b>, the username is <b>justin</b>, the password is <b>iloveyou</b>, and the database is <b>bieberbase</b>.</p>

<h2>Database and other things</h2>
<p>When that's done, you need to import the database layout from <b>database.sql</b> and your Pulsir should basically be running. Set up an account for yourself, and change its' group in the database to <b>admins</b>.</p>
<p>Basically, this is it. Your Pulsir instance should be up and running.</p>
