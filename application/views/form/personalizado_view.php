<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        
        <section class="panel">
            <header class="panel-heading">
                 <center> Controles de Formulario Personalizados </center></b>
            </header>
            <div class="panel-body">
                <div class="row">

    </div>
    <div class="art-postcontent"><br>
        
       
        <p>Teniendo en cuenta que los formularios deben de presentar un diseño visual que agrade al usuario y que además sea accesible, en esta sección se mostraran algunos ejemplos de cómo construir controles de formulario personalizados accesibles.</p>


<br>

<h5>Botón de Compartir</h5>

<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<form action="#submit-like">
  <button type="submit" id="share-btn" class="btn-primary">
    <span class="count">15</span>
    <span class="text">Compartir</span>
  </button>
</form>

<style>
  #share-btn {
    line-height: 1;
    float:none;
  }
  #share-btn[disabled] {
    background: #063;
    border: 1px solid #063;
  }
  #share-btn[disabled]:hover,
  #share-btn[disabled]:focus {
    text-decoration: none;
  }
  #share-btn[disabled] .count {
    color: #063;
  }
  #share-btn .count {
    background-color: #fff;
    color: #036;
    min-width: 1em;
    line-height: 1;
    display: inline-block;
    border-radius: 50px;
    border: 4px solid #fff;
    text-align: center;
  }
</style>

<script>
document.getElementById('share-btn').removeAttribute('disabled');
document.getElementById('share-btn').addEventListener('click', function(event){
  event.preventDefault();
  event.stopImmediatePropagation();

  var count = this.querySelector('.count');
  var text = this.querySelector('.text');

  count.textContent = parseInt(count.textContent) + 1;
  text.textContent = "Shared ✓";

  this.setAttribute("disabled", "true");
});
</script>

  </div></figure>

<figure class="code ">
  <figcaption>Code snippet: HTML</figcaption>
<pre class="highlight html"><span class="nt">&lt;form</span> <span class="na">action=</span><span class="s">"path/to/submit"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">id=</span><span class="s">"share-btn"</span> <span class="na">class=</span><span class="s">"btn-primary"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"count"</span><span class="nt">&gt;</span>495<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text"</span><span class="nt">&gt;</span>Compartir<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span>
</pre>

</figure>
<figure class="code ">
  <figcaption>Code snippet: JavaScript</figcaption>
<pre class="highlight javascript"><span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">'share-btn'</span><span class="p">).</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s1">'click'</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span><span class="nx">event</span><span class="p">){</span>
  <span class="nx">event</span><span class="p">.</span><span class="nx">preventDefault</span><span class="p">();</span>
  <span class="nx">event</span><span class="p">.</span><span class="nx">stopImmediatePropagation</span><span class="p">();</span>

  <span class="kd">var</span> <span class="nx">count</span> <span class="o">=</span> <span class="k">this</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'.count'</span><span class="p">);</span>
  <span class="kd">var</span> <span class="nx">text</span> <span class="o">=</span> <span class="k">this</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'.text'</span><span class="p">);</span>

  <span class="nx">count</span><span class="p">.</span><span class="nx">textContent</span> <span class="o">=</span> <span class="nb">parseInt</span><span class="p">(</span><span class="nx">count</span><span class="p">.</span><span class="nx">textContent</span><span class="p">)</span> <span class="o">+</span> <span class="mi">1</span><span class="p">;</span>
  <span class="nx">text</span><span class="p">.</span><span class="nx">textContent</span> <span class="o">=</span> <span class="s2">"Shared ✓"</span><span class="p">;</span>

  <span class="k">this</span><span class="p">.</span><span class="nx">setAttribute</span><span class="p">(</span><span class="s2">"disabled"</span><span class="p">,</span> <span class="s2">"true"</span><span class="p">);</span>
<span class="p">});</span>
</pre>

</figure>
<br>

