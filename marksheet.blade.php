<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.marksheet {
  max-width: 600px;
  margin: 40px auto;
  padding: 20px;
  background-color: #f9f9f9;
  border: 1px solid #ddd;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.marksheet table {
  width: 100%;
  border-collapse: collapse;
}

.marksheet th, .marksheet td {
  border: 1px solid #ddd;
  padding: 10px;
  text-align: left;
}

.marksheet th {
  background-color: #f0f0f0;
}

.marksheet td {
  font-weight: bold;
}

.marksheet .percentage {
  font-size: 24px;
  color: #00698f;
}
    </style>
</head>
<body>
    
<div class="marksheet">
  <h2>Student Marksheet</h2>
  <table>
    <tr>
      <th>Subject</th>
      <th>Marks</th>
    </tr>
    <tr>
      <td>Mathematics</td>
      <td>80</td>
    </tr>
    <tr>
      <td>Science</td>
      <td>70</td>
    </tr>
    <tr>
      <td>English</td>
      <td>90</td>
    </tr>
    <tr>
      <td>Total</td>
      <td>240</td>
    </tr>
    <tr>
      <td>Percentage</td>
      <td>80%</td>
    </tr>
  </table>
</div>
</body>
</html>