<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lb2</title>

</head>
<body>
    <div>
        <h3>Результат запиту:</h3>
        <script>
            (function () {
				const res = JSON.parse(localStorage.getItem('localStorage'));
				if (res) {
					var output = "";
					res.forEach(function(item) {
						var values = Object.values(item);
						values.forEach(function(value) {
						output += value + "<br>";
						});
					});
					document.write(output);
				} else {
					document.write("Запиту ще не щроблено");
				}
			})();
        </script>
    </div>
    <div>
        <h3>Отримати дохід з прокату станом на обрану дату;</h3>
        <form action="income.php">
            <input type="date" name="date" value="2023-05-24">
            <input type="submit" value="Отримати">
        </form>
    </div>
    <div>
        <h3>Отримати автомобілі з пробігом, меншим за вказаний;</h3>
        <form action="mileage.php">
            <input type="number" name="mileage" value="100000">
            <input type="submit" value="Отримати">
        </form>
    </div>
    <div>
        <h3>Отримати наявні в цьому пункті марки автомобілів.</h3>
        <form action="cars.php">
            <input type="submit" value="Отримати">
        </form>
    </div>
</body>
</html>