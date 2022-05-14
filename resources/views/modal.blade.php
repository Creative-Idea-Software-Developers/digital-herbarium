<div id="myModal" style="display: none;
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4); important!; z-index: 99999999;">

<div style="background-color: #fefefe;
  margin: 5% auto;
  padding: 20px;
  overflow: auto;
  border: 1px solid #888;
  width: 80%; important!; max-height: calc(100vh - 200px);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s; font-family: 'Montserrat',sans-serif">
  <button class="close" style="color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold; important!;" onclick="cerrarMenu()">&times;</button>
  <br>
  <p><h1>Indice de Plantas</h1></p>
    <hr>
    <br>
    @for ($i = 0; $i < count($plantas); $i++)
        <button onclick="cambiarPlanta({{$i}})"><p style="font-size: 18px;">{{$i+1}}. {{$plantas[$i]->name}}</p></button> <br>
    @endfor
</div>

</div>