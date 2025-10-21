




<h1 id="oop.php">OOP.PHP</h1>
<p>This document describes the implementation of a <code>Car</code> class in PHP, showing its attributes, methods, and usage examples.</p>
<hr>
<h2 id="constructor-and-attributes">1. Constructor and Attributes</h2>
<p>The <code>Car</code> class contains the basic attributes of a car and methods to interact with them.</p>
<pre class=" language-php"><code class="prism  language-php">
<span class="token keyword">class</span>  <span class="token class-name">Car</span> <span class="token punctuation">{</span>

<span class="token keyword">public</span>  <span class="token variable">$brand</span><span class="token punctuation">;</span> 

<span class="token keyword">public</span>  <span class="token variable">$model</span><span class="token punctuation">;</span> 

<span class="token keyword">public</span>  <span class="token variable">$year</span><span class="token punctuation">;</span> 

<span class="token keyword">public</span>  <span class="token variable">$actualSpeed</span><span class="token punctuation">;</span> 
<span class="token punctuation">}</span>
</code></pre>
<h2 id="getters">2. Getters</h2>
<pre class=" language-php"><code class="prism  language-php"><span class="token keyword">function</span>  <span class="token function">get_brand</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>

<span class="token keyword">return</span>  <span class="token variable">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">brand</span><span class="token punctuation">;</span>

<span class="token punctuation">}</span>

<span class="token keyword">function</span>  <span class="token function">get_model</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>

<span class="token keyword">return</span>  <span class="token variable">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">model</span><span class="token punctuation">;</span>

<span class="token punctuation">}</span>

<span class="token keyword">function</span>  <span class="token function">get_year</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>

<span class="token keyword">return</span>  <span class="token variable">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">year</span><span class="token punctuation">;</span>

<span class="token punctuation">}</span>

<span class="token keyword">function</span>  <span class="token function">get_actualSpeed</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>

<span class="token keyword">return</span>  <span class="token variable">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">actualSpeed</span><span class="token punctuation">;</span>

<span class="token punctuation">}</span>
</code></pre>
<h2 id="setters">3. Setters</h2>
<pre class=" language-php"><code class="prism  language-php">
<span class="token keyword">function</span>  <span class="token function">set_brand</span><span class="token punctuation">(</span><span class="token variable">$brand</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>

<span class="token variable">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">brand</span> <span class="token operator">=</span> <span class="token variable">$brand</span><span class="token punctuation">;</span>

<span class="token punctuation">}</span>

<span class="token keyword">function</span>  <span class="token function">set_model</span><span class="token punctuation">(</span><span class="token variable">$model</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>

<span class="token variable">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">model</span> <span class="token operator">=</span> <span class="token variable">$model</span><span class="token punctuation">;</span>

<span class="token punctuation">}</span>

<span class="token keyword">function</span>  <span class="token function">set_year</span><span class="token punctuation">(</span><span class="token variable">$year</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>

<span class="token variable">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">year</span> <span class="token operator">=</span> <span class="token variable">$year</span><span class="token punctuation">;</span>

<span class="token punctuation">}</span>

<span class="token keyword">function</span>  <span class="token function">set_actualSpeed</span><span class="token punctuation">(</span><span class="token variable">$actualSpeed</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>

<span class="token variable">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">actualSpeed</span> <span class="token operator">=</span> <span class="token variable">$actualSpeed</span><span class="token punctuation">;</span>

<span class="token punctuation">}</span>
</code></pre>
<h2 id="accelerate-method">4. Accelerate method</h2>
<pre class=" language-php"><code class="prism  language-php">
<span class="token keyword">function</span>  <span class="token function">accelerate</span><span class="token punctuation">(</span><span class="token variable">$actualSpeed</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>

<span class="token variable">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">actualSpeed</span> <span class="token operator">+</span><span class="token operator">=</span> <span class="token variable">$actualSpeed</span><span class="token punctuation">;</span>

<span class="token punctuation">}</span>
</code></pre>
<h2 id="deccelerate-method">5. Deccelerate method</h2>
<pre class=" language-php"><code class="prism  language-php">
<span class="token keyword">function</span>  <span class="token function">deccelerate</span><span class="token punctuation">(</span><span class="token variable">$actualSpeed</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>

<span class="token variable">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">actualSpeed</span> <span class="token operator">-</span><span class="token operator">=</span> <span class="token variable">$actualSpeed</span><span class="token punctuation">;</span>

<span class="token punctuation">}</span>
</code></pre>
<h2 id="details-method">6. Details method</h2>
<pre class=" language-php"><code class="prism  language-php">
<span class="token keyword">function</span>  <span class="token function">details</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>

