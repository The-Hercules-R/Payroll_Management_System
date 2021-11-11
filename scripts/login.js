function login_to_home(){
    document.getElementById('_username').innerHTML = ''
    document.getElementById('_password').innerHTML = ''

    const username = document.getElementById('_username').value;
    const password = document.getElementById('_password').value;


    const user_visal = 'visal';
    const pass_vasal = 'visal&123456789';

// Condition login form

    if(username == ''){
        alert('Please Input Your UserName');
    }else if(password == ''){
        alert('Please Input Password')
        
    }else{
        if(username != user_visal ){
            alert('Wrong Username')
            document.getElementById('username').innerHTML = '';
        }else if(password != pass_vasal ){
            alert('Wrong password')
            document.getElementById('password').innerHTML = '';
        }else{
            <a href="../pages/home.html"></a>
        }
    }
    
}