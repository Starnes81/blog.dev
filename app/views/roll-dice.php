<!doctype html>
<html lang="en">
<head>
    <title>My First View</title>
</head>
<body>
    
    <? if ($roll == $guess): ?>
    	<h1> Your guess was: <?= $guess; ?></h1>
    		<h1> The number was: <?= $roll; ?> </h1>
    		<h1> You Win! </h1>
	<? else: ?>
			<h1> Your guess was: <?= $guess; ?></h1>
    		<h1> The number was: <?= $roll ;?> </h1>
			<h1> You Lose! </h1>

	<? endif; ?>
</body>
</html>