<span class="token keyword">return</span>  <span class="token string">"Brand: "</span>  <span class="token punctuation">.</span>  <span class="token variable">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">brand</span>  <span class="token punctuation">.</span>  <span class="token string">"\n"</span>  <span class="token punctuation">.</span>

<span class="token string">"Model: "</span>  <span class="token punctuation">.</span>  <span class="token variable">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">model</span>  <span class="token punctuation">.</span>  <span class="token string">"\n"</span>  <span class="token punctuation">.</span>

<span class="token string">"Year: "</span>  <span class="token punctuation">.</span>  <span class="token variable">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">year</span>  <span class="token punctuation">.</span>  <span class="token string">"\n"</span>  <span class="token punctuation">.</span>

<span class="token string">"Actual Speed: "</span>  <span class="token punctuation">.</span>  <span class="token variable">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">actualSpeed</span><span class="token punctuation">;</span>

<span class="token punctuation">}</span>
</code></pre>
<h2 id="car-with-accelerate-method">Car with accelerate method</h2>
<pre class=" language-php"><code class="prism  language-php">
<span class="token variable">$car</span> <span class="token operator">=</span> <span class="token keyword">new</span>  <span class="token class-name">Car</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

<span class="token variable">$car</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">set_brand</span><span class="token punctuation">(</span><span class="token string">"Opel"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

<span class="token variable">$car</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">set_model</span><span class="token punctuation">(</span><span class="token string">"Corsa"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

<span class="token variable">$car</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">set_year</span><span class="token punctuation">(</span><span class="token string">"2017"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

<span class="token variable">$car</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">set_actualSpeed</span><span class="token punctuation">(</span><span class="token number">140</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

<span class="token variable">$car</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">accelerate</span><span class="token punctuation">(</span><span class="token number">100</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre>
<h2 id="showing-car-using-details">Showing car using details()</h2>
<pre class=" language-php"><code class="prism  language-php"><span class="token keyword">echo</span>  <span class="token variable">$car</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">details</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token punctuation">.</span><span class="token string">"\n"</span><span class="token punctuation">.</span><span class="token string">"\n"</span><span class="token punctuation">;</span>
</code></pre>
<h2 id="car2-with-deccelerate-method">Car2 with deccelerate method</h2>
<pre class=" language-php"><code class="prism  language-php"><span class="token variable">$car2</span> <span class="token operator">=</span> <span class="token keyword">new</span>  <span class="token class-name">Car</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

<span class="token variable">$car2</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">set_brand</span><span class="token punctuation">(</span><span class="token string">"Nissan"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

<span class="token variable">$car2</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">set_model</span><span class="token punctuation">(</span><span class="token string">"Sandero"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

<span class="token variable">$car2</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">set_year</span><span class="token punctuation">(</span><span class="token string">"2000"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

<span class="token variable">$car2</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">set_actualSpeed</span><span class="token punctuation">(</span><span class="token number">200</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

<span class="token variable">$car2</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">deccelerate</span><span class="token punctuation">(</span><span class="token number">100</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre>
<h2 id="showing-car2">Showing car2</h2>
<pre class=" language-php"><code class="prism  language-php"><span class="token keyword">echo</span>  <span class="token variable">$car2</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">details</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre>

