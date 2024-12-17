<html>

<head>
<title>Final Exam - Item Purchase</title>
<meta charset="UTF-8">
<style>
*{
    font-size:24px;
}

.evenr{
    background-color:pink;
}

.oddr{
    background-color:grey;
}

.clickbtn{
    cursor:pointer;
    background-color:blue;
}

table{
    table-layout: fixed;
    width: 100%;
    text-align:center;
}

</style>
</head>
<body onload="loadItems()">

<form>
<h3>Please enter the item and the price:</h3>
<label>Item:</label>
<input type="text" placeholder="Item Name" id="item">
<br/>
<label>Price:</label>
<input type="text" id="price"/>

<span class="clickbtn" onclick="addItem()">Add</span>
<input type="hidden" id="counter" value="0">
</form>
<br/>


<table>
<tbody id="basketTable">
<tr><th>Item</th><th>Price</th><th>Time</th><th>Options</th></tr>

</tbody>
</table>

<hr/>
<h4 id="totalp">Total price: 0</h4>


<script>
//now we start writing JS

//this function adds items into the basket
function addItem(){
    //get hidden input element for statistical purpose
    var counter=document.getElementById("counter");
    count=parseFloat(counter.value);

    //get price and item elements
    var priceInput=document.getElementById("price").value;
    var item=document.getElementById("item").value;
    //validate the price
    test=priceInput.match(/[0-9]+[.]?[0-9]*/);
    if (!test){
        priceInput=0;
    }else {
        priceInput=priceInput.match(/[0-9]+[.]?[0-9]*/);
    }

    //get datetime now
    var date = new Date();
    var datestr = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate() + " " +  date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();
    //add the item into our basket
    var basketTable=document.getElementById("basketTable");
    //make styles for odd number rows and even number rows different giving different classes
    if (count%2==1) {
        var addhtml="<tr class='evenr'><td>"+item+"</td><td>"+priceInput+"</td><td>"+datestr+"</td><td>";
    } else {
        var addhtml="<tr class='oddr'><td>"+item+"</td><td>"+priceInput+"</td><td>"+datestr+"</td><td>";
    }
    basketTable.innerHTML+=addhtml+"<button onclick='markItem(this)'>Mark as purchased</button>"+"<button onclick='deleteItem(this)'>Delete</button>"+"</td></tr>";
    //update total price
    var totalp=document.getElementById("totalp").innerHTML;
    //split the text to get the text and the numeric value
    totalp2=totalp.split(": ");
    totalp3=parseFloat(totalp2[1])+parseFloat(priceInput);
    document.getElementById("totalp").innerHTML=totalp2[0]+": "+totalp3;

    //update the hidden counter
    document.getElementById("counter").value=count+1;


}

function markItem(el){
    //this function will toggle the label of being purchased
    if (el.innerHTML=="Mark as purchased"){
        //get the parent node tr
        var parent=el.parentNode.parentNode;
        parent.style.opacity=0.3;
        //change btn text
        el.innerHTML="Unmark"
    } else {
        //get the parent node tr
        var parent=el.parentNode.parentNode;
        parent.style.opacity=1;
        //change btn text
        el.innerHTML="Mark as purchased";
    }

}

function deleteItem(el){
    //get the parent node tr
    var parent=el.parentNode.parentNode;
    //get information about the price
    price=parseFloat(parent.getElementsByTagName("td")[1].innerHTML);
    //delete tr
    parent.parentNode.removeChild(parent);
    //update the total
    var totalp=document.getElementById("totalp").innerHTML;
    //split the text to get the text and the numeric value
    totalp2=totalp.split(": ");
    totalp3=parseFloat(totalp2[1])-price;
    document.getElementById("totalp").innerHTML=totalp2[0]+": "+totalp3;
}

</script>
</body>
</html>