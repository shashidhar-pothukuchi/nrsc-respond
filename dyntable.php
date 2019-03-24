
<style>
#texta{
    width:70px;
    margin:20px;
}
</style>
    <script type='text/javascript'>
        var i=0;
        function addFields(){
              /*  var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                addInputs(this);
    }
        }
        function addInputs(xml){ 
*/

            console.log(i);
            
            var container = document.getElementById("container");
            for(j=0;j<10;j++){
                var input = document.createElement("input");
                var kin="z";
                input.type = "number";
                input.id = "texta";
                i+=1;
                 switch(j){
                    case 0 : kin="a";
                            break;
                    case 1 : kin="b";
                            break;
                    case 2 : kin="c";
                            break;
                    case 3 : kin="d";
                            break;
                    case 4 : kin="e";
                            break;
                    case 5 : kin="f";
                            break; 
                    case 6 : kin="g";
                            break;
                    case 7 : kin="g";
                            break;
                    case 8 : kin="g";
                            break;
                    case 9 : kin="g";
                            break;                                  
                 }
                 input.name=kin + i;
                container.appendChild(input);
            }
                // Append a line break 
                container.appendChild(document.createElement("br"));
        }
    </script>
</head>
<body>
    <button class="text-center normbutton" style="margin-left: 600px;" id="filldetails" onclick="addFields()">Add Field</button>
<div class="container container1">
    <div class="row">
        <div class="col" style="margin-left: 50px;">
            <p>Year</p>
        </div>
        <div class="col" >
            <p>Manpower</p>
        </div>
        <div class="col">
            <p>Equipment</p>
        </div>
        <div class="col" style="margin-left: 0px;">
            <p>Satellite Data</p>
        </div>
        <div class="col" >
            <p>Consumables</p>
        </div>
        <div class="col" >
            <p>Travel</p>
        </div>
        <div class="col " >
            <p>Contingency</p>
        </div>
         <div class="col" >
            <p>Others</p>
        </div>
         <div class="col" >
            <p>Overheads</p>
        </div>
         <div class="col" >
            <p>Total</p>
        </div>
    </div>
    <div id="container">
</div>
</div>
