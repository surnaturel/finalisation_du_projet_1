
/* ......      traitement de la depression      ......*/

var drepa = document.getElementById('drepa');
drepa.addEventListener('click', function(){
  var hete_homoD = document.getElementById('drepa');
  var hete_homo =  document.getElementById('hete_homo');
  console.log('hete_homoD.checked');
  if(hete_homoD.checked == true){
    hete_homo.style.display = "block";
    hete_homo.setAttribute('name', 1);
  }else{
    hete_homo.style.display = 'none';
    hete_homo.setAttribute('name', 0);
  }
});

/* ......      Depression      ......*/
var element = document.getElementById('depression');
element.addEventListener('click', function() {
  var checkBox = document.getElementById("depression");
  var text = document.getElementById("block-depression");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
});

/* ......      traitement de la depression      ......*/

var traitemant = document.getElementById('depression_traitemant');
traitemant.addEventListener('click', function(){
	var valeur = document.getElementById('depression_traitemant').value;
	var depression_medicament = document.querySelector('.depression_medicament');
	console.log(valeur);
	if (valeur == 'oui') {
    	depression_medicament.style.display = "block";
  	} else {
    	depression_medicament.style.display = "none";
  	}
});  

/* ......      Avez vous accoucher a SCHIPHRAT      ......*/

var avez_vous_accou = document.getElementById('avez_vous_accou_oui');
avez_vous_accou.addEventListener('click', function(){
	var valeur = document.getElementById('avez_vous_accou_oui').value;
	var date_Accouchement = document.querySelector(".date_Accouchement");
	console.log(valeur);
	if (valeur == 'oui'){
		date_Accouchement.style.display = "block";
	} else {
    	date_Accouchement.style.display = "none";
  	}
});

var avez_vous_accoun = document.getElementById('avez_vous_accou_non');
avez_vous_accoun.addEventListener('click', function(){
  var valeur = document.getElementById('avez_vous_accou_non').value;
  var date_Accouchement = document.querySelector(".date_Accouchement");
  console.log(valeur);
  if (valeur !== 'oui'){
    date_Accouchement.style.display = "none";
  } else {
      date_Accouchement.style.display = "block";
    }
});

/* ......      Faites-vous partie du personnel travaillant au CSHSF ?      ......*/

var personelle_CSHSF = document.getElementById('personelle_CSHSF_oui');
personelle_CSHSF.addEventListener('click', function(){
  var valeur_checkbox = document.getElementById('personelle_CSHSF_non')
  var valeur = document.getElementById('personelle_CSHSF_oui').value;
  var numero_matricule = document.querySelector(".numero_matricule");
  console.log(valeur);
  if (valeur == 'personelle_CSHSF_oui'){
    numero_matricule.style.display = "block";
    valeur_checkbox.checked = false;
  } else {
      numero_matricule.style.display = "none";
    }
});

var personelle_CSHSF_non = document.getElementById('personelle_CSHSF_non');
personelle_CSHSF_non.addEventListener('click', function(){
  var valeur_checkbox = document.getElementById('personelle_CSHSF_oui')
  var valeur = document.getElementById('personelle_CSHSF_non').value;
  var numero_matricule = document.querySelector(".numero_matricule");
  console.log(valeur);
  if (valeur !== 'personelle_CSHSF_oui'){
    numero_matricule.style.display = "none";
    valeur_checkbox.checked = false;
  } else {
      numero_matricule.style.display = "block";
    }
});

/* ......      Avez-vous déjà fait des Fausses couches?       ......*/

var avez_vous_accou_F = document.getElementById('avez_vous_accou_F_oui');
avez_vous_accou_F.addEventListener('click', function(){
  var valeur = document.getElementById('avez_vous_accou_F_oui').value;
  var nombre_fausse_couche = document.querySelector(".nombre-fausse_couche");
  console.log(valeur);
  if (valeur == 'oui'){
    nombre_fausse_couche.style.display = "block";
  } else {
      nombre_fausse_couche.style.display = "none";
    }
});

var avez_vous_accou_F_non = document.getElementById('avez_vous_accou_F_non');
avez_vous_accou_F_non.addEventListener('click', function(){
  var valeur = document.getElementById('avez_vous_accou_F_non').value;
  var nombre_fausse_couche = document.querySelector(".nombre-fausse_couche");
  console.log(valeur);
  if (valeur !== 'oui'){
    nombre_fausse_couche.style.display = "none";
  } else {
      nombre_fausse_couche.style.display = "block";
    }
});

/* ......      Accouchement avant le 8ème mois:       ......*/

var ac_avant_8_mois = document.getElementById('ac_avant_8_mois');
ac_avant_8_mois.addEventListener('click', function(){
  var valeur = document.getElementById('ac_avant_8_mois');
  var preciser_terme = document.querySelector(".preciser_terme");
  var preciser_terme2 = document.getElementById('preciser_terme').name;
  console.log(preciser_terme2);
  if (valeur.checked == true){
    preciser_terme.style.display = "block";
  } else {
      preciser_terme.style.display = "none";
      console.log('name = ', preciser_terme2);
    }
});

/* ......      Avez-vous déjà fait des Fausses couches?       ......*/

var cesarienne_oui = document.getElementById('cesarienne_oui');
cesarienne_oui.addEventListener('click', function(){
  var valeur = document.getElementById('cesarienne_oui').value;
  var nombre_cesarienne = document.querySelector(".nb_cesarienne");
  console.log(valeur);
  if (valeur == 'oui'){
    nombre_cesarienne.style.display = "block";
  } else {
      nombre_cesarienne.style.display = "none";
    }
});

var cesarienne_non = document.getElementById('cesarienne_non');
cesarienne_non.addEventListener('click', function(){
  var valeur = document.getElementById('cesarienne_non').value;
  var nombre_cesarienne = document.querySelector(".nb_cesarienne");
  console.log(valeur);
  if (valeur !== 'oui'){
    nombre_cesarienne.style.display = "none";
  } else {
      nombre_cesarienne.style.display = "block";
    }
});

/* ......     Prise en charge au diagnostic anténal       ......*/

var prise_charge = document.getElementById('prise_charge');
prise_charge.addEventListener('click', function(){
  var valeur = document.getElementById('prise_charge');
  var pathologie1 = document.querySelector("#pathologie1");
  console.log(valeur);
  if (valeur.checked == true){
    pathologie1.style.display = "block";
  } else {
      pathologie1.style.display = "none";
    }
});

