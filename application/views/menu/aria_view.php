<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        
        <section class="panel">
            <header class="panel-heading">
                 <center> Menú Usando ARIA </center></b>
            </header>
            <div class="panel-body">
                <div class="row">

    </div>
    <div class="art-postcontent"><br>
        
        <p>
        Uno de los problemas de accesibilidad que presentan los menús dentro de una aplicación, es la navegación por ellos mediante el uso de teclado haciendo uso de la tecla tab y dado que estos menús por lo general son creados para personas que pueden ver, entonces los desarrolladores crean menús muy bonitos usando CSS pero suelen usar display:none para ocultar los menús desplegables y esto puede que no lo detecte un lector de pantalla</p>
        <p>
        Por esta razón y para mejorar la accesibilidad la W3C creo la iniciativa WAI-ARIA la cual por medio de sus atributos y roles ayudan a que las herramientas asistidas puedan reconocer los menús.</p>
       <p>
        A continuación se mostraran dos ejemplos de menús accesibles usando ARIA, el primero será un ejemplo simple y el segundo será un ejemplo de un nivel más técnico que incluye scripts para mejorar la interacción del teclado con el menú.</p>
       <p>
        Un menú dinámico puede incluir las siguientes etiquetas ARIA:
       </p>

       <p>role="menubar" en el elemento raíz de cada uno de los menús desplegables, normalmente es un &lt;ul&gt;.</p>
       <p>role="menu" en el elemento raiz de cada uno de los menús desplegables, normalmente es un &lt;ul&gt; o un &lt;ol&gt;.</p>
       <p>role="menuitem" en cada elemento accionable del sistema de menús, incluye los de los menús, menús desplegables y submenús.</p>
       <p>aria-haspopup="true" En cualquier elemento que active la visualización de un menú desplegable. Esto se aplica típicamente a todos los elementos de menú de nivel superior y a cualquier elemento de menú que tenga submenús.</p>
       <p>aria-hidden="true" en cada elemento del contenedor del menú desplegable, normalmente un &lt;ul&gt; o un &lt;div&gt;. Cuando JavaScript se utiliza para hacer que el menu sea visible, también debe cambiar este atributo a aria-hidden= "false".</p>
       <p>aria-expanded="false" se inicia en false pero cambia a true cuando se abre el submenú, lo cual obliga al lector de pantalla a anunciar que el elemento del menú ahora esta expandido.</li>
        </ul>
       <br>
       <p>Juntando todos estos elementos juntos, un menú ARIA accesible sencillo sería algo así:</p>
<figure class="code ">
  <figcaption>Fragmento de Código: HTML</figcaption>
        <pre class="highlight html">
<span class="nt">&lt;div</span><span> </span><span class="na">role</span>="navigation" <span class="na">aria-label</span> ="Main menu"<span class="nt">&gt;
  <span class="nt">&lt;ul</span> <span class="na">id=</span><span class="s">"nav"</span> <span class="na">role=</span><span class="s">"menubar"</span><span class="nt">&gt;
    <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"0"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
      About
      <span class="nt">&lt;ul</span> <span class="na">role=</span><span class="s">"menu"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span><span class="nt">&gt;</span>
         <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span>&gt;News<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span><span class="nt">&gt;</span>
         <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span>&gt;Contact Us<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
     <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"0"</span> <span class="na">aria-haspopup=</span>"true"</span><span class="nt">&gt;</span>
      Academics
      <span class="nt">&lt;ul</span> <span class="na">role=</span><span class="s">"menu"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;
        <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span><span class="nt">&gt;
         <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span>&gt;Degree Programs<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span><span class="nt">&gt;
         <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span>&gt;Faculty<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
     <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
 <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre>

    </figure>
<br>

    <p>Además de los atributos aria-expanded y aria-haspopup, se utilizan también los siguientes roles usados en el siguiente ejemplo.</p>
    <p>aria-menubar: Representa usualmente un menú horizontal.</p>
    <p>aria-menu: Representa un conjunto de enlaces o comandos en una barra de menús, este se usa en menús desplegables.</p>
    <p>aria-menuitem: Representa un elemento de menú individual.</p>
    <figure class="sample show-overflow2">
  <figcaption>Example: </figcaption>
  <div class="box-content">
