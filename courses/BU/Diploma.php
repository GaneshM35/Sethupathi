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

<h2>Post Graduate Diploma Courses</h2>
<div class="table-responsive">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for course.." title="Type in a name">

<table id="myTable" align="center">
  <tr class="header">
    <th style="width:350px;">Course Name</th>
    <th style="width:350px;">Duration</th>
	<th style="width:350px;">Eligibility</th>
  </tr>
  <tr>
    <td>PG Diploma in Computer Application</td>
	<td>1 Year</td>
	<td>Any Degree</td>
  </tr>
  <tr>
    <td>PG Diploma in International Business</td>
  <td>1 Year</td>
  <td>Any Degree</td>
  </tr>
  <tr>
    <td>PG Diploma in Communicative English</td>
  <td>1 Year</td>
  <td>Any Degree</td>
  </tr>
  <tr>
    <td>PG Diploma in Fire and Safety Management</td>
  <td>1 Year</td>
  <td>Any Degree</td>
  </tr>
  <tr>
    <td>PG Diploma in Bio-Informatics</td>
  <td>1 Year</td>
  <td>Bachelor Degree in any one of the following as major subjects: Agriculture applied science, Animal science, Bio-chemistry, Biology, Bio-Technology, Botany, Plant Biology and Plant Bio-Technology chemistry, Computer science,Computer Application(BCA), Information Technology, Electronics, Environmental science, Mathematics, Micro-biology, Pharmacy,Physics,Statistis, Veterinary science and Zoology.</td>
  </tr>
  <tr>
    <td>PG Diploma in Logistics and Supply chain Management</td>
  <td>1 Year</td>
  <td>Any Degree</td>
  </tr>
  <tr>
    <td>PG Diploma in Yoga Education</td>
  <td>1 Year</td>
  <td>Any Degree</td>
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

