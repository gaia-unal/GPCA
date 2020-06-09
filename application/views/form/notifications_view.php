<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        
        <section class="panel">
            <header class="panel-heading">
                 <center> Notificaciones de Usuario </center></b>
            </header>
            <div class="panel-body">
                <div class="row">

    </div>
    <div class="art-postcontent"><br>
        
       
        <p>Proveer al usuario una retroalimentación de los resultados obtenidos de su presentación del formulario, sin importar si este está bien o no. Esta retroalimentación debe de hacerse cerca del control de formulario que el usuario está completando.</p>

        <p>Las notificaciones deben ser concisas y claras. En particular, los mensajes de error deben ser fáciles de entender y deben proporcionar instrucciones sencillas sobre cómo se pueden resolver. Los mensajes de éxito también son importantes para confirmar la finalización de la tarea.</p>

<br>

<h5>Notificaciones usando encabezados principales &lt;h1&gt; y &lt;h2&gt;</h5>
<figure class="code ">
  <figcaption>Fragmento de Código: Error</figcaption><pre class="highlight html"><span class="nt">&lt;h1&gt;</span> Error – Dirección<span class="nt">&lt;/h1&gt;</span>
</pre>
</figure>
<figure class="code ">
  <figcaption>Fragmento de Código: Éxito </figcaption><pre class="highlight html"><span class="nt">&lt;h1&gt;</span>Registro Exitoso<span class="nt">&lt;/h1&gt;</span>
</pre>
</figure>
<br>

<h5>Notificaciones usando &lt;tittle&gt;</h5>
<figure class="code ">
  <figcaption>Fragmento de Código: Error</figcaption><pre class="highlight html"><span class="nt">&lt;title&gt;</span>Error – Dirección<span class="nt">&lt;/title&gt;</span>
</pre>
</figure>
<figure class="code ">
  <figcaption>Fragmento de Código: Éxito </figcaption><pre class="highlight html"><span class="nt">&lt;title&gt;</span>Registro Exitoso<span class="nt">&lt;/title&gt;</span>
</pre>
</figure>
<br>

<h5>Notificaciones usando diálogos</h5>

<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<button id="alertconfirm" type="button">Guardar</button>

<script>
  document.getElementById('alertconfirm').addEventListener('click', function(){ alert('Gracias por completar el formulario de registro'); });
</script>


  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: HTML</figcaption><pre class="highlight html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">id=</span><span class="s">"alertconfirm"</span><span class="nt">&gt;</span>Guardar<span class="nt">&lt;/button&gt;</span>
</pre>
</figure>
<figure class="code ">
  <figcaption>Fragmento de Código: JavaScript</figcaption><pre class="highlight javascript"><span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">'alertconfirm'</span><span class="p">)</span>
  <span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s1">'click'</span><span class="p">,</span> <span class="kd">function</span><span class="p">()</span> <span class="p">{</span>
    <span class="cm">/* [… code saving data …] */</span>
    <span class="nx">alert</span><span class="p">(</span><span class="s1">'Gracias por completar el formulario de registro'</span><span class="p">);</span>
  <span class="p">});</span>
</pre>
</figure>

<br>

<h5>Notificaciones usando listas de errores</h5>

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"firstname"</span><span class="nt">&gt;</span>Primer Nombre:<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">id=</span><span class="s">"firstname"</span> <span class="na">aria-describedby=</span><span class="s">"firstname_error"</span><span class="nt">&gt;</span>
</pre>

</figure>

<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content"><div role="alert">
  <h4 role="presentation">Existen 2 errores en el formulario</h4>
  <ul>
    <li>
      <a href="#firstname">
        El campo primer nombre no puede estar vacio.
      </a>
    </li>
    <li>
      <a href="#birthdate">
        Los datos tienen un formato errado, debe ser algo similar a 18/11/2016.
      </a>
    </li>
  </ul>
</div>

  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;div</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h4&gt;</span>Existen 2 errores en el formulario<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;ul&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#firstname"</span> <span class="na">id=</span><span class="s">"firstname_error"</span><span class="nt">&gt;</span>
        El campo primer nombre no puede estar vacio.
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#birthdate"</span> <span class="na">id=</span><span class="s">"birthdate_error"</span><span class="nt">&gt;</span>
        Los datos tienen un formato errado, debe ser algo similar a 18/11/2016.
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre>