<div role="menubar">
    <ul role="menu" aria-label="functions" id="appmenu">
            <li role="menuitem" aria-haspopup="true">
                Menús
                <ul role="menu">
                            <li role="menuitem">menu1</li>
                            <li role="menuitem">menu2</li>
                            <li role="menuitem">menu3</li>
                    </ul>
            </li>
            <li role="menuitem" aria-haspopup="true">
                Listas
                <ul role="menu">
                            <li role="menuitem">lista1</li>
                            <li role="menuitem">lista2</li>
                            <li role="menuitem">lista3</li>
                            <li role="menuitem">lista4</li>
                            <li role="menuitem">lista5</li>
                    </ul>
            </li>
            <li role="menuitem" aria-haspopup="true">
                    Links
                    <ul role="menu">
                            <li role="menuitem">link1</li>
                            <li role="menuitem">link2</li>
                    </ul>
            </li>
            <li role="menuitem" aria-haspopup="true">
                Forms
                <ul role="menu">
                    <li role="menuitem">form1</li>
                    <li role="menuitem">form2</li>
                    <li role="menuitem">form3</li>
                </ul>
            </li>
            <li role="menuitem">Tables</li>
    </ul>
</div>

<style>
.show-overflow2 {
        overflow: visible !important;
        float: left;
        width: 100%;
}

.show-overflow2 .box-content {
        overflow: visible !important;
        float: left;
        width: 100%;
}
    #appmenu {
            width:80%;
            float: left;
            margin: 0;
            padding: 0;
            color: #fff;
            background-color: #369;
            padding: .25em;
    }
    #appmenu li {
        white-space: nowrap;
        display:block;
        padding: .25em .75em;
        border: 1px solid #fff;
    }
    #appmenu > li {
            float: left;
            background-color: #036;
            text-align: center;
            position:relative;
            cursor: pointer;
    }
    #appmenu :hover,
        #appmenu :focus {
            background-color: #fff;
            color: #036;
            border: 1px solid #036;
            text-decoration: underline;
    }

    #appmenu :hover li,
        #appmenu :focus li {
            color: #fff;
            background-color: #036;
        }

    #appmenu > li > ul {
        display: none;
        position:absolute;
        left:0;
        right:0;
        top:100%;
        padding:0;
        margin:0;
        background-color: #036;
        width: 200%;
        text-align: left;
    }

#appmenu > li[aria-expanded="true"] > ul {
        display:block;
    }
</style>

<script>
var appsMenuItems = document.querySelectorAll('#appmenu > li');
var subMenuItems = document.querySelectorAll('#appmenu > li li');
var keys = {
    tab:    9,
    enter:  13,
    esc:    27,
    space:  32,
    left:   37,
    up:     38,
    right:  39,
    down:   40
};
var currentIndex, subIndex;

var gotoIndex = function(idx) {
    if (idx == appsMenuItems.length) {
        idx = 0;
    } else if (idx < 0) {
        idx = appsMenuItems.length - 1;
    }
    appsMenuItems[idx].focus();
    currentIndex = idx;
};

var gotoSubIndex = function (menu, idx) {
    var items = menu.querySelectorAll('li');
    if (idx == items.length) {
        idx = 0;
    } else if (idx < 0) {
        idx = items.length - 1;
    }
    items[idx].focus();
    subIndex = idx;
}

Array.prototype.forEach.call(appsMenuItems, function(el, i){
        if (0 == i) {
            el.setAttribute('tabindex', '0');
            el.addEventListener("focus", function() {
                currentIndex = 0;
            });
        } else {
            el.setAttribute('tabindex', '-1');
        }
        el.addEventListener("focus", function() {
            subIndex = 0;
            Array.prototype.forEach.call(appsMenuItems, function(el, i){
                el.setAttribute('aria-expanded', "false");
            });
        });
        el.addEventListener("click",  function(event){
            if (this.getAttribute('aria-expanded') == 'false' || this.getAttribute('aria-expanded') ==  null) {
                this.setAttribute('aria-expanded', "true");
            } else {
                this.setAttribute('aria-expanded', "false");
            }
            event.preventDefault();
            return false;
        });
        el.addEventListener("keydown", function(event) {
            switch (event.keyCode) {
                case keys.right:
                    gotoIndex(currentIndex + 1);
                    break;
                case keys.left:
                    gotoIndex(currentIndex - 1);
                    break;
                case keys.tab:
                    if (event.shiftKey) {
                        gotoIndex(currentIndex - 1);
                    } else {
                        gotoIndex(currentIndex + 1);
                    }
                    break;
                case keys.enter:
                case keys.down:
                    this.click();
                    subindex = 0;
                    gotoSubIndex(this.querySelector('ul'), 0);
                    break;
                case keys.up:
                    this.click();
                    var submenu = this.querySelector('ul');
                    subindex = submenu.querySelectorAll('li').length - 1;
                    gotoSubIndex(submenu, subindex);
                    break;
                case keys.esc:
                    document.querySelector('a[href="#related"]').focus();
            }
            event.preventDefault();
        });
});

