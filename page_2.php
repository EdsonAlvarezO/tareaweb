<?php require_once './shared/header.php' ?>
<head>
  <title>Paginas 1</title>


</head>
<section class="section">
    <?php
	class person
	{
		public $name;
		public $lastname;
		public $phoneNumber;
		public $email;
		public $sex;
		public $hobbies;

		function __construct()
		{
			$this->name = "Edson";
			$this->lastname = "Alvarez";
			$this->phoneNumber = 11111111;
			$this->email = "edsonobando18@gmail.com";
			$this->sex = "male";
			$this->hobbies = array("jugar","dormir","comer");

		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Person</title>
</head>
<body>
   <form>
   	<?php
   			$person = new Person();
   	?>

   <div class="field">
  <label class="label">Nombre</label>
  <div class="control">
    <input class="input" type="text" placeholder="Text input" value="<?php echo $person->name ?>">
  </div>
</div>
 <div class="field">
  <label class="label">Apellido:</label>
  <div class="control">
    <input class="input" type="text" placeholder="Text input" value="<?php echo $person->lastname ?>">
  </div>
</div>
<div class="field">
  <label class="label">Phone nunber:</label>
  <div class="control">
    <input class="input" type="phone" placeholder="Text input" value="<?php echo $person->phoneNumber ?>">
  </div>
</div>

<div class="field">
  <label class="label">Email</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input" type="email" placeholder="Email input" value="<?php echo $person->email ?>">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-exclamation-triangle"></i>
    </span>
  </div>
</div>
<div class="field">
  <label class="label">Sex</label>
  <div class="control">
    <div class="select">
     <select>
   		<option selected="true"><?php echo $person->sex ?></option>
   		<option>Femenino</option>
   	</select>
    </div>
  </div>
</div>
<div class="field">
  <label class="label">Hbbies</label>
  <div class="control">
    <div class="select">
     <select>
   		<?php foreach ($person->hobbies as $per) {
   			echo "<option> $per </option>";
   		} 
   		?>
   	</select>
    </div>
  </div>
</div>

</body>
</html>

</section>
<?php require_once './shared/footer.php' ?>