<!doctype html>
<html lang="en">
<head>
    <title>My First View</title>
</head>
<body>
    
    <? if ($roll == $guess): ?>
    	<h1><?= $roll; ?></h1>
    		<h1> Match! </h1>
	<? else: ?>
			<h1> Not a Match! </h1>
	<? endif; ?>
</body>
</html>