Array.prototype.forEach.call(subMenuItems, function(el, i){
    el.setAttribute('tabindex', '-1');
    el.addEventListener("keydown", function(event) {
            switch (event.keyCode) {
                case keys.tab:
                    if (event.shiftKey) {
                        gotoIndex(currentIndex - 1);
                    } else {
                        gotoIndex(currentIndex + 1);
                    }
                    break;
                case keys.right:
                    gotoIndex(currentIndex + 1);
                    break;
                case keys.left:
                    gotoIndex(currentIndex - 1);
                    break;
                case keys.esc:
                    gotoIndex(currentIndex);
                    break;
                case keys.down:
                    gotoSubIndex(this.parentNode, subIndex + 1);
                    break;
                case keys.up:
                    gotoSubIndex(this.parentNode, subIndex - 1);
                    break;
                case keys.enter:
                case keys.space:
                    alert(this.innerText);
                    break;
            }
            event.preventDefault();
            event.stopPropagation();
            return false;
        });
    el.addEventListener("click", function(event) {
            alert(this.innerHTML);
            event.preventDefault();
            event.stopPropagation();
            return false;
        });
});
</script>


  </div></figure>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>


  <figure class="code ">
  <figcaption>Fragmento de Código: HTML</figcaption>
<pre class="highlight html"><span class="nt">&lt;div</span> <span class="na">role=</span><span class="s">"menubar"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">role=</span><span class="s">"menu"</span> <span class="na">aria-label=</span><span class="s">"functions"</span> <span class="na">id=</span><span class="s">"appmenu"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
                Menús
                <span class="nt">&lt;ul</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span><span class="nt">&gt;</span>menu1<span class="nt">&lt;/li&gt;</span>
                            <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span><span class="nt">&gt;</span>menu2<span class="nt">&lt;/li&gt;</span>
                            <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span><span class="nt">&gt;</span>menu3<span class="nt">&lt;/li&gt;</span>
                    <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/li&gt;</span>
            <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
                Listas
                <span class="nt">&lt;ul</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span><span class="nt">&gt;</span>lista1<span class="nt">&lt;/li&gt;</span>
                            <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span><span class="nt">&gt;</span>lista2<span class="nt">&lt;/li&gt;</span>
                            <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span><span class="nt">&gt;</span>lista3<span class="nt">&lt;/li&gt;</span>
                            <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span><span class="nt">&gt;</span>lista4<span class="nt">&lt;/li&gt;</span>
                            <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span><span class="nt">&gt;</span>lista5<span class="nt">&lt;/li&gt;</span>
                    <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/li&gt;</span>
            <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
                    Links
                    <span class="nt">&lt;ul</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span><span class="nt">&gt;</span>link1<span class="nt">&lt;/li&gt;</span>
                            <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span><span class="nt">&gt;</span>link2<span class="nt">&lt;/li&gt;</span>
                    <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/li&gt;</span>
            <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
                Forms
                <span class="nt">&lt;ul</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span><span class="nt">&gt;</span>form1<span class="nt">&lt;/li&gt;</span>
                    <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span><span class="nt">&gt;</span>form2<span class="nt">&lt;/li&gt;</span>
                    <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span><span class="nt">&gt;</span>form3<span class="nt">&lt;/li&gt;</span>
                <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/li&gt;</span>
            <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"menuitem"</span><span class="nt">&gt;</span>Tables<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre>

</figure>
<br>
  <br>
<figure class="code ">
  <figcaption>Fragmento de Código: CSS</figcaption>
