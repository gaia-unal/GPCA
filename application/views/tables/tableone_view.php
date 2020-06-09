<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        
        <section class="panel">
            <header class="panel-heading">
                 <center> Tablas con uno o dos encabezados </center></b>
            </header>
            <div class="panel-body">
                <div class="row">

    </div>
    <div class="art-postcontent"><br>
        
    <h5>Tabla con un encabezado en su parte superior.</h5>
 
     <figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<p><strong>Concerts:</strong></p>
<table>
    <tr>
        <th>Primer Nombre</th>
        <th>Segundo Nombre</th>
        <th>Apellidos</th>
    </tr>
    <tr>
        <td>Luis</td>
        <td>Felipe</td>
        <td>Londoño</td>
    </tr>
    <tr>
        <td>Valentina</td>
        <td>Paula</td>
        <td>Tabares</td>
    </tr>
    <tr>
        <td>Jhon</td>
        <td>Hesneyder</td>
        <td>Londoño</td>
    </tr>
</table>


  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;table&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
        <span class="nt">&lt;th&gt;</span>Primer Nombre<span class="nt">&lt;/th&gt;</span>
        <span class="nt">&lt;th&gt;</span>Segundo Nombre<span class="nt">&lt;/th&gt;</span>
        <span class="nt">&lt;th&gt;</span>Apellidos<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
        <span class="nt">&lt;td&gt;</span>Luis<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;td&gt;</span>Felipe<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;td&gt;</span>Londoño<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    […]
<span class="nt">&lt;/table&gt;</span>
</pre>

</figure>  
<br>
<h5>Tablas con el encabezado en la primera columna.</h5>
<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<p><strong>Concerts:</strong></p>
<table>
    <tr>
        <th>Primer Nombre</th>
        <td>Luis</td>
        <td>Valentina</td>
        <td>Jhon</td>
    </tr>
    <tr>
        <th>Segundo Nombre</th>
        <td>Felipe</td>
        <td>Paula</td>
        <td>Hesneyder</td>
    </tr>
    <tr>
        <th>Apellidos</th>
        <td>Londoño</td>
        <td>Tabares</td>
        <td>Londoño</td>
    </tr>
</table>


  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;table&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
        <span class="nt">&lt;th&gt;</span>Primer Nombre<span class="nt">&lt;/th&gt;</span>
        <span class="nt">&lt;td&gt;</span>Luis<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;td&gt;</span>Valentina<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;td&gt;</span>Jhon<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
        <span class="nt">&lt;th&gt;</span>Segundo Nombre<span class="nt">&lt;/th&gt;</span>
        <span class="nt">&lt;td&gt;</span>Felipe<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;td&gt;</span>Paula<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;td&gt;</span>Hesneyder<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
        <span class="nt">&lt;th&gt;</span>Apellidos<span class="nt">&lt;/th&gt;</span>
        <span class="nt">&lt;td&gt;</span>Londoño<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;td&gt;</span>Tabares<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;td&gt;</span>Londoño<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;/table&gt;</span>
</pre>

</figure>
<br>
<h5>Tablas con datos ambiguos.</h5>
   <figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content"><table>
  <caption>Integrantes GAIA:</caption>
  <tr>
    <th scope="col">Apellidos</th>
    <th scope="col">Nombres</th>
    <th scope="col">Cargo</th>
  </tr>
  <tr>
    <td>Duque</td>
    <td>Nestor</td>
    <td>Tabares</td>
  </tr>
  <tr>
    <td>Rodriguez</td>
    <td>Paula</td>
    <td>Valentina</td>
  </tr>
  <tr>
    <td>Profesor</td>
    <td>Aspirante a doctora</td>
    <td>Profesora</td>
  </tr>
</table>


  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;table&gt;</span>
  <span class="nt">&lt;caption&gt;</span>Integrantes GAIA<span class="nt">&lt;/caption&gt;</span>
  <span class="nt">&lt;tr&gt;</span>
    <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Apellidos<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Nombres<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Cargo<span class="nt">&lt;/th&gt;</span>
  <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;tr&gt;</span>
    <span class="nt">&lt;td&gt;</span>Duque<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td&gt;</span>Nestor<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td&gt;</span>Profesor<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;tr&gt;</span>
    <span class="nt">&lt;td&gt;</span>Rodriguez<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td&gt;</span>Paula<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td&gt;</span>Valentina<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;tr&gt;</span>
    <span class="nt">&lt;td&gt;</span>Profesor<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td&gt;</span>Aspirante a doctora<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td&gt;</span>Profesora<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;/table&gt;</span>
</pre>

</figure>    
<br>
<h5>Tablas con dos encabezados</h5> 
<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<table>
  <caption>Horarios:</caption>
  <tr>
    <td></td>
    <th scope="col">Lunes</th>
    <th scope="col">Martes</th>
    <th scope="col">Miercoles</th>
    <th scope="col">Jueves</th>
    <th scope="col">Viernes</th>
  </tr>
  <tr>
    <th scope="row">09:00 - 11:00</th>
    <td>Clase</td>
    <td>Libre</td>
    <td>Libre</td>
    <td>Clase</td>
    <td>Clase</td>
  </tr>
  <tr>
    <th scope="row">11:00 - 13:00</th>
    <td>Libre</td>
    <td>Libre</td>
    <td>Clase</td>
    <td>Clase</td>
    <td>Clase</td>
  </tr>
  <tr>
    <th scope="row">13:00 - 15:00</th>
    <td>Libre</td>
    <td>Libre</td>
    <td>Libre</td>
    <td>Clase</td>
    <td>Clase</td>
  </tr>
  <tr>
    <th scope="row">15:00 - 17:00</th>
    <td>Clase</td>
    <td>Clase</td>
    <td>Clase</td>
    <td>Libre</td>
    <td>Libre</td>
  </tr>
</table>


  </div></figure>

<figure class="code ">
  <figcaption>Code snippet: </figcaption>
<pre class="highlight html"><span class="nt">&lt;table&gt;</span>
  <span class="nt">&lt;caption&gt;</span>Horarios:<span class="nt">&lt;/caption&gt;</span>
  <span class="nt">&lt;tr&gt;</span>
    <span class="nt">&lt;td&gt;&lt;/td&gt;</span>
    <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Lunes<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Martes<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Miercoles<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Jueves<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Viernes<span class="nt">&lt;/th&gt;</span>
  <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;tr&gt;</span>
    <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>09:00 - 11:00<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;td&gt;</span>Clases<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td&gt;</span>Libre<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td&gt;</span>Libre<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td&gt;</span>Clases<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td&gt;</span>Clases<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;tr&gt;</span>
    <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>11:00 - 13:00<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;td&gt;</span>Libre<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td&gt;</span>Libre<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td&gt;</span>Clases<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td&gt;</span>Clases<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td&gt;</span>Clases<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;/tr&gt;</span>
  […]
<span class="nt">&lt;/table&gt;</span>
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


