
function loadScreen() {
    console.log("Running AJAX");
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (){
        if(this.readyState === 4 && this.status === 200){
            document.getElementById('#ajax_test').innerHTML= this.responseText;
        }
        xhttp.open('GET','ajax_test_in_server.php',true);
        xhttp.send();
    }
}

