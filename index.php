<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />

<title>Generic CSS Grid | GenericTools</title>

<link rel="canonical" href="http://<?php echo $_SERVER["HTTP_HOST"]; ?><?php echo parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ); ?>" />
<link rel="stylesheet" type="text/css" href="grid.css" />

</head>

<body id="home">

<div id="wrapper" class="hfeed">

<header id="header"> 

<h1 id="site-title"><a href="./">Generic CSS Grid</a></h1>

</header>

<div id="container">

<main id="content" class="hentry">

<article class="entry-content">

<h1>This is a header one.</h1>
<pre><code>&lt;h1&gt;This is a header one.&lt;/h1&gt;</code></pre>

<h2>This is a header two.</h2>
<pre><code>&lt;h2&gt;This is a header two.&lt;/h2&gt;</code></pre>

<h3>This is a header three.</h3>
<pre><code>&lt;h3&gt;This is a header three.&lt;/h3&gt;</code></pre>

<h4>This is a header four.</h4>
<pre><code>&lt;h4&gt;This is a header four.&lt;/h4&gt;</code></pre>

<h5>This is a header five.</h5>
<pre><code>&lt;h5&gt;This is a header five.&lt;/h5&gt;</code></pre>

<h6>This is a header six.</h6>
<pre><code>&lt;h6&gt;This is a header six.&lt;/h6&gt;</code></pre>

<p>This is a sentence wrapped in paragraph tags.</p>
<pre><code>&lt;p&gt;This is a sentence wrapped in paragraph tags.&lt;/p&gt;</code></pre>

<p><a href="#">This is a link</a>.</p>
<pre><code>&lt;a href=&quot;#&quot;&gt;This is a link&lt;/a&gt;</code></pre>

<p><strong>This is bold text</strong>.</p>
<pre><code>&lt;strong&gt;This is bold text&lt;/strong&gt;</code></pre>

<p><em>This is italic text</em>.</p>
<pre><code>&lt;em&gt;italic text&lt;/em&gt;</code></pre>

<p>This is code that we want to display: <code>.blue{color:blue}</code></p>
<pre><code>&lt;pre&gt;&lt;code&gt;.blue{color:blue}&lt;/code&gt;&lt;/pre&gt;</code></pre>

<p>This is the horizontal rule:</p>
<hr />
<pre><code>&lt;hr /&gt;</code></pre>

<blockquote>This is a sentence wrapped in blockquote tags.</blockquote>
<pre><code>&lt;blockquote&gt;This is a sentence wrapped in blockquote tags.&lt;/blockquote&gt;</code></pre>

<ul>
<li>This</li>
<li>is</li>
<li>an</li>
<li>unordered</li>
<li>list.</li>
</ul>
<pre><code>&lt;ul&gt;
&lt;li&gt;This&lt;/li&gt;
&lt;li&gt;is&lt;/li&gt;
&lt;li&gt;an&lt;/li&gt;
&lt;li&gt;unordered&lt;/li&gt;
&lt;li&gt;list.&lt;/li&gt;
&lt;/ul&gt;</code></pre>

<ol>
<li>This</li>
<li>is</li>
<li>an</li>
<li>ordered</li>
<li>list.</li>
</ol>
<pre><code>&lt;ol&gt;
&lt;li&gt;This&lt;/li&gt;
&lt;li&gt;is&lt;/li&gt;
&lt;li&gt;an&lt;/li&gt;
&lt;li&gt;ordered&lt;/li&gt;
&lt;li&gt;list.&lt;/li&gt;
&lt;/ol&gt;</code></pre>

<p><input type="text" value="This is a text input." size="25" /></p>
<pre><code>&lt;input type=&quot;text&quot; value=&quot;This is a text input.&quot; size=&quot;25&quot; /&gt;</code></pre>

<p><textarea rows="5" cols="50">This is a textarea.</textarea></p>
<pre><code>&lt;textarea rows=&quot;5&quot; cols=&quot;50&quot;&gt;This is a textarea.&lt;/textarea&gt;</code></pre>

<p><input type="submit" value="This is a submit input." /></p>
<pre><code>&lt;input type=&quot;submit&quot; value=&quot;This is a submit input.&quot; /&gt;</code></pre>

<p><img src="img.jpg" alt="This is an image." /></p>
<pre><code>&lt;img src=&quot;img.jpg&quot; alt=&quot;This is an image.&quot; /&gt;</code></pre>

<p><a href="#" class="button">This is the default button.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;This is the default button.&lt;/a&gt;</code></pre>

<p><a href="#" class="button white">This is a button set to white.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button white&quot;&gt;This is a button set to white.&lt;/a&gt;</code></pre>

<p><a href="#" class="button blue-dark">This is a button set to dark blue.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button blue-dark&quot;&gt;This is a button set to dark blue.&lt;/a&gt;</code></pre>

<p><a href="#" class="button green">This is a button set to green.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button green&quot;&gt;This is a button set to green.&lt;/a&gt;</code></pre>

<p><a href="#" class="button green-dark">This is a button set to dark green.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button green-dark&quot;&gt;This is a button set to dark green.&lt;/a&gt;</code></pre>

<p><a href="#" class="button orange">This is a button set to orange.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button orange&quot;&gt;This is a button set to orange.&lt;/a&gt;</code></pre>

<p><a href="#" class="button purple">This is a button set to purple.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button purple&quot;&gt;This is a button set to purple.&lt;/a&gt;</code></pre>

