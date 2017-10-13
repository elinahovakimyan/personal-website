<?php include("partials/head.php") ?>

    <title>Բարի գալուստ մենթորության ծրագիր :) </title>
    <script>
     	function check() {

     		var n = document.forms.selectForm.marz.value;

			switch (n) {
	      		case "Yerevan":
		      		document.getElementById("result").innerHTML = 'Շնորհավորում ենք: Ձեր մարզում արդեն իսկ գործում է մենթորական ծրագիրը: Մանրամասների համար կապվեք մեզ հետ հենց այսօր :)';
		      		break;
		      	case "Aragatsotn":
		      		document.getElementById("result").innerHTML = 'Ձեր մարզում մենթորական ծրագիրը դեռևս չի գործում: Եթե Դիմեք մեզ այսօր, եթե ունեք առաջարկներ :)';
		      		break;
		      	case "Ararat":
		      		document.getElementById("result").innerHTML = 'Շնորհավորում ենք: Ձեր մարզում արդեն իսկ գործում է մենթորական ծրագիրը: Մանրամասների համար կապվեք մեզ հետ հենց այսօր :)'
		      		break;
		      	case "Armavir":
		      		document.getElementById("result").innerHTML = 'Շնորհավորում ենք: Ձեր մարզում արդեն իսկ գործում է մենթորական ծրագիրը: Մանրամասների համար կապվեք մեզ հետ հենց այսօր :)';
		      		break;
		      	case "Gegharquniq":
		      		document.getElementById("result").innerHTML = 'Ձեր մարզում մենթորական ծրագիրը դեռևս չի գործում: Եթե Դիմեք մեզ այսօր, եթե ունեք առաջարկներ :)';
		      		break;
		      	case "Lori":
		      		document.getElementById("result").innerHTML = 'Ձեր մարզում մենթորական ծրագիրը դեռևս չի գործում: Եթե Դիմեք մեզ այսօր, եթե ունեք առաջարկներ :)';
		      		break;
		      	case "Kotayq":
		      		document.getElementById("result").innerHTML = 'Շնորհավորում ենք: Ձեր մարզում արդեն իսկ գործում է մենթորական ծրագիրը: Մանրամասների համար կապվեք մեզ հետ հենց այսօր :)';
		      		break;
		      	case "Tavush":
		      		document.getElementById("result").innerHTML = 'Ձեր մարզում մենթորական ծրագիրը դեռևս չի գործում: Եթե Դիմեք մեզ այսօր, եթե ունեք առաջարկներ :)';
		      		break;
		      	case "Syuniq":
		      		document.getElementById("result").innerHTML = 'Ձեր մարզում մենթորական ծրագիրը դեռևս չի գործում: Եթե Դիմեք մեզ այսօր, եթե ունեք առաջարկներ :)';	
		      		break;
		      	case "Shirak":
		      		document.getElementById("result").innerHTML = 'Շնորհավորում ենք: Ձեր մարզում արդեն իսկ գործում է մենթորական ծրագիրը: Մանրամասների համար կապվեք մեզ հետ հենց այսօր :)';
		      		break;
				default:
		      		document.getElementById("result").innerHTML = 'Խնդրում ենք ընտրել մարզը:';
		      		break;

		    }

		}
		    
      	</script>
  </head>
  <body>
    <div class="container-fluid">

      <div class="location">

<?php include("partials/header.php") ?>

        <section class="row">
          <div id="intro" class="col-md-offset-2 col-md-8">
              <h1 class="animated bounceInRight"> Ստուգիր մենթորական ծրագրի հասանելիությունը քո համայնքում</h1>
              <p class="animated bounceInLeft"> Մենք շարունակ ընդլայնվում ենք, դարձիր մենթորության մի մասնկիը այսօր: </p>
              <button class="btn btn-default animated infinite pulse"> Իմանալ ավելին </button>
          </div><!--intro-->
        </section>
    </div><!--beginning-->


    <div id="select">
	    <h1>Ընտրեք Ձեր մարզը</h1>
		
		<form id="selectForm">
			<select name="marz">
		    	<option selected>--Ընտրել--</option>
		    	<option value="Yerevan">Երևան</option>
		    	<option value="Aragatsotn">Արագածոտն</option>
		    	<option value="Ararat">Արարատ</option>
		    	<option value="Armavir">Արմավիր</option>
		    	<option value="Gegharquniq">Գեղարքունիք</option>
		    	<option value="Lori">Լոռի</option>
		    	<option value="Kotayq">Կոտայք</option>
		    	<option value="Tavush">Տավուշ</option>
		    	<option value="Syuniq">Սյունիք</option>
		    	<option value="Shirak">Շիրակ</option>
		    	<option value="VayocDzor">Վայոց Ձոր</option>
		    </select><br>

		    <input type="button" value="Ստուգել" onclick="check()">
		</form>
	    
	<br><br><br>
	<h3 id="result"></h3><br>


    </div><br><br><br>

    

<?php include("partials/footer.php") ?>