<pre class="highlight css"><span class="nf">#appmenu</span> <span class="p">{</span>
    <span class="nl">width</span><span class="p">:</span><span class="m">80</span><span class="err">%</span><span class="p">;</span>
    <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
    <span class="nl">margin</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
    <span class="nl">padding</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
    <span class="nl">color</span><span class="p">:</span> <span class="m">#fff</span><span class="p">;</span>
    <span class="nl">background-color</span><span class="p">:</span> <span class="m">#369</span><span class="p">;</span>
    <span class="nl">padding</span><span class="p">:</span> <span class="m">.25em</span><span class="p">;</span>
<span class="p">}</span>

<span class="nf">#appmenu</span> <span class="nt">li</span> <span class="p">{</span>
    <span class="nl">white-space</span><span class="p">:</span> <span class="nb">nowrap</span><span class="p">;</span>
    <span class="nl">display</span><span class="p">:</span><span class="nb">block</span><span class="p">;</span>
    <span class="nl">padding</span><span class="p">:</span> <span class="m">.25em</span> <span class="m">.75em</span><span class="p">;</span>
    <span class="nl">border</span><span class="p">:</span> <span class="m">1px</span> <span class="nb">solid</span> <span class="m">#fff</span><span class="p">;</span>
<span class="p">}</span>

<span class="nf">#appmenu</span> <span class="o">&gt;</span> <span class="nt">li</span> <span class="p">{</span>
    <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
    <span class="nl">background-color</span><span class="p">:</span> <span class="m">#036</span><span class="p">;</span>
    <span class="nl">text-align</span><span class="p">:</span> <span class="nb">center</span><span class="p">;</span>
    <span class="nl">position</span><span class="p">:</span><span class="nb">relative</span><span class="p">;</span>
    <span class="nl">cursor</span><span class="p">:</span> <span class="nb">pointer</span><span class="p">;</span>
<span class="p">}</span>

<span class="nf">#appmenu</span> <span class="nd">:hover</span><span class="o">,</span>
<span class="nf">#appmenu</span> <span class="nd">:focus</span> <span class="p">{</span>
    <span class="nl">background-color</span><span class="p">:</span> <span class="m">#fff</span><span class="p">;</span>
    <span class="nl">color</span><span class="p">:</span> <span class="m">#036</span><span class="p">;</span>
    <span class="nl">border</span><span class="p">:</span> <span class="m">1px</span> <span class="nb">solid</span> <span class="m">#036</span><span class="p">;</span>
    <span class="nl">text-decoration</span><span class="p">:</span> <span class="nb">underline</span><span class="p">;</span>
<span class="p">}</span>

<span class="nf">#appmenu</span> <span class="nd">:hover</span> <span class="nt">li</span><span class="o">,</span>
<span class="nf">#appmenu</span> <span class="nd">:focus</span> <span class="nt">li</span> <span class="p">{</span>
    <span class="nl">color</span><span class="p">:</span> <span class="m">#fff</span><span class="p">;</span>
    <span class="nl">background-color</span><span class="p">:</span> <span class="m">#036</span><span class="p">;</span>
<span class="p">}</span>

<span class="nf">#appmenu</span> <span class="o">&gt;</span> <span class="nt">li</span> <span class="o">&gt;</span> <span class="nt">ul</span> <span class="p">{</span>
    <span class="nl">display</span><span class="p">:</span> <span class="nb">none</span><span class="p">;</span>
    <span class="nl">position</span><span class="p">:</span><span class="nb">absolute</span><span class="p">;</span>
    <span class="nl">left</span><span class="p">:</span><span class="m">0</span><span class="p">;</span>
    <span class="nl">right</span><span class="p">:</span><span class="m">0</span><span class="p">;</span>
    <span class="nl">top</span><span class="p">:</span><span class="m">100</span><span class="err">%</span><span class="p">;</span>
    <span class="nl">padding</span><span class="p">:</span><span class="m">0</span><span class="p">;</span>
    <span class="nl">margin</span><span class="p">:</span><span class="m">0</span><span class="p">;</span>
    <span class="nl">background-color</span><span class="p">:</span> <span class="m">#036</span><span class="p">;</span>
    <span class="nl">width</span><span class="p">:</span> <span class="m">200</span><span class="err">%</span><span class="p">;</span>
    <span class="nl">text-align</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
<span class="p">}</span>

