/*Javascript for createpage.html*/

//Generates random login keys for each new event
window.onload = function() {
    var randomNumber =Math.floor( Math.random()*10000+1);
    var randomNumber2=Math.floor(Math.random()*10000+1);

    while(randomNumber==randomNumber2){
        randomNumber2=Math.floor(Math.random()*10000+1);
    }

    document.getElementById('skey').innerHTML = "<?php echo $tempkey ?>";
    document.getElementById('jkey').innerHTML = randomNumber2;
}

//Sets the category heading
function categorySelect(category) {
    document.getElementById("categoryheading").innerHTML = document.getElementById("category").option;
}

//Creates a duplicate of the teams form
function addTeams() {
    var form = document.getElementById("pairsform");
    var form2 = form.cloneNode(true);
    document.body.insertBefore(form2, document.getElementById("buttons"));
}