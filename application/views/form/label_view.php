<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        
        <section class="panel">
            <header class="panel-heading">
                 <center> Controles Label </center></b>
            </header>
            <div class="panel-body">
                <div class="row">

    </div>
    <div class="art-postcontent"><br>
        
        <p>
        Se utiliza el elemento <code>&lt;label&gt;</code> y en algunos casos otros mecanismos como WAI-ARIA, el atributo title, etc; para identificar cada uno de los controles del formulario </p>
        <p>
        En las páginas web se proporcionan etiquetas para identificar todos los controles de formulario, los cuales incluyen campos de texto, campos de verificación, botones de opción y menús desplegables; para los cuales en la mayoría de los casos se usa el atributo  <code>&lt;label&gt;</code></p>
        <p>Un etiqueta label y un control de formulario deben estar asociados entre sí de forma implícita o explicita. Lo cual permite que las tecnologías asistidas identifiquen el label correcto cuando se presenta un control de formulario.</p>


        <h5>Asociación de Labels de Forma Explicita</h5>

        <p>Siempre que sea posible, use el elemento label para asociar explícitamente textos con elementos del formulario. El atributo for de la etiqueta debe coincidir exactamente con el id del control de formulario</p>

        <figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<form method="post" action="#">
  <label for="name">Nombre: </label>
  <input type="text" name="name" id="name"><br>
  <input type="checkbox" name="recordar" id="recordar">
  <label for="recordar">Recordar Nombre</label>
</form>


  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: HTML</figcaption>
<pre class="highlight html"><span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"name"</span><span class="nt">&gt;</span> Nombre:<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"name"</span> <span class="na">id=</span><span class="s">"name"</span><span class="nt">&gt;&lt;br&gt;</span>

<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">name=</span><span class="s">"recordar"</span> <span class="na">id=</span><span class="s">"recordar"</span><span class="nt">&gt;</span>
<span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"recordar"</span><span class="nt">&gt;</span>Recordar Nombre<span class="nt">&lt;/label&gt;</span>
</pre>

</figure>

<br>

<p>
   Un label ayuda a comprender mejor el propósito de un control de formulario; sin embargo en algunos casos el propósito de los controles de formulario es claro a plena vista por lo cual se puede ocultar el label, teniendo claro que aun así dentro del código debe proporcionarse para soportar otros tipos de interacción, como lectores de pantalla y entradas de voz. 

</p>
<p>A continuación se mostraran algunos ejemplos en los cuales los controles de formulario no necesitan que las etiquetas que lo precedan sean visibles:</p>
<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<form method="post" action="#">
  <div>
    <label for="search" class="visuallyhidden">Busqueda: </label>
    <input type="text" name="busqueda" id="busqueda">
    <button type="button">Busqueda</button>
  </div>
</form>


  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"busqueda"</span> <span class="na">class=</span><span class="s">"visuallyhidden"</span><span class="nt">&gt;</span>Busqueda: <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"busqueda"</span> <span class="na">id=</span><span class="s">"busqueda"</span><span class="nt">&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Busqueda<span class="nt">&lt;/button&gt;</span>
</pre>

</figure>
 <br>
 <p>Usando el atributo aria-label.</p> 

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"busqueda"</span> <span class="na">aria-label=</span><span class="s">"Busqueda"</span><span class="nt">&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Busqueda<span class="nt">&lt;/button&gt;</span>
</pre>

</figure>
<br>
<p>Usando el atributo title</p>

<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<form method="post" action="#">
  <div>
    <input title="Search" type="text" name="busqueda">
    <button type="button">Busqueda</button>
  </div>
</form>


  </div></figure>

  <figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;input</span> <span class="na">title=</span><span class="s">"Busqueda"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"busqueda"</span><span class="nt">&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Busqueda<span class="nt">&lt;/button&gt;</span>
</pre>

</figure>
<br>

<h5>Asociación de Labels de Forma Implícita</h5>
<p>En Algunas ocasiones, los controles de formulario no pueden etiquetarse explícitamente, dado que es posible que un desarrollador no conozca el ID de un campo del formulario generado por un script o que el script no genere un ID. En estos casos se usa el elemento label como un contenedor para el control de formulario y el texto del label, de tal forma que los dos se asocian implícitamente.</p>

<figure class="code ">
  <figcaption>Fragmento de Código: HTML</figcaption>
<pre class="highlight html"><span class="nt">&lt;label&gt;</span>
  Nombre:
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"nombre"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">name=</span><span class="s">"recordar"</span><span class="nt">&gt;</span>
  Recordar Nombre
<span class="nt">&lt;/label&gt;</span>
</pre>

</figure>
<br>

<h5>Etiquetas Button</h5>
<p>La etiqueta &lt;button&gt; puede ser utilizada de igual forma que la etiqueta &lt;input&gt;, sin embargo la etiqueta button permite más características de accesibilidad, como por ejemplo al traducir el idioma de la página.</p>


<figure class="code ">
  <figcaption>Fragmento de Código: HTML</figcaption>
<pre class="highlight html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Cancel<span class="nt">&lt;/button&gt;</span>

<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">value=</span><span class="s">"Submit"</span><span class="nt">&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">value=</span><span class="s">"Cancel"</span><span class="nt">&gt;</span>
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