<span class="nf">#appmenu</span> <span class="o">&gt;</span> <span class="nt">li</span><span class="o">[</span><span class="nt">aria-expanded</span><span class="o">=</span><span class="err">"</span><span class="nt">true</span><span class="err">"</span><span class="o">]</span> <span class="o">&gt;</span> <span class="nt">ul</span> <span class="p">{</span>
    <span class="nl">display</span><span class="p">:</span><span class="nb">block</span><span class="p">;</span>
<span class="p">}</span>
</pre>

</figure>
<br>
  <br>
<figure class="code ">
  <figcaption>Fragmento de Código: JavaScript</figcaption>
<pre class="highlight javascript"><span class="kd">var</span> <span class="nx">appsMenuItems</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="s1">'#appmenu &gt; li'</span><span class="p">);</span>
<span class="kd">var</span> <span class="nx">subMenuItems</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="s1">'#appmenu &gt; li li'</span><span class="p">);</span>
<span class="kd">var</span> <span class="nx">keys</span> <span class="o">=</span> <span class="p">{</span>
    <span class="na">tab</span><span class="p">:</span>    <span class="mi">9</span><span class="p">,</span>
    <span class="na">enter</span><span class="p">:</span>  <span class="mi">13</span><span class="p">,</span>
    <span class="na">esc</span><span class="p">:</span>    <span class="mi">27</span><span class="p">,</span>
    <span class="na">space</span><span class="p">:</span>  <span class="mi">32</span><span class="p">,</span>
    <span class="na">left</span><span class="p">:</span>   <span class="mi">37</span><span class="p">,</span>
    <span class="na">up</span><span class="p">:</span>     <span class="mi">38</span><span class="p">,</span>
    <span class="na">right</span><span class="p">:</span>  <span class="mi">39</span><span class="p">,</span>
    <span class="na">down</span><span class="p">:</span>   <span class="mi">40</span>
<span class="p">};</span>
<span class="kd">var</span> <span class="nx">currentIndex</span><span class="p">,</span> <span class="nx">subIndex</span><span class="p">;</span>

<span class="kd">var</span> <span class="nx">gotoIndex</span> <span class="o">=</span> <span class="kd">function</span><span class="p">(</span><span class="nx">idx</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">if</span> <span class="p">(</span><span class="nx">idx</span> <span class="o">==</span> <span class="nx">appsMenuItems</span><span class="p">.</span><span class="nx">length</span><span class="p">)</span> <span class="p">{</span>
        <span class="nx">idx</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span>
    <span class="p">}</span> <span class="k">else</span> <span class="k">if</span> <span class="p">(</span><span class="nx">idx</span> <span class="o">&lt;</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span>
        <span class="nx">idx</span> <span class="o">=</span> <span class="nx">appsMenuItems</span><span class="p">.</span><span class="nx">length</span> <span class="o">-</span> <span class="mi">1</span><span class="p">;</span>
    <span class="p">}</span>
    <span class="nx">appsMenuItems</span><span class="p">[</span><span class="nx">idx</span><span class="p">].</span><span class="nx">focus</span><span class="p">();</span>
    <span class="nx">currentIndex</span> <span class="o">=</span> <span class="nx">idx</span><span class="p">;</span>
<span class="p">};</span>

<span class="kd">var</span> <span class="nx">gotoSubIndex</span> <span class="o">=</span> <span class="kd">function</span> <span class="p">(</span><span class="nx">menu</span><span class="p">,</span> <span class="nx">idx</span><span class="p">)</span> <span class="p">{</span>
    <span class="kd">var</span> <span class="nx">items</span> <span class="o">=</span> <span class="nx">menu</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="s1">'li'</span><span class="p">);</span>
    <span class="k">if</span> <span class="p">(</span><span class="nx">idx</span> <span class="o">==</span> <span class="nx">items</span><span class="p">.</span><span class="nx">length</span><span class="p">)</span> <span class="p">{</span>
        <span class="nx">idx</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span>
    <span class="p">}</span> <span class="k">else</span> <span class="k">if</span> <span class="p">(</span><span class="nx">idx</span> <span class="o">&lt;</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span>
        <span class="nx">idx</span> <span class="o">=</span> <span class="nx">items</span><span class="p">.</span><span class="nx">length</span> <span class="o">-</span> <span class="mi">1</span><span class="p">;</span>
    <span class="p">}</span>
    <span class="nx">items</span><span class="p">[</span><span class="nx">idx</span><span class="p">].</span><span class="nx">focus</span><span class="p">();</span>
    <span class="nx">subIndex</span> <span class="o">=</span> <span class="nx">idx</span><span class="p">;</span>
