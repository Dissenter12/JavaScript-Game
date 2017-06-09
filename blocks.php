<!DOCTYPE html>
<html>
<head>
	<title>Blocks-MemoryGame</title>
</head>
<style type="text/css">
	.block {
		width: 100%;
	}
	.container{
		padding: 0 20%;
	}
</style>
<body>
	<center>
		<h1> Welcome and Enjoy!</h1>
	</center>
	<div class="container">
		<table>
			<tr>
				<td><img src="back.jpg" class="block" id="block"> </td>
				<td><img src="back.jpg" class="block" id="block1"> </td>
				<td><img src="back.jpg" class="block" id="block2"> </td>
				<td><img src="back.jpg" class="block" id="block3"> </td>
			</tr>
			<tr>
				<td><img src="back.jpg" class="block" id="block4"> </td>
				<td><img src="back.jpg" class="block" id="block5"> </td>
				<td><img src="back.jpg" class="block" id="block6"> </td>
				<td><img src="back.jpg" class="block" id="block7"> </td>
			</tr>
			<tr>
				<td><img src="back.jpg" class="block" id="block8"> </td>
				<td><img src="back.jpg" class="block" id="block9"> </td>
				<td><img src="back.jpg" class="block" id="block10"> </td>
				<td><img src="back.jpg" class="block" id="block11"> </td>
			</tr>
			<tr>
				<td><img src="back.jpg" class="block" id="block12"> </td>
				<td><img src="back.jpg" class="block" id="block13"> </td>
				<td><img src="back.jpg" class="block" id="block14"> </td>
				<td><img src="back.jpg" class="block" id="block15"> </td>
			</tr>
		</table>
	</div>

