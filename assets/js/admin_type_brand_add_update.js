function my_fun(str){
        if(window.XMLHttpRequest){
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.onreadystatechange = function(){
            if(this.readyState==4 && this.status==200) {
                
                document.getElementById('id_brand').innerHTML = this.responseText;
                
                if(document.getElementById('id_type').value == 0){
                    document.getElementById("id_brand").disabled = true;
                } else {
                    document.getElementById("id_brand").disabled = false;
                }
                
            }
        }

        xmlhttp.open("GET", "helper.php?idtype="+str, true);
        xmlhttp.send();
}