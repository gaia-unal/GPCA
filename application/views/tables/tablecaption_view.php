<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        
        <section class="panel">
            <header class="panel-heading">
                 <center> Tablas comprensibles </center></b>
            </header>
            <div class="panel-body">
                <div class="row">

    </div>
    <div class="art-postcontent"><br>
        
<h5>Identificación de una tabla usando el atributo Caption</h5>
<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<table>
  <caption>Partidos</caption>
  <tr>
    <th>Fecha</th>
    <th>Partido</th>
    <th>Torneo</th>
  </tr>
  <tr>
    <td>24 Noviembre 2016</td>
    <td>Nal(Co) vs CP(Py)</td>
    <td>Atanasio Girardot</td>
  </tr>
  <tr>
    <td>27 Noviembre 2016</td>
    <td>Mil(Co) vs Nal(Co)</td>
    <td>El Campín</td>
  </tr>
  <tr>
    <td>30 Noviembre 2016</td>
    <td>Nal(Co) vs Mil(Co)</td>
    <td>Atanasio Girardot</td>
  </tr>
</table>


  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;table&gt;</span>
  <span class="nt">&lt;caption&gt;</span>Partidos<span class="nt">&lt;/caption&gt;</span>
  <span class="nt">&lt;tr&gt;</span>
    <span class="nt">&lt;th&gt;</span>Fecha<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;th&gt;</span>Partido<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;th&gt;</span>Torneo<span class="nt">&lt;/th&gt;</span>
  <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;tr&gt;</span>
    <span class="nt">&lt;td&gt;</span>24 de Noviembre 2016<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td&gt;</span>Nal(Co) vs CP(Pa)<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td&gt;</span>Atanasio Girardot<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;/tr&gt;</span>
  […]
<span class="nt">&lt;/table&gt;</span>
</pre>

</figure>
<br>
<h5>Usando el atributo Caption para tablas complejas.</h5>
<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<table>
  <caption style="text-align: left;">
    Cantidad de carros vendidos en los ultimos tres años.<br>
    <span style="font-size: .75em; display:block;">
La columna uno tiene la localización y el año de las ventas, las otras columnas muestran la marca del carro y el números de carros vendidos.    </span>
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
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;caption&gt;</span> Cantidad de carros vendidos en los ultimos tres años<span class="nt">&lt;br&gt;</span>
  <span class="nt">&lt;span&gt;</span>La columna uno tiene la localización y el año de las ventas, las otras columnas muestran la marca del carro y el números de carros vendidos.<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/caption&gt;</span>
</pre>

</figure>
<br>
<h5>Usando el atributo aria-descritoby para proporcionar un resumen de la tabla.</h5>
 <figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<p id="tblDesc" style="max-width: 25.333333333em; font-size: .75em; lin-height: 1.5;">La columna uno tiene la localización y el año de las ventas, las otras columnas muestran la marca del carro y el números de carros vendidos.</p>
<table aria-describedby="tblDesc" tabindex="0">
  <caption style="text-align: left;">
    Manizales: Cantidad de carros vendidos en los ultimos tres años<br>
  </caption>
  <thead>
    <tr>
      <td></td>
      <th id="mazda" scope="col"> Mazda </th>
      <th id="bmw" scope="col"> <abbr title="Bayerische Motoren Werke">BMW</abbr> </th>
      <th id="chevrolet" scope="col"> Chevrolet </th>
      <th id="nissan" scope="col"> Nissan </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th headers="manizales" id="pbed1"> 2014 </th>
      <td headers="manizales pbed1 mazda"> 45 </td>
      <td headers="manizales pbed1 bmw"> 15 </td>
      <td headers="manizales pbed1 chevrolet"> 30 </td>
      <td headers="manizales pbed1 nissan"> 50 </td>
    </tr>
    <tr>
      <th headers="manizales" id="pbed2"> 2015 </th>
      <td headers="manizales pbed2 mazda"> 40 </td>
      <td headers="manizales pbed2 bmw"> 25 </td>
      <td headers="manizales pbed2 chevrolet"> 30 </td>
      <td headers="manizales pbed2 nissan"> 55 </td>
    </tr>
    <tr>
      <th headers="manizales" id="pbed3"> 2016 </th>
      <td headers="manizales pbed3 mazda"> 35 </td>
      <td headers="manizales pbed3 bmw"> 30 </td>
      <td headers="manizales pbed3 chevrolet"> 40 </td>
      <td headers="manizales pbed3 nissan"> 60 </td>
    </tr>
  </tbody>
</table>


  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;p</span> <span class="na">id=</span><span class="s">"tblDesc"</span><span class="nt">&gt;</span>La columna uno tiene la localización y el año de las ventas, las otras columnas muestran la marca del carro y el números de carros vendidos.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;table</span> <span class="na">aria-describedby=</span><span class="s">"tblDesc"</span><span class="nt">&gt;</span>
[…]
</pre>

