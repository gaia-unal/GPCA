<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        
        <section class="panel">
            <header class="panel-heading">
                 <center> Controles de Agrupación</center></b>
            </header>
            <div class="panel-body">
                <div class="row">

    </div>
    <div class="art-postcontent"><br>
        
        <p>
        Agrupar controles de formulario relacionados hace que los formularios sean más comprensibles para todos los usuarios, ya que estos son más fáciles de identificar. El agrupamiento debe llevarse a cabo visualmente y en el código, la técnica para realizar esto es agrupar los elementos utilizando un elemento &lt;fieldset&gt;, luego usar un elemento &lt;legend&gt; para marcar la pregunta. Además, las entradas relacionadas de un elemento &lt;select&gt; se pueden agrupar utilizando &lt;optgroup&gt;.</p>
        <br>

        <h5>Agrupación de controles usando los elementos &lt;fieldset&gt; y &lt;legend&gt;</h5>

        <p>&lt;fieldset&gt;: Este elemento proporciona un contenedor para controles de formulario relacionados.</p>
        <p>&lt;legend&gt;: Este elemento actúa como un encabezado para identificar el grupo. La leyenda de un grupo de controles también puede resaltar los atributos comunes de todos los controles, por ejemplo, para avisar que se requiere todos los campos del grupo.</p>
        <br>

        <h5>Agrupación de radio buttons</h5>
        
        <figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<form method="post" action="#">
<fieldset>
<legend>Tipo de Documento</legend>
  <div>
    <input type="radio" name="format" id="cc" value="cc" checked> <label for="cc">Cedula</label>
  </div>
  <div>
    <input type="radio" name="format" id="pasaporte" value="pasaporte"> <label for="pasaporte">Pasaporte</label>
  </div>
  <div>
    <input type="radio" name="format" id="TI" value="TI"> <label for="TI">Tarjeta de Identidad</label>
  </div>
</fieldset>
</form>

  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;fieldset&gt;</span>
<span class="nt">&lt;legend&gt;</span>Tipo de Documento<span class="nt">&lt;/legend&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"format"</span> <span class="na">id=</span><span class="s">"cc"</span> <span class="na">value=</span><span class="s">"cc"</span> <span class="na">checked</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"cc"</span><span class="nt">&gt;</span>Cedula<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"format"</span> <span class="na">id=</span><span class="s">"pasaporte"</span> <span class="na">value=</span><span class="s">"pasaporte"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"pasaporte"</span><span class="nt">&gt;</span>Pasaporte<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  […]
<span class="nt">&lt;/fieldset&gt;</span>
</pre>

</figure>
<br>

<h5>Agrupación de Checkbox</h5>

<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<form method="post" action="#">
<fieldset>
<legend>Color favorito</legend>
  <div>
    <input type="checkbox" name="azul" id="check_1"> <label for="check_1">Azul</label>
  </div>
  <div>
    <input type="checkbox" name="verde" id="check_2"> <label for="check_2">Verde</label>
  </div>
  <div>
    <input type="checkbox" name="rojo" id="check_3"> <label for="check_3">Rojo</label>
  </div>
</fieldset>
</form>

  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;fieldset&gt;</span>
<span class="nt">&lt;legend&gt;</span>I want to receive<span class="nt">&lt;/legend&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">name=</span><span class="s">"azul"</span> <span class="na">id=</span><span class="s">"check_1"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"check_1"</span><span class="nt">&gt;</span>Azul<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  […]
<span class="nt">&lt;/fieldset&gt;</span>
</pre>

</figure>
<br>

<h5>Agrupación de campos relacionados</h5>

