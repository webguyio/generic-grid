<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width">

<title>Generic CSS Grid | GenericTools</title>

<link rel="canonical" href="https://generic.tools/grid/">
<link rel="stylesheet" href="grid.css">

<style>
.icon-demo{mask-image:url(icon.svg)}
table, .box, .box-2, .box-3, .box-4, .box-5, .box-6, .box-1-3, .box-2-3{color:#fff!important;background:var(--color-blue-light)}
</style>

</head>

<body id="demo">

<div id="wrapper">

<header id="header">

<h1><a href="./">Generic CSS Grid</a></h1>

</header>

<div id="container">

<main id="content">

<article class="entry">

<br>

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
<pre><code>&lt;em&gt;This is italic text&lt;/em&gt;</code></pre>

<p>This is code that we want to display: <code>.blue{color:blue}</code></p>
<pre><code>&lt;pre&gt;&lt;code&gt;.blue{color:blue}&lt;/code&gt;&lt;/pre&gt;</code></pre>

<p>This is the horizontal rule:</p>
<hr>
<pre><code>&lt;hr&gt;</code></pre>

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

<p><input type="text" value="This is a text input." size="25"></p>
<pre><code>&lt;input type=&quot;text&quot; value=&quot;This is a text input.&quot; size=&quot;25&quot;&gt;</code></pre>

<p><textarea rows="5" cols="50">This is a textarea.</textarea></p>
<pre><code>&lt;textarea rows=&quot;5&quot; cols=&quot;50&quot;&gt;This is a textarea.&lt;/textarea&gt;</code></pre>

<p><input type="submit" value="This is a submit input."></p>
<pre><code>&lt;input type=&quot;submit&quot; value=&quot;This is a submit input.&quot;&gt;</code></pre>

<p><img src="img.jpg" alt="This is an image."></p>
<pre><code>&lt;img src=&quot;img.jpg&quot; alt=&quot;This is an image.&quot;&gt;</code></pre>

<h2>Tables</h2>

<table class="alternating">
<thead>
<tr>
<th>Header 1</th>
<th>Header 2</th>
<th>Header 3</th>
</tr>
</thead>
<tbody>
<tr>
<td>Row 1, Cell 1</td>
<td>Row 1, Cell 2</td>
<td>Row 1, Cell 3</td>
</tr>
<tr>
<td>Row 2, Cell 1</td>
<td>Row 2, Cell 2</td>
<td>Row 2, Cell 3</td>
</tr>
<tr>
<td>Row 3, Cell 1</td>
<td>Row 3, Cell 2</td>
<td>Row 3, Cell 3</td>
</tr>
<tr>
<td>Row 4, Cell 1</td>
<td>Row 4, Cell 2</td>
<td>Row 4, Cell 3</td>
</tr>
</tbody>
</table>
<pre><code>&lt;table class=&quot;alternating&quot;&gt;
&lt;thead&gt;
&lt;tr&gt;&lt;th&gt;Header 1&lt;/th&gt;&lt;th&gt;Header 2&lt;/th&gt;&lt;th&gt;Header 3&lt;/th&gt;&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;&lt;td&gt;Cell 1&lt;/td&gt;&lt;td&gt;Cell 2&lt;/td&gt;&lt;td&gt;Cell 3&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;Cell 1&lt;/td&gt;&lt;td&gt;Cell 2&lt;/td&gt;&lt;td&gt;Cell 3&lt;/td&gt;&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;</code></pre>

<h2>Font Stacks</h2>

<p class="font-system">This uses the system font stack.</p>
<pre><code>&lt;p class=&quot;font-system&quot;&gt;This uses the system font stack.&lt;/p&gt;</code></pre>

<p class="font-sans">This uses the sans-serif font stack.</p>
<pre><code>&lt;p class=&quot;font-sans&quot;&gt;This uses the sans-serif font stack.&lt;/p&gt;</code></pre>

<p class="font-serif">This uses the serif font stack.</p>
<pre><code>&lt;p class=&quot;font-serif&quot;&gt;This uses the serif font stack.&lt;/p&gt;</code></pre>

<p class="font-mono">This uses the monospace font stack.</p>
<pre><code>&lt;p class=&quot;font-mono&quot;&gt;This uses the monospace font stack.&lt;/p&gt;</code></pre>

<p class="font-symbol">This uses the symbol font stack: ☮ ♠ ♣ ♥ ♦ ← → ↑ ↓ ★</p>
<pre><code>&lt;p class=&quot;font-symbol&quot;&gt;This uses the symbol font stack: ☮ ♠ ♣ ♥ ♦ ← → ↑ ↓ ★&lt;/p&gt;</code></pre>

<h2>Icons</h2>

<p>This is an inline SVG icon: <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 5h16"/><path d="M4 12h16"/><path d="M4 19h16"/></svg></p>
<pre><code>&lt;svg class=&quot;icon&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;&lt;path d=&quot;M4 5h16&quot;/&gt;&lt;path d=&quot;M4 12h16&quot;/&gt;&lt;path d=&quot;M4 19h16&quot;/&gt;&lt;/svg&gt;</code></pre>

<p>This is an icon loaded from a file: <i class="icon icon-demo" title="This is an icon."></i></p>
<pre><code>&lt;style&gt;.icon-demo{mask-image:url(icon.svg)}&lt;/style&gt;
&lt;i class=&quot;icon icon-demo&quot; title=&quot;This is an icon.&quot;&gt;&lt;/i&gt;</code></pre>

<h2>Buttons and Colors</h2>

<p><a href="#" class="button">This is the default button.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;This is the default button.&lt;/a&gt;</code></pre>

<p><a href="#" class="button rounded">This is a rounded button.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button rounded&quot;&gt;This is a rounded button.&lt;/a&gt;</code></pre>

<p><a href="#" class="button round">This is a round button.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button round&quot;&gt;This is a round button.&lt;/a&gt;</code></pre>

<p><a href="#" class="button circle">This is a circle button.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button circle&quot;&gt;This is a circle button.&lt;/a&gt;</code></pre>

<p><a href="#" class="button white">This is a button set to white.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button white&quot;&gt;This is a button set to white.&lt;/a&gt;</code></pre>

<p><a href="#" class="button blue">This is a button set to blue.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button blue&quot;&gt;This is a button set to blue.&lt;/a&gt;</code></pre>

<p><a href="#" class="button blue-light">This is a button set to light blue.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button blue-light&quot;&gt;This is a button set to light blue.&lt;/a&gt;</code></pre>

<p><a href="#" class="button blue-dark">This is a button set to dark blue.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button blue-dark&quot;&gt;This is a button set to dark blue.&lt;/a&gt;</code></pre>

<p><a href="#" class="button green">This is a button set to green.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button green&quot;&gt;This is a button set to green.&lt;/a&gt;</code></pre>

<p><a href="#" class="button green-light">This is a button set to light green.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button green-light&quot;&gt;This is a button set to light green.&lt;/a&gt;</code></pre>

<p><a href="#" class="button green-dark">This is a button set to dark green.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button green-dark&quot;&gt;This is a button set to dark green.&lt;/a&gt;</code></pre>

<p><a href="#" class="button orange">This is a button set to orange.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button orange&quot;&gt;This is a button set to orange.&lt;/a&gt;</code></pre>

<p><a href="#" class="button orange-light">This is a button set to light orange.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button orange-light&quot;&gt;This is a button set to light orange.&lt;/a&gt;</code></pre>

<p><a href="#" class="button orange-dark">This is a button set to dark orange.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button orange-dark&quot;&gt;This is a button set to dark orange.&lt;/a&gt;</code></pre>

<p><a href="#" class="button purple">This is a button set to purple.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button purple&quot;&gt;This is a button set to purple.&lt;/a&gt;</code></pre>

<p><a href="#" class="button purple-light">This is a button set to light purple.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button purple-light&quot;&gt;This is a button set to light purple.&lt;/a&gt;</code></pre>

<p><a href="#" class="button purple-dark">This is a button set to dark purple.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button purple-dark&quot;&gt;This is a button set to dark purple.&lt;/a&gt;</code></pre>

<p><a href="#" class="button red">This is a button set to red.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button red&quot;&gt;This is a button set to red.&lt;/a&gt;</code></pre>

<p><a href="#" class="button red-light">This is a button set to light red.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button red-light&quot;&gt;This is a button set to light red.&lt;/a&gt;</code></pre>

<p><a href="#" class="button red-dark">This is a button set to dark red.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button red-dark&quot;&gt;This is a button set to dark red.&lt;/a&gt;</code></pre>

<p><a href="#" class="button yellow">This is a button set to yellow.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button yellow&quot;&gt;This is a button set to yellow.&lt;/a&gt;</code></pre>

<p><a href="#" class="button yellow-light">This is a button set to light yellow.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button yellow-light&quot;&gt;This is a button set to light yellow.&lt;/a&gt;</code></pre>

<p><a href="#" class="button yellow-dark">This is a button set to dark yellow.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button yellow-dark&quot;&gt;This is a button set to dark yellow.&lt;/a&gt;</code></pre>

<p><a href="#" class="button black">This is a button set to black.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button black&quot;&gt;This is a button set to black.&lt;/a&gt;</code></pre>

<p><a href="#" class="button gray">This is a button set to gray.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button gray&quot;&gt;This is a button set to gray.&lt;/a&gt;</code></pre>

<p><a href="#" class="button gray-light">This is a button set to light gray.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button gray-light&quot;&gt;This is a button set to light gray.&lt;/a&gt;</code></pre>

<p><a href="#" class="button gray-dark">This is a button set to dark gray.</a></p>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;button gray-dark&quot;&gt;This is a button set to dark gray.&lt;/a&gt;</code></pre>

<h2>Notes</h2>

<span class="note yellow">This is a caution note.</span>
<pre><code>&lt;span class=&quot;note yellow&quot;&gt;This is a caution note.&lt;/span&gt;</code></pre>

<span class="note red">This is a warning note.</span>
<pre><code>&lt;span class=&quot;note red&quot;&gt;This is a warning note.&lt;/span&gt;</code></pre>

<h2>Grid Layout</h2>

<div class="boxes">
<div class="box">This is a single-column box.</div>
</div>
<pre><code>&lt;div class=&quot;boxes&quot;&gt;
&lt;div class=&quot;box&quot;&gt;This is a single-column box.&lt;/div&gt;
&lt;/div&gt;</code></pre>

<br>

<div class="boxes">
<div class="box-2">This is a two-column box.</div>
<div class="box-2">This is a two-column box.</div>
</div>
<pre><code>&lt;div class=&quot;boxes&quot;&gt;
&lt;div class=&quot;box-2&quot;&gt;This is a two-column box.&lt;/div&gt;
&lt;div class=&quot;box-2&quot;&gt;This is a two-column box.&lt;/div&gt;
&lt;/div&gt;</code></pre>

<br>

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

<br>

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

<br>

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

<br>

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

<br>

<div class="boxes">
<div class="box-1-3">This is a one-third box.</div>
<div class="box-2-3">This is a two-thirds box.</div>
</div>
<pre><code>&lt;div class=&quot;boxes&quot;&gt;
&lt;div class=&quot;box-1-3&quot;&gt;This is a one-third box.&lt;/div&gt;
&lt;div class=&quot;box-2-3&quot;&gt;This is a two-thirds box.&lt;/div&gt;
&lt;/div&gt;</code></pre>

<br>

<h2>Dark Mode</h2>

<p>If your system/browser is set to prefer dark mode, this page should be black. Otherwise, it'll be white.</p>
<br>
<pre><code>@media(prefers-color-scheme:light){body{background:var(--color-white)}}
@media(prefers-color-scheme:dark){body{background:var(--color-black)}}</code></pre>

<br>

<h2>Additional Helper Classes</h2>
<pre><code>.block{display:block}
.inline{display:inline}
.inline-block{display:inline-block}
.flex{display:flex}
.grid{display:grid}
.full-width{width:100%}
.padding-0{padding:0}
.border-0{border:0}
.margin-0{margin:0}
.left{text-align:left}
.center{text-align:center}
.right{text-align:right}
.float-left{float:left}
.float-right{float:right}
.clear{clear:both}
.clear-left{clear:left}
.clear-right{clear:right}
.clear-float:after{display:table;content:'';clear:both}
.lowercase{text-transform:lowercase}
.uppercase{text-transform:uppercase}
.capitalize{text-transform:capitalize}
.truncate{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}
.spacer{display:inline-block;width:var(--spacing-small)}
.offset{scroll-margin-top:6.25rem}
.desktop, .mobile, .hidden{display:none}
.visually-hidden:not(:focus):not(:active){position:absolute!important;width:1px;height:1px;padding:0;border:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);clip-path:inset(50%);white-space:nowrap}</code></pre>

</article>

</main>

</div>

</div>

</body>

</html>