<p><a href="#" class="button red">This is a button set to red.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button red&quot;&gt;This is a button set to red.&lt;/a&gt;</code></pre>

<p><a href="#" class="button yellow">This is a button set to yellow.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button yellow&quot;&gt;This is a button set to yellow.&lt;/a&gt;</code></pre>

<p><a href="#" class="button black">This is a button set to black.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button black&quot;&gt;This is a button set to black.&lt;/a&gt;</code></pre>

<span class="note yellow">This is a caution note.</span>
<pre><code>&lt;span class=&quot;note yellow&quot;&gt;This is a caution note.&lt;/span&gt;</code></pre>

<span class="note red">This is a warning note.</span>
<pre><code>&lt;span class=&quot;note red&quot;&gt;This is a warning note.&lt;/span&gt;</code></pre>

<br />

<div class="boxes">
<div class="box">This is a single-column box.</div>
</div>
<pre><code>&lt;div class=&quot;boxes&quot;&gt;
&lt;div class=&quot;box&quot;&gt;This is a single-column box.&lt;/div&gt;
&lt;/div&gt;</code></pre>

<br />

<div class="boxes">
<div class="box-2">This is a two-column box.</div>
<div class="box-2">This is a two-column box.</div>
</div>
<pre><code>&lt;div class=&quot;boxes&quot;&gt;
&lt;div class=&quot;box-2&quot;&gt;This is a two-column box.&lt;/div&gt;
&lt;div class=&quot;box-2&quot;&gt;This is a two-column box.&lt;/div&gt;
&lt;/div&gt;</code></pre>

<br />

<div class="boxes">
<div class="box-3">This is a three-column box.</div>
<div class="box-3">This is a three-column box.</div>
<div class="box-3">This is a three-column box.</div>
</div>
<pre><code>&lt;div class=&quot;boxes&quot;&gt;
&lt;div class=&quot;box-3&quot;&gt;This is a three-column box.&lt;/div&gt;
&lt;div class=&quot;box-3&quot;&gt;This is a three-column box.&lt;/div&gt;
&lt;div class=&quot;box-3&quot;&gt;This is a three-column box.&lt;/div&gt;
&lt;/div&gt;</code></pre>

<br />

<div class="boxes">
<div class="box-4">This is a four-column box.</div>
<div class="box-4">This is a four-column box.</div>
<div class="box-4">This is a four-column box.</div>
<div class="box-4">This is a four-column box.</div>
</div>
<pre><code>&lt;div class=&quot;boxes&quot;&gt;
&lt;div class=&quot;box-4&quot;&gt;This is a four-column box.&lt;/div&gt;
&lt;div class=&quot;box-4&quot;&gt;This is a four-column box.&lt;/div&gt;
&lt;div class=&quot;box-4&quot;&gt;This is a four-column box.&lt;/div&gt;
&lt;div class=&quot;box-4&quot;&gt;This is a four-column box.&lt;/div&gt;
&lt;/div&gt;</code></pre>

<br />

<div class="boxes">
<div class="box-5">This is a five-column box.</div>
<div class="box-5">This is a five-column box.</div>
<div class="box-5">This is a five-column box.</div>
<div class="box-5">This is a five-column box.</div>
<div class="box-5">This is a five-column box.</div>
</div>
<pre><code>&lt;div class=&quot;boxes&quot;&gt;
&lt;div class=&quot;box-5&quot;&gt;This is a five-column box.&lt;/div&gt;
&lt;div class=&quot;box-5&quot;&gt;This is a five-column box.&lt;/div&gt;
&lt;div class=&quot;box-5&quot;&gt;This is a five-column box.&lt;/div&gt;
&lt;div class=&quot;box-5&quot;&gt;This is a five-column box.&lt;/div&gt;
&lt;div class=&quot;box-5&quot;&gt;This is a five-column box.&lt;/div&gt;
&lt;/div&gt;</code></pre>

<br />

<div class="boxes">
<div class="box-6">This is a six-column box.</div>
<div class="box-6">This is a six-column box.</div>
<div class="box-6">This is a six-column box.</div>
<div class="box-6">This is a six-column box.</div>
<div class="box-6">This is a six-column box.</div>
<div class="box-6">This is a six-column box.</div>
</div>
<pre><code>&lt;div class=&quot;boxes&quot;&gt;
&lt;div class=&quot;box-6&quot;&gt;This is a six-column box.&lt;/div&gt;
&lt;div class=&quot;box-6&quot;&gt;This is a six-column box.&lt;/div&gt;
&lt;div class=&quot;box-6&quot;&gt;This is a six-column box.&lt;/div&gt;
&lt;div class=&quot;box-6&quot;&gt;This is a six-column box.&lt;/div&gt;
&lt;div class=&quot;box-6&quot;&gt;This is a six-column box.&lt;/div&gt;
&lt;div class=&quot;box-6&quot;&gt;This is a six-column box.&lt;/div&gt;
&lt;/div&gt;</code></pre>

<br />

<div class="boxes">
<div class="box-1-3">This is a one-thirds box.</div>
<div class="box-2-3">This is a two-thirds box.</div>
</div>
<pre><code>&lt;div class=&quot;boxes&quot;&gt;
&lt;div class=&quot;box-1-3&quot;&gt;This is a one-third box.&lt;/div&gt;
&lt;div class=&quot;box-2-3&quot;&gt;This is a two-thirds box.&lt;/div&gt;
&lt;/div&gt;</code></pre>

</article>

</main>

</div>

</div>

</body>

</html>