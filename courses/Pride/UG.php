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

<h2>Under Graduate Courses</h2>
<div class="table-responsive">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for course.." title="Type in a name">

<table id="myTable" align="center">
  <tr class="header">
    <th style="width:350px;">Course Name</th>
    <th style="width:350px;">Duration</th>
	<th style="width:350px;">Eligibility</th>
  </tr>
  <tr>
    <td>B.A. English</td>
	<td>3 Years</td>
	<td>+2 Pass with Relevant subject or its equivalent.</td>
  </tr>
  <tr>
    <td>B.A. Tamil</td>
	<td>3 Years</td>
	<td>+2 Pass with Relevant subject or its equivalent.</td>
  </tr>
  <tr>
    <td>B.A.Hindi</td>
	<td>3 Years</td>
	<td>+2 Pass with Relevant subject or its equivalent.</td>
  </tr>
  <tr>
    <td>B.A. Sanskrit</td>
	<td>3 Years</td>
	<td>+2 Pass with Relevant subject or its equivalent.</td>
  </tr>
  <tr>
    <td>B.A. History</td>
	<td>3 Years</td>
	<td>+2 Pass with Relevant subject or its equivalent.</td>
  </tr>
  <tr>
    <td>B.A. Political Science</td>
	<td>3 Years</td>
	<td>+2 Pass with Relevant subject or its equivalent.</td>
  </tr>
  <tr>
    <td>B.A. Education</td>
	<td>3 Years</td>
	<td>+2 Pass with Relevant subject or its equivalent.</td>
  </tr>
  <tr>
    <td>B.A. Economics</td>
	<td>3 Years</td>
	<td>+2 Pass with Relevant subject or its equivalent.</td>
  </tr>
  <tr>
    <td>B.A. Public Administration</td>
	<td>3 Years</td>
	<td>+2 Pass with Relevant subject or its equivalent.</td>
  </tr>
  <tr>
    <td>B.A. Jour. & Mass Communication</td>
  <td>3 Years</td>
  <td>+2 Pass with Relevant subject or its equivalent.</td>
  </tr>
  <tr>
    <td>B.A. Sociology</td>
  <td>3 Years</td>
  <td>+2 Pass with Relevant subject or its equivalent.</td>
  </tr>
  <tr>
    <td>B.A. Home Science</td>
  <td>3 Years</td>
  <td>+2 Pass with Relevant subject or its equivalent.</td>
  </tr>
  <tr>
    <td>B.A. Psychology</td>
  <td>3 Years</td>
  <td>+2 Pass with Relevant subject or its equivalent.</td>
  </tr>
  <tr>
    <td>B.A. Astrology</td>
  <td>3 Years</td>
  <td>Pass in 10+2/ 10+3 Years Diploma.</td>
  </tr>
  <tr>
    <td>B.Com (General)</td>
  <td>3 Years</td>
  <td>HSC passed or an Examination accepted as equivalent thereto by the Syndicate</td>
  </tr>
  <tr>
    <td>B.Com (Corporate Secretaryship)</td>
  <td>3 Years</td>
  <td>HSC passed or an Examination accepted as equivalent thereto by the Syndicate</td>
  </tr>
  <tr>
    <td>B.B.A. (General)</td>
  <td>3 Years</td>
  <td>HSC passed (or) 10 + 3 years Diploma</td>
  </tr>
  <tr>
    <td>B.B.A. (Banking)</td>
  <td>3 Years</td>
  <td>HSC passed (or) 10 + 3 years Diploma</td>
  </tr>
  <tr>
    <td>B.B.A. (Sales and Marketing)</td>
  <td>3 Years</td>
  <td>HSC passed (or) 10 + 3 years Diploma</td>
  </tr>
  <tr>
    <td>B.B.A. (Hardware)</td>
  <td>3 Years</td>
  <td>HSC passed (or) 10 + 3 years Diploma</td>
  </tr>
  <tr>
    <td>B.B.A. (Networking)</td>
  <td>3 Years</td>
  <td>HSC passed (or) 10 + 3 years Diploma</td>
  </tr>
  <tr>
    <td>B.B.A. (Tele Communication)</td>
  <td>3 Years</td>
  <td>HSC passed (or) 10 + 3 years Diploma</td>
  </tr>
  <tr>
    <td>B.Sc. Chemistry</td>
  <td>3 Years</td>
  <td>HSC pass in Chemistry and physics and any one of the following subjects namely Maths,chemistry,Botany,Zoology or Biology shall be eligible for admission into B.Sc.,Course </td>
  </tr>
  <tr>
    <td>B.Sc. Physics</td>
  <td>3 Years</td>
  <td>HSC pass in Chemistry and physics and any one of the following subjects namely Maths,chemistry,Botany,Zoology or Biology shall be eligible for admission into B.Sc.,Course </td>
  </tr>
  <tr>
    <td>B.Sc. Botany</td>
  <td>3 Years</td>
  <td>+2 Pass in with Biology,Physics and Chemistry Academic or Vocational stream with Botany (or) Biology,Home Science</td>
  </tr>
   <tr>
    <td>B.Sc. Zoology</td>
  <td>3 Years</td>
  <td>+2 Pass in with Biology,Physics and Chemistry Academic or Vocational stream with Botany (or) Biology,Home Science</td>
  </tr>
   <tr>
    <td>B.Sc. Home Science</td>
  <td>3 Years</td>
  <td>+2 Pass in with Biology,Physics and Chemistry Academic or Vocational stream with Botany (or) Biology,Home Science</td>
  </tr>
  <tr>
    <td>B.Sc. Microbiology</td>
  <td>3 Years</td>
  <td>+2 Pass in with Biology,Physics and Chemistry biology science (Academic or Vocational stream)</td>
  </tr>
  <tr>
    <td>B.Sc. Bio-Technology</td>
  <td>3 Years</td>
  <td>+2 Pass in with Biology,Physics and Chemistry biology science (Academic or Vocational stream)</td>
  </tr>
  <tr>
    <td>B.Sc. Environmental Science</td>
  <td>3 Years</td>
  <td>+2 Pass in with Biology,Physics and Chemistry biology science (Academic or Vocational stream)</td>
  </tr>
  <tr>
    <td>B.Sc. Computer Science</td>
  <td>3 Years</td>
  <td>+2 Pass in with Mathematics or Business mathematics or computer science or statistics (Academic or Vocational stream)</td>
  </tr>
  <tr>
    <td>B.Sc. Information Technology</td>
  <td>3 Years</td>
  <td>+2 Pass in with Mathematics or Business mathematics or computer science or statistics (Academic or Vocational stream)</td>
  </tr>
  <tr>
    <td>B.Sc. Tele Communication</td>
  <td>3 Years</td>
  <td>+2 Pass in with Mathematics or Business mathematics or computer science or statistics (Academic or Vocational stream)</td>
  </tr>
  <tr>
    <td>B.C.A</td>
  <td>3 Years</td>
  <td>+2 Pass in with Mathematics or Business mathematics or computer science or statistics (Academic or Vocational stream)</td>
  </tr>
  <tr>
    <td>B.Sc. Hotel Management & Tourism</td>
  <td>3 Years</td>
  <td>+2 Pass with Relevant subject or its equivalent.</td>
  </tr>
  <tr>
    <td>B.Sc. Yoga</td>
  <td>3 Years</td>
  <td>+2 Pass with Relevant subject or its equivalent.</td>
  </tr>
  <tr>
    <td>B.Sc. Geography</td>
  <td>3 Years</td>
  <td>A Pass in the Higher Secondary Examination (10+2 Pattern)</td>
  </tr>
   <tr>
    <td>B.Sc. Aviation and Tourism</td>
  <td>3 Years</td>
  <td>A Pass in the Higher Secondary Examination (10+2 Pattern)</td>
  </tr>
   <tr>
    <td>B.Sc. Visual Communication</td>
  <td>3 Years</td>
  <td>A Pass in the Higher Secondary Examination (10+2 Pattern)</td>
  </tr>
   <tr>
    <td>B.Sc. Textile and Fashion Design</td>
  <td>3 Years</td>
  <td>HSC /Polytechinc Passed, Diploma awarded by state Board of Techincal Education, Goverment Of Tamilnadu</td>
  </tr>
   <tr>
    <td>B.L.I.S</td>
  <td>1 Years</td>
  <td>Any Recognized Bachelor Degree</td>
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

