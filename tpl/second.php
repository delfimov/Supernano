<h2>Second page<?=(empty($this->request[1]) ? '' : ' with additional parameters')?></h2>

<ul>
    <li><a href="/">Main page</a></li>
    <li><a href="/second">Second page</a></li>
    <li><a href="/second/param/pam/pam">Second page with additional parameters</a></li>
</ul>

<pre>$this->request = <?php print_r($this->request); ?>;</pre>
