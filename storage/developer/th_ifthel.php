<h3>If, then, else</h3>
<p>You can use if/then/else statements in theme headers and footers.  While they are quite limited, they are useful in some situations. We'll be working on making it better</p>
<p>The syntax for this is <code><pre>{{IF;variable1;variable2;file;}}</pre></code>. This checks if <i>variable1</i> exuals <i>variable2</i> and if yes, includes <i>file</i>.</p>
<p>For instance, if you want to check if the page title is <i>Fresh from the bakery</i> and include <i>template/myTemplate/new-header.php</i>, use <code><pre>{{IF;pagetitle;Fresh from the bakery;template/myTemplate/new-header.php;}}</pre></code>.</p>
