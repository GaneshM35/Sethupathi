<!DOCTYPE html>
<html>
<head>
    <meta name="author" content="ganesh">
    <link href="css/bootstrap.min.css" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #9df9a1;
}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}
tr{
  text : red;
}

tr:nth-child(even){
  background-color: #f9f79a
}
tr:nth-child(odd){
  background-color: #f2f0b0
}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>

<h2>Under Graudate Courses</h2>
<div class="table-responsive">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for course.." title="Type in a name">

<table id="myTable" align="center">
  <tr class="header">
    <th style="width:350px;">Course Name</th>
    <th style="width:350px;">Duration</th>
	<th style="width:350px;">Eligibility</th>
  </tr>
  <tr>
    <td>B.A.English</td>
	<td>3 Years</td>
	<td>HSC passed/ 3 years Polytechnic Diploma</td>
  </tr>
  <tr>
    <td>B.A.Tamil</td>
	<td>3 Years</td>
	<td>HSC passed/ 3 years Polytechnic Diploma</td>
  </tr>
  <tr>
    <td>B.Litt.Tamil</td>
	<td>3 Years</td>
	<td>HSC passed/ 3 years Polytechnic Diploma</td>
  </tr>
  <tr>
    <td>B.Sc.(Computer Science)</td>
	<td>3 Years</td>
	<td>HSC passed/ 3 years Polytechnic Diploma</td>
  </tr>
  <tr>
    <td>B.Sc.(Information Technology</td>
	<td>3 Years</td>
	<td>HSC passed/ 3 years Polytechnic Diploma</td>
  </tr>
  <tr>
    <td>B.C.A</td>
	<td>3 Years</td>
	<td>HSC passed/ 3 years Polytechnic Diploma</td>
  </tr>
  <tr>
    <td>B.Sc.(Visual Communication)</td>
	<td>3 Years</td>
	<td>HSC passed/ 3 years Polytechnic Diploma</td>
  </tr>
  <tr>
    <td>B.Sc.costume Design and Fashion</td>
	<td>3 Years</td>
	<td>HSC passed/ 3 years Polytechnic Diploma</td>
  </tr>
  <tr>
    <td>B.Com</td>
	<td>3 Years</td>
	<td>HSC passed/ 3 years Polytechnic Diploma</td>
  </tr>
  <tr>
    <td>B.Com.(Computer Application)</td>
  <td>3 Years</td>
  <td>HSC passed/ 3 years Polytechnic Diploma</td>
  </tr>
  <tr>
    <td>B.B.A</td>
  <td>3 Years</td>
  <td>HSC passed/ 3 years Polytechnic Diploma</td>
  </tr>
  <tr>
    <td>B.Sc.(Mathematics)</td>
  <td>3 Years</td>
  <td>HSC passed with (General) Mathematics as one of the subjects (or) 3 years Polytechnic Diploma</td>
  </tr>
  <tr>
    <td>B.Sc.(Physics)</td>
  <td>3 Years</td>
  <td>HSC passed with Physics, Mathematics and Chemistry as subjects (or) 3 years Polytechnic Diploma</td>
  </tr>
</table> 
</div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

</body>
</html>