</figure>
<br>


<h5>Retroalimentación directa después de enviar </h5>

<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<style>
  #ex3 div {margin-bottom:.75em;}
  .error {
    color: #900;
  }
  .error input {
    border: 3px solid #900;
  }
  .success {
    color: #007a00;
  }
  .success input {
    border: 3px solid #007a00;
  }
</style>

<form method="post" action="#ex3" id="ex3">
  <div class="success">
    <label for="username4"><strong>OK:</strong> Nombre de Usuario:</label>
      <input type="text" name="username" id="username4" value="lflondonor" aria-describedby="userDesc2">
      <span id="userDesc2">✓</span>
  </div>
  <div class="error">
    <label for="expire4"><strong>Error:</strong> Fecha de Expedición   :</label>
      <input type="text" name="expire" id="expire4" value="08.1994" aria-describedby="expDesc2">
      <span id="expDesc2">Use el formato MM/YYYY.</span>
  </div>
  <div class="error">
    <button type="submit">Submit</button>
  </div>
</form>

<script>
var taken_usernames = ['carlos', 'nestor', 'valen', 'gaia', 'prueba', 'ligred', 'asi', 'unal', 'manizales', 'colombia', 'brasil', 'renata', 'marta', 'roberto', ' leon', 'luis'];
document.getElementById('ex3').addEventListener('submit', function(event){
  function setError(el, msg) {
    el.parentNode.querySelector('strong').innerHTML = "Error:";
    el.parentNode.className='error';
    el.parentNode.querySelector('span').innerHTML = msg;
  }
  function setSuccess(el) {
    el.parentNode.querySelector('strong').innerHTML = "OK:";
    el.parentNode.className='success';
    el.parentNode.querySelector('span').innerHTML = "&check;";
  }
  var exp = document.getElementById('expire4');
  if (exp.value.match(new RegExp('[0-9]{2}\/[0-9]{4}'))) {
    setSuccess(exp);
  } else {
    setError(exp, 'Use the format MM/YYYY.');
  }
  var usr = document.getElementById('username4');
  if (taken_usernames.indexOf(usr.value.trim())+1 == false) {
    setSuccess(usr);
  } else {
    setError(usr, 'Username already taken');
  }
  event.preventDefault();
  return false;
});
</script>

  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: HTML</figcaption>
<pre class="highlight html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"success"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"username"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;strong&gt;</span>OK:<span class="nt">&lt;/strong&gt;</span> Nombre de Usuario:
  <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"username"</span>
    <span class="na">id=</span><span class="s">"username"</span> <span class="na">value=</span><span class="s">"lflondonor"</span>
    <span class="na">aria-describedby=</span><span class="s">"userDesc"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"userDesc"</span><span class="nt">&gt;</span>✓<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"error"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"expire"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Error:<span class="nt">&lt;/strong&gt;</span>
    Fecha de Expedición:
  <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"expire"</span>
    <span class="na">id=</span><span class="s">"expire"</span> <span class="na">value=</span><span class="s">"08.1994"</span>
    <span class="na">aria-describedby=</span><span class="s">"expDesc"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"expDesc"</span><span class="nt">&gt;</span>Use the format MM/YYYY.<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre>

</figure>
<figure class="code ">
  <figcaption>Fragmento de Código: CSS</figcaption>
