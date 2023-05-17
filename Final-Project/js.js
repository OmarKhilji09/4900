
    window.alert("Welcome to our Services");

    function split_bill()
    {
        var amount = parseInt( document.getElementById("amount").value);
        var persons = parseInt( document.getElementById("persons").value);
        
        if (Number.isNaN(amount) || Number.isNaN(persons)){
            window.alert("One or more input is missing, please try again");
        }
        else {

        var result = amount/persons;
        result = result.toPrecision(4);
        document.getElementById("split_result").innerHTML= result; 
        }
    

    }


    function change_date(){
                setTimeout('show_date()',1000);
            }
        function show_date(){
           
            var d = new Date(); // create an object and assign it to d 
            document.getElementById("time").innerHTML = "Date: "+d.getDay() +"/"+d.getMonth()+"/"+d.getFullYear()+"<br>"+"Time: "+
            d.getHours()+"/"+d.getMinutes()+"/"+d.getSeconds();
            change_date();
        }


