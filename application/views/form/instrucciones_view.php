<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        
        <section class="panel">
            <header class="panel-heading">
                 <center> Intrucciones de Formulario </center></b>
            </header>
            <div class="panel-body">
                <div class="row">

    </div>
    <div class="art-postcontent"><br>
        
        <h5 align="center">¿Por qué son importantes las instrucciones dentro de un control de formulario?</h5>
        <p>
        Suministrar instrucciones para ayudar a los usuarios a comprender cómo completar los formularios y a utilizar los controles de formulario individuales, es una pauta básica de accesibilidad y de usabilidad que debe tener un sitio web.</p>
        <p>Si se realizan las instrucciones correctamente del código, estas instrucciones van a permitir que los lectores de pantalla lean en voz alta los controles de formulario, además si los ejemplos suministrados de como completar un campo del formulario son claros, facilita que una persona con alguna discapacidad cognitiva o un retraso mental, pueda entender cómo llenar el formulario. </p>
        
<br>
<h5>Instrucciones usando labels</h5>

<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<form method="post" action="#">
    <div>
        <label for="datebirth">Fecha de Nacimiento (MM/YYYY): </label> <input type="text" name="datebirth" id="datebirth">
    </div>
</form>


  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"datebirth"</span><span class="nt">&gt;</span>Fecha de Nacimiento (MM/YYYY): <span class="nt">&lt;/label&gt;</span> <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"datebirth"</span> <span class="na">id=</span><span class="s">"datebirth"</span><span class="nt">&gt;</span>
</pre>

</figure>
<br>




<h5>Instrucciones usando aria-labelledby</h5>

<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<style>
    #ex3 span {
        display: inline-block;
        vertical-align: top;
    }
    #ex3 span span {
        display: block;
        font-size: 0.8em;
    }
</style>
<form method="post" action="#" id="ex3">
    <div>
        <label id="expLabel" for="expire4" tabindex="-1">Fecha de Nacimiento:</label>
        <span>
            <input type="text" name="datebrith" id="expire4" aria-labelledby="expLabel expDesc2">
            <span id="expDesc2" tabindex="-1">MM/YYYY</span>
        </span>
    </div>
</form>


  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;label</span> <span class="na">id=</span><span class="s">"expLabel"</span> <span class="na">for=</span><span class="s">"datebrith"</span> <span class="na">tabindex=</span><span class="s">"-1"</span><span class="nt">&gt;</span>Fecha de Nacimiento:<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;span&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"datebrith"</span> <span class="na">id=</span><span class="s">"datebrith"</span> <span class="na">aria-labelledby=</span><span class="s">"expLabel expDesc"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"expDesc"</span> <span class="na">tabindex=</span><span class="s">"-1"</span><span class="nt">&gt;</span>MM/YYYY<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>
</pre>

</figure>
<br>



<h5>Instrucciones usando aria-describedby</h5>

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;label</span> <span class="na">id=</span><span class="s">"expLabel"</span> <span class="na">for=</span><span class="s">"datebirth"</span><span class="nt">&gt;</span>Fecha de Nacimiento:<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;span&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"datebirth"</span> <span class="na">id=</span><span class="s">"datebirth"</span> <span class="na">aria-labelledby=</span><span class="s">"expLabel"</span> <span class="na">aria-describedby=</span><span class="s">"expDesc"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"expDesc"</span><span class="nt">&gt;</span>MM/YYYY<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>
</pre>

</figure>
<br>



<h5>Instrucciones usando Placeholder text</h5>
        
	<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<form method="post" action="#">
    <div>
        <label for="search">Buscar:</label> <input type="text" name="search" id="search" placeholder="ej. Accesibilidad">
    </div>
    <div>
        <label for="email">Correo Electrónico : </label> <input type="text" name="email" id="email" placeholder="gpca@Ejemplo.com">
    </div>
</form>
<style>
::-webkit-input-placeholder {
     color: #777;
     opacity: 1;
}

:-moz-placeholder { /* Firefox 18- */
     color: #777;
     opacity: 1;
}

::-moz-placeholder {  /* Firefox 19+ */
     color: #777;
     opacity: 1;
}

:-ms-input-placeholder {
     color: #777;
     opacity: 1;
}
</style>


  </div></figure>


<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"search"</span><span class="nt">&gt;</span>Buscar:<span class="nt">&lt;/label&gt;</span> <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"search"</span> <span class="na">id=</span><span class="s">"search"</span> <span class="na">placeholder=</span><span class="s">"ej. Accesibilidad"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"email"</span><span class="nt">&gt;</span>Correo Electrónico : <span class="nt">&lt;/label&gt;</span> <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"email"</span> <span class="na">id=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"gpca@example.com"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
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