<h5>Valoración con estrellas</h5>
<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<form action="#" id="star_rating">
 <input value="0" id="star0" checked
  type="radio" name="rating" class="visuallyhidden">
  <label for="star0">
    <span class="visuallyhidden">0 estrellas</span>
    <svg viewBox="0 0 512 512">
      <g stroke-width="70" stroke-linecap="square">
            <path d="M91.5,442.5 L409.366489,124.633512"></path>
            <path d="M90.9861965,124.986197 L409.184248,443.184248"></path>
        </g>
    </svg>
  </label>

  <input value="1" id="star1"
    type="radio" name="rating" class="visuallyhidden">
  <label for="star1">
    <span class="visuallyhidden">1 Estrella</span>
    <svg viewBox="0 0 512 512"><path d="M512 198.525l-176.89-25.704-79.11-160.291-79.108 160.291-176.892 25.704 128 124.769-30.216 176.176 158.216-83.179 158.216 83.179-30.217-176.176 128.001-124.769z"></path></svg>
  </label>

  <input value="2" id="star2"
    type="radio" name="rating" class="visuallyhidden">
  <label for="star2">
    <span class="visuallyhidden">2 Estrellas</span>
    <svg viewBox="0 0 512 512"><path d="M512 198.525l-176.89-25.704-79.11-160.291-79.108 160.291-176.892 25.704 128 124.769-30.216 176.176 158.216-83.179 158.216 83.179-30.217-176.176 128.001-124.769z"></path></svg>
    </abbr>
  </label>

  <input value="3" id="star3"
    type="radio" name="rating" class="visuallyhidden">
  <label for="star3">
    <span class="visuallyhidden">3 estrellas</span> <svg viewBox="0 0 512 512"><path d="M512 198.525l-176.89-25.704-79.11-160.291-79.108 160.291-176.892 25.704 128 124.769-30.216 176.176 158.216-83.179 158.216 83.179-30.217-176.176 128.001-124.769z"></path></svg>
  </label>

  <input value="4" id="star4"
    type="radio" name="rating" class="visuallyhidden">
  <label for="star4">
    <span class="visuallyhidden">4 Estrellas</span> <svg viewBox="0 0 512 512"><path d="M512 198.525l-176.89-25.704-79.11-160.291-79.108 160.291-176.892 25.704 128 124.769-30.216 176.176 158.216-83.179 158.216 83.179-30.217-176.176 128.001-124.769z"></path></svg>
  </label>

  <input value="5" id="star5"
    type="radio" name="rating" class="visuallyhidden">
  <label for="star5">
    <span class="visuallyhidden">5 Estrellas</span> <svg viewBox="0 0 512 512"><path d="M512 198.525l-176.89-25.704-79.11-160.291-79.108 160.291-176.892 25.704 128 124.769-30.216 176.176 158.216-83.179 158.216 83.179-30.217-176.176 128.001-124.769z"></path></svg>
  </label>

  <button type="submit" class="btn-small visuallyhidden focusable">Submit rating</button>

  <output></output>
</form>

<style>
  #star_rating svg {
    width: 1em;
    height: 1em;
    fill: currentColor;
    stroke: currentColor;
  }
  #star_rating label, #star_rating output {
    display:block;
    float:left;
    font-size: 2em;
    height: 1.2em;
    color: #036;
    cursor: pointer;
    border-bottom: 2px solid transparent;
  }
  #star_rating output {
    font-size: 1.5em;
    padding: 0 1em;
  }

  #star_rating input:checked ~ label {
    color: #858585;
  }
  #star_rating input:checked + label {
    color: #036;
    border-bottom-color: #036;
  }
  #star_rating input:focus + label {
    border-bottom-style: dotted;
  }
  #star_rating:hover input + label {
    color: #036;
  }
  #star_rating input:hover ~ label,
  #star_rating input:focus ~ label,
  #star_rating input[id="star0"] + label {
    color: #999;
  }
  #star_rating input:hover + label,
  #star_rating input:focus + label {
    color: #036;
  }
  #star_rating input[id="star0"]:checked + label {
    color: #ff2d21;
  }
  #star_rating [type="submit"] {
    float: none;
  }
</style>

<script>
var radios = document.querySelectorAll('#star_rating input[type=radio]');
var btn = document.querySelector('#star_rating button');
var output = document.querySelector('#star_rating output');
var do_something = function(stars) {
  // An AJAX request could send the data to the server
  output.textContent = stars;
};

Array.prototype.forEach.call(radios, function(el, i){
  var label = el.nextSibling.nextSibling;
  label.addEventListener("click", function(event){
    do_something(label.querySelector('span').textContent);
  });
});

document.querySelector('#star_rating').addEventListener('submit', function(event){
  do_something(document.querySelector('#star_rating :checked ~ label span').textContent);
  event.preventDefault();
  event.stopImmediatePropagation();
});
</script>


  </div></figure>