<span class="p">}</span>

<span class="nb">Array</span><span class="p">.</span><span class="nx">prototype</span><span class="p">.</span><span class="nx">forEach</span><span class="p">.</span><span class="nx">call</span><span class="p">(</span><span class="nx">appsMenuItems</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span><span class="nx">el</span><span class="p">,</span> <span class="nx">i</span><span class="p">){</span>
        <span class="k">if</span> <span class="p">(</span><span class="mi">0</span> <span class="o">==</span> <span class="nx">i</span><span class="p">)</span> <span class="p">{</span>
            <span class="nx">el</span><span class="p">.</span><span class="nx">setAttribute</span><span class="p">(</span><span class="s1">'tabindex'</span><span class="p">,</span> <span class="s1">'0'</span><span class="p">);</span>
            <span class="nx">el</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s2">"focus"</span><span class="p">,</span> <span class="kd">function</span><span class="p">()</span> <span class="p">{</span>
                <span class="nx">currentIndex</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span>
            <span class="p">});</span>
        <span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
            <span class="nx">el</span><span class="p">.</span><span class="nx">setAttribute</span><span class="p">(</span><span class="s1">'tabindex'</span><span class="p">,</span> <span class="s1">'-1'</span><span class="p">);</span>
        <span class="p">}</span>
        <span class="nx">el</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s2">"focus"</span><span class="p">,</span> <span class="kd">function</span><span class="p">()</span> <span class="p">{</span>
            <span class="nx">subIndex</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span>
            <span class="nb">Array</span><span class="p">.</span><span class="nx">prototype</span><span class="p">.</span><span class="nx">forEach</span><span class="p">.</span><span class="nx">call</span><span class="p">(</span><span class="nx">appsMenuItems</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span><span class="nx">el</span><span class="p">,</span> <span class="nx">i</span><span class="p">){</span>
                <span class="nx">el</span><span class="p">.</span><span class="nx">setAttribute</span><span class="p">(</span><span class="s1">'aria-expanded'</span><span class="p">,</span> <span class="s2">"false"</span><span class="p">);</span>
            <span class="p">});</span>
        <span class="p">});</span>
        <span class="nx">el</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s2">"click"</span><span class="p">,</span>  <span class="kd">function</span><span class="p">(</span><span class="nx">event</span><span class="p">){</span>
            <span class="k">if</span> <span class="p">(</span><span class="k">this</span><span class="p">.</span><span class="nx">getAttribute</span><span class="p">(</span><span class="s1">'aria-expanded'</span><span class="p">)</span> <span class="o">==</span> <span class="s1">'false'</span> <span class="o">||</span> <span class="k">this</span><span class="p">.</span><span class="nx">getAttribute</span><span class="p">(</span><span class="s1">'aria-expanded'</span><span class="p">)</span> <span class="o">==</span>  <span class="kc">null</span><span class="p">)</span> <span class="p">{</span>
                <span class="k">this</span><span class="p">.</span><span class="nx">setAttribute</span><span class="p">(</span><span class="s1">'aria-expanded'</span><span class="p">,</span> <span class="s2">"true"</span><span class="p">);</span>
            <span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
                <span class="k">this</span><span class="p">.</span><span class="nx">setAttribute</span><span class="p">(</span><span class="s1">'aria-expanded'</span><span class="p">,</span> <span class="s2">"false"</span><span class="p">);</span>
            <span class="p">}</span>
            <span class="nx">event</span><span class="p">.</span><span class="nx">preventDefault</span><span class="p">();</span>
            <span class="k">return</span> <span class="kc">false</span><span class="p">;</span>
        <span class="p">});</span>
        <span class="nx">el</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s2">"keydown"</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span><span class="nx">event</span><span class="p">)</span> <span class="p">{</span>
            <span class="k">switch</span> <span class="p">(</span><span class="nx">event</span><span class="p">.</span><span class="nx">keyCode</span><span class="p">)</span> <span class="p">{</span>
                <span class="k">case</span> <span class="nx">keys</span><span class="p">.</span><span class="nl">right</span><span class="p">:</span>
                    <span class="nx">gotoIndex</span><span class="p">(</span><span class="nx">currentIndex</span> <span class="o">+</span> <span class="mi">1</span><span class="p">);</span>
                    <span class="k">break</span><span class="p">;</span>
                <span class="k">case</span> <span class="nx">keys</span><span class="p">.</span><span class="nl">left</span><span class="p">:</span>
                    <span class="nx">gotoIndex</span><span class="p">(</span><span class="nx">currentIndex</span> <span class="o">-</span> <span class="mi">1</span><span class="p">);</span>
                    <span class="k">break</span><span class="p">;</span>
                <span class="k">case</span> <span class="nx">keys</span><span class="p">.</span><span class="nl">tab</span><span class="p">:</span>
                    <span class="k">if</span> <span class="p">(</span><span class="nx">event</span><span class="p">.</span><span class="nx">shiftKey</span><span class="p">)</span> <span class="p">{</span>
                        <span class="nx">gotoIndex</span><span class="p">(</span><span class="nx">currentIndex</span> <span class="o">-</span> <span class="mi">1</span><span class="p">);</span>
                    <span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
                        <span class="nx">gotoIndex</span><span class="p">(</span><span class="nx">currentIndex</span> <span class="o">+</span> <span class="mi">1</span><span class="p">);</span>
                    <span class="p">}</span>
                    <span class="k">break</span><span class="p">;</span>
                <span class="k">case</span> <span class="nx">keys</span><span class="p">.</span><span class="nl">enter</span><span class="p">:</span>
                <span class="k">case</span> <span class="nx">keys</span><span class="p">.</span><span class="nl">down</span><span class="p">:</span>
                    <span class="k">this</span><span class="p">.</span><span class="nx">click</span><span class="p">();</span>
                    <span class="nx">subindex</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span>
                    <span class="nx">gotoSubIndex</span><span class="p">(</span><span class="k">this</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'ul'</span><span class="p">),</span> <span class="mi">0</span><span class="p">);</span>
                    <span class="k">break</span><span class="p">;</span>
                <span class="k">case</span> <span class="nx">keys</span><span class="p">.</span><span class="nl">up</span><span class="p">:</span>
                    <span class="k">this</span><span class="p">.</span><span class="nx">click</span><span class="p">();</span>
                    <span class="kd">var</span> <span class="nx">submenu</span> <span class="o">=</span> <span class="k">this</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'ul'</span><span class="p">);</span>
                    <span class="nx">subindex</span> <span class="o">=</span> <span class="nx">submenu</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="s1">'li'</span><span class="p">).</span><span class="nx">length</span> <span class="o">-</span> <span class="mi">1</span><span class="p">;</span>
                    <span class="nx">gotoSubIndex</span><span class="p">(</span><span class="nx">submenu</span><span class="p">,</span> <span class="nx">subindex</span><span class="p">);</span>
                    <span class="k">break</span><span class="p">;</span>
                <span class="k">case</span> <span class="nx">keys</span><span class="p">.</span><span class="nl">esc</span><span class="p">:</span>
                    <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'a[href="#related"]'</span><span class="p">).</span><span class="nx">focus</span><span class="p">();</span>
            <span class="p">}</span>
            <span class="nx">event</span><span class="p">.</span><span class="nx">preventDefault</span><span class="p">();</span>
        <span class="p">});</span>
