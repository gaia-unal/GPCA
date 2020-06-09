<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        
        <section class="panel">
            <header class="panel-heading">
                 <center> Tablas Irregulares </center></b>
            </header>
            <div class="panel-body">
                <div class="row">

    </div>
    <div class="art-postcontent"><br>
        
    <h5>Tabla con dos encabezados de nivel</h5>
 
     <figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content"><table class="numbers">
  <col>
  <colgroup span="2"></colgroup>
  <colgroup span="2"></colgroup>
  <tr>
    <td rowspan="2"></td>
    <th colspan="2" scope="colgroup">Juan</th>
    <th colspan="2" scope="colgroup">Pepito</th>
  </tr>
  <tr>
    <th scope="col">Peso (Kilos)</th>
    <th scope="col">Estatura (Metros)</th>
    <th scope="col">Peso</th>
    <th scope="col">Estatura (Metros)</th>
  </tr>
  <tr>
    <th scope="row">10&nbsp;años</th>
    <td>50</td>
    <td>1,55</td>
    <td>1,40</td>
    <td>1,35</td>
  </tr>
  <tr>
    <th scope="row">20&nbsp;años</th>
    <td>70</td>
    <td>1,68</td>
    <td>65</td>
    <td>1,75</td>
  </tr>
</table>

  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;table&gt;</span>
  <span class="nt">&lt;col&gt;</span>
  <span class="nt">&lt;colgroup</span> <span class="na">span=</span><span class="s">"2"</span><span class="nt">&gt;&lt;/colgroup&gt;</span>
  <span class="nt">&lt;colgroup</span> <span class="na">span=</span><span class="s">"2"</span><span class="nt">&gt;&lt;/colgroup&gt;</span>
  <span class="nt">&lt;tr&gt;</span>
    <span class="nt">&lt;td</span> <span class="na">rowspan=</span><span class="s">"2"</span><span class="nt">&gt;&lt;/td&gt;</span>
    <span class="nt">&lt;th</span> <span class="na">colspan=</span><span class="s">"2"</span> <span class="na">scope=</span><span class="s">"colgroup"</span><span class="nt">&gt;</span>Juan<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;th</span> <span class="na">colspan=</span><span class="s">"2"</span> <span class="na">scope=</span><span class="s">"colgroup"</span><span class="nt">&gt;</span>Pepito<span class="nt">&lt;/th&gt;</span>
  <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;tr&gt;</span>
    <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Peso (Kilos)<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Estatura (Metros)<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Peso (Kilos)<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Estatura (Metros)<span class="nt">&lt;/th&gt;</span>
  <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;tr&gt;</span>
    <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>10 años<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;td&gt;</span>50<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td&gt;</span>1,55<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td&gt;</span>1,40<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td&gt;</span>1,35<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;tr&gt;</span>
    <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>20 años<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;td&gt;</span>70<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td&gt;</span>1,68<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td&gt;</span>65<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td&gt;</span>1,75<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;/table&gt;</span>
</pre>

</figure>
<br>
<h5>Tabla con encabezados que abarcan varias filas o columnas.
</h5>

<figure class="sample ">
  <figcaption>Ejemplo: </figcaption>
  <div class="box-content">
<table>
  <caption>
    Servicios de impresión
  </caption>
  <col>
  <col>
  <colgroup span="3"></colgroup>
  <thead>
    <tr>
      <th scope="col">Producto</th>
      <th scope="col">Tipo</th>
      <th colspan="3" scope="colgroup">Tamaño Disponible</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th rowspan="3" scope="rowgroup">Fotos</th>
      <th scope="row">Fondo Blanco</th>
      <td>A2</td>
      <td>A3</td>
      <td>A4</td>
    </tr>
    <tr>
      <th scope="row">Blanco y negro</th>
      <td>A1</td>
      <td>A2</td>
      <td>A3</td>
    </tr>
    <tr>
      <th scope="row">A color</th>
      <td>A3</td>
      <td>A4</td>
      <td>A5</td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <th rowspan="2" scope="rowgroup">Impresiones</th>
      <th scope="row">Blanco y negro</th>
      <td>A1</td>
      <td>A3</td>
      <td>A4</td>
    </tr>
    <tr>
      <th scope="row">A color</th>
      <td>A2</td>
      <td>A3</td>
      <td>A5</td>
    </tr>
  </tbody>
</table>


  </div></figure>

<figure class="code ">
  <figcaption>Fragmento de Código: </figcaption>
<pre class="highlight html"><span class="nt">&lt;table&gt;</span>
  <span class="nt">&lt;caption&gt;</span>
    Servicios de impresión
  <span class="nt">&lt;/caption&gt;</span>
  <span class="nt">&lt;col&gt;</span>
  <span class="nt">&lt;col&gt;</span>
  <span class="nt">&lt;colgroup</span> <span class="na">span=</span><span class="s">"3"</span><span class="nt">&gt;&lt;/colgroup&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Producto<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Tipo<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">colspan=</span><span class="s">"3"</span> <span class="na">scope=</span><span class="s">"colgroup"</span><span class="nt">&gt;</span>Tamaño Disponible<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">rowspan=</span><span class="s">"3"</span> <span class="na">scope=</span><span class="s">"rowgroup"</span><span class="nt">&gt;</span>Fotos<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>Fondo Blanco<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>A2<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>A3<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>A4<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>Blanco y negro<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>A1<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>A2<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>A3<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>A color<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>A3<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>A4<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>A5<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">rowspan=</span><span class="s">"2"</span> <span class="na">scope=</span><span class="s">"rowgroup"</span><span class="nt">&gt;</span>Impresiones<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>Blanco y negro<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>A1<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>A3<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>A4<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>A color<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>A2<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>A3<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>A5<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
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


