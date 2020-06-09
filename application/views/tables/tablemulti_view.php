<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        
        <section class="panel">
            <header class="panel-heading">
                 <center> Tablas con encabezados multinivel </center></b>
            </header>
            <div class="panel-body">
                <div class="row">

    </div>
    <div class="art-postcontent"><br>
        
    <h5>Tabla con varios encabezados en cada columna.</h5>
  <figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<table>
  <caption>
    Datos de los contactos.
  </caption>
  <tr>
    <td id="blank">&nbsp;</td>
    <th id="co1" headers="blank">Ejemplo 1 </th>
    <th id="co2" headers="blank">Ejemplo 2 </th>
  </tr>
  <tr>
    <th id="c1" headers="blank">Nombre</th>
    <td headers="co1 c1">Luis Londoño</td>
    <td headers="co2 c1">Maria Buitrago</td>
  </tr>
  <tr>
    <th id="p1"  headers="blank">Carrera</th>
    <td headers="co1 p1">Administración de Sistemas</td>
    <td headers="co2 p1">Ingeniería Eléctrica</td>
  </tr>
  <tr>
    <th id="e1"  headers="blank">Correo</th>
    <td headers="co1 e1">lflondonor@unal.edu.co</td>
    <td headers="co2 e1">mjbuitragos@unal.edu.co</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <th id="co3" headers="blank">Ejemplo 3 </th>
    <th id="co4" headers="blank">Ejemplo 4 </th>
  </tr>
  <tr>
    <th id="c2"  headers="blank">Nombre</th>
    <td headers="co3 c2">Mauricio Giraldo</td>
    <td headers="co4 c2">Emilcy Hernandez</td>
  </tr>
  <tr>
    <th id="p2" headers="blank">Carrera</th>
    <td headers="co3 p2">Administración de Sistemas</td>
    <td headers="co4 p2">Administración de Sistemas</td>
  </tr>
  <tr>
    <th id="e2" headers="blank">Correo</th>
    <td headers="co3 e2">mgiraldoo@unal.edu.co</td>
    <td headers="co4 e2">ejhernandezl@unal.edu.co</td>
  </tr>
</table>


  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: Asignando el atributo <strong>id</strong> a las celdas <code>&lt;th></code></figcaption>
<pre class="highlight html">[…]
<span class="nt">&lt;th</span> <span class="na">id=</span><span class="s">"co1"</span><span class="nt">&gt;</span>Ejemplo 1 <span class="nt">&lt;/th&gt;</span>
<span class="nt">&lt;th</span> <span class="na">id=</span><span class="s">"co2"</span><span class="nt">&gt;</span>Ejemplo 2 <span class="nt">&lt;/th&gt;</span>
[…]
<span class="nt">&lt;th</span> <span class="na">id=</span><span class="s">"c1"</span><span class="nt">&gt;</span>Nombre<span class="nt">&lt;/th&gt;</span>
[…]
</pre>

</figure>
<figure class="code ">
  <figcaption>Fragmento de Código: Asignando el atributo <strong>header</strong> a las celdas <code>&lt;td></code></figcaption>
<pre class="highlight html">[…]
<span class="nt">&lt;td</span> <span class="na">headers=</span><span class="s">"co1 c1"</span><span class="nt">&gt;</span>Luis Londoño<span class="nt">&lt;/td&gt;</span>
<span class="nt">&lt;td</span> <span class="na">headers=</span><span class="s">"co2 c1"</span><span class="nt">&gt;</span>Maria Buitrago<span class="nt">&lt;/td&gt;</span>
[…]
</pre>

</figure>
<br>
<h5>Tabla con tres encabezados relacionados con cada celda</h5>
<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<table class="numbers" summary="La columna uno tiene la localización y el año de las ventas, las otras columnas muestran la marca del carro y el números de carros vendidos.">
<caption>
    Cantidad de carros vendidos en los ultimos tres años.
</caption>
<thead>
    <tr>
        <td></td>
        <th id="mazda" scope="col">
            Mazda
        </th>
        <th id="bmw" scope="col">
            <abbr title="Bayerische Motoren Werke ">BMW</abbr>
        </th>
        <th id="chevrolet" scope="col">
            Chevrolet
        </th>
        <th id="nissa" scope="col">
            Nissan
        </th>
    </tr>