<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<form method="post" action="#">
  <fieldset style="float: left;">
    <legend>Datos Personales:</legend>
    <div>
      <label for="p_name"><span class="visuallyhidden">Personal </span>Nombres:</label><br>
      <input type="text" name="p_name" id="p_name">
    </div>
    <div>
      <label for="p_lastname">Apellidos:</label><br>
      <input type="text" name="p_lastname" id="p_lastname">
    </div>
    <div>
      <label for="p_adsress">Dirección:</label><br>
      <input type="text" name="p_adsress" id="p_adsress">
    </div>
    <div>
      <label for="p_city">Ciudad de Residencia:</label><br>
      <input type="text" name="p_city" id="p_city">
    </div>
    <div>
      <label for="p_email">Correo Electrónico:</label><br>
      <input type="text" name="p_email" id="p_email">
      </div>
  </fieldset>
  <fieldset style="float: left;">
    <legend>Datos de un Familiar:</legend>
    <div>
      <label for="f_name"><span class="visuallyhidden">Family </span>Nombres:</label><br>
      <input type="text" name="f_name" id="f_name">
    </div>
    <div>
      <label for="f_lastname">Apellidos:</label><br>
      <input type="text" name="f_lastname" id="f_lastname">
    </div>
    <div>
      <label for="f_adsress">Dirección:</label><br>
      <input type="text" name="f_adsress" id="f_adsress">
    </div>
    <div>
      <label for="f_city">Ciudad:</label><br>
      <input type="text" name="f_city" id="f_city">
    </div>
    <div>
      <label for="f_email">Correo Electrónico:</label><br>
      <input type="text" name="f_email" id="f_email">
    </div>
  </fieldset>
</form>


  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;fieldset&gt;</span>
  <span class="nt">&lt;legend&gt;</span>Datos Personales:<span class="nt">&lt;/legend&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"p_name"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"visuallyhidden"</span><span class="nt">&gt;</span>Personal <span class="nt">&lt;/span&gt;</span>Nombres:
    <span class="nt">&lt;/label&gt;&lt;br&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"p_name"</span> <span class="na">id=</span><span class="s">"p_name"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"p_lastname"</span><span class="nt">&gt;</span>Apellidos:<span class="nt">&lt;/label&gt;&lt;br&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"p_lastname"</span> <span class="na">id=</span><span class="s">"p_lastname"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  […]
<span class="nt">&lt;/fieldset&gt;</span>
<span class="nt">&lt;fieldset&gt;</span>
  <span class="nt">&lt;legend&gt;</span>Datos de un Familiar:<span class="nt">&lt;/legend&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"f_name"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"visuallyhidden"</span><span class="nt">&gt;</span>Family <span class="nt">&lt;/span&gt;</span>Nombres:
    <span class="nt">&lt;/label&gt;&lt;br&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"f_name"</span> <span class="na">id=</span><span class="s">"f_name"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"f_lastname"</span><span class="nt">&gt;</span>Apellidos:<span class="nt">&lt;/label&gt;&lt;br&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"f_lastname"</span> <span class="na">id=</span><span class="s">"f_lastname"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  […]
<span class="nt">&lt;/fieldset&gt;</span>
</pre>

</figure>
<br>

<h5>Agrupación de campos relacionados usando WAI-ARIA</h5>
  
  <figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<form method="post" action="#">
  <div role="group" aria-labelledby="p_head" style="float: left; border: 1px solid #333; padding: 0 .5em .5em; margin-right: 1em;">
    <div id="p_head" style="font-weight: bold; padding: .25em 0;">Datos Personales:</div>
    <div>
      <label for="aria_p_name"><span class="visuallyhidden">Perdonal </span>Nombres:</label><br>
      <input type="text" name="aria_p_name" id="aria_p_name">
    </div>
    <div>
      <label for="aria_p_lastname">Apellidos:</label><br>
      <input type="text" name="aria_p_lastname" id="aria_p_lastname">
    </div>
    <div>
      <label for="aria_p_address">Dirección:</label><br>
      <input type="text" name="aria_p_address" id="aria_p_address">
    </div>
    <div>
      <label for="aria_p_city">Ciudad:</label><br>
      <input type="text" name="aria_p_city" id="aria_p_city">
    </div>
    <div>
      <label for="aria_p_email">Correo Electrónico:</label><br>
      <input type="text" name="aria_p_email" id="aria_p_email">
      </div>
  </div>
  <div role="group" aria-labelledby="f_head" style="float: left; border: 1px solid #333; padding: 0 .5em .5em;">
    <div id="f_head" style="font-weight: bold; padding: .25em 0;">Datos de un Familiar:</div>
    <div>
      <label for="aria_f_name"><span class="visuallyhidden">Family </span>Nombres:</label><br>
      <input type="text" name="aria_f_name" id="aria_f_name">
    </div>
    <div>
      <label for="aria_f_lastname">Apellidos:</label><br>
      <input type="text" name="aria_f_lastname" id="aria_f_lastname">
    </div>
    <div>
      <label for="aria_f_address">Dirección:</label><br>
      <input type="text" name="aria_f_address" id="aria_f_address">
    </div>
    <div>
      <label for="aria_f_city">Ciudad:</label><br>
      <input type="text" name="aria_f_city" id="aria_f_city">
    </div>
    <div>
      <label for="aria_f_email">Correo Electrónico:</label><br>
      <input type="text" name="aria_f_email" id="aria_f_email">
    </div>
  </div>
