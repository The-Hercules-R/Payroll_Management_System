


function addRow(){
    const _name = document.getElementById('_name').value;
    const _address = document.getElementById('_address').value;
    const _salary = document.getElementById('_salary').value;
    const _city = document.getElementById('_city').value;
    const _bank = document.getElementById('_bank').value;
    const _pin = document.getElementById('_pin').value;
    const _mail = document.getElementById('_mail').value;
    const _mobile = document.getElementById('_mobile').value;
    const _degree = document.getElementById('_degree').value;
    const _branch = document.getElementById('_branch').value;


    const table_add = document.getElementsByClassName('add_table')[0];

    const newRow = table_add.insertRow(1);

    const cel1 = newRow.insertCell(0);
    const cel2 = newRow.insertCell(1);
    const cel3 = newRow.insertCell(2);
    const cel4 = newRow.insertCell(3);
    const cel5 = newRow.insertCell(4);
    const cel6 = newRow.insertCell(5);
    const cel7 = newRow.insertCell(6);
    const cel8 = newRow.insertCell(7);
    const cel9 = newRow.insertCell(8);
    const cel10 = newRow.insertCell(9);


    cel1.innerHTML =  _name;
    cel2.innerHTML = _address;
    cel3.innerHTML = _city;
    cel4.innerHTML = _pin;
    cel5.innerHTML = _salary + '$';
    cel6.innerHTML = _bank;
    cel7.innerHTML = _degree;
    cel8.innerHTML = _branch;
    cel9.innerHTML = _mobile;
    cel10.innerHTML = _mail;

}

function reset(){
    
    document.getElementById('_name').innerHTML ='';
    document.getElementById('_address').innerHTML='';
    document.getElementById('_salary').innerHTML='';
    document.getElementById('_city').innerHTML='';
    document.getElementById('_bank').innerHTML='';
    document.getElementById('_pin').innerHTML='';
    document.getElementById('_mail').innerHTML='';
    document.getElementById('_mobile').innerHTML='';
    document.getElementById('_degree').innerHTML='';
    cdocument.getElementById('_branch').innerHTML='';

}