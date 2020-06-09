<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        
        <section class="panel">
            <header class="panel-heading">
                 <center> Imágenes Accesibles </center></b>
            </header>
            <div class="panel-body">
                <div class="row">

    </div>
    <div class="art-postcontent"><br>
        
        <h5 align="center">¿Por qué son importantes las imágenes?</h5>
        <p>
        Las imágenes son un elemento dentro de los sitios web que puede mejorar la accesibilidad, así como disminuirla, y esto se debe a que las imágenes y los gráficos hacen que el contenido sea más agradable y fácil de entender para muchas personas, y en particular para aquellos con discapacidades cognitivas y de aprendizaje, pero estas a su vez deben contar con un texto alternativo o una descripción que permitan que estas también puedan ser accedidas por personas con discapacidad visual.</p>
        <p>Dentro de una página web es común ver tres tipos de imágenes, imágenes informativas, imágenes complejas e imágenes decorativas; a continuación se mostrara la forma correcta de utilizar estas imágenes.</p>

        <br>
       <h5>Imágenes Informativas</h5>
       <p>Son imágenes como logos, botones o fotos que tienen una descripción corta.</p>

<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<img alt="Escudo nacional de Colombia" src="<?php echo base_url() ?>asset/img/sealColombia.png" />


  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"sealColombia.png"</span> <span class="na">alt=</span><span class="s">"Escudo nacional de Colombia "</span><span class="nt">&gt;</span>
</pre>

</figure>
       
<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<p>Disponible en <a href="http://www.gpca.manizales.unal.edu.co/gpcan/"><img alt="Documento Word" src="<?php echo base_url() ?>asset/img/doc.png" /> (137KB)</a> o en <a href="www.gpca.manizales.unal.edu.co/raim"><img alt="PDF" src="<?php echo base_url() ?>asset/img/pdf.png" /> (137KB)</a> formato.</p>


  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"…"</span><span class="nt">&gt;</span>
        Disponible en
        <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"doc.png"</span> <span class="na">alt=</span><span class="s">"Documento Word"</span> <span class="nt">&gt;</span> (137KB)
    <span class="nt">&lt;/a&gt;</span> o en
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"…"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"pdf.png"</span> <span class="na">alt=</span><span class="s">"PDF"</span><span class="nt">&gt;</span> (137KB)
    <span class="nt">&lt;/a&gt;</span>
    formato.
<span class="nt">&lt;/p&gt;</span>
</pre>

</figure>
<br>

<h5>Imágenes Complejas</h5>
<p>Estas imágenes deben tener una descripción mayor además del alt.</p>

<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <br>
  <div class="box-content">
<img src="<?php echo base_url() ?>asset/img/feevale.png" alt="Logo de la Universidad Feevale" aria-describedby="description">
<br>
<p id="description">
  La Universidad Feevale es una universidad privada ubicada en la ciudad de Novo Hamburgo del estado Rio Grande del Sur en Brasil, esta Universidad fue la anfitriona del congreso CAVA 2015 y en la actualidad mantiene buenas relaciones con la Universidad Nacional de Colombia.
</p>


  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"feevale.png"</span>
     <span class="na">alt=</span><span class="s">"Logo de la Universidad Feevale"</span>
     <span class="na">aria-describedby=</span><span class="s">"description"</span><span class="nt">&gt;</span>
[…]
<span class="nt">&lt;p</span> <span class="na">id=</span><span class="s">"description"</span><span class="nt">&gt;</span>
 La Universidad Feevale es una universidad privada ubicada en la ciudad de Novo Hamburgo del estado Rio Grande del Sur en Brasil, esta Universidad fue la anfitriona del congreso CAVA 2015 y en la actualidad mantiene buenas relaciones con la Universidad Nacional de Colombia.
<span class="nt">&lt;/p&gt;</span>
</pre>

</figure><br>

<h5>Imágenes Decorativas</h5>
<p>Estas imágenes se solo para mejorar la apariencia visual de las páginas web, por lo general van implícitas dentro de los css sin embargo también se usan en el código de la página directamente, estas imágenes por lo general cuenta con un texto alternativo vacío alt="".</p>
<br>
<figure class="sample ">
  <figcaption>Example: </figcaption>
  <div class="box-content">
<p><a href="https://www.google.com.co/search?q=anillo&rlz=1C1NHXL_esCO694CO694&oq=anillo&aqs=chrome..69i57j0l5.1443j0j7&sourceid=chrome&ie=UTF-8"><img alt="" style="vertical-align: middle; margin-right: 1em;" src="<?php echo base_url() ?>asset/img/ring.jpg" /><strong>Anillo</strong></a></p>


  </div></figure>

<figure class="code ">
  <figcaption>Code snippet: </figcaption>
<pre class="highlight html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"https://www.google.com.co/search?q=anillo&rlz=1C1NHXL_esCO694CO694&oq=anillo&aqs=chrome..69i57j0l5.1443j0j7&sourceid=chrome&ie=UTF-8"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"ring.jpg"</span> <span class="na">alt=</span><span class="s">""</span><span class="nt">&gt;</span>
    <span class="nt">&lt;strong&gt;</span> Anillo<span class="nt">&lt;/strong&gt;</span>
<span class="nt">&lt;/a&gt;</span>
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


