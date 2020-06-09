<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        
        <section class="panel">
            <header class="panel-heading">
                 <center> Menú Desplegable </center></b>
            </header>
            <div class="panel-body">
                <div class="row">

    </div>
    <div class="art-postcontent"><br>
        
        <p>
        Los menús desplegables deben ser creados de tal forma que puedan ser operados por comandos de teclado, además para personas con pocas destrezas en el uso de las tecnologías es muy importante que al salirse de los submenús este no desaparezca inmediatamente.</p>
        <p>
        Hacer uso de JavaScript para que cuando el puntero del mouse deje los submenús, se inicie un temporizador de cierre del submenú, esto permite que una persona que accidentalmente se salga de los submenús puedan volver, esto para una persona que sufra de Parkinson puede ser de gran ayuda así como una persona que accidentalmente se salga de su objetivo.</p>
        <p>
      Se puede mejorar el funcionamiento de un lector de pantalla si se utiliza en estos menús usando WAI-ARIA, dado que los lectores de pantalla no pueden saber si un elemento tiene o no un submenú y si está abierto o cerrado; por lo cual WAI-ARIA por medio de los atributos:  
        </p>
        <ul>
        <li><strong><code>aria-haspopup="true"</code></strong>Se usa para que los lectores de pantalla detecten y anuncien si el enlace tiene un submenú.</li>
        <li><strong><code>aria-expanded</code></strong> se inicia <code>false</code> pero cambia a <code>true</code> cuando se abre el submenú, lo cual obliga al lector de pantalla a anunciar que el elemento del menú ahora esta expandido</li>
        </ul>
        <figure class="code ">
  <figcaption>Fragmento de Código: HTML</figcaption>
    <pre class="highlight html"><span class="nt">&lt;ul&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"nav1"</span><span class="nt">&gt;</span>Menu Usando ARIA<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"nav2"</span><span class="nt">&gt;</span>Menu Horizontal<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span><span> </span><span class="na">class=</span><span class="s">"has-submenu"</span>&gt;<div><span>            </span>&lt;a</span> <span class="na">href=</span><span class="s">"nav3"</span><span> </span><span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>Menu Vertical<span class="nt">&lt;/a&gt;<span class="nt"><div><span>               </span>&lt;ul&gt;</span><div><span>                    </span><span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"nav3.1"</span><span class="nt">&gt;</span>Menu Vertical 1<span class="nt">&lt;/a&gt;&lt;/li&gt;</span><div><span>                    </span><span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"nav3.2"</span><span class="nt">&gt;</span>Menu Vertical 2<span class="nt">&lt;/a&gt;&lt;/li&gt;<div><span>               </span><span class="nt">&lt;/ul&gt;</span></span><div><span>        </span>&lt;/li&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"nav4"</span><span class="nt">&gt;</span>Menu Desplegable<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"nav5"</span><span class="nt">&gt;</span>Regresar<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    …
    <span class="nt">&lt;/ul&gt;</span>
    </pre>

    </figure>

    <br>
  <br>

<figure class="code ">
  <figcaption>Fragmento de Código: JavaScript</figcaption>
<pre class="highlight javascript"><span class="nb">Array</span><span class="p">.</span><span class="nx">prototype</span><span class="p">.</span><span class="nx">forEach</span><span class="p">.</span><span class="nx">call</span><span class="p">(</span><span class="nx">menuItems</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span><span class="nx">el</span><span class="p">,</span> <span class="nx">i</span><span class="p">){</span>
    <span class="nx">el</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s2">"mouseover"</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span><span class="nx">event</span><span class="p">){</span>
        <span class="k">this</span><span class="p">.</span><span class="nx">className</span> <span class="o">=</span> <span class="s2">"has-submenu open"</span><span class="p">;</span>
        <span class="nx">clearTimeout</span><span class="p">(</span><span class="nx">timer</span><span class="p">);</span>
    <span class="p">});</span>
    <span class="nx">el</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s2">"mouseout"</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span><span class="nx">event</span><span class="p">){</span>
        <span class="nx">timer</span> <span class="o">=</span> <span class="nx">setTimeout</span><span class="p">(</span><span class="kd">function</span><span class="p">(</span><span class="nx">event</span><span class="p">){</span>
            <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s2">".has-submenu.open"</span><span class="p">).</span><span class="nx">className</span> <span class="o">=</span> <span class="s2">"has-submenu"</span><span class="p">;</span>
        <span class="p">},</span> <span class="mi">1000</span><span class="p">);</span>
    <span class="p">});</span>
<span class="p">});</span>
</pre>

</figure>

