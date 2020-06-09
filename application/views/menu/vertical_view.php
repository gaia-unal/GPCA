<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        
        <section class="panel">
            <header class="panel-heading">
                 <center> Menú Vertical </center></b>
            </header>
            <div class="panel-body">
                <div class="row">

    </div>
    <div class="art-postcontent"><br>
        
        <p>
        Un menú Vertical proporciona espacio para una cantidad grande de enlaces, ya que se puede acceder fácilmente a todos los elementos desplazándose por la página.</p>
        <p>
        Un menú Vertical proporciona más espacio para los títulos de las opciones lo cual permite la facilidad de aumentar los tamaños de la fuente del sitio y la traducción a otros idiomas ya que cuando esto pasa los nombres de las opciones tienden a quebrasen o el texto sobreponerse al menú.</p>
        <figure class="code ">
  <figcaption>Fragmento de Código: HTML</figcaption>
    <pre class="highlight html"><span class="nt">&lt;ul&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"nav1"</span><span class="nt">&gt;</span>Menu Usando ARIA<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"nav2"</span><span class="nt">&gt;</span>Menu Horizontal<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"nav3"</span><span class="nt">&gt;</span>Menu Vertical<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"nav4"</span><span class="nt">&gt;</span>Menu Desplegable<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"nav5"</span><span class="nt">&gt;</span>Regresar<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    …
    <span class="nt">&lt;/ul&gt;</span>
    </pre>

    </figure>

    <figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<nav role="navigation" aria-label="Main Navigation" aria-presentation="true" id="verticalnav">
        <ul>
                <li><a href="#samplenav">Menus Usando ARIA</a></li>
                <li><a href="#samplenav">Menu Horizontal</a></li>
                <li><a href="#samplenav">Menu Vertical</a></li>
                <li><a href="#samplenav">Menu Desplegable</a></li>
                <li><a href="#samplenav">Regresar</a></li>
        </ul>
</nav>

<style>
    #verticalnav {
            display:table;
    }
    #verticalnav ul {
            margin: 0;
            padding: 0;
            background-color: #083520;
            color: #fff;
    }
    #verticalnav li {
            display:table-row;
            width: 20%;
            text-align: left;
    }
    #verticalnav a {
            display: block;
            padding: .25em .5em;
            color: #fff;
            border-bottom: 1px solid;
            text-decoration: none;
    }
    #verticalnav a:hover,
    #verticalnav a:focus {
        color: #036;
        background-color: #fff;
        text-decoration: underline;
    }
</style>


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