</thead>
<tbody>
    <tr>
        <th id="manizales" class="span" colspan="5" scope="colgroup">
            Manizales
        </th>
    </tr>
    <tr>
        <th headers="manizales" id="pbed1">
            2014
        </th>
        <td headers="manizales pbed1 mazda">
            45
        </td>
        <td headers="manizales pbed1 bmw">
            15
        </td>
        <td headers="manizales pbed1 chevrolet">
            30
        </td>
        <td headers="manizales pbed1 nissa">
            50
        </td>
    </tr>
    <tr>
        <th headers="manizales" id="pbed2">
            2015
        </th>
        <td headers="manizales pbed2 mazda">
            40
        </td>
        <td headers="manizales pbed2 bmw">
            25
        </td>
        <td headers="manizales pbed2 chevrolet">
            30
        </td>
        <td headers="manizales pbed2 nissa">
            55
        </td>
    </tr>
    <tr>
        <th headers="manizales" id="pbed3">
            2016
        </th>
        <td headers="manizales pbed3 mazda">
            35
        </td>
        <td headers="manizales pbed3 bmw">
            30
        </td>
        <td headers="manizales pbed3 chevrolet">
            40
        </td>
        <td headers="manizales pbed3 nissa">
            60
        </td>
    </tr>
    <tr>
        <th id="cali" class="span" colspan="5" scope="colgroup">
            Cali
        </th>
    </tr>
    <tr>
        <th id="rbed1" headers="cali">
            2014
        </th>
        <td headers="cali rbed1 mazda">
            50
        </td>
        <td headers="cali rbed1 bmw">
            12
        </td>
        <td headers="cali rbed1 chevrolet">
            35
        </td>
        <td headers="cali rbed1 nissa">
            40
        </td>
    </tr>
    <tr>
        <th id="rbed2" headers="cali">
            2015
        </th>
        <td headers="cali rbed2 mazda">
            50
        </td>
        <td headers="cali rbed2 bmw">
            25
        </td>
        <td headers="cali rbed2 chevrolet">
            40
        </td>
        <td headers="cali rbed2 nissa">
            45
        </td>
    </tr>
    <tr>
        <th id="rbed3" headers="cali">
            2016
        </th>
        <td headers="cali rbed3 mazda">
            55
        </td>
        <td headers="cali rbed3 bmw">
            25
        </td>
        <td headers="cali rbed3 chevrolet">
            35
        </td>
        <td headers="cali rbed3 nissa">
            60
        </td>
    </tr>
</tbody>
</table>


  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: Asignando el atributo <code class="attrib">id</code> a las celdas <code class="elem">&lt;th></code></figcaption>
<pre class="highlight html">[…]
  <span class="nt">&lt;th</span> <span class="na">id=</span><span class="s">"manizales"</span> <span class="na">colspan=</span><span class="s">"5"</span> <span class="na">scope=</span><span class="s">"colgroup"</span><span class="nt">&gt;</span>Manizales<span class="nt">&lt;/th&gt;</span>
<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr&gt;</span>
  <span class="nt">&lt;th</span> <span class="na">id=</span><span class="s">"pbed1"</span><span class="nt">&gt;</span>2014<span class="nt">&lt;/th&gt;</span>
[…]
</pre>

</figure>
<figure class="code ">
  <figcaption>Fragmento de Código: Asignando el atributo <code class="attrib">header</code> a las celdas <code class="elem">&lt;td></code></figcaption>
<pre class="highlight html">[…]
<span class="nt">&lt;td</span> <span class="na">headers=</span><span class="s">"manizales pbed1 mazda"</span><span class="nt">&gt;</span>45<span class="nt">&lt;/td&gt;</span>
<span class="nt">&lt;td</span> <span class="na">headers=</span><span class="s">"manizales pbed1 bmw"</span><span class="nt">&gt;</span> 15<span class="nt">&lt;/td&gt;</span>
[…]
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


