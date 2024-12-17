function stylizeList(){
    var liste=document.getElementById("list");
    var listeenfants=liste.getElementsByTagName("li");

    for(i=0;i<listeenfants.length;i++){
        if (i % 2==1){
            listeenfants[i].style.backgroundColor="black";
            listeenfants[i].style.Color="white";
        } else {
            listeenfants[i].style.backgroundColor="blue";
            listeenfants[i].style.Color="red";
        }
    }

}