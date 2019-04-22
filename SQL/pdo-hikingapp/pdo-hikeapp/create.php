<?php
require('header.php');

	// Inject data
	if (isset($_POST['button']) && !empty($_POST))
	{
		try {
			$tour = $_POST['tour'];
			$difficulty = $_POST['difficulty'];
			$distance = $_POST['distance'];
			$duration = $_POST['duration'];
			$heightdifference = $_POST['heightdifference'];
		
			$data = [
				'tour' 		=> $tour,
				'difficulty' 	=> $difficulty,
				'distance' 		=> $distance,
				'duration' 		=> $duration,
				'heightdifference' => $heightdifference,
			];
		
			$sqlInsert = "INSERT INTO hike (tour, difficulty, distance, duration, heightdifference) VALUES (:tour, :difficulty, :distance, :duration, :heightdifference)";
		
			$sqlExec = $pdo->prepare($sqlInsert);
			$sqlExec->execute($data);
			
			header('Location: read.php?create');
		}
		catch(PDOException $e){
			echo 'Error: '. $e->getMessage();
		}
	}
?>

	<h1>Add Hike</h1>
	<form action="" method="post">
		<div>
			<span>Name</span>
			<input type="text" name="tour" value="">
		</div>

		<div>
			<span for="difficulty">Difficulty</span>
			<select name="difficulty">
				<option value="very easy">Very easy</option>
				<option value="easy">Easy</option>
				<option value="medium">Medium</option>
				<option value="hard">Hard</option>
				<option value="very hard">Very hard</option>
			</select>
		</div>

		<div>
			<span>Distance</span>
			<input type="number" name="distance" value="">
		</div>
		<div>
			<span>Duration</span>
			<input type="number" name="duration" value="">
		</div>
		<div>
			<span>Height difference</span>
			<input type="number" name="heightdifference" value="">
		</div>
		<button type="submit" name="button">Send</button>
	</form>
    <a href="read.php">back</a>
<?php
require('footer.php');?>