</form>


  </div></figure>
  <br>

  <figure class="code ">
  <figcaption>Fragmento de Código:: </figcaption>
<pre class="highlight html"><span class="nt">&lt;div</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-labelledby=</span><span class="s">"p_head"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"p_head"</span><span class="nt">&gt;</span>Datos Personales:<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"p_name"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"visuallyhidden"</span><span class="nt">&gt;</span>p <span class="nt">&lt;/span&gt;</span>Nombres:
    <span class="nt">&lt;/label&gt;&lt;br&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"p_name"</span> <span class="na">id=</span><span class="s">"p_name"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  […]
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-labelledby=</span><span class="s">"f_head"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"f_head"</span><span class="nt">&gt;</span>Datos de un Familiar:<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"f_name"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"visuallyhidden"</span><span class="nt">&gt;</span>f <span class="nt">&lt;/span&gt;</span>Nombres:
    <span class="nt">&lt;/label&gt;&lt;br&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"f_name"</span> <span class="na">id=</span><span class="s">"f_name"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  […]
<span class="nt">&lt;/div&gt;</span>
</pre>

</figure>
<br>

<h5>Agrupación de controles usando el elemento &lt;optgroup&gt;</h5>

<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<form action="#" method="get">
  <fieldset>
    <legend>¿Que pelicula desea ver hoy?</legend>
    <label id="movie">Peliculas:</label>
    <select name="movie" id="movie">
      <option></option>
      <optgroup label="8.01 Acción">
        <option value="8.01.1">Rápido y Furioso 7</option>
        <option value="8.01.2">Deadpool</option>
        <option value="8.01.3">X-mens</option>
      </optgroup>
      <optgroup label="8.02 Romanticas">
        <option value="8.02.1">Querido jhon</option>
        <option value="8.02.2">Yo antes de ti</option>
        <option value="8.02.3">Solo amigos</option>
      </optgroup>
      <optgroup label="8.03 Terror">
        <option value="8.03.1">El aro</option>
        <option value="8.03.2">El conjuro</option>
        <option value="8.03.3">Actividad paranormal</option>
      </optgroup>
    </select>
    <input type=submit value="▶ Play">
  </fieldset>
</form>


  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código:: </figcaption>
<pre class="highlight html"><span class="nt">&lt;select&gt;</span>
  <span class="nt">&lt;optgroup</span> <span class="na">label=</span><span class="s">"8.01 Acción"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"8.01.1"</span><span class="nt">&gt;</span>Rápido y Furioso 7<span class="nt">&lt;/option&gt;</span>
    <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"8.01.2"</span><span class="nt">&gt;</span>Deadpool<span class="nt">&lt;/option&gt;</span>
    <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"8.01.3"</span><span class="nt">&gt;</span>X-mens<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;/optgroup&gt;</span>
  <span class="nt">&lt;optgroup</span> <span class="na">label=</span><span class="s">"8.02 Romanticas"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"8.02.1"</span><span class="nt">&gt;</span>Querido jhon?<span class="nt">&lt;/option&gt;</span>
    […]
  <span class="nt">&lt;/optgroup&gt;</span>
  […]
<span class="nt">&lt;/select&gt;</span>
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


