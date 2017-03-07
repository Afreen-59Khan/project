<html>
   <head>
      <title>The Materialize Form Example</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">      
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
     <link rel="stylesheet" href="<?php echo base_url()?>assets/css/materialize.min.css">
      <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-3.1.1.min.js"></script>           
      <script src="<?php echo base_url()?>assets/js/materialize.min.js"></script> 
      <script type="text/javascript">
         $(document).ready(function() {
            $('select').material_select();
         });

         $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
         });
      </script>
   </head>
   <body class="container">   
      <div class="row">
         <form class="col s12">
            <div class="row">
               <div class="input-field col s4">
                  <input id="fname" type="text" class="active validate" required>
                  <label for="fname">First Name</label>
               </div>
               <div class="input-field col s4">      
                  <label for="mname">Middle Name</label>
                  <input id="mname" type="text" class="validate">          
               </div>
               <div class="input-field col s4">      
                  <label for="lname">Last Name</label>
                  <input id="lname" type="text" class="validate" required>          
               </div>
            </div>
            <div class="row">
               <div class="input-field col s4">
               <p>Gender</p>
                  <input id="male" type="radio" name="gender" value="male" checked>
                  <label for="male">Male</label>
                  &nbsp;
                  <input id="female" type="radio" name="gender" value="female" checked>
                  <label for="female">Female</label>
               </div>
               <div class="input-field col s4">
                  <div id="date-picker" class="section scrollspy">
                     <label for="dob">Date of Birth</label>
                     <input id="dob" type="date" class="datepicker">
               </div>
               </div>
               <div class="input-field col s4">
               <div id="date-picker" class="section scrollspy">
                  <label for="doj">Date of Admission</label>
                  <input id="doj" type="date" class="datepicker">
               </div>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <input id="email" type="email" class="validate">
                  <label for="email">Email</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <textarea id="address" class="materialize-textarea"></textarea>
                  <label for="address">Permanent Address</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <textarea id="address" class="materialize-textarea"></textarea>
                  <label for="address">Current Address</label>
               </div>
            </div>
            <div class="row">
               <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                  <i class="material-icons right">send</i>
               </button>
            </div>          
         </form>       
      </div>
   </body>   
</html>