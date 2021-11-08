    function addRow(){
        var _class = document.getElementById('class').value;
        var _basic = document.getElementById('basic').value;
        var _salary = document.getElementById('salary').value;
        var _t_all = document.getElementById('t_all').value;
        var _m_all = document.getElementById('m_all').value;
        var _w_all = document.getElementById('w_all').value;

        var table = document.getElementsByClassName('table')[0];

        var newRow = table.insertRow(1);

        var cel1 = newRow.insertCell(0);
        var cel2 = newRow.insertCell(1);
        var cel3 = newRow.insertCell(2);
        var cel4 = newRow.insertCell(3);
        var cel5 = newRow.insertCell(4);
        var cel6 = newRow.insertCell(5);

        cel1.innerHTML = _class;
        cel2.innerHTML = _basic + '$';
        cel3.innerHTML = _salary + '$';
        cel4.innerHTML = _t_all + '$';
        cel5.innerHTML = _m_all + '$';
        cel6.innerHTML = _w_all + '$';


    }

    
    function reset(){
        document.getElementById('class').innerHTML ='';
        document.getElementById('basic').innerHTML = '';
        document.getElementById('salary').innerHTML = '';
        document.getElementById('t_all').innerHTML = '';
        document.getElementById('m_all').innerHTML = '';
        document.getElementById('w_all').innerHTML  = '';
    }
