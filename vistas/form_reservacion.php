<form id='id_res' method="POST" action="recursos/reservacion.php">

<h1 align="center">Reserve su coche ahora</font></h1>
<TABLE id='tabla_registros' align="center" width="20%" border="1">

<!-- Row 1 -->
   <TR>
      <TD>
         <label>Ciudad Donde recibira el carro</label>
      <INPUT list='oficinas' type="Text" name="c_renta" align="LEFT" size="50"placeholder='Ciudad de Servicio'>
      
      </TD>
      <TD class='col2' >
         Fecha de renta:<INPUT type="date" name="f_renta" align="LEFT" placeholder='Fecha '>
      </TD>
      <TD>Hora:<SELECT name="h_renta">

         <?PHP
            for ($i = 1; $i <= 23; $i++) {
               echo "<option value='$i:00' >$i:00</option>";
               echo "<option value='$i:30' >$i:30</option>";
            }


         ?>
               </SELECT>
      </TD>
   </TR>
<!-- Row 2 -->
   <TR>
   <TD>
      <label>Ubicacion de regreso:</label>
      <INPUT list='oficinas' type="Text" name="c_regreso" align="LEFT" size="50" placeholder='Ubicación de regreso'>
      </TD>
            <datalist id="oficinas">
        <?php include 'recursos/oficinas_list.php' ?>
      </datalist>

      <TD class='col2'>
         <br>
         <label>Fecha de entrega:</label>
            <INPUT type="date" name="f_regreso" align="LEFT" size="15" maxlength="15"><br>
      </TD>
      <TD>Hora:<SELECT name="h_regreso">
         <?PHP
            for ($i = 1; $i <= 23; $i++) {
               echo "<option value='$i:00' >$i:00</option>";
               echo "<option value='$i:30' >$i:30</option>";
            }


         ?>
      </SELECT>

      </TD>
   </TR>
<!-- Row 3 -->

   <!-- <TR>
      <TD>Fecha de Nacimeinto: <INPUT type="date" name="f_nacimiento">
      </TD>

      <TD class='col2' colspan='2'>Pais de Residencia:
      <SELECT NAME="p_residencia">
         <OPTION VALUE="united states" SELECTED>U.S.A</OPTION>
         <OPTION VALUE="inglaterra">Inglaterra</OPTION>
         <OPTION VALUE="italia">Italia</OPTION>
         <OPTION VALUE="rusia" >Rusia</OPTION>
         <OPTION VALUE="argentina">Argentina</OPTION>
         <OPTION VALUE="canada">Canadá</OPTION>
         <OPTION VALUE="guatemala" >Guatemala</OPTION>
         <OPTION VALUE="china">China</OPTION>
         <OPTION VALUE="japon">Japón</OPTION>
            <OPTION VALUE="mexico">Mexico</OPTION>
      </SELECT></TD>
   </TR> -->

<tr>
   <td>
      <!-- Button Submit -->
      <p align="center"><INPUT type="Submit" name="c_submit" value="Seleccionar un coche"></p>
   </td>
</tr>
   


</TABLE>



</form>