<figure class="code ">
  <figcaption>Code snippet: HTML</figcaption>
<pre class="highlight html"><span class="nt">&lt;form</span> <span class="na">action=</span><span class="s">"#"</span> <span class="na">id=</span><span class="s">"star_rating"</span><span class="nt">&gt;</span>
 <span class="nt">&lt;input</span> <span class="na">value=</span><span class="s">"0"</span> <span class="na">id=</span><span class="s">"star0"</span> <span class="na">checked</span>
  <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"rating"</span> <span class="na">class=</span><span class="s">"visuallyhidden"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"star0"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"visuallyhidden"</span><span class="nt">&gt;</span>0 Stars<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;svg</span> <span class="na">viewBox=</span><span class="s">"0 0 512 512"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;g</span> <span class="na">stroke-width=</span><span class="s">"70"</span> <span class="na">stroke-linecap=</span><span class="s">"square"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;path</span> <span class="na">d=</span><span class="s">"M91.5,442.5 L409.366489,124.633512"</span><span class="nt">&gt;&lt;/path&gt;</span>
        <span class="nt">&lt;path</span> <span class="na">d=</span><span class="s">"M90.9861965,124.986197 L409.184248,443.184248"</span><span class="nt">&gt;&lt;/path&gt;</span>
      <span class="nt">&lt;/g&gt;</span>
    <span class="nt">&lt;/svg&gt;</span>
  <span class="nt">&lt;/label&gt;</span>

  <span class="nt">&lt;input</span> <span class="na">value=</span><span class="s">"1"</span> <span class="na">id=</span><span class="s">"star1"</span>
    <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"rating"</span> <span class="na">class=</span><span class="s">"visuallyhidden"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"star1"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"visuallyhidden"</span><span class="nt">&gt;</span>1 Star<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;svg</span> <span class="na">viewBox=</span><span class="s">"0 0 512 512"</span><span class="nt">&gt;&lt;path</span> <span class="na">d=</span><span class="s">"M512 198.525l-176.89-25.704-79.11-160.291-79.108 160.291-176.892 25.704 128 124.769-30.216 176.176 158.216-83.179 158.216 83.179-30.217-176.176 128.001-124.769z"</span><span class="nt">&gt;&lt;/path&gt;&lt;/svg&gt;</span>
  <span class="nt">&lt;/label&gt;</span>

  <span class="nt">&lt;input</span> <span class="na">value=</span><span class="s">"2"</span> <span class="na">id=</span><span class="s">"star2"</span>
    <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"rating"</span> <span class="na">class=</span><span class="s">"visuallyhidden"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"star2"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"visuallyhidden"</span><span class="nt">&gt;</span>2 Stars<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;svg</span> <span class="na">viewBox=</span><span class="s">"0 0 512 512"</span><span class="nt">&gt;</span>…<span class="nt">&lt;/svg&gt;</span>
  <span class="nt">&lt;/label&gt;</span>

  <span class="nt">&lt;input</span> <span class="na">value=</span><span class="s">"3"</span> <span class="na">id=</span><span class="s">"star3"</span>
    <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"rating"</span> <span class="na">class=</span><span class="s">"visuallyhidden"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"star3"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"visuallyhidden"</span><span class="nt">&gt;</span>3 Stars<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;svg</span> <span class="na">viewBox=</span><span class="s">"0 0 512 512"</span><span class="nt">&gt;</span>…<span class="nt">&lt;/svg&gt;</span>
  <span class="nt">&lt;/label&gt;</span>

  <span class="nt">&lt;input</span> <span class="na">value=</span><span class="s">"4"</span> <span class="na">id=</span><span class="s">"star4"</span>
    <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"rating"</span> <span class="na">class=</span><span class="s">"visuallyhidden"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"star4"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"visuallyhidden"</span><span class="nt">&gt;</span>4 Stars<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;svg</span> <span class="na">viewBox=</span><span class="s">"0 0 512 512"</span><span class="nt">&gt;</span>…<span class="nt">&lt;/svg&gt;</span>
  <span class="nt">&lt;/label&gt;</span>

  <span class="nt">&lt;input</span> <span class="na">value=</span><span class="s">"5"</span> <span class="na">id=</span><span class="s">"star5"</span>
    <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"rating"</span> <span class="na">class=</span><span class="s">"visuallyhidden"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"star5"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"visuallyhidden"</span><span class="nt">&gt;</span>5 Stars<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;svg</span> <span class="na">viewBox=</span><span class="s">"0 0 512 512"</span><span class="nt">&gt;</span>…<span class="nt">&lt;/svg&gt;</span>
  <span class="nt">&lt;/label&gt;</span>

  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn-small visuallyhidden focusable"</span><span class="nt">&gt;</span>Submit rating<span class="nt">&lt;/button&gt;</span>

  <span class="nt">&lt;output&gt;&lt;/output&gt;</span>
