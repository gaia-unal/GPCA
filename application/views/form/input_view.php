<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        
        <section class="panel">
            <header class="panel-heading">
                 <center> Validación de input </center></b>
            </header>
            <div class="panel-body">
                <div class="row">

    </div>
    <div class="art-postcontent"><br>
        
       
        <p>Dado que las características de accesibilidad web no son solo para ayudar a personas en situación de discapacidad, sino también a personas no nativas digitales, entonces los formularios dentro de un sirio web debe de tener validaciones de la entrada de datos para así evitar que los usuarios cometan errores en el diligenciamiento de los formularios.</p>

<p>A continuación se listaran algunos ejemplos básicos de validación de entradas de formulario:</p>

<br>

<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<form method="post" action="<?php echo base_url()?>usuario/input">
  <div>
    <label for="name">Nombre (Obligatorio): </label> <input type="text" name="name" id="name" required aria-required="true">
    <input type="submit" value="Submit">
  </div>
</form>


  </div></figure>

<figure class="code ">
  <figcaption>Code snippet: </figcaption>
<pre class="highlight html"><span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"name"</span><span class="nt">&gt;</span>Nombre (Obligatorio): <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"name"</span> <span class="na">id=</span><span class="s">"name"</span> <span class="na">required</span> <span class="na">aria-required=</span><span class="s">"true"</span><span class="nt">&gt;</span>
</pre>

</figure>

<br>

<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<form method="post" action="../../beyond/" id="valform">
  <div>
    <div><label for="email">Correo Electrónico: </label></div>
    <div><input type="email" name="email" id="email"></div>
  </div>
  <div>
    <div><label for="name">Nombre: </label></div>
    <div><input type="name" name="name" id="name"></div>
  </div>
  <div>
    <div><label for="age">Edad: </label></div>
    <div><input type="age" name="age" id="age" min="0" max="100" step="10" value="0"></div>
  </div>
  <div>
    <div><label for="range">Rango: </label></div>
    <div><input type="range" name="range" id="range" min="0" max="100" step="1" value="0"></div>
  </div>
  <div>
    <div><label for="date">Fecha: </label></div>
    <div><input type="date" name="date" id="date"></div>
  </div>
  <div>
    <div><label for="time">Hora: </label></div>
    <div><input type="time" name="time" id="time"></div>
  </div>
  <div>
    <div></div>
    <div><input type="submit" value="Submit"></div>
  </div>
</form>

<style>
  #valform {display:table}
  #valform>div {display:table-row}
  #valform>div>div {display:table-cell; padding: .1em;}
</style>


  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;div&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"email"</span><span class="nt">&gt;</span>Correo Electrónico: <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">name=</span><span class="s">"email"</span> <span class="na">id=</span><span class="s">"email"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"name"</span><span class="nt">&gt;</span>Nombre: <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"name"</span> <span class="na">name=</span><span class="s">"name"</span> <span class="na">id=</span><span class="s">"name"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"age"</span><span class="nt">&gt;</span>Edad: <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"age"</span> <span class="na">name=</span><span class="s">"age"</span> <span class="na">id=</span><span class="s">"age"</span> <span class="na">min=</span><span class="s">"0"</span> <span class="na">max=</span><span class="s">"100"</span> <span class="na">step=</span><span class="s">"1"</span> <span class="na">value=</span><span class="s">"0"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"range"</span><span class="nt">&gt;</span>Rango: <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"range"</span> <span class="na">name=</span><span class="s">"range"</span> <span class="na">id=</span><span class="s">"range"</span> <span class="na">min=</span><span class="s">"0"</span> <span class="na">max=</span><span class="s">"100"</span> <span class="na">step=</span><span class="s">"10"</span> <span class="na">value=</span><span class="s">"0"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"date"</span><span class="nt">&gt;</span>Fecha: <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"date"</span> <span class="na">name=</span><span class="s">"date"</span> <span class="na">id=</span><span class="s">"date"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"time"</span><span class="nt">&gt;</span>Hora: <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"time"</span> <span class="na">name=</span><span class="s">"time"</span> <span class="na">id=</span><span class="s">"time"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre>

</figure>

<br>

<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<form method="post" action="../../beyond/">
  <div>
    <label for="license">id, del producto (0000-XXXX-9999):</label> <input type="text" id="license" pattern="[A-ZÖÄÜ]{1,3}( )[A-Z]{2,4}( )[0-9]{1,4}" />
  </div>
  <div>
  </div>
</form>


  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;div&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">id=</span><span class="s">"license"</span>
    <span class="na">pattern=</span><span class="s">"[A-ZÖÄÜ]{1,3}( )[A-Z]{2,4}( )[0-9]{1,4}"</span>
  <span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre>





</div>
    <div class="cleared"></div>
</div>

        </section>


        <div class="row"  id="result">

        </div>
    </section>
</section>
<!--main content end-->