<script type="text/javascript">

	var a = 0;
	var pacman = 0;
	var pacman1 = 0;
	var thor = 0;
	var thor1 = 0;
	var joker = 0;
	var joker1 = 0;
	var garfield = 0;
	var garfield1 = 0;
	var kon = 0;
	var kon1 = 0;
	var haruhi = 0;
	var haruhi1 = 0;
	var mikasa = 0;
	var mikasa1 = 0;
	var asuna = 0;
	var asuna1 = 0;
	document.getElementById('block').onclick = function(){
		if (a==0) {
			
		document.getElementById('block').src= 'pacman.jpg';
		b = 'block';
		a += 1;
		pacman += 1;

		}
		else if (a==1) {
		document.getElementById('block').src= 'pacman.jpg';
		c = 'block';
		a += 1;
			pacman += 1;
			
				if (pacman >= 1 && pacman1 >= 1) {
					a = 0;
				}
				else{
					pacman = 0;
					pacman1 = 0;
				}
		}

		else if (a==2) {
		document.getElementById(b).src = 'back.jpg';
		document.getElementById(c).src= 'back.jpg';
		a = 0;
		}
		

	}

	document.getElementById('block1').onclick = function(){
		if (a==0) {
		document.getElementById('block1').src= 'thor.jpg';
		b = 'block1';
		a += 1;
		thor += 1;
		}
		else if (a==1) {
		document.getElementById('block1').src= 'thor.jpg';
		c = 'block1'
		a += 1;
			thor += 1;
				if (thor >= 1 && thor1 >= 1) {
					a = 0;
				}
				else{
					thor = 0;
					thor1 = 0;
				}
		}
		else if (a==2) {
		document.getElementById(b).src = 'back.jpg';
		document.getElementById(c).src= 'back.jpg';

		a = 0;
		}

	}

	document.getElementById('block2').onclick = function(){
		if (a==0) {
		document.getElementById('block2').src= 'joker.jpg';
		b = 'block2';
		a += 1;
		joker += 1;
		}
		else if (a==1) {
		document.getElementById('block2').src= 'joker.jpg';
		c = 'block2';
		a += 1;
			joker += 1;
				if (joker >= 1 && joker1 >= 1) {
					a = 0;
				}
				else{
					joker = 0;
					joker1 = 0;
				}
		}
		else if (a==2) {
		document.getElementById(b).src = 'back.jpg';
		document.getElementById(c).src= 'back.jpg';

		a = 0;
		}
	}

	document.getElementById('block3').onclick = function(){
		if (a==0) {
		document.getElementById('block3').src= 'garfield.jpg';
		b = 'block3';
		a += 1;
		garfield += 1;
		}
		else if (a==1) {
		document.getElementById('block3').src= 'garfield.jpg';
		c = 'block3';
		a += 1;
			garfield += 1;
				if (garfield >= 1 && garfield1 >= 1) {
					a = 0;
				}
				else{
					garfield = 0;
					garfield1 = 0;
				} 
		}
		else if (a==2) {
		document.getElementById(b).src = 'back.jpg';
		document.getElementById(c).src= 'back.jpg';

		a = 0;
		}

	}

	document.getElementById('block4').onclick = function(){
		if (a==0) {
		document.getElementById('block4').src= 'k-on.jpg';
		b = 'block4';
		a += 1;
		kon += 1;
		}
		else if (a==1) {
		document.getElementById('block4').src= 'k-on.jpg';
		c = 'block4';
		a += 1;
			kon += 1;
				if (kon >= 1 && kon1 >= 1) {
					a = 0;
				}
				else{
					kon = 0;
					kon1 = 0;
				} 
		}
		else if (a==2) {
		document.getElementById(b).src = 'back.jpg';
		document.getElementById(c).src= 'back.jpg';

		a = 0;
		}
	}

	document.getElementById('block5').onclick = function(){
		if (a==0) {
		document.getElementById('block5').src= 'haruhi.jpg';
		b = 'block5';
		a += 1;
		haruhi += 1;
		}
		else if (a==1) {
		document.getElementById('block5').src= 'haruhi.jpg';
		c = 'block5';
		a += 1;
			haruhi += 1;
				if (haruhi >= 1 && haruhi1 >= 1) {
					a = 0;
				}
				else{
					haruhi = 0;
					haruhi1 = 0;
				} 
		}
		else if (a==2) {
		document.getElementById(b).src = 'back.jpg';
		document.getElementById(c).src= 'back.jpg';

		a = 0;
		}
	}

	document.getElementById('block6').onclick = function(){
		if (a==0) {
		document.getElementById('block6').src= 'mikasa.jpg';
		b = 'block6';
		a += 1;
		mikasa += 1;
		}
		else if (a==1) {
		document.getElementById('block6').src= 'mikasa.jpg';
		c = 'block6';
		a += 1;
			mikasa += 1;
				if (mikasa >= 1 && mikasa1 >= 1) {
					a = 0;
				}
				else{
					mikasa = 0;
					mikasa1 = 0;
				} 
		}
		else if (a==2) {
		document.getElementById(b).src = 'back.jpg';
		document.getElementById(c).src= 'back.jpg';

		a = 0;
		}
	}

	document.getElementById('block7').onclick = function(){
		if (a==0) {
		document.getElementById('block7').src= 'asuna.jpg';
		b = 'block7';
		a += 1;
		asuna += 1;
		}
		else if (a==1) {
		document.getElementById('block7').src= 'asuna.jpg';
		c = 'block7';
		a += 1;
			asuna += 1;
				if (asuna >= 1 && asuna1 >= 1) {
					a = 0;
				}
				else{
					asuna = 0;
					asuna1 = 0;
				} 
		}
		else if (a==2) {
		document.getElementById(b).src = 'back.jpg';
		document.getElementById(c).src= 'back.jpg';

		a = 0;
		}
	}

