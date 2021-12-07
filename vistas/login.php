 
	
<div class="mensaje_centro">
  	<div class="login">
       <form action='<?php echo "recursos/login_info.php";?>' method="POST" > 
    	<label for="uname"><b>Username</b></label>
    	<input type="text" placeholder="Enter Username" name="uname" required/>
    	<br>
    	<br>
    	<label for="psw"><b>Password</b></label>
    	<input type="password" placeholder="Enter Password" name="psw" required/>
    	<br>
    	<br>
    	<INPUT type="Submit" name="c_submit" value="Log in"> 
    </form> 
          <button id="myBtn">Registrar</button>
  <script>
    var btn = document.getElementById('myBtn');
    btn.addEventListener('click', function() {
      document.location.href = "<?php echo 'index.php?page=registro'; ?>";
    });
  </script>

  	</div>

	<center><p>*Se necesita una cuenta para hacer reservaciones de autos</p></center>
</div>





