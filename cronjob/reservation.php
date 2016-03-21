<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Eden Park Gest House</title>

    <!-- Bootstrap -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
    <div id="main_pape">
       <div class="form">
              <h2>registeration</b></h2>
                <p class="msg"></p> 
                  <form id="reservation" action="quick_reservation.php" method="post">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <input placeholder="Name" type="text" name="fname">
                  <div class="Check">
                    <h3>Check in date</h3>
                    <!-- Day dropdown -->
                      <select name="day" id="day" onchange="" size="1">
                          <option value="01">01</option>
                          <option value="02">02</option>
                          <option value="03">03</option>
                          <option value="04">04</option>
                          <option value="05">05</option>
                          <option value="06">06</option>
                          <option value="07">07</option>
                          <option value="08">08</option>
                          <option value="09">09</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                          <option value="31">31</option>
                      </select>
                      <select name="month" id="month" onchange="" size="1">
                          <option value="01">January</option>
                          <option value="02">February</option>
                          <option value="03">March</option>
                          <option value="04">April</option>
                          <option value="05">May</option>
                          <option value="06">June</option>
                          <option value="07">July</option>
                          <option value="08">August</option>
                          <option value="09">September</option>
                          <option value="10">October</option>
                          <option value="11">November</option>
                          <option value="12">December</option>
                      </select>


                    <select  id="year" name="year">
                      <option>2016</option>
                      <option>1980</option><option>1981</option><option>1982</option><option>1983</option><option>1984</option><option>1985</option>
                      <option>1986</option><option>1987</option><option>1988</option><option>1989</option><option>1990</option><option>1991</option>
                      <option>1992</option><option>1993</option><option>1994</option><option>1995</option><option>1996</option><option>1997</option>
                      <option>1998</option><option>1999</option><option>2000</option><option>2001</option><option>2002</option><option>2003</option>
                      <option>2004</option><option>2005</option><option>2006</option><option>2007</option><option>2008</option><option>2009</option>
                      <option>2010</option><option>2011</option><option>2012</option><option>2013</option><option>2014</option>
                    </select>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <input placeholder="Phone" type="text" name="phone">
                  <div class="Check">
                    <h3>Check out date</h3>
                    <!-- Day dropdown -->
                      <select name="day1" id="day1" onchange="" size="1">
                          <option value="01">01</option>
                          <option value="02">02</option>
                          <option value="03">03</option>
                          <option value="04">04</option>
                          <option value="05">05</option>
                          <option value="06">06</option>
                          <option value="07">07</option>
                          <option value="08">08</option>
                          <option value="09">09</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                          <option value="31">31</option>
                      </select>
                      <select name="month1" id="month1" onchange="" size="1">
                          <option value="01">January</option>
                          <option value="02">February</option>
                          <option value="03">March</option>
                          <option value="04">April</option>
                          <option value="05">May</option>
                          <option value="06">June</option>
                          <option value="07">July</option>
                          <option value="08">August</option>
                          <option value="09">September</option>
                          <option value="10">October</option>
                          <option value="11">November</option>
                          <option value="12">December</option>
                      </select>
                    <select id="year1" name="year1">
                      <option>2016</option>
                      <option>1980</option><option>1981</option><option>1982</option><option>1983</option><option>1984</option><option>1985</option>
                      <option>1986</option><option>1987</option><option>1988</option><option>1989</option><option>1990</option><option>1991</option>
                      <option>1992</option><option>1993</option><option>1994</option><option>1995</option><option>1996</option><option>1997</option>
                      <option>1998</option><option>1999</option><option>2000</option><option>2001</option><option>2002</option><option>2003</option>
                      <option>2004</option><option>2005</option><option>2006</option><option>2007</option><option>2008</option><option>2009</option>
                      <option>2010</option><option>2011</option><option>2012</option><option>2013</option><option>2014</option>
                    </select>
                  </div>
                </div>
             <!--<input type="submit" class="Search" value="Quick Search">-->
                 <input type="submit" class="Reservation" value="Reservation">
               <p>Your reservation is not guaranteed unless you proceed to</p>
               <!-- <input type="submit" class="Reservation" value="Reservation">-->
              </form>
              <!-- form end -->
              </div>
              </div>
              

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="js/jquery.validate.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  
    <script>
    $(function() {
    // validate signup form on keyup and submit
    $("#reservation").validate({
      rules: {
        fname: "required",
        phone: {
          required: true,
          minlength: 10
        },
        day: {
          required: true,
        },
        month: {
          required: true,
        },
        year: {
          required: true,
        },  
               day1: {
          required: true,
        },
        month1: {
          required: true,
        },
        year1: {
          required: true,
        },  
        
      },
      messages: {
        fname: "Please enter your Name",
        phone: "Please enter valid phone no",
        day: "Please select date",
        month: "Please select month",
        year: "Please select year",
        day1: "Please select date",
        month1: "Please select month",
        year1: "Please select year",
      },
      submitHandler: function(form) {
        $.ajax({
        type: "POST",
        url: "quick_reservation.php",
        data: $(form).serialize(),
        timeout: 3000,
        success: function(reponse) {
        if(reponse=="true"){
          $('.msg').html('<div class="alert alert-success">Mail send successfully.</div>');
        }else{
          $('.msg').html('<div class="alert alert-danger">Mail not send successfully.</div>');
        }
        
        },
        error: function() {
        alert('failed');
        }
        });
        return false;
      }
    });
    
      
      $(".subscribe").click(function() {
        
        var email = $("#email").val();
        if(email){
        var dataString = 'email=' + email;

        $.ajax({
          type: "POST",
          url: "quick_reservation.phpreservation",
          data: dataString,
          success: function(){
          $('.success').html("Mail send successfully.");
          }
        });

        return false;
      }else{
         $('.success').html("Mail not send successfully.");
         return false;
      }
      });
    });
  </script>
  </body>
</html>