// next
	
	document.getElementById('block8').onclick = function(){
		if (a==0) {
			
		document.getElementById('block8').src= 'pacman.jpg';
		b = 'block8';
		a += 1;
		pacman1 += 1;

		}
		else if (a==1) {
		document.getElementById('block8').src= 'pacman.jpg';
		c = 'block8';
		a += 1;
			pacman1 += 1;

				if (pacman >= 1 && pacman1 >= 1) {
					a = 0;

				}
				else{
					pacman = 0;
					pacman1 = 0;
				}
		}

		else if (a==2) {
		document.getElementById(b).src = 'back.jpg';
		document.getElementById(c).src= 'back.jpg';
		a = 0;
		}
		

	}

	document.getElementById('block9').onclick = function(){
		if (a==0) {
		document.getElementById('block9').src= 'thor.jpg';
		b = 'block9';
		a += 1;
		thor1 += 1;
		}
		else if (a==1) {
		document.getElementById('block9').src= 'thor.jpg';
		c = 'block9'
		a += 1;
			thor1 += 1;
				if (thor >= 1 && thor1 >= 1) {
					a = 0;
				}
				else{
					thor = 0;
					thor1 = 0;
				}
		}
		else if (a==2) {
		document.getElementById(b).src = 'back.jpg';
		document.getElementById(c).src= 'back.jpg';

		a = 0;
		}

	}

	document.getElementById('block10').onclick = function(){
		if (a==0) {
		document.getElementById('block10').src= 'joker.jpg';
		b = 'block10';
		a += 1;
		joker1 += 1;
		}
		else if (a==1) {
		document.getElementById('block10').src= 'joker.jpg';
		c = 'block10';
		a += 1;
			joker1 += 1;
				if (joker >= 1 && joker1 >= 1) {
					a = 0;
				}
				else{
					joker = 0;
					joker1 = 0;
				}
		}
		else if (a==2) {
		document.getElementById(b).src = 'back.jpg';
		document.getElementById(c).src= 'back.jpg';

		a = 0;
		}
	}

	document.getElementById('block11').onclick = function(){
		if (a==0) {
		document.getElementById('block11').src= 'garfield.jpg';
		b = 'block11';
		a += 1;
		garfield1 += 1;
		}
		else if (a==1) {
		document.getElementById('block11').src= 'garfield.jpg';
		c = 'block11';
		a += 1;
			garfield1 += 1;
				if (garfield >= 1 && garfield1 >= 1) {
					a = 0;
				}
				else{
					garfield = 0;
					garfield1 = 0;
				} 
		}
		else if (a==2) {
		document.getElementById(b).src = 'back.jpg';
		document.getElementById(c).src= 'back.jpg';

		a = 0;
		}

	}

	document.getElementById('block12').onclick = function(){
		if (a==0) {
		document.getElementById('block12').src= 'k-on.jpg';
		b = 'block12';
		a += 1;
		kon1 += 1;
		}
		else if (a==1) {
		document.getElementById('block12').src= 'k-on.jpg';
		c = 'block12';
		a += 1;
			kon1 += 1;
				if (kon >= 1 && kon1 >= 1) {
					a = 0;
				}
				else{
					kon = 0;
					kon1 = 0;
				} 
		}
		else if (a==2) {
		document.getElementById(b).src = 'back.jpg';
		document.getElementById(c).src= 'back.jpg';

		a = 0;
		}
	}

	document.getElementById('block13').onclick = function(){
		if (a==0) {
		document.getElementById('block13').src= 'haruhi.jpg';
		b = 'block13';
		a += 1;
		haruhi1 += 1;
		}
		else if (a==1) {
		document.getElementById('block13').src= 'haruhi.jpg';
		c = 'block13';
		a += 1;
			haruhi1 += 1;
				if (haruhi >= 1 && haruhi1 >= 1) {
					a = 0;
				}
				else{
					haruhi = 0;
					haruhi1 = 0;
				} 
		}
		else if (a==2) {
		document.getElementById(b).src = 'back.jpg';
		document.getElementById(c).src= 'back.jpg';

		a = 0;
		}
	}

	document.getElementById('block14').onclick = function(){
		if (a==0) {
		document.getElementById('block14').src= 'mikasa.jpg';
		b = 'block14';
		a += 1;
		mikasa1 += 1;
		}
		else if (a==1) {
		document.getElementById('block14').src= 'mikasa.jpg';
		c = 'block14';
		a += 1;
			mikasa1 += 1;
				if (mikasa >= 1 && mikasa1 >= 1) {
					a = 0;
				}
				else{
					mikasa = 0;
					mikasa1 = 0;
				} 
		}
		else if (a==2) {
		document.getElementById(b).src = 'back.jpg';
		document.getElementById(c).src= 'back.jpg';

		a = 0;
		}
	}

	document.getElementById('block15').onclick = function(){
		if (a==0) {
		document.getElementById('block15').src= 'asuna.jpg';
		b = 'block15';
		a += 1;
		asuna1 += 1;
		}
		else if (a==1) {
		document.getElementById('block15').src= 'asuna.jpg';
		c = 'block15';
		a += 1;
			asuna1 += 1;
				if (asuna >= 1 && asuna1 >= 1) {
					a = 0;
				}
				else{
					asuna = 0;
					asuna1 = 0;
				} 
		}
		else if (a==2) {
		document.getElementById(b).src = 'back.jpg';
		document.getElementById(c).src= 'back.jpg';

		a = 0;
		}
	}






</script>

</body>
</html>