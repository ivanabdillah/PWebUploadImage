<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        #log {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
  }
  
  #log td, #log th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
  #log tr:nth-child(even){background-color: #f2f2f2;}
  
  #log tr:hover {background-color: #ddd;}
  
  #log th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
  }
    </style>
    <title>Log Upload</title>
</head>
<body>
<table id="log">
  <tr>
    <th>No</th>
    <th>Username</th>
    <th>Filename</th>
    <th>Timestamp</th>
  </tr>
  <tbody>
      <?php
        include ('connect.php');

        $q = $conn->real_escape_string('SELECT * FROM log');
        $q = $conn->query($q);
        $i = 1;
        while($res = $q->fetch_assoc()):
      ?>

      <tr>
        <td><?= $i++ ?></td>
        <td><?= $res['username'] ?></td>
        <td><?= $res['filename'] ?></td>
        <td><?= $res['timestamp'] ?></td>
      </tr>
        <?php endwhile; ?>
  </tbody>
</table>
</body>
</html>