<pre class="highlight css"><span class="nc">.error</span>   <span class="p">{</span> <span class="nl">color</span><span class="p">:</span> <span class="m">#900</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.success</span> <span class="p">{</span> <span class="nl">color</span><span class="p">:</span> <span class="m">#007a00</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.error</span>   <span class="nt">input</span> <span class="p">{</span> <span class="nl">border</span><span class="p">:</span> <span class="m">3px</span> <span class="nb">solid</span> <span class="m">#900</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.success</span> <span class="nt">input</span> <span class="p">{</span> <span class="nl">border</span><span class="p">:</span> <span class="m">3px</span> <span class="nb">solid</span> <span class="m">#007a00</span><span class="p">;</span> <span class="p">}</span>
</pre>

</figure>
<br>

<h5>Retroalimentación directa durante el ingreso de los datos </h5>

<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<form method="post" action="#">
  <div>
    <label for="ex1_username"><strong></strong> Nombre de Usuario:</label>
    <input type="text" name="username" id="ex1_username">
    <span id="username_feedback" aria-live="polite"></span>
  </div>
</form>

<script>
  document.getElementById('ex1_username').addEventListener('keyup', function(){
    function setError(el, msg) {
      el.parentNode.querySelector('strong').innerHTML = "Error:";
      el.parentNode.className='error';
      el.parentNode.querySelector('span').innerHTML = msg;
    }
    function setSuccess(el) {
      el.parentNode.querySelector('strong').innerHTML = "OK:";
      el.parentNode.className='success';
      el.parentNode.querySelector('span').innerHTML = "&check;";
    }
    var val = this.value;
    if (val !== "") {
      if (taken_usernames.indexOf(val.trim())+1) {
        setError(this, '&cross; Sorry, this username is taken.');
      } else {
        setSuccess(this, '&check; You can use this username.');
      }
    } else {
      document.getElementById('username_feedback').innerHTML = '';
      document.getElementById('username_feedback').parentNode.className = '';
      document.querySelector('[for="ex1_username"] strong').innerHTML = '';
    }
  });
</script>


  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: HTML</figcaption>
<pre class="highlight html"><span class="nt">&lt;div&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"username"</span><span class="nt">&gt;</span>Nombre de Usuario:<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"username"</span> <span class="na">id=</span><span class="s">"username"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"username_feedback"</span> <span class="na">aria-live=</span><span class="s">"polite"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre>

</figure>
<figure class="code ">
  <figcaption>Fragmento de Código: JavaScript</figcaption>
<pre class="highlight javascript"><span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">'username'</span><span class="p">).</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s1">'keyup'</span><span class="p">,</span> <span class="kd">function</span><span class="p">(){</span>
  <span class="kd">function</span> <span class="nx">setError</span><span class="p">(</span><span class="nx">el</span><span class="p">,</span> <span class="nx">msg</span><span class="p">)</span> <span class="p">{</span>
    <span class="nx">el</span><span class="p">.</span><span class="nx">parentNode</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'strong'</span><span class="p">).</span><span class="nx">innerHTML</span> <span class="o">=</span> <span class="s2">"Error:"</span><span class="p">;</span>
    <span class="nx">el</span><span class="p">.</span><span class="nx">parentNode</span><span class="p">.</span><span class="nx">className</span><span class="o">=</span><span class="s1">'error'</span><span class="p">;</span>
    <span class="nx">el</span><span class="p">.</span><span class="nx">parentNode</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'span'</span><span class="p">).</span><span class="nx">innerHTML</span> <span class="o">=</span> <span class="nx">msg</span><span class="p">;</span>
  <span class="p">}</span>
  <span class="kd">function</span> <span class="nx">setSuccess</span><span class="p">(</span><span class="nx">el</span><span class="p">)</span> <span class="p">{</span>
    <span class="nx">el</span><span class="p">.</span><span class="nx">parentNode</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'strong'</span><span class="p">).</span><span class="nx">innerHTML</span> <span class="o">=</span> <span class="s2">"OK:"</span><span class="p">;</span>
    <span class="nx">el</span><span class="p">.</span><span class="nx">parentNode</span><span class="p">.</span><span class="nx">className</span><span class="o">=</span><span class="s1">'success'</span><span class="p">;</span>
    <span class="nx">el</span><span class="p">.</span><span class="nx">parentNode</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'span'</span><span class="p">).</span><span class="nx">innerHTML</span> <span class="o">=</span> <span class="s2">"&amp;check;"</span><span class="p">;</span>
  <span class="p">}</span>
  <span class="kd">var</span> <span class="nx">val</span> <span class="o">=</span> <span class="k">this</span><span class="p">.</span><span class="nx">value</span><span class="p">;</span>
  <span class="k">if</span> <span class="p">(</span><span class="nx">val</span> <span class="o">!==</span> <span class="s2">""</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">if</span> <span class="p">(</span><span class="nx">taken_usernames</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="nx">val</span><span class="p">.</span><span class="nx">trim</span><span class="p">())</span><span class="o">+</span><span class="mi">1</span><span class="p">)</span> <span class="p">{</span>
      <span class="nx">setError</span><span class="p">(</span><span class="k">this</span><span class="p">,</span> <span class="s1">'&amp;cross; Sorry, this username is taken.'</span><span class="p">);</span>
    <span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
      <span class="nx">setSuccess</span><span class="p">(</span><span class="k">this</span><span class="p">,</span> <span class="s1">'&amp;check; You can use this username.'</span><span class="p">);</span>
    <span class="p">}</span>
  <span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
    <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">'username_feedback'</span><span class="p">).</span><span class="nx">innerHTML</span> <span class="o">=</span> <span class="s1">''</span><span class="p">;</span>
    <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">'username_feedback'</span><span class="p">)</span>
      <span class="p">.</span><span class="nx">parentNode</span><span class="p">.</span><span class="nx">className</span> <span class="o">=</span> <span class="s1">''</span><span class="p">;</span>
    <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'[for="username"] strong'</span><span class="p">).</span><span class="nx">innerHTML</span> <span class="o">=</span> <span class="s1">''</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">});</span>
