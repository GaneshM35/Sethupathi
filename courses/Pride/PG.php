

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

<h2>Post Graduate Courses</h2>
<div class="table-responsive">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for course.." title="Type in a name">

<table id="myTable" align="center">
  <tr class="header">
    <th style="width:350px;">Course Name</th>
    <th style="width:350px;">Duration</th>
	<th style="width:350px;">Eligibility</th>
  </tr>
  <tr>
    <td>M.A.English Literature</td>
	<td>2 Years</td>
	<td>B.A. English, B.A Literature(CA) or any graduate course with part II English at UG levels</td>
  </tr>
  <tr>
    <td>M.A.Tamil</td>
	<td>2 Years</td>
	<td>Any Degree with Part-I Tamil</td>
  </tr>
  <tr>
    <td>M.Sc. Mathematics</td>
	<td>2 Years</td>
	<td>B.Sc. Mathematics/ B.Sc Mathematics Computer Application.</td>
  </tr>
  <tr>
    <td>M.Sc.Physics</td>
	<td>2 Years</td>
	<td>B.Sc. Physics with Mathematics as one of the allied subjects or B.sc.Physics and Computer Application with Mathematics as one of the subjects.</td>
  </tr>
  <tr>
    <td>M.Sc.Chemistry</td>
	<td>2 Years</td>
	<td>B.sc.Chemistry with Physics/Maths/Zoology/Botany as allied subjects or B.Sc. Polyer Chemistry</td>
  </tr>
  <tr>
    <td>B.Sc. Environmental Science</td>
	<td>2 Years</td>
	<td>Any Bachelor Degree in Science/Engineering/Medicine/Agriculture/fisheries Science/Veterinary Science/Pharmacy.</td>
  </tr>
  <tr>
    <td>M.Sc.Computer Science</td>
	<td>2 Years</td>
	<td>B.Sc. Computer Science/ Computer Technology/ Information/ Software Systems/ Electronics/ BCA/ B.Sc.(Applied Science [IT/CT]).</td>
  </tr>
  <tr>
  <tr>
    <td>M.Sc.Information Technology</td>
  <td>2 Years</td>
  <td>B.Sc. Computer Science/ Computer Technology/ Information/ Software Systems/ Electronics/ BCA/ B.Sc.(Applied Science [IT/CT]).</td>
  </tr>
  <tr>
    <td>M.Sc.Applied Psychology</td>
	<td>2 Years</td>
	<td>Any Bachelor Degree from Any Recgnized University.</td>
  </tr>
  <tr>
    <td>M.Sc. Botany</td>
	<td>2 Years</td>
	<td>B.Sc. / Plant Biology and Plant Bio Technology/ Plant Science/ Biology/ Micro Biology/ Bio-Technology.</td>
  </tr>
  <tr>
    <td>M.Sc.Zoolgy</td>
  <td>2 Years</td>
  <td>B.Sc.zoology/ Animal Science and Bio Technology/ Animal Science/ Advanced Zoology and Bio Technology/ Applied Science/Life Science/ Bio Technolgy/ Biochemistry and wild Life Biology.</td>
  </tr>
  <tr>
    <td>M.Sc.(Costume Design and Fashion Technology)</td>
  <td>2 Years</td>
  <td>B.Sc,(CDF) Fashion Design / Textile and Clothing/Apparel Desinging/ and Fashion Art/ B.sc., Apparel Design. B.Sc. Textile and apparel design, B.Sc textile and Clothing (or) Any B.Sc degree related to textile and fashion discipline.</td>
  </tr>
  <tr>
    <td>M.S.W (Master of Social Works)</td>
  <td>2 Years</td>
  <td>Any UG Degree</td>
  </tr>
  <tr>
    <td>M.Com(CA)</td>
  <td>2 Years</td>
  <td>B.Com/ B.Com(CA)/ B.Com(E-Com.)/ B.B.M/ B.B.M(CA)/ B.B.A/ B.C.S/ B.C.S(CA)/ B.Com(CS)/ B.Com(CS) with C.A/ B.com(Co-operation)/B.com(Co-operation) with CA, Bachelors degree in Bank Management.</td>
  </tr>
  <tr>
    <td>M.Com</td>
  <td>2 Years</td>
  <td>B.Com/ B.Com(CA)/ B.Com(E-Com.)/ B.B.M/ B.B.M(CA)/ B.B.A/ B.C.S/ B.C.S(CA)/ B.Com(CS)/ B.Com(CS) with C.A/ B.com(Co-operation)/B.com(Co-operation) with CA, Bachelors degree in Bank Management.</td>
  </tr>
   <tr>
    <td>M.A. History</td>
  <td>2 Years</td>
  <td>Any Bachelor Degree</td>
  </tr>
   <tr>
    <td>M.A. Economics</td>
  <td>2 Years</td>
  <td>Any Graduate with Economics/ Econometrics/ Mathematics/ Statistics/ Bussiness Economics/ Managerial Economics as One of the paper.</td>
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