</figure>
<br>
<h5>Utilizar el elemento &lt;figura&gt; para marcar un resumen de tabla</h5> 
 <figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<figure>
  <figcaption style="max-width: 19em; color: inherit;">
    <strong>  Manizales: Cantidad de carros vendidos en los ultimos tres años</strong><br>La columna uno tiene la localización y el año de las ventas, las otras columnas muestran la marca del carro y el números de carros vendidos.
  </figcaption>
  <table>
    <thead>
      <tr>
        <td></td>
        <th id="mazda" scope="col"> Mazda </th>
        <th id="bmw" scope="col"> <abbr title="Bayerische Motoren Werke">BMW</abbr> </th>
        <th id="chevrolet" scope="col"> Chevrolet </th>
        <th id="nissan" scope="col"> Nissan </th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <th headers="manizales" id="pbed1"> 2014 </th>
      <td headers="manizales pbed1 mazda"> 45 </td>
      <td headers="manizales pbed1 bmw"> 15 </td>
      <td headers="manizales pbed1 chevrolet"> 30 </td>
      <td headers="manizales pbed1 nissan"> 50 </td>
    </tr>
    <tr>
      <th headers="manizales" id="pbed2"> 2015 </th>
      <td headers="manizales pbed2 mazda"> 40 </td>
      <td headers="manizales pbed2 bmw"> 25 </td>
      <td headers="manizales pbed2 chevrolet"> 30 </td>
      <td headers="manizales pbed2 nissan"> 55 </td>
    </tr>
    <tr>
      <th headers="manizales" id="pbed3"> 2016 </th>
      <td headers="manizales pbed3 mazda"> 35 </td>
      <td headers="manizales pbed3 bmw"> 30 </td>
      <td headers="manizales pbed3 chevrolet"> 40 </td>
      <td headers="manizales pbed3 nissan"> 60 </td>
    </tr>
    </tbody>
  </table>
</figure>


  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: Sin usar WAI-ARIA</figcaption>
<pre class="highlight html"><span class="nt">&lt;figure&gt;</span>
  <span class="nt">&lt;figcaption&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Manizales: Cantidad de carros vendidos en los ultimos tres años<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
    <span class="nt">&lt;span&gt;</span>La columna uno tiene la localización y el año de las ventas, las otras columnas muestran la marca del carro y el números de carros vendidos.<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/figcaption&gt;</span>
  <span class="nt">&lt;table&gt;</span>
[…]
  <span class="nt">&lt;/table&gt;</span>
<span class="nt">&lt;/figure&gt;</span>
</pre>

</figure>
<figure class="code ">
  <figcaption>Fragmento de Código: Usando WAI-ARIA</figcaption>
<pre class="highlight html"><span class="nt">&lt;figure&gt;</span>
  <span class="nt">&lt;figcaption&gt;</span>
    <span class="nt">&lt;strong</span> <span class="na">id=</span><span class="s">"manizales-caption"</span><span class="nt">&gt;</span>Manizales: Cantidad de carros vendidos en los ultimos tres años<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"manizales-summary"</span><span class="nt">&gt;</span>La columna uno tiene la localización y el año de las ventas, las otras columnas muestran la marca del carro y el números de carros vendidos.<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/figcaption&gt;</span>
  <span class="nt">&lt;table</span> <span class="na">aria-labelledby=</span><span class="s">"manizales-caption"</span> <span class="na">aria-describedby=</span><span class="s">"manizales-summary"</span><span class="nt">&gt;</span>
[…]
  <span class="nt">&lt;/table&gt;</span>
<span class="nt">&lt;/figure&gt;</span>
</pre>

</figure>
<br>
<h5>Uso del atributo summary</h5>
<figure class="sample ">
  <figcaption>Example: </figcaption>
  <div class="box-content">
<table summary="La columna uno tiene la localización y el año de las ventas, las otras columnas muestran la marca del carro y el números de carros vendidos.">
  <caption>Manizales: Cantidad de carros vendidos en los ultimos tres años</caption>
  <thead>
    <tr>
        <td></td>
        <th id="mazda" scope="col"> Mazda </th>
        <th id="bmw" scope="col"> <abbr title="Bayerische Motoren Werke">BMW</abbr> </th>
        <th id="chevrolet" scope="col"> Chevrolet </th>
        <th id="nissan" scope="col"> Nissan </th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <th headers="manizales" id="pbed1"> 2014 </th>
      <td headers="manizales pbed1 mazda"> 45 </td>
      <td headers="manizales pbed1 bmw"> 15 </td>
      <td headers="manizales pbed1 chevrolet"> 30 </td>
      <td headers="manizales pbed1 nissan"> 50 </td>
    </tr>
    <tr>
      <th headers="manizales" id="pbed2"> 2015 </th>
      <td headers="manizales pbed2 mazda"> 40 </td>
      <td headers="manizales pbed2 bmw"> 25 </td>
      <td headers="manizales pbed2 chevrolet"> 30 </td>
      <td headers="manizales pbed2 nissan"> 55 </td>
    </tr>
    <tr>
      <th headers="manizales" id="pbed3"> 2016 </th>
      <td headers="manizales pbed3 mazda"> 35 </td>
      <td headers="manizales pbed3 bmw"> 30 </td>
      <td headers="manizales pbed3 chevrolet"> 40 </td>
      <td headers="manizales pbed3 nissan"> 60 </td>
    </tr>
    </tbody>
</table>


  </div></figure>

<figure class="code ">
  <figcaption>Code snippet: </figcaption>
<pre class="highlight html"><span class="nt">&lt;table</span>
  <span class="na">summary=</span><span class="s">"Column one has the location and size of accommodation, other columns show the type and number of properties available."</span><span class="nt">&gt;</span>
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


