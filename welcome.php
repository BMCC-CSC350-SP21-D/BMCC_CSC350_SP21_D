<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 15px;
  cursor: pointer;

 
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
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

<h2>Fill this out to make an appointment</h2>
<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="Email" placeholder="Email">
      </div>
    <div class="row">
      <div class="col-25">
        <label for="unit">unit</label>
      </div>
      <div class="col-75">
        <select id="unit" name="unit">
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
    <form action="/action_page.php">
  <p>washing time:</p>
  <div>
	<select id="day" name="day">
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
	<select id="time" name="time">
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
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>