<br>
<br>

    <figure class="sample show-overflow">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<nav role="navigation" aria-label="Main Navigation" aria-presentation="true" id="flyoutaria">
        <ul>
                <li><a href="#flyoutaria">Menu Usando ARIA</a></li>
                <li><a href="#flyoutaria">Menu Horizontal</a></li>
                <li class="has-submenu">
                        <a href="#" aria-haspopup="true" aria-expanded="false">Menu Vertical</a>
                        <ul>
                                <li><a href="#flyoutaria">Menu Vertical 1</a></li>
                                <li><a href="#flyoutaria">Menu Vertical 2 </a></li>
                        </ul>
                </li>
                <li><a href="#flyoutaria">Menu Desplegable</a></li>
                <li><a href="#flyoutaria">Regresar</a></li>
        </ul>
</nav>

<style>
.show-overflow {
        overflow: visible !important;
}

.show-overflow .box-content {
        overflow: visible !important;
}
    #flyoutaria {
            display:table;
            width:100%;
    }
    #flyoutaria > ul {
            margin: 0;
            padding: 0;
            display: table-row;
            background-color: #083520;
            color: #fff;
    }
    #flyoutaria > ul > li {
            display:table-cell;
            width: 20%;
            text-align: center;
            position:relative;
    }
    #flyoutaria a,
    #flyoutaria .current {
            display: block;
            padding: .25em;
            border-color: #E8E8E8;
    }
    #flyoutaria a {
            color: #fff;
            text-decoration: none;
    }
    #flyoutaria a:hover,
        #flyoutaria a:focus {
            background-color: #fff;
            color: #083520;
            border: 1px solid #083520;
            text-decoration: underline;
    }
    #flyoutaria .current {
            background-color: #bbb;
            color: #000;
            border-color: #444;
    }

    #flyoutaria > ul > li > ul {
        display: none;
        position:absolute;
        left:0;
        right:0;
        top:100%;
        padding:0;
        margin:0;
        background-color: #083520;
    }

#flyoutaria > ul > li.open > ul {
        display:block;
    }

    #flyoutaria > ul > li > ul a{
        border-bottom-width: 1px;
    }
</style>

<script>
/* focusin/out event polyfill (firefox) */
!function(){
    var w = window,
    d = w.document;

    if( w.onfocusin === undefined ){
        d.addEventListener('focus' ,addPolyfill ,true);
        d.addEventListener('blur' ,addPolyfill ,true);
        d.addEventListener('focusin' ,removePolyfill ,true);
        d.addEventListener('focusout' ,removePolyfill ,true);
    }
    function addPolyfill(e){
        var type = e.type === 'focus' ? 'focusin' : 'focusout';
        var event = new CustomEvent(type, { bubbles:true, cancelable:false });
        event.c1Generated = true;
        e.target.dispatchEvent( event );
    }
    function removePolyfill(e){
if(!e.c1Generated){ // focus after focusin, so chrome will the first time trigger tow times focusin
    d.removeEventListener('focus' ,addPolyfill ,true);
    d.removeEventListener('blur' ,addPolyfill ,true);
    d.removeEventListener('focusin' ,removePolyfill ,true);
    d.removeEventListener('focusout' ,removePolyfill ,true);
}
setTimeout(function(){
    d.removeEventListener('focusin' ,removePolyfill ,true);
    d.removeEventListener('focusout' ,removePolyfill ,true);
});
}
}();

function hasClass(el, className) {
    if (el.classList) {
        return el.classList.contains(className);
    } else {
        return new RegExp('(^| )' + className + '( |$)', 'gi').test(el.className);
    }
}

var menuItems1 = document.querySelectorAll('#flyoutaria li.has-submenu');
var timer1, timer2;

Array.prototype.forEach.call(menuItems1, function(el, i){
        el.addEventListener("mouseover", function(event){
                this.className = "has-submenu open";
                clearTimeout(timer1);
        });
        el.addEventListener("mouseout", function(event){
                timer1 = setTimeout(function(event){
                        document.querySelector("#flyoutaria .has-submenu.open").className = "has-submenu";
                }, 1000);
        });
        el.querySelector('a').addEventListener("click",  function(event){
            if (this.parentNode.className == "has-submenu") {
                this.parentNode.className = "has-submenu open";
                this.setAttribute('aria-expanded', "true");
            } else {
                this.parentNode.className = "has-submenu";
                this.setAttribute('aria-expanded', "false");
            }
            event.preventDefault();
            return false;
        });
        var links = el.querySelectorAll('a');
        Array.prototype.forEach.call(links, function(el, i){
            el.addEventListener("focus", function() {
                if (timer2) {
                    clearTimeout(timer2);
                    timer2 = null;
                }
            });
            el.addEventListener("blur", function(event) {
                timer2 = setTimeout(function () {
                    var opennav = document.querySelector("#flyoutaria .has-submenu.open")
                    if (opennav) {
                        opennav.className = "has-submenu";
                        document.querySelector("#flyoutaria .has-submenu.open [aria-expanded]").setAttribute('aria-expanded', "false");
                    }
                }, 10);
            });
        });
});
</script>


  </div></figure>
 
       

</div>
    <div class="cleared"></div>
</div>

        </section>


        <div class="row"  id="result">

        </div>
    </section>
</section>
<!--main content end-->


