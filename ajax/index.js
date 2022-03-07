//document.getElementById("get").onclick = GetRequest;
document.body.onload = GetRequest;
function GetRequest() {
    var myreq = new XMLHttpRequest();
    myreq.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            if (myreq.responseTex==null){

               //console.log(this.responseText);
               // console.log(JSON.parse(myreq.responseText));
                //convert responseText to JS object
                var myObject = JSON.parse(this.responseText);
                var mytext = "";
                var countKey=0;
                let newRow = document.createElement("tr");
                for (const key in myObject[0]) {
                    let newCol = document.createElement("th");
                    newCol.className ="text-center";
                    let newContentCol = document.createTextNode(Object.keys(myObject[0])[countKey]);
                    newCol.appendChild(newContentCol);
                    newRow.appendChild(newCol);
                    countKey++;
                }
                document.getElementById("contHead").appendChild(newRow);

                for (let index = 0; index < myObject.length; index++) {
                    let newRow = document.createElement("tr");
                    for (let col in myObject[index])
                    {
                        let newCol = document.createElement("td");
                        let newContentCol = document.createTextNode(myObject[index][col]);
                        newCol.appendChild(newContentCol);
                        newRow.appendChild(newCol);
                    }
                    //console.log(typeof(newRow));
                    document.getElementById("anyData").appendChild(newRow);
                }                
            }
            }
    };
    myreq.open("GET", "listData.json", true);
    //myreq.open("GET","file.php?name=",true);
    myreq.send();

};