</pre>

</figure>

<br>

 <figure class="sample ">
  <figcaption>Example: </figcaption>
  <div class="box-content">
<form method="post" action="#">
  <label for="ex2_password">Password:</label>
  <input type="text" name="password" id="ex2_password">
  <span id="passwordmeter"><span></span></span>
  <span id="passwordmessage" aria-live="polite"></span>
</form>

<style>
  #passwordmeter {
    display:inline-block;
    width:125px;
    height: 20px;
    border: 1px solid #666;
    vertical-align:middle;
  }
  #passwordmeter span {
    display:inline-block;
    height:1em;
    background-color: gray;
    width:25px;
    height: 20px;
  }
</style>

<script>
(function(){var a;a=function(){var a,b;b=document.createElement("script");b.src="<?php echo base_url() ?>asset/js/zxcvbn-2111e2d5.js";b.type="text/javascript";b.async=!0;a=document.getElementsByTagName("script")[0];return a.parentNode.insertBefore(b,a)};null!=window.attachEvent?window.attachEvent("onload",a):window.addEventListener("load",a,!1)}).call(this);

document.getElementById('ex2_password').addEventListener('keyup',
    function(){
      var meter = document.querySelector('#passwordmeter span');
      var msg = document.getElementById('passwordmessage');
      var pw = zxcvbn(this.value);
      meter.style.width = (pw.score+1) * 25 + 'px';
      if (pw.score == 0) {
        meter.style.backgroundColor = 'red';
        msg.innerHTML = '<strong>Debil:</strong> Cracked instantly';
      } else if (pw.score < 3) {
        meter.style.backgroundColor = 'red';
        msg.innerHTML = '<strong>Debil:</strong> Cracked in ' + pw.crack_time_display;
      } else if (pw.score == 3) {
        meter.style.backgroundColor = 'yellow';
        msg.innerHTML = '<strong>Aceptable:</strong> Cracked in ' + pw.crack_time_display;
      } else {
        meter.style.backgroundColor = 'green';
        msg.innerHTML = '<strong>Fuerte:</strong> Cracked in ' + pw.crack_time_display;
      }
      if (this.value == "") {
        meter.style.backgroundColor = 'gray';
        msg.innerHTML = ' ';
      }
  });

</script>


  </div></figure>

<br>
<figure class="code ">
  <figcaption>Fragmento de Código: HTML</figcaption>
<pre class="highlight html"><span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"password"</span><span class="nt">&gt;</span>Contraseña:<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"password"</span> <span class="na">id=</span><span class="s">"password"</span><span class="nt">&gt;</span>
<span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"passwordmeter"</span><span class="nt">&gt;&lt;span&gt;&lt;/span&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"passwordmessage"</span> <span class="na">aria-live=</span><span class="s">"polite"</span><span class="nt">&gt;&lt;/span&gt;</span>
</pre>

</figure>
<figure class="code ">
  <figcaption>Fragmento de Código: CSS</figcaption>
<pre class="highlight css"><span class="nf">#passwordmeter</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span><span class="n">inline-block</span><span class="p">;</span>
  <span class="nl">width</span><span class="p">:</span><span class="m">125px</span><span class="p">;</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">20px</span><span class="p">;</span>
  <span class="nl">border</span><span class="p">:</span> <span class="m">1px</span> <span class="nb">solid</span> <span class="m">#666</span><span class="p">;</span>
  <span class="nl">vertical-align</span><span class="p">:</span><span class="nb">middle</span><span class="p">;</span>