<span class="p">});</span>

<span class="nb">Array</span><span class="p">.</span><span class="nx">prototype</span><span class="p">.</span><span class="nx">forEach</span><span class="p">.</span><span class="nx">call</span><span class="p">(</span><span class="nx">subMenuItems</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span><span class="nx">el</span><span class="p">,</span> <span class="nx">i</span><span class="p">){</span>
    <span class="nx">el</span><span class="p">.</span><span class="nx">setAttribute</span><span class="p">(</span><span class="s1">'tabindex'</span><span class="p">,</span> <span class="s1">'-1'</span><span class="p">);</span>
    <span class="nx">el</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s2">"keydown"</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span><span class="nx">event</span><span class="p">)</span> <span class="p">{</span>
            <span class="k">switch</span> <span class="p">(</span><span class="nx">event</span><span class="p">.</span><span class="nx">keyCode</span><span class="p">)</span> <span class="p">{</span>
                <span class="k">case</span> <span class="nx">keys</span><span class="p">.</span><span class="nl">tab</span><span class="p">:</span>
                    <span class="k">if</span> <span class="p">(</span><span class="nx">event</span><span class="p">.</span><span class="nx">shiftKey</span><span class="p">)</span> <span class="p">{</span>
                        <span class="nx">gotoIndex</span><span class="p">(</span><span class="nx">currentIndex</span> <span class="o">-</span> <span class="mi">1</span><span class="p">);</span>
                    <span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
                        <span class="nx">gotoIndex</span><span class="p">(</span><span class="nx">currentIndex</span> <span class="o">+</span> <span class="mi">1</span><span class="p">);</span>
                    <span class="p">}</span>
                    <span class="k">break</span><span class="p">;</span>
                <span class="k">case</span> <span class="nx">keys</span><span class="p">.</span><span class="nl">right</span><span class="p">:</span>
                    <span class="nx">gotoIndex</span><span class="p">(</span><span class="nx">currentIndex</span> <span class="o">+</span> <span class="mi">1</span><span class="p">);</span>
                    <span class="k">break</span><span class="p">;</span>
                <span class="k">case</span> <span class="nx">keys</span><span class="p">.</span><span class="nl">left</span><span class="p">:</span>
                    <span class="nx">gotoIndex</span><span class="p">(</span><span class="nx">currentIndex</span> <span class="o">-</span> <span class="mi">1</span><span class="p">);</span>
                    <span class="k">break</span><span class="p">;</span>
                <span class="k">case</span> <span class="nx">keys</span><span class="p">.</span><span class="nl">esc</span><span class="p">:</span>
                    <span class="nx">gotoIndex</span><span class="p">(</span><span class="nx">currentIndex</span><span class="p">);</span>
                    <span class="k">break</span><span class="p">;</span>
                <span class="k">case</span> <span class="nx">keys</span><span class="p">.</span><span class="nl">down</span><span class="p">:</span>
                    <span class="nx">gotoSubIndex</span><span class="p">(</span><span class="k">this</span><span class="p">.</span><span class="nx">parentNode</span><span class="p">,</span> <span class="nx">subIndex</span> <span class="o">+</span> <span class="mi">1</span><span class="p">);</span>
                    <span class="k">break</span><span class="p">;</span>
                <span class="k">case</span> <span class="nx">keys</span><span class="p">.</span><span class="nl">up</span><span class="p">:</span>
                    <span class="nx">gotoSubIndex</span><span class="p">(</span><span class="k">this</span><span class="p">.</span><span class="nx">parentNode</span><span class="p">,</span> <span class="nx">subIndex</span> <span class="o">-</span> <span class="mi">1</span><span class="p">);</span>
                    <span class="k">break</span><span class="p">;</span>
                <span class="k">case</span> <span class="nx">keys</span><span class="p">.</span><span class="nl">enter</span><span class="p">:</span>
                <span class="k">case</span> <span class="nx">keys</span><span class="p">.</span><span class="nl">space</span><span class="p">:</span>
                    <span class="nx">alert</span><span class="p">(</span><span class="k">this</span><span class="p">.</span><span class="nx">innerText</span><span class="p">);</span>
                    <span class="k">break</span><span class="p">;</span>
            <span class="p">}</span>
            <span class="nx">event</span><span class="p">.</span><span class="nx">preventDefault</span><span class="p">();</span>
            <span class="nx">event</span><span class="p">.</span><span class="nx">stopPropagation</span><span class="p">();</span>
            <span class="k">return</span> <span class="kc">false</span><span class="p">;</span>
        <span class="p">});</span>
    <span class="nx">el</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s2">"click"</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span><span class="nx">event</span><span class="p">)</span> <span class="p">{</span>
            <span class="nx">alert</span><span class="p">(</span><span class="k">this</span><span class="p">.</span><span class="nx">innerHTML</span><span class="p">);</span>
            <span class="nx">event</span><span class="p">.</span><span class="nx">preventDefault</span><span class="p">();</span>
            <span class="nx">event</span><span class="p">.</span><span class="nx">stopPropagation</span><span class="p">();</span>
            <span class="k">return</span> <span class="kc">false</span><span class="p">;</span>
        <span class="p">});</span>
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


