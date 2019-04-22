<?php
  require('header.php');

  // fetching database data
  try{
    $sql = "SELECT * FROM hike";
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
  }
  catch(PDOException $e){
    echo 'Error: '. $e->getMessage();
  }

  if(isset($_GET['create'])){
    $add = "A new hike has been added to the list!";
    echo $add;
  }

?>

  <div class="wrapper">
    <table>
      <thead>
        <th>Name</th>
        <th>Difficulty</th>
        <th>Distance</th>
        <th>Duration</th>
        <th>Height Difference</th>
      </thead>
      <tbody>
        <?php while ($row = $q->fetch()): ?>
          <tr>
            <td><?php echo $row['tour']; ?></td>
            <td><?php echo $row['difficulty']; ?></td>
            <td><?php echo $row['distance']; ?></td>
            <td><?php echo $row['duration']; ?></td>
            <td><?php echo $row['heightdifference']; ?></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
    <a href="create.php">Add new hike</a>
  </div>
<?php
require('footer.php');?>