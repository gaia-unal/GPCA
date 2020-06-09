<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        
        <section class="panel">
            <header class="panel-heading">
                 <center> Enlaces Accesibles </center></b>
            </header>
            <div class="panel-body">
                <div class="row">

    </div>
    <div class="art-postcontent"><br>
        
        <h5 align="center">¿Por qué son importantes las enlaces?</h5>
        <p>
       Los enlaces son un elemento interactivo común en los sitios web, que permiten que los usuarios puedan navegar de una página a otra haciendo clic en una imagen o un texto.</p>
        <p>Dada su importancia dentro de los sitios web, los enlaces al igual que un encabezado u otros elementos de texto, debe de tener su nombre automáticamente en su texto, debido a muchos dispositivos de asistencia tecnológica presentan listas de enlaces aparte documento, lo cual permite que las personas con discapacidad visual naveguen por estos enlaces, por lo que los nombres de los enlaces deben ser cortos y claros para que los lectores de pantalla los lean más fácil, además los usuarios que trabajan con reconocimiento de voz pueden acceder a los enlaces diciendo la palabra ‘’Clic’’  y después el nombre del enlace al cual va acceder.</p>
        <p>Por lo cual dentro de la estructura HTML existen dos elementos para los enlaces href y span. </p>
        <figure class="code ">

  <figcaption>Fragmento de Código: HTML</figcaption>
    <pre class="highlight html">
        <span class="nt">&lt;p&gt;&lt;a</span> <span class="na">href=</span><span class="s">"…"</span><span> </span><span class="na">onclick=</span><span class="s">"OnLinkClick()"</span><span class="nt">&gt;</span>Enlace Accesible<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
        <span class="nt">&lt;p&gt;&lt;span</span> <span class="na">class=</span><span class="s">"link"</span><span></span> <span class="na">tabindex=</span><span class="s">"0"</span><span> </span><span class="na">onclick=</span><span class="s">"OnLinkClick()"</span><span class="nt">&gt;</span>Enlace no Accesible<span class="nt">&lt;/span&gt;&lt;/p&gt;</span>
    </pre>

    </figure>

    <p>La diferencia entre usar o no uno de estos elementos es que el atributo href es reconocido por los lectores de pantalla, mientras que la etiqueta span no.</p>
        
        
</div>
    <div class="cleared"></div>
</div>

        </section>


        <div class="row"  id="result">

        </div>
    </section>
</section>
<!--main content end-->