<span class="nt">&lt;/form&gt;</span>
</pre>

</figure>
<figure class="code ">
  <figcaption>Code snippet: CSS</figcaption>
<pre class="highlight css"><span class="nf">#star_rating</span> <span class="nt">svg</span> <span class="p">{</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">1em</span><span class="p">;</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">1em</span><span class="p">;</span>
  <span class="py">fill</span><span class="p">:</span> <span class="n">currentColor</span><span class="p">;</span>
  <span class="py">stroke</span><span class="p">:</span> <span class="n">currentColor</span><span class="p">;</span>
<span class="p">}</span>
<span class="nf">#star_rating</span> <span class="nt">label</span><span class="o">,</span> <span class="nf">#star_rating</span> <span class="nt">output</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="nb">block</span><span class="p">;</span>
  <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
  <span class="nl">font-size</span><span class="p">:</span> <span class="m">2em</span><span class="p">;</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">1.2em</span><span class="p">;</span>
  <span class="nl">color</span><span class="p">:</span> <span class="m">#036</span><span class="p">;</span>
  <span class="nl">cursor</span><span class="p">:</span> <span class="nb">pointer</span><span class="p">;</span>
  <span class="c">/* Transparent border-bottom avoids jumping
     when a colored border is applied
     on :hover/:focus */</span>
  <span class="nl">border-bottom</span><span class="p">:</span> <span class="m">2px</span> <span class="nb">solid</span> <span class="nb">transparent</span><span class="p">;</span>
<span class="p">}</span>
<span class="nf">#star_rating</span> <span class="nt">output</span> <span class="p">{</span>
  <span class="nl">font-size</span><span class="p">:</span> <span class="m">1.5em</span><span class="p">;</span>
  <span class="nl">padding</span><span class="p">:</span> <span class="m">0</span> <span class="m">1em</span><span class="p">;</span>
<span class="p">}</span>
<span class="nf">#star_rating</span> <span class="nt">input</span><span class="nd">:checked</span> <span class="o">~</span> <span class="nt">label</span> <span class="p">{</span>
  <span class="nl">color</span><span class="p">:</span> <span class="m">#999</span><span class="p">;</span>
<span class="p">}</span>
<span class="nf">#star_rating</span> <span class="nt">input</span><span class="nd">:checked</span> <span class="o">+</span> <span class="nt">label</span> <span class="p">{</span>
  <span class="nl">color</span><span class="p">:</span> <span class="m">#036</span><span class="p">;</span>
  <span class="nl">border-bottom-color</span><span class="p">:</span> <span class="m">#036</span><span class="p">;</span>
<span class="p">}</span>
<span class="nf">#star_rating</span> <span class="nt">input</span><span class="nd">:focus</span> <span class="o">+</span> <span class="nt">label</span> <span class="p">{</span>
  <span class="nl">border-bottom-style</span><span class="p">:</span> <span class="nb">dotted</span><span class="p">;</span>
<span class="p">}</span>
<span class="nf">#star_rating</span><span class="nd">:hover</span> <span class="nt">input</span> <span class="o">+</span> <span class="nt">label</span> <span class="p">{</span>
  <span class="nl">color</span><span class="p">:</span> <span class="m">#036</span><span class="p">;</span>
<span class="p">}</span>
<span class="nf">#star_rating</span> <span class="nt">input</span><span class="nd">:hover</span> <span class="o">~</span> <span class="nt">label</span><span class="o">,</span>
<span class="nf">#star_rating</span> <span class="nt">input</span><span class="nd">:focus</span> <span class="o">~</span> <span class="nt">label</span><span class="o">,</span>
<span class="nf">#star_rating</span> <span class="nt">input</span><span class="o">[</span><span class="nt">id</span><span class="o">=</span><span class="err">"</span><span class="nt">star0</span><span class="err">"</span><span class="o">]</span> <span class="o">+</span> <span class="nt">label</span> <span class="p">{</span>
  <span class="nl">color</span><span class="p">:</span> <span class="m">#999</span><span class="p">;</span>
