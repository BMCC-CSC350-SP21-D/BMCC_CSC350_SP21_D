<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/*this is background picture */
.background{
  min-height: 100vh;
  width: 100%;
  background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(background.png);
  background-position: center;
  background-size: cover;
  position: relative; 
}

/*all the input styles */
input[type=text], select, textarea {
  width: 100%;
  padding: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
/*label styling  */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  color: #fff;
}
/*submit button styles  */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 15px;
  cursor: pointer;

 
}
/*aubmit button with hover styling*/
input[type=submit]:hover {
  background-color: #45a049;
}
/*the appointment form styles */
.container {
  border-radius: 5px;
  background-color: transparent;
  padding: 20px;
}
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  
}
.background h2{
  color: #fff;
  padding: 10px;
  text-align: center; 
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<section class="background">
<h2>Fill this out to make an appointment</h2> <!-- this the title of the appointment page -->
<form action="savedetails.php" method="post"> <!-- links to database after the submit is pressed -->
<div class="container"> <!-- all code from here is whats in the container for appointment  -->
    <div class="row">
      <div class="col-25">
        <label for="name">Full Name</label> <!-- lable for the name  -->
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" placeholder="Your full name.."required><!-- name text box -->
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label> <!-- lable for the email -->
      </div>
      <div class="col-75">
        <input type="text" id="Email" name="Email" placeholder="Email"required><!-- email text box  -->
      </div>
    <div class="row">
      <div class="col-25">
        <label for="unit">unit</label> <!-- label for the unit  -->
      </div>
      <div class="col-75">
        <select id="unit" name="unit"> <!-- list of all the the units -->
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
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
          
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
  <label for="washing time">washing time:</label> 
  <div>
  <select id="day" name="day"><!-- days of the week list -->
    <option value="monday">Monday</option>
    <option value="tuesday">Tuesday</option>
    <option value="wednesday">Wednesday</option>
    <option value="thursday">Thursday</option>
    <option value="friday">Friday</option>
    <option value="saturday">Saturday</option>
    <option value="sunday">Sunday</option>
  </select>
  </div>
  <div>
  <select id="time" name="time"> <!-- list of  time  -->
    <option value="12AM-3AM">12AM-3AM</option>
    <option value="3AM-6AM">3AM-6AM</option>
    <option value="6AM-9AM">6AM-9AM</option>
    <option value="9AM-12PM">9AM-12PM</option>
    <option value="12PM-3PM">12PM-3PM</option>
    <option value="3PM-6PM">3PM-6PM</option>
    <option value="6PM-9PM">6PM-9PM</option>
    <option value="9PM-12AM">9PM-12AM</option>
  </select>
  </div>
    <div class="row">
      <input type="submit" value="Submit"> <!-- submit button -->
    </div>
  </form>
</div>
</section>
</body>
</html>