<span class="p">}</span>
<span class="nf">#passwordmeter</span> <span class="nt">span</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span><span class="n">inline-block</span><span class="p">;</span>
  <span class="nl">height</span><span class="p">:</span><span class="m">1em</span><span class="p">;</span>
  <span class="nl">background-color</span><span class="p">:</span> <span class="no">gray</span><span class="p">;</span>
  <span class="nl">width</span><span class="p">:</span><span class="m">25px</span><span class="p">;</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">20px</span><span class="p">;</span>
<span class="p">}</span>
</pre>

</figure>
<figure class="code ">
  <figcaption>Fragmento de Código: JavaScript</figcaption>
<pre class="highlight javascript"><span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">'password'</span><span class="p">).</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s1">'keyup'</span><span class="p">,</span>
    <span class="kd">function</span><span class="p">(){</span>
      <span class="c1">// (1) Select the password meter and message elements.
</span>     <span class="kd">var</span> <span class="nx">meter</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'#passwordmeter span'</span><span class="p">);</span>
      <span class="kd">var</span> <span class="nx">msg</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">'passwordmessage'</span><span class="p">);</span>

      <span class="c1">// (2) Calculate the strength of the password.
</span>     <span class="kd">var</span> <span class="nx">pw</span> <span class="o">=</span> <span class="nx">get_pw_strength</span><span class="p">(</span><span class="k">this</span><span class="p">.</span><span class="nx">value</span><span class="p">);</span>

      <span class="c1">// (3) Set the with of the password meter to a multiple of the score.
</span>     <span class="nx">meter</span><span class="p">.</span><span class="nx">style</span><span class="p">.</span><span class="nx">width</span> <span class="o">=</span> <span class="p">(</span><span class="nx">pw</span><span class="p">.</span><span class="nx">score</span><span class="o">+</span><span class="mi">1</span><span class="p">)</span> <span class="o">*</span> <span class="mi">25</span> <span class="o">+</span> <span class="s1">'px'</span><span class="p">;</span>

      <span class="cm">/* (4) Set the color of the meter to
             a) red if the score &lt; 3
             b) yellow if the score = 3
             c) green if the score = 4

        (5) Change the text of the password message element accordingly. */</span>
        <span class="k">if</span> <span class="p">(</span><span class="nx">pw</span><span class="p">.</span><span class="nx">score</span> <span class="o">==</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span>
          <span class="nx">meter</span><span class="p">.</span><span class="nx">style</span><span class="p">.</span><span class="nx">backgroundColor</span> <span class="o">=</span> <span class="s1">'red'</span><span class="p">;</span>
          <span class="nx">msg</span><span class="p">.</span><span class="nx">innerHTML</span> <span class="o">=</span> <span class="s1">'&lt;strong&gt;Really Weak&lt;/strong&gt; Password'</span><span class="p">;</span>
        <span class="p">}</span> <span class="k">else</span> <span class="k">if</span> <span class="p">(</span><span class="nx">pw</span><span class="p">.</span><span class="nx">score</span> <span class="o">&lt;</span> <span class="mi">3</span><span class="p">)</span> <span class="p">{</span>
          <span class="nx">meter</span><span class="p">.</span><span class="nx">style</span><span class="p">.</span><span class="nx">backgroundColor</span> <span class="o">=</span> <span class="s1">'red'</span><span class="p">;</span>
          <span class="nx">msg</span><span class="p">.</span><span class="nx">innerHTML</span> <span class="o">=</span> <span class="s1">'&lt;strong&gt;Weak&lt;/strong&gt; Password (cracked in '</span> <span class="o">+</span> <span class="nx">pw</span><span class="p">.</span><span class="nx">crack_time_display</span> <span class="o">+</span> <span class="s1">')'</span><span class="p">;</span>
        <span class="p">}</span> <span class="k">else</span> <span class="k">if</span> <span class="p">(</span><span class="nx">pw</span><span class="p">.</span><span class="nx">score</span> <span class="o">==</span> <span class="mi">3</span><span class="p">)</span> <span class="p">{</span>
          <span class="nx">meter</span><span class="p">.</span><span class="nx">style</span><span class="p">.</span><span class="nx">backgroundColor</span> <span class="o">=</span> <span class="s1">'yellow'</span><span class="p">;</span>
          <span class="nx">msg</span><span class="p">.</span><span class="nx">innerHTML</span> <span class="o">=</span> <span class="s1">'&lt;strong&gt;Good&lt;/strong&gt; Password (cracked in '</span> <span class="o">+</span> <span class="nx">pw</span><span class="p">.</span><span class="nx">crack_time_display</span> <span class="o">+</span> <span class="s1">')'</span><span class="p">;</span>
        <span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
          <span class="nx">meter</span><span class="p">.</span><span class="nx">style</span><span class="p">.</span><span class="nx">backgroundColor</span> <span class="o">=</span> <span class="s1">'green'</span><span class="p">;</span>
          <span class="nx">msg</span><span class="p">.</span><span class="nx">innerHTML</span> <span class="o">=</span> <span class="s1">'&lt;strong&gt;Strong&lt;/strong&gt; Password (cracked in '</span> <span class="o">+</span> <span class="nx">pw</span><span class="p">.</span><span class="nx">crack_time_display</span> <span class="o">+</span> <span class="s1">')'</span><span class="p">;</span>
        <span class="p">}</span>

      <span class="cm">/* (6) If the input is empty, there is no text output
             and the color of the meter is set to gray. */</span>
      <span class="k">if</span> <span class="p">(</span><span class="k">this</span><span class="p">.</span><span class="nx">value</span> <span class="o">==</span> <span class="s2">""</span><span class="p">)</span> <span class="p">{</span>
        <span class="nx">meter</span><span class="p">.</span><span class="nx">style</span><span class="p">.</span><span class="nx">backgroundColor</span> <span class="o">=</span> <span class="s1">'gray'</span><span class="p">;</span>
        <span class="nx">msg</span><span class="p">.</span><span class="nx">innerHTML</span> <span class="o">=</span> <span class="s1">' '</span><span class="p">;</span>
      <span class="p">}</span>
  <span class="p">});</span>
