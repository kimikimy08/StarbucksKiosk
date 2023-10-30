function edit_row(no){
    document.getElementById("edit_button"+no).style.display="none";
    document.getElementById("save_button"+no).style.display="block";

    var Catt=document.getElementById("Catt"+no);
    var Prod_Name=document.getElementById("Prod_Name"+no);
    var Prod_Type=document.getElementById("Prod_Type"+no);
    var Price=document.getElementById("Price"+no);
    var Des=document.getElementById("Des"+no);

    var Catt_data = Catt.innerHTML;
    var Prod_Name_data = Prod_Name.innerHTML;
    var Prod_Type_data = Prod_Type.innerHTML;
    var Price_data = Price.innerHTML;
    var Des_data = Des.innerHTML;

    Catt.innerHTML="<input type='text' id='Catt_text"+no+"' value='"+Catt_data+"'>";
    Prod_Name.innerHTML="<input type='text' id='Prod_Name_text"+no+"' value='"+Prod_Name_data+"'>";
    Prod_Type.innerHTML="<input type='text' id='Prod_Type_text"+no+"' value='"+Prod_Type_data+"'>";
    Price.innerHTML="<input type='text' id='Price_text"+no+"' value='"+Price_data+"'>";
    Des.innerHTML="<input type='text' id='Des_text"+no+"' value='"+Des_data+"'>";

}
function save_row(no){
    var Catt_val=document.getElementById("Catt_text"+no).value;
    var Prod_Name_val=document.getElementById("Prod_Name_text"+no).value;
    var Prod_Type_val=document.getElementById("Prod_Type_text"+no).value;
    var Price_val=document.getElementById("Price_text"+no).value;
    var Des_val=document.getElementById("Des_text"+no).value;

    document.getElementById("Catt"+no).innerHTML=Catt_val;
    document.getElementById("Prod_Name"+no).innerHTML=Prod_Name_val;
    document.getElementById("Prod_Type"+no).innerHTML=Prod_Type_val;
    document.getElementById("Price"+no).innerHTML=Price_val;
    document.getElementById("Des"+no).innerHTML=Des_val;

    document.getElementById("edit_button"+no).style.display="block";
    document.getElementById("save_button"+no).style.display="none";
}

function delete_row(no){
 document.getElementById("row"+no+"").outerHTML="";
}

function add_row(){
    var New_Catt=document.getElementById("New_Catt").value;
    var New_PN=document.getElementById("New_PN").value;
    var New_PT=document.getElementById("New_PT").value;
    var New_Price=document.getElementById("New_Price").value;
    var New_Des=document.getElementById("New_Des").value;

    var table=document.getElementById("data_table");
    var table_len=(table.rows.length)-1;
    var row = table.insertRow(table_len).outerHTML="<tr style='text-align: -webkit-center;' id='row"+table_len+"'> <td id='Catt"+table_len+"'>"+New_Catt+"</td> <td id='Prod_Name"+table_len+"'>"+New_PN+"</td><td id='Prod_Type"+table_len+"'>"+New_PT+"</td><td id='Price"+table_len+"'>"+New_Price+"</td><td id='Des"+table_len+"'>"+New_Des+"</td><td><input type='button' class='Button' id='edit_button"+table_len+"' value='Edit' class='edit' onclick='edit_row("+table_len+")'> <input type='button' id='save_button"+table_len+"' value='Save' class='save' onclick='save_row("+table_len+")'> <input type='button' class='Button' value='Delete' class='delete' onclick='delete_row("+table_len+")'></td></tr>";   

    document.getElementById("New_Catt").value = "";
    document.getElementById("New_PN").value = "";
    document.getElementById("New_PT").value = "";
    document.getElementById("New_Price").value = "";
    document.getElementById("New_Des").value = "";

}