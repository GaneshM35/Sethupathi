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

<h2>Professional Courses</h2>
<div class="table-responsive">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for course.." title="Type in a name">

<table id="myTable" align="center">
  <tr class="header">
    <th style="width:350px;">Course Name</th>
    <th style="width:350px;">Duration</th>
	<th style="width:350px;">Eligibility</th>
  </tr>
  <tr>
    <td>M.B.A. (General)</td>
	<td>2 Years</td>
	<td>A pass in any Degree course.Candidate who have completed the study under (11+1+3)/ (10+2+3)/ 10+3(dip)+3(UG) are eligible </td>
  </tr>
  <tr>
    <td>M.B.A. (Finacial Management)</td>
  <td>2 Years</td>
  <td>A pass in any Degree course.Candidate who have completed the study under (11+1+3)/ (10+2+3)/ 10+3(dip)+3(UG) are eligible </td>
  </tr>
  <tr>
    <td>M.B.A. (Hospital Management)</td>
    <td>2 Years</td>
  <td>A pass in any Degree course.Candidate who have completed the study under (11+1+3)/ (10+2+3)/ 10+3(dip)+3(UG) are eligible </td>
  </tr>
    <tr>
    <td>M.B.A. (Export Management)</td>
    <td>2 Years</td>
  <td>A pass in any Degree course.Candidate who have completed the study under (11+1+3)/ (10+2+3)/ 10+3(dip)+3(UG) are eligible </td>
  </tr>
    <tr>
    <td>M.B.A. (Entrepreneurship)</td>
    <td>2 Years</td>
  <td>A pass in any Degree course.Candidate who have completed the study under (11+1+3)/ (10+2+3)/ 10+3(dip)+3(UG) are eligible </td>
  </tr>
    <tr>
    <td>M.B.A. (Financial Services)</td>
    <td>2 Years</td>
  <td>A pass in any Degree course.Candidate who have completed the study under (11+1+3)/ (10+2+3)/ 10+3(dip)+3(UG) are eligible </td>
  </tr>
    <tr>
    <td>M.B.A. (Human Resource Management)</td>
    <td>2 Years</td>
  <td>A pass in any Degree course.Candidate who have completed the study under (11+1+3)/ (10+2+3)/ 10+3(dip)+3(UG) are eligible </td>
  </tr>
  <tr>
    <td>M.B.A. (International Bussiness)</td>
    <td>2 Years</td>
  <td>A pass in any Degree course.Candidate who have completed the study under (11+1+3)/ (10+2+3)/ 10+3(dip)+3(UG) are eligible </td>
  </tr>
  <tr>
    <td>M.B.A. (Information System Management)</td>
    <td>2 Years</td>
  <td>A pass in any Degree course.Candidate who have completed the study under (11+1+3)/ (10+2+3)/ 10+3(dip)+3(UG) are eligible </td>
  </tr>
  <tr>
    <td>M.B.A. (Retail Management)</td>
    <td>2 Years</td>
  <td>A pass in any Degree course.Candidate who have completed the study under (11+1+3)/ (10+2+3)/ 10+3(dip)+3(UG) are eligible </td>
  </tr>
  <tr>
    <td>M.B.A. (Tourism and Hotel Management)</td>
    <td>2 Years</td>
  <td>A pass in any Degree course.Candidate who have completed the study under (11+1+3)/ (10+2+3)/ 10+3(dip)+3(UG) are eligible </td>
  </tr>
  <tr>
    <td>M.B.A. (Investment Management)</td>
    <td>2 Years</td>
  <td>A pass in any Degree course.Candidate who have completed the study under (11+1+3)/ (10+2+3)/ 10+3(dip)+3(UG) are eligible </td>
  </tr>
  <tr>
    <td>M.B.A. (Service Management)</td>
    <td>2 Years</td>
  <td>A pass in any Degree course.Candidate who have completed the study under (11+1+3)/ (10+2+3)/ 10+3(dip)+3(UG) are eligible </td>
  </tr>
  <tr>
    <td>M.B.A. (Project Management)</td>
    <td>2 Years</td>
  <td>A pass in any Degree course.Candidate who have completed the study under (11+1+3)/ (10+2+3)/ 10+3(dip)+3(UG) are eligible </td>
  </tr>
  <tr>
    <td>M.B.A. (Technolgy Management)</td>
    <td>2 Years</td>
  <td>A pass in any Degree course.Candidate who have completed the study under (11+1+3)/ (10+2+3)/ 10+3(dip)+3(UG) are eligible </td>
  </tr>
  <tr>
    <td>M.B.A. (Logistic and Supply Chain Management)</td>
    <td>2 Years</td>
  <td>A pass in any Degree course.Candidate who have completed the study under (11+1+3)/ (10+2+3)/ 10+3(dip)+3(UG) are eligible </td>
  </tr>
  <tr>
    <td>M.B.A. (Banking and Finance)</td>
    <td>2 Years</td>
  <td>A pass in any Degree course.Candidate who have completed the study under (11+1+3)/ (10+2+3)/ 10+3(dip)+3(UG) are eligible </td>
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

