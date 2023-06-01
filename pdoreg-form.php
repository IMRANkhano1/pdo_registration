<html>
<head>
<title>REGISTRATION FORM</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <body>
  	<div class="container">
    <div class="row">
    	<div class="col"></div>
    	<div class="col-8" style="background-color:lightgray;">
          <form method="post" action="store.php">
          	<h1 align="center" style="color:"><b>REGISTRATION FORM</b></h1>
          	<div class="form-group">
          		         	<div class="form-group">
          		<label class="form-label">NAME</label>
          		<input type="text" class="form-control" name="sname" placeholder="Enter your name" required>
          	</div>
          	<div class="form-group">
          		<label class="form-label">GENDER</label><br>
          		<input type="radio" class="form-control-check" name="gen" value="MALE">MALE
          		<input type="radio" class="form-control-check" name="gen" value="FEMALE">FEMALE<br>
          		
          	</div><br>
              
            <div class="form-group">
              <label class="form-label">EMAIL</label>
             <input type="email" class="form-control" name="email" placeholder="Enter your email" required>

            </div>
            <div class="form-group">
              <label class="form-label">Phone no</label>
              <input type="text" class="form-control" name="phno" placeholder="Enter your phno" required>             
            </div>

            </div><br>
             <div class="form-group">
              <label class="form-label">LANGUAGE KNOWN</label><br>
              <input type="checkbox" class="form-control-checkbox" name="lang" value="English">English
              <input type="checkbox"  class="form-control-checkbox" name="lang" value="Tamil">Tamil
              <input type="checkbox"  class="form-control-checkbox" name="lang" value="Hindi">Hindi
              
</div>
            <div class="form-group">
              <label class="form-label">STATE</label>
              <select class="form-control" name="state" required>
                <option></option> 
                <option>TAMILNADU</option>
                <option>KERALA</option>
                <option>GOA</option>
              </select>
            </div>
             


            <div class="form-group">
              <label class="form-label">About</label>
              <textarea class="form-control" name="about" rows="5" required >
                
              </textarea>             
            </div>
          
          
            	
          
    		<div class="form-group">
    			<input type="submit" class="btn btn-success" name="Register">
    			<input type="reset"  class="btn btn-danger" name="reset">
    			
    		</div>
    	</form>
    		</div>
    	<div class="col"></div>

    
    		</div>
    	</div>
  	  </body>
</head>