</pre>

</figure>
<br>
<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<style>
  #ex4 div {margin-bottom:.75em;}
</style>

<form method="post" action="#" id="ex4">
  <div>
    <label for="expire5"><strong></strong> Fecha de Expedición:</label>
    <input type="text" name="expire" id="expire5" value="08.2012" aria-describedby="expDesc3">
    <span id="expDesc3" aria-live="assertive"></span>
  </div>
  <div class="error">
    <button type="submit">Submit</button>
  </div>
</form>

<script>
inputs = document.querySelectorAll('#ex4 input');
for (var i = inputs.length - 1; i >= 0; i--) {
  inputs[i].addEventListener('blur', function(event){
    function setError(el, msg) {
      el.parentNode.querySelector('strong').innerHTML = "Error:";
      el.parentNode.className='error';
      el.parentNode.querySelector('span').innerHTML = msg;
    }
    function setSuccess(el) {
      el.parentNode.querySelector('strong').innerHTML = "OK:";
      el.parentNode.className='success';
      el.parentNode.querySelector('span').innerHTML = "&check;";
    }
    if (this.id == 'expire5') {
      if (this.value.match(new RegExp('[0-9]{2}\/[0-9]{4}'))) {
        setSuccess(this);
      } else {
        setError(this, 'Use the format MM/YYYY.');
      }
    } else if (this.id == 'username5') {
      if (taken_usernames.indexOf(this.value.trim())+1 == false) {
        setSuccess(this);
      } else {
        setError(this, 'Username already taken.');
      }
    }
    event.preventDefault();
    return false;
  });
};

</script>

  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption><pre class="highlight html"><span class="nt">&lt;div&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"expire"</span><span class="nt">&gt;&lt;strong&gt;&lt;/strong&gt;</span> Fecha de Expedición:<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"expire"</span> <span class="na">id=</span><span class="s">"expire"</span> <span class="na">value=</span><span class="s">"08.2012"</span> <span class="na">aria-describedby=</span><span class="s">"expDesc3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"expDesc3"</span> <span class="na">aria-live=</span><span class="s">"assertive"</span><span class="nt">&gt;&lt;/span&gt;</span>
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