<span class="p">}</span>
<span class="nf">#star_rating</span> <span class="nt">input</span><span class="nd">:hover</span> <span class="o">+</span> <span class="nt">label</span><span class="o">,</span>
<span class="nf">#star_rating</span> <span class="nt">input</span><span class="nd">:focus</span> <span class="o">+</span> <span class="nt">label</span> <span class="p">{</span>
  <span class="nl">color</span><span class="p">:</span> <span class="m">#036</span><span class="p">;</span>
<span class="p">}</span>
<span class="nf">#star_rating</span> <span class="nt">input</span><span class="o">[</span><span class="nt">id</span><span class="o">=</span><span class="err">"</span><span class="nt">star0</span><span class="err">"</span><span class="o">]</span><span class="nd">:checked</span> <span class="o">+</span> <span class="nt">label</span> <span class="p">{</span>
  <span class="nl">color</span><span class="p">:</span> <span class="m">#ff2d21</span><span class="p">;</span>
<span class="p">}</span>
<span class="nf">#star_rating</span> <span class="o">[</span><span class="nt">type</span><span class="o">=</span><span class="err">"</span><span class="nt">submit</span><span class="err">"</span><span class="o">]</span> <span class="p">{</span>
  <span class="nl">float</span><span class="p">:</span> <span class="nb">none</span><span class="p">;</span>
<span class="p">}</span>
</pre>

</figure>
<figure class="code ">
  <figcaption>Code snippet: JavaScript</figcaption>
<pre class="highlight javascript"><span class="kd">var</span> <span class="nx">radios</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="s1">'#star_rating input[type=radio]'</span><span class="p">);</span>
<span class="kd">var</span> <span class="nx">output</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'#star_rating output'</span><span class="p">);</span>

<span class="kd">var</span> <span class="nx">do_something</span> <span class="o">=</span> <span class="kd">function</span><span class="p">(</span><span class="nx">stars</span><span class="p">)</span> <span class="p">{</span>
  <span class="c1">// An AJAX request could send the data to the server
</span> <span class="nx">output</span><span class="p">.</span><span class="nx">textContent</span> <span class="o">=</span> <span class="nx">stars</span><span class="p">;</span>
<span class="p">};</span>

<span class="c1">// Iterate through all radio buttons and add a click
// event listener to the labels
</span><span class="nb">Array</span><span class="p">.</span><span class="nx">prototype</span><span class="p">.</span><span class="nx">forEach</span><span class="p">.</span><span class="nx">call</span><span class="p">(</span><span class="nx">radios</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span><span class="nx">el</span><span class="p">,</span> <span class="nx">i</span><span class="p">){</span>
  <span class="kd">var</span> <span class="nx">label</span> <span class="o">=</span> <span class="nx">el</span><span class="p">.</span><span class="nx">nextSibling</span><span class="p">.</span><span class="nx">nextSibling</span><span class="p">;</span>
  <span class="nx">label</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s2">"click"</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span><span class="nx">event</span><span class="p">){</span>
    <span class="nx">do_something</span><span class="p">(</span><span class="nx">label</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'span'</span><span class="p">).</span><span class="nx">textContent</span><span class="p">);</span>
  <span class="p">});</span>
<span class="p">});</span>

<span class="c1">// If the form gets submitted, do_something
</span><span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'#star_rating'</span><span class="p">).</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s1">'submit'</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span><span class="nx">event</span><span class="p">){</span>
  <span class="nx">do_something</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'#star_rating :checked ~ label span'</span><span class="p">).</span><span class="nx">textContent</span><span class="p">);</span>
  <span class="nx">event</span><span class="p">.</span><span class="nx">preventDefault</span><span class="p">();</span>
  <span class="nx">event</span><span class="p">.</span><span class="nx">stopImmediatePropagation</span><span class="p">();</span>
<span class="p">});</span>
</pre>

</figure>

</div>
    <div class="cleared"></div>
</div>

        </section>


        <div class="row"  id="result">

        </div>
    </section>
</section>
<!--main content end-->


